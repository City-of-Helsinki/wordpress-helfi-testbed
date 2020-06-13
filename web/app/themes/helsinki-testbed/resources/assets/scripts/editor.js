import '@wordpress/edit-post';
import domReady from '@wordpress/dom-ready';
import {
  unregisterBlockStyle,
  registerBlockStyle,
} from '@wordpress/blocks';
import { createHigherOrderComponent} from '@wordpress/compose';
import { addFilter } from '@wordpress/hooks';

import { init as foundation } from './common/foundation';
import { init as fontawesome } from './common/fontawesome';
import { init as accordion } from './components/accordion';
import { init as vue } from './vue';

const addComponents = (el) => vue(el, {isEditor: true}).finally(() => foundation());
/**
 * Forces image fill for Media & Text blocks with the stylized style.
 */
const withForcedImageFill = createHigherOrderComponent(BlockListBlock => {
  return (props) => {
    if (
      props.name === 'core/media-text' &&
      props.attributes.className &&
      props.attributes.className.indexOf('is-style-stylized') !== -1
    ) {
      props.attributes.imageFill = true;
    }
    return <BlockListBlock { ...props } />;
  };
}, 'withForcedImageFill' );
/**
 * Forces a default background color for Media & Text blocks with the stylized
 * style.
 */
const withDefaultBackgroundColor = createHigherOrderComponent(BlockListBlock => {
  return (props) => {
    if (
      props.name === 'core/media-text' &&
      props.attributes.className &&
      props.attributes.className.indexOf('is-style-stylized') !== -1 &&
      !props.attributes.backgroundColor
    ) {
      props.attributes.backgroundColor = 'c-kupari-kupari-light-20';
    }
    return <BlockListBlock { ...props } />;
  };
}, 'withDefaultBackgroundColor' );

domReady(() => {
  unregisterBlockStyle('core/button', 'outline');

  registerBlockStyle('core/button', {
    name: 'outline',
    label: 'Outline',
  });

  registerBlockStyle('core/media-text', {
    name: 'stylized',
    label: 'Stylized',
  });

  addFilter(
    'editor.BlockListBlock', 'sage/with-forced-image-fill',
    withForcedImageFill
  );
  addFilter(
    'editor.BlockListBlock', 'sage/with-default-background-color-fill',
    withDefaultBackgroundColor
  );

  fontawesome();
  accordion('.schema-faq', {itemSelector: '.schema-faq-section', titleSelector: '.schema-faq-question'});

  window.acf.addAction('remount', ($el) => {
    // @todo acf bug render_block_preview is not called on re-renders
    if ($el && $el[0] && $el[0].classList && $el[0].classList.contains('acf-block-preview')) {
      addComponents($el[0]);
    }
  });

  window.acf.addAction('render_block_preview', ($el) => {
    addComponents($el[0]);
  });
});

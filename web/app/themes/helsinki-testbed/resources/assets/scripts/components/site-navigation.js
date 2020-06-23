function toggleExpanded(e) {
  const el = e.target;
  const ariaExpanded = el.getAttribute('aria-expanded');
  const isExpanded = ariaExpanded === true || ariaExpanded === 'true';
  el.setAttribute('aria-expanded', !isExpanded); // ie11 requires setAttribute
}

export default function navigation(el) {
  const triggers = el.querySelectorAll('[aria-haspopup="true"]');

  for (let i = 0; i < triggers.length; i++) {
    const trigger = triggers[i];

    trigger.addEventListener('click', toggleExpanded);
  }
}

function toggleExpanded(e) {
  const el = e.target;
  const isExpanded = el.ariaExpanded === true || el.ariaExpanded === 'true';
  el.ariaExpanded = !isExpanded;
}

export default function navigation(el) {
  const triggers = el.querySelectorAll('[aria-haspopup="true"]');

  for (let i = 0; i < triggers.length; i++) {
    const trigger = triggers[i];

    trigger.addEventListener('click', toggleExpanded);
  }
}

// Animate percentage count (optional if needed)
document.querySelectorAll('.count').forEach(counter => {
  const updateCount = () => {
    const target = +counter.getAttribute('data-target');
    const count = +counter.innerText;
    const speed = 10;
    if (count < target) {
      counter.innerText = Math.ceil(count + (target - count) / speed);
      setTimeout(updateCount, 40);
    } else {
      counter.innerText = target;
    }
  };
  updateCount();
});

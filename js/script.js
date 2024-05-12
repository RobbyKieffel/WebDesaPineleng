document.addEventListener('DOMContentLoaded', function() {
  const button = document.querySelector('.button');
  const targetDiv = document.querySelector('[data-scroll-to="desaPinelengText"]');

  console.log("Button:", button); // Check if button is found
  console.log("Target Div:", targetDiv); // Check if targetDiv is found

  if (button && targetDiv) { // Check if both elements exist
    button.addEventListener('click', function() {
      targetDiv.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    });
  } else {
    console.error("Elements not found!"); // Log an error if not found
  }
});

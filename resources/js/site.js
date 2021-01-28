// The debounce function receives our function as a parameter
const debounce = (fn) => {

  // This holds the requestAnimationFrame reference, so we can cancel it if we wish
  let frame;

  // The debounce function returns a new function that can receive a variable number of arguments
  return (...params) => {
    
    // If the frame variable has been defined, clear it now, and queue for next frame
    if (frame) { 
      cancelAnimationFrame(frame);
    }

    // Queue our function call for the next frame
    frame = requestAnimationFrame(() => {
      
      // Call our function and pass any params we received
      fn(...params);
    });

  } 
};


const onScroll = () => {

  let max = 75;
  let initialSize = 50;
  let growthFactor = 25;
  let newWidth = newWidth > max ? max : (window.scrollY / growthFactor) + initialSize;

  document.getElementById('square').style.width = `${newWidth}vw`;
  document.documentElement.dataset.scroll = window.scrollY;
  
}




document.addEventListener("DOMContentLoaded", function() {
  document.body.classList.remove('no-js');
  document.body.classList.add('js');

  document.addEventListener('scroll', debounce(onScroll), { passive: true });
})
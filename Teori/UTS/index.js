document.addEventListener('DOMContentLoaded', function() {
    if (document.getElementById('typed-text')) {
      const jobArr = ['Roby Aryanata', 'Web Developer', 'Mobile Developer'];
      typeWriter(jobArr);
    }
  });
  
  function typeWriter(jobArr) {
    const typedTextElement = document.getElementById('typed-text');
    let phraseIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    const typingSpeed = 150; 
    const deleteSpeed = 75;
    const pauseBeforeDelete = 2000;
    const pauseBeforeNewPhrase = 500;
  
    function type() {
      const currentPhrase = jobArr[phraseIndex];
  
      if (isDeleting) {
        typedTextElement.textContent = currentPhrase.substring(0, charIndex - 1);
        charIndex--;
      } else {
        typedTextElement.textContent = currentPhrase.substring(0, charIndex + 1);
        charIndex++;
      }
  
      if (!isDeleting && charIndex === currentPhrase.length) {
        isDeleting = true;
        setTimeout(type, pauseBeforeDelete);
      } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        phraseIndex = (phraseIndex + 1) % jobArr.length;
        setTimeout(type, pauseBeforeNewPhrase);
      } else {
        setTimeout(type, isDeleting ? deleteSpeed : typingSpeed);
      }
    }
  
    type();
  }
  
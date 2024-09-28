function Copiar() {
      var cnpj = document.getElementById("cnpj").innerText;
      var tempInput = document.createElement("input");
      tempInput.value = cnpj;
      document.body.appendChild(tempInput);
      tempInput.select();
      document.execCommand("copy");
      document.body.removeChild(tempInput);
      var successAnimation = document.getElementById("success-animation");
      successAnimation.classList.remove('opacity-0', 'translate-x-10');
      successAnimation.classList.add('opacity-100', 'translate-x-0');
      setTimeout(function () {
        successAnimation.classList.remove('opacity-100', 'translate-x-0');
        successAnimation.classList.add('opacity-0', 'translate-x-10');
      }, 2000);
    }

    document.addEventListener('DOMContentLoaded', () => {
      const hamburgerBtn = document.getElementById('hamburger-btn');
      const closeBtn = document.getElementById('close-btn');
      const hamburgerMenu = document.getElementById('hamburger-menu');
      const overlay = document.getElementById('overlay');

      hamburgerBtn.addEventListener('click', () => {
        hamburgerMenu.classList.remove('hidden');
        hamburgerMenu.classList.add('active');
        overlay.classList.remove('hidden');
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
      });

      closeBtn.addEventListener('click', closeMenu);
      overlay.addEventListener('click', closeMenu);

      function closeMenu() {
        hamburgerMenu.classList.remove('active');
        hamburgerMenu.classList.add('hidden');
        overlay.classList.remove('active');
        overlay.classList.add('hidden');
        document.body.style.overflow = '';
      }
    });

    const leftArrow = document.querySelector('.carousel-arrow.left');
    const rightArrow = document.querySelector('.carousel-arrow.right');
    const carousel = document.querySelector('.overflow-hidden .flex');
    let offset = 0;

    leftArrow.addEventListener('click', () => {
      offset += 300;
      if (offset > 0) offset = -(carousel.scrollWidth - carousel.clientWidth);
      carousel.style.transform = `translateX(${offset}px)`;
    });

    rightArrow.addEventListener('click', () => {
      offset -= 300;
      if (Math.abs(offset) > carousel.scrollWidth - carousel.clientWidth) offset = 0;
      carousel.style.transform = `translateX(${offset}px)`;
    });
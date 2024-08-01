document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper(".swiper-container", {
    loop: true,
    speed: 1200,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    on: {
      slideChangeTransitionStart: function () {
        // Reset and animate hero content on slide change start
        const activeSlide = document.querySelector(".swiper-slide-active");
        animateHeroContent(activeSlide);
      },
    },
  });

  // Animation function
  // function animateHeroContent(slide) {
  //   const heroContent = slide.querySelector(".hero-content");
  //   const bgWrapper = slide.querySelector(".bg-wrapper");

  //   if (bgWrapper) {
  //     bgWrapper.style.transition = "none";
  //     bgWrapper.style.transform = "scale(1.2)";
  //     bgWrapper.style.opacity = "0";

  //     // Force reflow to apply the reset styles
  //     bgWrapper.offsetHeight;

  //     // Enable transition for animation
  //     bgWrapper.style.transition = "transform 3s ease-out";

  //     setTimeout(() => {
  //       bgWrapper.style.transform = "scale(1)";
  //       bgWrapper.style.opacity = "1";
  //     }, 0);
  //   }
  // }

  // Initial animation on page load
  const initialSlide = document.querySelector(".swiper-slide-active");
  animateHeroContent(initialSlide);

  // Ensure all slides are animated properly on slide change
  swiper.on("slideChange", function () {
    const activeSlide = document.querySelector(".swiper-slide-active");
    animateHeroContent(activeSlide);
  });
});

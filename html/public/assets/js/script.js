const textEl = document.getElementById("typing-text");
const texts = ["Welcome!", "Välkommen!", "Welkom!","欢迎来到中国" ];

let textIndex = 0;
let charIndex = 0;
let deleting = false;

function type() {
  if (!textEl) {
    return;
  }

  const current = texts[textIndex];
  const speed = deleting ? 40 : 60;

  if (!deleting && charIndex <= current.length) {
    textEl.textContent = current.slice(0, charIndex++);
  } else if (deleting && charIndex >= 0) {
    textEl.textContent = current.slice(0, charIndex--);
  }

  if (charIndex === current.length + 1) {
    deleting = true;
    setTimeout(type, 1000);
    return;
  }

  if (deleting && charIndex === 0) {
    deleting = false;
    textEl.textContent = " ";
    textIndex = (textIndex + 1) % texts.length;
    setTimeout(type, 500);
    return;
  }

  setTimeout(type, speed);
}

if (textEl) {
  type();
}

if (typeof particlesJS === "function" && document.getElementById("particles-js")) {
  particlesJS("particles-js", {
    particles: {
      number: { value: 80 },
      color: { value: "#ff0000" },
      shape: { type: "circle" },
      opacity: { value: 0.4 },
      size: { value: 3, random: true },
      line_linked: {
        enable: true,
        distance: 150,
        color: "#ff0000",
        opacity: 0.3,
        width: 1
      },
      move: {
        enable: true,
        speed: 1.5
      }
    },
    interactivity: {
      events: {
        onhover: { enable: true, mode: "repulse" },
        onclick: { enable: true, mode: "push" }
      },
      modes: {
        repulse: { distance: 100 },
        push: { particles_nb: 3 }
      }
    },
    retina_detect: true
  });
}

const progressBar = document.getElementById("progressBar");
if (progressBar) {
  window.addEventListener("scroll", () => {
    const scrollTop = window.scrollY;
    const docHeight = document.body.scrollHeight - window.innerHeight;
    const scrollPercent = (scrollTop / docHeight) * 100;
    progressBar.style.width = scrollPercent + "%";
  });
}

const photoSlider = document.querySelector(".photo-slider");

if (photoSlider) {
  const slides = Array.from(photoSlider.querySelectorAll(".slider-image"));
  const prevButton = photoSlider.querySelector(".slider-btn-prev");
  const nextButton = photoSlider.querySelector(".slider-btn-next");
  let currentSlide = 0;

  const showSlide = (index) => {
    slides.forEach((slide, slideIndex) => {
      slide.classList.toggle("is-active", slideIndex === index);
    });
  };

  const moveSlide = (direction) => {
    currentSlide = (currentSlide + direction + slides.length) % slides.length;
    showSlide(currentSlide);
  };

  if (slides.length > 0) {
    showSlide(currentSlide);
  }

  if (prevButton) {
    prevButton.addEventListener("click", () => moveSlide(-1));
  }

  if (nextButton) {
    nextButton.addEventListener("click", () => moveSlide(1));
  }

  photoSlider.addEventListener("keydown", (event) => {
    if (event.key === "ArrowLeft") {
      moveSlide(-1);
    }

    if (event.key === "ArrowRight") {
      moveSlide(1);
    }
  });
}

const textEl = document.getElementById("typing-text");
const texts = ["Welcome!", "Välkommen!", "Welkom!","欢迎来到中国" ];
let textIndex = 0;
let charIndex = 0;
let deleting = false;

function type() {
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

  // wait a bit before starting next word, prevents visible "jump"
  if (deleting && charIndex === 0) {
    deleting = false;
    textEl.textContent = " "; // keeps one space visible to avoid collapse
    textIndex = (textIndex + 1) % texts.length;
    setTimeout(type, 500);
    return;
  }

  setTimeout(type, speed);
}

type();

// New Code 1

particlesJS("particles-js", {
  particles: {
    number: { value: 80 },
    color: { value: "#ffffff" },
    shape: { type: "circle" },
    opacity: { value: 0.4 },
    size: { value: 3, random: true },
    line_linked: {
      enable: true,
      distance: 150,
      color: "#ffffff",
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



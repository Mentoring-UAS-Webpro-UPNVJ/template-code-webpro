document.addEventListener("DOMContentLoaded", () => {
  const navbar = document.querySelector(".nav");
  const navbarHeight = 64; // Approximate height of navbar

  // Set initial state
  updateNavbar();

  // Update navbar on scroll
  window.addEventListener("scroll", () => {
    updateNavbar();
  });

  function updateNavbar() {
    if (window.scrollY > navbarHeight) {
      navbar.classList.remove("transparent");
      navbar.classList.add("solid");
    } else {
      navbar.classList.add("transparent");
      navbar.classList.remove("solid");
    }
  }
});

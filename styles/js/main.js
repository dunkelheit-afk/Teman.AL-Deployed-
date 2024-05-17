document.addEventListener("DOMContentLoaded", function () {
  const [nav, mobileNav, menuIcon, closeIcon, mobileMenuContainer] = [
    document.querySelector("nav"),
    document.querySelector("nav.mobile-nav"),
    document.querySelector(".menu-icon"),
    document.querySelector(".mobile-menu-container .close-icon"),
    document.querySelector(".mobile-menu-container"),
  ];

  
  window.addEventListener("scroll", () => {
    if (window.pageYOffset > 60) {
      nav.classList.add("scrolled");
      mobileNav.classList.add("scrolled");
    } else {
      nav.classList.remove("scrolled");
      mobileNav.classList.remove("scrolled");
    }
  });
  
  menuIcon.addEventListener("click", () => {
    mobileMenuContainer.classList.add("active");
  });
  
  closeIcon.addEventListener("click", () => {
    mobileMenuContainer.classList.remove("active");
  });
});
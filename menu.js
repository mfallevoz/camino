function toggleMenu() {
  const menu = document.querySelector(".navbar");
  const burger = document.querySelector(".burger");

  burger.addEventListener("click", () => {
    menu.classList.toggle("show");
  });
}

toggleMenu();

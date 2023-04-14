const Nav = () => {
  const slidingNav = document.querySelector(".Sliding-Nav");
  const burgers = document.querySelectorAll(".Burger-Icon");
  const crosses = document.querySelectorAll(".Burger-Cross");



  burgers.forEach(burger => {
    burger.addEventListener("click", () => {
      slidingNav.classList.add("!translate-x-0", "!left-0");
      document.body.classList.add("overflow-hidden", "h-screen");
    });
  });

  crosses.forEach(cross => {
    cross.addEventListener("click", () => {
      slidingNav.classList.remove("!translate-x-0", "!left-0");
      document.body.classList.remove("overflow-hidden", "h-screen");
    });
  });
};

Nav();
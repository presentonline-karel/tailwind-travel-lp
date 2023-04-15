const darkModeToggle = () => {
  const themeSwitch = document.querySelector(".Theme-Switch");


  
  // Initialize theme
  if (localStorage.theme === "dark" || (!("theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
    document.documentElement.classList.add("dark");
    localStorage.theme = "dark";
  } else {
    document.documentElement.classList.remove("dark");
    localStorage.theme = "light";
  }



  // Manual theme switch
  themeSwitch.addEventListener("click", () => {
    document.documentElement.classList.toggle("dark");

    if(localStorage.theme === "dark") {
      localStorage.theme = "light";
    } else {
      localStorage.theme = "dark";
    }
  });
};

darkModeToggle();
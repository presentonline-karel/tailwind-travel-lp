const faqAccordion = () => {
  const faqItems = document.querySelectorAll(".Faq-Item");

  faqItems.forEach(faq => {
    faq.addEventListener("click", () => {
      faq.classList.toggle("pb-16px");
      faq.querySelector(".Faq-Body").classList.toggle("!max-h-none");
      faq.querySelector(".p").classList.toggle("!opacity-100");
      faq.querySelector(".Plus").classList.toggle("opacity-0");
      faq.querySelector(".Minus").classList.toggle("!opacity-100");
    });
  });
};

faqAccordion();
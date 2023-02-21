function googleTranslateElementInit() {
  new google.translate.TranslateElement(
    {
      pageLanguage: "pl",
      includedLanguages: "pl,en,de",
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
    },
    "google_translate_element"
  );
}

window.addEventListener("load", () => {
  AOS.init({
    duration: 1000,
    easing: "ease-in-out",
    once: true,
    mirror: false,
  });
});

const scrollSpy = new bootstrap.ScrollSpy(document.body, {
  target: "#navbarSupportedContent",
});

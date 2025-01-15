// Toggle du menu des catégories
const categoriesBtn = document.querySelector(".categories-btn");
const categoriesContent = document.querySelector(".categories-content");

if (categoriesBtn && categoriesContent) {
  categoriesBtn.addEventListener("mouseenter", () => {
    categoriesContent.style.display = "block";
    // Petit délai pour permettre à la transition de s'effectuer
    setTimeout(() => {
      categoriesContent.classList.add("active");
    }, 50);
  });

  const categories = document.querySelector(".categories");
  categories.addEventListener("mouseleave", () => {
    categoriesContent.classList.remove("active");
    // Attendre la fin de la transition avant de cacher
    setTimeout(() => {
      categoriesContent.style.display = "none";
    }, 300);
  });
}

// Gestion du menu mobile
const menuToggle = document.querySelector(".menu-toggle");

if (menuToggle) {
  menuToggle.addEventListener("click", () => {
    // Menu mobile toggle
    alert("Menu mobile - À implémenter selon vos besoins");
  });
}

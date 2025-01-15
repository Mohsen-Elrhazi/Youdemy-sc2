let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");

sidebarBtn.onclick = function () {
  sidebar.classList.toggle("active");
  if (sidebar.classList.contains("active")) {
    sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
  } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
};

document.addEventListener("DOMContentLoaded", function () {
  const currentPage = window.location.href;

  const links = document.querySelectorAll(".sidebar a");

  links.forEach((link) => {
    if (currentPage.includes(link.getAttribute("href"))) {
      link.classList.add("active");
    }
  });
});

// Masquer l'alerte après 3 secondes (3000 millisecondes)
setTimeout(function () {
  var alertElement = document.querySelector(".alert");
  if (alertElement) {
    alertElement.style.display = "none";
  }
}, 2000);

//  les button de ctiver et desactiver dans page client
document.querySelectorAll(".status").forEach((statusClient, index) => {
  const btn = document.querySelectorAll(".status-btn")[index];

  const isActive = statusClient.textContent.trim() === "active";

  if (isActive) {
    btn.classList.add("btn-danger");
    btn.classList.remove("btn-success");
    btn.textContent = "Désactiver";
  } else {
    btn.classList.add("btn-success");
    btn.classList.remove("btn-danger");
    btn.textContent = "Activer";
  }
});

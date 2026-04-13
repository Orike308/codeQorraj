let burger = document.getElementById("menuBurger");
let navLien = document.getElementById("navLien");
let btnCentre = document.querySelector(".btCentre");
let menuCentre = document.querySelector(".blocOver");

let fermerTimeout;

// 1. Burger Mobile
if (burger) {
    burger.addEventListener("click", () => {
        navLien.classList.toggle("mobile-open");
    });
}

// 2. Gestion Notre Centre
if (btnCentre && menuCentre) {
    // Ouverture
    btnCentre.addEventListener("mouseenter", () => {
        if (window.innerWidth > 1024) {
            clearTimeout(fermerTimeout);
            btnCentre.textContent = "▲ Notre Centre";
            menuCentre.classList.add("ouverture");
        }
    });

    // Garder ouvert quand on survole la bulle
    menuCentre.addEventListener("mouseenter", () => {
        clearTimeout(fermerTimeout);
    });

    // Fermeture avec délai quand on quitte le bouton
    btnCentre.addEventListener("mouseleave", () => {
        if (window.innerWidth > 1024) {
            fermerTimeout = setTimeout(() => {
                btnCentre.textContent = "▼ Notre Centre";
                menuCentre.classList.remove("ouverture");
            }, 300); // 300ms de sécurité (plus long)
        }
    });

    // Fermeture quand on quitte la bulle
    menuCentre.addEventListener("mouseleave", () => {
        if (window.innerWidth > 1024) {
            btnCentre.textContent = "▼ Notre Centre";
            menuCentre.classList.remove("ouverture");
        }
    });

    // Clic Mobile
    btnCentre.addEventListener("click", (e) => {
        if (window.innerWidth <= 1024) {
            e.preventDefault();
            menuCentre.classList.toggle("ouverture");
            btnCentre.textContent = menuCentre.classList.contains("ouverture") ? "▲ Notre Centre" : "▼ Notre Centre";
        }
    });
}
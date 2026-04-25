let btModificationTexte = document.querySelector(".btModificationTexte");
let FormModifTexte = document.querySelector(".LeFormModifTexte");
let croixModifTexte = document.querySelector(".croixModifTexte");


croixModifTexte.addEventListener("click", () => {
    FormModifTexte.classList.add("hoverModifTexte");
});

btModificationTexte.addEventListener("click", () => {
    FormModifTexte.classList.remove("hoverModifTexte");
});

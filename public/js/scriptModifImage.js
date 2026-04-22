function NomDuFichiez(input) {
    let text = document.getElementById("NomFichierImg");
    if (input.files.length > 0) {
        text.textContent = input.files[0].name;
    }
}

let btModification = document.querySelector(".btModificationImageTitre");
let FormModifImage = document.querySelector(".LeFormModifImage");
let croixModif = document.querySelector(".croixModif");


croixModif.addEventListener("click", () => {
    FormModifImage.classList.add("hoverModifImage");
});


btModification.addEventListener("click", () => {
    FormModifImage.classList.remove("hoverModifImage");
});
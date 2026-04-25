function NomDuFichiezImg(input) {
    let text = document.getElementById("NomFichiezImg");
    if (input.files.length > 0) {
        text.textContent = input.files[0].name;
    }
}

let btModificationImg = document.querySelector(".btModificationImg");
let FormModifImage = document.querySelector(".LeFormModifImage");
let croixModifImg = document.querySelector(".croixModifImg");


croixModifImg.addEventListener("click", () => {
    FormModifImage.classList.add("hoverModifImage");
});


btModificationImg.addEventListener("click", () => {
    FormModifImage.classList.remove("hoverModifImage");
});
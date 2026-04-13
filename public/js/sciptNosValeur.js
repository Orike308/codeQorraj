
let btCroix = document.querySelectorAll(".croiPopUp1");

let btrespect = document.querySelector("#btRespect");
let respect = document.querySelector(".respect");

let btIntégrité = document.querySelector("#btIntégrité");
let integrite = document.querySelector(".integrite");

let btAutonomie = document.querySelector("#btAutonomie");
let autonomie = document.querySelector(".autonomie");

let btBienfaisance = document.querySelector("#btBienfaisance");
let bienfaisance = document.querySelector(".bienfaisance");

let btConfidentialité = document.querySelector("#btConfidentialité");
let confidentialite = document.querySelector(".confidentialite");

for (let i = 0; i < btCroix.length; i++) {
    btCroix[i].addEventListener("click", () => { //closest me permet de trouver .popUpp1
        btCroix[i].closest(".popUp1").classList.add("hoverPopUp1");
    });
}

btrespect.addEventListener("click", () => {
    respect.classList.remove("hoverPopUp1");
});

btIntégrité.addEventListener("click", () => {
    integrite.classList.remove("hoverPopUp1");
});

btAutonomie.addEventListener("click", () => {
    autonomie.classList.remove("hoverPopUp1");
});

btBienfaisance.addEventListener("click", () => {
    bienfaisance.classList.remove("hoverPopUp1");
});

btConfidentialité.addEventListener("click", () => {
    confidentialite.classList.remove("hoverPopUp1");
});
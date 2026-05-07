let survolValais = document.querySelector(".carrerHoverValais1");
let survolFribourge = document.querySelector(".carrerHoverFribourg");

let hoverValais = document.querySelector(".nomHoverValais");
let hoverFribourg = document.querySelector(".nomHoverFribourg");

let classHoverFribourg = document.querySelector(".classHoverFribourg");
let classHoverValais = document.querySelector(".classHoverValais");

survolFribourge.addEventListener("mouseenter", () => {
    classHoverFribourg.classList.add("visible");
});

survolFribourge.addEventListener("mouseleave", () => {
    classHoverFribourg.classList.remove("visible");
});

survolValais.addEventListener("mouseenter", () => {
    classHoverValais.classList.add("visible");
});

survolValais.addEventListener("mouseleave", () => {
    classHoverValais.classList.remove("visible");
});

// // PARTI JS POUR LES POPUP DE LA PAGE NOTRE CENTRE !!! //
// let btCroix = document.querySelectorAll(".croiPopUp1");
// let expertise = document.querySelector(".expertise");
// let btExpertise = document.querySelector("#btExpertise");
// let humanite = document.querySelector(".humanite");
// let btHumanite = document.querySelector("#btHumanite");
// let soins = document.querySelector(".soins");
// let btSoins = document.querySelector("#btSoins")
// let rapidite = document.querySelector(".rapidite");
// let btRapidite = document.querySelector("#btRapidite")

// // j'ai eux un probleme a affichez plusieur popUp, ça dois venir de bt btExpertise que je ne pas pas reutiliser. mais il ne veux pas me prendre un 2em nom de classe. ça venai de queryselector qui ne doit pas etre en all
// for (let i = 0; i < btCroix.length; i++) {
//     btCroix[i].addEventListener("click", () => { //closest me permet de trouver .popUpp1
//         btCroix[i].closest(".popUp1").classList.add("hoverPopUp1");
//     });
// }

// btExpertise.addEventListener("click", () => {
//     expertise.classList.remove("hoverPopUp1");
// });

// btHumanite.addEventListener("click", () => {
//     humanite.classList.remove("hoverPopUp1");
// });

// btSoins.addEventListener("click", () => {
//     soins.classList.remove("hoverPopUp1");
// });

// btRapidite.addEventListener("click", () => {
//     rapidite.classList.remove("hoverPopUp1");
// });
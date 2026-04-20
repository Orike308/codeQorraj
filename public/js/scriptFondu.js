
// PAS SUR QUE SA MARCHE !!! a verifier

let main = document.querySelector("main");

document.querySelectorAll("a").forEach(lien => {
  lien.addEventListener("click", function (e) {

    // Pour pas casser les liens
    if (
      this.origin !== window.location.origin ||
      this.hash !== "" ||
      this.target === "_blank"
    ) {
      return;
    }

    e.preventDefault();

    main.classList.add("fondu");

    // Pour definire le temps
    setTimeout(() => {
      window.location.href = this.href;
    }, 200);
  });
});
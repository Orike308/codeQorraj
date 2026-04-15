function NomDuFichiez(input) {
    let text = document.getElementById("file-text");
    if (input.files.length > 0) {
        text.textContent = input.files[0].name;
    }
}
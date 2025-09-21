// script.js

const input = document.querySelector("#telefono");
const iti = window.intlTelInput(input, {
    initialCountry: "co", // Colombia por defecto
    preferredCountries: ["co", "us", "mx", "es"], // Opciones destacadas
    separateDialCode: true, // Muestra el indicativo separado
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
});

// Asegura que al enviar se guarde el número completo con indicativo
const form = document.querySelector(".formulario");
form.addEventListener("submit", function () {
    input.value = iti.getNumber(); // Sobrescribe el value con +57xxxxxx
});

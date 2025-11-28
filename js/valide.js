
document.getElementsByTagName('form')[0].addEventListener('submit', validateAndSubmit);
function validateAndSubmit(ev) {

    if (!validatePlusGrandQueBorne(document.querySelector('[name=info]').value, 3)) {
        alert("la chaine est trop courte");
        ev.preventDefault();
    }
}

function validatePlusGrandQueBorne(chaine, borne) {
    return typeof chaine === 'string' && chaine.trim().length > borne;

}
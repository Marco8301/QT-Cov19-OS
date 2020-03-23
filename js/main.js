

// Transform full name to initials

let inputIniciales = document.getElementById('inputIniciales');
let submitBtn = document.getElementById('submitBtn');
let checkApruebo = document.getElementById('checkApruebo');

function toInitials(input) {
    let final = "";
    var output = input.split(" ");
    for (let i = 0; i < output.length; i++) {
        var letter = output[i].substr(0, 1);
        final += letter + ".";
    }
    return final
}

// Toggle btn attribute disabled

function removeDisabled() {
    if (checkApruebo.checked === true) {
        submitBtn.removeAttribute('disabled', '')
    } else if (checkApruebo.checked === false) {
        submitBtn.setAttribute('disabled', '');
    }
}

submitBtn.addEventListener('click', () => {
    inputIniciales.value = toInitials(inputIniciales.value);
})


// Form Logic

function changeState(id) {
    switch (id) {
        case inputFebre:
            if (id.value === 'fiebre') {
                infoFebre.removeAttribute('disabled');
            } else {
                infoFebre.setAttribute('disabled', '')
            }
            break;

        case inputTos:
            if (id.value === 'tos') {
                infoTos.removeAttribute('disabled');
            } else {
                infoTos.setAttribute('disabled', '')
            }
            break;

        case inputRespirar:
            if (id.value === 'dificultad a respirar') {
                infoRespirar.removeAttribute('disabled');
            } else {
                infoRespirar.setAttribute('disabled', '')
            }
            break;

        case inputDigestivos:
            if (id.value === 'problemas digestivos') {
                infoDigestivos.removeAttribute('disabled');
            } else {
                infoDigestivos.setAttribute('disabled', '')
            }
            break;

        case contactoSi:
            if (id.value === 'si') {
                infoContacto.removeAttribute('disabled');
            }
            break;

        case contactoNo:
            if (id.value === 'no') {
                infoContacto.setAttribute('disabled', '')
            }
            break;

        case numeroSi:
            if (id.value === 'si') {
                inputTel.removeAttribute('disabled');
            }
            break;

        case numeroNo:
            if (id.value === 'no') {
                inputTel.setAttribute('disabled', '')
            }
            break;
    }
}




// Transform full name to initials

let inputIniciales = document.getElementById("inputIniciales");
let submitBtn = document.getElementById("submitBtn");
let checkApruebo = document.getElementById("checkApruebo");

// function toInitials(input) {
//     let final = "";
//     var output = input.split(" ");
//     for (let i = 0; i < output.length; i++) {
//         var letter = output[i].substr(0, 1);
//         final += letter + ".";
//     }
//     return final
// }

// submitBtn.addEventListener('click', () => {
//     inputIniciales.value = toInitials(inputIniciales.value);
// })

// Toggle btn attribute disabled

function removeDisabled() {
  if (checkApruebo.checked === true) {
    submitBtn.removeAttribute("disabled", "");
  } else if (checkApruebo.checked === false) {
    submitBtn.setAttribute("disabled", "");
  }
}

// Form Logic

function changeState(id) {
  switch (id) {
    case inputFebre:
      if (id.value === "fiebre") {
        infoFebre.removeAttribute("disabled");
      } else {
        infoFebre.setAttribute("disabled", "");
      }
      break;

    case inputTos:
      if (id.value === "tos") {
        infoTos.removeAttribute("disabled");
      } else {
        infoTos.setAttribute("disabled", "");
      }
      break;

    case inputRespirar:
      if (id.value === "dificultad a respirar") {
        infoRespirar.removeAttribute("disabled");
      } else {
        infoRespirar.setAttribute("disabled", "");
      }
      break;

    case inputDigestivos:
      if (id.value === "problemas digestivos") {
        infoDigestivos.removeAttribute("disabled");
      } else {
        infoDigestivos.setAttribute("disabled", "");
      }
      break;

    case contactoSi:
      if (id.value === "si") {
        infoContacto.removeAttribute("disabled");
      }
      break;

    case contactoNo:
      if (id.value === "no") {
        infoContacto.setAttribute("disabled", "");
      }
      break;

    case numeroSi:
      if (id.value === "si") {
        inputTel.removeAttribute("disabled");
      }
      break;

    case numeroNo:
      if (id.value === "no") {
        inputTel.setAttribute("disabled", "");
      }
      break;
  }
}

var inputGeolocDepartamento = document.getElementById(
  "inputGeolocDepartamento"
);
let inputGeolocCiudad = document.getElementById("inputGeolocCiudad");

// Avec un ajax
// $.getJSON('./js/department.json', (data) => {
//     createDepartments(data);
//     searchCiudades()
// });

// Ou alors avec l'api fetch
async function getContent(url) {
  let res = await fetch(url);
  let content = await res.json();
  return content;
}

const jsonArray = getContent("./js/department.json");

jsonArray.then((data) => {
  createDepartments(data);
  searchCiudades();
});

function createDepartments(data) {
  let listDepartments = [];

  for (let i = 0; i < data.length; i++) {
    if (!listDepartments.includes(data[i]["department"])) {
      listDepartments.push(data[i]["department"]);
    }
  }

  // Ou avec une boucle foreach
  // data.forEach(element => {
  //     if (!listDepartments.includes(element.department)) {
  //         listDepartments.push(element.department)
  //     }
  // });

  for (let y = 0; y < listDepartments.length; y++) {
    var elSelect = document.createElement("option");
    elSelect.appendChild(document.createTextNode(listDepartments[y]));
    elSelect.value = listDepartments[y];
    inputGeolocDepartamento.appendChild(elSelect);
  }
}

function searchCiudades() {
  jsonArray.then((data) => {
    // $.getJSON('./js/department.json', (data) => {

    let ciudades = [];

    for (let i = 0; i < data.length; i++) {
      if (data[i]["department"] === inputGeolocDepartamento.value)
        ciudades.push(data[i]["municipality"]);
    }

    if (inputGeolocCiudad.length === 1) {
      createCiudades(ciudades);
    } else {
      while (inputGeolocCiudad.childNodes.length > 1) {
        inputGeolocCiudad.removeChild(inputGeolocCiudad.lastChild);
      }
      var elSelect = document.createElement("option");
      elSelect.appendChild(document.createTextNode("Elige"));
      elSelect.value = "";
      inputGeolocCiudad.appendChild(elSelect);
      createCiudades(ciudades);
    }
  });
}

function createCiudades(ciudades) {
  for (let y = 0; y < ciudades.length; y++) {
    var elSelect = document.createElement("option");
    elSelect.appendChild(document.createTextNode(ciudades[y]));
    elSelect.value = ciudades[y];
    inputGeolocCiudad.appendChild(elSelect);
  }
}

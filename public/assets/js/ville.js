let url = "https://geo.api.gouv.fr/communes";
let format = "&format=json";

let villeInput = document.querySelector('#ville');
let datalist = document.querySelector('#villes');



villeInput.addEventListener('blur', () => {
    let nom = villeInput.value;
    let newUrl = url + nom + format;

    fetch(newUrl, {
        method: 'get'
    }).then(response => response.json().then(results => {
        results.forEach(res => {
            
        });
    }))

})


console.log(element.nom)
console.log(element.codesPostaux)
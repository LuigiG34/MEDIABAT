let url = "https://geo.api.gouv.fr/communes";

fetch(url, {
    method: 'get'
}).then(response => response.json().then(results => {

    results.forEach(element => {
        console.log(element.nom)
        console.log(element.codesPostaux)
    });
}))
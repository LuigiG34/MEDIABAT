/**
 * API ASSOCIE CODE POSTAL A LA/LES COMMUNE(S)
 * API ASSOCIE CODE POSTAL A LA/LES COMMUNE(S)
 * API ASSOCIE CODE POSTAL A LA/LES COMMUNE(S)
 */
let urlApi = "https://geo.api.gouv.fr/communes?codePostal=";
let format = "&format=json";

let zipcodeInput = document.querySelector('#zipcode');
let villeList = document.querySelector('select#city');

let array = [];
let optionArray = [];
let option;

function createOption() 
{
    option = document.createElement('option');
}
function fillOption(a) 
{
    option.textContent = a;
    option.value = a;
}
function appendOption()
{
    villeList.append(option);
    optionArray.push(option);
}

// push data to array
function pushData(apiData) 
{
    array = [];
    removeAllOptions()
    
    apiData.forEach(data => {
        array.push(data.nom);
    });
}

function createOptionFromArray()
{
    array.forEach(cityName => {
        createOption();
        fillOption(cityName);
        appendOption();
    })
}

function removeAllOptions()
{
    optionArray.forEach(opt => {
        opt.remove();
    })
}

zipcodeInput.addEventListener('blur', () => {
    let nom = zipcodeInput.value;
    let url = urlApi + nom + format;

    fetch(url, {
        method: 'get'
    }).then(response => response.json().then(results => {
        pushData(results);
        createOptionFromArray();
    }))
})
/**
* API ASSOCIE CODE POSTAL A LA/LES COMMUNE(S)
* API ASSOCIE CODE POSTAL A LA/LES COMMUNE(S)
* API ASSOCIE CODE POSTAL A LA/LES COMMUNE(S)
*/



/**
 * Input Verifications
 * Input Verifications
 * Input Verifications
 */
/**
 * TODO
 * INPUT EMPTY VERIF
 * PASSWORD SAME VERIF
 * EMAIL VERIF
 * Button only appears once all verif return true 
 */
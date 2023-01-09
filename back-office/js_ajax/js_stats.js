console.log('coucou')


// requête ajax qui Affiche le nombre d'utilisateurs utilisateurs
const stats_1= document.querySelector('.stats_1');
function getUser() {
    fetch('ajax_stats/ajax_stats1.php')
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            console.log(data);
            stats_1.innerHTML = data[0].nombre
        })
        .catch(function(err) {
            console.log(err);
        })
}
getUser();

// requête ajax qui Affiche le nombre d'utilisateurs utilisateurs
const stats_2= document.querySelector('.stats_2');
function getIP() {
    fetch('ajax_stats/ajax_stats2.php')
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            console.log(data);
            stats_2.innerHTML = data[0].nombre
        })
        .catch(function(err) {
            console.log(err);
        })
}
getIP();


// requête ajax qui Affiche les ttl qui sont faible < 100
const stats_3= document.querySelector('.stats_3');
function getlow() {
    fetch('ajax_stats/ajax_stats3.php')
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            console.log(data);
            stats_3.innerHTML = data[0].nombre
        })
        .catch(function(err) {
            console.log(err);
        })
}
getlow();


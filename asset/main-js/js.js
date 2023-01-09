const form = document.getElementById('inscription-form');


form.addEventListener('submit', (event) => {
    event.preventDefault(); // empêche le rechargement de la page

    const formData = new FormData(form); // récupère les données du formulaire

    fetch('inscription.php', { // envoie les données au script PHP
        method: 'POST',
        body: formData
    })
        .then((response) => response.json()) // récupère la réponse en format JSON
        .then((data) => {
            // vide les spans des erreurs
            document.querySelector('#error-nom').innerHTML = '';
            document.querySelector('#error-password').innerHTML = '';
            document.querySelector('#error-email').innerHTML = '';
            // redirige vers l'espace membre si la connexion a réussi
            if (!data.errors) {
                window.location.href = 'login.php';
            }
            // vérifie les erreurs et affiche les messages d'erreur
            if (data.errors.nom) {
                document.querySelector('#error-nom').innerHTML = data.errors.nom;
            }
            if (data.errors.password) {
                document.querySelector('#error-password').innerHTML = data.errors.password;
            }
            if (data.errors.email) {
                document.querySelector('#error-email').innerHTML = data.errors.email;
            }

        })
        .catch((error) => {
            console.error(error);
        });
});



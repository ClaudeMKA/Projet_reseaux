const form = document.getElementById('inscription-form');
form.addEventListener('submit', (event) => {
    event.preventDefault(); // empêche le rechargement de la page
    // récupère les données du formulaire
    const email = document.querySelector('#email').value;
    const password = document.querySelector('#password').value;

    // prépare les données à envoyer au script PHP
    const formData = new FormData();
    formData.append('email', email);
    formData.append('password', password);

    // envoie la requête AJAX
    fetch('lg.php', {
        method: 'POST',
        body: formData
    })
        .then((response) => response.json()) // récupère la réponse en format JSON
        .then((data) => {
            // réinitialise les erreurs
            document.querySelector('#error-email').innerHTML = '';
            document.querySelector('#error-password').innerHTML = '';

            if (data.success) {
                window.location.href = 'back-office/index.php';
            }
            // affiche les erreurs
            if (data.errors.email) {
                document.querySelector('#error-email').innerHTML = data.errors.email;
            }
            if (data.errors.password) {
                document.querySelector('#error-password').innerHTML = data.errors.password;
            }

        })
        .catch((error) => {
            console.error(error);
        });
});








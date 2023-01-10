console.log('coucou')

function hideLoadingScreen() {
    const loading = document.getElementById("loading");
    loading.style.opacity = 0;
    setTimeout(function() {
        loading.style.display = "none";
    }, 1000);
}

setTimeout(hideLoadingScreen, 3000);
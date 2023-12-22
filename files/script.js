document.addEventListener("DOMContentLoaded", function() {
    var fadeImages = document.querySelectorAll(".img-fluid");

    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function handleScroll() {
        fadeImages.forEach(function(fadeImage) {
            if (isElementInViewport(fadeImage) && !fadeImage.classList.contains("visible")) {
                fadeImage.classList.add("visible");
            }
        });
    }

    window.addEventListener("scroll", handleScroll);

    handleScroll(); // Appeler la fonction au chargement de la page
});
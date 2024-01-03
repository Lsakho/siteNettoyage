// Initialiser la carte Leaflet
        let mymap = L.map('map').setView([ 46.17877,6.12120], 13);

        // Ajouter une tuile (layer) de carte OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(mymap);

        // Ajouter un marqueur à la carte
        L.marker([46.17887,6.12119]).addTo(mymap)
            .bindPopup('Seck Sevice Nettoyage');

//image slider


// Définir les variables
const carouselContainer = document.querySelector(".carousel-container");
const slides = carouselContainer.querySelectorAll(".carousel-item");

// Initialiser le nombre de slide
let slideIndex = 0;

// Écouteur d'événements
carouselContainer.addEventListener("keydown", function(event) {
  // Définir la direction du défilement
  const direction = event.keyCode === 38 ? -1 : 1;

  // Déplacer le slide
  slideIndex += direction;
 console.log("js8 la");
  // Vérifier que le slide est dans les limites du carousel
  if (slideIndex < 0) {
    slideIndex = slides.length - 1;
  } else if (slideIndex >= slides.length) {
    slideIndex = 0;
  }

  // Définir le slide actif
  slides[slideIndex].classList.add("active");

  // Déplacer le slide
  carouselContainer.scrollLeft += direction * slides[0].offsetWidth;
});

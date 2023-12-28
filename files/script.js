// Initialiser la carte Leaflet
        let mymap = L.map('map').setView([ 46.17877,6.12120], 13);

        // Ajouter une tuile (layer) de carte OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(mymap);

        // Ajouter un marqueur à la carte
        L.marker([46.17887,6.12119]).addTo(mymap)
            .bindPopup('Hello, this is a Leaflet map marker.');
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Adresse e-mail de l'administrateur
    $adminEmail = "sakho.lamine2k19@gmail.com";

    // Sujet du message
    $sujet = "Nouveau message du formulaire de contact";

    // Corps du message
    $corpsMessage = "Nom: $nom\n";
    $corpsMessage .= "Prénom: $prenom\n";
    $corpsMessage .= "Adresse e-mail: $email\n\n";
    $corpsMessage .= "Message:\n$message";

    // Envoi de l'e-mail à l'administrateur
    mail($adminEmail, $sujet, $corpsMessage);

    // Vous pouvez également rediriger l'utilisateur après l'envoi du formulaire
    header("Location: contact.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Seck_service_nettoyage_Contact</title>
        <link rel="stylesheet" href="../files/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body class="mybody">
        <header class="container">
            <div class="page-header">
                <div class="logo">
                    <a href="../index.html">Seck Service Nettoyage</a>
                </div>
                <input type="checkbox" id="click">
    
                <label for="click" class="mainicon">
                    <div class="menu">
                        <i class='bx bx-menu'></i>
                    </div>
                </label>
                <ul>
                    <li><a href="./about.html" >À Propos</a></li>
                    <!-- <li><a href="./actualite.html">Actualité</a></li> -->
                    <li><a href="./contact.html">Contact</a></li>
    
                </ul>
                <label class="mode">
                    <input type="checkbox" id="darkModeToggle">
                    <i class='bx bxs-moon'></i>
                </label>
            </div>
        </header>
        <div class="row">
            <div class="col-md-6 mb-4">
                <img src="../image/logo.png" class="img-fluid" alt="Name_of_the_company">
            </div>
            <div class="col-md-6 mb-4">
                <p class="text">
                    Bienvenue chez Seck Nettoyage Service, votre partenaire dédié au nettoyage professionnel ! Nous vous proposons une variété de services de nettoyage adaptés tant aux particuliers qu'aux entreprises. Nos spécialités incluent le nettoyage de bâtiments, de bureaux, de rues, de maisons, d'appartements, de vitrines et de jardins. Faites confiance à notre équipe pour des espaces impeccables et une propreté éclatante.
                </p>
            </div>
        </div>
        
        <!-- <div class="headerContact d-flex flex-nowrap">
            <img src="../image/logo.png" class="img-fluid img-logoContact order-sm-first " alt="Name_of_the_company">
            <p class="text order-sm-last">
                Bienvenue chez Seck Nettoyage Service, votre partenaire dédié au nettoyage professionnel ! Nous vous proposons une variété de services de nettoyage adaptés tant aux particuliers qu'aux entreprises. Nos spécialités incluent le nettoyage de bâtiments, de bureaux, de rues, de maisons, d'appartements, de vitrines et de jardins. Faites confiance à notre équipe pour des espaces impeccables et une propreté éclatante.
            </p>
        </div> -->
        
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="mb-4">Contactez-nous</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M6.62 10.79c1.44 2.83 3.76 5.15 6.59 6.59l2.2-2.2c.28-.28.67-.36 1.02-.25c1.12.37 2.32.57 3.57.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02l-2.2 2.2Z"/></svg> <a href="tel:+41772260862">+41 77 226 08 62</a>
                    <br><br>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" fill-opacity="0" d="M12 11L4 6H20L12 11Z"><animate fill="freeze" attributeName="fill-opacity" begin="1s" dur="0.15s" values="0;0.3"/></path><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2"><rect width="18" height="14" x="3" y="5" stroke-dasharray="64" stroke-dashoffset="64" rx="1"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="64;0"/></rect><path stroke-dasharray="24" stroke-dashoffset="24" d="M3 6.5L12 12L21 6.5"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.6s" dur="0.4s" values="24;0"/></path></g></svg>    <a href="mailto:contact@example.com">contact@example.com</a>
                    <br> <br>
                    <form>
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" name="nom" class="form-control" id="nom" placeholder="Votre nom">
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Votre prénom">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Votre adresse email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" class="form-control" id="message" rows="5" placeholder="Votre message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <div class="header">
            <img src="../image/WhatsApp Image 2023-12-05 at 12.05.59.jpeg" class="img-fluid img-logo" alt="car_of_the_company">
        </div>
        
        <br><br>
        <footer>
            <p>
                copyright(©) Seck Services Nettoyage 2024 tous droits reservés
            </p>
        </footer>
        
        <script src="./script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>

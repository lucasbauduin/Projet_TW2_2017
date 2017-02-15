# Projet_TW2_2017
Repository du Projet de Technologie du WEB - 2017 - BAUDUIN Lucas &amp; DORNE Julien

Fonctionnement de l'application
-------------------------------

L'application contient un fichier .htaccess qui effectue de la réécriture de d'URL, ce fichier comporte les règles suivantes :
- index.html redirige vers index.php avec les parametres control = c_home et sortby = nom.
- credits.html redirige vers index.php avec le parametre control = c_credits.
- tri-([a-z0-9\-]+).html redirige vers index.php avec ls parametres control = c_home et sortby = la chaîne passée dans l'URL.
- station-([0-9]+).html redirige vers index.php avec ls parametres control = c_stationInfo et station = l'entier passé dans l'URL.


Le paramètre control est récupéré à l'aide d'un switch / case qui permet l'appel du contrôleur correspondant.

Les contrôleurs c_home.php et c_station.php récupère les données du web services grâce aux fonctions getStations() et getTheStation($id) puis ensuite affiches les vues correspondantes.

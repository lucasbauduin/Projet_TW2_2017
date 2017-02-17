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

À FAIRE :

Dans le fichier /ressources/javascript/script.js :
- À l'aide de document.getElementsByClass("sation"), récuprer toutes les balises <article> qui sont des éléments de la liste de stations.
- Effectuer une copie de ce tableau.
- Masquer les éléments de la liste.
- Creer les fonctions de qui permetteront de trier sur le nom des stations et le nom des communes :
  -- Lors de la pression d'une touche de clavier dans les différent champs de texte, executer les fonctions correspondantes
  -- Créer un tableau vide
  -- Elle parcourerons le tableau de départ et copirons dans le nouveau tableau vide les éléments de tableau qui corresponds au valeurs passées dans les fonctions (qui on été entrée dans les champs de text).
  -- Les fonctions retournerons ce nouveau tableau et afficherons les éléments dans la liste

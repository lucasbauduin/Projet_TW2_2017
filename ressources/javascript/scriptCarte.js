window.addEventListener("load",dessinerCarte);

// fonction de mise en place de la carte.
// Suppose qu'il existe dans le document
// un élément possédant id="cartecampus"
function dessinerCarte(){

  var stationNode = document.getElementsByClassName('station');


  // création de la carte, centrée sur le point 50.60976, 3.13909, niveau de zoom 16
  // cette carte sera dessinée dans l'élément HTML "cartecampus"
  var map = L.map('map').setView([50.63976, 3.13909], 12);

  // ajout du fond de carte OpenStreetMap
  L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
      attribution: '©️ <a href="http://osm.org/copyright">OpenStreetMap>/a> contributors'
  }).addTo(map);

  for(var i = 0; i<stationNode.length; i++) {
    var x = stationNode[i].getAttribute("data-x");
    var y = stationNode[i].getAttribute("data-y");
    var nom = stationNode[i].getAttribute("data-nom");
    var adresse = stationNode[i].getAttribute("data-adresse");
    var nbPlacesDispo = stationNode[i].getAttribute("data-nbplaces");
    var nbVelosDispo = stationNode[i].getAttribute("data-nbvelos");
    var marker = L.marker([x, y]).addTo(map).bindPopup('<p>'+nom+'<br />'+adresse+'</p><p>'+nbPlacesDispo+' Places disponibles<br />'+nbVelosDispo+' Vélos disponibles');
  }

}

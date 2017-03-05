function triparcommune(nomdelacommune) {
	var touteslesstations = document.getElementsByClassName("station");
	var communesrestantes = new Array();
	alert(touteslesstations);
	for(var commune in touteslesstations){
		if (commune.includes(nomdelacommune)){
			communesrestantes.push(commune);
		}
	}
}

function triparstation(nomdelastation) {
	var stationsrestantes = new Array();
	for(var station in touteslesstations){
		if (station.includes(nomdelastation)){
			stationsrestantes.push(station);
		}
	}
	return stationsrestantes;
}

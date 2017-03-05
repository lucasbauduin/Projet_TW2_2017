<div id="map"></div>
<section id="stationsList">
  <?php
  echo "<h2>Il y a ".count($stations)." stations disponibles</h2>";
  foreach ($stations as $station) { ?>
  <article data-libelle="<?php echo $station->fields->libelle; ?>" data-nbplaces="<?php echo $station->fields->nbPlacesDispo; ?>" data-nbvelos="<?php echo $station->fields->nbVelosDispo; ?>" data-x="<?php echo $station->fields->geo[0]; ?>" data-y="<?php echo $station->fields->geo[1]; ?>"  data-nom="<?php echo preg_replace('/\-?\d+/', '', $station->fields->nom); ?>" data-adresse="<?php echo $station->fields->adresse; ?>" class="station">
    <div class="content">
      <h3 class="stationName"><?php echo '<a href="station-'.$station->fields->libelle.'.html">'.preg_replace('/\-?\d+/', '', $station->fields->nom).'</a>'; ?></h3>
      <div class="content">
        <p class="localisation"><?php echo $station->fields->commune; ?></p>
        <p><?php echo $station->fields->nbPlacesDispo; ?> places libres, <?php echo $station->fields->nbVelosDispo; ?> vélos disponibles</p>
      </div>
    </div>
  </article>
  <?php } ?>
  <div class="fix"></div>
</section>
<section id="form">
  <div id="formblock">
    <header><h2>Filtres</h2></header>
    <select id="sort" name="sort"  onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
      <option value="tri-nom.html" <?php if($sortby == "nom") { echo 'selected="selected"'; } ?>>Tri en fonction du nom</option>
      <option value="tri-commune.html" <?php if($sortby == "commune") { echo 'selected="selected"'; } ?>>Tri en fonction de la commune</option>
    </select>
	<input type="text" onkeypress="triparnom(this.value)"/>
	<input type="text" onkeypress="triparcommune(this.value)"/>
  </div>
  <p>Une création de BAUDUIN Lucas et DORNE Julien<br />Pour l'Université de Lille 1 - <a href="credits.html">Crédits</a></p>
</section>
<div class="fix"></div>

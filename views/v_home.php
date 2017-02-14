<div id="map"></div>
<section id="stationsList">
  <?php foreach ($stations as $station) { ?>
  <article>
    <div class="content">
      <h3 class="stationName"><?php echo $station->fields->nom; ?></h3>
      <em class="localisation"><?php echo $station->fields->commune; ?></em>
      <p><?php echo $station->fields->nbPlacesDispo; ?> places libres, <?php echo $station->fields->nbVelosDispo; ?> vélos disponibles</p>
    </div>
  </article>
  <?php } ?>
  <div class="fix"></div>
</section>
<section id="form">
  <div id="formblock">
    <header><h2>Filtres</h2></header>
    <select id="sort" name="sort">
      <option value="nom">Tri en fonction du nom</option>
      <option value="commune">Tri en fonction de la commune</option>
    </select>
  </div>
</section>
<div class="fix"></div>

<div id="map"></div>
<article data-libelle="<?php echo $theStation->fields->libelle; ?>" data-nbplaces="<?php echo $theStation->fields->nbPlacesDispo; ?>" data-nbvelos="<?php echo $theStation->fields->nbVelosDispo; ?>" data-x="<?php echo $theStation->fields->geo[0]; ?>" data-y="<?php echo $theStation->fields->geo[1]; ?>"  data-nom="<?php echo preg_replace('/\-?\d+/', '', $theStation->fields->nom); ?>" data-adresse="<?php echo $theStation->fields->adresse; ?>" class="station">
    <div class="content">
      <h3 class="stationName"><?php echo '<a href="station-'.$theStation->fields->libelle.'.html">'.preg_replace('/\-?\d+/', '', $theStation->fields->nom).'</a>'; ?></h3>
      <div class="content">
        <p class="localisation"><?php echo $theStation->fields->commune; ?></p>
		<p><?php echo $theStation->fields->nom; ?></p>
		<p><?php echo $theStation->fields->adresse; ?></p>
		<p><?php echo $theStation->fields->type; ?></p>
		<p><?php echo $theStation->fields->etat; ?></p>
		<p><?php echo $theStation->fields->etatConnexion; ?></p>
        <p><?php echo $theStation->fields->nbPlacesDispo; ?> places libres, <?php echo $theStation->fields->nbVelosDispo; ?> velos disponibles</p>
      </div>
    </div>
  </article>
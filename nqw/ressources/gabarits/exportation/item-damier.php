
  <item>
	<url_domaine><?php echo URL_DOMAINE ?></url_domaine>
	<id_item><?php echo $item->getXML("id_item")?></id_item>
	<id_projet><?php echo $item->getXML("id_projet")?></id_projet>
	<titre><?php echo $item->getXML("titre")?></titre>
	<enonce><?php echo $item->getXML("enonce")?></enonce>
	<type_item>4</type_item>		
	<info_comp1_titre><?php echo $item->getXML("info_comp1_titre")?></info_comp1_titre>
	<info_comp1_texte><?php echo $item->getXML("info_comp1_texte")?></info_comp1_texte>
	<info_comp2_titre><?php echo $item->getXML("info_comp2_titre")?></info_comp2_titre>
	<info_comp2_texte><?php echo $item->getXML("info_comp2_texte")?></info_comp2_texte>
	<media_titre><?php echo $item->getXML("media_titre")?></media_titre>
	<media_texte><?php echo $item->getXML("media_texte")?></media_texte>
	<media_image><?php echo $item->getXML("media_image")?></media_image>
	<media_son><?php echo $item->getXML("media_son")?></media_son>
	<media_video><?php echo $item->getXML("media_video")?></media_video>
	<id_categorie><?php echo $item->getXML("id_categorie")?></id_categorie>
	<suivi><?php echo $item->getXML("suivi")?></suivi>
	<ponderation><?php echo $item->getXML("ponderation")?></ponderation>
	<ordre_presentation><?php echo $item->getXML("ordre_presentation")?></ordre_presentation>
	<type_etiquettes><?php echo $item->getXML("type_etiquettes")?></type_etiquettes>
	<afficher_solution><?php echo $item->getXML("afficher_solution")?></afficher_solution>
	<couleur_element><?php echo $item->getXML("couleur_element")?></couleur_element>
	<couleur_element_associe><?php echo $item->getXML("couleur_element_associe")?></couleur_element_associe>
	<afficher_masque><?php echo $item->getXML("afficher_masque")?></afficher_masque>	
	<type_elements1><?php echo $item->getXML("type_elements1")?></type_elements1>
	<type_elements2><?php echo $item->getXML("type_elements2")?></type_elements2>
	<demarrer_media><?php echo $item->getXML("demarrer_media")?></demarrer_media>
	<reponse_bonne_message><?php echo $item->getXML("reponse_bonne_message")?></reponse_bonne_message>
	<reponse_mauvaise_message><?php echo $item->getXML("reponse_mauvaise_message")?></reponse_mauvaise_message>
	<reponse_incomplete_message><?php echo $item->getXML("reponse_incomplete_message")?></reponse_incomplete_message>
	<reponse_bonne_media><?php echo $item->getXML("reponse_bonne_media")?></reponse_bonne_media>
	<reponse_mauvaise_media><?php echo $item->getXML("reponse_mauvaise_media")?></reponse_mauvaise_media>
	<reponse_incomplete_media><?php echo $item->getXML("reponse_incomplete_media")?></reponse_incomplete_media>
	<remarque><?php echo $item->getXML("remarque")?></remarque>
	<date_modification><?php echo $item->getXML("date_modification")?></date_modification>
	<date_creation><?php echo $item->getXML("date_creation")?></date_creation>
<?php for ( $i = 1; $i <= $item->getJS("reponse_total"); $i++ ) { ?>
	<reponse>
		<id_item_reponse><?php echo $item->getXML("reponse_" . $i . "_id_item_reponse")?></id_item_reponse>
		<element><?php echo $item->getXML("reponse_" . $i . "_element")?></element>
		<element_associe><?php echo $item->getXML("reponse_" . $i . "_element_associe")?></element_associe>
		<masque><?php echo $item->getXML("reponse_" . $i . "_masque")?></masque>
		<retroaction><?php echo $item->getXML("reponse_" . $i . "_retroaction")?></retroaction>
		<retroaction_negative><?php echo $item->getXML("reponse_" . $i . "_retroaction_negative")?></retroaction_negative>
		<date_creation><?php echo $item->getXML("reponse_" . $i . "_date_creation")?></date_creation>
		<date_modification><?php echo $item->getXML("reponse_" . $i . "_date_modification")?></date_modification>
	</reponse>
<?php } ?>
  </item>
	
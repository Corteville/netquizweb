<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo TXT_NETQUIZ_WEB?> - <?php echo TXT_LANGUES ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<?php include '../ressources/includes/librairies.php' ?>

	<script type="text/javascript">
	
	// Changer de page
	function changerPage(page) {

		// Vérifier si on peut changer la page
		pageCour = "<?php echo $pagination->getPageCour() ?>";

		if (page != pageCour) {
			document.frm.demande.value="langue_liste";
			document.frm.pagination_page_dest.value=page;
			document.frm.submit();
		}
	}

	function verifierSelection() {

		// Vérifier si un des checkbox est sélectionné		
		var nbSel = $('input:checkbox:checked.selectionElement').map(function () { 
			  return this.value; 
		}).size();
	
		// Si aucune sélection, désactiver tous les choix
		if (nbSel == 0) {
			$("#menuModifier").addClass("inactif");
			$("#menuDupliquer").addClass("inactif");
			$("#menuExporter").addClass("inactif");
			$("#menuImprimer").addClass("inactif");
			$("#menuCorbeille").addClass("inactif");
		}
	
		// Si une sélection, activer tous les choix
		if (nbSel == 1) {
			$("#menuModifier").removeClass("inactif");
			$("#menuDupliquer").removeClass("inactif");
			$("#menuExporter").removeClass("inactif");
			$("#menuImprimer").removeClass("inactif");
			$("#menuCorbeille").removeClass("inactif");
		}				
		
		// Désactiver les items du menu qui ne s'appliquent pas plusieurs questionnaires
		if (nbSel > 1) {
			$("#menuModifier").addClass("inactif");
			$("#menuDupliquer").removeClass("inactif");
			$("#menuExporter").removeClass("inactif");
			$("#menuImprimer").removeClass("inactif");
			$("#menuCorbeille").removeClass("inactif");
		}
	}
	
	// Démarrage
	$(document).ready(function() {

		// Resize des fenêtres inital pour affichage plus rapide de l'interface
		resizePanels();

		// Activer le clic sur les boîtes de sélection 
		$(".selectionElement").click(function() {
			verifierSelection();
		});
		
		// Activer la sélection/déselection de tous les checkboxes
	    $('#selectall').change(function () { 
		    if ($(this).attr("checked")) { 
	            $('.selectionElement').prop('checked', true);
	        } else {
	            $('.selectionElement').prop('checked', false);
	        }
		    verifierSelection();
	    });

		// Afficher aperçu au besoin
		afficherApercu('<?php echo $item->get("apercu")?>');
		
	}); 
	
</script>
	
</head>

<body id="bBLangues" onload="resizePanels();">
	<div id="bodyContenu">
		<?php include '../ressources/includes/entete.php' ?>
		
		<div id="corps">

			<div id="jqxSplitter">
				<div id="colG">
					<?php include '../ressources/includes/ss-menu-biblio1.php' ?>
				</div>  <!-- /colG -->
				
				<div id="colD">
					<div id="zoneContenu">
						<?php include '../ressources/includes/barre-rech-biblio-langue.php' ?>
						<div id="contenu">
							<div id="contenuPrincipal">

								<div class="filAriane"><h2><img src="../images/ic-langues.png" alt="<?php echo TXT_MES_LANGUES ?>" /><?php echo TXT_MES_LANGUES ?><span><a class="tools" href="bibliotheque.php?demande=langue_ajouter"><?php echo TXT_AJOUTER_UNE_NOUVELLE_LANGUE ?></a></span></h2></div>
								
								<!--  Messages -->
								<?php include '../ressources/includes/message_tableaux.php' ?>
								<!--  /Messages -->
								
								<form id="frm" name="frm" action="bibliotheque.php" method="post">
									<input type="hidden" name="pagination_nb_elements" value="<?php echo $pagination->getNbElemParPage()?>" />
									<input type="hidden" name="pagination_page" value="<?php echo $pagination->getPageCour()?>" />
									<input type="hidden" name="pagination_page_dest" value="" />
									<input type="hidden" name="tri" value="" />
									<input type="hidden" name="demande" value="langue_liste" />
		
									<table class="tblListe">
										<tr class="tblNav">
											<td class="alCe">
												<div class="menuContexte">
													<img src="../images/ic-tools.png" alt="" />
													<?php include '../ressources/includes/menu-contexte-langues-liste.php' ?>
												</div>
											</td>
											<td colspan="4">
												<div class="flDr">
													<?php include '../ressources/includes/table-nav-haut.php' ?>
												</div>
											</td>
										</tr>
											<tr>
											<th class="cCheck"><input class="noBord" id="selectall" type="checkbox" name="checkbox" value="checkbox" onclick="verifierSelection()" /></th>
											<th class="cCode"><a href="#" class="<?php echo $langue->get('tri_id_langue') ?>" onclick="changerTri('id_langue')"><?php echo TXT_CODE ?></a></th>
											<th class="c3"><a href="#" class="<?php echo $langue->get('tri_titre') ?>" onclick="changerTri('titre')"><?php echo TXT_TITRE ?></a></th>
											<th class="c4"><a href="#" class="<?php echo $langue->get('tri_remarque') ?>" onclick="changerTri('remarque')"><?php echo TXT_REMARQUE ?></a></th>
											<th class="c5 last"><a href="#" class="<?php echo $langue->get('tri_date_modification') ?>" onclick="changerTri('date_modification')"><?php echo TXT_DATE_DE_MODIFICATION ?></a></th>
										</tr>
									<?php foreach($listeLangue as $element){ ?> 									
										<tr>
											<td class="cCheck"><input class="noBord selectionElement" type="checkbox" name="langues_selection_<?php echo $element->get("id_langue")?>" value="<?php echo $element->get("id_langue")?>" /></td>
											<td><?php echo $element->get("id_prefix")?></td>
											<td class="alGa"><a href="bibliotheque.php?demande=langue_modifier&langue_id_langue=<?php echo $element->get("id_langue") ?>"><?php echo $element->get("titre")?></a></td>
											<td class="alGa"><?php echo $element->get("remarque")?></td>
											<td class="last"><?php echo $element->get("date_modification")?></td>
										</tr>
									<?php } ?>
	
										<tr class="lgLast tblNav">
											<td colspan="5" class="alDr"><?php include '../ressources/includes/table-nav-bas.php' ?></td>
										</tr>
									</table>
								</form>
							</div> <!-- /contenuPrincipal -->								
						</div> <!-- /contenu -->
					</div> <!-- /zoneContenu -->
				</div> <!-- /colD -->
			</div> <!-- /jqxSplitter -->
		</div> <!-- /corps -->
	
		<?php include '../ressources/includes/piedpage.php' ?>
	</div> <!-- /bodyContenu -->
</body>
</html>

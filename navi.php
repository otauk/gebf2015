<!--
/*
*	##############################
*	Navigation for gebf2015.de
*	Author: Manuel Buczka
*	Mail: mauel.buczka@rub.de
*	Created: 15.07.2014
*	Last Edit: 12.11.2014
*	Version: 2.1
*	Status: Release
*
*/
-->

<!-- Zuweisen des active-Status -->
<?php
/* Startseite */
if 	   ( $thisPage=="aktuelles") { $current = 'aktuelles' ;}

/* Call for Paper */
elseif ( $thisPage=="cfp" ) { $current = 'cfp' ; }

/* Wissenschaftliches Programm */
elseif ( $thisPage=="veranstaltungsformen" ) { $current = 'veranstaltungsformen'  AND $subnavi='wp_content'; }
elseif ( $thisPage=="workshops" ) { $current = 'workshops' AND $subnavi='wp_content'; }
elseif ( $thisPage=="eingeladene-vortragende" ) { $current = 'eingeladene-vortragende' AND $subnavi='wp_content' ; }
elseif ( $thisPage=="posterpreis" ) { $current = 'posterpreis' AND $subnavi='wp_content'; }
elseif ( $thisPage=="mittagsvorlesungen" ) { $current = 'mittagsvorlesungen' AND $subnavi='wp_content'; }

/* Nachwuchstagung */
elseif ( $thisPage=="nwt_allgemein" ) { $current = 'nwt_allgemein' AND $subnavi = 'nwt_content'; }
elseif ( $thisPage=="nwt_programm" ) { $current = 'nwt_programm' AND $subnavi = 'nwt_content'; }
elseif ( $thisPage=="nwt_vortragende" ) { $current = 'nwt_vortragende' AND $subnavi = 'nwt_content'; }
elseif ( $thisPage=="nwt_cfp" ) { $current = 'nwt_cfp' AND $subnavi = 'nwt_content'; }
elseif ( $thisPage=="nwt_kontakt" ) { $current = 'nwt_kontakt' AND $subnavi = 'nwt_content'; }

/* Rahmenprogramm */
elseif ( $thisPage=="rp_gesellschaftsabend" ) { $current = 'rp_gesellschaftsabend' AND $subnavi = 'rp_content'; }
elseif ( $thisPage=="rp_cocktail" ) { $current = 'rp_cocktail' AND $subnavi = 'rp_content'; }
elseif ( $thisPage=="rp_starlight" ) { $current = 'rp_starlight' AND $subnavi = 'rp_content'; }

/* Anmeldung */
elseif ( $thisPage=="anmeldung_anmeldung" ) { $current = 'anmeldung_anmeldung' AND $subnavi = 'anmeldung_content'; }
elseif ( $thisPage=="anmeldung_einreichung" ) { $current = 'anmeldung_einreichung' AND $subnavi = 'anmeldung_content'; }
elseif ( $thisPage=="anmeldung_begutachtungsverfahren" ) { $current = 'anmeldung_begutachtungsverfahren' AND $subnavi = 'anmeldung_content'; }

/* Organisatorisches */
elseif ( $thisPage=="organisatorisches_termine" ) { $current = 'organisatorisches_termine' AND $subnavi = 'organisatorisches_content'; }
elseif ( $thisPage=="organisatorisches_tagungsort" ) { $current = 'organisatorisches_tagungsort' AND $subnavi = 'organisatorisches_content'; }
elseif ( $thisPage=="organisatorisches_orientierung" ) { $current = 'organisatorisches_orientierung' AND $subnavi = 'organisatorisches_content'; }
elseif ( $thisPage=="organisatorisches_raumsausstattung" ) { $current = 'organisatorisches_raumsausstattung' AND $subnavi = 'organisatorisches_content'; }
elseif ( $thisPage=="organisatorisches_anreise" ) { $current = 'organisatorisches_anreise' AND $subnavi = 'organisatorisches_content'; }
elseif ( $thisPage=="organisatorisches_unterkuenfte" ) { $current = 'organisatorisches_unterkuenfte' AND $subnavi = 'organisatorisches_content'; }
elseif ( $thisPage=="organisatorisches_kinderbetreuung" ) { $current = 'organisatorisches_kinderbetreuung' AND $subnavi = 'organisatorisches_content'; }
elseif ( $thisPage=="organisatorisches_bochum" ) { $current = 'organisatorisches_bochum' AND $subnavi = 'organisatorisches_content'; }

/* Kontakt */
elseif ( $thisPage=="kontakt" ) { $current = 'kontakt' ; }

/* ...sonst... */
else {$current = 'none';}
?>
<style type="text/css">.<?php echo $current; ?> {background-color:rgb(141,174,16);color:#fff; display: block;}</style>

<style type="text/css">.navi ul ul.<?php echo $subnavi; ?> {display:block;}</style>



<ul class="navi">

	<a href="<?= $base;?>index.php">
		<li class="aktuelles"><i class="fa fa-fw fa-bullhorn"></i>&nbsp;Aktuelles</li>
	</a>

	<a href="<?= $base;?>sites/cfp.php">
		<li class="cfp">
			<i class="fa fa-fw fa-file-text"></i>&nbsp;Call for Papers
		</li>
	</a>

	<li class="wp">
		<i class="fa fa-fw fa-tasks"></i>&nbsp;Wissenschaftliches Programm
			<span class="more"></span>
			<ul class="wp_content">
				<a href="<?= $base;?>sites/wissenschaftliches-programm/veranstaltungsformen.php">
					<li class="veranstaltungsformen">
						&nbsp;Veranstaltungsformen
					</li>
				</a>
				<a href="<?= $base;?>sites/wissenschaftliches-programm/mittagsvorlesungen.php">
					<li clasS="mittagsvorlesungen">
						&nbsp;Mittagsvorlesungen
					</li>
				</a>
				<a href="<?= $base;?>sites/wissenschaftliches-programm/workshops.php">
					<li class="workshops">
						&nbsp;Workshops
					</li>
				</a>
				<a href="<?= $base;?>sites/wissenschaftliches-programm/eingeladene-vortragende.php">
					<li clasS="eingeladene-vortragende">
						&nbsp;Eingeladene Vortragende
					</li>
				</a>
				<a href="<?= $base;?>sites/wissenschaftliches-programm/posterpreis.php">
					<li class="posterpreis">
						&nbsp;Posterpreis
					</li>
				</a>
			</ul>
		</li>

	<li class="nwt">
		<i class="fa fa-fw fa-comment"></i>&nbsp;Nachwuchstagung
		<span class="more"></span>
			<ul class="nwt_content">
				<a href="<?= $base;?>sites/nachwuchstagung/allgemeine-informationen.php">
					<li class="nwt_allgemein">
						&nbsp;Allgemeine Informationen
					</li>
				</a>
				<a href="<?= $base;?>sites/nachwuchstagung/programm.php">
					<li class="nwt_programm">
						&nbsp;Veranstaltungsprogramm
					</li>
				</a>
				<a href="<?= $base;?>sites/nachwuchstagung/eingeladene-vortragende.php">
					<li class="nwt_vortragende">
						&nbsp;Eingeladene Vortragende
					</li>
				</a>
				<a href="<?= $base;?>sites/nachwuchstagung/call-for-abstracts-and-posters.php">
					<li class="nwt_cfp">
						&nbsp;Call for Abstracts and Posters
					</li>
				</a>
				<a href="<?= $base;?>sites/nachwuchstagung/kontakt.php">
					<li class="nwt_kontakt">
						&nbsp;Kontakt
					</li>
				</a>
			</ul>
	</li>

	<li class="rp">
		<i class="fa fa-fw fa-list-alt"></i>&nbsp;Rahmenprogramm
		<span class="more"></span>
			<ul class="rp_content">
				<a href="<?= $base;?>sites/rahmenprogramm/gesellschaftsabend.php">
					<li class="rp_gesellschaftsabend">
						&nbsp;Gesellschaftsabend
					</li>
				</a>
				<a href="<?= $base;?>sites/rahmenprogramm/cocktail-workshop.php">
					<li class="rp_cocktail">
						&nbsp;Cocktail Workshop
					</li>
				</a>
				<a href="<?= $base;?>sites/rahmenprogramm/starlight-express.php">
					<li class="rp_starlight">
						&nbsp;Starlight Express
					</li>
				</a>
			</ul>
	</li>

	<li class="anmeldung">
		<i class="fa fa-fw fa-pencil"></i>&nbsp;Anmeldung
		<span class="more"></span>
			<ul class="anmeldung_content">
				<a href="<?= $base;?>sites/anmeldung/anmeldung-zur-tagung.php">
					<li class="anmeldung_anmeldung">
						&nbsp;Anmeldung zur Tagung
					</li>
				</a>
				<a href="<?= $base;?>sites/anmeldung/einreichung-von-beitraegen.php">
					<li class="anmeldung_einreichung">
						&nbsp;Einreichung von Beitr&auml;gen
					</li>
				</a>
				<a href="<?= $base;?>sites/anmeldung/begutachtungsverfahren.php">
					<li class="anmeldung_begutachtungsverfahren">
						&nbsp;Begutachtungsverfahren
					</li>
				</a>
			</ul>
	</li>

	<li class="orga">
		<i class="fa fa-fw fa-calendar"></i>&nbsp;Organisatorisches
		<span class="more"></span>
			<ul class="organisatorisches_content">
				<a href="<?= $base;?>sites/organisatorisches/termine-und-fristen.php">
					<li class="organisatorisches_termine">
						&nbsp;Termine und Fristen
					</li>
				</a>
				<a href="<?= $base;?>sites/organisatorisches/tagungsort.php">
					<li class="organisatorisches_tagungsort">
						&nbsp;Tagungsort
					</li>
				</a>
				<a href="<?= $base;?>sites/organisatorisches/orientierung-auf-dem-campus.php">
					<li class="organisatorisches_orientierung">
						&nbsp;Orientierung auf dem Campus
					</li>
				</a>
				<a href="<?= $base;?>sites/organisatorisches/raumausstattung.php">
					<li class="organisatorisches_raumsausstattung">
						&nbsp;Raumaustattung
					</li>
				</a>
				<a href="<?= $base;?>sites/organisatorisches/anreise.php">
					<li class="organisatorisches_anreise">
						&nbsp;Anreise
					</li>
				</a>
				<a href="<?= $base;?>sites/organisatorisches/unterkuenfte.php">
					<li class="organisatorisches_unterkuenfte">
						&nbsp;Unterk&uuml;nfte
					</li>
				</a>
				<a href="<?= $base;?>sites/organisatorisches/kinderbetreuung.php">
					<li class="organisatorisches_kinderbetreuung">
						&nbsp;Kinderbetreuung
					</li>
				</a>
				 <a href="<?= $base;?>sites/organisatorisches/stadt-bochum-und-umgebung.php">
					 <li class="organisatorisches_bochum">
					 	&nbsp;Stadt Bochum und Umgebung
					 </li>
				 </a>
			</ul>
	</li>

	<a href="<?= $base;?>sites/team-und-kontakt.php">
		<li class="kontakt">
			<i class="fa fa-fw fa-group"></i>&nbsp;Team und Kontakt
		</li>
	</a>

</ul>

<script>
$(document).ready(function(){
	$('.wp, .nwt, .rp, .anmeldung, .orga').click(function() {
		$(this).find('ul').slideToggle('');
	});
});
</script>

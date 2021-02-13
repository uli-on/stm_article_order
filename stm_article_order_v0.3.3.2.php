<?php

// This is a PLUGIN TEMPLATE for Textpattern CMS.

// Copy this file to a new name like abc_myplugin.php.  Edit the code, then
// run this file at the command line to produce a plugin for distribution:
// $ php abc_myplugin.php > abc_myplugin-0.1.txt

// Plugin name is optional.  If unset, it will be extracted from the current
// file name. Plugin names should start with a three letter prefix which is
// unique and reserved for each plugin author ("abc" is just an example).
// Uncomment and edit this line to override:
$plugin['name'] = 'stm_article_order';

// Allow raw HTML help, as opposed to Textile.
// 0 = Plugin help is in Textile format, no raw HTML allowed (default).
// 1 = Plugin help is in raw HTML.  Not recommended.
# $plugin['allow_html_help'] = 1;

$plugin['version'] = '0.3.4';
$plugin['author'] = 'Stanislav Müller';
$plugin['author_uri'] = 'http://lifedraft.de';
$plugin['description'] = 'Order articles and assign them to sections by using Drag & Drop.';

// Plugin load order:
// The default value of 5 would fit most plugins, while for instance comment
// spam evaluators or URL redirectors would probably want to run earlier
// (1...4) to prepare the environment for everything else that follows.
// Values 6...9 should be considered for plugins which would work late.
// This order is user-overrideable.
$plugin['order'] = '5';

// Plugin 'type' defines where the plugin is loaded
// 0 = public              : only on the public side of the website (default)
// 1 = public+admin        : on both the public and admin side
// 2 = library             : only when include_plugin() or require_plugin() is called
// 3 = admin               : only on the admin side (no AJAX)
// 4 = admin+ajax          : only on the admin side (AJAX supported)
// 5 = public+admin+ajax   : on both the public and admin side (AJAX supported)
$plugin['type'] = '1';

// Plugin "flags" signal the presence of optional capabilities to the core plugin loader.
// Use an appropriately OR-ed combination of these flags.
// The four high-order bits 0xf000 are available for this plugin's private use
if (!defined('PLUGIN_HAS_PREFS')) define('PLUGIN_HAS_PREFS', 0x0001); // This plugin wants to receive "plugin_prefs.{$plugin['name']}" events
if (!defined('PLUGIN_LIFECYCLE_NOTIFY')) define('PLUGIN_LIFECYCLE_NOTIFY', 0x0002); // This plugin wants to receive "plugin_lifecycle.{$plugin['name']}" events

$plugin['flags'] = '2';

// Plugin 'textpack' is optional. It provides i18n strings to be used in conjunction with gTxt().
// Syntax:
// ## arbitrary comment
// #@event
// #@language ISO-LANGUAGE-CODE
// abc_string_name => Localized String

$plugin['textpack'] = <<<EOT
#@language en, en-gb, en-us
#@admin-side
stm_ao_prefs_menuitem => stm_ao Settings
#@stm_ao
stm_ao_article_order => Article Order
stm_ao_article_order_saved => Article order saved.
stm_ao_edit_article => Edit article
stm_ao_edit_image => Edit image
stm_ao_hide_articles => Hide articles
stm_ao_hide_images => Hide images
stm_ao_hints_for_using => Drag an article to a new position and click ”Save”.<br/>By dragging an article to another section you can assign it to that section.<br/>Articles can only be moved one at a time.
stm_ao_it_s_the_one_above => IT’S THE ONE ABOVE!
stm_ao_oops_push_it_please => OOPS! PUSH IT, PLEASE! YOU’LL FIND IT AS THE TOPMOST ARTICLE!
stm_ao_optional_warnings => Should you let an article go beneath the list, scroll the page down to find it.
stm_ao_prefs_h1 => Sections in stm_article_order
stm_ao_prefs_hint => Mark those sections that you don’t like displayed in the <a href="index.php?event=stm_article_order">Article Order panel</a>,<br />e.g. those that sort articles by other criteria than manually.
stm_ao_prefs_pagetop => Sections in stm_article_order
stm_ao_save => Save
stm_ao_sections_updated => Selection updated
stm_ao_show_articles => Show articles
stm_ao_show_images => Show images
stm_ao_update => Update selection
#@language de
#@admin-side
stm_ao_prefs_menuitem => stm_ao Einstellungen
#@stm_ao
stm_ao_article_order => Artikelreihenfolge
stm_ao_article_order_saved => Artikelreihenfolge gesichert.
stm_ao_edit_article => Artikel bearbeiten
stm_ao_edit_image => Bild bearbeiten
stm_ao_hide_articles => Artikel ausblenden
stm_ao_hide_images => Bilder ausblenden
stm_ao_hints_for_using => Ziehen Sie einen Artikel auf eine neue Position und klicken Sie »Sichern«.<br/>Durch Ziehen in eine andere Sektion ordnen Sie einen Artikel dieser anderen Sektion zu.<br/>Es kann immer nur ein Artikel auf einmal bewegt werden.
stm_ao_it_s_the_one_above => ES IST DER ARTIKEL OBERHALB.
stm_ao_oops_push_it_please => UPPS! BITTE EINMAL KURZ ANSTUPSEN. DER ARTIKEL FINDET SICH DANN AM ANFANG DER SEITE.
stm_ao_optional_warnings => Sollten Sie einen Artikel neben die Liste fallen lassen, finden Sie ihn am unteren Seitenende wieder.
stm_ao_prefs_h1 => Sektionen in stm_article_order
stm_ao_prefs_hint => Markieren Sie hier die Sektionen, die Sie im Fenster »<a href="index.php?event=stm_article_order">Artikelreihenfolge</a>« nicht darstellen<br/>möchten, bspw. solche, in denen Artikel nicht manuell sortiert werden sondern automatisch.
stm_ao_prefs_pagetop => Sektionen in stm_article_order
stm_ao_save => Sichern
stm_ao_sections_updated => Auswahl aktualisiert
stm_ao_show_articles => Artikel einblenden
stm_ao_show_images => Bilder einblenden
stm_ao_update => Auswahl aktualisieren
#@language es
#@admin-side
stm_ao_prefs_menuitem => Opciones de stm_ao
#@stm_ao
stm_ao_article_order => Orden de artículos
stm_ao_article_order_saved => Orden de artículos guardado.
stm_ao_edit_article => Editar artículo
stm_ao_edit_image => Editar imagen
stm_ao_hide_articles => Ocultar artículos
stm_ao_hide_images => Ocultar imágenes
stm_ao_hints_for_using => Arrastre un artículo hacia una nueva posición y pulse “guardar”.<br/>Al arrastrar a un artículo hacia una nueva sección lo asigna a esa nueva sección.<br/>Puede arrastrar un sólo artículo a la vez.
stm_ao_it_s_the_one_above => ¡ES EL ARTÍCULO DE ARRIBA!
stm_ao_oops_push_it_please => ¡UPS! ¡EMPÚJELO POR FAVOR! ENCONTRARÁ AL ARTÍCULO AL TOPE DE LA PÁGINA.
stm_ao_optional_warnings => En caso de que deje “caer” a un artículo fuera de la lista, lo encontrará al final de la página, resaltado en color naranja.
stm_ao_prefs_h1 => Secciones en stm_article_order
stm_ao_prefs_hint => Marque las secciones que no quiere alistar en el panel “<a href="index.php?event=stm_article_order">Orden de artículos</a>”,<br />por ejemplo ésas que son ordenados de manera automática de acuerdo a otros criterios y no pueden ser ordenados manualmente.
stm_ao_prefs_pagetop => Secciones en stm_article_order
stm_ao_save => Guardar
stm_ao_sections_updated => Selección actualizada
stm_ao_show_articles => Mostrar artículos
stm_ao_show_images => Mostrar imágenes
stm_ao_update => Actualizar selección
#@language fr
#@admin-side
stm_ao_prefs_menuitem => Options de stm_ao
#@stm_ao
stm_ao_article_order => Ordre (tri) des articles
stm_ao_article_order_saved => Réorganisation d’article enregistrée.
stm_ao_edit_article => Modifier l’article
stm_ao_edit_image => Modifier l’image
stm_ao_hide_articles => Masquer les articles
stm_ao_hide_images => Cacher les images
stm_ao_hints_for_using => Faites glisser un article vers une nouvelle position et cliquez sur "Enregistrer". <br/> En faisant glisser un article vers une autre section, vous pouvez l’assigner à cette section. <br/> Les articles ne peuvent être déplacés qu’un à la fois.
stm_ao_it_s_the_one_above => C’EST CELUI CI-DESSUS!
stm_ao_oops_push_it_please => OOPS! POUSSEZ-LE, S’IL VOUS PLAÎT! VOUS LE RETROUVEREZ COMME L’ARTICLE LE PLUS HAUT !
stm_ao_optional_warnings => Si vous laissez un article aller sous la liste, faites défiler la page vers le bas pour le retrouver.
stm_ao_prefs_h1 => Sections dans stm_article_order
stm_ao_prefs_hint => Marquez les sections que vous ne souhaitez pas afficher dans le <a href="index.php?event=stm_article_order"> panneau Ordre (tri) des articles </a>, p. ex. ceux qui trient les articles par d’autres critères que manuellement.
stm_ao_prefs_pagetop => Sections dans stm_article_order
stm_ao_save => Sauvegarder
stm_ao_sections_updated => Sélection mise à jour
stm_ao_show_articles => Afficher les articles
stm_ao_show_images => Voir les images
stm_ao_update => Mettre à jour la sélection
EOT;
// End of textpack

if (!defined('txpinterface'))
        @include_once('zem_tpl.php');

# --- BEGIN PLUGIN CODE ---
// Plugin code goes here.  No need to escape quotes.

global $spr_exclude_debug,$spr_exclude_db_debug,$spr_sql_fields;

$spr_sql_fields = 'name,title,spr_exclude';


if(@txpinterface == 'admin') {

	$spr_exclude_debug = 0; // display admin debug info
	$spr_exclude_db_debug = 0; // display database debug info

	add_privs('stm_article_order','1,2,3');
	register_tab('presentation', 'stm_article_order', gTxt('stm_ao_article_order'));
	register_callback('stm_article_order','stm_article_order');

	// spr_section_exclude additions
	// with many thanks and huge ackowledgement to adi_menu from which much code has been adapted

	spr_section_exclude_init();

}

function spr_section_exclude_init() {

	global $prefs,$event,$spr_exclude_debug,$spr_exclude_db_debug,$spr_sql_fields;

	if ($spr_exclude_debug) {
		echo "spr_section_init start";
	}

	$spr_section_exclude_installed = spr_section_exclude_installed();

	// plugin lifecycle
	register_callback('spr_section_exclude_lifecycle','plugin_lifecycle.stm_article_order');

	register_callback('spr_section_exclude_install','plugin_lifecycle.stm_article_order','installed');
	register_callback('spr_section_exclude_uninstall','plugin_lifecycle.stm_article_order', 'deleted');
//	register_callback('my_enable_routine','plugin_lifecycle.stm_article_order', 'enabled');;
//	register_callback('my_disable_routine','plugin_lifecycle.stm_article_order', 'disabled');

	// set privilege level
	add_privs('spr_section_exclude','1,2');

	// add tab under Extensions
	register_tab('extensions','spr_section_exclude',gTxt('stm_ao_prefs_menuitem'));
	register_callback('spr_section_exclude','spr_section_exclude');

	// style
	if ($event == 'spr_section_exclude')
		register_callback('spr_section_exclude_style','admin_side','head_end');

}


// original plugin code below

function stm_article_order(){
	global $img_dir;
	$tmp = "<div id='wrapper'><h1>".gTxt('stm_ao_article_order')."</h1> <!-- <p class='hint'>".gTxt('stm_ao_hints_for_using')." --> <!-- <br /><span>".gTxt('stm_ao_optional_warnings')."</span></p> --> ";

	if($navigation = gps("navigation")){
		parse_str($navigation, $nav);
		foreach ($nav as $arr) {
			foreach($arr as $section => $children){
				foreach($children as $position => $ID){
					safe_update("textpattern", "position = $position, Section = '$section'", "ID = $ID");
				}
			}
		}
		$tmp .= '<div id="messagepane"><span class="messageflash success" id="message"><span class="ui-icon ui-icon-check"></span> '.gTxt("stm_ao_article_order_saved").'<a class="close" href="#close" title="'.gTxt("close").'">×</a></span></div>';
	}
	pagetop(gTxt("stm_ao_article_order"));
	stm_article_order_css();

	$tmp .= sprintf("<form action='%s' method='post' class='stm_save'>
		<input type='button' class='publish' value='".gTxt('stm_ao_save')."' name='save_navigation'/>
		<input type='hidden' name='navigation' value='' class='array_navigation'/><br /><br />
	</form><p>
	<a href='javascript:void(0);' class='artdisp-on'>".gTxt('stm_ao_show_articles')."</a><a href='javascript:void(0);' class='artdisp-off'>".gTxt('stm_ao_hide_articles')."</a><a href='javascript:void(0);' class='imgdisp-on'>".gTxt('stm_ao_show_images')."</a><a href='javascript:void(0);' class='imgdisp-off'>".gTxt('stm_ao_hide_images')."</a></p>", $GLOBALS["_SERVER"]["REQUEST_URI"]);

	$sections = getRows("select * from ".safe_pfx('txp_section')." where name != 'default' and spr_exclude = '0' order by title "); // sectionsort

	$tmp .= "\n\n<ul id='navigation'>\n";
	foreach($sections as $section){
		$tmp .= sprintf('<li id="section_%s" class="section">',$section['name']);
		$tmp .= '<span class="section_name"><a class="toggler">'.$section["title"].'</a></span><ul class="fold" style="display: block;"><a class="sortable" style="-moz-user-select: none;"></a></ul>';

		$articles = getRows("select * from ".safe_pfx('textpattern')." where Section = '".$section['name']."' order by position");
		if(!empty($articles)){
			$tmp .= '<ul class="fold">';
			foreach($articles as $article){
				$tmp .= sprintf('<li id="article_%d" class="article sortable">', $article['ID']);

				/* [Thanks to MattD and jens31 for the following code block that brings support for PNG + GIF thumbnails.]
				By using "is_numeric" we can confirm that there is an article id and that the value in that field isn't a url or a list of ids. */

				if(is_numeric($article['Image'])){
                    $rs = safe_rows('ext,id', 'txp_image', 'id in ('.$article['Image'].')');
                    extract($rs);
                    $tmp .= '<span class="article_title status_'.$article['Status'].'"><a href="index.php?event=image&amp;step=image_edit&amp;id=' . $article['Image'] . '" title="'.gTxt("stm_ao_edit_image").' ID ' . $article['Image'] . '" class="image-edit"><img class="article-img" src="'.hu.$img_dir.'/' . $rs[0]['id'] . 't' . $rs[0]['ext'] . '" /></a>'.$article['Title']." <em class='article_id'><a title='".gTxt('stm_ao_edit_article')." ID ".$article['ID']."' href='index.php?event=article&amp;step=edit&amp;ID=".$article['ID']."'>(".$article['ID'].")</a></em></span>";
                } else if (is_string($article['Image'])) {
                    $img = explode(",", $article['Image']);
                    if ($img[0]) {
                        $rs = safe_rows('ext,id', 'txp_image', 'id in ('.$img[0].')');
                        extract($rs);
                        $tmp .= '<span class="article_title status_'.$article['Status'].'"><a href="index.php?event=image&amp;step=image_edit&amp;id=' . $img[0] . '" title="'.gTxt("stm_ao_edit_image").' ID ' . $img[0] . '" class="image-edit"><img class="article-img" src="'.hu.$img_dir.'/' . $rs[0]['id'] . 't' . $rs[0]['ext'] . '" /></a>'.$article['Title']." <em class='article_id'><a title='".gTxt('stm_ao_edit_article')." ID ".$article['ID']."' href='index.php?event=article&amp;step=edit&amp;ID=".$article['ID']."'>(".$article['ID'].")</a></em></span>";
                    } else {
                        $tmp .= '<span class="no-image article_title status_'.$article['Status'].'">'.$article['Title']." <em class='article_id'><a title='".gTxt('stm_ao_edit_article')." ID ".$article['ID']."' href='index.php?event=article&amp;step=edit&amp;ID=".$article['ID']."'>(".$article['ID'].")</a></em></span>";
					}
                }


				$tmp .= "</li>";
			}
			$tmp .= "<a class='sortable'></a></ul>";
		}
		$tmp .= "</li>\n";
	}
	$tmp .= "</ul><p>
	<a href='javascript:void(0);' class='artdisp-on'>".gTxt('stm_ao_show_articles')."</a><a href='javascript:void(0);' class='artdisp-off'>".gTxt('stm_ao_hide_articles')."</a><a href='javascript:void(0);' class='imgdisp-on'>".gTxt('stm_ao_show_images')."</a><a href='javascript:void(0);' class='imgdisp-off'>".gTxt('stm_ao_hide_images')."</a></p>";
	echo $tmp;

	$tmp2 = sprintf('<form action="%s" method="post" class="stm_save">
		<input type="button" class="publish" value="'.gTxt("stm_ao_save").'" name="save_navigation"/>
		<input type="hidden" name="navigation" value="" class="array_navigation"/><br /><br />
	</form>', $GLOBALS["_SERVER"]["REQUEST_URI"]);
	echo $tmp2;
	echo("</div>"); // Wrapper

	stm_article_order_js();
}

function create_article_position(){
	$columns = getRows("show columns from ".safe_pfx("textpattern"));
	foreach($columns as $column){
		if($column["Field"] == "position"){
			return;
		}
	}
	safe_query("ALTER TABLE ".safe_pfx("textpattern")." ADD position INT NOT NULL DEFAULT '0';");
}


// spr_section_exclude additions
// adds a column to txp_section to indicate whether or not section is included in stm_article_order tab


function spr_section_exclude($event, $step) {
// spr_section_exclude admin

	global $prefs;

	$installed = spr_section_exclude_installed();

	if ($installed) {
		if ($step == "update") {
	   		pagetop(gTxt("stm_ao_prefs_pagetop"),gTxt("stm_ao_sections_updated"));
			$exclude = doStripTags(ps('exclude'));
			$sections = spr_get_sections();
			spr_exclude_update($sections,$exclude);
		}
		else // do nothing
		   	pagetop(gTxt("stm_ao_prefs_pagetop"));
	}
	else { // not installed
	}

	if ($installed) {
		// get to work
		$db_sections = spr_get_sections();
	}

	$tmp3 = "<div id='wrapper'><h1>".gTxt('stm_ao_prefs_h1')."</h1><p class='hint'>".gTxt('stm_ao_prefs_hint')."</a>";
	echo $tmp3;

	// output spr_exclude settings table
	echo form(
		startTable('list','',"edit-table txp-list").
		tr(
			hcell(gTxt('section')).
			hcell(gTxt('title')).
			hcell(gTxt('exclude'))
		).
		spr_exclude_display_settings($db_sections).
		endTable().
		tag(
			fInput("submit","update",gTxt("stm_ao_update"),"smallerbox").
			eInput("spr_section_exclude").sInput("update"),
			'div'
		)
		,''
		,''
		,'post'
		,'spr_exclude_form'
	);

}


function spr_exclude_display_settings($sections) {
// generate section's table row in admin settings table
	global $prefs;

	$out = '';
	foreach ($sections as $index => $section) {
		$title = $section['title'];
		$exclude = $section['spr_exclude'];
		$out .= tr(
			// section name & link to section tab
			tda('<a href="http://'.$prefs['siteurl'].'/textpattern/?event=section&amp;step=section_edit&amp;name='.$index.'">'.$index.'</a>')
			.tda(htmlspecialchars($title))
			.tda(checkbox("exclude[$index]", "1", $exclude))
		);
	}
	return $out;
}


function spr_section_exclude_style() {
// some style for the admin page
	echo
		'<style type="text/css">
			h2 { font-weight:bold }
			.spr_exclude_form { margin-top:2em; }
			.spr_exclude_form div { margin-top:2em }
			#page-spr_section_exclude .txp-list { width: auto;}
		</style>';
}


function spr_get_sections() {
// get section information from txp_section table in database
	global $spr_sql_fields;

	$sql_tables = safe_pfx('txp_section');
	$rs = safe_query("SELECT ".$spr_sql_fields." FROM ".$sql_tables." WHERE name != 'default' ORDER BY name");
	while ($a = nextRow($rs)) {
		extract($a); // set 'name','title','parent' etc in $a
		$out[$name] = $a;
	}
	return $out;
}


function spr_exclude_update($sections,$exclude) {
// update txp_section table in database

	foreach ($sections as $index => $section) {
		$where = 'name="'.$index.'"';
		empty($exclude[$index]) ? $set = 'spr_exclude="0"' : $set = 'spr_exclude="1"';
		safe_update('txp_section',$set,$where);
	}
}


function spr_exclude_column_found($column) {
// check for presence of a column in txp_section table
global $spr_exclude_db_debug;

	$rs = safe_query('SELECT * FROM '.safe_pfx('txp_section'),$spr_exclude_db_debug);
	$a = nextRow($rs);
	return array_key_exists($column, $a);
}

function spr_section_exclude_installed() {
// if 'spr_exclude' column present then assume spr_section_exclude is installed
	return(spr_exclude_column_found('spr_exclude'));
}

function spr_section_exclude_install() {
// add spr_exclude column to txp_section table
// note: TINYINT(1) DEFAULT 0 = BOOLEAN DEFAULT FALSE
global $spr_exclude_db_debug;

	if (spr_section_exclude_installed())
		return TRUE;
	else {
		create_article_position();
		return safe_query("ALTER TABLE ".safe_pfx("txp_section")." ADD spr_exclude TINYINT(1) DEFAULT 0 NOT NULL;",$spr_exclude_db_debug);
	}
}

function spr_section_exclude_uninstall() {
// remove spr_exclude column from txp_section table
global $spr_exclude_db_debug;

	$res = safe_query("ALTER TABLE ".safe_pfx("txp_section")." DROP COLUMN spr_exclude;",$spr_exclude_db_debug);
	return $res;
}


function spr_section_exclude_lifecycle($event,$step) {
// a matter of life & death
// $event:	"plugin_lifecycle.stm_article_order"
// $step:	"installed", "enabled", "disabled", "deleted"
// TXP 4.5: reinstall/upgrade only triggers "installed" event (now have to manually detect whether upgrade required)
global $spr_exclude_debug;

if ($spr_exclude_debug) {
	echo "spr_section_exclude_lifecycle start";
}

	$result = '?';
	if (($step == 'enabled') or ($step = 'installed')) {
			$result = spr_section_exclude_install();
	}
	else if ($step == 'deleted') {
		$result = spr_section_exclude_uninstall();
	}
	if ($spr_exclude_debug){
		echo "Event=$event Step=$step Result=$result";
	}
}

// back to your usual programming

function stm_article_order_css(){

echo

	'<style type="text/css" media="screen">'.n.
'		.article_title.status_1:after {content: "'.gTxt("draft").'"}'.n.
'		.article_title.status_2:after {content: "'.gTxt("hidden").'"}'.n.
'		.article_title.status_3:after {content: "'.gTxt("pending").'"}'.n.
'		.article_title.status_4:after {content: "'.gTxt("live").'"}'.n.
'		.article_title.status_5:after {content: "'.gTxt("sticky").'"}'.n.
	'</style>'
	;

echo <<<EOF
	<style type="text/css" media="screen">
		#wrapper {
			width: 60%;
			margin: 0 auto;
			position: relative;
			}

		#masthead #nav li ul {z-index: 999;} /* puts the Remora menu back on top that became inaccessible by the above position:relative */


		#navigation {
			overflow: hidden;
			font-size: 1.05em;
            padding-left: 0 !important;
			}

		.stm_save {
			text-align: right;
			position: relative;
			height: 0;
			}

		.publish {
			margin-right: 0px !important;
			text-align: center;
			}

	/*	ul#navigation li.section ul {
			display: none;
			}*/

		#navigation li,
		#navigation ul {
			margin: 0;
			padding: 0;
			list-style: none;
			}


		#navigation .section {
			float: left;
			width: 100%;
			/*margin: 10px 0;
			margin-right: 10px;*/
			margin-bottom: 1em !important;
			}


		#navigation .section span {
			font-weight: bold;
			letter-spacing: 0.1em;
			display: block;
			background: #FFD438;
			text-transform: uppercase;
			padding: 3px;
			border-bottom: 5px solid #fff;
			}

		#navigation .section span a.image-edit {
            display: inline-block;
			}

		img.article-img {
			width: 80px;
			display: none;
			margin-right: 20px;
			cursor: pointer;
			}

		img.article-img[src*=","], img.article-img[src*="/t."] {
			display: none !important;
			}

		em.article_id a {
			display: inline-block !important;
			float: left;
			margin-right: 1em;
			text-align: right;
			width: 3.5em;
			}

		#navigation .section span a:hover {
			text-decoration: none;
			}

		#navigation .section li span {
			text-decoration: none;
			font-weight: normal;
			letter-spacing: normal;
			background: #eee;
			text-transform: none;
            border-bottom: 0;
            margin-bottom: 5px;
			cursor: row-resize; /* ONCE WAS: move */
			}

		li.article span.article_title:first-child {
			padding-left: 80px;
			}

		#wrapper #navigation .drop_area {
			color:#FFFFFF;
			font-weight:bold;
			background: #FFFFFF;
			text-transform: uppercase;
			}

		#navigation .section span a.toggler {
			cursor: pointer;
			color: #000;
			padding-left: 7px;
			padding-top: 3px;
			display: block;
			vertical-align: text-top;
			}

		#dragHelper {
			color: #000;
			padding: 2px;
			display: block;
			background: #BBBBBB;
            /*font-size: 10px;*/
			border-top: 2px solid transparent;
			border-bottom: 2px solid transparent;
			}

		.update {
			display: block;
			text-align: center;
			width: 100%;
            border-bottom: 2px solid #FFD43B;
            border-top: 2px solid #FFD43B;
			margin-bottom: 10px;
			padding: 10px 0;
			font-weight: bold;
			text-transform: uppercase;
			}

		#navigation a.sortable {
			/* height: 30px; */
			display: block;
			background-color: #FFF;
			}

		span.section_name + ul:empty {
			height: 20px;
			line-height: 20px;
			color: #FFFFFF;
			background-color: #FFFFFF;
			}

		.hint {
			width:100%;
			max-width:600px;
			line-height: 1.5em;
			}

		.hint span {
			color:#900;
			}

		.artdisp-on {
			display: none;
			}

		.artdisp-off {
			display: inline-block;
			}

		.imgdisp-on,
		.imgdisp-off,
		.artdisp-on,
		.artdisp-off {
			margin-right: 2em;
			}

		#page-stm_article_order .article:target {
			position: relative;
			}

		#page-stm_article_order .article:target {
			animation: 1s ease 0s normal none 1 running messageflash;
			}

		#page-stm_article_order .article:target * {
			background: #B8D000;
			color: #FFFFFF;
			}

		.article_title[class*="status_"]:after {
			font-size: 10px;
			font-weight: bold;
			text-transform: uppercase;
			position: absolute;
			right: 7px;
			}
		.article_title:not(.status_4):not(.status_5) {opacity: .5}

		.close { text-align: center; }

		#sortHelper {
			background-color: #D8FA02;
			background-color: var(--clr-bkgd);
			border-bottom: 5px solid #fff;
			border-bottom-color: var(--clr-bkgd);
		}

/* ######################### DROPBOX ############################*/

		li#section_drop-box {
			position: fixed;
			left: 70%;
			bottom: 0%;
			width: 251px !important;
			float: right;
			}

		li#section_drop-box span.section_name {
			background-color: #555555;
			}

		li#section_drop-box span.section_name a.toggler {
			color: #FFFFFF;
			}

		li#section_drop-box ul.sortable a {
			background-color: #AAAAAA;
			}

		li#section_drop-box li#article_098 a.sortable {
			padding-left: 250px;
			}

		li#section_drop-box li#article_098 em {
			display: none;
			}


/* ################ ARTICLES DROPPED OFF THE LIST #################*/

		#navigation > li.article {
			background-color: #FF9900;
			color:#FFFFFF;
			font-weight:bold;
			text-indent: 6px;
			}

		#navigation > li.article span.article_title:before {
			content: \"'.gTxt("stm_ao_oops_push_it_please").'\";
			color:#FFFFFF;
			font-weight:bold;
			line-height:20px;
			}

		#navigation > li.article span.article_title {
			padding-left: 6px;
			}

		span.article_title + ul {
			background-color: #FF9900;
			line-height: 20px;
			text-indent: 6px;
			}

		span.article_title + ul:after {
			content: \"'.gTxt("stm_ao_it_s_the_one_above").'\";
			color:#FFFFFF;
			font-weight:bold;
			line-height:20px;
			display: block;
			margin-bottom: 5px;
			margin-top: -5px;
			}

/* ################ FAKE CATEGORY HEADINGS MADE BY HIDDEN + EXPIRED ARTICLES #################
					Add/change to your article's IDs 		*/

		body#page-stm_article_order li#article_999999 em.article_id {
			display: none;
			}

		body#page-stm_article_order li#article_999999 span {
			background-color: #AAAAAA;
			color: #FFFFFF;
			font-weight: bold;
			letter-spacing: 0.2em;
			cursor: default;
			}

	</style>
EOF;
}

function stm_article_order_js(){
echo <<<EOF
	<script type="text/javascript" charset="utf-8">
		/**
		 * Interface Elements for jQuery
		 * utility function
		 *
		 * http://interface.eyecon.ro
		 *
		 * Copyright (c) 2006 Stefan Petre
		 * Dual licensed under the MIT (MIT-LICENSE.txt)
		 * and GPL (GPL-LICENSE.txt) licenses.
		 *
		 *
		 */

		jQuery.iUtil = {
			getPosition : function(e)
			{
				var x = 0;
				var y = 0;
				var es = e.style;
				var restoreStyles = false;
				if (jQuery(e).css('display') == 'none') {
					var oldVisibility = es.visibility;
					var oldPosition = es.position;
					restoreStyles = true;
					es.visibility = 'hidden';
					es.display = 'block';
					es.position = 'absolute';
				}
				var el = e;
				while (el){
					x += el.offsetLeft + (el.currentStyle ?parseInt(el.currentStyle.borderLeftWidth)||0:0);
					y += el.offsetTop + (el.currentStyle ?parseInt(el.currentStyle.borderTopWidth)||0:0);
					el = el.offsetParent;
				}
				el = e;
				while (el && el.tagName  && el.tagName.toLowerCase() != 'body')
				{
					x -= el.scrollLeft||0;
					y -= el.scrollTop||0;
					el = el.parentNode;
				}
				if (restoreStyles == true) {
					es.display = 'none';
					es.position = oldPosition;
					es.visibility = oldVisibility;
				}
				return {x:x, y:y};
			},
			getPositionLite : function(el)
			{
				var x = 0, y = 0;
				while(el) {
					x += el.offsetLeft || 0;
					y += el.offsetTop || 0;
					el = el.offsetParent;
				}
				return {x:x, y:y};
			},
			getSize : function(e)
			{
				var w = jQuery.css(e,'width');
				var h = jQuery.css(e,'height');
				var wb = 0;
				var hb = 0;
				var es = e.style;
				if (jQuery(e).css('display') != 'none') {
					wb = e.offsetWidth;
					hb = e.offsetHeight;
				} else {
					var oldVisibility = es.visibility;
					var oldPosition = es.position;
					es.visibility = 'hidden';
					es.display = 'block';
					es.position = 'absolute';
					wb = e.offsetWidth;
					hb = e.offsetHeight;
					es.display = 'none';
					es.position = oldPosition;
					es.visibility = oldVisibility;
				}
				return {w:w, h:h, wb:wb, hb:hb};
			},
			getSizeLite : function(el)
			{
				return {
					wb:el.offsetWidth||0,
					hb:el.offsetHeight||0
				};
			},
			getClient : function(e)
			{
				var h, w, de;
				if (e) {
					w = e.clientWidth;
					h = e.clientHeight;
				} else {
					de = document.documentElement;
					w = window.innerWidth || self.innerWidth || (de&&de.clientWidth) || document.body.clientWidth;
					h = window.innerHeight || self.innerHeight || (de&&de.clientHeight) || document.body.clientHeight;
				}
				return {w:w,h:h};
			},
			getScroll : function (e)
			{
				var t=0, l=0, w=0, h=0, iw=0, ih=0;
				if (e && e.nodeName.toLowerCase() != 'body') {
					t = e.scrollTop;
					l = e.scrollLeft;
					w = e.scrollWidth;
					h = e.scrollHeight;
					iw = 0;
					ih = 0;
				} else  {
					if (document.documentElement) {
						t = document.documentElement.scrollTop;
						l = document.documentElement.scrollLeft;
						w = document.documentElement.scrollWidth;
						h = document.documentElement.scrollHeight;
					} else if (document.body) {
						t = document.body.scrollTop;
						l = document.body.scrollLeft;
						w = document.body.scrollWidth;
						h = document.body.scrollHeight;
					}
					iw = self.innerWidth||document.documentElement.clientWidth||document.body.clientWidth||0;
					ih = self.innerHeight||document.documentElement.clientHeight||document.body.clientHeight||0;
				}
				return { t: t, l: l, w: w, h: h, iw: iw, ih: ih };
			},
			getMargins : function(e, toInteger)
			{
				var el = jQuery(e);
				var t = el.css('marginTop') || '';
				var r = el.css('marginRight') || '';
				var b = el.css('marginBottom') || '';
				var l = el.css('marginLeft') || '';
				if (toInteger)
					return {
						t: parseInt(t)||0,
						r: parseInt(r)||0,
						b: parseInt(b)||0,
						l: parseInt(l)
					};
				else
					return {t: t, r: r,	b: b, l: l};
			},
			getPadding : function(e, toInteger)
			{
				var el = jQuery(e);
				var t = el.css('paddingTop') || '';
				var r = el.css('paddingRight') || '';
				var b = el.css('paddingBottom') || '';
				var l = el.css('paddingLeft') || '';
				if (toInteger)
					return {
						t: parseInt(t)||0,
						r: parseInt(r)||0,
						b: parseInt(b)||0,
						l: parseInt(l)
					};
				else
					return {t: t, r: r,	b: b, l: l};
			},
			getBorder : function(e, toInteger)
			{
				var el = jQuery(e);
				var t = el.css('borderTopWidth') || '';
				var r = el.css('borderRightWidth') || '';
				var b = el.css('borderBottomWidth') || '';
				var l = el.css('borderLeftWidth') || '';
				if (toInteger)
					return {
						t: parseInt(t)||0,
						r: parseInt(r)||0,
						b: parseInt(b)||0,
						l: parseInt(l)||0
					};
				else
					return {t: t, r: r,	b: b, l: l};
			},
			getPointer : function(event)
			{
				var x = event.pageX || (event.clientX + (document.documentElement.scrollLeft || document.body.scrollLeft)) || 0;
				var y = event.pageY || (event.clientY + (document.documentElement.scrollTop || document.body.scrollTop)) || 0;
				return {x:x, y:y};
			},
			traverseDOM : function(nodeEl, func)
			{
				func(nodeEl);
				nodeEl = nodeEl.firstChild;
				while(nodeEl){
					jQuery.iUtil.traverseDOM(nodeEl, func);
					nodeEl = nodeEl.nextSibling;
				}
			},
			purgeEvents : function(nodeEl)
			{
				jQuery.iUtil.traverseDOM(
					nodeEl,
					function(el)
					{
						for(var attr in el){
							if(typeof el[attr] === 'function') {
								el[attr] = null;
							}
						}
					}
				);
			},
			centerEl : function(el, axis)
			{
				var clientScroll = jQuery.iUtil.getScroll();
				var windowSize = jQuery.iUtil.getSize(el);
				if (!axis || axis == 'vertically')
					jQuery(el).css(
						{
							top: clientScroll.t + ((Math.max(clientScroll.h,clientScroll.ih) - clientScroll.t - windowSize.hb)/2) + 'px'
						}
					);
				if (!axis || axis == 'horizontally')
					jQuery(el).css(
						{
							left:	clientScroll.l + ((Math.max(clientScroll.w,clientScroll.iw) - clientScroll.l - windowSize.wb)/2) + 'px'
						}
					);
			},
			fixPNG : function (el, emptyGIF) {
				var images = jQuery('img[@src*="png"]', el||document), png;
				images.each( function() {
					png = this.src;
					this.src = emptyGIF;
					this.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + png + "')";
				});
			}
		};

		// Helper function to support older browsers!
		[].indexOf || (Array.prototype.indexOf = function(v, n){
			n = (n == null) ? 0 : n;
			var m = this.length;
			for (var i=n; i<m; i++)
				if (this[i] == v)
					return i;
			return -1;
		});


		jQuery.iDrag =	{
			helper : null,
			dragged: null,
			destroy : function()
			{
				return this.each(
					function ()
					{
						if (this.isDraggable) {
							this.dragCfg.dhe.unbind('mousedown', jQuery.iDrag.draginit);
							this.dragCfg = null;
							this.isDraggable = false;
							if(window.ActiveXObject) {
								this.unselectable = "off";
							} else {
								this.style.MozUserSelect = '';
								this.style.KhtmlUserSelect = '';
								this.style.userSelect = '';
							}
						}
					}
				);
			},
			draginit : function (e)
			{
				if (jQuery.iDrag.dragged != null) {
					jQuery.iDrag.dragstop(e);
					return false;
				}
				var elm = this.dragElem;
				jQuery(document)
					.bind('mousemove', jQuery.iDrag.dragmove)
					.bind('mouseup', jQuery.iDrag.dragstop);
				elm.dragCfg.pointer = jQuery.iUtil.getPointer(e);
				elm.dragCfg.currentPointer = elm.dragCfg.pointer;
				elm.dragCfg.init = false;
				elm.dragCfg.fromHandler = this != this.dragElem;
				jQuery.iDrag.dragged = elm;
				if (elm.dragCfg.si && this != this.dragElem) {
						parentPos = jQuery.iUtil.getPosition(elm.parentNode);
						sliderSize = jQuery.iUtil.getSize(elm);
						sliderPos = {
							x : parseInt(jQuery.css(elm,'left')) || 0,
							y : parseInt(jQuery.css(elm,'top')) || 0
						};
						dx = elm.dragCfg.currentPointer.x - parentPos.x - sliderSize.wb/2 - sliderPos.x;
						dy = elm.dragCfg.currentPointer.y - parentPos.y - sliderSize.hb/2 - sliderPos.y;
						jQuery.iSlider.dragmoveBy(elm, [dx, dy]);
				}
				return jQuery.selectKeyHelper||false;
			},

			dragstart : function(e)
			{
				var elm = jQuery.iDrag.dragged;
				elm.dragCfg.init = true;

				var dEs = elm.style;

				elm.dragCfg.oD = jQuery.css(elm,'display');
				elm.dragCfg.oP = jQuery.css(elm,'position');
				if (!elm.dragCfg.initialPosition)
					elm.dragCfg.initialPosition = elm.dragCfg.oP;

				elm.dragCfg.oR = {
					x : parseInt(jQuery.css(elm,'left')) || 0,
					y : parseInt(jQuery.css(elm,'top')) || 0
				};
				elm.dragCfg.diffX = 0;
				elm.dragCfg.diffY = 0;
				if (window.ActiveXObject) {
					var oldBorder = jQuery.iUtil.getBorder(elm, true);
					elm.dragCfg.diffX = oldBorder.l||0;
					elm.dragCfg.diffY = oldBorder.t||0;
				}

				elm.dragCfg.oC = jQuery.extend(
					jQuery.iUtil.getPosition(elm),
					jQuery.iUtil.getSize(elm)
				);
				if (elm.dragCfg.oP != 'relative' && elm.dragCfg.oP != 'absolute') {
					dEs.position = 'relative';
				}

				jQuery.iDrag.helper.empty();
				var clonedEl = elm.cloneNode(true);

				jQuery(clonedEl).css(
					{
						display:	'block',
						left:		'0px',
						top: 		'0px'
					}
				);
				clonedEl.style.marginTop = '0';
				clonedEl.style.marginRight = '0';
				clonedEl.style.marginBottom = '0';
				clonedEl.style.marginLeft = '0';
				jQuery.iDrag.helper.append(clonedEl);

				var dhs = jQuery.iDrag.helper.get(0).style;

				if (elm.dragCfg.autoSize) {
					dhs.width = 'auto';
					dhs.height = 'auto';
				} else {
					dhs.height = elm.dragCfg.oC.hb + 'px';
					dhs.width = elm.dragCfg.oC.wb + 'px';
				}

				dhs.display = 'block';
				dhs.marginTop = '0px';
				dhs.marginRight = '0px';
				dhs.marginBottom = '0px';
				dhs.marginLeft = '0px';

				//remeasure the clone to check if the size was changed by user's functions
				jQuery.extend(
					elm.dragCfg.oC,
					jQuery.iUtil.getSize(clonedEl)
				);

				if (elm.dragCfg.cursorAt) {
					if (elm.dragCfg.cursorAt.left) {
						elm.dragCfg.oR.x += elm.dragCfg.pointer.x - elm.dragCfg.oC.x - elm.dragCfg.cursorAt.left;
						elm.dragCfg.oC.x = elm.dragCfg.pointer.x - elm.dragCfg.cursorAt.left;
					}
					if (elm.dragCfg.cursorAt.top) {
						elm.dragCfg.oR.y += elm.dragCfg.pointer.y - elm.dragCfg.oC.y - elm.dragCfg.cursorAt.top;
						elm.dragCfg.oC.y = elm.dragCfg.pointer.y - elm.dragCfg.cursorAt.top;
					}
					if (elm.dragCfg.cursorAt.right) {
						elm.dragCfg.oR.x += elm.dragCfg.pointer.x - elm.dragCfg.oC.x -elm.dragCfg.oC.hb + elm.dragCfg.cursorAt.right;
						elm.dragCfg.oC.x = elm.dragCfg.pointer.x - elm.dragCfg.oC.wb + elm.dragCfg.cursorAt.right;
					}
					if (elm.dragCfg.cursorAt.bottom) {
						elm.dragCfg.oR.y += elm.dragCfg.pointer.y - elm.dragCfg.oC.y - elm.dragCfg.oC.hb + elm.dragCfg.cursorAt.bottom;
						elm.dragCfg.oC.y = elm.dragCfg.pointer.y - elm.dragCfg.oC.hb + elm.dragCfg.cursorAt.bottom;
					}
				}
				elm.dragCfg.nx = elm.dragCfg.oR.x;
				elm.dragCfg.ny = elm.dragCfg.oR.y;

				if (elm.dragCfg.insideParent || elm.dragCfg.containment == 'parent') {
					parentBorders = jQuery.iUtil.getBorder(elm.parentNode, true);
					elm.dragCfg.oC.x = elm.offsetLeft + (window.ActiveXObject ? 0 : parentBorders.l);
					elm.dragCfg.oC.y = elm.offsetTop + (window.ActiveXObject ? 0 : parentBorders.t);
					jQuery(elm.parentNode).append(jQuery.iDrag.helper.get(0));
				}
				if (elm.dragCfg.containment) {
					jQuery.iDrag.getContainment(elm);
					elm.dragCfg.onDragModifier.containment = jQuery.iDrag.fitToContainer;
				}

				if (elm.dragCfg.si) {
					jQuery.iSlider.modifyContainer(elm);
				}

				dhs.left = elm.dragCfg.oC.x - elm.dragCfg.diffX + 'px';
				dhs.top = elm.dragCfg.oC.y - elm.dragCfg.diffY + 'px';
				//resize the helper to fit the clone
				dhs.width = elm.dragCfg.oC.wb + 'px';
				dhs.height = elm.dragCfg.oC.hb + 'px';

				jQuery.iDrag.dragged.dragCfg.prot = false;

				if (elm.dragCfg.gx) {
					elm.dragCfg.onDragModifier.grid = jQuery.iDrag.snapToGrid;
				}
				if (elm.dragCfg.zIndex != false) {
					jQuery.iDrag.helper.css('zIndex', elm.dragCfg.zIndex);
				}
				if (elm.dragCfg.opacity) {
					jQuery.iDrag.helper.css('opacity', elm.dragCfg.opacity);
					if (window.ActiveXObject) {
						jQuery.iDrag.helper.css('filter', 'alpha(opacity=' + elm.dragCfg.opacity * 100 + ')');
					}
				}

				if(elm.dragCfg.frameClass) {
					jQuery.iDrag.helper.addClass(elm.dragCfg.frameClass);
					jQuery.iDrag.helper.get(0).firstChild.style.display = 'none';
				}
				if (elm.dragCfg.onStart)
					elm.dragCfg.onStart.apply(elm, [clonedEl, elm.dragCfg.oR.x, elm.dragCfg.oR.y]);
				if (jQuery.iDrop && jQuery.iDrop.count > 0 ){
					jQuery.iDrop.highlight(elm);
				}
				if (elm.dragCfg.ghosting == false) {
					dEs.display = 'none';
				}
				return false;
			},

			getContainment : function(elm)
			{
				if (elm.dragCfg.containment.constructor == String) {
					if (elm.dragCfg.containment == 'parent') {
						elm.dragCfg.cont = jQuery.extend(
							{x:0,y:0},
							jQuery.iUtil.getSize(elm.parentNode)
						);
						var contBorders = jQuery.iUtil.getBorder(elm.parentNode, true);
						elm.dragCfg.cont.w = elm.dragCfg.cont.wb - contBorders.l - contBorders.r;
						elm.dragCfg.cont.h = elm.dragCfg.cont.hb - contBorders.t - contBorders.b;
					} else if (elm.dragCfg.containment == 'document') {
						var clnt = jQuery.iUtil.getClient();
						elm.dragCfg.cont = {
							x : 0,
							y : 0,
							w : clnt.w,
							h : clnt.h
						};
					}
				} else if (elm.dragCfg.containment.constructor == Array) {
					elm.dragCfg.cont = {
						x : parseInt(elm.dragCfg.containment[0])||0,
						y : parseInt(elm.dragCfg.containment[1])||0,
						w : parseInt(elm.dragCfg.containment[2])||0,
						h : parseInt(elm.dragCfg.containment[3])||0
					};
				}
				elm.dragCfg.cont.dx = elm.dragCfg.cont.x - elm.dragCfg.oC.x;
				elm.dragCfg.cont.dy = elm.dragCfg.cont.y - elm.dragCfg.oC.y;
			},

			hidehelper : function(dragged)
			{
				if (dragged.dragCfg.insideParent || dragged.dragCfg.containment == 'parent') {
					jQuery('body', document).append(jQuery.iDrag.helper.get(0));
				}
				jQuery.iDrag.helper.empty().hide().css('opacity', 1);
				if (window.ActiveXObject) {
					jQuery.iDrag.helper.css('filter', 'alpha(opacity=100)');
				}
			},

			dragstop : function(e)
			{

				jQuery(document)
					.unbind('mousemove', jQuery.iDrag.dragmove)
					.unbind('mouseup', jQuery.iDrag.dragstop);

				if (jQuery.iDrag.dragged == null) {
					return;
				}
				var dragged = jQuery.iDrag.dragged;

				jQuery.iDrag.dragged = null;

				if (dragged.dragCfg.init == false) {
					return false;
				}
				if (dragged.dragCfg.so == true) {
					jQuery(dragged).css('position', dragged.dragCfg.oP);
				}
				var dEs = dragged.style;

				if (dragged.si) {
					jQuery.iDrag.helper.css('cursor', 'move');
				}
				if(dragged.dragCfg.frameClass) {
					jQuery.iDrag.helper.removeClass(dragged.dragCfg.frameClass);
				}

				if (dragged.dragCfg.revert == false) {
					if (dragged.dragCfg.fx > 0) {
						if (!dragged.dragCfg.axis || dragged.dragCfg.axis == 'horizontally') {
							var x = new jQuery.fx(dragged,{duration:dragged.dragCfg.fx}, 'left');
							x.custom(dragged.dragCfg.oR.x,dragged.dragCfg.nRx);
						}
						if (!dragged.dragCfg.axis || dragged.dragCfg.axis == 'vertically') {
							var y = new jQuery.fx(dragged,{duration:dragged.dragCfg.fx}, 'top');
							y.custom(dragged.dragCfg.oR.y,dragged.dragCfg.nRy);
						}
					} else {
						if (!dragged.dragCfg.axis || dragged.dragCfg.axis == 'horizontally')
							dragged.style.left = dragged.dragCfg.nRx + 'px';
						if (!dragged.dragCfg.axis || dragged.dragCfg.axis == 'vertically')
							dragged.style.top = dragged.dragCfg.nRy + 'px';
					}
					jQuery.iDrag.hidehelper(dragged);
					if (dragged.dragCfg.ghosting == false) {
						jQuery(dragged).css('display', dragged.dragCfg.oD);
					}
				} else if (dragged.dragCfg.fx > 0) {
					dragged.dragCfg.prot = true;
					var dh = false;
					if(jQuery.iDrop && jQuery.iSort && dragged.dragCfg.so) {
						dh = jQuery.iUtil.getPosition(jQuery.iSort.helper.get(0));
					}
					jQuery.iDrag.helper.animate(
						{
							left : dh ? dh.x : dragged.dragCfg.oC.x,
							top : dh ? dh.y : dragged.dragCfg.oC.y
						},
						dragged.dragCfg.fx,
						function()
						{
							dragged.dragCfg.prot = false;
							if (dragged.dragCfg.ghosting == false) {
								dragged.style.display = dragged.dragCfg.oD;
							}
							jQuery.iDrag.hidehelper(dragged);
						}
					);
				} else {
					jQuery.iDrag.hidehelper(dragged);
					if (dragged.dragCfg.ghosting == false) {
						jQuery(dragged).css('display', dragged.dragCfg.oD);
					}
				}

				if (jQuery.iDrop && jQuery.iDrop.count > 0 ){
					jQuery.iDrop.checkdrop(dragged);
				}
				if (jQuery.iSort && dragged.dragCfg.so) {
					jQuery.iSort.check(dragged);
				}
				if (dragged.dragCfg.onChange && (dragged.dragCfg.nRx != dragged.dragCfg.oR.x || dragged.dragCfg.nRy != dragged.dragCfg.oR.y)){
					dragged.dragCfg.onChange.apply(dragged, dragged.dragCfg.lastSi||[0,0,dragged.dragCfg.nRx,dragged.dragCfg.nRy]);
				}
				if (dragged.dragCfg.onStop)
					dragged.dragCfg.onStop.apply(dragged);
				return false;
			},

			snapToGrid : function(x, y, dx, dy)
			{
				if (dx != 0)
					dx = parseInt((dx + (this.dragCfg.gx * dx/Math.abs(dx))/2)/this.dragCfg.gx) * this.dragCfg.gx;
				if (dy != 0)
					dy = parseInt((dy + (this.dragCfg.gy * dy/Math.abs(dy))/2)/this.dragCfg.gy) * this.dragCfg.gy;
				return {
					dx : dx,
					dy : dy,
					x: 0,
					y: 0
				};
			},

			fitToContainer : function(x, y, dx, dy)
			{
				dx = Math.min(
						Math.max(dx,this.dragCfg.cont.dx),
						this.dragCfg.cont.w + this.dragCfg.cont.dx - this.dragCfg.oC.wb
					);
				dy = Math.min(
						Math.max(dy,this.dragCfg.cont.dy),
						this.dragCfg.cont.h + this.dragCfg.cont.dy - this.dragCfg.oC.hb
					);

				return {
					dx : dx,
					dy : dy,
					x: 0,
					y: 0
				}
			},

			dragmove : function(e)
			{
				if (jQuery.iDrag.dragged == null || jQuery.iDrag.dragged.dragCfg.prot == true) {
					return;
				}

				var dragged = jQuery.iDrag.dragged;

				dragged.dragCfg.currentPointer = jQuery.iUtil.getPointer(e);
				if (dragged.dragCfg.init == false) {
					distance = Math.sqrt(Math.pow(dragged.dragCfg.pointer.x - dragged.dragCfg.currentPointer.x, 2) + Math.pow(dragged.dragCfg.pointer.y - dragged.dragCfg.currentPointer.y, 2));
					if (distance < dragged.dragCfg.snapDistance){
						return;
					} else {
						jQuery.iDrag.dragstart(e);
					}
				}

				var dx = dragged.dragCfg.currentPointer.x - dragged.dragCfg.pointer.x;
				var dy = dragged.dragCfg.currentPointer.y - dragged.dragCfg.pointer.y;

				for (var i in dragged.dragCfg.onDragModifier) {
					var newCoords = dragged.dragCfg.onDragModifier[i].apply(dragged, [dragged.dragCfg.oR.x + dx, dragged.dragCfg.oR.y + dy, dx, dy]);
					if (newCoords && newCoords.constructor == Object) {
						dx = i != 'user' ? newCoords.dx : (newCoords.x - dragged.dragCfg.oR.x);
						dy = i != 'user' ? newCoords.dy : (newCoords.y - dragged.dragCfg.oR.y);
					}
				}

				dragged.dragCfg.nx = dragged.dragCfg.oC.x + dx - dragged.dragCfg.diffX;
				dragged.dragCfg.ny = dragged.dragCfg.oC.y + dy - dragged.dragCfg.diffY;

				if (dragged.dragCfg.si && (dragged.dragCfg.onSlide || dragged.dragCfg.onChange)) {
					jQuery.iSlider.onSlide(dragged, dragged.dragCfg.nx, dragged.dragCfg.ny);
				}

				if(dragged.dragCfg.onDrag)
					dragged.dragCfg.onDrag.apply(dragged, [dragged.dragCfg.oR.x + dx, dragged.dragCfg.oR.y + dy]);

				if (!dragged.dragCfg.axis || dragged.dragCfg.axis == 'horizontally') {
					dragged.dragCfg.nRx = dragged.dragCfg.oR.x + dx;
					jQuery.iDrag.helper.get(0).style.left = dragged.dragCfg.nx + 'px';
				}
				if (!dragged.dragCfg.axis || dragged.dragCfg.axis == 'vertically') {
					dragged.dragCfg.nRy = dragged.dragCfg.oR.y + dy;
					jQuery.iDrag.helper.get(0).style.top = dragged.dragCfg.ny + 'px';
				}

				if (jQuery.iDrop && jQuery.iDrop.count > 0 ){
					jQuery.iDrop.checkhover(dragged);
				}
				return false;
			},

			build : function(o)
			{
				if (!jQuery.iDrag.helper) {
					jQuery('body',document).append('<div id="dragHelper"></div>');
					jQuery.iDrag.helper = jQuery('#dragHelper');
					var el = jQuery.iDrag.helper.get(0);
					var els = el.style;
					els.position = 'absolute';
					els.display = 'none';
					els.cursor = 'move';
					els.listStyle = 'none';
					els.overflow = 'hidden';
					if (window.ActiveXObject) {
						el.unselectable = "on";
					} else {
						els.mozUserSelect = 'none';
						els.userSelect = 'none';
						els.KhtmlUserSelect = 'none';
					}
				}
				if (!o) {
					o = {};
				}
				return this.each(
					function()
					{
						if (this.isDraggable || !jQuery.iUtil)
							return;
						if (window.ActiveXObject) {
							this.onselectstart = function(){return false;};
							this.ondragstart = function(){return false;};
						}
						var el = this;
						var dhe = o.handle ? jQuery(this).find(o.handle) : jQuery(this);
						if(window.ActiveXObject) {
							dhe.each(
								function()
								{
									this.unselectable = "on";
								}
							);
						} else {
							dhe.css('-moz-user-select', 'none');
							dhe.css('user-select', 'none');
							dhe.css('-khtml-user-select', 'none');
						}
						this.dragCfg = {
							dhe: dhe,
							revert : o.revert ? true : false,
							ghosting : o.ghosting ? true : false,
							so : o.so ? o.so : false,
							si : o.si ? o.si : false,
							insideParent : o.insideParent ? o.insideParent : false,
							zIndex : o.zIndex ? parseInt(o.zIndex)||0 : false,
							opacity : o.opacity ? parseFloat(o.opacity) : false,
							fx : parseInt(o.fx)||null,
							hpc : o.hpc ? o.hpc : false,
							onDragModifier : {},
							pointer : {},
							onStart : o.onStart && o.onStart.constructor == Function ? o.onStart : false,
							onStop : o.onStop && o.onStop.constructor == Function ? o.onStop : false,
							onChange : o.onChange && o.onChange.constructor == Function ? o.onChange : false,
							axis : /vertically|horizontally/.test(o.axis) ? o.axis : false,
							snapDistance : o.snapDistance ? parseInt(o.snapDistance)||0 : 0,
							cursorAt: o.cursorAt ? o.cursorAt : false,
							autoSize : o.autoSize ? true : false,
							frameClass : o.frameClass || false

						};
						if (o.onDragModifier && o.onDragModifier.constructor == Function)
							this.dragCfg.onDragModifier.user = o.onDragModifier;
						if (o.onDrag && o.onDrag.constructor == Function)
							this.dragCfg.onDrag = o.onDrag;
						if (o.containment && ((o.containment.constructor == String && (o.containment == 'parent' || o.containment == 'document')) || (o.containment.constructor == Array && o.containment.length == 4) )) {
							this.dragCfg.containment = o.containment;
						}
						if(o.fractions) {
							this.dragCfg.fractions = o.fractions;
						}
						if(o.grid){
							if(typeof o.grid == 'number'){
								this.dragCfg.gx = parseInt(o.grid)||1;
								this.dragCfg.gy = parseInt(o.grid)||1;
							} else if (o.grid.length == 2) {
								this.dragCfg.gx = parseInt(o.grid[0])||1;
								this.dragCfg.gy = parseInt(o.grid[1])||1;
							}
						}
						if (o.onSlide && o.onSlide.constructor == Function) {
							this.dragCfg.onSlide = o.onSlide;
						}

						this.isDraggable = true;
						dhe.each(
							function(){
								this.dragElem = el;
							}
						);
						dhe.bind('mousedown', jQuery.iDrag.draginit);
					}
				)
			}
		};


		jQuery.fn.extend(
			{
				DraggableDestroy : jQuery.iDrag.destroy,
				Draggable : jQuery.iDrag.build
			}
		);


		jQuery.iDrop = {
			fit : function (zonex, zoney, zonew, zoneh)
			{
				return 	zonex <= jQuery.iDrag.dragged.dragCfg.nx &&
						(zonex + zonew) >= (jQuery.iDrag.dragged.dragCfg.nx + jQuery.iDrag.dragged.dragCfg.oC.w) &&
						zoney <= jQuery.iDrag.dragged.dragCfg.ny &&
						(zoney + zoneh) >= (jQuery.iDrag.dragged.dragCfg.ny + jQuery.iDrag.dragged.dragCfg.oC.h) ? true :false;
			},
			intersect : function (zonex, zoney, zonew, zoneh)
			{
				return 	! ( zonex > (jQuery.iDrag.dragged.dragCfg.nx + jQuery.iDrag.dragged.dragCfg.oC.w)
						|| (zonex + zonew) < jQuery.iDrag.dragged.dragCfg.nx
						|| zoney > (jQuery.iDrag.dragged.dragCfg.ny + jQuery.iDrag.dragged.dragCfg.oC.h)
						|| (zoney + zoneh) < jQuery.iDrag.dragged.dragCfg.ny
						) ? true :false;
			},
			pointer : function (zonex, zoney, zonew, zoneh)
			{
				return	zonex < jQuery.iDrag.dragged.dragCfg.currentPointer.x
						&& (zonex + zonew) > jQuery.iDrag.dragged.dragCfg.currentPointer.x
						&& zoney < jQuery.iDrag.dragged.dragCfg.currentPointer.y
						&& (zoney + zoneh) > jQuery.iDrag.dragged.dragCfg.currentPointer.y
						? true :false;
			},
			overzone : false,
			highlighted : {},
			count : 0,
			zones : {},

			highlight : function (elm)
			{
				if (jQuery.iDrag.dragged == null) {
					return;
				}
				var i;
				jQuery.iDrop.highlighted = {};
				var oneIsSortable = false;
				for (i in jQuery.iDrop.zones) {
					if (jQuery.iDrop.zones[i] != null) {
						var iEL = jQuery.iDrop.zones[i].get(0);
						if (jQuery(jQuery.iDrag.dragged).is('.' + iEL.dropCfg.a)) {
							if (iEL.dropCfg.m == false) {
								iEL.dropCfg.p = jQuery.extend(
									jQuery.iUtil.getPositionLite(iEL),
									jQuery.iUtil.getSizeLite(iEL)
								);//jQuery.iUtil.getPos(iEL);
								iEL.dropCfg.m = true;
							}
							if (iEL.dropCfg.ac) {
								jQuery.iDrop.zones[i].addClass(iEL.dropCfg.ac);
							}
							jQuery.iDrop.highlighted[i] = jQuery.iDrop.zones[i];
							//if (jQuery.iSort && jQuery.iDrag.dragged.dragCfg.so) {
							if (jQuery.iSort && iEL.dropCfg.s && jQuery.iDrag.dragged.dragCfg.so) {
								iEL.dropCfg.el = jQuery('.' + iEL.dropCfg.a, iEL);
								elm.style.display = 'none';
								jQuery.iSort.measure(iEL);
								iEL.dropCfg.os = jQuery.iSort.serialize(jQuery.attr(iEL, 'id')).hash;
								elm.style.display = elm.dragCfg.oD;
								oneIsSortable = true;
							}
							if (iEL.dropCfg.onActivate) {
								iEL.dropCfg.onActivate.apply(jQuery.iDrop.zones[i].get(0), [jQuery.iDrag.dragged]);
							}
						}
					}
				}
				//if (jQuery.iSort && jQuery.iDrag.dragged.dragCfg.so) {
				if (oneIsSortable) {
					jQuery.iSort.start();
				}
			},

			remeasure : function()
			{
				jQuery.iDrop.highlighted = {};
				for (i in jQuery.iDrop.zones) {
					if (jQuery.iDrop.zones[i] != null) {
						var iEL = jQuery.iDrop.zones[i].get(0);
						if (jQuery(jQuery.iDrag.dragged).is('.' + iEL.dropCfg.a)) {
							iEL.dropCfg.p = jQuery.extend(
								jQuery.iUtil.getPositionLite(iEL),
								jQuery.iUtil.getSizeLite(iEL)
							);
							if (iEL.dropCfg.ac) {
								jQuery.iDrop.zones[i].addClass(iEL.dropCfg.ac);
							}
							jQuery.iDrop.highlighted[i] = jQuery.iDrop.zones[i];

							if (jQuery.iSort && iEL.dropCfg.s && jQuery.iDrag.dragged.dragCfg.so) {
								iEL.dropCfg.el = jQuery('.' + iEL.dropCfg.a, iEL);
								elm.style.display = 'none';
								jQuery.iSort.measure(iEL);
								elm.style.display = elm.dragCfg.oD;
							}
						}
					}
				}
			},

			checkhover : function (e)
			{
				if (jQuery.iDrag.dragged == null) {
					return;
				}
				jQuery.iDrop.overzone = false;
				var i;
				var applyOnHover = false;
				var hlt = 0;
				for (i in jQuery.iDrop.highlighted)
				{
					var iEL = jQuery.iDrop.highlighted[i].get(0);
					if (
							jQuery.iDrop.overzone == false
							 &&
							jQuery.iDrop[iEL.dropCfg.t](
							 	iEL.dropCfg.p.x,
								iEL.dropCfg.p.y,
								iEL.dropCfg.p.wb,
								iEL.dropCfg.p.hb
							)

					) {
						if (iEL.dropCfg.hc && iEL.dropCfg.h == false) {
							jQuery.iDrop.highlighted[i].addClass(iEL.dropCfg.hc);
						}
						//chec if onHover function has to be called
						if (iEL.dropCfg.h == false &&iEL.dropCfg.onHover) {
							applyOnHover = true;
						}
						iEL.dropCfg.h = true;
						jQuery.iDrop.overzone = iEL;
						//if(jQuery.iSort && jQuery.iDrag.dragged.dragCfg.so) {
						if(jQuery.iSort && iEL.dropCfg.s && jQuery.iDrag.dragged.dragCfg.so) {
							jQuery.iSort.helper.get(0).className = iEL.dropCfg.shc;
							jQuery.iSort.checkhover(iEL);
						}
						hlt ++;
					} else if(iEL.dropCfg.h == true) {
						//onOut function
						if (iEL.dropCfg.onOut) {
							iEL.dropCfg.onOut.apply(iEL, [e, jQuery.iDrag.helper.get(0).firstChild, iEL.dropCfg.fx]);
						}
						if (iEL.dropCfg.hc) {
							jQuery.iDrop.highlighted[i].removeClass(iEL.dropCfg.hc);
						}
						iEL.dropCfg.h = false;
					}
				}
				if (jQuery.iSort && !jQuery.iDrop.overzone && jQuery.iDrag.dragged.so) {
					jQuery.iSort.helper.get(0).style.display = 'none';
					//jQuery('body').append(jQuery.iSort.helper.get(0));
				}
				//call onhover
				if(applyOnHover) {
					jQuery.iDrop.overzone.dropCfg.onHover.apply(jQuery.iDrop.overzone, [e, jQuery.iDrag.helper.get(0).firstChild]);
				}
			},
			checkdrop : function (e)
			{
				var i;
				for (i in jQuery.iDrop.highlighted) {
					var iEL = jQuery.iDrop.highlighted[i].get(0);
					if (iEL.dropCfg.ac) {
						jQuery.iDrop.highlighted[i].removeClass(iEL.dropCfg.ac);
					}
					if (iEL.dropCfg.hc) {
						jQuery.iDrop.highlighted[i].removeClass(iEL.dropCfg.hc);
					}
					if(iEL.dropCfg.s) {
						jQuery.iSort.changed[jQuery.iSort.changed.length] = i;
					}
					if (iEL.dropCfg.onDrop && iEL.dropCfg.h == true) {
						iEL.dropCfg.h = false;
						iEL.dropCfg.onDrop.apply(iEL, [e, iEL.dropCfg.fx]);
					}
					iEL.dropCfg.m = false;
					iEL.dropCfg.h  = false;
				}
				jQuery.iDrop.highlighted = {};
			},
			destroy : function()
			{
				return this.each(
					function()
					{
						if (this.isDroppable) {
							if (this.dropCfg.s) {
								id = jQuery.attr(this,'id');
								jQuery.iSort.collected[id] = null;
								jQuery('.' + this.dropCfg.a, this).DraggableDestroy();
							}
							jQuery.iDrop.zones['d' + this.idsa] = null;
							this.isDroppable = false;
							this.f = null;
						}
					}
				);
			},
			build : function (o)
			{
				return this.each(
					function()
					{
						if (this.isDroppable == true || !o.accept || !jQuery.iUtil || !jQuery.iDrag){
							return;
						}
						this.dropCfg = {
							a : o.accept,
							ac: o.activeclass||false,
							hc:	o.hoverclass||false,
							shc: o.helperclass||false,
							onDrop:	o.ondrop||o.onDrop||false,
							onHover: o.onHover||o.onhover||false,
							onOut: o.onOut||o.onout||false,
							onActivate: o.onActivate||false,
							t: o.tolerance && ( o.tolerance == 'fit' || o.tolerance == 'intersect') ? o.tolerance : 'pointer',
							fx: o.fx ? o.fx : false,
							m: false,
							h: false
						};
						if (o.sortable == true && jQuery.iSort) {
							id = jQuery.attr(this,'id');
							jQuery.iSort.collected[id] = this.dropCfg.a;
							this.dropCfg.s = true;
							if(o.onChange) {
								this.dropCfg.onChange = o.onChange;
								this.dropCfg.os = jQuery.iSort.serialize(id).hash;
							}
						}
						this.isDroppable = true;
						this.idsa = parseInt(Math.random() * 10000);
						jQuery.iDrop.zones['d' + this.idsa] = jQuery(this);
						jQuery.iDrop.count ++;
					}
				);
			}
		};

		jQuery.fn.extend(
			{
				DroppableDestroy : jQuery.iDrop.destroy,
				Droppable : jQuery.iDrop.build
			}
		);

		jQuery.recallDroppables = jQuery.iDrop.remeasure;


		jQuery.iSort = {
			changed : [],
			collected : {},
			helper : false,
			inFrontOf: null,

			start : function ()
			{
				if (jQuery.iDrag.dragged == null) {
					return;
				}
				var shs, margins,c, cs;

				jQuery.iSort.helper.get(0).className = jQuery.iDrag.dragged.dragCfg.hpc;
				shs = jQuery.iSort.helper.get(0).style;
				shs.display = 'block';
				jQuery.iSort.helper.oC = jQuery.extend(
					jQuery.iUtil.getPosition(jQuery.iSort.helper.get(0)),
					jQuery.iUtil.getSize(jQuery.iSort.helper.get(0))
				);

				shs.width = jQuery.iDrag.dragged.dragCfg.oC.wb + 'px';
				shs.height = jQuery.iDrag.dragged.dragCfg.oC.hb + 'px';
				//shs.cssFloat = jQuery.iDrag.dragged.dragCfg.oF;
				margins = jQuery.iUtil.getMargins(jQuery.iDrag.dragged);
				shs.marginTop = margins.t;
				shs.marginRight = margins.r;
				shs.marginBottom = margins.b;
				shs.marginLeft = margins.l;
				if (jQuery.iDrag.dragged.dragCfg.ghosting == true) {
					c = jQuery.iDrag.dragged.cloneNode(true);
					cs = c.style;
					cs.marginTop = '0px';
					cs.marginRight = '0px';
					cs.marginBottom = '0px';
					cs.marginLeft = '0px';
					cs.display = 'block';
					jQuery.iSort.helper.empty().append(c);
				}
				jQuery(jQuery.iDrag.dragged).after(jQuery.iSort.helper.get(0));
				jQuery.iDrag.dragged.style.display = 'none';
			},

			check : function (e)
			{
				if (!e.dragCfg.so && jQuery.iDrop.overzone.sortable) {
					if (e.dragCfg.onStop)
						e.dragCfg.onStop.apply(dragged);
					jQuery(e).css('position', e.dragCfg.initialPosition || e.dragCfg.oP);
					jQuery(e).DraggableDestroy();
					jQuery(jQuery.iDrop.overzone).SortableAddItem(e);
				}
				jQuery.iSort.helper.removeClass(e.dragCfg.hpc).html('&nbsp;');
				jQuery.iSort.inFrontOf = null;
				var shs = jQuery.iSort.helper.get(0).style;
				shs.display = 'none';
				jQuery.iSort.helper.after(e);
				if (e.dragCfg.fx > 0) {
					jQuery(e).fadeIn(e.dragCfg.fx);
				}
				jQuery('body').append(jQuery.iSort.helper.get(0));
				var ts = [];
				var fnc = false;
				for(var i=0; i<jQuery.iSort.changed.length; i++){
					var iEL = jQuery.iDrop.zones[jQuery.iSort.changed[i]].get(0);
					var id = jQuery.attr(iEL, 'id');
					var ser = jQuery.iSort.serialize(id);
					if (iEL.dropCfg.os != ser.hash) {
						iEL.dropCfg.os = ser.hash;
						if (fnc == false && iEL.dropCfg.onChange) {
							fnc = iEL.dropCfg.onChange;
						}
						ser.id = id;
						ts[ts.length] = ser;
					}
				}
				jQuery.iSort.changed = [];
				if (fnc != false && ts.length > 0) {
					fnc(ts);
				}
			},

			checkhover : function(e,o)
			{
				if (!jQuery.iDrag.dragged)
					return;
				var cur = false;
				var i = 0;
				if ( e.dropCfg.el.length > 0) {
					for (i = e.dropCfg.el.length; i >0; i--) {
						if (e.dropCfg.el.get(i-1) != jQuery.iDrag.dragged) {
							if (!e.sortCfg.floats) {
								if (
								(e.dropCfg.el.get(i-1).pos.y + e.dropCfg.el.get(i-1).pos.hb/2) > jQuery.iDrag.dragged.dragCfg.ny
								) {
									cur = e.dropCfg.el.get(i-1);
								} else {
									break;
								}
							} else {
								if (
								(e.dropCfg.el.get(i-1).pos.x + e.dropCfg.el.get(i-1).pos.wb/2) > jQuery.iDrag.dragged.dragCfg.nx &&
								(e.dropCfg.el.get(i-1).pos.y + e.dropCfg.el.get(i-1).pos.hb/2) > jQuery.iDrag.dragged.dragCfg.ny
								) {
									cur = e.dropCfg.el.get(i-1);
								}
							}
						}
					}
				}
				//helpos = jQuery.iUtil.getPos(jQuery.iSort.helper.get(0));
				if (cur && jQuery.iSort.inFrontOf != cur) {
					jQuery.iSort.inFrontOf = cur;
					jQuery(cur).before(jQuery.iSort.helper.get(0));
				} else if(!cur && (jQuery.iSort.inFrontOf != null || jQuery.iSort.helper.get(0).parentNode != e) ) {
					jQuery.iSort.inFrontOf = null;
					jQuery(e).append(jQuery.iSort.helper.get(0));
				}
				jQuery.iSort.helper.get(0).style.display = 'block';
			},

			measure : function (e)
			{
				if (jQuery.iDrag.dragged == null) {
					return;
				}
				e.dropCfg.el.each (
					function ()
					{
						this.pos = jQuery.extend(
							jQuery.iUtil.getSizeLite(this),
							jQuery.iUtil.getPositionLite(this)
						);
					}
				);
			},

			serialize : function(s)
			{
				var i;
				var h = '';
				var o = {};
				if (s) {
					if (jQuery.iSort.collected[s] ) {
						o[s] = [];
						jQuery('#' + s + ' .' + jQuery.iSort.collected[s]).each(
							function ()
							{
								if (h.length > 0) {
									h += '&';
								}
								h += s + '[]=' + jQuery.attr(this,'id');
								o[s][o[s].length] = jQuery.attr(this,'id');
							}
						);
					} else {
						for ( a in s) {
							if (jQuery.iSort.collected[s[a]] ) {
								o[s[a]] = [];
								jQuery('#' + s[a] + ' .' + jQuery.iSort.collected[s[a]]).each(
									function ()
									{
										if (h.length > 0) {
											h += '&';
										}
										h += s[a] + '[]=' + jQuery.attr(this,'id');
										o[s[a]][o[s[a]].length] = jQuery.attr(this,'id');
									}
								);
							}
						}
					}
				} else {
					for ( i in jQuery.iSort.collected){
						o[i] = [];
						jQuery('#' + i + ' .' + jQuery.iSort.collected[i]).each(
							function ()
							{
								if (h.length > 0) {
									h += '&';
								}
								h += i + '[]=' + jQuery.attr(this,'id');
								o[i][o[i].length] = jQuery.attr(this,'id');
							}
						);
					}
				}
				return {hash:h, o:o};
			},

			addItem : function (e)
			{
				if ( !e.childNodes ) {
					return;
				}
				return this.each(
					function ()
					{
						if(!this.sortCfg || !jQuery(e).is('.' +  this.sortCfg.accept))
							jQuery(e).addClass(this.sortCfg.accept);
						jQuery(e).Draggable(this.sortCfg.dragCfg);
					}
				);
			},

			destroy: function()
			{
				return this.each(
					function()
					{
						jQuery('.' + this.sortCfg.accept).DraggableDestroy();
						jQuery(this).DroppableDestroy();
						this.sortCfg = null;
						this.isSortable = null;
					}
				);
			},

			build : function (o)
			{
				if (o.accept && jQuery.iUtil && jQuery.iDrag && jQuery.iDrop) {
					if (!jQuery.iSort.helper) {
						jQuery('body',document).append('<div id="sortHelper">&nbsp;</div>');
						jQuery.iSort.helper = jQuery('#sortHelper');
						jQuery.iSort.helper.get(0).style.display = 'none';
					}
					this.Droppable(
						{
							accept :  o.accept,
							activeclass : o.activeclass ? o.activeclass : false,
							hoverclass : o.hoverclass ? o.hoverclass : false,
							helperclass : o.helperclass ? o.helperclass : false,
							/*onDrop: function (drag, fx)
									{
										jQuery.iSort.helper.after(drag);
										if (fx > 0) {
											jQuery(drag).fadeIn(fx);
										}
									},*/
							onHover: o.onHover||o.onhover,
							onOut: o.onOut||o.onout,
							sortable : true,
							onChange : 	o.onChange||o.onchange,
							fx : o.fx ? o.fx : false,
							ghosting : o.ghosting ? true : false,
							tolerance: o.tolerance ? o.tolerance : 'intersect'
						}
					);

					return this.each(
						function()
						{
							var dragCfg = {
								revert : o.revert? true : false,
								zindex : 3000,
								opacity : o.opacity ? parseFloat(o.opacity) : false,
								hpc : o.helperclass ? o.helperclass : false,
								fx : o.fx ? o.fx : false,
								so : true,
								ghosting : o.ghosting ? true : false,
								handle: o.handle ? o.handle : null,
								containment: o.containment ? o.containment : null,
								onStart : o.onStart && o.onStart.constructor == Function ? o.onStart : false,
								onDrag : o.onDrag && o.onDrag.constructor == Function ? o.onDrag : false,
								onStop : o.onStop && o.onStop.constructor == Function ? o.onStop : false,
								axis : /vertically|horizontally/.test(o.axis) ? o.axis : false,
								snapDistance : o.snapDistance ? parseInt(o.snapDistance)||0 : false,
								cursorAt: o.cursorAt ? o.cursorAt : false
							};
							jQuery('.' + o.accept, this).Draggable(dragCfg);
							this.isSortable = true;
							this.sortCfg = {
								accept :  o.accept,
								revert : o.revert? true : false,
								zindex : 3000,
								opacity : o.opacity ? parseFloat(o.opacity) : false,
								hpc : o.helperclass ? o.helperclass : false,
								fx : o.fx ? o.fx : false,
								so : true,
								ghosting : o.ghosting ? true : false,
								handle: o.handle ? o.handle : null,
								containment: o.containment ? o.containment : null,
								floats: o.floats ? true : false,
								dragCfg : dragCfg
							}
						}
					);
				}
			}
		};

		jQuery.fn.extend(
			{
				Sortable : jQuery.iSort.build,
				SortableAddItem : jQuery.iSort.addItem,

				SortableDestroy: jQuery.iSort.destroy
			}
		);

		jQuery.SortSerialize = jQuery.iSort.serialize;

		$(document).ready(function(){
			$('#navigation').Sortable({
				accept : 		'sortable',
				containment: "navigation",
				fx:					400,
				floats: 		true,
				opacity:		0.75,
				revert:			true,
				activeclass: "active",
				onStart: 		function(){
					$("#navigation > li").each(function(){
						if($(this).find("ul").children().length == 0){
							$(this).find("ul").remove();
						}

						if($(this).find("ul").length != 0){
							return;
						}

						$(this).append("<ul><li class='sortable'><span class='drop_area'>You can drop your article also in here</span></li></ul>");
					})
				},
				onStop: 		function(){
					$(".drop_area").parent().fadeOut("fast").each(function(){
						if($(this).children().length == 1){
							$(this).parent().remove()
						}else{
							$(this).remove();
						}
					});
				}
			});

			$("#navigation ul").each(function(){
				if($(this).children().length > 20){
					$(this).hide();
				}
			});

			$("#navigation > li").each(function(){
				$(this).children("span a")
			});

			$("body").click(function(event){
				if(event.target.name == "save_navigation"){
					$(".array_navigation").val($.SortSerialize('navigation'));
					$(event.target).parent("form").submit();
					return;
				}

				if(event.target.className == "toggler"){
					$(event.target).parent().next().next().slideToggle("400");
				}
			});
		});

		jQuery.SortSerialize = function(parentId){ // Kick default Serialize function, cause it's CRAP (in my eyes)
			var tmp = [];
			var navigation = parentId+"[]";
			$("#"+parentId).children().each(function(index){
				var children;
				var section = navigation.replace("\[\]", "["+this.id.split("_")[1]+"]");
				if(children = $(this).find("li")){
					if(children.length > 0){
						children.each(function(index){
							tmp.push(section+"["+(index+1)+"]="+this.id.split("_")[1]);
						})
					}
				}
			});
			return tmp.join("&");
		}


/**
 * Cookie plugin
 *
 * Copyright (c) 2006 Klaus Hartl (stilbuero.de)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 */
jQuery.cookie = function(name, value, options) {
	if (typeof value != 'undefined') { // name and value given, set cookie
		options = options || {};
		if (value === null) {
			value = '';
			options.expires = -1;
		}
		var expires = '';
		if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
			var date;
			if (typeof options.expires == 'number') {
				date = new Date();
				date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
			} else {
				date = options.expires;
			}
			expires = '; expires=' + date.toUTCString(); // use expires attribute, max-age is not supported by IE
		}
		// CAUTION: Needed to parenthesize options.path and options.domain
		// in the following expressions, otherwise they evaluate to undefined
		// in the packed version for some reason...
		var path = options.path ? '; path=' + (options.path) : '';
		var domain = options.domain ? '; domain=' + (options.domain) : '';
		var secure = options.secure ? '; secure' : '';
		document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
	} else { // only name given, get cookie
		var cookieValue = null;
		if (document.cookie && document.cookie != '') {
			var cookies = document.cookie.split(';');
			for (var i = 0; i < cookies.length; i++) {
				var cookie = jQuery.trim(cookies[i]);
				// Does this cookie string begin with the name we want?
				if (cookie.substring(0, name.length + 1) == (name + '=')) {
					cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
					break;
				}
			}
		}
		return cookieValue;
	}
};

// HIDE/SHOW IMAGES/ARTICLES
$(document).ready(function() {

	// LINKS:
	// When the "Hide Images" link is clicked:
	$('.imgdisp-off').click(function() {
		$('.imgdisp-off').css('display','none'),
		$('.article-img').animate({width: 'toggle', marginRight: 'toggle'},350),
		$('.no-image em a').animate({marginRight: '13px'},350),
		$('.imgdisp-on').css('display','inline-block'),
		$.cookie('stm_ao_thumb', 'off');
	});
	// When the "Show Images" link is clicked:
	$('.imgdisp-on').click(function() {
		$('.article-img').animate({width: 'toggle', marginRight: 'toggle'},350),
		$('.no-image em a').animate({marginRight: '115px'},350),
		$('.imgdisp-on').css('display','none'),
		$('.imgdisp-off').css('display','inline-block'),
		$.cookie('stm_ao_thumb', 'on');
	});
	// COOKIE:
	var thumb = $.cookie('stm_ao_thumb');
	if (thumb == 'off') {
		$('.article-img,.imgdisp-off').css('display','none'),
		$('.imgdisp-on').css('display','inline-block');
	} else {
		$('.article-img').css('display','inline'),
		$('.imgdisp-on').css('display','none'),
		$('.imgdisp-off').css('display','inline-block');
	};

// HIDE/SHOW ARTICLES
	// LINKS:
	// When the "Hide Articles" link is clicked:
	$('.artdisp-off').click(function() {
		$('.fold').slideUp('400'),
		$('.artdisp-off').css('display','none'),
		$('#section_drop-box .fold').css('display','block'),
		$('.artdisp-on').css('display','inline-block'),
		//$('.imgdisp-off, .imgdisp-on').css('visibility','hidden'),
		$.cookie('stm_ao_article', 'off');
	});
	// When the "Show  Articles" link is clicked:
	$('.artdisp-on').click(function() {
		$('.fold').slideDown('400'),
		$('.artdisp-on').css('display','none'),
		$('.artdisp-off').css('display','inline-block'),
		//$('.imgdisp-off, .imgdisp-on').css('visibility','visible'),
		$.cookie('stm_ao_article', 'on');
	});
	// COOKIE:
	var article = $.cookie('stm_ao_article');
	if (article == 'off') {
		$('.fold,.artdisp-off').css('display','none'),
		$('.artdisp-on').css('display','inline-block'),
		$('#section_drop-box .fold').css('display','block');
	} else {
		$('.fold').css('display','block'),
		$('.artdisp-on').css('display','none'),
		$('.artdisp-off').css('display','inline-block');
	};

	var thumb = $.cookie('stm_ao_thumb');
	if (thumb == 'off') {
		$('.no-image em a').animate({marginRight: '13px'},1);
	} else {
		$('.no-image em a').animate({marginRight: '115px'},1);
	};
// END HIDE/SHOW IMAGES/ARTICLES


// You can link an article from the frontside to stm_article_order and have the clicked entry marked with a green dot when stm_article_order opens.
//  The below code checks for a hash mark in the URL and, in case stm_article_order's article lists are collapsed, unfolds the list and scrolls down 80px for the fixed menu bar.
	if (window.location.hash) {
		$('.fold').css('display','block'),
		$('.artdisp-on').css('display','none'),
		$('.artdisp-off').css('display','inline-block'),
		$('.imgdisp-off, .imgdisp-on').css('visibility','visible'),
		$.cookie('stm_ao_article', 'on');
// Take fixed menu bar into account
		var y = $(window).scrollTop();
		$(window).scrollTop(y-80);
	}

});
	</script>
EOF;
}
# --- END PLUGIN CODE ---
if (0) {
?>
<!--
# --- BEGIN PLUGIN HELP ---
<h2>stm_article_order</h2>
<p></em>(Original plugin help by Stanislav Müller)</em></p>
<hr /><br />
<p>With my new Textpattern plugin you can manipulate the order of your articles and put them in different sections - by simply using drag & drop!</p>

<h2>Installation</h2>

<p>You should use at least Textpattern 4.5 for working with this plugin.</p>

<p>After activating the plugin, you will see a new admin tab at "Presentation » Article Order". Using this menu, you can manipulate the navigation of your website with ease!</p>

<p>As a last step of the installation you’ll have to add the following attribute to your txp:article tag:</p>

<p><code>&lt;txp:article sort=&quot;position asc&quot; /&gt;</code></p>

<p>For "non-blog-sites" we also recommend the  <a href="http://textpattern.org/plugins/206/rdt_dynamenus" >rdt_dynamenus</a> plugin. Using this, you should add the following attribute:</p>

<p><code>&lt;txp:rdt_article_menu sortby=&quot;position&quot; sortdir=&quot;asc&quot; /&gt;</code><br /><br /><br /></p>

<h3>CHANGES BY JCR:</h3>
<hr />
<br />

<p style="font-weight:bold">Changes in v0.3.4 – 13 Feb 2021</p>
<ul>
<li>Minor parse_str() fix for Textpattern 4.8.5 and PHP 7.4+ / PHP 8</li>
<li>Incorporated textpacks in plugin with menu item fix.</li>
</ul>

<br />
<h3>CHANGES BY SPRINGWORKS</h3>
<hr />
<br />

<p style="font-weight:bold">Changes in v0.3</p>

<ul>
<li>Added tab under Extensions to enable selection of sections to be excluded from Article Order tab under Presentations. To support this functionality, an extra column is added to the txp_section table in the database. This is achieved using plugin lifecycle events so the requirement for this version of the plugin has risen to TXP 4.5 or higher.<br>
Much of the additional functionality has been created by borrowing large blocks of code from adi_menu and freely adapting it. Many thanks are due to Adi Gilbert for his unknowing assistance in me being able to extend this plugin!</li>
</ul>

<h3>CHANGES BY ULI:</h3>
<hr />
<br />

<p style="font-weight:bold">Changes in v0.2.4</p>
<ul>
<li>Added two links for folding articles as another means of making the list more manageable. As before, you can expand single sections by clicking their title bars.</li>
<li>Fixed a CSS-bug with the Vanilla Remora stylesheet, that didn't let you select menu items on the stm_ao page, a flaw I introduced in v0.2.3 by positioning the #wrapper div.</li>
</ul>

<p style="font-weight:bold">Changes in v0.2.3</p>
<ul>
<li>Added links for toggling image display, above and below the articles list</li>
<li>Toggle status is saved to a cookie</li>
<li>Articles without images don't show a "missing image" icon any more (Thanks, MattD)</li>
<li>Article status is addressable via CSS class "status_<em>n</em>", where n is a number between 1 and 5</li>
<li>Cleaned up the alignment of IDs and titles (Thanks, RedFox)</li>
<li>Introduced a Drop Box for parking articles you want to move to a section several screen heights above or below its origin with as little steps as possible</li>
</ul>
<br />
<p><strong>The Drop Box</strong> is an experiment. It's a section on a fixed position, nothing more and nothing less. I'm not sure how usable it is, especially with hundreds and thousands of articles. I simply don't have that much articles to test with, hence please decide for yourself.</p>
<br />
<p><strong>Preparing the Drop Box: </strong></p>
<ol>
<li>Create a section that's exactly named "drop-box". (Remove that section from any navs and lists it might appear in.)</li>
<li>Next, create an indicator for successful dropping with a little note on it, by saving an article of hidden type to your drop-box section. Title it e.g. "Let go when upper bar is shifted up".</li>
<li>Look for the article's ID, and, in the plugin's CSS, replace the two instances of "098" with this ID. </li>
</ol>
<p>That's it, you can now try out the Drop Box. </p>

<p><strong>Using the Drop Box: </strong>It's easier dropping articles onto the Drop Box from above, so scroll down as deep as the article involved allows you to and drop the article above the Drop Box. Yes, the best place is above the Drop Box, <em>not</em> immediately thereupon.<br />
Dragging from the last section it sometimes seems impossible to get the dropping indicator to move. If that happens simply let the article go so it lands beside the drop box at the bottom of the list, now labelled with an orange color. It's quite easy to move it over to the Drop Box from there: grab it and hold it, even if you can't see it any more, and, when the Drop Box reacts, let it go.<br />
Now scroll to your destination section and drag the article from the Drop Box over to the section list. I've noticed that moving a parked article into its destination section seems more difficult the deeper you have scrolled on the page, because the deeper you are the wider seems the gap between the article and your pointer while dragging. No idea how to fix this, but it helps to leave some room below the window so your pointer can leave it (try, you'll see what I mean).
<br />
<br />There might be some special cases where it seemed a little challenging to work with the Drop Box, but with a little patience I always succeeded. It might depend on my small amount of articles, though.<br />
<br /><strong>Eliminating the Drop Box: </strong>Just delete its section and, in order to move the article list back to the center, remove one declaration in the plugin's CSS: <br />
<code>left: -12%;</code> in the <code>#wrapper</code> block.</p>

<p style="font-weight:bold">Changes in v0.2.2</p>
<ul>
<li><span style="text-decoration:line-through">Image</span> JPEG support: Shows the article’s thumbnail. (Image display and multiple images in the article image field are mutually exclusive.)</li>
<li>Added image edit link (click the image)</li>
<li>Added article edit link (click the ID)</li>
<li>Displays section titles instead of section names</li>
<li>Sections are now ordered by title</li>
</ul>
<p>Hint: If you want the ID back where it was in v0.2.1, simply delete the float rule for <code>em.article_id a</code></p>

<p style="font-weight:bold">Changes in v0.2.1</p>
<ul></li>
<li>Created an extended bottom area to each section (actually to the last article) so articles don’t slip into Nirvana so easily when you drop them slightly below a section’s last article.</li>
<li>Now one pull suffices where two steps and good thinking were needed before (if you wanted to move an article to the last position).</li>
<li>If you still succeed in dropping an article beside the list (and it is possible), an animation and two advisory notes call your attention and help you get the article onto the desired position. (The first one uses child selector and sibling combinator (IE7+), the text is created by a :before pseudo element that’s known to be unknown to even IE7, but at least color and animation should be visible there.)</li>
<li>Made it a one column design in order to avoid bumpy behavior while pulling articles and toggling sections.</li>
<li>The predictable longer list got a second Save button at the top of the page.</li>
<li>My clients did look for titles not IDs, so I put the ID from the beginning to the end of the line and made it oblique.</li>
<li>Left intentionally: Styles for “fake category headings” (look for this phrase in the plugin’s CSS section in order to use those). It’s the darker grey bars in the topmost screenshot of <a href="http://forum.textpattern.com/viewtopic.php?pid=235775#p235775">my announcement post</a>. I made some of these from empty hidden articles. They simply remind to keep together blocks of articles of the same category. Especially expedient when you use if_different.</li>
</ul>

# --- END PLUGIN HELP ---
-->
<?php
}
?>
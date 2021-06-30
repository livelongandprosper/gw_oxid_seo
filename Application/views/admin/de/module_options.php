<?php
// -------------------------------
// RESOURCE IDENTIFIER = STRING
// -------------------------------
$aLang = array(
    'charset'                                            => 'UTF-8',

	// configuration groups
	'SHOP_MODULE_GROUP_gw_oxid_seo_article_detail' => 'Artikel-Detailseite',
	'SHOP_MODULE_GROUP_gw_oxid_seo_variables' => 'Variablen',

	// configuration parameters
	'SHOP_MODULEgw_oxid_seo_' => '',
	'HELP_SHOP_MODULE_gw_oxid_seo_' => '',

	'SHOP_MODULE_'.'gw_oxid_seo_article_details_seo_title_de' => '<strong>Deutsch:</strong> Title-Tag Artikel-Detailseite',
	'SHOP_MODULE_'.'gw_oxid_seo_article_details_seo_title_en' => '<strong>Englisch:</strong> Title-Tag Artikel-Detailseite',
	'HELP_SHOP_MODULE_'.'gw_oxid_seo_article_details_seo_title_de' => 'Mit dieser Option wird das <strong>"&lt;title&gt;"-Tag</strong> der Artikel-Detailseite definiert. Es können verschiedene Variablen verwendet werden.<br><br><strong>Verwendung:</strong><br>Pro Zeile kann eine Liefergruppe (DB-Feld oxarticles.oxarticles__gw_delivery_id) für die das Title-Tag generiert
		werden soll, angegeben werden. Die Liefergruppe "default" wird verwendet, wenn für einen Artikel keine Zeile für
		seine Liefergruppe gefunden werden kann bzw. das Modul gw_oxid_delivery_cost_extended nicht installiert ist. 
		<br><br>
		<strong>Verfügbare Variablen:</strong><br>
		<strong>[titlePrefix]</strong><br>
		<strong>[title]</strong><br>
		<strong>[titleSuffix]</strong><br>
		<strong>[titlePageSuffix]</strong><br>
		<strong>[attributeColor]</strong> (benötigt Modul gw_oxid_attributes_extended)<br>
		<strong>[attributeMaterial]</strong> (benötigt Modul gw_oxid_attributes_extended)<br>
		<strong>[attributeModelname]</strong> (benötigt Modul gw_oxid_attributes_extended)<br>
		<strong>[attributeModeltype]</strong> (nur für Warengruppe SCH, benötigt Modul gw_oxid_attributes_extended)
		<strong>[colorGroup]</strong> (zweiter Teil der Artikelnummer wird ausgewertet und in die zugehörige Farbgruppe übersetzt – z.B. "grau", "schwarz")<br>
		<strong>[variable1]</strong><br>
		<strong>[variable2]</strong><br>
		<strong>[variable3]</strong><br>
		<strong>[variable4]</strong><br>
		<strong>[variable5]</strong><br>
		<strong>[variable6]</strong><br>
		<strong>[variable7]</strong><br>
		<strong>[variable8]</strong><br>
		<strong>[variable9]</strong><br>
		<strong>[variable10]</strong><br>
	',

	'SHOP_MODULE_'.'gw_oxid_seo_article_details_seo_h1_de' => '<strong>Deutsch:</strong> H1-Überschrift Artikel-Detailseite',
	'SHOP_MODULE_'.'gw_oxid_seo_article_details_seo_h1_en' => '<strong>Englisch:</strong> H1-Überschrift Artikel-Detailseite',
	'HELP_SHOP_MODULE_'.'gw_oxid_seo_article_details_seo_h1_de' => '<strong>Verwendung:</strong><br>Kann von jedem Artikel-Objekt über die Funktion $oArticle->getArticleH1() abgerufen werden.<br><br>
		<strong>Verfügbare Variablen:</strong><br>
		<strong>[attributeColor]</strong> (benötigt Modul gw_oxid_attributes_extended)<br>
		<strong>[attributeMaterial]</strong> (benötigt Modul gw_oxid_attributes_extended)<br>
		<strong>[attributeModelname]</strong> (benötigt Modul gw_oxid_attributes_extended)<br>
		<strong>[attributeModeltype]</strong> (nur für Warengruppe SCH, benötigt Modul gw_oxid_attributes_extended)
		<strong>[colorGroup]</strong> (zweiter Teil der Artikelnummer wird ausgewertet und in die zugehörige Farbgruppe übersetzt – z.B. "grau", "schwarz")<br>
		<strong>[variable1]</strong><br>
		<strong>[variable2]</strong><br>
		<strong>[variable3]</strong><br>
		<strong>[variable4]</strong><br>
		<strong>[variable5]</strong><br>
		<strong>[variable6]</strong><br>
		<strong>[variable7]</strong><br>
		<strong>[variable8]</strong><br>
		<strong>[variable9]</strong><br>
		<strong>[variable10]</strong><br>
		',
	'SHOP_MODULE_'.'gw_oxid_seo_article_details_seo_description_de' => '<strong>Deutsch:</strong> Description für die Artikel-Detailseite konfigurieren.',
	'SHOP_MODULE_'.'gw_oxid_seo_article_details_seo_description_en' => '<strong>Englisch:</strong> Description für die Artikel-Detailseite konfigurieren.',
	'HELP_SHOP_MODULE_'.'gw_oxid_seo_article_details_seo_description_de' => '<strong>Verwendung:</strong><br>Description für die Artikel-Detailseite konfigurieren.<br><br>
		<strong>Verfügbare Variablen:</strong><br>
		<strong>[titlePrefix]</strong><br>
		<strong>[title]</strong><br>
		<strong>[titleSuffix]</strong><br>
		<strong>[titlePageSuffix]</strong><br>
		<strong>[attributeColor]</strong> (benötigt Modul gw_oxid_attributes_extended)<br>
		<strong>[attributeMaterial]</strong> (benötigt Modul gw_oxid_attributes_extended)<br>
		<strong>[attributeModelname]</strong> (benötigt Modul gw_oxid_attributes_extended)<br>
		<strong>[attributeModeltype]</strong> (nur für Warengruppe SCH, benötigt Modul gw_oxid_attributes_extended)
		<strong>[colorGroup]</strong> (zweiter Teil der Artikelnummer wird ausgewertet und in die zugehörige Farbgruppe übersetzt – z.B. "grau", "schwarz")<br>
		<strong>[variable1]</strong><br>
		<strong>[variable2]</strong><br>
		<strong>[variable3]</strong><br>
		<strong>[variable4]</strong><br>
		<strong>[variable5]</strong><br>
		<strong>[variable6]</strong><br>
		<strong>[variable7]</strong><br>
		<strong>[variable8]</strong><br>
		<strong>[variable9]</strong><br>
		<strong>[variable10]</strong><br>
		',

	'SHOP_MODULE_'.'gw_oxid_seo_var_1' => 'Variable [variable1]',
	'HELP_SHOP_MODULE_'.'gw_oxid_seo_var_1' => 'Hier können die von sprache zu sprache unterschiedlichen Werte der Variable festgelegt werden.<br><br>
		<strong>Erlaubte Sprachkürzel: </strong>'.implode(', ', \OxidEsales\Eshop\Core\Registry::getLang()->getActiveShopLanguageIds()).'<br><br>
		<strong>Beispiel-Wert:</strong><br>
		de => online kaufen<br>
		en => shop online<br>
		es => comprar en linea<br>
	',
	'SHOP_MODULE_'.'gw_oxid_seo_var_2' => 'Variable [variable2]',
	'SHOP_MODULE_'.'gw_oxid_seo_var_3' => 'Variable [variable3]',
	'SHOP_MODULE_'.'gw_oxid_seo_var_4' => 'Variable [variable4]',
	'SHOP_MODULE_'.'gw_oxid_seo_var_5' => 'Variable [variable5]',
	'SHOP_MODULE_'.'gw_oxid_seo_var_6' => 'Variable [variable6]',
	'SHOP_MODULE_'.'gw_oxid_seo_var_7' => 'Variable [variable7]',
	'SHOP_MODULE_'.'gw_oxid_seo_var_8' => 'Variable [variable8]',
	'SHOP_MODULE_'.'gw_oxid_seo_var_9' => 'Variable [variable9]',
	'SHOP_MODULE_'.'gw_oxid_seo_var_10' => 'Variable [variable10]',



);

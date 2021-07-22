<?php
/**
 * @abstract
 * @author 	Gregor Wendland <oxid@gregor-wendland.com>
 * @copyright Copyright (c) 2021, Gregor Wendland
 * @package gw
 * @version 2021-06-25
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2'; // see https://docs.oxid-esales.com/developer/en/6.0/modules/skeleton/metadataphp/version20.html

$articleDetailsOptions = array();
foreach(\OxidEsales\Eshop\Core\Registry::getLang()->getActiveShopLanguageIds() as $lang) {
	// SEO Options
	$articleDetailsOptions[] =
		array('group' => 'gw_oxid_seo_article_detail', 'name' => 'gw_oxid_seo_article_details_seo_title_'.$lang, 'type' => 'aarr', 'value' =>
			[
				"SCH" => "[attributeModelname] [attributeModeltype] [attributeColor] [attributeMaterial]",
				"default" => "[titlePrefix] [title] [titleSuffix] [titlePageSuffix]",
			]
		);
	$articleDetailsOptions[] =
		array('group' => 'gw_oxid_seo_article_detail', 'name' => 'gw_oxid_seo_article_details_seo_h1_'.$lang, 'type' => 'aarr', 'value' =>
			[
				"SCH" => "[attributeModeltype] [attributeColor] [attributeMaterial]",
				"default" => "[attributeColor] [attributeMaterial]",
			]
		);
	$articleDetailsOptions[] =
		array('group' => 'gw_oxid_seo_article_detail', 'name' => 'gw_oxid_seo_article_details_seo_description_'.$lang, 'type' => 'aarr', 'value' =>
			[
				"SCH" => "[attributeModelname] [attributeModeltype] in [attributeColor] aus [attributeMaterial]",
				"default" => "[attributeModelname] in [attributeColor] aus [attributeMaterial]",
			]
		);
}

/**
 * Module information
 */
$aModule = array(
    'id'           => 'gw_oxid_seo',
    'title'        => 'SEO-Zusatz-Funktionen',
//     'thumbnail'    => 'out/admin/img/logo.jpg',
    'version'      => '1.0',
    'author'       => 'Gregor Wendland',
    'email'		   => 'oxid@gregor-wendland.de',
    'url'		   => 'https://www.gregor-wendland.com',
    'description'  => array(
    	'de'		=> 'Fügt eine Möglichkeiten hinzu SEO-relevante Einstellung für den Webshop zu treffen
							<ul>
								<li>Generieren von Title-Tag</li>
								<li>Generieren von Überschrift</li>
								<li>Generieren von Description</li>
								<li>Es können Variablen definiert werden, die individuell genutzt werden können</li>
							
							</ul>
						',
    ),
    'extend'       => array(
		OxidEsales\Eshop\Application\Model\Article::class => gw\gw_oxid_seo\Application\Model\Article::class,
		OxidEsales\Eshop\Application\Controller\ArticleDetailsController::class => gw\gw_oxid_seo\Application\Controller\ArticleDetailsController::class,
		OxidEsales\Eshop\Core\ViewConfig::class => gw\gw_oxid_seo\Core\ViewConfig::class,
    ),
    'settings' => array_merge(
		// SEO Options
		$articleDetailsOptions,

		// variables
		array(
			array('group' => 'gw_oxid_seo_variables', 'name' => 'gw_oxid_seo_var_1', 'type' => 'aarr', 'value' =>
				[
					"de" => "",
					"en" => "",
				]
			),
			array('group' => 'gw_oxid_seo_variables', 'name' => 'gw_oxid_seo_var_2', 'type' => 'aarr', 'value' =>
				[
					"de" => "",
					"en" => "",
				]
			),
			array('group' => 'gw_oxid_seo_variables', 'name' => 'gw_oxid_seo_var_3', 'type' => 'aarr', 'value' =>
				[
					"de" => "",
					"en" => "",
				]
			),
			array('group' => 'gw_oxid_seo_variables', 'name' => 'gw_oxid_seo_var_4', 'type' => 'aarr', 'value' =>
				[
					"de" => "",
					"en" => "",
				]
			),
			array('group' => 'gw_oxid_seo_variables', 'name' => 'gw_oxid_seo_var_5', 'type' => 'aarr', 'value' =>
				[
					"de" => "",
					"en" => "",
				]
			),
			array('group' => 'gw_oxid_seo_variables', 'name' => 'gw_oxid_seo_var_6', 'type' => 'aarr', 'value' =>
				[
					"de" => "",
					"en" => "",
				]
			),
			array('group' => 'gw_oxid_seo_variables', 'name' => 'gw_oxid_seo_var_7', 'type' => 'aarr', 'value' =>
				[
					"de" => "",
					"en" => "",
				]
			),
			array('group' => 'gw_oxid_seo_variables', 'name' => 'gw_oxid_seo_var_8', 'type' => 'aarr', 'value' =>
				[
					"de" => "",
					"en" => "",
				]
			),
			array('group' => 'gw_oxid_seo_variables', 'name' => 'gw_oxid_seo_var_9', 'type' => 'aarr', 'value' =>
				[
					"de" => "",
					"en" => "",
				]
			),
			array('group' => 'gw_oxid_seo_variables', 'name' => 'gw_oxid_seo_var_10', 'type' => 'aarr', 'value' =>
				[
					"de" => "",
					"en" => "",
				]
			),
		)
	),
	'files'			=> array(
    ),
	'blocks' => array(
		// frontend

		// backend
/*		array(
			'template' => 'voucherserie_main.tpl',
			'block' => 'admin_voucherserie_main_form',
			'file' => 'Application/views/blocks/admin/admin_voucherserie_main_form.tpl'
		),*/
	),
	'events'       => array(
		'onActivate'   => '\gw\gw_oxid_seo\Core\Events::onActivate',
		'onDeactivate' => '\gw\gw_oxid_seo\Core\Events::onDeactivate'
	),
	'controllers'  => [
	],
	'templates' => [
	]
);
?>

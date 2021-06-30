<?php
namespace gw\gw_oxid_seo\Application\Controller;

use OxidEsales\Eshop\Core\Registry;

/**
 * @see OxidEsales\Eshop\Application\Controller\ArticleDetailsController
 */
class ArticleDetailsController extends ArticleDetailsController_parent {

	/**
	 * Parse a string like "[attributeModelname] [attributemodeltype] [attributeColor]".
	 * Available Parameters:
	 * [titlePrefix]
	 * [title]
	 * [titleSuffix]
	 * [titlePageSuffix]
	 * [attributeColor] (benötigt Modul gw_oxid_attributes_extended)
	 * [attributeMaterial] (benötigt Modul gw_oxid_attributes_extended)
	 * [attributeModelname] (benötigt Modul gw_oxid_attributes_extended)
	 * [attributeModeltype] (nur für Warengruppe SCH, benötigt Modul gw_oxid_attributes_extended)
	 * @param $titleSchema
	 * @return string
	 */
	protected function parseSeoConfigVars($titleSchema) {
		if($titleSchema) {
			$article = $this->getProduct();


			$title = "";
			// replace [titlePrefix]
			$titleSchema = str_ireplace("[titlePrefix]", $this->getTitlePrefix(), $titleSchema);

			// replace [title]
			$titleSchema = str_ireplace("[title]", $this->getTitle(), $titleSchema);

			// replace [titleSuffix]
			$titleSchema = str_ireplace("[titleSuffix]", $this->getTitleSuffix(), $titleSchema);

			// replace[titlePageSuffix]
			$titleSchema = str_ireplace("[titlePageSuffix]", $this->getTitlePageSuffix(), $titleSchema);

			// replace attribute specific tags
			$titleSchema = $article->parseSeoConfigAttributes($titleSchema);

			// replace variable shortcodes
			$titleSchema = $this->getConfig()->getActiveView()->getViewConfig()->parseSeoVariables($titleSchema);
		}
		return htmlspecialchars(trim($titleSchema));
	}

	/**
	 * Returns full page title of an article
	 *
	 * @return string
	 */
	public function getPageTitle() {
		$myConfig = $this->getConfig();
		$baseLanguageAbbr = \OxidEsales\Eshop\Core\Registry::getLang()->getLanguageAbbr();
		$titleSchemata = $myConfig->getConfigParam('gw_oxid_seo_article_details_seo_title_'.$baseLanguageAbbr);
		$article = $this->getProduct();
		$articleDeliveryGroup = $article->oxarticles__gw_delivery_id->value;

		if(is_array($titleSchemata)) {
			if(array_key_exists ( $articleDeliveryGroup , $titleSchemata )) {
				return $this->parseSeoConfigVars($titleSchemata[$articleDeliveryGroup]);
			} elseif(array_key_exists ( 'default' , $titleSchemata )) {
				return $this->parseSeoConfigVars($titleSchemata['default']);
			}
		}
		return parent::getPageTitle();
	}


	/**
	 * Returns current view meta data
	 * If $meta parameter comes empty, sets to it article title and description.
	 * It happens if current view has no meta data defined in oxcontent table
	 *
	 * @param string $meta           User defined description, description content or empty value
	 * @param int    $length         Max length of result, -1 for no truncation
	 * @param bool   $descriptionTag If true - performs additional duplicate cleaning
	 *
	 * @return string
	 */
	protected function _prepareMetaDescription($meta, $length = 200, $descriptionTag = false) {
		if (!$meta) {
			$myConfig = $this->getConfig();
			$baseLanguageAbbr = \OxidEsales\Eshop\Core\Registry::getLang()->getLanguageAbbr();
			$descriptionSchemata = $myConfig->getConfigParam('gw_oxid_seo_article_details_seo_description_'.$baseLanguageAbbr);
			$article = $this->getProduct();
			$articleDeliveryGroup = $article->oxarticles__gw_delivery_id->value;

			if($articleDeliveryGroup && is_array($descriptionSchemata)) {
				if(array_key_exists ( $articleDeliveryGroup , $descriptionSchemata )) {
					$meta = $this->parseSeoConfigVars($descriptionSchemata[$articleDeliveryGroup]);
				} elseif(array_key_exists ( 'default' , $descriptionSchemata )) {
					$meta = $this->parseSeoConfigVars($descriptionSchemata['default']);
				}
			}
		}

		return parent::_prepareMetaDescription($meta, $length, $descriptionTag);
	}
}
?>

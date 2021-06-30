<?php
namespace gw\gw_oxid_seo\Application\Model;

use OxidEsales\Eshop\Core\Registry;

/**
 * @see OxidEsales\Eshop\Application\Controller\Article
 */
class Article extends Article_parent {
	/**
	 * Generate a heading for the current article.
	 * @return string
	 */
	public function getArticleH1() {
		$myConfig = $this->getConfig();
		$baseLanguageAbbr = \OxidEsales\Eshop\Core\Registry::getLang()->getLanguageAbbr();
		$h1Schemata = $myConfig->getConfigParam('gw_oxid_seo_article_details_seo_h1_'.$baseLanguageAbbr);
		$articleDeliveryGroup = $this->oxarticles__gw_delivery_id->value;

		if($articleDeliveryGroup && is_array($h1Schemata)) {
			if(array_key_exists ( $articleDeliveryGroup , $h1Schemata )) {
				return $this->parseSeoConfigAttributes($h1Schemata[$articleDeliveryGroup]);
			} elseif(array_key_exists ( 'default' , $h1Schemata )) {
				return $this->parseSeoConfigAttributes($h1Schemata['default']);
			}
		}
		return "";
	}

	/**
	 * Parse attribute tags
	 * @param $titleSchema
	 * @return string|string[]
	 */
	public function parseSeoConfigAttributes($titleSchema) {
		$myConfig = $this->getConfig();

		// replace [attributeModelname]
		if(method_exists($this, "getAttributesByIdent")) {
			$title = trim($this->getAttributesByIdent('modelname', " "));
			if(!$title) {
				$articleTitle = $this->oxarticles__oxtitle->value;
				$variantSelectionId = $this->oxarticles__oxvarselect->value;
				$variantSelectionValue = $variantSelectionId ? ' ' . $variantSelectionId : '';
				$title = $articleTitle . $variantSelectionValue;
			}
		}
		$titleSchema = str_ireplace("[attributeModelname]", $title, $titleSchema);

		// replace [attributeModeltype]
		if(method_exists($this, "getAttributesByIdent")) {
			$modeltype = $this->getAttributesByIdent('modeltype', " ");
			$titleSchema = str_ireplace(
				"[attributeModeltype]",
				$modeltype,
				$titleSchema
			);
		}

		// replace[attributeColor]
		if(method_exists($this, "getAttributesByIdent")) {
			$titleSchema = str_ireplace(
				"[attributeColor]",
				$this->getAttributesByIdent($myConfig->getConfigParam('gw_oxid_attributes_extended_color_attr'), " "),
				$titleSchema
			);
		}

		// replace[attributeMaterial]
		if(method_exists($this, "getAttributesByIdent")) {
			$titleSchema = str_ireplace(
				"[attributeMaterial]",
				$this->getAttributesByIdent("material", " "),
				$titleSchema
			);
		}

		// replace[colorGroup]
		if(method_exists($this, "getBaseColorName")) {
			$titleSchema = str_ireplace(
				"[colorGroup]",
				$this->getBaseColorName(),
				$titleSchema
			);
		}

		// replace variable shortcodes
		$titleSchema = $myConfig->getActiveView()->getViewConfig()->parseSeoVariables($titleSchema);

		return $titleSchema;
	}

}
?>

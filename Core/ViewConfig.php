<?php
	namespace gw\gw_oxid_seo\Core;

	/**
	 * @see OxidEsales\Eshop\Core\ViewConfig
	 */
	class ViewConfig extends ViewConfig_parent {
		/**
		 *
		 * @param $titleSchema
		 * @return mixed|string|string[]
		 */
		public function parseSeoVariables($titleSchema) {
			$baseLanguageAbbr = \OxidEsales\Eshop\Core\Registry::getLang()->getLanguageAbbr();
			$myConfig = $this->getConfig();
			$configVarToGet = "";

			for($i = 1; $i <= 10; $i++) {
				// replace [variable$i]
				${'seoVariable'.$i} = $myConfig->getConfigParam('gw_oxid_seo_var_1');
				if(is_array(${'seoVariable'.$i}) && array_key_exists($baseLanguageAbbr, ${'seoVariable'.$i})) {
					$titleSchema = str_ireplace("[variable$i]", trim(${'seoVariable'.$i}[$baseLanguageAbbr]), $titleSchema);
				}
			}
			return $titleSchema;
		}

	}
?>

<?php
/**
 * Static Translations plugin for Craft CMS 3.x
 *
 * Detect changes in your templates and edit static translation strings from the Control Panel.
 *
 * @link      https://michaelpierce.trade/
 * @copyright Copyright (c) 2018 Mike Pierce
 */

namespace monachilada\statictranslations\variables;

use monachilada\statictranslations\StaticTranslations;

use Craft;

/**
 * Static Translations Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.staticTranslations }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Mike Pierce
 * @package   StaticTranslations
 * @since     1.0.0
 */
class StaticTranslationsVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.staticTranslations.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.staticTranslations.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}

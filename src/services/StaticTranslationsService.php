<?php
/**
 * Static Translations plugin for Craft CMS 3.x
 *
 * Detect changes in your templates and edit static translation strings from the Control Panel.
 *
 * @link      https://michaelpierce.trade/
 * @copyright Copyright (c) 2018 Mike Pierce
 */

namespace monachilada\statictranslations\services;

use monachilada\statictranslations\StaticTranslations;

use Craft;
use craft\base\Component;

/**
 * StaticTranslationsService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Mike Pierce
 * @package   StaticTranslations
 * @since     1.0.0
 */
class StaticTranslationsService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     StaticTranslations::$plugin->staticTranslationsService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';
        // Check our Plugin's settings for `someAttribute`
        if (StaticTranslations::$plugin->getSettings()->someAttribute) {
        }

        return $result;
    }
}

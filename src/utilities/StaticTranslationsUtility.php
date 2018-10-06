<?php
/**
 * Static Translations plugin for Craft CMS 3.x
 *
 * Detect changes in your templates and edit static translation strings from the Control Panel.
 *
 * @link      https://michaelpierce.trade/
 * @copyright Copyright (c) 2018 Mike Pierce
 */

namespace monachilada\statictranslations\utilities;

use monachilada\statictranslations\StaticTranslations;
use monachilada\statictranslations\assetbundles\statictranslationsutilityutility\StaticTranslationsUtilityUtilityAsset;

use Craft;
use craft\base\Utility;

/**
 * Static Translations Utility
 *
 * Utility is the base class for classes representing Control Panel utilities.
 *
 * https://craftcms.com/docs/plugins/utilities
 *
 * @author    Mike Pierce
 * @package   StaticTranslations
 * @since     1.0.0
 */
class StaticTranslationsUtility extends Utility
{
    // Static
    // =========================================================================

    /**
     * Returns the display name of this utility.
     *
     * @return string The display name of this utility.
     */
    public static function displayName(): string
    {
        return Craft::t('static-translations', 'StaticTranslationsUtility');
    }

    /**
     * Returns the utility’s unique identifier.
     *
     * The ID should be in `kebab-case`, as it will be visible in the URL (`admin/utilities/the-handle`).
     *
     * @return string
     */
    public static function id(): string
    {
        return 'statictranslations-static-translations-utility';
    }

    /**
     * Returns the path to the utility's SVG icon.
     *
     * @return string|null The path to the utility SVG icon
     */
    public static function iconPath()
    {
        return Craft::getAlias("@monachilada/statictranslations/assetbundles/statictranslationsutilityutility/dist/img/StaticTranslationsUtility-icon.svg");
    }

    /**
     * Returns the number that should be shown in the utility’s nav item badge.
     *
     * If `0` is returned, no badge will be shown
     *
     * @return int
     */
    public static function badgeCount(): int
    {
        return 0;
    }

    /**
     * Returns the utility's content HTML.
     *
     * @return string
     */
    public static function contentHtml(): string
    {
        Craft::$app->getView()->registerAssetBundle(StaticTranslationsUtilityUtilityAsset::class);

        $someVar = 'Have a nice day!';
        return Craft::$app->getView()->renderTemplate(
            'static-translations/_components/utilities/StaticTranslationsUtility_content',
            [
                'someVar' => $someVar
            ]
        );
    }
}

<?php

namespace App;

use App\Models\HeroImage;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\GridField\GridField;
use Symbiote\GridFieldExtensions\GridFieldOrderableRows;

/**
 * Class \App\CustomSiteConfig
 *
 * @property \SilverStripe\SiteConfig\SiteConfig|\App\CustomSiteConfig $owner
 */
class CustomSiteConfig extends DataExtension
{

    private static $db = [
    ];

    private static $has_many = [
    ];

    private static $owns = [
    ];

    public function updateCMSFields(FieldList $fields)
    {

    }
}

<?php

namespace App\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\DropdownField;

/**
 * Class \App\Elements\TextImageElement
 *
 * @property int $Height
 * @property string $Topline
 * @property int $ImageID
 * @method \SilverStripe\Assets\Image Image()
 */
class BannerElement extends BaseElement
{

    private static $db = [
        "Height" => "Int",
        "Topline" => "Varchar(255)",
    ];

    private static $has_one = [
        "Image" => Image::class,
    ];

    private static $owns = [
        "Image"
    ];

    private static $field_labels = [
        "Image" => "Bild",
        "Height" => "Höhe",
        "Topline" => "kleine Überschrift",
    ];

    private static $defaults = [
        "Height" => 400,
    ];

    private static $table_name = 'BannerElement';
    private static $icon = 'font-icon-block-banner';

    public function getType()
    {
        return "Banner";
    }

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        return $fields;
    }
}

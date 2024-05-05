<?php

namespace App\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Assets\File;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\DropdownField;

/**
 * Class \App\Elements\TextImageElement
 *
 * @property string $Text
 * @property string $ButtonTitle
 * @property int $FileID
 * @method \SilverStripe\Assets\File File()
 */
class DownloadElement extends BaseElement
{

    private static $db = [
        "Text" => "HTMLText",
        "ButtonTitle" => "Varchar(255)",
    ];

    private static $has_one = [
        "File" => File::class,
    ];

    private static $owns = [
        "File"
    ];

    private static $field_labels = [
        "Text" => "Text",
        "File" => "Datei",
        "ButtonTitle" => "Button Titel",
    ];

    private static $table_name = 'DownloadElement';
    private static $icon = 'font-icon-block-promo-3';

    public function getType()
    {
        return "Download";
    }

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        return $fields;
    }
}

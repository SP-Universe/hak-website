<?php

namespace App\Elements;

use App\Models\HeroSlideImage;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\DropdownField;
use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\GridField\GridField;
use Symbiote\GridFieldExtensions\GridFieldOrderableRows;

/**
 * Class \App\Elements\TextImageElement
 *
 * @method \SilverStripe\ORM\DataList|\App\Models\HeroSlideImage[] Slides()
 */
class HeroElement extends BaseElement
{

    private static $db = [
    ];

    private static $has_many = [
        "Slides" => HeroSlideImage::class,
    ];

    private static $owns = [
        "Slides",
    ];

    private static $field_labels = [
    ];

    private static $defaults = [
    ];

    private static $table_name = 'HeroElement';
    private static $icon = 'font-icon-block-banner';

    private static $inline_editable = false;

    public function getType()
    {
        return "Hero";
    }

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $gridfield = GridField::create(
            "HeroImages",
            "Hero Bilder",
            $this->Slides(),
            \SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor::create()
        );
        $gridfield->getConfig()->addComponent(new GridFieldOrderableRows("SortOrder"));
        $fields->addFieldToTab("Root.Main", $gridfield);
        return $fields;
    }
}

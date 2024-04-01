<?php

namespace App\KnowledgeBase;

use App\Events\EventAdmin;
use SilverStripe\Assets\File;
use SilverStripe\Assets\Image;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;
use DNADesign\Elemental\Forms\ElementalAreaField;
use DNADesign\Elemental\Extensions\ElementalPageExtension;

/**
 * Class \App\Team\TeamMember
 *
 * @property int $Version
 * @property string $Title
 * @property string $ShortDescription
 * @property string $LinkTitle
 * @property int $ElementalAreaID
 * @property int $ImageID
 * @method \DNADesign\Elemental\Models\ElementalArea ElementalArea()
 * @method \SilverStripe\Assets\Image Image()
 * @mixin \SilverStripe\Versioned\Versioned
 * @mixin \DNADesign\Elemental\Extensions\ElementalPageExtension
 */
class KnowledgeBaseEntry extends DataObject
{
    private static $db = [
        "Title" => "Varchar(255)",
        "ShortDescription" => "Text",
        "LinkTitle" => "Varchar(255)",
    ];

    private static $has_one = [
        "Image" => Image::class,
    ];

    private static $owns = [
        "Image",
    ];

    private static $default_sort = "Title ASC";

    private static $field_labels = [
        "Title" => "Titel",
        "Description" => "Beschreibung",
        "Image" => "Titelbild",
    ];

    private static $summary_fields = [
        "Title" => "Titel",
    ];

    private static $searchable_fields = [
        "Title"
    ];

    private static $table_name = "KnowledgeBaseEntry";

    private static $singular_name = "Wissen";
    private static $plural_name = "Wissen";

    private static $url_segment = "knowledge-base-entry";

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        //$fields->addFieldToTab('Root.Main', ElementalAreaField::create('Inhalt', $this->ElementalArea(), $this->getElementalTypes()));
        return $fields;
    }

    public function onBeforeWrite()
    {
        parent::onBeforeWrite();
        if (!$this->LinkTitle) {
            $this->LinkTitle = $this->generateLinkTitle();
        }
    }

    public function generateLinkTitle()
    {
        $title = $this->Title;
        $title = strtolower($title);
        $title = str_replace(" ", "-", $title);
        return $title;
    }

    public function CMSEditLink()
    {
        $admin = EventAdmin::singleton();
        $urlClass = str_replace('\\', '-', self::class);
        return $admin->Link("/{$urlClass}/EditForm/field/{$urlClass}/item/{$this->ID}/edit");
    }

    public function getLink()
    {
        $holder = KnowledgeBasePage::get()->first();
        return $holder->Link() . "/view/" . $this->LinkTitle;
    }

    private static $extensions = [
        Versioned::class,
        ElementalPageExtension::class,
    ];

    public function CanView($member = null)
    {
        return true;
    }

    public function CanEdit($member = null)
    {
        return true;
    }

    public function CanDelete($member = null)
    {
        return true;
    }

    public function CanCreate($member = null, $context = [])
    {
        return true;
    }
}

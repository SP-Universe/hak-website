<?php

namespace App\Models;

use App\Elements\HeroElement;
use App\KnowledgeBase\KnowledgeBaseEntry;
use SilverStripe\Assets\Image;
use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Permission;
use SilverStripe\SiteConfig\SiteConfig;

/**
 * Class \ProjectImage
 *
 * @property string $Title
 * @property string $Link
 * @property string $YoutubeLink
 * @property string $Imagerights
 * @property int $SortOrder
 * @property int $ParentID
 * @property int $LinkedKnowledgeID
 * @property int $ImageID
 * @method \App\Elements\HeroElement Parent()
 * @method \App\KnowledgeBase\KnowledgeBaseEntry LinkedKnowledge()
 * @method \SilverStripe\Assets\Image Image()
 */
class HeroSlideImage extends DataObject
{
    private static $db = [
        "Title" => "Varchar(255)",
        "Link" => "Varchar(255)",
        "YoutubeLink" => "Varchar(255)",
        "Imagerights" => "Varchar(255)",
        "SortOrder" => "Int",
    ];

    private static $has_one = [
        "Parent" => HeroElement::class,
        "LinkedKnowledge" => KnowledgeBaseEntry::class,
        "Image" => Image::class,
    ];

    private static $owns = [
        "Image",
    ];


    private static $singular_name = "Hero Bild";
    private static $plural_name = "Hero Bilder";
    private static $default_sort = "SortOrder ASC, Title ASC";
    private static $table_name = "HeroImage";

    private static $summary_fields = [
        "Thumbnail",
        "Title"
    ];

    private static $field_labels = [
        "Thumbnail" => "Bild",
        "Title" => "Titel",
        "LinkedKnowledge" => "Verlinktes Wissen",
        "Imagerights" => "Bildrechte",
    ];

    public function getThumbnail()
    {
        if ($this->Image()->exists()) {
            return $this->Image()->Fill(100, 100);
        }
    }

    public function getThumbnailUrl()
    {
        if ($this->Image()->exists()) {
            return $this->Image()->Fill(100, 100)->getAbsoluteUrl();
        }
    }

    public function getImageUrl()
    {
        if ($this->Image()->exists()) {
            return $this->Image()->ScaleMaxWidth(1200)->getAbsoluteURl();
        }
    }

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->removeByName("SortOrder");
        $fields->removeByName("ParentID");
        return $fields;
    }

    public function canView($member = null)
    {
        return Permission::check('CMS_ACCESS_App\PagesAdmin', 'any', $member);
    }

    public function canEdit($member = null)
    {
        return $this->canView($member);
    }

    public function canDelete($member = null)
    {
        return $this->canView($member);
    }

    public function canCreate($member = null, $context = [])
    {
        return $this->canView($member);
    }
}

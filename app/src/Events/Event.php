<?php

namespace App\Events;

use App\Team\TeamAdmin;
use App\Team\TeamSocial;
use App\Events\EventAdmin;
use App\Events\EventCategory;
use App\Team\TeamMemberImage;
use SilverStripe\Assets\Image;
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\View\Parsers\URLSegmentFilter;

/**
 * Class \App\Team\TeamMember
 *
 * @property string $Title
 * @property string $ShortDescription
 * @property string $Date
 * @property string $EndTime
 * @property string $Location
 * @property string $LinkTitle
 * @property int $CategoryID
 * @property int $ImageID
 * @method \App\Events\EventCategory Category()
 * @method \SilverStripe\Assets\Image Image()
 */
class Event extends DataObject
{
    private static $db = [
        "Title" => "Varchar(255)",
        "ShortDescription" => "Varchar(512)",
        "Date" => "Datetime",
        "EndTime" => "Time",
        "Location" => "Varchar(255)",
        "LinkTitle" => "Varchar(255)",
    ];

    private static $has_one = [
        "Category" => EventCategory::class,
        "Image" => Image::class,
    ];

    private static $owns = [
        "Image"
    ];

    private static $default_sort = "Date ASC";

    private static $field_labels = [
        "Title" => "Titel",
        "Description" => "Beschreibung",
        "ShortDescription" => "Kurzbeschreibung (für Vorschau)",
        "Date" => "Datum & Uhrzeit",
        "Location" => "Ort",
        "Imagerights" => "Bildrechte",
        "LinkTitle" => "Linkadresse",
        "Image" => "Bild",
        "CategoryID" => "Kategorie",
    ];

    private static $summary_fields = [
        "Title" => "Titel",
        "DateFormatted" => "Datum",
        "Location" => "Ort",
        "Category.Title" => "Kategorie",
    ];

    private static $searchable_fields = [
        "Title", "Category.Title"
    ];

    private static $table_name = "Event";

    private static $singular_name = "Termin";
    private static $plural_name = "Termine";

    private static $url_segment = "event";

    public function populateDefaults()
    {
        $this->Date = date('Y-m-d H:00:00');
        parent::populateDefaults();
    }

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab("Root.Main", TextField::create("ShortDescription", "Kurzbeschreibung"), "Description");
        $fields->insertAfter("Image", TextField::create("LinkTitle", "Link Adresse (wird generiert)"));
        $fields->insertAfter("Image", TextField::create("Imagerights", "Bildrechte (wenn benötigt)"));
        return $fields;
    }

    public function CMSEditLink()
    {
        $admin = EventAdmin::singleton();
        $urlClass = str_replace('\\', '-', self::class);
        return $admin->Link("/{$urlClass}/EditForm/field/{$urlClass}/item/{$this->ID}/edit");
    }

    public function onBeforeWrite()
    {
        if ($this->LinkTitle == "") {
            $filter = URLSegmentFilter::create();
            $filteredTitle = $filter->filter($this->Title);

            $eventsWithSameName = Event::get()->filter([
                "LinkTitle" => $filteredTitle,
            ]);
            if ($eventsWithSameName->count() > 0) {
                $filteredTitle .= "-{$eventsWithSameName->count()}";
            }
            $this->LinkTitle = $filteredTitle;
        }
        parent::onBeforeWrite();
    }

    public function DateFormatted()
    {
        return date("d.m.Y H:i", strtotime($this->Date));
    }

    public function getLink()
    {
        $eventsHolder = EventPage::get()->first();
        if ($eventsHolder) {
            return $eventsHolder->Link("view/{$this->LinkTitle}");
        } else {
            return "no EventsHolder found";
        }
    }
}

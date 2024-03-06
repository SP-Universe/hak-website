<?php

namespace App\Events;

use App\Team\TeamAdmin;
use App\Team\TeamSocial;
use App\Events\EventAdmin;
use App\Team\TeamMemberImage;
use SilverStripe\Assets\Image;
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\DropdownField;

/**
 * Class \App\Team\TeamMember
 *
 * @property string $Title
 * @property string $ColorCode
 */
class EventCategory extends DataObject
{
    private static $db = [
        "Title" => "Varchar(255)",
        "ColorCode" => "Varchar(7)",
    ];

    private static $default_sort = "Title DESC";

    private static $field_labels = [
        "Title" => "Name",
        "ColorCode" => "Farbcode (HEX)",
    ];

    private static $summary_fields = [
        "Title" => "Name",
        "ColorCode" => "Farbcode (HEX)",
    ];

    private static $searchable_fields = [
        "Title",
    ];

    private static $table_name = "EventCategory";

    private static $singular_name = "Kategorie";
    private static $plural_name = "Kategorien";

    private static $url_segment = "eventcategory";

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab("Root.Main", DropdownField::create("ColorCode", "Farbe", [
            "#BBBE64" => "Zitrone",
            "#EAF0CE" => "Beige",
            "#C0C5C1" => "Silber",
            "#7D8491" => "Grau",
        ]));
        return $fields;
    }

    public function CMSEditLink()
    {
        $admin = EventAdmin::singleton();
        $urlClass = str_replace('\\', '-', self::class);
        return $admin->Link("/{$urlClass}/EditForm/field/{$urlClass}/item/{$this->ID}/edit");
    }

    public function getLink()
    {
        $eventsHolder = EventPage::get()->first();
        if($eventsHolder){
            return $eventsHolder->Link("category/{$this->ID}");
        }
        else{
            return "no EventsHolder found";
        }
    }
}

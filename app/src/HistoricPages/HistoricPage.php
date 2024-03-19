<?php

namespace App\HistoricPages;

use App\Events\EventAdmin;
use SilverStripe\Assets\File;
use SilverStripe\Assets\Image;
use SilverStripe\ORM\DataObject;

/**
 * Class \App\Team\TeamMember
 *
 * @property int $Number
 * @property string $Title
 * @property string $Description
 * @property int $ReadingProbeID
 * @property int $CoverID
 * @method \SilverStripe\Assets\File ReadingProbe()
 * @method \SilverStripe\Assets\Image Cover()
 */
class HistoricPage extends DataObject
{
    private static $db = [
        "Number" => "Int",
        "Title" => "Varchar(255)",
        "Description" => "HTMLText",

    ];

    private static $has_one = [
        "ReadingProbe" => File::class,
        "Cover" => Image::class,
    ];

    private static $owns = [
        "Cover",
        "ReadingProbe"
    ];

    private static $default_sort = "Number ASC";

    private static $field_labels = [
        "Number" => "Nummer",
        "Title" => "Titel",
        "Description" => "Beschreibung",
        "ReadingProbe" => "Leseprobe",
        "Cover" => "Cover",
    ];

    private static $summary_fields = [
        "Title" => "Titel",
        "DateFormatted" => "Datum",
        "Location" => "Ort",
        "Category.Title" => "Kategorie",
    ];

    private static $searchable_fields = [
        "Number", "Title"
    ];

    private static $table_name = "HistoricPage";

    private static $singular_name = "Historisches Blatt";
    private static $plural_name = "Historische Blätter";

    private static $url_segment = "historic-page";

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        return $fields;
    }

    public function CMSEditLink()
    {
        $admin = EventAdmin::singleton();
        $urlClass = str_replace('\\', '-', self::class);
        return $admin->Link("/{$urlClass}/EditForm/field/{$urlClass}/item/{$this->ID}/edit");
    }
}

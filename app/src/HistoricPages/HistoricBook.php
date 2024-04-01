<?php

namespace App\HistoricPages;

use App\Events\EventAdmin;
use SilverStripe\Assets\File;
use SilverStripe\Assets\Image;
use SilverStripe\ORM\DataObject;

/**
 * Class \App\Team\TeamMember
 *
 * @property int $SortOrder
 * @property string $Title
 * @property string $Author
 * @property string $Version
 * @property string $Description
 * @property int $CoverID
 * @method \SilverStripe\Assets\Image Cover()
 */
class HistoricBook extends DataObject
{
    private static $db = [
        "SortOrder" => "Int",
        "Title" => "Varchar(255)",
        "Author" => "Varchar(255)",
        "Version" => "Varchar(255)",
        "Description" => "HTMLText",
    ];

    private static $has_one = [
        "Cover" => Image::class,
    ];

    private static $owns = [
        "Cover",
    ];

    private static $default_sort = "SortOrder ASC";

    private static $field_labels = [
        "Number" => "Nummer",
        "Title" => "Titel",
        "Author" => "Autor",
        "Version" => "Version (Ausgabejahr/Auflage)",
        "Description" => "Beschreibung",
        "Cover" => "Titelblatt",
    ];

    private static $summary_fields = [
        "Title" => "Titel",
        "Author" => "Autor",
    ];

    private static $searchable_fields = [
        "Title"
    ];

    private static $table_name = "HistoricBook";

    private static $singular_name = "Buch";
    private static $plural_name = "Bücher";

    private static $url_segment = "historic-book";

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

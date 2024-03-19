<?php

namespace App\Elements;

use App\Events\Event;
use App\Events\EventPage;
use App\Models\HeroSlideImage;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\DropdownField;
use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\GridField\GridField;
use Symbiote\GridFieldExtensions\GridFieldOrderableRows;

/**
 * Class \App\Elements\TextImageElement
 *
 */
class EventElement extends BaseElement
{

    private static $db = [
    ];

    private static $field_labels = [
    ];

    private static $defaults = [
    ];

    private static $table_name = 'EventElement';
    private static $icon = 'font-icon-block-banner';

    private static $inline_editable = false;

    public function getType()
    {
        return "Event-Liste";
    }

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        return $fields;
    }

    public function getEvents()
    {
        return Event::get()->filter(['Date:GreaterThan' => date('Y-m-d H:i:s')])->sort('Date', 'ASC');
    }

    public function getAllEventsOverviewLink()
    {
        $holder = EventPage::get()->first()->Link();
        if ($holder) {
            return $holder;
        }
    }
}

<?php

namespace App\Events;

use Page;

    /**
 * Class \Page
 *
 */
class EventPage extends Page
{
    private static $table_name = 'EventPage';
    private static $icon = "app/client/icons/cms/events_page_icon.svg";
    private static $plural_name = 'Termin-Seiten';
    private static $singular_name = 'Termin-Seite';
    private static $description = "Eine Seite, die die aktuellen Termine anzeigt";

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        return $fields;
    }
}

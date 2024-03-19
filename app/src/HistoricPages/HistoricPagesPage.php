<?php

namespace App\HistoricPages;

use Page;
use App\HistoricPages\HistoricPage;

    /**
 * Class \Page
 *
 */
class HistoricPagesPage extends Page
{
    private static $table_name = 'HistoricPagesPage';
    private static $icon = "app/client/icons/cms/events_page_icon.svg";
    private static $plural_name = 'Historische Blätter-Seiten';
    private static $singular_name = 'Historische Blätter-Seite';
    private static $description = "Eine Seite, die die historischen Blätter anzeigt";

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        return $fields;
    }

    public function getHistoricPages()
    {
        return HistoricPage::get()->sort('Number', 'ASC');
    }
}

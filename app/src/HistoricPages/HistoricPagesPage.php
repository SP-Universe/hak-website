<?php

namespace App\HistoricPages;

use Page;
use SilverStripe\Forms\TextField;
use App\HistoricPages\HistoricPage;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

    /**
 * Class \Page
 *
 * @property string $HistoricBooksTitle
 * @property string $HistoricBooksText
 * @property string $HistoricPagesTitle
 * @property string $HistoricPagesText
 */
class HistoricPagesPage extends Page
{
    private static $db = [
        "HistoricBooksTitle" => "Varchar(255)",
        "HistoricBooksText" => "HTMLText",
        "HistoricPagesTitle" => "Varchar(255)",
        "HistoricPagesText" => "HTMLText",
    ];
    private static $table_name = 'HistoricPagesPage';
    private static $icon = "app/client/icons/cms/events_page_icon.svg";
    private static $plural_name = 'Historische Blätter-Seiten';
    private static $singular_name = 'Historische Blätter-Seite';
    private static $description = "Eine Seite, die die historischen Blätter anzeigt";

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Texte', TextField::create('HistoricBooksTitle', 'Bücher Titel'));
        $fields->addFieldToTab('Root.Texte', HTMLEditorField::create('HistoricBooksText', 'Bücher Beschreibung'));
        $fields->addFieldToTab('Root.Texte', TextField::create('HistoricPagesTitle', 'Blätter Titel'));
        $fields->addFieldToTab('Root.Texte', HTMLEditorField::create('HistoricPagesText', 'Blätter Beschreibung'));
        return $fields;
    }

    public function getHistoricPages()
    {
        return HistoricPage::get()->sort('Number', 'ASC');
    }

    public function getHistoricBooks()
    {
        return HistoricBook::get()->sort('SortOrder', 'ASC');
    }
}

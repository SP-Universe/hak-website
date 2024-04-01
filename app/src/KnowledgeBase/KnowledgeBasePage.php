<?php

namespace App\KnowledgeBase;

use Page;
use App\KnowledgeBase\KnowledgeBaseEntry;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

    /**
 * Class \Page
 *
 * @property string $Introduction
 */
class KnowledgeBasePage extends Page
{
    private static $db = [
        "Introduction" => "HTMLText",
    ];

    private static $table_name = 'KnowledgeBasePage';
    private static $icon = "app/client/icons/cms/knowledgebase_page_icon.svg";
    private static $plural_name = 'Wissens-Seiten';
    private static $singular_name = 'Wissens-Seite';
    private static $description = "Eine Seite, die die Wissensdatenbank anzeigt";

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Main', HTMLEditorField::create('Introduction', 'Einleitung'));
        return $fields;
    }
}

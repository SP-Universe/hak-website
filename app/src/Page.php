<?php

namespace {

    use SilverStripe\CMS\Model\SiteTree;
    use SilverStripe\Forms\DropdownField;

    /**
 * Class \Page
 *
 * @property string $MenuPosition
 * @property int $ElementalAreaID
 * @method \DNADesign\Elemental\Models\ElementalArea ElementalArea()
 * @mixin \DNADesign\Elemental\Extensions\ElementalPageExtension
 */
    class Page extends SiteTree
    {
        private static $db = [
            "MenuPosition" => "Enum('main,footer,topbar', 'main')",
        ];

        private static $has_one = [];
        private static $plural_name = 'Standard-Seiten';
        private static $singular_name = 'Standard-Seite';
        private static $description = "Eine Standard Seite mit Elementen";

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();
            $fields->addFieldToTab("Root.Main", new DropdownField("MenuPosition", "Menü", [
                "main" => "Hauptmenü",
                "footer" => "Footer",
                "topbar" => "Kopfleiste",
            ]), "Content");
            return $fields;
        }
    }
}

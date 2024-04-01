<?php
namespace App\KnowledgeBase;

use App\KnowledgeBase\KnowledgeBaseEntry;
use SilverStripe\Admin\ModelAdmin;

/**
 * Class \App\Team\TeamAdmin
 *
 */
class KnowledgeBaseAdmin extends ModelAdmin
{

    private static $managed_models = array (
        KnowledgeBaseEntry::class,
    );

    private static $url_segment = "knowledgebase";

    private static $menu_title = "Wissen";

    private static $menu_icon = "app/client/icons/cms/knowledgebase_admin_icon.svg";

    public function init()
    {
        parent::init();
    }

    public function getEditForm($id = null, $fields = null)
    {
        $form = parent::getEditForm($id, $fields);
        return $form;
    }
}

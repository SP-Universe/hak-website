<?php
namespace App\HistoricPages;

use App\HistoricPages\HistoricPage;
use SilverStripe\Admin\ModelAdmin;

/**
 * Class \App\Team\TeamAdmin
 *
 */
class HistoricPagesAdmin extends ModelAdmin
{

    private static $managed_models = array (
        HistoricPage::class,
    );

    private static $url_segment = "historicpages";

    private static $menu_title = "Historische Blätter";

    private static $menu_icon = "app/client/icons/cms/events_admin_icon.svg";

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

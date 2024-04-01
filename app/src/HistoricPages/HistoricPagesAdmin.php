<?php
namespace App\HistoricPages;

use SilverStripe\Admin\ModelAdmin;
use App\HistoricPages\HistoricBook;
use App\HistoricPages\HistoricPage;

/**
 * Class \App\Team\TeamAdmin
 *
 */
class HistoricPagesAdmin extends ModelAdmin
{

    private static $managed_models = array (
        HistoricPage::class,
        HistoricBook::class,
    );

    private static $url_segment = "historicpages";

    private static $menu_title = "Publikationen";

    private static $menu_icon = "app/client/icons/cms/historicpages_admin_icon.svg";

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

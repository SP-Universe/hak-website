<?php
namespace App\Events;

use App\Team\Character;
use App\Team\TeamMember;
use App\Events\EventCategory;
use SilverStripe\Admin\ModelAdmin;
use SilverStripe\Forms\GridField\GridField;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

/**
 * Class \App\Team\TeamAdmin
 *
 */
class EventAdmin extends ModelAdmin
{

    private static $managed_models = array (
        Event::class,
        EventCategory::class,
    );

    private static $url_segment = "events";

    private static $menu_title = "Termine";

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

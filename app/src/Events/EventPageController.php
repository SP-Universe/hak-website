<?php
namespace App\Events;

//use jamesbolitho\frontenduploadfield\UploadField;
use PageController;
use App\Events\EventCategory;
use App\Offers\EventPackageCategory;
use SilverStripe\Control\HTTPRequest;

/**
 * Class \App\Docs\DocsPageController
 *
 * @property \App\Events\EventPage $dataRecord
 * @method \App\Events\EventPage data()
 * @mixin \App\Events\EventPage
 */
class EventPageController extends PageController
{
    private static $allowed_actions = [
        "view"
    ];

    public function view()
    {
        $linktitle = $this->getRequest()->param("ID");
        $event = Event::get()->filter("LinkTitle", $linktitle);
        if ($event->count() === 0) {
            return $this->httpError(404); //Not working yet...
        }
        return [
            "Event" => $event->first(),
        ];
    }

    public function getEvents()
    {
        $events = Event::get()->filter("Date:GreaterThan", date("Y-m-d H:i:s"));
        return $events;
    }

    public function getCategories()
    {
        $categories = EventCategory::get();
        return $categories;
    }
}

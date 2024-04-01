<?php
namespace App\KnowledgeBase;

//use jamesbolitho\frontenduploadfield\UploadField;
use PageController;
use App\KnowledgeBase\KnowledgeBaseEntry;

/**
 * Class \App\Docs\DocsPageController
 *
 * @property \App\KnowledgeBase\KnowledgeBasePage $dataRecord
 * @method \App\KnowledgeBase\KnowledgeBasePage data()
 * @mixin \App\KnowledgeBase\KnowledgeBasePage
 */
class KnowledgeBasePageController extends PageController
{
    private static $allowed_actions = [
        "view"
    ];

    public function view()
    {
        $linktitle = $this->getRequest()->param("ID");
        $entry = KnowledgeBaseEntry::get()->filter("LinkTitle", $linktitle);
        if ($entry->count() === 0) {
            return $this->httpError(404); //Not working yet...
        }
        return [
            "KnowledgeBaseEntry" => $entry->first(),
        ];
    }

    public function getKnowledgeBaseEntries()
    {
        return KnowledgeBaseEntry::get()->sort('Title', 'ASC');
    }
}

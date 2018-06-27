<?php

namespace dokuwiki\plugin\odtplus2dw;
use dokuwiki\Menu\Item\AbstractItem;

/**
 * Class MenuItem
 *
 * Implements the import button for DokuWiki's menu system
 *
 * @package dokuwiki\plugin\odtplus2dw
 */
class MenuItem extends AbstractItem {
    /** @var string do action for this plugin */
    public $type = 'odtplus2dw';
    /** @var string icon file */
    public $svg = __DIR__ . '/writer.svg';
    /**
     * MenuItem constructor.
     */
    public function __construct() {
        parent::__construct();
        global $REV;
        if($REV) $this->params['rev'] = $REV;
    }
    /**
     * Get label from plugin language file
     *
     * @return string
     */
    public function getLabel() {
        $hlp = plugin_load('action', 'odtplus2dw');
        return $hlp->getLang('import_button');
    }
}
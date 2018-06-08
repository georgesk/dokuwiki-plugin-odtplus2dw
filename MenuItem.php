<?php

namespace dokuwiki\plugin\odt2dw;
use dokuwiki\Menu\Item\AbstractItem;

/**
 * Class MenuItem
 *
 * Implements the odt import button for DokuWiki's menu system
 *
 * @package dokuwiki\plugin\odt2dw
 */
class MenuItem extends AbstractItem {
    /** @var string do action for this plugin */
    protected $type = 'odt2dw';
    /** @var string icon file */
    protected $svg = __DIR__ . '/writer.svg';
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
        $hlp = plugin_load('action', 'odt2dw');
        return $hlp->getLang('import_odt_button');
    }
}
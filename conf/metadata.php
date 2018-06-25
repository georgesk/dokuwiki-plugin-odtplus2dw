<?php
/**
 * Options for the odt2dw plugin
 *
 * @author Greg BELLAMY <garlik.crx@gmail.com> [Gag]
 * @author José Torrecilla <qky669@gmail.com>
 */


$meta['debugLvl']                 = array('multichoice', '_choices' => array(0,1,2,3));
$meta['logFile']                  = array('string');
$meta['formDisplayRule']          = array( 'multicheckbox', '_choices' => array( 'odtplus2dw', 'edit', 'show' ) );
$meta['showimportbutton']         = array('onoff');
$meta['formIntroMessage']         = array('');
$meta['formMaxFileSize']          = array('numericopt');
$meta['parserPostDisplay']        = array('multichoice', '_choices' => array( 'odtplus2dw', 'edit', 'show', 'preview' ) );
$meta['parserXslFile']            = array('string');
$meta['parserLinkToOriginalFile'] = array('onoff');
$meta['parserCoreTimeOut']        = array('numericopt');
$meta['parserUploadDir']          = array('string');
$meta['parserMimeTypeAuthorized'] = array('');
$meta['parserMimeTypePandoc']     = array('');
$meta['parserMimeTypeSOffice']    = array('');

<?php
/**
 * English language setting file
 *
 * @author Greg BELLAMY <garlik.crx@gmail.com> [Gag]
 * @author José Torrecilla <qky669@gmail.com>
 */

$lang['debugLvl']                 = "Debug mode -- more verbose : 0-void, 1-Display error, 2-Log&Display error, 3-Log&Display all message";
$lang['logFile']                  = "Path to the log file";
$lang['formDisplayRule']          = "Action list where the import file form will be displayed";
$lang['formIntroMessage']         = "<div>Message shown before the upload form</div><div>  - dokuwiki syntax allowed</div><div>  - Default value : default -> get the message from the default language file</div>";
$lang['formMaxFileSize']          = "<div>Max file size allowed to upload</div><div>The value must be lower than the Apache max size value</div>";
$lang['parserPostDisplay']        = "Displayed mask after an import";
$lang['parserXslFile']            = "Name of the xslFile used to transform";
$lang['parserLinkToOriginalFile'] = "Create a link to original file into the dokuwiki page";
$lang['parserCoreTimeOut']        = "Special TimeOut used when parsing the odt content by xslt (default : 300).";
$lang['parserUploadDir']          = "Path where the file will be uploaded";
$lang['parserMimeTypeAuthorized'] = "<div>Mimetypes authorized to upload</div>
                                     <div>
                                       Default: 
                                       <tt>
                                         application/vnd.oasis.opendocument.text
                                         application/octetstream
                                         application/vnd.openxmlformats-officedocument.wordprocessingml.document
                                         application/msword
                                       </tt>
                                     </div>
                                     <div><b>application/vnd.oasis.opendocument.text</b> default common .odt mimetype</div>
                                     <div><b>application/octetstream</b> mimetype used by Chrome on Windows XP for .odt files</div>
                                     <div><b>application/vnd.openxmlformats-officedocument.wordprocessingml.document</b> .docx mimetype</div>
                                     <div><b>application/msword</b> .doc mimetype</div>
                                     <div>Add missing mimetypes if necessary</div>
                                     <div>Leave empty to disable the control.</div>";
$lang['parserMimeTypePandoc']     = "<div>Mimetypes that need Pandoc conversion</div>
                                     <div>
                                       Default: 
                                       <tt>
                                         application/vnd.openxmlformats-officedocument.wordprocessingml.document
                                       </tt>
                                     </div>
                                     <div>Add missing mimetypes if necessary. Remember to add them to parserMimeTypeAuthorized too (if used).</div>";
$lang['parserMimeTypeSOffice']    = "<div>Mimetypes that need SOffice conversion</div>
                                     <div>
                                       Default: 
                                       <tt>
                                         application/msword
                                       </tt>
                                     </div>
                                     <div>Add missing mimetypes if necessary. Remember to add them to parserMimeTypeAuthorized too (if used).</div>";

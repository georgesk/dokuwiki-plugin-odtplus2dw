<?php
/**
 * English language file
 *
 * @author Mark Prins <mprins@users.sf.net>
 * @author Greg BELLAMY <garlik.crx@gmail.com> [Gag]
 * @author José Torrecilla <qky669@gmail.com>
 */

$lang['formLegend']  = "Import a file";
$lang['formIntroMessage'] = "You can create this page **importing a file** from your computer.\\\
More the file follows the word processing rules, better will be the result";
$lang['formPageExistMessage'] = "**WARNING!!! This page already exist. If you upload a file, the current page will be archived.**

";
$lang['import_odt_button'] = "Import file";

$lang['parserSummary'] = "File build by odtplus2dw plugin from file";
$lang['parserOriginalFile'] = "Original file";

$lang['xsl_subtable_message'] = "FIXME: A complex table was detected, you will probably need to make manual corrections.";

$lang['ok_infoPlugin']  = "Plugin installed";
$lang['ok_img']         = "Image correctly processed";
$lang['ok_unzip']       = "Extraction correctly processed";

$lang['inf_acl_upload'] = "You don't have enough permissions to store the original file on the wiki, so this file is not saved on the server.";
$lang['inf_xslt_lang'] = "No translation available to xsl stylesheet. Default value applied";
$lang['inf_xslt_param'] = "Unable to set parameter on xsltProcessor. Default value applied";

$lang['er_acl_create'] = "Not enough access permissions to create a page here";
$lang['er_acl_edit'] = "Not enough access permissions to edit a page here";
$lang['er_acl_upload'] = "Not enough access permissions to import an attachment here";
$lang['er_apply'] = "Error saving the parsed data";
$lang['er_apply_content'] = "Unable to store the content";
$lang['er_apply_img'] = "Unable to store the attachment";
$lang['er_apply_odtFile'] = "Unable to store the original file";
$lang['er_checkUploadResult'] = "Something is wrong with the uploaded file";
$lang['er_class_domDocument'] = "Fatal error: Unable to initialize DOMDocument object";
$lang['er_class_xsltProcessor'] = "Fatal error: Unable to initialize XsltProcessor object";
$lang['er_class_zipArchive'] = "Fatal error: Unable to initialize ZipArchive object";
$lang['er_id'] = "Wrong use of this plugin. _odtplus2dw must be called with defined namepage (\$ID)";
$lang['er_img_rename'] = "Unable to rename the image file";
$lang['er_img_unzip'] = "Unable to extract the image file";
$lang['er_invalidRoot'] = "RootNode of uploaded document is wrong. The file might be corrupt";
$lang['er_loadXml'] = "Unable to load the content of the document. The file might be corrupt";
$lang['er_loadXsl'] = "Xsl file is wrong (xml syntax). Please check and correct the file";
$lang['er_logFile'] = "Unable to write in the logFile";
$lang['er_msg_nomessage'] = "Wrong use of this plugin. _msg must be called with a message";
$lang['er_odtFile_format'] = "Wrong file upload. The file type is not supported";
$lang['er_odtFile_getFromDownload'] = "Unable to catch the upload file";
$lang['er_odtFile_miss'] = "Wrong use of this plugin. _odt2dw must be called by an upload file form";
$lang['er_odtFile_tmpDir'] = "Unable to create the work temporary directory.";
$lang['er_odtFile_unzip'] = "Unable to extract the file";
$lang['er_odtFile_upload'] = "Something went wrong with the file's upload";
$lang['er_pg_dir'] = "Unable to remove the temporary directory";
$lang['er_pg_file'] = "Unable to delete the temporary file";
$lang['er_transform'] = "Something went wrong with the parser transforming odtFile to dokuwiki content";
$lang['er_unzip_error'] = "Unable to extract file";
$lang['er_unzip_nofile'] = "No archive file found";
$lang['er_unzip_object'] = "Archive manager not loaded";
$lang['er_unzip_open'] = "Unable to open the archive file";
$lang['er_xslFile_exist'] = "The file set as **parserXslFile** doesn't exist or can be read";
$lang['er_xslFile_isfile'] = "The file set as **parserXslFile** is not a file";
$lang['er_xslFile_notset'] = "Wrong value for **parserXslFile** parameter ";
$lang['er_xsltProc'] = "Fatal error : Something went wrong while setting the xsltProcessor";
$lang['er_xslt_invalid'] = "Xsl file is wrong (xsl syntax). Please check and correct the file";

//Setup VIM: ex: et ts=2 enc=utf-8 :

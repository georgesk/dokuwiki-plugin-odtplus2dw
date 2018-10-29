<?php
/**
 * French language file
 *
 * @author Mark Prins <mprins@users.sf.net>
 * @author Greg BELLAMY <garlik.crx@gmail.com> [Gag]
 * @author José Torrecilla <qky669@gmail.com>
 */

$lang['formLegend']  = "Importer un fichier";
$lang['formIntroMessage'] = "Vous pouvez créér cette page en **important un fichier** depuis votre ordinateur.\\\
Plus le fichier se rapproche du format 'Word', meilleur en sera le résultat";
$lang['formPageExistMessage'] = "<color red> **ATTENTION!!! Cette page existe déjà. Si vous envoyez un fichier, La page actuelle sera archivée.** </color>

";
$lang['import_button'] = "Importer un fichier";

$lang['parserSummary'] = "Page créée par le plugin odtplus2dw depuis un fichier";
$lang['parserOriginalFile'] = "Fichier original";

$lang['xsl_subtable_message'] = "FIXME: Un tableau complexe a été détecté, des corrections manuelles seront propablement nécessaires.";

$lang['ok_infoPlugin']  = "Plugin installé";
$lang['ok_img']         = "Image traitée correctement";
$lang['ok_unzip']       = "Extraction effectuée avec succès";

$lang['inf_acl_upload'] = "Vous n'avez pas de permissions suffisantes pour enregistrer le fichier sur le wiki, le fichier n'est donc pas enregistré sur le serveur.";
$lang['inf_xslt_lang'] = "Aucune traduction n'est disponible pour xsl stylesheet. La valeur par défaut sera appliquée";
$lang['inf_xslt_param'] = "Impossible de définir les paramètres pour xsltProcessor. La valeur par défaut sera appliquée";

$lang['er_acl_create'] = "Permissions insuffisantes pour créer la page ici";
$lang['er_acl_edit'] = "Permissions insuffisantes pour modifier la page ici";
$lang['er_acl_upload'] = "Permissions insuffisantes pour importer un fichier ici";
$lang['er_apply'] = "Une erreur est survenue lors de l'enregistrement des données analysées";
$lang['er_apply_content'] = "Impossible d'enregistrer le contenu";
$lang['er_apply_img'] = "Impossible d'enregistrer le fichier joint";
$lang['er_apply_file'] = "Impossible d'enregistrer le fichier original";
$lang['er_checkUploadResult'] = "Le fichier envoyé semble incorrect";
$lang['er_class_domDocument'] = "Erreur fatale: L'initialisation de l'objet DOMDocument à échouée";
$lang['er_class_xsltProcessor'] = "Erreur fatale: L'initialisation de l'objet XsltProcessor à échouée";
$lang['er_class_zipArchive'] = "Erreur fatale: L'initialisation de l'objet ZipArchive à échouée";
$lang['er_id'] = "Usage incorrect du plugin. _odtplus2dw doit être utilisé depuis la page ou l'espace de nom (\$ID)";
$lang['er_img_rename'] = "Impossible de renommer le fichier image";
$lang['er_img_unzip'] = "Impossible d'extraire le fichier image";
$lang['er_invalidRoot'] = "Le document envoyé ne peut être ouvert. Il est peut-être corrompu.";
$lang['er_loadXml'] = "Impossible de lire le contenu du document envoyé. Il est peut-être corrompu.";
$lang['er_loadXsl'] = "Le fichier Xsl est incorrect (syntaxe xml). Merci de corriger le fichier.";
$lang['er_logFile'] = "Impossible d'écrire dans le fichier journal";
$lang['er_msg_nomessage'] = "Usage incorrect du plugin. _odtplus2dw doit être appelé avec des arguments";
$lang['er_file_format'] = "Fichier téléversé icorrect. Ce type de fichier n'est pas supporté.";
$lang['er_file_getFromDownload'] = "Unable to catch the upload file";
$lang['er_file_miss'] = "Usage incorrect du plugin. _odtplus2dw doit être appelé depuis un formulaire d'importationde fichier";
$lang['er_file_tmpDir'] = "Création du répertoire temporaire impossible.";
$lang['er_file_unzip'] = "Impossible d'extraire le fichier";
$lang['er_file_upload'] = "Une erreur s'est produite avec le fichier envoyé";
$lang['er_pg_dir'] = "Suppression du répertoire temporaire impossible";
$lang['er_pg_file'] = "Supression du fichier temporaire impossible";
$lang['er_transform'] = "Une erreur s'est produite lors de la conversion du fichier au format DokuWiki";
$lang['er_unzip_error'] = "Impossible d'extraire le fichier";
$lang['er_unzip_nofile'] = "Aucune archive n'a été trouvée";
$lang['er_unzip_object'] = "Le gestionnaire d'archives n'est pas chargé";
$lang['er_unzip_open'] = "Ouverture de l'archive impossible";
$lang['er_xslFile_exist'] = "Le fichier défini comme étant **parserXslFile** n'existe pas ou ne peut être lu.";
$lang['er_xslFile_isfile'] = "Le fichier défini comme étant **parserXslFile** n'est pas un fichier";
$lang['er_xslFile_notset'] = "Mauvaise valeur de paramètres pour **parserXslFile** .";
$lang['er_xsltProc'] = "Erreur fatale: Une erreur s'est produite lors du paramètrage du ''xsltProcessor''";
$lang['er_xslt_invalid'] = "Le fichier Xsl est incorrect (syntaxe xml). Merci de vérifier et corriger le fichier.";

//Setup VIM: ex: et ts=2 enc=utf-8 :

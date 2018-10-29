<?php
/**
 * English language setting file
 *
 * @author Greg BELLAMY <garlik.crx@gmail.com> [Gag]
 * @author José Torrecilla <qky669@gmail.com>
 */

$lang['debugLvl']                 = "Mode de debogage -- plus bavard : 0-aucun, 1-Afficher les erreurs, 2-Journaliser et afficher les erreurs, 3-Journaliser et afficher tous les messages";
$lang['logFile']                  = "Chemin du fichier de journalisation (log)";
$lang['formDisplayRule']          = "Pages ou action où afficher l'option d'import de fichier";
$lang['formIntroMessage']         = "<div>Message affiché avant le téléversement de fichierdiv>
                                     <div>  - la syntaxe wiki est autorisée</div>
                                     <div>  - Valeur par défaut : default -> Affiche le message par défaut depuis le fichier de lanque</div>";
$lang['formMaxFileSize']          = "<div>Taille maximum du fichier à envoyer</div>
                                     <div>Cette valeur doit être inférieure à la valeur définie dans Apache</div>";
$lang['showimportbutton']         = "Afficher le menu d'import (dans le menu des outils de page)";
$lang['parserPostDisplay']        = "Page à afficher après l'import";
$lang['parserXslFile']            = "Fichier xsl à utiliser pour la conversion.";
$lang['parserLinkToOriginalFile'] = "Créer un lien vers le fichier original dans la page du wiki.";
$lang['parserCoreTimeOut']        = "Délai maximum utilisé pour l'analyse du document (defaut : 300).";
$lang['parserUploadDir']          = "Dossier où enregistrer le fichier téléversé";
$lang['parserMimeTypeAuthorized'] = "<div>Types MIME autorisés pour l'envoi</div>
                                     <div>
                                       Par defaut: 
                                       <tt>
                                         application/vnd.oasis.opendocument.text
                                         application/octetstream
                                         application/vnd.openxmlformats-officedocument.wordprocessingml.document
                                         application/msword
                                       </tt>
                                     </div>
                                     <div><b>application/vnd.oasis.opendocument.text</b> Type par défaut des fichiers .odt</div>
                                     <div><b>application/octetstream</b> Type Mime utilisé par Chrome sur Windows XP pour les fichiers .odt</div>
                                     <div><b>application/vnd.openxmlformats-officedocument.wordprocessingml.document</b> Type mimi des fichiers .docx</div>
                                     <div><b>application/msword</b> type mime des fichiers .doc</div>
                                     <div>Ajouter les types mime manquants si nécessaire</div>
                                     <div>Laissez vide pour désactiver le contrôle lors du téléversement</div>";
$lang['parserMimeTypePandoc']     = "<div>Type mime des fichiers pour lesquels une convertion Pandoc est nécessaire.</div>
                                     <div>
                                       Par defaut: 
                                       <tt>
                                         application/vnd.openxmlformats-officedocument.wordprocessingml.document
                                       </tt>
                                     </div>
                                     <div>Ajouter les types mime manquants si nécessaire. Penser à les ajouter également à 'parserMimeTypeAuthorized' (si utilisé).</div>";
$lang['parserMimeTypeSOffice']    = "<div>Type mime des fichiers pour lesquels une convertion SOffice est nécessaire</div>
                                     <div>
                                       Par defaut: 
                                       <tt>
                                         application/msword
                                       </tt>
                                     </div>
                                     <div>Ajouter les types mime manquants si nécessaire. Penser à les ajouter également à 'parserMimeTypeAuthorized' (si utilisé).</div>";

<?php
/**
 * Spanish language file
 *
 * @author Mark Prins <mprins@users.sf.net>
 * @author Greg BELLAMY <garlik.crx@gmail.com> [Gag]
 * @author José Torrecilla <qky669@gmail.com>
 */

$lang['formLegend']  = "Importar un archivo";
$lang['formIntroMessage'] = "Puedes crear esta página **importando un archivo** desde tu ordenador.\\\
Cuanto mejor siga las reglas de procesado de textos el archivo, mejor será el resultado";
$lang['formPageExistMessage'] = "**¡¡¡ADVERTENCIA!!! Esta página ya existe. Si subes un archivo, la página actual será archivada.**

";
$lang['import_button'] = "Importar archivo";

$lang['parserSummary'] = "Archivo construido por el plugin odtplus2dw a partir de un archivo";
$lang['parserOriginalFile'] = "Archivo original";

$lang['xsl_subtable_message'] = "ARRÉGLAME: Se ha detectado una tabla compleja, probablemente necesitarás hacer correcciones manuales.";

$lang['ok_infoPlugin']  = "Plugin instalado";
$lang['ok_img']         = "Imagen procesada correctamente";
$lang['ok_unzip']       = "Extracción procesada correctamente";

$lang['inf_acl_upload'] = "No tienes permisos suficientes para guardar el archivo original en la wiki, por lo que el archivo no ha sido guardado en el servidor.";
$lang['inf_xslt_lang'] = "No hay traducción disponible en la hoja xsl. Se ha aplicado el valor por defecto";
$lang['inf_xslt_param'] = "Imposible establecer parámetro en el xsltProcessor. Se ha aplicado el valor por defecto";

$lang['er_acl_create'] = "No tienes permisos suficientes para crear una página aquí";
$lang['er_acl_edit'] = "No tienes permisos suficientes para editar una página aquí";
$lang['er_acl_upload'] = "No tienes permisos suficientes para importar un archivo adjunto aquí";
$lang['er_apply'] = "Error guardando los datos analizados";
$lang['er_apply_content'] = "Imposible guardar el contenido";
$lang['er_apply_img'] = "Imposible guardar el archivo adjunto";
$lang['er_apply_file'] = "Imposible guardar el archivo original";
$lang['er_checkUploadResult'] = "Hay algo incorrecto en el archivo subido";
$lang['er_class_domDocument'] = "Error fatal: Imposible inicializar el objeto DOMDocument";
$lang['er_class_xsltProcessor'] = "Error fatal: Imposible inicializar el objeto XsltProcessor";
$lang['er_class_zipArchive'] = "Error fatal: Imposible inicializar el objeto ZipArchive";
$lang['er_id'] = "Uso erróneo de este plugin. Se debe llamar a _odtplus2dw con un nombre de página definido (\$ID)";
$lang['er_img_rename'] = "Imposible renombrar el archivo de imagen";
$lang['er_img_unzip'] = "Imposible extraer el archivo de imagen";
$lang['er_invalidRoot'] = "El RootNode del archivo subido es incorrecto. El archivo podría estar corrupto";
$lang['er_loadXml'] = "Imposible cargar el contenido del documento. El archivo podría estar corrupto";
$lang['er_loadXsl'] = "El archivo xsl es erróneo (sintaxis xml). Por favor, compruébalo y corrige el archivo";
$lang['er_logFile'] = "Imposible escribir en el archivo de log";
$lang['er_msg_nomessage'] = "Uso erróneo de este plugin. Se debe llamar a _msg con un mensaje";
$lang['er_file_format'] = "Archivo subido incorrecto. El Archivo es de un tipo no permitido";
$lang['er_file_getFromDownload'] = "Imposible capturar el archivo subido";
$lang['er_file_miss'] = "Uso erróneo de este plugin. Se debe llamar a _odtplus2dw desde un formulario de subida de archivo";
$lang['er_file_tmpDir'] = "Imposible crear el directorio temporal de trabajo.";
$lang['er_file_unzip'] = "Imposible extraer el archivo";
$lang['er_file_upload'] = "Algo fue mal en la subida del archivo";
$lang['er_pg_dir'] = "Imposible eliminar el directorio temporal";
$lang['er_pg_file'] = "Imposible eliminar el archivo temporal";
$lang['er_transform'] = "Algo fue mal con el análisis transformando el fichero odt a contenido dokuwiki";
$lang['er_unzip_error'] = "Imposible extraer el archivo";
$lang['er_unzip_nofile'] = "Archivo no encontrado";
$lang['er_unzip_object'] = "Administrador de archivos no cargado";
$lang['er_unzip_open'] = "Imposible abrir el archivo comprimido";
$lang['er_xslFile_exist'] = "El archivo establecido como **parserXslFile** no existe o no se puede leer";
$lang['er_xslFile_isfile'] = "El archivo establecido como **parserXslFile** no es un archivo";
$lang['er_xslFile_notset'] = "Valor erróneo para el parámetro **parserXslFile**";
$lang['er_xsltProc'] = "Error fatal: Algo fue mal mientras se ajustaba el xsltProcessor";
$lang['er_xslt_invalid'] = "El archivo xsl es incorrecto (sintaxis xsl). Por favor, compruébalo y corrige el archivo";

//Setup VIM: ex: et ts=2 enc=utf-8 :

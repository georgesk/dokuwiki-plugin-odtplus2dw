<?php
/**
 * Spanish language setting file
 *
 * @author Greg BELLAMY <garlik.crx@gmail.com> [Gag]
 * @author José Torrecilla <qky669@gmail.com>
 */

$lang['debugLvl']                 = "Modo de depuración -- más detallado: 0-Nada, 1-Mostrar error, 2-Registrar&Mostrar error, 3-Registrar&Mostrar todos los mensajes";
$lang['logFile']                  = "Ruta del archivo log";
$lang['formDisplayRule']          = "Lista de acciones en las que se mostrará el formulario para importar archivo";
$lang['formIntroMessage']         = "<div>Mensaje mostrado antes del formulario de subida</div>
                                     <div>  - Sintaxis dokuwiki permitida</div>
                                     <div>  - Valor por defecto: por defecto  -> obtener el mensaje del archivo de lenguaje por defecto</div>";
$lang['formMaxFileSize']          = "<div>Tamaño máximo permitido de archivo para subir</div><div>Este valor debe ser menor que el valor de tamaño máximo de Apache</div>";
$lang['parserPostDisplay']        = "Máscara mostrada tras la importación";
$lang['parserXslFile']            = "Nombre del archivo xsl utilizado en la transformación";
$lang['parserLinkToOriginalFile'] = "Crear un enlace al archivo original en la página dokuwiki";
$lang['parserCoreTimeOut']        = "Tiempo máximo de espera especial usado por el xslt al analizar el contenido odt (valor por defecto: 300).";
$lang['parserUploadDir']          = "Ruta en la que se subirá el archivo";
$lang['parserMimeTypeAuthorized'] = "<div>Mimetypes permitidos para subir</div>
                                     <div>
                                       Valor por defecto: 
                                       <tt>
                                         application/vnd.oasis.opendocument.text
                                         application/octetstream
                                         application/vnd.openxmlformats-officedocument.wordprocessingml.document
                                         application/msword
                                       </tt>
                                     </div>
                                     <div><b>application/vnd.oasis.opendocument.text</b> mimetype de archivos .odt común por defecto</div>
                                     <div><b>application/octetstream</b> mimetype usado por Chrome en Windows XP para los archivos .odt</div>
                                     <div><b>application/vnd.openxmlformats-officedocument.wordprocessingml.document</b> mimetype de archivos .docx</div>
                                     <div><b>application/msword</b> mimetype de archivos .doc</div>
                                     <div>Añadir mimetypes adicionales si es necesario</div>
                                     <div>Dejar en blanco para deshabilitar esta validación.</div>";
$lang['parserMimeTypePandoc']     = "<div>Mimetypes que necesitan conversión Pandoc</div>
                                     <div>
                                       Default: 
                                       <tt>
                                         application/vnd.openxmlformats-officedocument.wordprocessingml.document
                                       </tt>
                                     </div>
                                     <div>Añadir mimetypes adicionales si es necesario. Recuerda añadirlos también a parserMimeTypeAuthorized (si se usa).</div>";
$lang['parserMimeTypeSOffice']    = "<div>Mimetypes que necesitan conversión SOffice</div>
                                     <div>
                                       Default: 
                                       <tt>
                                         application/msword
                                       </tt>
                                     </div>
                                     <div>Añadir mimetypes adicionales si es necesario. Recuerda añadirlos también a parserMimeTypeAuthorized (si se usa).</div>";

# odtplus2dw

odtplus2dw is a plugin for dokuwiki.

Forked from odt2dw to add doc/docx support.
More information about odtplus2dw at http://www.dokuwiki.org/plugin:odtplus2dw
More information about odt2dw at http://www.dokuwiki.org/plugin:odt2dw
More information about dokuwiki at http://www.dokuwiki.org

## Description

This plugin lets you import a document into Dokuwiki. It supports (at least) .odt, .doc, .docx formats. It should also work with any other document format that pandoc supports, but it has not been tested yet.

## Installation 

This plugin needs:
  * php xsltProcessor class (ex : php-xml, php5-xsl)
  * php zipArchive class
  * pandoc
  * soffice (ex: libreoffice-writer)

If you run the Dokuwiki server on Debian, you can accomplish this requirements following this directions:

- Install some packages needed:

`apt-get wget default-jre php5-xsl libreoffice-writer`

- If you wish, you can execute the script `installLatestPandoc.sh` (included with this plugin) to install the latest version of pandoc. Or you can install pandoc any other way (check that version installed is not very outdated, or the conversion can fail).

### soffice conversion (.doc support)

PHP code (at least in my system) is executed by the user `daemon`. I had problems running a Java application with this user (it seems soffice is a Java application) so I decided to run the soffice conversion using `sudo`. To make it work, I had to add a line to the file `/etc/sudoers`. You can do the same executing: 

`echo "daemon ALL=(root)NOPASSWD:/usr/bin/soffice" >> /etc/sudoers`

I'm not a security expert, but I think that this should not be a problem for anybody. If you do not use the soffice conversion (.doc support), you don't need to do this.

If PHP code is executed by any other user on your system, you only have to change it in the previous command.

## Change Log

v0.10 beta. Changed to odtplus2dw. Added doc/docx support
v0.09 beta
  * Adjust method signatures to match parent
  * Add import button
v0.08 beta
  * Fixe : bug #9
  * Fixe : bug #14
v0.07 beta
  * Fixe : parserPostDisplay now works with choice edit or preview
  * Fixe : better class existence control
v0.06 beta
  * Fixe : some small fixes to the english messages
  * Add  : message translation in Dutch (By mprins)
  * Fixe : check for mime type was too specific : It could be set in config panel
  * Fixe : submit button was not translated and stay in french : His value depend of the dokuwiki lang file now.
v0.05 beta
  * Fixe : display an error if the parserUploadDir directory doesn't exists. Now it will be create if needed.

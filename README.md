# odtplus2dw Plugin

Create a dokuwiki page from a file.

- More information about odtplus2dw at http://www.dokuwiki.org/plugin:odtplus2dw
- More information about odt2dw at http://www.dokuwiki.org/plugin:odt2dw
- More information about dokuwiki at http://www.dokuwiki.org

## Description

odtplus2dw is a plugin for dokuwiki (forked from odt2dw to add doc/docx support). This plugin lets you import a document into Dokuwiki. It supports (at least) .odt, .doc, .docx formats. It should also work with any other document format that pandoc supports, but it has not been tested yet.

## Usage

From a Dokuwiki page, click on the "Import file" button in the Page Tools. Select a File and click upload.

## Installation 

**External requirements:** This plugin requires the following additional components that must be installed separately:

- php xsltProcessor class (ex : php-xml, php5-xsl)
- php zipArchive class
- pandoc
- soffice (ex: libreoffice-writer)

If you run the Dokuwiki server on Debian, you can accomplish this requirements following this directions:

- Install some packages needed:

`sudo apt-get wget default-jre php5-xsl libreoffice-writer`

- If you wish, you can execute the script `installLatestPandoc.sh` (included with this plugin) to install the latest version of pandoc. Or you can install pandoc any other way (check that version installed is not very outdated, or the conversion can fail).

### soffice conversion (.doc support)

PHP code (at least in my system) is executed by the user `daemon`. I had problems running a Java application with this user (it seems soffice is a Java application) so I decided to run the soffice conversion using `sudo`. To make it work, I had to add a line to the file `/etc/sudoers`. You can do the same executing: 

`sudo echo "daemon ALL=(root)NOPASSWD:/usr/bin/soffice" >> /etc/sudoers`

I'm not a security expert, but I think that this should not be a problem for anybody. If you do not use the soffice conversion (.doc support), you don't need to do this.

If PHP code is executed by any other user on your system, you only have to change it in the previous command.

## Configuration and Settings

They are almost self-explanatory.

## Change Log

### v0.11 beta

- Now the names of uploaded files can contain spaces.

### v0.10 beta

- Changed name to odtplus2dw.
- Added doc/docx support.
- Added spanish translation.
- Removed some translations (I can't update them, so I had to remove).

### v0.09 beta

- Adjust method signatures to match parent.
- Add import button.

### v0.08 beta

- Fixed : bug #9.
- Fixed : bug #14.

### v0.07 beta

- Fixed : parserPostDisplay now works with choice edit or preview.
- Fixed : better class existence control.

### v0.06 beta

- Fixed : some small fixes to the english messages.
- Add : message translation in Dutch (By mprins).
- Fixed : check for mime type was too specific : It could be set in config panel.
- Fixed : submit button was not translated and stay in french : His value depend of the dokuwiki lang file now.

### v0.05 beta

- Fixed : display an error if the parserUploadDir directory doesn't exists. Now it will be create if needed.

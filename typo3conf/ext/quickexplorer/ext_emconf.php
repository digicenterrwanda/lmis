<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "quickexplorer".
 *
 * Auto generated 15-02-2020 16:52
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Typo3 Quickexplorer',
  'description' => 'This extension introduces quickexplorer, a with typo3 7.6 compatible version of t3quixplorer. A backend module that makes you capable of exploring the files and folders of your entire webserver. Browse directories. View and edit ascii files. Create, copy, move, delete, archive files and directories. Download and upload files. Change permissions on files and folders.',
  'category' => 'module',
  'version' => '8.7.0',
  'state' => 'stable',
  'uploadfolder' => false,
  'createDirs' => '',
  'clearcacheonload' => false,
  'author' => 'Karel Kuijpers',
  'author_email' => 'karelkuijpers@gmail.com',
  'author_company' => '',
  'constraints' => 
  array (
    'depends' => 
    array (
      'php' => '7.0.0-7.9.99',
      'typo3' => '8.7.0-8.7.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  '_md5_values_when_last_written' => 'a:103:{s:13:"changelog.txt";s:4:"7a5c";s:21:"ext_conf_template.txt";s:4:"fcaa";s:12:"ext_icon.gif";s:4:"eccb";s:17:"ext_localconf.php";s:4:"184d";s:14:"ext_tables.php";s:4:"279b";s:16:"locallang_db.xml";s:4:"41c3";s:25:"dev/defined_constants.txt";s:4:"9a97";s:17:"dev/fulljslint.js";s:4:"8ffa";s:13:"dev/links.txt";s:4:"79cf";s:27:"dev/php-syntax-check.tar.gz";s:4:"ba0c";s:14:"doc/manual.sxw";s:4:"041b";s:14:"Resources/Public/Icons/clear.gif";s:4:"cc11";s:13:"mod1/conf.php";s:4:"35af";s:14:"mod1/geshi.php";s:4:"c845";s:14:"mod1/index.php";s:4:"9203";s:18:"mod1/locallang.xml";s:4:"de0f";s:22:"mod1/locallang_mod.xml";s:4:"1340";s:19:"Resources/Public/Icons/moduleicon.gif";s:4:"eccb";s:21:"mod1/parsechecker.php";s:4:"44f0";s:20:"mod1/pmk_textarea.js";s:4:"ca88";s:29:"mod1/quickexplorer_archive.php";s:4:"d07a";s:27:"mod1/quickexplorer_chmod.php";s:4:"9c96";s:30:"mod1/quickexplorer_copymove.php";s:4:"878f";s:28:"mod1/quickexplorer_delete.php";s:4:"0c48";s:25:"mod1/quickexplorer_div.php";s:4:"5f5d";s:30:"mod1/quickexplorer_download.php";s:4:"381f";s:26:"mod1/quickexplorer_edit.php";s:4:"57b1";s:29:"mod1/quickexplorer_extract.php";s:4:"b109";s:29:"mod1/quickexplorer_listdir.php";s:4:"64c4";s:28:"mod1/quickexplorer_mkitem.php";s:4:"bf95";s:28:"mod1/quickexplorer_rename.php";s:4:"c319";s:28:"mod1/quickexplorer_search.php";s:4:"1cc9";s:28:"mod1/quickexplorer_upload.php";s:4:"9864";s:29:"mod1/quickexplorer_zipfile.php";s:4:"56ca";s:19:"Resources/Public/Icons/moduleicon/Thumbs.db";s:4:"e92f";s:15:"Resources/Public/Icons/moduleicon/_.gif";s:4:"4bd9";s:21:"Resources/Public/Icons/moduleicon/__clear.gif";s:4:"22d7";s:20:"Resources/Public/Icons/moduleicon/__copy.gif";s:4:"6e0b";s:19:"Resources/Public/Icons/moduleicon/__cut.gif";s:4:"5c4b";s:21:"Resources/Public/Icons/moduleicon/__paste.gif";s:4:"3a91";s:20:"Resources/Public/Icons/moduleicon/_admin.gif";s:4:"2cbc";s:22:"Resources/Public/Icons/moduleicon/_archive.gif";s:4:"9360";s:24:"Resources/Public/Icons/moduleicon/_arrowdown.gif";s:4:"ddbe";s:22:"Resources/Public/Icons/moduleicon/_arrowup.gif";s:4:"ff8c";s:19:"Resources/Public/Icons/moduleicon/_copy.gif";s:4:"f2ba";s:20:"Resources/Public/Icons/moduleicon/_copy_.gif";s:4:"6f78";s:21:"Resources/Public/Icons/moduleicon/_delete.gif";s:4:"c173";s:22:"Resources/Public/Icons/moduleicon/_delete_.gif";s:4:"0c43";s:23:"Resources/Public/Icons/moduleicon/_download.gif";s:4:"eccb";s:24:"Resources/Public/Icons/moduleicon/_download_.gif";s:4:"4368";s:19:"Resources/Public/Icons/moduleicon/_edit.gif";s:4:"4ac4";s:20:"Resources/Public/Icons/moduleicon/_edit2.gif";s:4:"54f8";s:20:"Resources/Public/Icons/moduleicon/_edit_.gif";s:4:"152b";s:22:"Resources/Public/Icons/moduleicon/_extract.gif";s:4:"9417";s:19:"Resources/Public/Icons/moduleicon/_home.gif";s:4:"b1ab";s:19:"Resources/Public/Icons/moduleicon/_info.gif";s:4:"325e";s:21:"Resources/Public/Icons/moduleicon/_logout.gif";s:4:"fd8c";s:19:"Resources/Public/Icons/moduleicon/_move.gif";s:4:"3d13";s:20:"Resources/Public/Icons/moduleicon/_move_.gif";s:4:"702b";s:25:"Resources/Public/Icons/moduleicon/_nodownload.gif";s:4:"57cb";s:22:"Resources/Public/Icons/moduleicon/_noedit2.gif";s:4:"b30d";s:24:"Resources/Public/Icons/moduleicon/_noextract.gif";s:4:"dcd4";s:22:"Resources/Public/Icons/moduleicon/_refresh.gif";s:4:"137e";s:21:"Resources/Public/Icons/moduleicon/_rename.gif";s:4:"62a0";s:21:"Resources/Public/Icons/moduleicon/_search.gif";s:4:"22c8";s:17:"Resources/Public/Icons/moduleicon/_up.gif";s:4:"a1ba";s:21:"Resources/Public/Icons/moduleicon/_upload.gif";s:4:"21e8";s:22:"Resources/Public/Icons/moduleicon/_upload_.gif";s:4:"f899";s:17:"Resources/Public/Icons/moduleicon/cpp.gif";s:4:"c0e8";s:21:"Resources/Public/Icons/moduleicon/default.gif";s:4:"2dc5";s:17:"Resources/Public/Icons/moduleicon/exe.gif";s:4:"7edf";s:19:"Resources/Public/Icons/moduleicon/flash.gif";s:4:"1589";s:20:"Resources/Public/Icons/moduleicon/folder.gif";s:4:"8c9c";s:15:"Resources/Public/Icons/moduleicon/h.gif";s:4:"7bf9";s:18:"Resources/Public/Icons/moduleicon/html.gif";s:4:"c47b";s:19:"Resources/Public/Icons/moduleicon/image.gif";s:4:"4ac2";s:18:"Resources/Public/Icons/moduleicon/java.gif";s:4:"6f65";s:16:"Resources/Public/Icons/moduleicon/js.gif";s:4:"d1a4";s:18:"Resources/Public/Icons/moduleicon/midi.gif";s:4:"3bf9";s:17:"Resources/Public/Icons/moduleicon/mp3.gif";s:4:"3ae6";s:17:"Resources/Public/Icons/moduleicon/pdf.gif";s:4:"9e51";s:17:"Resources/Public/Icons/moduleicon/php.gif";s:4:"d4e9";s:16:"Resources/Public/Icons/moduleicon/pl.gif";s:4:"c9c5";s:18:"Resources/Public/Icons/moduleicon/real.gif";s:4:"f409";s:19:"Resources/Public/Icons/moduleicon/sound.gif";s:4:"9c91";s:20:"Resources/Public/Icons/moduleicon/spread.gif";s:4:"3fbe";s:17:"Resources/Public/Icons/moduleicon/src.gif";s:4:"c9dc";s:17:"Resources/Public/Icons/moduleicon/tar.gif";s:4:"206f";s:17:"Resources/Public/Icons/moduleicon/tgz.gif";s:4:"9360";s:17:"Resources/Public/Icons/moduleicon/txt.gif";s:4:"8338";s:19:"Resources/Public/Icons/moduleicon/video.gif";s:4:"395a";s:18:"Resources/Public/Icons/moduleicon/word.gif";s:4:"7473";s:17:"Resources/Public/Icons/moduleicon/zip.gif";s:4:"5a33";s:21:"mod1/geshi/apache.php";s:4:"306a";s:18:"mod1/geshi/css.php";s:4:"5e13";s:26:"mod1/geshi/html4strict.php";s:4:"b504";s:25:"mod1/geshi/javascript.php";s:4:"788b";s:19:"mod1/geshi/perl.php";s:4:"8b65";s:24:"mod1/geshi/php-brief.php";s:4:"2f4c";s:18:"mod1/geshi/php.php";s:4:"0b86";s:21:"mod1/geshi/smarty.php";s:4:"a833";s:18:"mod1/geshi/sql.php";s:4:"28cd";s:18:"mod1/geshi/xml.php";s:4:"ff6a";}',
);


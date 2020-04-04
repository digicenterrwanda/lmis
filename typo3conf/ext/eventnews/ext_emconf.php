<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "eventnews".
 *
 * Auto generated 13-02-2020 07:27
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'News events',
  'description' => 'Events for news',
  'category' => 'plugin',
  'author' => 'Georg Ringer',
  'author_email' => '',
  'state' => 'beta',
  'uploadfolder' => false,
  'createDirs' => '',
  'clearCacheOnLoad' => 1,
  'version' => '2.1.0',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '7.6.0-8.9.99',
      'news' => '3.2.0-6.9.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'clearcacheonload' => true,
  'author_company' => NULL,
);


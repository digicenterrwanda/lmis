<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "ke_search".
 *
 * Auto generated 11-02-2020 07:42
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Faceted Search',
  'description' => 'Faceted fulltext search for TYPO3. Fast, flexible and easy to use. Very easy to install. Fast (tested with over 200.000 records) and flexible (you can write your own indexers). Indexes content directly from the databases. Visit kesearch.de for further information and documentation.',
  'category' => 'plugin',
  'version' => '2.8.1',
  'state' => 'stable',
  'uploadfolder' => true,
  'createDirs' => '',
  'clearcacheonload' => true,
  'author' => 'Christian Buelter (team.inmedias)',
  'author_email' => 'christian.buelter@inmedias.de',
  'author_company' => 'team.inmedias',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '7.6.0-8.7.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'autoload' => 
  array (
    'psr-4' => 
    array (
      'TeaminmediasPluswerk\\KeSearch\\' => 'Classes',
    ),
    'classmap' => 
    array (
      0 => 'Classes',
      1 => 'cli',
      2 => 'pi1',
      3 => 'pi2',
      4 => 'pi3',
    ),
  ),
);


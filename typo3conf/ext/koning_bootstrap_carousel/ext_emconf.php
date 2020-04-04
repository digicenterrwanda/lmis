<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "koning_bootstrap_carousel".
 *
 * Auto generated 04-02-2020 06:40
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Bootstrap carousel',
  'description' => 'Carousel with Bootstrap 3.* compliant HTML',
  'category' => 'plugin',
  'version' => '1.0.1',
  'state' => 'stable',
  'clearCacheOnLoad' => true,
  'author' => 'Jesper Paardekooper,Benjamin Serfhos',
  'author_email' => 'jesper@koninklijk.io,benjamin@koninklijk.io',
  'author_company' => 'Koninklijke Collective',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '6.2.0-8.99.99',
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
      'Keizer\\KoningBootstrapCarousel\\' => 'Classes',
    ),
  ),
  'uploadfolder' => false,
  'createDirs' => NULL,
  'clearcacheonload' => true,
);


<?php
//USE Parousia\CMS\Backend\Module\phpmyadmin;

/**
 * Definitions for routes provided by EXT:phpmyadmin
 * Contains all "regular" routes for entry points
 *
 * Currently the "access" property is only used so no token creation + validation is made,
 * but will be extended further.
 */
return [
        // Main phpmyadmin rendering setup for the TYPO3 Backend
        'tools_phpmyadmin' => [
                'path' => '',
				'access' => 'admin',
                'target' => Parousia\CMS\Backend\Module\phpmyadmin::class.'::mainAction'  
        ],
];
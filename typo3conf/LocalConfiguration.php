<?php
return [
    'BE' => [
        'debug' => false,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$pbkdf2-sha256$25000$8rtoFcHk8c/CaHhEFL4Xvw$0ZlFt6jhKZvgudBl46j8u2t3.48q90GdYdMG9WkkNtc',
        'loginSecurityLevel' => 'rsa',
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'dbname' => 'ncbs_lmis',
                'driver' => 'mysqli',
                'host' => 'localhost',
                'password' => 'index.php',
                'user' => 'ncbs_lmis',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'bss_events' => 'a:0:{}',
            'cal' => 'a:19:{s:13:"noTabDividers";s:1:"0";s:21:"hideLocationTextfield";s:1:"0";s:22:"hideOrganizerTextfield";s:1:"0";s:20:"useLocationStructure";s:15:"tx_cal_location";s:21:"useOrganizerStructure";s:16:"tx_cal_organizer";s:11:"todoSubtype";s:5:"event";s:16:"categoryTVHeight";s:3:"280";s:11:"treeOrderBy";s:3:"uid";s:9:"showTimes";s:1:"1";s:9:"useTeaser";s:1:"0";s:20:"hideDeviationRecords";s:1:"1";s:15:"categoryService";s:15:"tx_cal_category";s:15:"recurrenceStart";s:8:"20140101";s:13:"recurrenceEnd";s:8:"20201231";s:18:"useInternalCaching";s:1:"1";s:11:"cachingMode";s:6:"normal";s:13:"cacheLifetime";s:1:"0";s:13:"cachingEngine";s:8:"internal";s:30:"enableRealURLAutoConfiguration";s:1:"1";}',
            'chartjs' => 'a:0:{}',
            'charts' => 'a:2:{s:7:"library";s:8:"chartist";s:14:"disableCaching";s:1:"0";}',
            'dce' => 'a:3:{s:29:"disableAutoClearFrontendCache";s:1:"1";s:17:"disableCodemirror";s:1:"0";s:17:"enableUpdateCheck";s:1:"0";}',
            'df_contentslide' => 'a:0:{}',
            'eventnews' => 'a:1:{s:33:"overrideAdministrationModuleLabel";s:1:"1";}',
            'gridelements' => 'a:2:{s:20:"additionalStylesheet";s:0:"";s:19:"nestingInListModule";s:1:"1";}',
            'jquery' => 'a:0:{}',
            'jsmanager' => 'a:0:{}',
            'ke_search' => 'a:11:{s:20:"multiplyValueToTitle";s:1:"1";s:16:"searchWordLength";s:1:"4";s:16:"enablePartSearch";s:1:"1";s:17:"enableExplicitAnd";s:1:"0";s:18:"finishNotification";s:1:"0";s:21:"notificationRecipient";s:0:"";s:18:"notificationSender";s:19:"no_reply@domain.com";s:19:"notificationSubject";s:32:"[KE_SEARCH INDEXER NOTIFICATION]";s:13:"pathPdftotext";s:9:"/usr/bin/";s:11:"pathPdfinfo";s:9:"/usr/bin/";s:10:"pathCatdoc";s:9:"/usr/bin/";}',
            'koning_bootstrap_carousel' => 'a:0:{}',
            'news' => 'a:16:{s:13:"prependAtCopy";s:1:"1";s:6:"tagPid";s:1:"1";s:12:"rteForTeaser";s:1:"0";s:22:"contentElementRelation";s:1:"1";s:21:"contentElementPreview";s:1:"1";s:13:"manualSorting";s:1:"0";s:19:"categoryRestriction";s:0:"";s:34:"categoryBeGroupTceFormsRestriction";s:1:"0";s:19:"dateTimeNotRequired";s:1:"0";s:11:"archiveDate";s:4:"date";s:12:"mediaPreview";s:5:"false";s:24:"showAdministrationModule";s:1:"1";s:35:"hidePageTreeForAdministrationModule";s:1:"0";s:12:"showImporter";s:1:"0";s:18:"storageUidImporter";s:1:"1";s:22:"resourceFolderImporter";s:12:"/news_import";}',
            'quickexplorer' => 'a:8:{s:9:"no_access";s:5:"^\\.ht";s:11:"show_hidden";s:1:"1";s:11:"show_thumbs";s:1:"1";s:15:"textarea_height";s:2:"30";s:14:"auto_highlight";s:1:"1";s:12:"disable_text";s:1:"1";s:12:"editable_ext";s:215:"\\.phpcron$|\\.ts$|\\.tmpl$|\\.txt$|\\.php$|\\.php3$|\\.phtml$|\\.inc$|\\.sql$|\\.pl$|\\.htm$|\\.html$|\\.shtml$|\\.dhtml$|\\.xml$|\\.js$|\\.css$|\\.cgi$|\\.cpp$\\.c$|\\.cc$|\\.cxx$|\\.hpp$|\\.h$|\\.pas$|\\.p$|\\.java$|\\.py$|\\.sh$\\.tcl$|\\.tk$";s:8:"php_path";s:3:"php";}',
            'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
            'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
            'sav_charts' => 'a:0:{}',
            'site' => 'a:0:{}',
            'site_config' => 'a:0:{}',
            'spreadsheets' => 'a:0:{}',
            't3ddy' => 'a:4:{s:19:"disableTabContainer";s:1:"0";s:16:"disableAccordion";s:1:"0";s:38:"disableGridElementsChildrenInT3ddyItem";s:1:"1";s:20:"createFirstT3ddyItem";s:1:"1";}',
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [],
        ],
    ],
    'FE' => [
        'debug' => false,
        'loginSecurityLevel' => 'normal',
    ],
    'GFX' => [
        'jpg_quality' => '80',
    ],
    'MAIL' => [
        'transport' => 'smtp',
        'transport_sendmail_command' => '',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => 'localhost:25',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'extbase_object' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
                    'groups' => [
                        'system',
                    ],
                    'options' => [
                        'defaultLifetime' => 0,
                    ],
                ],
            ],
        ],
        'devIPmask' => '',
        'displayErrors' => 0,
        'enableDeprecationLog' => false,
        'encryptionKey' => 'f3bc79aa35a7b924ccfd99dad1a5dfe9e0b947755860184474888f2740a7432411d8ac0de90ad32962325b64c02f1a64',
        'exceptionalErrors' => 20480,
        'isInitialDatabaseImportDone' => true,
        'isInitialInstallationInProgress' => false,
        'sitename' => 'New TYPO3 site',
        'sqlDebug' => 0,
        'systemLogLevel' => 2,
    ],
];

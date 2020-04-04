<?php
return array (
  'tca' => 
  array (
    'be_groups' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'default_sortby' => 'title',
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'adminOnly' => true,
        'rootLevel' => 1,
        'typeicon_classes' => 
        array (
          'default' => 'status-user-group-backend',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups',
        'useColumnsForDefaultValues' => 'lockToDomain, file_permissions',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'title',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title, db_mountpoints, file_mountpoints, file_permissions, tables_select, tables_modify, pagetypes_select, non_exclude_fields, groupMods, lockToDomain, description',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'db_mountpoints' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:db_mountpoints',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
          ),
        ),
        'file_mountpoints' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file_mountpoints',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'sys_filemounts',
            'foreign_table_where' => ' AND sys_filemounts.pid=0 ORDER BY sys_filemounts.title',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_list_title',
                ),
              ),
            ),
          ),
        ),
        'file_permissions' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.fileoper_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder',
                1 => '--div--',
                2 => 'apps-filetree-folder-default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_read',
                1 => 'readFolder',
                2 => 'apps-filetree-folder-default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_write',
                1 => 'writeFolder',
                2 => 'apps-filetree-folder-default',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_add',
                1 => 'addFolder',
                2 => 'apps-filetree-folder-default',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_rename',
                1 => 'renameFolder',
                2 => 'apps-filetree-folder-default',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_move',
                1 => 'moveFolder',
                2 => 'apps-filetree-folder-default',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_copy',
                1 => 'copyFolder',
                2 => 'apps-filetree-folder-default',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_delete',
                1 => 'deleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_recursivedelete',
                1 => 'recursivedeleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files',
                1 => '--div--',
                2 => 'mimetypes-other-other',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_read',
                1 => 'readFile',
                2 => 'mimetypes-other-other',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_write',
                1 => 'writeFile',
                2 => 'mimetypes-other-other',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_add',
                1 => 'addFile',
                2 => 'mimetypes-other-other',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_rename',
                1 => 'renameFile',
                2 => 'mimetypes-other-other',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_replace',
                1 => 'replaceFile',
                2 => 'mimetypes-other-other',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_move',
                1 => 'moveFile',
                2 => 'mimetypes-other-other',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_copy',
                1 => 'copyFile',
                2 => 'mimetypes-other-other',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_delete',
                1 => 'deleteFile',
                2 => 'mimetypes-other-other',
              ),
            ),
            'size' => 17,
            'maxitems' => 17,
            'default' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
          ),
        ),
        'workspace_perms' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:workspace_perms',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:workspace_perms_live',
                1 => 0,
              ),
            ),
            'default' => 0,
          ),
        ),
        'pagetypes_select' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.pagetypes_select',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'pagetypes',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 20,
          ),
        ),
        'tables_modify' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_modify',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'tables',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 100,
          ),
        ),
        'tables_select' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_select',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'tables',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 100,
          ),
        ),
        'non_exclude_fields' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.non_exclude_fields',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'exclude',
            'size' => 25,
            'autoSizeMax' => 50,
          ),
        ),
        'explicit_allowdeny' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.explicit_allowdeny',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'explicitValues',
          ),
        ),
        'allowed_languages' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:allowed_languages',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'languages',
          ),
        ),
        'custom_options' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.custom_options',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'custom',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'lockToDomain' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:lockToDomain',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
            'softref' => 'substitute',
          ),
        ),
        'groupMods' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:userMods',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'modListGroup',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 100,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'TSconfig' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'hide_in_lists' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.hide_in_lists',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'subgroup' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.subgroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'be_groups',
            'foreign_table_where' => 'AND NOT(be_groups.uid = ###THIS_UID###) ORDER BY be_groups.title',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 20,
          ),
        ),
        'category_perms' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:category_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent = 0) ORDER BY sys_category.sorting',
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => false,
                'showHeader' => false,
                'maxLevels' => 99,
              ),
            ),
            'size' => 20,
            'minitems' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,subgroup,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.base_rights,groupMods,tables_select,tables_modify,pagetypes_select,non_exclude_fields,explicit_allowdeny,allowed_languages,custom_options,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.mounts_and_workspaces,workspace_perms,db_mountpoints,file_mountpoints,file_permissions,category_perms,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.options,lockToDomain,TSconfig,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,hide_in_lists,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'be_users' => 
    array (
      'ctrl' => 
      array (
        'label' => 'username',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'adminOnly' => true,
        'rootLevel' => 1,
        'default_sortby' => 'admin, username',
        'enablecolumns' => 
        array (
          'disabled' => 'disable',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'type' => 'admin',
        'typeicon_column' => 'admin',
        'typeicon_classes' => 
        array (
          0 => 'status-user-backend',
          1 => 'status-user-admin',
          'default' => 'status-user-backend',
        ),
        'useColumnsForDefaultValues' => 'usergroup,lockToDomain,options,db_mountpoints,file_mountpoints,file_permissions,userMods',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'username,email,realName',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'username,description,usergroup,db_mountpoints,file_mountpoints,admin,options,file_permissions,userMods,lockToDomain,realName,email,disable,starttime,endtime,lastlogin',
      ),
      'columns' => 
      array (
        'username' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.username',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 50,
            'eval' => 'nospace,trim,lower,unique,required',
            'autocomplete' => false,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'password' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.password',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 100,
            'eval' => 'trim,required,TYPO3\\CMS\\Saltedpasswords\\Evaluation\\BackendEvaluator,password',
            'autocomplete' => false,
            'renderType' => 'rsaInput',
          ),
        ),
        'usergroup' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'be_groups',
            'foreign_table_where' => 'ORDER BY be_groups.title',
            'size' => 5,
            'maxitems' => 20,
            'enableMultiSelectFilterTextfield' => true,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_list_title',
                ),
              ),
            ),
          ),
        ),
        'avatar' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.avatar',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'avatar',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
            'maxitems' => 1,
          ),
        ),
        'lockToDomain' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:lockToDomain',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
            'softref' => 'substitute',
          ),
        ),
        'db_mountpoints' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.options_db_mounts',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
          ),
        ),
        'file_mountpoints' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.options_file_mounts',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'sys_filemounts',
            'foreign_table_where' => ' AND sys_filemounts.pid=0 ORDER BY sys_filemounts.title',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_list_title',
                ),
              ),
            ),
          ),
        ),
        'email' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 80,
            'softref' => 'email[subst]',
          ),
        ),
        'realName' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 80,
          ),
        ),
        'disable' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'disableIPlock' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.disableIPlock',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'admin' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.admin',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'options' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.options',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.options_db_mounts',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.options_file_mounts',
                1 => 0,
              ),
            ),
            'default' => 3,
          ),
        ),
        'file_permissions' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.fileoper_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder',
                1 => '--div--',
                2 => 'apps-filetree-folder-default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_read',
                1 => 'readFolder',
                2 => 'apps-filetree-folder-default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_write',
                1 => 'writeFolder',
                2 => 'apps-filetree-folder-default',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_add',
                1 => 'addFolder',
                2 => 'apps-filetree-folder-default',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_rename',
                1 => 'renameFolder',
                2 => 'apps-filetree-folder-default',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_move',
                1 => 'moveFolder',
                2 => 'apps-filetree-folder-default',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_copy',
                1 => 'copyFolder',
                2 => 'apps-filetree-folder-default',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_delete',
                1 => 'deleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_recursivedelete',
                1 => 'recursivedeleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files',
                1 => '--div--',
                2 => 'mimetypes-other-other',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_read',
                1 => 'readFile',
                2 => 'mimetypes-other-other',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_write',
                1 => 'writeFile',
                2 => 'mimetypes-other-other',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_add',
                1 => 'addFile',
                2 => 'mimetypes-other-other',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_rename',
                1 => 'renameFile',
                2 => 'mimetypes-other-other',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_replace',
                1 => 'replaceFile',
                2 => 'mimetypes-other-other',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_move',
                1 => 'moveFile',
                2 => 'mimetypes-other-other',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_copy',
                1 => 'copyFile',
                2 => 'mimetypes-other-other',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_delete',
                1 => 'deleteFile',
                2 => 'mimetypes-other-other',
              ),
            ),
            'size' => 17,
            'maxitems' => 17,
            'default' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
          ),
        ),
        'workspace_perms' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:workspace_perms',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:workspace_perms_live',
                1 => 0,
              ),
            ),
            'default' => 1,
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145938400,
            ),
          ),
        ),
        'lang' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.lang',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'English',
                1 => '',
              ),
              1 => 
              array (
                0 => 'Afrikaans',
                1 => 'af',
              ),
              2 => 
              array (
                0 => 'Albanian',
                1 => 'sq',
              ),
              3 => 
              array (
                0 => 'Arabic',
                1 => 'ar',
              ),
              4 => 
              array (
                0 => 'Basque',
                1 => 'eu',
              ),
              5 => 
              array (
                0 => 'Bosnian',
                1 => 'bs',
              ),
              6 => 
              array (
                0 => 'Brazilian Portuguese',
                1 => 'pt_BR',
              ),
              7 => 
              array (
                0 => 'Bulgarian',
                1 => 'bg',
              ),
              8 => 
              array (
                0 => 'Catalan',
                1 => 'ca',
              ),
              9 => 
              array (
                0 => 'Chinese (Simpl.)',
                1 => 'ch',
              ),
              10 => 
              array (
                0 => 'Chinese (Trad.)',
                1 => 'zh',
              ),
              11 => 
              array (
                0 => 'Croatian',
                1 => 'hr',
              ),
              12 => 
              array (
                0 => 'Czech',
                1 => 'cs',
              ),
              13 => 
              array (
                0 => 'Danish',
                1 => 'da',
              ),
              14 => 
              array (
                0 => 'Dutch',
                1 => 'nl',
              ),
              15 => 
              array (
                0 => 'Esperanto',
                1 => 'eo',
              ),
              16 => 
              array (
                0 => 'Estonian',
                1 => 'et',
              ),
              17 => 
              array (
                0 => 'Faroese',
                1 => 'fo',
              ),
              18 => 
              array (
                0 => 'Finnish',
                1 => 'fi',
              ),
              19 => 
              array (
                0 => 'French',
                1 => 'fr',
              ),
              20 => 
              array (
                0 => 'French (Canada)',
                1 => 'fr_CA',
              ),
              21 => 
              array (
                0 => 'Galician',
                1 => 'gl',
              ),
              22 => 
              array (
                0 => 'Georgian',
                1 => 'ka',
              ),
              23 => 
              array (
                0 => 'German',
                1 => 'de',
              ),
              24 => 
              array (
                0 => 'Greek',
                1 => 'el',
              ),
              25 => 
              array (
                0 => 'Greenlandic',
                1 => 'kl',
              ),
              26 => 
              array (
                0 => 'Hebrew',
                1 => 'he',
              ),
              27 => 
              array (
                0 => 'Hindi',
                1 => 'hi',
              ),
              28 => 
              array (
                0 => 'Hungarian',
                1 => 'hu',
              ),
              29 => 
              array (
                0 => 'Icelandic',
                1 => 'is',
              ),
              30 => 
              array (
                0 => 'Italian',
                1 => 'it',
              ),
              31 => 
              array (
                0 => 'Japanese',
                1 => 'ja',
              ),
              32 => 
              array (
                0 => 'Khmer',
                1 => 'km',
              ),
              33 => 
              array (
                0 => 'Korean',
                1 => 'ko',
              ),
              34 => 
              array (
                0 => 'Latvian',
                1 => 'lv',
              ),
              35 => 
              array (
                0 => 'Lithuanian',
                1 => 'lt',
              ),
              36 => 
              array (
                0 => 'Malay',
                1 => 'ms',
              ),
              37 => 
              array (
                0 => 'Norwegian',
                1 => 'no',
              ),
              38 => 
              array (
                0 => 'Persian',
                1 => 'fa',
              ),
              39 => 
              array (
                0 => 'Polish',
                1 => 'pl',
              ),
              40 => 
              array (
                0 => 'Portuguese',
                1 => 'pt',
              ),
              41 => 
              array (
                0 => 'Romanian',
                1 => 'ro',
              ),
              42 => 
              array (
                0 => 'Russian',
                1 => 'ru',
              ),
              43 => 
              array (
                0 => 'Serbian',
                1 => 'sr',
              ),
              44 => 
              array (
                0 => 'Slovak',
                1 => 'sk',
              ),
              45 => 
              array (
                0 => 'Slovenian',
                1 => 'sl',
              ),
              46 => 
              array (
                0 => 'Spanish',
                1 => 'es',
              ),
              47 => 
              array (
                0 => 'Swedish',
                1 => 'sv',
              ),
              48 => 
              array (
                0 => 'Thai',
                1 => 'th',
              ),
              49 => 
              array (
                0 => 'Turkish',
                1 => 'tr',
              ),
              50 => 
              array (
                0 => 'Ukrainian',
                1 => 'uk',
              ),
              51 => 
              array (
                0 => 'Vietnamese',
                1 => 'vi',
              ),
            ),
          ),
        ),
        'userMods' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:userMods',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'modListUser',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 100,
          ),
        ),
        'allowed_languages' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:allowed_languages',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'languages',
          ),
        ),
        'TSconfig' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'createdByAction' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'lastlogin' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.lastlogin',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'readOnly' => true,
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'category_perms' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:category_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent = 0) ORDER BY sys_category.sorting',
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => false,
                'showHeader' => false,
                'maxLevels' => 99,
              ),
            ),
            'size' => 20,
            'minitems' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,admin,username,password,avatar,usergroup,realName,email,lang,lastlogin,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.rights,userMods,allowed_languages,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.mounts_and_workspaces,workspace_perms,db_mountpoints,options,file_mountpoints,file_permissions,category_perms,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.options,lockToDomain,disableIPlock,TSconfig,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,disable,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,admin,username,password,avatar,usergroup,realName,email,lang,lastlogin,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.options,disableIPlock,TSconfig,db_mountpoints,options,file_mountpoints,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,disable,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'pages' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:pages',
        'type' => 'doktype',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'delete' => 'deleted',
        'crdate' => 'crdate',
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'cruser_id' => 'cruser_id',
        'editlock' => 'editlock',
        'useColumnsForDefaultValues' => 'doktype,fe_group,hidden',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'typeicon_column' => 'doktype',
        'typeicon_classes' => 
        array (
          1 => 'apps-pagetree-page-default',
          '1-hideinmenu' => 'apps-pagetree-page-not-in-menu',
          '1-root' => 'apps-pagetree-page-domain',
          3 => 'apps-pagetree-page-shortcut-external',
          '3-hideinmenu' => 'apps-pagetree-page-shortcut-external-hideinmenu',
          '3-root' => 'apps-pagetree-page-shortcut-external-root',
          4 => 'apps-pagetree-page-shortcut',
          '4-hideinmenu' => 'apps-pagetree-page-shortcut-hideinmenu',
          '4-root' => 'apps-pagetree-page-shortcut-root',
          6 => 'apps-pagetree-page-backend-users',
          '6-hideinmenu' => 'apps-pagetree-page-backend-users-hideinmenu',
          '6-root' => 'apps-pagetree-page-backend-users-root',
          7 => 'apps-pagetree-page-mountpoint',
          '7-hideinmenu' => 'apps-pagetree-page-mountpoint-hideinmenu',
          '7-root' => 'apps-pagetree-page-mountpoint-root',
          199 => 'apps-pagetree-spacer',
          '199-hideinmenu' => 'apps-pagetree-spacer',
          '199-root' => 'apps-pagetree-page-domain',
          254 => 'apps-pagetree-folder-default',
          '254-hideinmenu' => 'apps-pagetree-folder-default',
          '254-root' => 'apps-pagetree-page-domain',
          255 => 'apps-pagetree-page-recycler',
          '255-hideinmenu' => 'apps-pagetree-page-recycler',
          'contains-shop' => 'apps-pagetree-folder-contains-shop',
          'contains-approve' => 'apps-pagetree-folder-contains-approve',
          'contains-fe_users' => 'apps-pagetree-folder-contains-fe_users',
          'contains-board' => 'apps-pagetree-folder-contains-board',
          'contains-news' => 'apps-pagetree-folder-contains-news',
          'page-contentFromPid' => 'apps-pagetree-page-content-from-page',
          'page-contentFromPid-root' => 'apps-pagetree-page-content-from-page-root',
          'page-contentFromPid-hideinmenu' => 'apps-pagetree-page-content-from-page-hideinmenu',
          'default' => 'apps-pagetree-page-default',
        ),
        'searchFields' => 'title,alias,nav_title,subtitle,url,keywords,description,abstract,author,author_email',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'doktype,title,alias,hidden,starttime,endtime,fe_group,url,target,no_cache,shortcut,keywords,description,abstract,newUntil,lastUpdated,cache_timeout,cache_tags,backend_layout,backend_layout_next_level,categories',
        'maxDBListItems' => 30,
        'maxSingleDBListItems' => 50,
      ),
      'columns' => 
      array (
        'doktype' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.page',
                1 => '--div--',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:doktype.I.0',
                1 => '1',
                2 => 'apps-pagetree-page-default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.4',
                1 => '6',
                2 => 'apps-pagetree-page-backend-users',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.link',
                1 => '--div--',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.2',
                1 => '4',
                2 => 'apps-pagetree-page-shortcut',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.5',
                1 => '7',
                2 => 'apps-pagetree-page-mountpoint',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.8',
                1 => '3',
                2 => 'apps-pagetree-page-shortcut-external',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.special',
                1 => '--div--',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:doktype.I.folder',
                1 => '254',
                2 => 'apps-pagetree-folder-default',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:doktype.I.2',
                1 => '255',
                2 => 'apps-filetree-folder-recycler',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.7',
                1 => '199',
                2 => 'apps-pagetree-spacer',
              ),
            ),
            'default' => '1',
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim,required',
          ),
        ),
        'TSconfig' => 
        array (
          'exclude' => true,
          'label' => 'TSconfig:',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'php_tree_stop' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:php_tree_stop',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'max' => 255,
          ),
        ),
        'editlock' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 1,
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden_checkbox_1_formlabel',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145938400,
            ),
          ),
        ),
        'layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.3',
                1 => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 7,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'ORDER BY fe_groups.title',
            'enableMultiSelectFilterTextfield' => true,
          ),
        ),
        'extendToSubpages' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.extendToSubpages',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'nav_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'nav_hide' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_hide',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_hide_checkbox_1_formlabel',
              ),
            ),
          ),
        ),
        'subtitle' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.subtitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'target' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.target',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 80,
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target.I.1',
                  1 => '_blank',
                ),
              ),
            ),
            'eval' => 'trim',
          ),
        ),
        'alias' => 
        array (
          'exclude' => true,
          'displayCond' => 'VERSION:IS:false',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.alias',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 32,
            'eval' => 'nospace,alphanum_x,lower,unique',
            'softref' => 'notify',
          ),
        ),
        'url' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.url',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'max' => 255,
            'eval' => 'trim,required',
            'softref' => 'url',
          ),
        ),
        'urltype' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.automatic',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'http://',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'https://',
                1 => '4',
              ),
              3 => 
              array (
                0 => 'ftp://',
                1 => '2',
              ),
              4 => 
              array (
                0 => 'mailto:',
                1 => '3',
              ),
            ),
            'default' => 1,
          ),
        ),
        'lastUpdated' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.lastUpdated',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'newUntil' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.newUntil',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
          ),
        ),
        'cache_timeout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.1',
                1 => 60,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.2',
                1 => 300,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.3',
                1 => 900,
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.4',
                1 => 1800,
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.5',
                1 => 3600,
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.6',
                1 => 14400,
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.7',
                1 => 86400,
              ),
              8 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.8',
                1 => 172800,
              ),
              9 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.9',
                1 => 604800,
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.10',
                1 => 2678400,
              ),
            ),
            'default' => 0,
          ),
        ),
        'cache_tags' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_tags',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'eval' => '',
          ),
        ),
        'no_cache' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_cache',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_cache_checkbox_1_formlabel',
              ),
            ),
          ),
        ),
        'no_search' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_checkbox_1_formlabel',
              ),
            ),
          ),
        ),
        'shortcut' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.shortcut_page',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'additionalSearchFields' => 'nav_title, alias, url',
              ),
            ),
            'default' => 0,
          ),
        ),
        'shortcut_mode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.2',
                1 => 2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.3',
                1 => 3,
              ),
            ),
            'default' => 0,
          ),
        ),
        'content_from_pid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.content_from_pid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'default' => 0,
          ),
        ),
        'mount_pid' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'default' => 0,
          ),
        ),
        'keywords' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.keywords',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'abstract' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.abstract',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'author' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.author',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'eval' => 'trim',
            'max' => 80,
          ),
        ),
        'author_email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'eval' => 'trim',
            'max' => 80,
            'softref' => 'email[subst]',
          ),
        ),
        'media' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.media',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette;audioOverlayPalette,
                                    --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette;videoOverlayPalette,
                                    --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
          ),
        ),
        'is_siteroot' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.is_siteroot',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'mount_pid_ol' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol',
          'config' => 
          array (
            'type' => 'radio',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol.I.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol.I.1',
                1 => 1,
              ),
            ),
          ),
        ),
        'module' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                2 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module.I.4',
                1 => 'fe_users',
                2 => 'status-user-frontend',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:news-folder',
                1 => 'news',
                2 => 'apps-pagetree-folder-contains-news',
              ),
            ),
            'default' => '',
          ),
        ),
        'fe_login_mode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.enable',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.disableAll',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.disableGroups',
                1 => 3,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.enableAgain',
                1 => 2,
              ),
            ),
          ),
        ),
        'l18n_cfg' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg.I.1',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg.I.2',
                1 => '',
              ),
            ),
          ),
        ),
        'backend_layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout.none',
                1 => -1,
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->addBackendLayoutItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'backend_layout_next_level' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout.none',
                1 => -1,
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->addBackendLayoutItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'tsconfig_includes' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tsconfig_includes',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'items' => 
            array (
              0 => 
              array (
                0 => 'EXT:news :: Restrict pages to news records (news)',
                1 => 'EXT:news/Configuration/TSconfig/Page/news_only.txt',
              ),
            ),
            'enableMultiSelectFilterTextfield' => true,
            'softref' => 'ext_fileref',
          ),
        ),
        'categories' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1, 0) ORDER BY sys_category.sorting ASC',
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'pages',
              'fieldname' => 'categories',
            ),
            'size' => 20,
            'maxitems' => 9999,
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
                'maxLevels' => 99,
              ),
            ),
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_kesearch_tags' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:pages.tx_kesearch_tags',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingleBox',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 100,
            'items' => 
            array (
            ),
            'allowNonIdValues' => true,
            'itemsProcFunc' => 'user_filterlist->getListOfAvailableFiltersForTCA',
          ),
        ),
        'tx_kesearch_abstract' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:pages.tx_kesearch_abstract',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
          ),
        ),
        'tx_kesearch_resultimage' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:pages.tx_kesearch_resultimage',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'tx_kesearch_resultimage',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                2 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags;metatags,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout;layout,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.replace;replace,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.links;links,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.caching;caching,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous;miscellaneous,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.module;module,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.config;config,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.language;language,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,--div--;LLL:EXT:ke_search/locallang_db.xml:pages.tx_kesearch_label,no_search;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_formlabel,tx_kesearch_tags,tx_kesearch_abstract,tx_kesearch_resultimage',
        ),
        3 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,doktype,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--palette--;;external,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout;layout,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.links;links,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous;miscellaneous,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.config;config,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.language;language,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,--div--;LLL:EXT:ke_search/locallang_db.xml:pages.tx_kesearch_label,no_search;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_formlabel,tx_kesearch_tags,tx_kesearch_abstract,tx_kesearch_resultimage',
        ),
        4 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,doktype,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--palette--;;shortcut,--palette--;;shortcutpage,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout;layout,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.links;links,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous;miscellaneous,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.config;config,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.language;language,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,--div--;LLL:EXT:ke_search/locallang_db.xml:pages.tx_kesearch_label,no_search;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_formlabel,tx_kesearch_tags,tx_kesearch_abstract,tx_kesearch_resultimage',
        ),
        7 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,doktype,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--palette--;;mountpoint,--palette--;;mountpage,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout;layout,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.links;links,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous;miscellaneous,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.config;config,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.language;language,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,--div--;LLL:EXT:ke_search/locallang_db.xml:pages.tx_kesearch_label,no_search;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_formlabel,tx_kesearch_tags,tx_kesearch_abstract,tx_kesearch_resultimage',
        ),
        199 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;titleonly,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,--div--;LLL:EXT:ke_search/locallang_db.xml:pages.tx_kesearch_label,no_search;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_formlabel,tx_kesearch_tags,tx_kesearch_abstract,tx_kesearch_resultimage',
        ),
        254 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;titleonly,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout;backend_layout,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.module;module,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.config;config,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous;adminsonly,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,--div--;LLL:EXT:ke_search/locallang_db.xml:pages.tx_kesearch_label,no_search;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_formlabel,tx_kesearch_tags,tx_kesearch_abstract,tx_kesearch_resultimage',
        ),
        255 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;titleonly,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous;adminsonly,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,--div--;LLL:EXT:ke_search/locallang_db.xml:pages.tx_kesearch_label,no_search;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_formlabel,tx_kesearch_tags,tx_kesearch_abstract,tx_kesearch_resultimage',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'starttime, endtime, extendToSubpages',
        ),
        2 => 
        array (
          'showitem' => 'layout, lastUpdated, newUntil, no_search',
        ),
        3 => 
        array (
          'showitem' => 'alias, target, no_cache, cache_timeout, cache_tags',
        ),
        5 => 
        array (
          'showitem' => 'author, author_email',
        ),
        6 => 
        array (
          'showitem' => 'php_tree_stop, editlock',
        ),
        7 => 
        array (
          'showitem' => 'is_siteroot',
        ),
        8 => 
        array (
          'showitem' => 'backend_layout_next_level',
        ),
        'standard' => 
        array (
          'showitem' => 'doktype;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype_formlabel',
        ),
        'shortcut' => 
        array (
          'showitem' => 'shortcut_mode;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode_formlabel',
        ),
        'shortcutpage' => 
        array (
          'showitem' => 'shortcut;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_formlabel',
        ),
        'mountpoint' => 
        array (
          'showitem' => 'mount_pid_ol;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol_formlabel',
        ),
        'mountpage' => 
        array (
          'showitem' => 'mount_pid;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_formlabel',
        ),
        'external' => 
        array (
          'showitem' => 'urltype;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.urltype_formlabel, url;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.url_formlabel',
        ),
        'title' => 
        array (
          'showitem' => 'title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.title_formlabel, --linebreak--, nav_title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_title_formlabel, --linebreak--, subtitle;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.subtitle_formlabel',
        ),
        'titleonly' => 
        array (
          'showitem' => 'title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.title_formlabel',
        ),
        'visibility' => 
        array (
          'showitem' => 'hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden_formlabel, nav_hide;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_hide_formlabel',
        ),
        'hiddenonly' => 
        array (
          'showitem' => 'hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden_formlabel',
        ),
        'access' => 
        array (
          'showitem' => 'starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.starttime_formlabel, endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.endtime_formlabel, extendToSubpages;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.extendToSubpages_formlabel, --linebreak--, fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_group_formlabel, --linebreak--, fe_login_mode;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode_formlabel, --linebreak--,editlock',
        ),
        'abstract' => 
        array (
          'showitem' => 'abstract;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.abstract_formlabel',
        ),
        'metatags' => 
        array (
          'showitem' => 'keywords;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.keywords_formlabel, --linebreak--, description;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.description_formlabel',
        ),
        'editorial' => 
        array (
          'showitem' => 'author;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_formlabel, author_email;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_email_formlabel, lastUpdated;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.lastUpdated_formlabel',
        ),
        'layout' => 
        array (
          'showitem' => 'layout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout_formlabel, newUntil;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.newUntil_formlabel, --linebreak--, backend_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel, backend_layout_next_level;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
        ),
        'backend_layout' => 
        array (
          'showitem' => 'backend_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel, backend_layout_next_level;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
        ),
        'module' => 
        array (
          'showitem' => 'module;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module_formlabel',
        ),
        'replace' => 
        array (
          'showitem' => 'content_from_pid;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.content_from_pid_formlabel',
        ),
        'links' => 
        array (
          'showitem' => 'alias;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.alias_formlabel, --linebreak--, target;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.target_formlabel',
        ),
        'caching' => 
        array (
          'showitem' => 'cache_timeout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout_formlabel, cache_tags, no_cache;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_cache_formlabel',
        ),
        'language' => 
        array (
          'showitem' => 'l18n_cfg;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg_formlabel',
        ),
        'miscellaneous' => 
        array (
          'showitem' => 'is_siteroot;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.is_siteroot_formlabel, php_tree_stop;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.php_tree_stop_formlabel',
        ),
        'adminsonly' => 
        array (
          'showitem' => 'editlock;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.editlock_formlabel',
        ),
        'media' => 
        array (
          'showitem' => 'media;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.media_formlabel',
        ),
        'config' => 
        array (
          'showitem' => 'tsconfig_includes;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tsconfig_includes, --linebreak--, TSconfig;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.TSconfig_formlabel',
        ),
      ),
    ),
    'sys_category' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category',
        'descriptionColumn' => 'description',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'rootLevel' => -1,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'searchFields' => 'title,description',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_category',
        ),
        'security' => 
        array (
          'ignoreRootLevelRestriction' => true,
        ),
        'label_userFunc' => 'GeorgRinger\\News\\Hooks\\Labels->getUserLabelCategory',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,description',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,parent,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.items,items,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--palette--;;timeRestriction,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.tabs.seo,seo_title,seo_description,seo_headline,seo_text,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.options,images,description,single_pid,shortcut,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
      'columns' => 
      array (
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 30,
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_category',
            'foreign_table_where' => 'AND sys_category.uid=###REC_FIELD_l10n_parent### AND sys_category.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145938400,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.title',
          'config' => 
          array (
            'type' => 'input',
            'width' => 200,
            'eval' => 'trim,required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.description',
          'config' => 
          array (
            'type' => 'text',
            'default' => '',
          ),
        ),
        'parent' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.parent',
          'config' => 
          array (
            'minitems' => 0,
            'maxitems' => 1,
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1,0) ORDER BY sys_category.sorting ASC',
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
                'maxLevels' => 99,
              ),
            ),
            'default' => 0,
          ),
        ),
        'items' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.items',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => '*',
            'MM' => 'sys_category_record_mm',
            'MM_oppositeUsage' => 
            array (
              'pages' => 
              array (
                0 => 'categories',
              ),
              'sys_file_metadata' => 
              array (
                0 => 'categories',
              ),
              'tt_content' => 
              array (
                0 => 'categories',
              ),
              'tx_news_domain_model_news' => 
              array (
                0 => 'categories',
              ),
            ),
            'size' => 10,
            'fieldWizard' => 
            array (
              'recordsOverview' => 
              array (
                'disabled' => true,
              ),
            ),
          ),
        ),
        'pid' => 
        array (
          'label' => 'pid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'sorting' => 
        array (
          'label' => 'sorting',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'images' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'images',
              'tablenames' => 'sys_category',
              'table_local' => 'sys_file',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
              'showPossibleLocalizationRecords' => true,
              'showRemovedLocalizationRecords' => true,
              'showAllLocalizationLink' => true,
              'showSynchronizationLink' => true,
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'single_pid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.single_pid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'searchWholePhrase' => true,
              ),
            ),
          ),
        ),
        'shortcut' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.shortcut',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'searchWholePhrase' => true,
              ),
            ),
          ),
        ),
        'import_id' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.import_id',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'import_source' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.import_source',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'seo_headline' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.seo.seo_headline',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'seo_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.seo.seo_title',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'seo_description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.seo.seo_description',
          'config' => 
          array (
            'type' => 'text',
          ),
        ),
        'seo_text' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.seo.seo_text',
          'config' => 
          array (
            'type' => 'text',
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
          ),
        ),
      ),
    ),
    'sys_collection' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_collection',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'descriptionColumn' => 'description',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'crdate',
        'delete' => 'deleted',
        'type' => 'type',
        'rootLevel' => -1,
        'searchFields' => 'title,description',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          'default' => 'apps-clipboard-list',
          'static' => 'apps-clipboard-list',
          'filter' => 'actions-system-tree-search-open',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title, description, table_name, items',
      ),
      'columns' => 
      array (
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 30,
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_collection',
            'foreign_table_where' => 'AND sys_file_collection.pid=###CURRENT_PID### AND sys_file_collection.sys_language_uid IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145938400,
            ),
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'foreign_table' => 'fe_groups',
          ),
        ),
        'table_name' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_collection.table_name',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'tables',
          ),
        ),
        'items' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_collection.items',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'prepend_tname' => true,
            'allowed' => '*',
            'MM' => 'sys_collection_entries',
            'MM_hasUidField' => true,
            'multiple' => true,
            'size' => 5,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_collection.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 60,
            'eval' => 'required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_collection.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 60,
            'rows' => 5,
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_collection.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_collection.type.static',
                1 => 'static',
              ),
            ),
            'default' => 'static',
          ),
        ),
      ),
      'types' => 
      array (
        'static' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,table_name,items,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--palette--;;timeRestriction,fe_group,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
    ),
    'sys_file' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'type' => 'type',
        'hideTable' => true,
        'rootLevel' => true,
        'default_sortby' => 'name ASC',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          1 => 'mimetypes-text-text',
          2 => 'mimetypes-media-image',
          3 => 'mimetypes-media-audio',
          4 => 'mimetypes-media-video',
          5 => 'mimetypes-application',
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'name, type, mime_type, sha1',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'storage, name, type, mime_type, size, sha1, missing',
      ),
      'columns' => 
      array (
        'fileinfo' => 
        array (
          'config' => 
          array (
            'type' => 'user',
            'renderType' => 'fileInfo',
          ),
        ),
        'storage' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.storage',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_storage',
            'foreign_table_where' => 'ORDER BY sys_file_storage.name',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'identifier' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.identifier',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'name' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.name',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
            'eval' => 'required',
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.type',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'size' => 1,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.type.unknown',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.type.text',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.type.image',
                1 => 2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.type.audio',
                1 => 3,
              ),
              4 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.type.video',
                1 => 4,
              ),
              5 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.type.software',
                1 => 5,
              ),
            ),
          ),
        ),
        'mime_type' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.mime_type',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'sha1' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.sha1',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'size' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.size',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 8,
            'max' => 30,
            'eval' => 'int',
            'default' => 0,
          ),
        ),
        'missing' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.missing',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'metadata' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.metadata',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'inline',
            'foreign_table' => 'sys_file_metadata',
            'foreign_field' => 'file',
            'size' => 1,
            'minitems' => 1,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'fileinfo, storage, missing',
        ),
      ),
      'palettes' => 
      array (
      ),
    ),
    'sys_file_collection' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection',
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'crdate',
        'delete' => 'deleted',
        'type' => 'type',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          'default' => 'apps-filetree-folder-media',
          'static' => 'apps-clipboard-images',
          'folder' => 'apps-filetree-folder-media',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'files,title',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime,files,title,description',
      ),
      'columns' => 
      array (
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 30,
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_collection',
            'foreign_table_where' => 'AND sys_file_collection.pid=###CURRENT_PID### AND sys_file_collection.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145938400,
            ),
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.0',
                1 => 'static',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.1',
                1 => 'folder',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.2',
                1 => 'category',
              ),
            ),
          ),
        ),
        'files' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.files',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'files',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required',
          ),
        ),
        'storage' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.storage',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_storage',
            'foreign_table_where' => 'ORDER BY sys_file_storage.name',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'folder' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.folder',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Resource\\Service\\UserFileMountService->renderTceformsSelectDropdown',
            'default' => '',
          ),
        ),
        'recursive' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.recursive',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'category' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.category',
          'config' => 
          array (
            'minitems' => 0,
            'maxitems' => 1,
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1,0) ORDER BY sys_category.sorting ASC',
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
              ),
            ),
            'default' => 0,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,files,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'static' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,files,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'folder' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,storage,folder,recursive,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'category' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,category,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
    ),
    'sys_file_metadata' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata',
        'label' => 'file',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'type' => 'file:type',
        'hideTable' => true,
        'rootLevel' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'file,title,description,alternative',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'file, title, description, alternative,categories',
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_metadata',
            'foreign_table_where' => 'AND sys_file_metadata.uid=###REC_FIELD_l10n_parent### AND sys_file_metadata.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 30,
          ),
        ),
        'fileinfo' => 
        array (
          'config' => 
          array (
            'type' => 'user',
            'renderType' => 'fileInfo',
          ),
        ),
        'file' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:=:0',
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_file',
            'foreign_table_where' => 'AND sys_file.uid = ###REC_FIELD_file###',
            'minitems' => 1,
            'maxitems' => 1,
            'size' => 1,
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.title',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'placeholder' => '__row|file|name',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.description',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'alternative' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.alternative',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'width' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file.width',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'max' => 20,
            'eval' => 'int',
            'default' => 0,
            'readOnly' => true,
          ),
        ),
        'height' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file.height',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'max' => 20,
            'eval' => 'int',
            'default' => 0,
            'readOnly' => true,
          ),
        ),
        'categories' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1, 0) ORDER BY sys_category.sorting ASC',
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'sys_file_metadata',
              'fieldname' => 'categories',
            ),
            'size' => 20,
            'maxitems' => 9999,
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
                'maxLevels' => 99,
              ),
            ),
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,fileinfo,title,description,alternative,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
    ),
    'sys_file_reference' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference',
        'label' => 'uid_local',
        'formattedLabel_userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Service\\UserFileInlineLabelService->getInlineLabel',
        'formattedLabel_userFunc_options' => 
        array (
          'sys_file' => 
          array (
            0 => 'title',
            1 => 'name',
          ),
        ),
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'type' => 'uid_local:type',
        'hideTable' => true,
        'delete' => 'deleted',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'rootLevel' => -1,
        'shadowColumnsForMovePlaceholders' => 'tablenames,fieldname,uid_local,table_local,uid_foreign',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'uid_local,uid_foreign,tablenames,fieldname,title,description',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,uid_local,uid_foreign,tablenames,fieldname,sorting_foreign,table_local,title,description',
      ),
      'columns' => 
      array (
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 30,
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_table_where' => 'AND sys_file_reference.uid=###REC_FIELD_l10n_parent### AND sys_file_reference.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'uid_local' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.uid_local',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'size' => 1,
            'eval' => 'int',
            'maxitems' => 1,
            'minitems' => 0,
            'allowed' => 'sys_file',
            'hideSuggest' => true,
          ),
        ),
        'uid_foreign' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.uid_foreign',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'eval' => 'int',
          ),
        ),
        'tablenames' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.tablenames',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'fieldname' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.fieldname',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'sorting_foreign' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.sorting_foreign',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'max' => 4,
            'eval' => 'int',
            'default' => 0,
          ),
        ),
        'table_local' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.table_local',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'default' => 'sys_file',
          ),
        ),
        'title' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|title',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.link',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 20,
            'max' => 1024,
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.link',
                ),
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'description' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 20,
            'rows' => 5,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|description',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'alternative' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.alternative',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|alternative',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'crop' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.crop',
          'config' => 
          array (
            'type' => 'imageManipulation',
          ),
        ),
        'autoplay' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.autoplay',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'showinpreview' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_media.showinpreview',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,--palette--;;filePalette',
        ),
        1 => 
        array (
          'showitem' => '--palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,--palette--;;filePalette',
        ),
        2 => 
        array (
          'showitem' => '--palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,--palette--;;filePalette',
        ),
        3 => 
        array (
          'showitem' => '--palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,--palette--;;filePalette',
        ),
        4 => 
        array (
          'showitem' => '--palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,--palette--;;filePalette',
        ),
        5 => 
        array (
          'showitem' => '--palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,--palette--;;filePalette',
        ),
      ),
      'palettes' => 
      array (
        'basicoverlayPalette' => 
        array (
          'showitem' => 'title,description',
        ),
        'imageoverlayPalette' => 
        array (
          'showitem' => '
				title,alternative,--linebreak--,
				link,description,--linebreak--,crop
				',
        ),
        'videoOverlayPalette' => 
        array (
          'showitem' => '
				title,description,--linebreak--,autoplay
				',
        ),
        'audioOverlayPalette' => 
        array (
          'showitem' => '
				title,description,--linebreak--,autoplay
				',
        ),
        'filePalette' => 
        array (
          'showitem' => 'uid_local, hidden, sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
        'newsPalette' => 
        array (
          'showitem' => 'showinpreview',
        ),
      ),
    ),
    'sys_file_storage' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'name',
        'delete' => 'deleted',
        'descriptionColumn' => 'description',
        'rootLevel' => true,
        'versioningWS_alwaysAllowLiveEdit' => true,
        'enablecolumns' => 
        array (
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_file_storage',
        ),
        'searchFields' => 'name,description',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'name,description,driver,processingfolder,configuration,auto_extract_metadata',
      ),
      'columns' => 
      array (
        'name' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'is_browsable' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_browsable',
          'config' => 
          array (
            'type' => 'check',
            'default' => 1,
          ),
        ),
        'is_default' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_default',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
            'eval' => 'maximumRecordsChecked',
            'validation' => 
            array (
              'maximumRecordsChecked' => 1,
            ),
          ),
        ),
        'is_public' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_public',
          'config' => 
          array (
            'default' => true,
            'type' => 'user',
            'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Service\\UserStorageCapabilityService->renderIsPublic',
          ),
        ),
        'is_writable' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_writable',
          'config' => 
          array (
            'type' => 'check',
            'default' => 1,
          ),
        ),
        'is_online' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_online',
          'config' => 
          array (
            'type' => 'check',
            'default' => 1,
          ),
        ),
        'auto_extract_metadata' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.auto_extract_metadata',
          'config' => 
          array (
            'type' => 'check',
            'default' => 1,
          ),
        ),
        'processingfolder' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.processingfolder',
          'config' => 
          array (
            'type' => 'input',
            'placeholder' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.processingfolder.placeholder',
            'size' => 20,
          ),
        ),
        'driver' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.driver',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              'Local' => 
              array (
                0 => 'Local filesystem',
                1 => 'Local',
              ),
            ),
            'default' => 'Local',
            'onChange' => 'reload',
          ),
        ),
        'configuration' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.configuration',
          'config' => 
          array (
            'type' => 'flex',
            'ds_pointerField' => 'driver',
            'ds' => 
            array (
              'Local' => 'FILE:EXT:core/Configuration/Resource/Driver/LocalDriverFlexForm.xml',
            ),
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,name,driver,configuration,is_default,auto_extract_metadata,processingfolder,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:accesscapabilities,--palette--;Capabilities;capabilities,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,is_online,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'capabilities' => 
        array (
          'showitem' => 'is_browsable, is_public, is_writable',
        ),
      ),
    ),
    'sys_filemounts' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_filemounts',
        'adminOnly' => true,
        'rootLevel' => 1,
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_filemounts',
        ),
        'useColumnsForDefaultValues' => 'path,base',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'title,path',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,hidden,path,base,description',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'required,trim',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => '2000',
          ),
        ),
        'base' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.baseStorage',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_file_storage',
            'allowNonIdValues' => true,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'eval' => 'required',
            'range' => 
            array (
              'lower' => 1,
            ),
          ),
        ),
        'path' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.folder',
          'displayCond' => 'FIELD:base:>:0',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Resource\\Service\\UserFileMountService->renderTceformsSelectDropdown',
          ),
        ),
        'read_only' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.read_only',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,base,path,read_only,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'sys_history' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_history',
        'label' => 'tablename',
        'tstamp' => 'tstamp',
        'adminOnly' => true,
        'rootLevel' => true,
        'hideTable' => true,
        'default_sortby' => 'uid DESC',
      ),
      'columns' => 
      array (
        'sys_log_uid' => 
        array (
          'label' => 'sys_log_uid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'history_data' => 
        array (
          'label' => 'history_data',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'fieldlist' => 
        array (
          'label' => 'fieldlist',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'recuid' => 
        array (
          'label' => 'recuid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'tablename' => 
        array (
          'label' => 'tablename',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'history_files' => 
        array (
          'label' => 'history_files',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'snapshot' => 
        array (
          'label' => 'snapshot',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'sys_log_uid, history_data, fieldlist, recuid, tablename, tstamp, history_files, snapshot',
        ),
      ),
    ),
    'sys_language' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_language',
        'adminOnly' => true,
        'rootLevel' => 1,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_column' => 'flag',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_language',
          'mask' => 'flags-###TYPE###',
        ),
        'versioningWS_alwaysAllowLiveEdit' => true,
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,title',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'input',
            'size' => 35,
            'max' => 80,
            'eval' => 'trim,required',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'language_isocode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_language.language_isocode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
            'items' => 
            array (
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Service\\IsoCodeService->renderIsoCodeSelectDropdown',
          ),
        ),
        'flag' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_language.flag',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
                2 => '',
              ),
              1 => 
              array (
                0 => 'multiple',
                1 => 'multiple',
                2 => 'flags-multiple',
              ),
              2 => 
              array (
                0 => 'ad',
                1 => 'ad',
                2 => 'flags-ad',
              ),
              3 => 
              array (
                0 => 'ae',
                1 => 'ae',
                2 => 'flags-ae',
              ),
              4 => 
              array (
                0 => 'af',
                1 => 'af',
                2 => 'flags-af',
              ),
              5 => 
              array (
                0 => 'ag',
                1 => 'ag',
                2 => 'flags-ag',
              ),
              6 => 
              array (
                0 => 'ai',
                1 => 'ai',
                2 => 'flags-ai',
              ),
              7 => 
              array (
                0 => 'al',
                1 => 'al',
                2 => 'flags-al',
              ),
              8 => 
              array (
                0 => 'am',
                1 => 'am',
                2 => 'flags-am',
              ),
              9 => 
              array (
                0 => 'an',
                1 => 'an',
                2 => 'flags-an',
              ),
              10 => 
              array (
                0 => 'ao',
                1 => 'ao',
                2 => 'flags-ao',
              ),
              11 => 
              array (
                0 => 'ar',
                1 => 'ar',
                2 => 'flags-ar',
              ),
              12 => 
              array (
                0 => 'as',
                1 => 'as',
                2 => 'flags-as',
              ),
              13 => 
              array (
                0 => 'at',
                1 => 'at',
                2 => 'flags-at',
              ),
              14 => 
              array (
                0 => 'au',
                1 => 'au',
                2 => 'flags-au',
              ),
              15 => 
              array (
                0 => 'aw',
                1 => 'aw',
                2 => 'flags-aw',
              ),
              16 => 
              array (
                0 => 'ax',
                1 => 'ax',
                2 => 'flags-ax',
              ),
              17 => 
              array (
                0 => 'az',
                1 => 'az',
                2 => 'flags-az',
              ),
              18 => 
              array (
                0 => 'ba',
                1 => 'ba',
                2 => 'flags-ba',
              ),
              19 => 
              array (
                0 => 'bb',
                1 => 'bb',
                2 => 'flags-bb',
              ),
              20 => 
              array (
                0 => 'bd',
                1 => 'bd',
                2 => 'flags-bd',
              ),
              21 => 
              array (
                0 => 'be',
                1 => 'be',
                2 => 'flags-be',
              ),
              22 => 
              array (
                0 => 'bf',
                1 => 'bf',
                2 => 'flags-bf',
              ),
              23 => 
              array (
                0 => 'bg',
                1 => 'bg',
                2 => 'flags-bg',
              ),
              24 => 
              array (
                0 => 'bh',
                1 => 'bh',
                2 => 'flags-bh',
              ),
              25 => 
              array (
                0 => 'bi',
                1 => 'bi',
                2 => 'flags-bi',
              ),
              26 => 
              array (
                0 => 'bj',
                1 => 'bj',
                2 => 'flags-bj',
              ),
              27 => 
              array (
                0 => 'bm',
                1 => 'bm',
                2 => 'flags-bm',
              ),
              28 => 
              array (
                0 => 'bn',
                1 => 'bn',
                2 => 'flags-bn',
              ),
              29 => 
              array (
                0 => 'bo',
                1 => 'bo',
                2 => 'flags-bo',
              ),
              30 => 
              array (
                0 => 'br',
                1 => 'br',
                2 => 'flags-br',
              ),
              31 => 
              array (
                0 => 'bs',
                1 => 'bs',
                2 => 'flags-bs',
              ),
              32 => 
              array (
                0 => 'bt',
                1 => 'bt',
                2 => 'flags-bt',
              ),
              33 => 
              array (
                0 => 'bv',
                1 => 'bv',
                2 => 'flags-bv',
              ),
              34 => 
              array (
                0 => 'bw',
                1 => 'bw',
                2 => 'flags-bw',
              ),
              35 => 
              array (
                0 => 'by',
                1 => 'by',
                2 => 'flags-by',
              ),
              36 => 
              array (
                0 => 'bz',
                1 => 'bz',
                2 => 'flags-bz',
              ),
              37 => 
              array (
                0 => 'ca',
                1 => 'ca',
                2 => 'flags-ca',
              ),
              38 => 
              array (
                0 => 'catalonia',
                1 => 'catalonia',
                2 => 'flags-catalonia',
              ),
              39 => 
              array (
                0 => 'cc',
                1 => 'cc',
                2 => 'flags-cc',
              ),
              40 => 
              array (
                0 => 'cd',
                1 => 'cd',
                2 => 'flags-cd',
              ),
              41 => 
              array (
                0 => 'cf',
                1 => 'cf',
                2 => 'flags-cf',
              ),
              42 => 
              array (
                0 => 'cg',
                1 => 'cg',
                2 => 'flags-cg',
              ),
              43 => 
              array (
                0 => 'ch',
                1 => 'ch',
                2 => 'flags-ch',
              ),
              44 => 
              array (
                0 => 'ci',
                1 => 'ci',
                2 => 'flags-ci',
              ),
              45 => 
              array (
                0 => 'ck',
                1 => 'ck',
                2 => 'flags-ck',
              ),
              46 => 
              array (
                0 => 'cl',
                1 => 'cl',
                2 => 'flags-cl',
              ),
              47 => 
              array (
                0 => 'cm',
                1 => 'cm',
                2 => 'flags-cm',
              ),
              48 => 
              array (
                0 => 'cn',
                1 => 'cn',
                2 => 'flags-cn',
              ),
              49 => 
              array (
                0 => 'co',
                1 => 'co',
                2 => 'flags-co',
              ),
              50 => 
              array (
                0 => 'cr',
                1 => 'cr',
                2 => 'flags-cr',
              ),
              51 => 
              array (
                0 => 'cs',
                1 => 'cs',
                2 => 'flags-cs',
              ),
              52 => 
              array (
                0 => 'cu',
                1 => 'cu',
                2 => 'flags-cu',
              ),
              53 => 
              array (
                0 => 'cv',
                1 => 'cv',
                2 => 'flags-cv',
              ),
              54 => 
              array (
                0 => 'cx',
                1 => 'cx',
                2 => 'flags-cx',
              ),
              55 => 
              array (
                0 => 'cy',
                1 => 'cy',
                2 => 'flags-cy',
              ),
              56 => 
              array (
                0 => 'cz',
                1 => 'cz',
                2 => 'flags-cz',
              ),
              57 => 
              array (
                0 => 'de',
                1 => 'de',
                2 => 'flags-de',
              ),
              58 => 
              array (
                0 => 'dj',
                1 => 'dj',
                2 => 'flags-dj',
              ),
              59 => 
              array (
                0 => 'dk',
                1 => 'dk',
                2 => 'flags-dk',
              ),
              60 => 
              array (
                0 => 'dm',
                1 => 'dm',
                2 => 'flags-dm',
              ),
              61 => 
              array (
                0 => 'do',
                1 => 'do',
                2 => 'flags-do',
              ),
              62 => 
              array (
                0 => 'dz',
                1 => 'dz',
                2 => 'flags-dz',
              ),
              63 => 
              array (
                0 => 'ec',
                1 => 'ec',
                2 => 'flags-ec',
              ),
              64 => 
              array (
                0 => 'ee',
                1 => 'ee',
                2 => 'flags-ee',
              ),
              65 => 
              array (
                0 => 'eg',
                1 => 'eg',
                2 => 'flags-eg',
              ),
              66 => 
              array (
                0 => 'eh',
                1 => 'eh',
                2 => 'flags-eh',
              ),
              67 => 
              array (
                0 => 'en-us-gb',
                1 => 'en-us-gb',
                2 => 'flags-en-us-gb',
              ),
              68 => 
              array (
                0 => 'england',
                1 => 'england',
                2 => 'flags-gb-eng',
              ),
              69 => 
              array (
                0 => 'er',
                1 => 'er',
                2 => 'flags-er',
              ),
              70 => 
              array (
                0 => 'es',
                1 => 'es',
                2 => 'flags-es',
              ),
              71 => 
              array (
                0 => 'et',
                1 => 'et',
                2 => 'flags-et',
              ),
              72 => 
              array (
                0 => 'eu',
                1 => 'eu',
                2 => 'flags-eu',
              ),
              73 => 
              array (
                0 => 'fm',
                1 => 'fm',
                2 => 'flags-fm',
              ),
              74 => 
              array (
                0 => 'fi',
                1 => 'fi',
                2 => 'flags-fi',
              ),
              75 => 
              array (
                0 => 'fj',
                1 => 'fj',
                2 => 'flags-fj',
              ),
              76 => 
              array (
                0 => 'fk',
                1 => 'fk',
                2 => 'flags-fk',
              ),
              77 => 
              array (
                0 => 'fm',
                1 => 'fm',
                2 => 'flags-fm',
              ),
              78 => 
              array (
                0 => 'fo',
                1 => 'fo',
                2 => 'flags-fo',
              ),
              79 => 
              array (
                0 => 'fr',
                1 => 'fr',
                2 => 'flags-fr',
              ),
              80 => 
              array (
                0 => 'ga',
                1 => 'ga',
                2 => 'flags-ga',
              ),
              81 => 
              array (
                0 => 'gb',
                1 => 'gb',
                2 => 'flags-gb',
              ),
              82 => 
              array (
                0 => 'gd',
                1 => 'gd',
                2 => 'flags-gd',
              ),
              83 => 
              array (
                0 => 'ge',
                1 => 'ge',
                2 => 'flags-ge',
              ),
              84 => 
              array (
                0 => 'gf',
                1 => 'gf',
                2 => 'flags-gf',
              ),
              85 => 
              array (
                0 => 'gh',
                1 => 'gh',
                2 => 'flags-gh',
              ),
              86 => 
              array (
                0 => 'gi',
                1 => 'gi',
                2 => 'flags-gi',
              ),
              87 => 
              array (
                0 => 'gl',
                1 => 'gl',
                2 => 'flags-gl',
              ),
              88 => 
              array (
                0 => 'gm',
                1 => 'gm',
                2 => 'flags-gm',
              ),
              89 => 
              array (
                0 => 'gn',
                1 => 'gn',
                2 => 'flags-gn',
              ),
              90 => 
              array (
                0 => 'gp',
                1 => 'gp',
                2 => 'flags-gp',
              ),
              91 => 
              array (
                0 => 'gq',
                1 => 'gq',
                2 => 'flags-gq',
              ),
              92 => 
              array (
                0 => 'gr',
                1 => 'gr',
                2 => 'flags-gr',
              ),
              93 => 
              array (
                0 => 'gs',
                1 => 'gs',
                2 => 'flags-gs',
              ),
              94 => 
              array (
                0 => 'gt',
                1 => 'gt',
                2 => 'flags-gt',
              ),
              95 => 
              array (
                0 => 'gu',
                1 => 'gu',
                2 => 'flags-gu',
              ),
              96 => 
              array (
                0 => 'gw',
                1 => 'gw',
                2 => 'flags-gw',
              ),
              97 => 
              array (
                0 => 'gy',
                1 => 'gy',
                2 => 'flags-gy',
              ),
              98 => 
              array (
                0 => 'hk',
                1 => 'hk',
                2 => 'flags-hk',
              ),
              99 => 
              array (
                0 => 'hm',
                1 => 'hm',
                2 => 'flags-hm',
              ),
              100 => 
              array (
                0 => 'hn',
                1 => 'hn',
                2 => 'flags-hn',
              ),
              101 => 
              array (
                0 => 'hr',
                1 => 'hr',
                2 => 'flags-hr',
              ),
              102 => 
              array (
                0 => 'ht',
                1 => 'ht',
                2 => 'flags-ht',
              ),
              103 => 
              array (
                0 => 'hu',
                1 => 'hu',
                2 => 'flags-hu',
              ),
              104 => 
              array (
                0 => 'id',
                1 => 'id',
                2 => 'flags-id',
              ),
              105 => 
              array (
                0 => 'ie',
                1 => 'ie',
                2 => 'flags-ie',
              ),
              106 => 
              array (
                0 => 'il',
                1 => 'il',
                2 => 'flags-il',
              ),
              107 => 
              array (
                0 => 'in',
                1 => 'in',
                2 => 'flags-in',
              ),
              108 => 
              array (
                0 => 'io',
                1 => 'io',
                2 => 'flags-io',
              ),
              109 => 
              array (
                0 => 'iq',
                1 => 'iq',
                2 => 'flags-iq',
              ),
              110 => 
              array (
                0 => 'ir',
                1 => 'ir',
                2 => 'flags-ir',
              ),
              111 => 
              array (
                0 => 'is',
                1 => 'is',
                2 => 'flags-is',
              ),
              112 => 
              array (
                0 => 'it',
                1 => 'it',
                2 => 'flags-it',
              ),
              113 => 
              array (
                0 => 'jm',
                1 => 'jm',
                2 => 'flags-jm',
              ),
              114 => 
              array (
                0 => 'jo',
                1 => 'jo',
                2 => 'flags-jo',
              ),
              115 => 
              array (
                0 => 'jp',
                1 => 'jp',
                2 => 'flags-jp',
              ),
              116 => 
              array (
                0 => 'ke',
                1 => 'ke',
                2 => 'flags-ke',
              ),
              117 => 
              array (
                0 => 'kg',
                1 => 'kg',
                2 => 'flags-kg',
              ),
              118 => 
              array (
                0 => 'kh',
                1 => 'kh',
                2 => 'flags-kh',
              ),
              119 => 
              array (
                0 => 'ki',
                1 => 'ki',
                2 => 'flags-ki',
              ),
              120 => 
              array (
                0 => 'km',
                1 => 'km',
                2 => 'flags-km',
              ),
              121 => 
              array (
                0 => 'kn',
                1 => 'kn',
                2 => 'flags-kn',
              ),
              122 => 
              array (
                0 => 'kp',
                1 => 'kp',
                2 => 'flags-kp',
              ),
              123 => 
              array (
                0 => 'kr',
                1 => 'kr',
                2 => 'flags-kr',
              ),
              124 => 
              array (
                0 => 'kw',
                1 => 'kw',
                2 => 'flags-kw',
              ),
              125 => 
              array (
                0 => 'ky',
                1 => 'ky',
                2 => 'flags-ky',
              ),
              126 => 
              array (
                0 => 'kz',
                1 => 'kz',
                2 => 'flags-kz',
              ),
              127 => 
              array (
                0 => 'la',
                1 => 'la',
                2 => 'flags-la',
              ),
              128 => 
              array (
                0 => 'lb',
                1 => 'lb',
                2 => 'flags-lb',
              ),
              129 => 
              array (
                0 => 'lc',
                1 => 'lc',
                2 => 'flags-lc',
              ),
              130 => 
              array (
                0 => 'li',
                1 => 'li',
                2 => 'flags-li',
              ),
              131 => 
              array (
                0 => 'lk',
                1 => 'lk',
                2 => 'flags-lk',
              ),
              132 => 
              array (
                0 => 'lr',
                1 => 'lr',
                2 => 'flags-lr',
              ),
              133 => 
              array (
                0 => 'ls',
                1 => 'ls',
                2 => 'flags-ls',
              ),
              134 => 
              array (
                0 => 'lt',
                1 => 'lt',
                2 => 'flags-lt',
              ),
              135 => 
              array (
                0 => 'lu',
                1 => 'lu',
                2 => 'flags-lu',
              ),
              136 => 
              array (
                0 => 'lv',
                1 => 'lv',
                2 => 'flags-lv',
              ),
              137 => 
              array (
                0 => 'ly',
                1 => 'ly',
                2 => 'flags-ly',
              ),
              138 => 
              array (
                0 => 'ma',
                1 => 'ma',
                2 => 'flags-ma',
              ),
              139 => 
              array (
                0 => 'mc',
                1 => 'mc',
                2 => 'flags-mc',
              ),
              140 => 
              array (
                0 => 'md',
                1 => 'md',
                2 => 'flags-md',
              ),
              141 => 
              array (
                0 => 'me',
                1 => 'me',
                2 => 'flags-me',
              ),
              142 => 
              array (
                0 => 'mg',
                1 => 'mg',
                2 => 'flags-mg',
              ),
              143 => 
              array (
                0 => 'mh',
                1 => 'mh',
                2 => 'flags-mh',
              ),
              144 => 
              array (
                0 => 'mk',
                1 => 'mk',
                2 => 'flags-mk',
              ),
              145 => 
              array (
                0 => 'ml',
                1 => 'ml',
                2 => 'flags-ml',
              ),
              146 => 
              array (
                0 => 'mm',
                1 => 'mm',
                2 => 'flags-mm',
              ),
              147 => 
              array (
                0 => 'mn',
                1 => 'mn',
                2 => 'flags-mn',
              ),
              148 => 
              array (
                0 => 'mo',
                1 => 'mo',
                2 => 'flags-mo',
              ),
              149 => 
              array (
                0 => 'mp',
                1 => 'mp',
                2 => 'flags-mp',
              ),
              150 => 
              array (
                0 => 'mq',
                1 => 'mq',
                2 => 'flags-mq',
              ),
              151 => 
              array (
                0 => 'mr',
                1 => 'mr',
                2 => 'flags-mr',
              ),
              152 => 
              array (
                0 => 'ms',
                1 => 'ms',
                2 => 'flags-ms',
              ),
              153 => 
              array (
                0 => 'mt',
                1 => 'mt',
                2 => 'flags-mt',
              ),
              154 => 
              array (
                0 => 'mu',
                1 => 'mu',
                2 => 'flags-mu',
              ),
              155 => 
              array (
                0 => 'mv',
                1 => 'mv',
                2 => 'flags-mv',
              ),
              156 => 
              array (
                0 => 'mw',
                1 => 'mw',
                2 => 'flags-mw',
              ),
              157 => 
              array (
                0 => 'mx',
                1 => 'mx',
                2 => 'flags-mx',
              ),
              158 => 
              array (
                0 => 'my',
                1 => 'my',
                2 => 'flags-my',
              ),
              159 => 
              array (
                0 => 'mz',
                1 => 'mz',
                2 => 'flags-mz',
              ),
              160 => 
              array (
                0 => 'na',
                1 => 'na',
                2 => 'flags-na',
              ),
              161 => 
              array (
                0 => 'nc',
                1 => 'nc',
                2 => 'flags-nc',
              ),
              162 => 
              array (
                0 => 'ne',
                1 => 'ne',
                2 => 'flags-ne',
              ),
              163 => 
              array (
                0 => 'nf',
                1 => 'nf',
                2 => 'flags-nf',
              ),
              164 => 
              array (
                0 => 'ng',
                1 => 'ng',
                2 => 'flags-ng',
              ),
              165 => 
              array (
                0 => 'ni',
                1 => 'ni',
                2 => 'flags-ni',
              ),
              166 => 
              array (
                0 => 'nl',
                1 => 'nl',
                2 => 'flags-nl',
              ),
              167 => 
              array (
                0 => 'no',
                1 => 'no',
                2 => 'flags-no',
              ),
              168 => 
              array (
                0 => 'np',
                1 => 'np',
                2 => 'flags-np',
              ),
              169 => 
              array (
                0 => 'nr',
                1 => 'nr',
                2 => 'flags-nr',
              ),
              170 => 
              array (
                0 => 'nu',
                1 => 'nu',
                2 => 'flags-nu',
              ),
              171 => 
              array (
                0 => 'nz',
                1 => 'nz',
                2 => 'flags-nz',
              ),
              172 => 
              array (
                0 => 'om',
                1 => 'om',
                2 => 'flags-om',
              ),
              173 => 
              array (
                0 => 'pa',
                1 => 'pa',
                2 => 'flags-pa',
              ),
              174 => 
              array (
                0 => 'pe',
                1 => 'pe',
                2 => 'flags-pe',
              ),
              175 => 
              array (
                0 => 'pf',
                1 => 'pf',
                2 => 'flags-pf',
              ),
              176 => 
              array (
                0 => 'pg',
                1 => 'pg',
                2 => 'flags-pg',
              ),
              177 => 
              array (
                0 => 'ph',
                1 => 'ph',
                2 => 'flags-ph',
              ),
              178 => 
              array (
                0 => 'pk',
                1 => 'pk',
                2 => 'flags-pk',
              ),
              179 => 
              array (
                0 => 'pl',
                1 => 'pl',
                2 => 'flags-pl',
              ),
              180 => 
              array (
                0 => 'pm',
                1 => 'pm',
                2 => 'flags-pm',
              ),
              181 => 
              array (
                0 => 'pn',
                1 => 'pn',
                2 => 'flags-pn',
              ),
              182 => 
              array (
                0 => 'pr',
                1 => 'pr',
                2 => 'flags-pr',
              ),
              183 => 
              array (
                0 => 'ps',
                1 => 'ps',
                2 => 'flags-ps',
              ),
              184 => 
              array (
                0 => 'pt',
                1 => 'pt',
                2 => 'flags-pt',
              ),
              185 => 
              array (
                0 => 'pw',
                1 => 'pw',
                2 => 'flags-pw',
              ),
              186 => 
              array (
                0 => 'py',
                1 => 'py',
                2 => 'flags-py',
              ),
              187 => 
              array (
                0 => 'qa',
                1 => 'qa',
                2 => 'flags-qa',
              ),
              188 => 
              array (
                0 => 'qc',
                1 => 'qc',
                2 => 'flags-qc',
              ),
              189 => 
              array (
                0 => 're',
                1 => 're',
                2 => 'flags-re',
              ),
              190 => 
              array (
                0 => 'ro',
                1 => 'ro',
                2 => 'flags-ro',
              ),
              191 => 
              array (
                0 => 'rs',
                1 => 'rs',
                2 => 'flags-rs',
              ),
              192 => 
              array (
                0 => 'ru',
                1 => 'ru',
                2 => 'flags-ru',
              ),
              193 => 
              array (
                0 => 'rw',
                1 => 'rw',
                2 => 'flags-rw',
              ),
              194 => 
              array (
                0 => 'sa',
                1 => 'sa',
                2 => 'flags-sa',
              ),
              195 => 
              array (
                0 => 'sb',
                1 => 'sb',
                2 => 'flags-sb',
              ),
              196 => 
              array (
                0 => 'sc',
                1 => 'sc',
                2 => 'flags-sc',
              ),
              197 => 
              array (
                0 => 'scotland',
                1 => 'scotland',
                2 => 'flags-scotland',
              ),
              198 => 
              array (
                0 => 'sd',
                1 => 'sd',
                2 => 'flags-sd',
              ),
              199 => 
              array (
                0 => 'se',
                1 => 'se',
                2 => 'flags-se',
              ),
              200 => 
              array (
                0 => 'sg',
                1 => 'sg',
                2 => 'flags-sg',
              ),
              201 => 
              array (
                0 => 'sh',
                1 => 'sh',
                2 => 'flags-sh',
              ),
              202 => 
              array (
                0 => 'si',
                1 => 'si',
                2 => 'flags-si',
              ),
              203 => 
              array (
                0 => 'sj',
                1 => 'sj',
                2 => 'flags-sj',
              ),
              204 => 
              array (
                0 => 'sk',
                1 => 'sk',
                2 => 'flags-sk',
              ),
              205 => 
              array (
                0 => 'sl',
                1 => 'sl',
                2 => 'flags-sl',
              ),
              206 => 
              array (
                0 => 'sm',
                1 => 'sm',
                2 => 'flags-sm',
              ),
              207 => 
              array (
                0 => 'sn',
                1 => 'sn',
                2 => 'flags-sn',
              ),
              208 => 
              array (
                0 => 'so',
                1 => 'so',
                2 => 'flags-so',
              ),
              209 => 
              array (
                0 => 'sr',
                1 => 'sr',
                2 => 'flags-sr',
              ),
              210 => 
              array (
                0 => 'st',
                1 => 'st',
                2 => 'flags-st',
              ),
              211 => 
              array (
                0 => 'sv',
                1 => 'sv',
                2 => 'flags-sv',
              ),
              212 => 
              array (
                0 => 'sy',
                1 => 'sy',
                2 => 'flags-sy',
              ),
              213 => 
              array (
                0 => 'sz',
                1 => 'sz',
                2 => 'flags-sz',
              ),
              214 => 
              array (
                0 => 'tc',
                1 => 'tc',
                2 => 'flags-tc',
              ),
              215 => 
              array (
                0 => 'td',
                1 => 'td',
                2 => 'flags-td',
              ),
              216 => 
              array (
                0 => 'tf',
                1 => 'tf',
                2 => 'flags-tf',
              ),
              217 => 
              array (
                0 => 'tg',
                1 => 'tg',
                2 => 'flags-tg',
              ),
              218 => 
              array (
                0 => 'th',
                1 => 'th',
                2 => 'flags-th',
              ),
              219 => 
              array (
                0 => 'tj',
                1 => 'tj',
                2 => 'flags-tj',
              ),
              220 => 
              array (
                0 => 'tk',
                1 => 'tk',
                2 => 'flags-tk',
              ),
              221 => 
              array (
                0 => 'tl',
                1 => 'tl',
                2 => 'flags-tl',
              ),
              222 => 
              array (
                0 => 'tm',
                1 => 'tm',
                2 => 'flags-tm',
              ),
              223 => 
              array (
                0 => 'tn',
                1 => 'tn',
                2 => 'flags-tn',
              ),
              224 => 
              array (
                0 => 'to',
                1 => 'to',
                2 => 'flags-to',
              ),
              225 => 
              array (
                0 => 'tr',
                1 => 'tr',
                2 => 'flags-tr',
              ),
              226 => 
              array (
                0 => 'tt',
                1 => 'tt',
                2 => 'flags-tt',
              ),
              227 => 
              array (
                0 => 'tv',
                1 => 'tv',
                2 => 'flags-tv',
              ),
              228 => 
              array (
                0 => 'tw',
                1 => 'tw',
                2 => 'flags-tw',
              ),
              229 => 
              array (
                0 => 'tz',
                1 => 'tz',
                2 => 'flags-tz',
              ),
              230 => 
              array (
                0 => 'ua',
                1 => 'ua',
                2 => 'flags-ua',
              ),
              231 => 
              array (
                0 => 'ug',
                1 => 'ug',
                2 => 'flags-ug',
              ),
              232 => 
              array (
                0 => 'um',
                1 => 'um',
                2 => 'flags-um',
              ),
              233 => 
              array (
                0 => 'us',
                1 => 'us',
                2 => 'flags-us',
              ),
              234 => 
              array (
                0 => 'uy',
                1 => 'uy',
                2 => 'flags-uy',
              ),
              235 => 
              array (
                0 => 'uz',
                1 => 'uz',
                2 => 'flags-uz',
              ),
              236 => 
              array (
                0 => 'va',
                1 => 'va',
                2 => 'flags-va',
              ),
              237 => 
              array (
                0 => 'vc',
                1 => 'vc',
                2 => 'flags-vc',
              ),
              238 => 
              array (
                0 => 've',
                1 => 've',
                2 => 'flags-ve',
              ),
              239 => 
              array (
                0 => 'vg',
                1 => 'vg',
                2 => 'flags-vg',
              ),
              240 => 
              array (
                0 => 'vi',
                1 => 'vi',
                2 => 'flags-vi',
              ),
              241 => 
              array (
                0 => 'vn',
                1 => 'vn',
                2 => 'flags-vn',
              ),
              242 => 
              array (
                0 => 'vu',
                1 => 'vu',
                2 => 'flags-vu',
              ),
              243 => 
              array (
                0 => 'wales',
                1 => 'wales',
                2 => 'flags-wales',
              ),
              244 => 
              array (
                0 => 'wf',
                1 => 'wf',
                2 => 'flags-wf',
              ),
              245 => 
              array (
                0 => 'ws',
                1 => 'ws',
                2 => 'flags-ws',
              ),
              246 => 
              array (
                0 => 'ye',
                1 => 'ye',
                2 => 'flags-ye',
              ),
              247 => 
              array (
                0 => 'yt',
                1 => 'yt',
                2 => 'flags-yt',
              ),
              248 => 
              array (
                0 => 'za',
                1 => 'za',
                2 => 'flags-za',
              ),
              249 => 
              array (
                0 => 'zm',
                1 => 'zm',
                2 => 'flags-zm',
              ),
              250 => 
              array (
                0 => 'zw',
                1 => 'zw',
                2 => 'flags-zw',
              ),
            ),
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,language_isocode,flag,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'sys_log' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_log',
        'label' => 'details',
        'tstamp' => 'tstamp',
        'adminOnly' => true,
        'rootLevel' => true,
        'hideTable' => true,
        'default_sortby' => 'uid DESC',
      ),
      'columns' => 
      array (
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'userid' => 
        array (
          'label' => 'userid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'action' => 
        array (
          'label' => 'action',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'recuid' => 
        array (
          'label' => 'recuid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'tablename' => 
        array (
          'label' => 'tablename',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'recpid' => 
        array (
          'label' => 'recpid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'error' => 
        array (
          'label' => 'error',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'details' => 
        array (
          'label' => 'details',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'type' => 
        array (
          'label' => 'type',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'details_nr' => 
        array (
          'label' => 'details_nr',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'IP' => 
        array (
          'label' => 'IP',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'log_data' => 
        array (
          'label' => 'log_data',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'event_pid' => 
        array (
          'label' => 'event_pid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'workspace' => 
        array (
          'label' => 'workspace',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'NEWid' => 
        array (
          'label' => 'NEWid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'tstamp, userid, action, recuid, tablename, recpid, error, details, type, details_nr, IP, log_data, event_pid, workspace, NEWid',
        ),
      ),
    ),
    'sys_news' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_news',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'adminOnly' => true,
        'rootLevel' => true,
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_news',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,title,content,starttime,endtime',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
        'content' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 5,
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,content,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'backend_layout' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout',
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-backend_layout',
        ),
        'selicon_field' => 'icon',
        'selicon_field_path' => 'uploads/media',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,config,description,hidden,icon',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 25,
          ),
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.config',
          'config' => 
          array (
            'type' => 'text',
            'renderType' => 'belayoutwizard',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'icon' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.icon',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'file',
            'allowed' => 'jpg,gif,png',
            'uploadfolder' => 'uploads/media',
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,icon,config,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'fe_groups' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups',
        'typeicon_classes' => 
        array (
          'default' => 'status-user-group-frontend',
        ),
        'useColumnsForDefaultValues' => 'lockToDomain',
        'searchFields' => 'title,description',
        'type' => 'tx_extbase_type',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,hidden,subgroup,lockToDomain,description',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'subgroup' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.subgroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'AND NOT(fe_groups.uid = ###THIS_UID###) AND fe_groups.hidden=0 ORDER BY fe_groups.title',
            'enableMultiSelectFilterTextfield' => true,
            'size' => 6,
            'autoSizeMax' => 10,
            'minitems' => 0,
            'maxitems' => 20,
          ),
        ),
        'lockToDomain' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.lockToDomain',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'TSconfig' => 
        array (
          'exclude' => true,
          'label' => 'TSconfig:',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 10,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'tx_extbase_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUserGroup',
                1 => 'Tx_Extbase_Domain_Model_FrontendUserGroup',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'felogin_redirectPid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_redirectPid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,subgroup,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.tabs.options,lockToDomain,TSconfig,felogin_redirectPid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_extbase_type',
        ),
        'Tx_Extbase_Domain_Model_FrontendUserGroup' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,subgroup,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.tabs.options,lockToDomain,TSconfig,felogin_redirectPid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_extbase_type',
        ),
      ),
    ),
    'fe_users' => 
    array (
      'ctrl' => 
      array (
        'label' => 'username',
        'descriptionColumn' => 'description',
        'default_sortby' => 'username',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'disable',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'status-user-frontend',
        ),
        'useColumnsForDefaultValues' => 'usergroup,lockToDomain,disable,starttime,endtime',
        'searchFields' => 'username,name,first_name,last_name,middle_name,address,telephone,fax,email,title,zip,city,country,company,description',
        'type' => 'tx_extbase_type',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'username,password,usergroup,lockToDomain,name,first_name,middle_name,last_name,title,company,address,zip,city,country,email,www,telephone,fax,disable,starttime,endtime,lastlogin,description',
      ),
      'columns' => 
      array (
        'username' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.username',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
            'eval' => 'nospace,trim,lower,uniqueInPid,required',
            'autocomplete' => false,
          ),
        ),
        'password' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.password',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'max' => 100,
            'eval' => 'trim,required,TYPO3\\CMS\\Saltedpasswords\\Evaluation\\FrontendEvaluator,password',
            'autocomplete' => false,
            'renderType' => 'rsaInput',
          ),
        ),
        'usergroup' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.usergroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'ORDER BY fe_groups.title',
            'enableMultiSelectFilterTextfield' => true,
            'size' => 6,
            'minitems' => 1,
            'maxitems' => 50,
          ),
        ),
        'lockToDomain' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.lockToDomain',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
            'softref' => 'substitute',
          ),
        ),
        'name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'eval' => 'trim',
            'max' => 160,
          ),
        ),
        'first_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.first_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'middle_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.middle_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'last_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.last_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'address' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.address',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 20,
            'rows' => 3,
          ),
        ),
        'telephone' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.phone',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 30,
          ),
        ),
        'fax' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fax',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 30,
          ),
        ),
        'email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 255,
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.title_person',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => '40',
          ),
        ),
        'zip' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.zip',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 10,
            'max' => '10',
          ),
        ),
        'city' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.city',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'country' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.country',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 40,
          ),
        ),
        'www' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.www',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 80,
          ),
        ),
        'company' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.company',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 80,
          ),
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
            'maxitems' => 6,
            'minitems' => 0,
          ),
        ),
        'disable' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145938400,
            ),
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'TSconfig' => 
        array (
          'exclude' => true,
          'label' => 'TSconfig:',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 10,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'lastlogin' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.lastlogin',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'readOnly' => true,
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'tx_extbase_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUser',
                1 => 'Tx_Extbase_Domain_Model_FrontendUser',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'felogin_redirectPid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_redirectPid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'felogin_forgotHash' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_forgotHash',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,username,password,usergroup,lastlogin,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.personelData,company,title,name,--palette--;;2,address,zip,city,country,telephone,fax,email,www,image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.options,lockToDomain,TSconfig,felogin_redirectPid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,disable,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_extbase_type',
        ),
        'Tx_Extbase_Domain_Model_FrontendUser' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,username,password,usergroup,lastlogin,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.personelData,company,title,name,--palette--;;2,address,zip,city,country,telephone,fax,email,www,image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.options,lockToDomain,TSconfig,felogin_redirectPid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,disable,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_extbase_type',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        2 => 
        array (
          'showitem' => 'first_name,--linebreak--,middle_name,--linebreak--,last_name',
        ),
      ),
    ),
    'pages_language_overlay' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'tstamp' => 'tstamp',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages_language_overlay',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'crdate' => 'crdate',
        'hideAtCopy' => 1,
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'transOrigPointerField' => 'pid',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'shadowColumnsForNewPlaceholders' => 'title',
        'languageField' => 'sys_language_uid',
        'type' => 'doktype',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-content-page-language-overlay',
        ),
        'searchFields' => 'title,subtitle,nav_title,keywords,description,abstract,author,author_email,url',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,hidden,starttime,endtime,keywords,description,abstract',
      ),
      'columns' => 
      array (
        'doktype' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.page',
                1 => '--div--',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:doktype.I.0',
                1 => '1',
                2 => 'apps-pagetree-page-default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.4',
                1 => '6',
                2 => 'apps-pagetree-page-backend-users',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.link',
                1 => '--div--',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.2',
                1 => '4',
                2 => 'apps-pagetree-page-shortcut',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.5',
                1 => '7',
                2 => 'apps-pagetree-page-mountpoint',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.8',
                1 => '3',
                2 => 'apps-pagetree-page-shortcut-external',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.special',
                1 => '--div--',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:doktype.I.folder',
                1 => '254',
                2 => 'apps-pagetree-folder-default',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:doktype.I.2',
                1 => '255',
                2 => 'apps-filetree-folder-recycler',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.7',
                1 => '199',
                2 => 'apps-pagetree-spacer',
              ),
            ),
            'default' => '1',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden_checkbox_1_formlabel',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145938400,
            ),
          ),
        ),
        'title' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim,required',
          ),
        ),
        'subtitle' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.subtitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'nav_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'keywords' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.keywords',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'abstract' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.abstract',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'author' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.author',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'eval' => 'trim',
            'max' => 80,
          ),
        ),
        'author_email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'eval' => 'trim',
            'max' => 80,
            'softref' => 'email[subst]',
          ),
        ),
        'media' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.media',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette;audioOverlayPalette,
                                    --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette;videoOverlayPalette,
                                    --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
          ),
        ),
        'url' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.url',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'max' => 255,
            'eval' => 'trim',
            'softref' => 'url',
          ),
        ),
        'urltype' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.automatic',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'http://',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'https://',
                1 => '4',
              ),
              3 => 
              array (
                0 => 'ftp://',
                1 => '2',
              ),
              4 => 
              array (
                0 => 'mailto:',
                1 => '3',
              ),
            ),
            'default' => '1',
          ),
        ),
        'shortcut' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.shortcut_page',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'default' => 0,
          ),
        ),
        'shortcut_mode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.2',
                1 => 2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.3',
                1 => 3,
              ),
            ),
            'default' => 0,
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.sorting',
            'items' => 
            array (
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l18n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags;metatags,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,sys_language_uid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        3 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,doktype,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--palette--;;external,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,sys_language_uid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        4 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,doktype,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--palette--;;shortcut,--palette--;;shortcutpage,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,sys_language_uid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        7 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,sys_language_uid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        199 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;titleonly,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,sys_language_uid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        254 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;titleonly,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,sys_language_uid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        255 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;titleonly,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,sys_language_uid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        5 => 
        array (
          'showitem' => 'author,author_email',
        ),
        'standard' => 
        array (
          'showitem' => 'doktype;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype_formlabel',
        ),
        'shortcut' => 
        array (
          'showitem' => 'shortcut_mode;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode_formlabel',
        ),
        'shortcutpage' => 
        array (
          'showitem' => 'shortcut;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_formlabel',
        ),
        'external' => 
        array (
          'showitem' => 'urltype;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.urltype_formlabel, url;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.url_formlabel',
        ),
        'title' => 
        array (
          'showitem' => 'title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.title_formlabel, --linebreak--, nav_title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_title_formlabel, --linebreak--, subtitle;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.subtitle_formlabel',
        ),
        'titleonly' => 
        array (
          'showitem' => 'title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.title_formlabel',
        ),
        'hiddenonly' => 
        array (
          'showitem' => 'hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden_formlabel',
        ),
        'access' => 
        array (
          'showitem' => 'starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.starttime_formlabel, endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.endtime_formlabel',
        ),
        'abstract' => 
        array (
          'showitem' => 'abstract;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.abstract_formlabel',
        ),
        'metatags' => 
        array (
          'showitem' => 'keywords;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.keywords_formlabel, --linebreak--, description;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.description_formlabel',
        ),
        'editorial' => 
        array (
          'showitem' => 'author;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_formlabel, author_email;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_email_formlabel',
        ),
        'language' => 
        array (
          'showitem' => 'l18n_cfg;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg_formlabel',
        ),
        'media' => 
        array (
          'showitem' => 'media;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.media_formlabel',
        ),
      ),
    ),
    'sys_domain' => 
    array (
      'ctrl' => 
      array (
        'label' => 'domainName',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-content-domain',
        ),
        'searchFields' => 'domainName,redirectTo',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,domainName,redirectTo',
      ),
      'columns' => 
      array (
        'domainName' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.domainName',
          'config' => 
          array (
            'type' => 'input',
            'size' => 35,
            'max' => 255,
            'eval' => 'required,unique,lower,trim,domainname',
            'softref' => 'substitute',
          ),
        ),
        'redirectTo' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.redirectTo',
          'config' => 
          array (
            'type' => 'input',
            'size' => 35,
            'max' => 255,
            'default' => '',
            'eval' => 'trim',
            'softref' => 'substitute',
          ),
        ),
        'redirectHttpStatusCode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.redirectHttpStatusCode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.redirectHttpStatusCode.301',
                1 => '301',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.redirectHttpStatusCode.302',
                1 => '302',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.redirectHttpStatusCode.303',
                1 => '303',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.redirectHttpStatusCode.307',
                1 => '307',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'prepend_params' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.prepend_params',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'forced' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.forced',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,domainName,--palette--;;1,prepend_params,forced,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'redirectTo, redirectHttpStatusCode',
        ),
      ),
    ),
    'sys_template' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'adminOnly' => true,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_column' => 'root',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-content-template-extension',
          1 => 'mimetypes-x-content-template',
        ),
        'searchFields' => 'title,constants,config',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,clear,root,basedOn,nextLevel,sitetitle,description,hidden,starttime,endtime',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145938400,
            ),
          ),
        ),
        'root' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.root',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'clear' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.clear',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'Constants',
                1 => '',
              ),
              1 => 
              array (
                0 => 'Setup',
                1 => '',
              ),
            ),
            'cols' => 2,
          ),
        ),
        'sitetitle' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.sitetitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
          ),
        ),
        'constants' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.constants',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 10,
            'wrap' => 'off',
            'enableTabulator' => true,
            'fixedFont' => true,
            'softref' => 'email[subst],url[subst]',
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'nextLevel' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.nextLevel',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'sys_template',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'default' => '',
          ),
        ),
        'include_static_file' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.include_static_file',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'maxitems' => 100,
            'items' => 
            array (
              0 => 
              array (
                0 => 'Fluid Content Elements (fluid_styled_content)',
                1 => 'EXT:fluid_styled_content/Configuration/TypoScript/',
              ),
              1 => 
              array (
                0 => 'Fluid Content Elements CSS (optional) (fluid_styled_content)',
                1 => 'EXT:fluid_styled_content/Configuration/TypoScript/Styling/',
              ),
              2 => 
              array (
                0 => 'Form (form)',
                1 => 'EXT:form/Configuration/TypoScript/',
              ),
              3 => 
              array (
                0 => 'News (news)',
                1 => 'EXT:news/Configuration/TypoScript',
              ),
              4 => 
              array (
                0 => 'News Sitemap (news)',
                1 => 'EXT:news/Configuration/TypoScript/Sitemap',
              ),
              5 => 
              array (
                0 => 'News Styles Twitter Bootstrap (news)',
                1 => 'EXT:news/Configuration/TypoScript/Styles/Twb',
              ),
              6 => 
              array (
                0 => 'Eventnews (eventnews)',
                1 => 'EXT:eventnews/Configuration/TypoScript',
              ),
              7 => 
              array (
                0 => 'Gridelements (gridelements)',
                1 => 'EXT:gridelements/Configuration/TypoScript/',
              ),
              8 => 
              array (
                0 => 'Faceted Search (ke_search)',
                1 => 'EXT:ke_search/Configuration/TypoScript',
              ),
              9 => 
              array (
                0 => 'Spreadsheets (spreadsheets)',
                1 => 'EXT:spreadsheets/Configuration/TypoScript/',
              ),
            ),
            'enableMultiSelectFilterTextfield' => true,
            'softref' => 'ext_fileref',
          ),
        ),
        'basedOn' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'sys_template',
            'maxitems' => 50,
            'autoSizeMax' => 10,
            'minitems' => 0,
            'default' => '',
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn_edit',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn_add',
                  'setValue' => 'prepend',
                ),
              ),
            ),
          ),
        ),
        'includeStaticAfterBasedOn' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.includeStaticAfterBasedOn',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.config',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 10,
            'cols' => 48,
            'wrap' => 'off',
            'enableTabulator' => true,
            'fixedFont' => true,
            'softref' => 'email[subst],url[subst]',
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'static_file_mode' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.3',
                1 => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,sitetitle,constants,config,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.tabs.options,clear,root,nextLevel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.tabs.include,includeStaticAfterBasedOn,include_static_file,basedOn,static_file_mode,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'tt_content' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'label_alt' => 'subheader,bodytext',
        'descriptionColumn' => 'rowDescription',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'editlock' => 'editlock',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:tt_content',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'type' => 'CType',
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'copyAfterDuplFields' => 'colPos,sys_language_uid',
        'useColumnsForDefaultValues' => 'colPos,sys_language_uid,CType,tx_gridelements_container,tx_gridelements_columns',
        'shadowColumnsForNewPlaceholders' => 'colPos,tx_gridelements_container,tx_gridelements_columns',
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'languageField' => 'sys_language_uid',
        'translationSource' => 'l10n_source',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'typeicon_column' => 'CType',
        'typeicon_classes' => 
        array (
          'header' => 'mimetypes-x-content-header',
          'text' => 'mimetypes-x-content-text',
          'textpic' => 'mimetypes-x-content-text-picture',
          'image' => 'mimetypes-x-content-image',
          'textmedia' => 'mimetypes-x-content-text-media',
          'bullets' => 'mimetypes-x-content-list-bullets',
          'table' => 'mimetypes-x-content-table',
          'uploads' => 'mimetypes-x-content-list-files',
          'list' => 'mimetypes-x-content-plugin',
          'login' => 'mimetypes-x-content-login',
          'shortcut' => 'mimetypes-x-content-link',
          'script' => 'mimetypes-x-content-script',
          'div' => 'mimetypes-x-content-divider',
          'html' => 'mimetypes-x-content-html',
          'default' => 'mimetypes-x-content-text',
          'menu_abstract' => 'content-menu-abstract',
          'menu_categorized_content' => 'content-menu-categorized',
          'menu_categorized_pages' => 'content-menu-categorized',
          'menu_pages' => 'content-menu-pages',
          'menu_subpages' => 'content-menu-pages',
          'menu_recently_updated' => 'content-menu-recently-updated',
          'menu_related_pages' => 'content-menu-related',
          'menu_sitemap' => 'content-menu-sitemap',
          'menu_sitemap_pages' => 'content-menu-sitemap-pages',
          'menu_section' => 'content-menu-section',
          'menu_section_pages' => 'content-menu-section',
          'form_formframework' => 'content-form',
          'gridelements_pi1' => 'gridelements-default',
          'dce_dceuid2' => 'content-header',
          'dce_dceuid1' => 'content-plugin',
        ),
        'searchFields' => 'header,header_link,subheader,bodytext,pi_flexform',
        'label_userFunc' => 'ArminVieweg\\Dce\\UserFunction\\CustomLabels\\TtContentLabel->getLabel',
      ),
      'interface' => 
      array (
        'always_description' => 0,
        'showRecordFieldList' => 'CType,header,rowDescription,header_link,bodytext,image,media,imagewidth,imageorient,records,colPos,starttime,endtime,fe_group,categories',
      ),
      'columns' => 
      array (
        'CType' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.standard',
                1 => '--div--',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.0',
                1 => 'header',
                2 => 'content-header',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.1',
                1 => 'text',
                2 => 'content-text',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.2',
                1 => 'textpic',
                2 => 'content-textpic',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.3',
                1 => 'image',
                2 => 'content-image',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.textmedia',
                1 => 'textmedia',
                2 => 'content-textmedia',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.lists',
                1 => '--div--',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.4',
                1 => 'bullets',
                2 => 'content-bullets',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.5',
                1 => 'table',
                2 => 'content-table',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:spreadsheets/Resources/Private/Language/locallang.xlf:wizards.spreadsheets_table.title',
                1 => 'spreadsheets_table',
                2 => 'mimetypes-open-document-spreadsheet',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.6',
                1 => 'uploads',
                2 => 'content-special-uploads',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.menu',
                1 => '--div--',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_abstract',
                1 => 'menu_abstract',
                2 => 'content-menu-abstract',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_content',
                1 => 'menu_categorized_content',
                2 => 'content-menu-categorized',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_pages',
                1 => 'menu_categorized_pages',
                2 => 'content-menu-categorized',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_pages',
                1 => 'menu_pages',
                2 => 'content-menu-pages',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_subpages',
                1 => 'menu_subpages',
                2 => 'content-menu-pages',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_recently_updated',
                1 => 'menu_recently_updated',
                2 => 'content-menu-recently-updated',
              ),
              18 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_related_pages',
                1 => 'menu_related_pages',
                2 => 'content-menu-related',
              ),
              19 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section',
                1 => 'menu_section',
                2 => 'content-menu-section',
              ),
              20 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section_pages',
                1 => 'menu_section_pages',
                2 => 'content-menu-section',
              ),
              21 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap',
                1 => 'menu_sitemap',
                2 => 'content-menu-sitemap',
              ),
              22 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap_pages',
                1 => 'menu_sitemap_pages',
                2 => 'content-menu-sitemap-pages',
              ),
              23 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.special',
                1 => '--div--',
              ),
              24 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.13',
                1 => 'shortcut',
                2 => 'content-special-shortcut',
              ),
              25 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.14',
                1 => 'list',
                2 => 'content-plugin',
              ),
              26 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.16',
                1 => 'div',
                2 => 'content-special-div',
              ),
              27 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.17',
                1 => 'html',
                2 => 'content-special-html',
              ),
              28 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.forms',
                1 => '--div--',
              ),
              29 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.10',
                1 => 'login',
                2 => 'content-elements-login',
              ),
              30 => 
              array (
                0 => 'Form',
                1 => 'form_formframework',
                2 => 'content-form',
              ),
              31 => 
              array (
                0 => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tt_content.CType_pi1',
                1 => 'gridelements_pi1',
                2 => 'gridelements-default',
              ),
              32 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce_long',
                1 => '--div--',
              ),
              33 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.miscellaneous',
                1 => '--div--',
              ),
              34 => 
              array (
                0 => 'Accord2',
                1 => 'dce_dceuid2',
                2 => 'content-header',
              ),
              35 => 
              array (
                0 => 'Accord',
                1 => 'dce_dceuid1',
                2 => 'content-plugin',
              ),
            ),
            'default' => 'text',
            'authMode' => 'explicitAllow',
            'authMode_enforce' => 'strict',
            'itemsProcFunc' => 'GridElementsTeam\\Gridelements\\Backend\\ItemsProcFuncs\\CTypeList->itemsProcFunc',
          ),
        ),
        'editlock' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145938400,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'ORDER BY fe_groups.title',
            'enableMultiSelectFilterTextfield' => true,
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
                2 => 'flags-multiple',
              ),
            ),
            'default' => 0,
            'itemsProcFunc' => 'GridElementsTeam\\Gridelements\\Backend\\ItemsProcFuncs\\SysLanguageUidList->itemsProcFunc',
          ),
        ),
        'l18n_parent' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.3',
                1 => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'frame_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.default',
                1 => 'default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.ruler_before',
                1 => 'ruler-before',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.ruler_after',
                1 => 'ruler-after',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent',
                1 => 'indent',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent_left',
                1 => 'indent-left',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent_right',
                1 => 'indent-right',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.none',
                1 => 'none',
              ),
            ),
            'default' => 'default',
          ),
        ),
        'space_before_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_before_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_none',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small',
                1 => 'extra-small',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small',
                1 => 'small',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium',
                1 => 'medium',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large',
                1 => 'large',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large',
                1 => 'extra-large',
              ),
            ),
            'default' => '',
          ),
        ),
        'space_after_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_after_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_none',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small',
                1 => 'extra-small',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small',
                1 => 'small',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium',
                1 => 'medium',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large',
                1 => 'large',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large',
                1 => 'extra-large',
              ),
            ),
            'default' => '',
          ),
        ),
        'bullets_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.2',
                1 => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'colPos' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'GridElementsTeam\\Gridelements\\Backend\\ItemsProcFuncs\\ColPosList->itemsProcFunc',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.0',
                1 => '1',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.normal',
                1 => '0',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.3',
                1 => '3',
              ),
            ),
            'default' => 0,
          ),
          'onChange' => 'reload',
        ),
        'date' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
          ),
        ),
        'header' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
          ),
        ),
        'header_layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.3',
                1 => '3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.4',
                1 => '4',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.5',
                1 => '5',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.6',
                1 => '100',
              ),
            ),
            'default' => 0,
          ),
        ),
        'header_position' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.1',
                1 => 'center',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.2',
                1 => 'right',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.3',
                1 => 'left',
              ),
            ),
            'default' => '',
          ),
        ),
        'header_link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'max' => 1024,
            'eval' => 'trim',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                ),
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'rowDescription' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
          ),
        ),
        'subheader' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.subheader',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'softref' => 'email[subst]',
          ),
        ),
        'bodytext' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,images,email[subst],url',
            'search' => 
            array (
              'andWhere' => '`CType`=\'text\' OR `CType`=\'textpic\' OR `CType`=\'textmedia\'',
            ),
          ),
        ),
        'image' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.images',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette;audioOverlayPalette,
                                --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette;videoOverlayPalette,
                                --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
          ),
        ),
        'assets' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'assets',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette;audioOverlayPalette,
                                --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette;videoOverlayPalette,
                                --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references.addFileReference',
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
          ),
        ),
        'imagewidth' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagewidth',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'max' => 4,
            'eval' => 'int',
            'range' => 
            array (
              'upper' => 1999,
              'lower' => 0,
            ),
            'default' => 0,
          ),
        ),
        'imageheight' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageheight',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'max' => 4,
            'eval' => 'int',
            'range' => 
            array (
              'upper' => 1999,
              'lower' => 0,
            ),
            'default' => 0,
          ),
        ),
        'imageorient' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.0',
                1 => 0,
                2 => 'content-beside-text-img-above-center',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.1',
                1 => 1,
                2 => 'content-beside-text-img-above-right',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.2',
                1 => 2,
                2 => 'content-beside-text-img-above-left',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.3',
                1 => 8,
                2 => 'content-beside-text-img-below-center',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.4',
                1 => 9,
                2 => 'content-beside-text-img-below-right',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.5',
                1 => 10,
                2 => 'content-beside-text-img-below-left',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.6',
                1 => 17,
                2 => 'content-inside-text-img-right',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.7',
                1 => 18,
                2 => 'content-inside-text-img-left',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.8',
                1 => '--div--',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.9',
                1 => 25,
                2 => 'content-beside-text-img-right',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.10',
                1 => 26,
                2 => 'content-beside-text-img-left',
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'imageborder' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageborder',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'image_zoom' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:image_zoom',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'imagecols' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagecols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '1',
                1 => 1,
              ),
              1 => 
              array (
                0 => '2',
                1 => 2,
              ),
              2 => 
              array (
                0 => '3',
                1 => 3,
              ),
              3 => 
              array (
                0 => '4',
                1 => 4,
              ),
              4 => 
              array (
                0 => '5',
                1 => 5,
              ),
              5 => 
              array (
                0 => '6',
                1 => 6,
              ),
              6 => 
              array (
                0 => '7',
                1 => 7,
              ),
              7 => 
              array (
                0 => '8',
                1 => 8,
              ),
            ),
            'default' => 2,
          ),
        ),
        'cols' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:cols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:cols.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => '1',
                1 => '1',
              ),
              2 => 
              array (
                0 => '2',
                1 => '2',
              ),
              3 => 
              array (
                0 => '3',
                1 => '3',
              ),
              4 => 
              array (
                0 => '4',
                1 => '4',
              ),
              5 => 
              array (
                0 => '5',
                1 => '5',
              ),
              6 => 
              array (
                0 => '6',
                1 => '6',
              ),
              7 => 
              array (
                0 => '7',
                1 => '7',
              ),
              8 => 
              array (
                0 => '8',
                1 => '8',
              ),
              9 => 
              array (
                0 => '9',
                1 => '9',
              ),
            ),
            'default' => 0,
          ),
        ),
        'pages' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.startingpoint',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 50,
            'minitems' => 0,
          ),
        ),
        'recursive' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.recursive',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.3',
                1 => '3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.4',
                1 => '4',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.5',
                1 => '250',
              ),
            ),
            'default' => 0,
          ),
        ),
        'list_type' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:list_type',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                2 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:pi1_title',
                1 => 'news_pi1',
                2 => 'EXT:news/ext_icon.gif',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:plugin.title',
                1 => 'koningbootstrapcarousel_show',
                2 => 'EXT:koning_bootstrap_carousel/ext_icon.png',
              ),
            ),
            'itemsProcFunc' => 'GridElementsTeam\\Gridelements\\Backend\\ItemsProcFuncs\\ListTypeList->itemsProcFunc',
            'default' => '',
            'authMode' => 'explicitAllow',
            'authMode_enforce' => 'strict',
          ),
        ),
        'file_collections' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:file_collections',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'localizeReferencesAtParentLocalization' => true,
            'allowed' => 'sys_file_collection',
            'foreign_table' => 'sys_file_collection',
            'minitems' => 0,
            'size' => 5,
          ),
        ),
        'media' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference',
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
          ),
        ),
        'filelink_size' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_size',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'filelink_sorting' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.none',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.extension',
                1 => 'extension',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.name',
                1 => 'name',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.type',
                1 => 'type',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.size',
                1 => 'size',
              ),
            ),
          ),
        ),
        'target' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target.I.1',
                  1 => '_blank',
                ),
              ),
            ),
            'default' => '',
          ),
        ),
        'records' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tt_content,tx_news_domain_model_news,pages',
            'size' => 5,
            'maxitems' => 200,
            'minitems' => 0,
          ),
        ),
        'sectionIndex' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sectionIndex',
          'config' => 
          array (
            'type' => 'check',
            'default' => 1,
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'linkToTop' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:linkToTop',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'pi_flexform' => 
        array (
          'l10n_display' => 'hideDiff',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pi_flexform',
          'config' => 
          array (
            'type' => 'flex',
            'ds_pointerField' => 'list_type,CType',
            'ds' => 
            array (
              'default' => '
                        <T3DataStructure>
                          <ROOT>
                            <type>array</type>
                            <el>
                                <!-- Repeat an element like "xmlTitle" beneath for as many elements you like. Remember to name them uniquely  -->
                              <xmlTitle>
                                <TCEforms>
                                    <label>The Title:</label>
                                    <config>
                                        <type>input</type>
                                        <size>48</size>
                                    </config>
                                </TCEforms>
                              </xmlTitle>
                            </el>
                          </ROOT>
                        </T3DataStructure>
                    ',
              '*,login' => 'FILE:EXT:felogin/Configuration/FlexForms/Login.xml',
              '*,form_formframework' => 'FILE:EXT:form/Configuration/FlexForms/FormFramework.xml',
              'news_pi1,list' => 'FILE:EXT:news/Configuration/FlexForms/flexform_news.xml',
              '*,gridelements_pi1' => '',
              ',dce_dceuid2' => '<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets></sheets></T3DataStructure>
',
              ',dce_dceuid1' => '<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet.tabGeneral><ROOT><TCEforms><sheetTitle><![CDATA[LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab]]></sheetTitle></TCEforms><type>array</type><el><settings.title><TCEforms><label><![CDATA[title]]></label><config><type>input</type><size>30</size><eval>trim,required</eval></config></TCEforms></settings.title><settings.content><TCEforms><label><![CDATA[content]]></label><config><type>text</type><rows>5</rows><cols>30</cols><eval>trim,required</eval></config></TCEforms></settings.content><settings.chart><TCEforms><label><![CDATA[Chart]]></label><config><type>input</type><size>30</size><eval>trim,required</eval></config></TCEforms></settings.chart><settings.t><TCEforms><label><![CDATA[t]]></label><config><type>group</type><internal_type>db</internal_type><allowed>pages</allowed><size>5</size><minitems>0</minitems><maxitems>999</maxitems><show_thumbs>1</show_thumbs><!-- This enables the access on properties/attributes of given table/object example: {field.yourvariable.title} --><dce_load_schema>1</dce_load_schema><!-- If enabled, will automatically translate pages or records if translation exists. --><dce_enable_autotranslation>1</dce_enable_autotranslation></config></TCEforms></settings.t></el></ROOT></sheet.tabGeneral></sheets></T3DataStructure>
',
              'koningbootstrapcarousel_show,list' => 'FILE:EXT:koning_bootstrap_carousel/Configuration/FlexForm/Show.xml',
            ),
            'search' => 
            array (
              'andWhere' => '`CType`=\'list\'',
            ),
          ),
        ),
        'accessibility_title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'accessibility_bypass' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_bypass',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'accessibility_bypass_text' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_bypass_text',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'l18n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'selected_categories' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:selected_categories',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => 'AND sys_category.sys_language_uid IN (0,-1) ORDER BY sys_category.title ASC',
            'size' => 20,
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
              ),
            ),
          ),
        ),
        'category_field' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:category_field',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Category\\CategoryRegistry->getCategoryFieldsForTable',
            'itemsProcConfig' => 
            array (
              'table' => 'tt_content',
            ),
          ),
        ),
        'table_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.default',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.striped',
                1 => 'striped',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.bordered',
                1 => 'bordered',
              ),
            ),
            'default' => '',
          ),
        ),
        'table_caption' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_caption',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'table_delimiter' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.124',
                1 => 124,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.59',
                1 => 59,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.44',
                1 => 44,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.58',
                1 => 58,
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.9',
                1 => 9,
              ),
            ),
            'default' => 124,
          ),
        ),
        'table_enclosure' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.39',
                1 => 39,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.34',
                1 => 34,
              ),
            ),
            'default' => 0,
          ),
        ),
        'table_header_position' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.2',
                1 => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'table_tfoot' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_tfoot',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
                1 => 1,
              ),
            ),
          ),
        ),
        'uploads_description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_description',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
                1 => 1,
              ),
            ),
          ),
        ),
        'uploads_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.2',
                1 => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'categories' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1, 0) ORDER BY sys_category.sorting ASC',
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'tt_content',
              'fieldname' => 'categories',
            ),
            'size' => 20,
            'maxitems' => 9999,
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
                'maxLevels' => 99,
              ),
            ),
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_gridelements_backend_layout' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tt_content.tx_gridelements_backend_layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'GridElementsTeam\\Gridelements\\Backend\\TtContent->layoutItemsProcFunc',
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
          'onChange' => 'reload',
        ),
        'tx_gridelements_children' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tt_content.tx_gridelements_children',
          'config' => 
          array (
            'type' => 'inline',
            'appearance' => 
            array (
              'levelLinksPosition' => 'top',
              'showPossibleLocalizationRecords' => true,
              'showRemovedLocalizationRecords' => true,
              'showAllLocalizationLink' => true,
              'showSynchronizationLink' => true,
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => false,
                'sort' => false,
                'hide' => true,
                'delete' => true,
                'localize' => true,
              ),
            ),
            'inline' => 
            array (
              'inlineNewButtonStyle' => 'display: inline-block;',
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
            'foreign_table' => 'tt_content',
            'foreign_field' => 'tx_gridelements_container',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'colPos' => 
                array (
                  'config' => 
                  array (
                    'default' => -1,
                  ),
                ),
              ),
            ),
            'foreign_sortby' => 'sorting',
            'size' => 5,
            'autoSizeMax' => 20,
          ),
        ),
        'tx_gridelements_container' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tt_content.tx_gridelements_container',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'default' => 0,
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND (tt_content.sys_language_uid = ###REC_FIELD_sys_language_uid### OR tt_content.sys_language_uid = -1) AND tt_content.pid=###CURRENT_PID### AND tt_content.CType=\'gridelements_pi1\' AND (tt_content.uid != ###THIS_UID###) AND (tt_content.tx_gridelements_container != ###THIS_UID### OR tt_content.tx_gridelements_container=0) ORDER BY tt_content.header, tt_content.uid',
            'dontRemapTablesOnCopy' => 'tt_content',
            'itemsProcFunc' => 'GridElementsTeam\\Gridelements\\Backend\\TtContent->containerItemsProcFunc',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
          'onChange' => 'reload',
        ),
        'tx_gridelements_columns' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tt_content.tx_gridelements_columns',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'GridElementsTeam\\Gridelements\\Backend\\TtContent->columnsItemsProcFunc',
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
          'onChange' => 'reload',
        ),
        'tx_dce_dce' => 
        array (
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tt_content.tx_dce_dce',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_dce_index' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_dce_new_container' => 
        array (
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tt_content.tx_dce_new_container',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'chart321' => 
        array (
          'label' => '',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_df_contentslide_contentslide' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_activate',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_activate',
              ),
            ),
          ),
          'onChange' => 'reload',
        ),
        'tx_df_contentslide_options' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_options',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_options.withAjax',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_options.expanded',
              ),
            ),
          ),
          'displayCond' => 'FIELD:tx_df_contentslide_contentslide:REQ:TRUE',
        ),
        'tx_df_contentslide_layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_layout',
          'config' => 
          array (
            'type' => 'select',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_layout.layout1',
                1 => 'layout1',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_layout.layout2',
                1 => 'layout2',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_layout.layout3',
                1 => 'layout3',
              ),
            ),
            'renderType' => 'selectSingle',
          ),
          'displayCond' => 'FIELD:tx_df_contentslide_contentslide:REQ:TRUE',
        ),
        'tx_df_contentslide_animation' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_animation',
          'config' => 
          array (
            'type' => 'select',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_animation.slideDownwards',
                1 => 'slideDownwards',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_animation.slideUpwards',
                1 => 'slideUpwards',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_animation.fade',
                1 => 'fade',
              ),
            ),
            'renderType' => 'selectSingle',
          ),
          'displayCond' => 'FIELD:tx_df_contentslide_contentslide:REQ:TRUE',
        ),
        'tx_df_contentslide_header' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_useCustomHeader',
          'config' => 
          array (
            'type' => 'input',
          ),
          'displayCond' => 'FIELD:tx_df_contentslide_contentslide:REQ:TRUE',
        ),
        'koningbootstrapcarousel_slides' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tt_content.koningbootstrapcarousel_slides',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_koningbootstrapcarousel_domain_model_slide',
            'foreign_field' => 'content_id',
            'foreign_sortby' => 'sorting',
            'maxitems' => '9999',
            'appearance' => 
            array (
              'collapseAll' => true,
              'expandSingle' => true,
              'useSortable' => true,
              'enabledControls' => true,
              'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:media.addFileReference',
              'newRecordLinkAddTitle' => true,
              'levelLinksPosition' => 'top',
              'showSynchronizationLink' => false,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'showRemovedLocalizationRecords' => true,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'tx_spreadsheets_assets' => 
        array (
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'tx_spreadsheets_assets',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'xls,xlsx,ods,xml,csv,html',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '--palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'xls,xlsx,ods,xml,csv,html',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references.addFileReference',
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
          ),
        ),
        'tx_spreadsheets_ignore_styles' => 
        array (
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:spreadsheets/Resources/Private/Language/locallang.xlf:tca.tx_spreadsheets_ignore_styles.label',
                1 => '',
              ),
            ),
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'CType,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'bullets' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,bullets_type,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.bulletlist_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'wrap' => 'off',
              ),
            ),
          ),
        ),
        'div' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'header' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'text' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
              ),
            ),
          ),
        ),
        'textpic' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,image,--palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments;mediaAdjustments,--palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.gallerySettings;gallerySettings,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks;imagelinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
              ),
            ),
          ),
        ),
        'textmedia' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,assets,--palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments;mediaAdjustments,--palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.gallerySettings;gallerySettings,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks;imagelinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
              ),
            ),
          ),
        ),
        'image' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,image,--palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments;mediaAdjustments,--palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.gallerySettings;gallerySettings,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks;imagelinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'html' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.html_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'renderType' => 't3editor',
                'wrap' => 'off',
                'format' => 'html',
              ),
            ),
          ),
        ),
        'list' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,list_type;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:list_type_formlabel,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.list_formlabel,recursive,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
          'subtype_value_field' => 'list_type',
          'subtypes_excludelist' => 
          array (
            'news_pi1' => 'recursive,select_key,pages',
            'koningbootstrapcarousel_show' => 'layout, select_key, pages',
          ),
          'subtypes_addlist' => 
          array (
            'news_pi1' => 'pi_flexform',
            'dce_dceuid2' => 'pi_flexform',
            'dce_dceuid1' => 'pi_flexform',
            'koningbootstrapcarousel_show' => 'pi_flexform, koningbootstrapcarousel_slides',
          ),
        ),
        'menu_categorized_pages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,selected_categories,category_field,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
          'columnsOverrides' => 
          array (
            'selected_categories' => 
            array (
              'config' => 
              array (
                'minitems' => 1,
              ),
            ),
            'category_field' => 
            array (
              'config' => 
              array (
                'itemsProcConfig' => 
                array (
                  'table' => 'pages',
                ),
              ),
            ),
          ),
        ),
        'menu_categorized_content' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,selected_categories,category_field,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
          'columnsOverrides' => 
          array (
            'selected_categories' => 
            array (
              'config' => 
              array (
                'minitems' => 1,
              ),
            ),
            'category_field' => 
            array (
              'config' => 
              array (
                'itemsProcConfig' => 
                array (
                  'table' => 'tt_content',
                ),
              ),
            ),
          ),
        ),
        'menu_pages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'menu_subpages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'menu_sitemap' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'menu_section' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'menu_abstract' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'menu_recently_updated' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'menu_related_pages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'menu_section_pages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'menu_sitemap_pages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'shortcut' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.shortcut_formlabel,records;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records_formlabel, recursive,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'table' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.table.bodytext,--palette--;;tableconfiguration,table_caption,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.table_layout;tablelayout,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'renderType' => 'textTable',
                'wrap' => 'off',
              ),
            ),
          ),
        ),
        'uploads' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media;uploads,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.uploads_layout;uploadslayout,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'login' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pi_flexform,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'form_formframework' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,pi_flexform,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'gridelements_pi1' => 
        array (
          'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header,tx_gridelements_backend_layout,pi_flexform,tx_gridelements_children,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,media,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'dce_dceuid2' => 
        array (
          'showitem' => '--palette--;;dce_palette_2_head,--palette--;;dce_palette_2,pi_flexform,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'dce_dceuid1' => 
        array (
          'showitem' => '--palette--;;dce_palette_1_head,--palette--;;dce_palette_1,pi_flexform,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended,--palette--;LLL:EXT:df_contentslide/Resources/Private/Languages/locallang_db.xlf:tt_content.tx_df_contentslide_contentslide;df_contentslide, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'spreadsheets_table' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,tx_spreadsheets_assets;LLL:EXT:spreadsheets/Resources/Private/Language/locallang.xlf:tca.assets,bodytext;LLL:EXT:spreadsheets/Resources/Private/Language/locallang.xlf:tca.bodytext,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.table_layout;tableSpreadsheatLayout,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'renderType' => 'spreadsheetInput',
                'uploadField' => 'tx_spreadsheets_assets',
                'sheetsOnly' => true,
                'size' => 50,
              ),
            ),
            'table_class' => 
            array (
              'displayCond' => 'FIELD:tx_spreadsheets_ignore_styles:>:0',
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        'general' => 
        array (
          'showitem' => '
                CType;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType_formlabel,
                colPos;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos_formlabel,
            ',
        ),
        'header' => 
        array (
          'showitem' => '
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
                --linebreak--,
                header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
                header_position;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position_formlabel,
                date;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date_formlabel,
                --linebreak--,
                header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel
            ',
        ),
        'headers' => 
        array (
          'showitem' => '
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
                --linebreak--,
                header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
                header_position;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position_formlabel,
                date;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date_formlabel,
                --linebreak--,
                header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel,
                --linebreak--,
                subheader;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:subheader_formlabel
            ',
        ),
        'gallerySettings' => 
        array (
          'showitem' => '
                imageorient;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient_formlabel,
                imagecols;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagecols_formlabel
            ',
        ),
        'mediaAdjustments' => 
        array (
          'showitem' => '
                imagewidth;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imagewidth,
                imageheight;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imageheight,
                imageborder;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imageborder
            ',
        ),
        'imagelinks' => 
        array (
          'showitem' => '
                image_zoom;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:image_zoom_formlabel
            ',
        ),
        'uploads' => 
        array (
          'showitem' => '
                media;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.ALT.uploads_formlabel,
                --linebreak--,
                file_collections;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:file_collections.ALT.uploads_formlabel,
                --linebreak--,
                filelink_sorting,
                target
            ',
        ),
        'menu_accessibility' => 
        array (
          'showitem' => '
                accessibility_title;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_title_formlabel,
                --linebreak--,
                accessibility_bypass;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_bypass_formlabel,
                accessibility_bypass_text;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_bypass_text_formlabel
            ',
        ),
        'hidden' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.default.hidden
            ',
        ),
        'language' => 
        array (
          'showitem' => '
                sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l18n_parent
            ',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                --linebreak--,
                fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
                --linebreak--,editlock
            ',
        ),
        'uploadslayout' => 
        array (
          'showitem' => '
                filelink_size;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_size_formlabel,
                uploads_description,
                uploads_type
            ',
        ),
        'appearanceLinks' => 
        array (
          'showitem' => '
                sectionIndex;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sectionIndex_formlabel,
                linkToTop;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:linkToTop_formlabel
            ',
        ),
        'frames' => 
        array (
          'showitem' => '
                layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout_formlabel,
                frame_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class_formlabel,
                space_before_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_before_class_formlabel,
                space_after_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_after_class_formlabel,
            ',
        ),
        'tableconfiguration' => 
        array (
          'showitem' => '
                table_delimiter,
                table_enclosure
            ',
        ),
        'tablelayout' => 
        array (
          'showitem' => '
                cols,
                table_class,
                table_header_position,
                table_tfoot
            ',
        ),
        'dce_palette_2_head' => 
        array (
          'canNotCollapse' => true,
          'showitem' => 'CType',
        ),
        'dce_palette_2' => 
        array (
          'canNotCollapse' => true,
          'showitem' => 'sys_language_uid, l18n_parent, colPos, hidden,tx_gridelements_container,tx_gridelements_columns',
        ),
        'dce_palette_1_head' => 
        array (
          'canNotCollapse' => true,
          'showitem' => 'CType',
        ),
        'dce_palette_1' => 
        array (
          'canNotCollapse' => true,
          'showitem' => 'sys_language_uid, l18n_parent, colPos,tx_gridelements_container,tx_gridelements_columns',
        ),
        'df_contentslide' => 
        array (
          'showitem' => 'tx_df_contentslide_contentslide, tx_df_contentslide_options,tx_df_contentslide_layout, tx_df_contentslide_animation',
          'canNotCollapse' => 1,
        ),
        'tableSpreadsheatLayout' => 
        array (
          'showitem' => 'tx_spreadsheets_ignore_styles;LLL:EXT:spreadsheets/Resources/Private/Language/locallang.xlf:tca.tx_spreadsheets_ignore_styles, table_class',
        ),
      ),
    ),
    'tx_extensionmanager_domain_model_extension' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension',
        'label' => 'uid',
        'default_sortby' => '',
        'hideTable' => true,
        'rootLevel' => true,
        'adminOnly' => true,
        'typeicon_classes' => 
        array (
          'default' => 'empty-icon',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'extension_key,version,integer_version,title,description,state,category,last_updated,update_comment,author_name,author_email,md5hash,serialized_dependencies',
      ),
      'columns' => 
      array (
        'extension_key' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.extensionkey',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.version',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'alldownloadcounter' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'integer_version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.integerversion',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'state' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.state',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'range' => 
            array (
              'lower' => 0,
              'upper' => 1000,
            ),
            'eval' => 'int',
          ),
        ),
        'category' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.category',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'range' => 
            array (
              'lower' => 0,
              'upper' => 1000,
            ),
            'eval' => 'int',
          ),
        ),
        'last_updated' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.lastupdated',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
          ),
        ),
        'update_comment' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.updatecomment',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'author_name' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.authorname',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'author_email' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.authoremail',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'current_version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.currentversion',
          'config' => 
          array (
            'type' => 'check',
            'size' => 1,
          ),
        ),
        'review_state' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.reviewstate',
          'config' => 
          array (
            'type' => 'check',
            'size' => 1,
          ),
        ),
        'md5hash' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.md5hash',
          'config' => 
          array (
            'type' => 'input',
            'size' => 1,
          ),
        ),
        'serialized_dependencies' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.serializedDependencies',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'extensionkey, version, integer_version, title, description, state, category, last_updated, update_comment, author_name, author_email, review_state, md5hash, serialized_dependencies',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
      ),
    ),
    'tx_extensionmanager_domain_model_repository' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_repository',
        'label' => 'uid',
        'default_sortby' => '',
        'hideTable' => true,
        'rootLevel' => true,
        'adminOnly' => true,
        'typeicon_classes' => 
        array (
          'default' => 'empty-icon',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,description,wsdl_url_mirror_list_url,last_update,extension_count',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_repository.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_repository.description',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'wsdl_url' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_repository.wsdlUrl',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'mirror_list_url' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_repository.mirrorListUrl',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
          ),
        ),
        'last_update' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_repository.lastUpdate',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'extension_count' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_repository.extensionCount',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'title, description, wsdl_url, mirror_list_url, last_update, extension_count',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
      ),
    ),
    'sys_note' => 
    array (
      'ctrl' => 
      array (
        'label' => 'subject',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser',
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'delete' => 'deleted',
        'title' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_note',
        ),
        'sortby' => 'sorting',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'category,subject,message,personal',
      ),
      'columns' => 
      array (
        'category' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.category',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '0',
                2 => 'sysnote-type-0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.1',
                1 => '1',
                2 => 'sysnote-type-1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.3',
                1 => '3',
                2 => 'sysnote-type-3',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.4',
                1 => '4',
                2 => 'sysnote-type-4',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.2',
                1 => '2',
                2 => 'sysnote-type-2',
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'subject' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.subject',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
          ),
        ),
        'message' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.message',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => '15',
          ),
        ),
        'personal' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.personal',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,category,subject,message,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,personal,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'tx_news_domain_model_link' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_link',
        'descriptionColumn' => 'description',
        'label' => 'title',
        'label_alt' => 'uri',
        'label_alt_force' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'default_sortby' => 'ORDER BY sorting',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'ext-news-link',
        ),
        'hideTable' => true,
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,title,description,uri',
      ),
      'columns' => 
      array (
        'pid' => 
        array (
          'label' => 'pid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
                2 => 'flags-multiple',
              ),
            ),
            'default' => 0,
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_news_domain_model_link',
            'foreign_table_where' => 'AND tx_news_domain_model_link.pid=###CURRENT_PID### AND tx_news_domain_model_link.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_link.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_link.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'uri' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_link.uri',
          'config' => 
          array (
            'type' => 'input',
            'placeholder' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_link.uri.placeholder',
            'size' => 30,
            'eval' => 'trim,required',
            'softref' => 'typolink',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'renderType' => 'inputLink',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'Link',
                  'windowOpenParameters' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
                ),
              ),
            ),
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'uri,--palette--;;paletteCore,title,--palette--;;paletteDescription',
        ),
      ),
      'palettes' => 
      array (
        'paletteCore' => 
        array (
          'showitem' => 'hidden,sys_language_uid,l10n_parent, l10n_diffsource,',
        ),
        'paletteDescription' => 
        array (
          'showitem' => 'description',
        ),
      ),
    ),
    'tx_news_domain_model_news' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news',
        'descriptionColumn' => 'notes',
        'label' => 'title',
        'prependAtCopy' => 'LLL:EXT:lang/locallang_general.xlf:LGL.prependAtCopy',
        'hideAtCopy' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'editlock' => 'editlock',
        'type' => 'type',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          'default' => 'ext-news-type-default',
          1 => 'ext-news-type-internal',
          2 => 'ext-news-type-external',
        ),
        'useColumnsForDefaultValues' => 'type',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'ORDER BY datetime DESC',
        'sortby' => '',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'iconfile' => 'EXT:news/Resources/Public/Icons/news_domain_model_news.svg',
        'searchFields' => 'uid,title',
        'thumbnail' => 'fal_media',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'cruser_id,pid,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime,fe_group,title,teaser,bodytext,datetime,archive,author,author_email,categories,related,type,keywords,media,internalurl,externalurl,istopnews,related_files,related_links,content_elements,tags,path_segment,alternative_title,fal_related_files',
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
                2 => 'flags-multiple',
              ),
            ),
            'default' => 0,
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_news_domain_model_news',
            'foreign_table_where' => 'AND tx_news_domain_model_news.pid=###CURRENT_PID### AND tx_news_domain_model_news.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'cruser_id' => 
        array (
          'label' => 'cruser_id',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'pid' => 
        array (
          'label' => 'pid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'sorting' => 
        array (
          'label' => 'sorting',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 16,
            'eval' => 'datetime',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'renderType' => 'inputDateTime',
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 16,
            'eval' => 'datetime',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'renderType' => 'inputDateTime',
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'ORDER BY fe_groups.title',
          ),
        ),
        'title' => 
        array (
          'exclude' => false,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 60,
            'eval' => 'required',
          ),
        ),
        'alternative_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.alternative_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'teaser' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.teaser',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 60,
            'rows' => 5,
          ),
        ),
        'bodytext' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
            'softref' => 'rtehtmlarea_images,typolink_tag,images,email[subst],url',
          ),
        ),
        'datetime' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.datetime',
          'config' => 
          array (
            'type' => 'input',
            'size' => 16,
            'eval' => 'datetime,required',
            'renderType' => 'inputDateTime',
          ),
        ),
        'archive' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'copy',
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.archive',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'date',
            'default' => 0,
            'renderType' => 'inputDateTime',
          ),
        ),
        'author' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_formlabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'author_email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_email_formlabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'categories' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.categories',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'treeConfig' => 
            array (
              'dataProvider' => 'GeorgRinger\\News\\TreeProvider\\DatabaseTreeDataProvider',
              'parentField' => 'parent',
              'appearance' => 
              array (
                'showHeader' => true,
                'expandAll' => true,
                'maxLevels' => 99,
              ),
            ),
            'MM' => 'sys_category_record_mm',
            'MM_match_fields' => 
            array (
              'fieldname' => 'categories',
              'tablenames' => 'tx_news_domain_model_news',
            ),
            'MM_opposite_field' => 'items',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent = 0) ORDER BY sys_category.sorting',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 99,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'related' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.related',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tx_news_domain_model_news',
            'foreign_table' => 'tx_news_domain_model_news',
            'MM_opposite_field' => 'related_from',
            'size' => 5,
            'minitems' => 0,
            'maxitems' => 100,
            'MM' => 'tx_news_domain_model_news_related_mm',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'searchWholePhrase' => true,
                'addWhere' => ' AND tx_news_domain_model_news.uid != ###THIS_UID###',
              ),
            ),
          ),
        ),
        'related_from' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.related_from',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'foreign_table' => 'tx_news_domain_model_news',
            'allowed' => 'tx_news_domain_model_news',
            'size' => 5,
            'maxitems' => 100,
            'MM' => 'tx_news_domain_model_news_related_mm',
            'readOnly' => 1,
          ),
        ),
        'related_links' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.related_links',
          'config' => 
          array (
            'type' => 'inline',
            'allowed' => 'tx_news_domain_model_link',
            'foreign_table' => 'tx_news_domain_model_link',
            'foreign_sortby' => 'sorting',
            'foreign_field' => 'parent',
            'size' => 5,
            'minitems' => 0,
            'maxitems' => 100,
            'appearance' => 
            array (
              'collapseAll' => true,
              'expandSingle' => true,
              'levelLinksPosition' => 'bottom',
              'useSortable' => true,
              'showPossibleLocalizationRecords' => true,
              'showRemovedLocalizationRecords' => true,
              'showAllLocalizationLink' => true,
              'showSynchronizationLink' => true,
              'enabledControls' => 
              array (
                'info' => false,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'type' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype_formlabel',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.type.I.0',
                1 => 0,
                2 => 'ext-news-type-default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.type.I.1',
                1 => 1,
                2 => 'ext-news-type-internal',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.type.I.2',
                1 => 2,
                2 => 'ext-news-type-external',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'keywords' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.keywords',
          'config' => 
          array (
            'type' => 'text',
            'placeholder' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.keywords.placeholder',
            'cols' => 30,
            'rows' => 5,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.description_formlabel',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'internalurl' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.type.I.1',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'eval' => 'trim,required',
            'softref' => 'typolink',
            'renderType' => 'inputLink',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                  'windowOpenParameters' => 'height=600,width=800,status=0,menubar=0,scrollbars=1',
                ),
              ),
            ),
          ),
        ),
        'externalurl' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.8',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'required',
            'softref' => 'typolink',
          ),
        ),
        'istopnews' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.istopnews',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'editlock' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'content_elements' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.content_elements',
          'config' => 
          array (
            'type' => 'inline',
            'allowed' => 'tt_content',
            'foreign_table' => 'tt_content',
            'foreign_sortby' => 'sorting',
            'foreign_field' => 'tx_news_related_news',
            'minitems' => 0,
            'maxitems' => 99,
            'appearance' => 
            array (
              'useXclassedVersion' => true,
              'collapseAll' => true,
              'expandSingle' => true,
              'levelLinksPosition' => 'bottom',
              'useSortable' => true,
              'showPossibleLocalizationRecords' => true,
              'showRemovedLocalizationRecords' => true,
              'showAllLocalizationLink' => true,
              'showSynchronizationLink' => true,
              'enabledControls' => 
              array (
                'info' => false,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'tags' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tags',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tx_news_domain_model_tag',
            'MM' => 'tx_news_domain_model_news_tag_mm',
            'foreign_table' => 'tx_news_domain_model_tag',
            'foreign_table_where' => 'ORDER BY tx_news_domain_model_tag.title',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 99,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tags.edit',
                  'windowOpenParameters' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tags.list',
                  'table' => 'tx_news_domain_model_tag',
                  'pid' => 1,
                ),
              ),
            ),
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'searchWholePhrase' => true,
                'receiverClass' => 'GeorgRinger\\News\\Hooks\\SuggestReceiver',
              ),
            ),
          ),
        ),
        'path_segment' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.path_segment',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'nospace,alphanum_x,lower,unique',
          ),
        ),
        'import_id' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.import_id',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'import_source' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.import_source',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'fal_media' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.fal_media',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'fal_media',
              'tablenames' => 'tx_news_domain_model_news',
              'table_local' => 'sys_file',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
						--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
						--palette--;;imageoverlayPalette,
						--palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
						--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
						--palette--;;imageoverlayPalette,
						--palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
						--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
						--palette--;;imageoverlayPalette,
						--palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
						--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
						--palette--;;imageoverlayPalette,
						--palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
						--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
						--palette--;;imageoverlayPalette,
						--palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
						--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
						--palette--;;imageoverlayPalette,
						--palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.fal_media.add',
              'showPossibleLocalizationRecords' => true,
              'showRemovedLocalizationRecords' => true,
              'showAllLocalizationLink' => true,
              'showSynchronizationLink' => true,
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'fal_related_files' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.fal_related_files',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'fal_related_files',
              'tablenames' => 'tx_news_domain_model_news',
              'table_local' => 'sys_file',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.fal_related_files.add',
              'showPossibleLocalizationRecords' => true,
              'showRemovedLocalizationRecords' => true,
              'showAllLocalizationLink' => true,
              'showSynchronizationLink' => true,
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
              'allowLanguageSynchronization' => true,
            ),
            'inline' => 
            array (
              'inlineOnlineMediaAddButtonStyle' => 'display:none',
            ),
          ),
        ),
        'notes' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 10,
            'cols' => 48,
          ),
        ),
        'is_event' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:eventnews/Resources/Private/Language/locallang_db.xlf:tx_eventnews_domain_model_news.is_event',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
          'onChange' => 'reload',
        ),
        'full_day' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:is_event:>:0',
          'label' => 'LLL:EXT:eventnews/Resources/Private/Language/locallang_db.xlf:tx_eventnews_domain_model_news.full_day',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'event_end' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:is_event:>:0',
          'label' => 'LLL:EXT:eventnews/Resources/Private/Language/locallang_db.xlf:tx_eventnews_domain_model_news.event_end',
          'config' => 
          array (
            'type' => 'input',
            'size' => 12,
            'eval' => 'datetime',
            'checkbox' => 0,
            'renderType' => 'inputDateTime',
          ),
        ),
        'organizer' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:is_event:>:0',
          'label' => 'LLL:EXT:eventnews/Resources/Private/Language/locallang_db.xlf:tx_eventnews_domain_model_organizer',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_eventnews_domain_model_organizer',
            'foreign_table_where' => 'ORDER BY tx_eventnews_domain_model_organizer.title',
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'location' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:is_event:>:0',
          'label' => 'LLL:EXT:eventnews/Resources/Private/Language/locallang_db.xlf:tx_eventnews_domain_model_location',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_eventnews_domain_model_location',
            'foreign_table_where' => 'ORDER BY tx_eventnews_domain_model_location.title',
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'organizer_simple' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:is_event:>:0',
          'label' => 'LLL:EXT:eventnews/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.organizer_simple',
          'config' => 
          array (
            'type' => 'input',
            'size' => 15,
          ),
        ),
        'location_simple' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:is_event:>:0',
          'label' => 'LLL:EXT:eventnews/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.location_simple',
          'config' => 
          array (
            'type' => 'input',
            'size' => 15,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => 
                array (
                  'fullScreenRichtext' => 
                  array (
                    'disabled' => false,
                    'options' => 
                    array (
                      'title' => 'Full screen Rich Text Editing',
                    ),
                  ),
                ),
              ),
            ),
            'teaser' => 
            array (
            ),
          ),
          'showitem' => 'l10n_parent,l10n_diffsource,title,is_event,--palette--;;palette_event,--palette--;;paletteCore,teaser,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;paletteAuthor,--palette--;;paletteDate,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:rte_enabled_formlabel,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.content_elements,content_elements,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;paletteAccess,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.options,categories,tags,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tabs.relations,fal_media,fal_related_files,related_links,related,related_from,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags;metatags,--palette--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.palettes.alternativeTitles;alternativeTitles,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes,notes,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.extended',
        ),
        1 => 
        array (
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => 
                array (
                  'fullScreenRichtext' => 
                  array (
                    'disabled' => false,
                    'options' => 
                    array (
                      'title' => 'Full screen Rich Text Editing',
                    ),
                  ),
                ),
              ),
            ),
            'teaser' => 
            array (
            ),
          ),
          'showitem' => 'l10n_parent,l10n_diffsource,title,is_event,--palette--;;palette_event,--palette--;;paletteCore,teaser,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;paletteAuthor,--palette--;;paletteDate,internalurl,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;paletteAccess,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.options,categories,tags,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tabs.relations,fal_media,fal_related_files,related_links,related,related_from,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags;metatags,--palette--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.palettes.alternativeTitles;alternativeTitles,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.extended',
        ),
        2 => 
        array (
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => 
                array (
                  'fullScreenRichtext' => 
                  array (
                    'disabled' => false,
                    'options' => 
                    array (
                      'title' => 'Full screen Rich Text Editing',
                    ),
                  ),
                ),
              ),
            ),
            'teaser' => 
            array (
            ),
          ),
          'showitem' => 'l10n_parent,l10n_diffsource,title,is_event,--palette--;;palette_event,--palette--;;paletteCore,teaser,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;paletteAuthor,--palette--;;paletteDate,externalurl,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;paletteAccess,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.options,categories,tags,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tabs.relations,fal_media,fal_related_files,related_links,related,related_from,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags;metatags,--palette--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.palettes.alternativeTitles;alternativeTitles,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.extended',
        ),
      ),
      'palettes' => 
      array (
        'paletteAuthor' => 
        array (
          'showitem' => 'author,author_email,',
        ),
        'paletteDate' => 
        array (
          'showitem' => 'datetime,archive,',
        ),
        'paletteCore' => 
        array (
          'showitem' => 'istopnews, type, sys_language_uid, hidden,',
        ),
        'paletteAccess' => 
        array (
          'showitem' => 'starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
					endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
					--linebreak--, fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
					--linebreak--,editlock,',
        ),
        'metatags' => 
        array (
          'showitem' => 'keywords,--linebreak--,description,',
        ),
        'alternativeTitles' => 
        array (
          'showitem' => 'alternative_title,--linebreak--,path_segment',
        ),
        'palette_event' => 
        array (
          'canNotCollapse' => true,
          'showitem' => 'event_end,full_day,--linebreak--,organizer,organizer_simple, --linebreak--,location,location_simple',
        ),
      ),
    ),
    'tx_news_domain_model_tag' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag',
        'descriptionColumn' => 'notes',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY title',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'ext-news-tag',
        ),
        'searchFields' => 'uid,title',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,title',
      ),
      'columns' => 
      array (
        'pid' => 
        array (
          'label' => 'pid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required,unique,trim',
          ),
        ),
        'seo_headline' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.seo.seo_headline',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'seo_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.seo.seo_title',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'seo_description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.seo.seo_description',
          'config' => 
          array (
            'type' => 'text',
          ),
        ),
        'seo_text' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.seo.seo_text',
          'config' => 
          array (
            'type' => 'text',
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
          ),
        ),
        'notes' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 10,
            'cols' => 48,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'title,--palette--;;paletteCore,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.tabs.seo,seo_title,seo_description,seo_headline,seo_text,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes,notes,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.extended',
        ),
      ),
      'palettes' => 
      array (
        'paletteCore' => 
        array (
          'showitem' => 'hidden,',
        ),
      ),
    ),
    'tx_eventnews_domain_model_location' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:eventnews/Resources/Private/Language/locallang_db.xlf:tx_eventnews_domain_model_location',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'title,description,lat,lng,link,',
        'iconfile' => 'EXT:eventnews/Resources/Public/Icons/tx_eventnews_domain_model_location.gif',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, description, lat, lng, link',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,title,description,lat,lng,link,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,starttime,endtime',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
                2 => 'flags-multiple',
              ),
            ),
            'default' => 0,
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_eventnews_domain_model_location',
            'foreign_table_where' => 'AND tx_eventnews_domain_model_location.pid=###CURRENT_PID### AND tx_eventnews_domain_model_location.sys_language_uid IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'size' => 13,
            'eval' => 'datetime',
            'checkbox' => 0,
            'default' => 0,
            'range' => 
            array (
              'lower' => 1585544400,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'renderType' => 'inputDateTime',
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'size' => 13,
            'eval' => 'datetime',
            'checkbox' => 0,
            'default' => 0,
            'range' => 
            array (
              'lower' => 1585544400,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'renderType' => 'inputDateTime',
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:eventnews/Resources/Private/Language/locallang_db.xlf:tx_eventnews_domain_model_location.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:eventnews/Resources/Private/Language/locallang_db.xlf:tx_eventnews_domain_model_location.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 4,
            'eval' => 'trim',
          ),
        ),
        'lat' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:eventnews/Resources/Private/Language/locallang_db.xlf:tx_eventnews_domain_model_location.lat',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'double2',
          ),
        ),
        'lng' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:eventnews/Resources/Private/Language/locallang_db.xlf:tx_eventnews_domain_model_location.lng',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'double2',
          ),
        ),
        'link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:eventnews/Resources/Private/Language/locallang_db.xlf:tx_eventnews_domain_model_location.link',
          'config' => 
          array (
            'type' => 'input',
            'size' => '20',
            'max' => '255',
            'eval' => 'trim',
            'wizards' => 
            array (
              '_PADDING' => 2,
            ),
            'softref' => 'typolink',
            'renderType' => 'inputLink',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                  'windowOpenParameters' => 'height=600,width=800,status=0,menubar=0,scrollbars=1',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'tx_eventnews_domain_model_organizer' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:eventnews/Resources/Private/Language/locallang_db.xlf:tx_eventnews_domain_model_organizer',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'title,description,',
        'iconfile' => 'EXT:eventnews/Resources/Public/Icons/tx_eventnews_domain_model_organizer.gif',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, description, link',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,title,description,link,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,starttime,endtime',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
                2 => 'flags-multiple',
              ),
            ),
            'default' => 0,
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_eventnews_domain_model_organizer',
            'foreign_table_where' => 'AND tx_eventnews_domain_model_organizer.pid=###CURRENT_PID### AND tx_eventnews_domain_model_organizer.sys_language_uid IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'size' => 13,
            'eval' => 'datetime',
            'checkbox' => 0,
            'default' => 0,
            'range' => 
            array (
              'lower' => 1585544400,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'renderType' => 'inputDateTime',
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'size' => 13,
            'eval' => 'datetime',
            'checkbox' => 0,
            'default' => 0,
            'range' => 
            array (
              'lower' => 1585544400,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'renderType' => 'inputDateTime',
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:eventnews/Resources/Private/Language/locallang_db.xlf:tx_eventnews_domain_model_organizer.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:eventnews/Resources/Private/Language/locallang_db.xlf:tx_eventnews_domain_model_organizer.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 4,
            'eval' => 'trim',
          ),
        ),
        'link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:eventnews/Resources/Private/Language/locallang_db.xlf:tx_eventnews_domain_model_organizer.link',
          'config' => 
          array (
            'type' => 'input',
            'size' => '20',
            'max' => '255',
            'eval' => 'trim',
            'wizards' => 
            array (
              '_PADDING' => 2,
            ),
            'softref' => 'typolink',
            'renderType' => 'inputLink',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                  'windowOpenParameters' => 'height=600,width=800,status=0,menubar=0,scrollbars=1',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'tx_gridelements_backend_layout' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'rootLevel' => -1,
        'thumbnail' => 'resources',
        'dividers2tabs' => true,
        'selicon_field' => 'icon',
        'selicon_field_path' => 'uploads/tx_gridelements',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:gridelements/Resources/Public/Icons/gridelements.svg',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,frame,config,pi_flexform_ds,description,hidden,icon',
      ),
      'columns' => 
      array (
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
            'max' => '30',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
              ),
            ),
          ),
        ),
        'title' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => '25',
            'max' => '256',
            'eval' => 'required',
          ),
        ),
        'alias' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.alias',
          'config' => 
          array (
            'type' => 'input',
            'size' => '25',
            'max' => '256',
            'eval' => 'nospace,alphanum_x,lower',
          ),
        ),
        'description' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => '5',
          ),
        ),
        'horizontal' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.horizontal',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.horizontal.I.0',
              ),
            ),
          ),
        ),
        'icon' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.icon',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'file',
            'allowed' => 'jpg,gif,png,svg',
            'uploadfolder' => 'uploads/tx_gridelements',
            'size' => 5,
            'minitems' => 0,
            'maxitems' => 2,
          ),
        ),
        'frame' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.frame',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.frame.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.frame.I.-1',
                1 => '-1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.frame.I.1',
                1 => '1',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.frame.I.2',
                1 => '2',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.frame.I.3',
                1 => '3',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'top_level_layout' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.top_level_layout',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'config' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.config',
          'config' => 
          array (
            'type' => 'text',
            'renderType' => 'belayoutwizard',
            'cols' => '25',
            'rows' => '5',
            'fixedFont' => true,
          ),
        ),
        'pi_flexform_ds' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.pi_flexform_ds',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '35',
            'rows' => '10',
          ),
        ),
        'pi_flexform_ds_file' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.pi_flexform_ds_file',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'file',
            'allowed' => 'xml',
            'maxitems' => 1,
            'size' => 1,
          ),
        ),
      ),
      'palettes' => 
      array (
        'general' => 
        array (
          'canNotCollapse' => 1,
          'showitem' => 'title, --linebreak--, description',
        ),
        'appearance' => 
        array (
          'canNotCollapse' => 1,
          'showitem' => 'icon, horizontal, frame',
        ),
        'visibility' => 
        array (
          'canNotCollapse' => 1,
          'showitem' => 'hidden',
        ),
        'flexform' => 
        array (
          'canNotCollapse' => 1,
          'showitem' => 'pi_flexform_ds, --linebreak--, pi_flexform_ds_file',
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--palette--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout;general,--palette--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.palette.appearance;appearance,--div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.div.configuration,top_level_layout,alias,config,--palette--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.ce_configuration;flexform,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility',
        ),
      ),
    ),
    'tx_dce_domain_model_dce' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce',
        'label' => 'title',
        'label_userFunc' => 'ArminVieweg\\Dce\\UserFunction\\CustomLabels\\DceFieldLabel->getLabelDce',
        'adminOnly' => 1,
        'rootLevel' => 1,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'iconfile' => 'EXT:dce/Resources/Public/Icons/ext_icon.png',
        'copyAfterDuplFields' => 'fields',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,title,type',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--palette--;;general_header,fields,--div--;LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.template,template_type,template_content,template_file,--div--;LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.container,enable_container,container_item_limit,container_identifier,container_template_type,container_template,container_template_file,--div--;LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.backendTemplate,use_simple_backend_view,backend_view_header,backend_view_bodytext,backend_template_type,backend_template_content,backend_template_file,--div--;LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.wizard,wizard_icon,wizard_custom_icon,wizard_enable,wizard_category,wizard_description,--div--;LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.detailpage,enable_detailpage,detailpage_identifier,detailpage_template_type,detailpage_template,detailpage_template_file,--div--;LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.miscellaneous,cache_dce,flexform_label,hide_default_ce_wrap,--palette--;LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.contentRelationsPalette;content_relations,palette_fields,template_layout_root_path,template_partial_root_path',
          'columnsOverrides' => 
          array (
            'template_content' => 
            array (
              'config' => 
              array (
                'fixedFont' => true,
                'enableTabulator' => true,
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        'general_header' => 
        array (
          'showitem' => 'title,hidden',
          'canNotCollapse' => true,
        ),
        'content_relations' => 
        array (
          'showitem' => 'show_access_tab,show_media_tab,show_category_tab',
          'canNotCollapse' => true,
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/locallang_general.xml:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/locallang_general.xml:LGL.default_value',
                1 => 0,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_dce_domain_model_dce',
            'foreign_table_where' => 'AND tx_dce_domain_model_dce.pid=###CURRENT_PID### AND tx_dce_domain_model_dce.sys_language_uid IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.hidden',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'title' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,required',
          ),
        ),
        'fields' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.fields',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_dce_domain_model_dcefield',
            'foreign_sortby' => 'sorting',
            'foreign_field' => 'parent_dce',
            'minitems' => 0,
            'maxitems' => 999,
            'appearance' => 
            array (
              'collapseAll' => 1,
              'expandSingle' => 1,
              'levelLinksPosition' => 'bottom',
              'useSortable' => 1,
              'showPossibleLocalizationRecords' => 1,
              'showRemovedLocalizationRecords' => 1,
              'showAllLocalizationLink' => 1,
              'showSynchronizationLink' => 1,
              'enabledControls' => 
              array (
                'info' => false,
                'dragdrop' => true,
                'sort' => true,
              ),
            ),
          ),
        ),
        'wizard_enable' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.wizardEnable',
          'config' => 
          array (
            'type' => 'check',
            'default' => true,
          ),
          'onChange' => 'reload',
        ),
        'wizard_category' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.wizardCategory',
          'displayCond' => 'FIELD:wizard_enable:REQ:true',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce',
                1 => '--div--',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce_long',
                1 => 'dce',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:typo3_default_categories',
                1 => '--div--',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:backend/Resources/Private/Language/locallang_db_new_content_el.xlf:common',
                1 => 'common',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:backend/Resources/Private/Language/locallang_db_new_content_el.xlf:special',
                1 => 'special',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:backend/Resources/Private/Language/locallang_db_new_content_el.xlf:forms',
                1 => 'forms',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:backend/Resources/Private/Language/locallang_db_new_content_el.xlf:plugins',
                1 => 'plugins',
              ),
            ),
          ),
        ),
        'wizard_description' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.wizardDescription',
          'displayCond' => 'FIELD:wizard_enable:REQ:true',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'wizard_icon' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.wizardIcon',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'minitems' => 1,
            'maxitems' => 1,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:wizardIcon.content-header',
                1 => 'content-header',
                2 => 'content-header',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:wizardIcon.content-textpic',
                1 => 'content-textpic',
                2 => 'content-textpic',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:wizardIcon.content-bullets',
                1 => 'content-bullets',
                2 => 'content-bullets',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:wizardIcon.content-table',
                1 => 'content-table',
                2 => 'content-table',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:wizardIcon.content-special-uploads',
                1 => 'content-special-uploads',
                2 => 'content-special-uploads',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:wizardIcon.content-special-menu',
                1 => 'content-special-menu',
                2 => 'content-special-menu',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:wizardIcon.content-special-html',
                1 => 'content-special-html',
                2 => 'content-special-html',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:wizardIcon.content-special-div',
                1 => 'content-special-div',
                2 => 'content-special-div',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:wizardIcon.content-special-shortcut',
                1 => 'content-special-shortcut',
                2 => 'content-special-shortcut',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:wizardIcon.content-elements-login',
                1 => 'content-elements-login',
                2 => 'content-elements-login',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:wizardIcon.content-elements-mailform',
                1 => 'content-elements-mailform',
                2 => 'content-elements-mailform',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:wizardIcon.content-plugin',
                1 => 'content-plugin',
                2 => 'content-plugin',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:wizardIcon.custom',
                1 => '--div--',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:wizardIcon.customIcon',
                1 => 'custom',
              ),
            ),
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
          'onChange' => 'reload',
        ),
        'wizard_custom_icon' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.wizardCustomIcon',
          'displayCond' => 'FIELD:wizard_icon:IN:custom',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required',
          ),
        ),
        'template_type' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.templateType',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.templateType.inline',
                1 => 'inline',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.templateType.file',
                1 => 'file',
              ),
            ),
          ),
          'onChange' => 'reload',
        ),
        'template_content' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.templateContent',
          'displayCond' => 'FIELD:template_type:!IN:file',
          'config' => 
          array (
            'type' => 'user',
            'size' => '30',
            'userFunc' => 'ArminVieweg\\Dce\\UserFunction\\UserFields\\CodemirrorField->getCodemirrorField',
            'parameters' => 
            array (
              'mode' => 'htmlmixed',
              'showTemplates' => false,
            ),
            'default' => '{namespace dce=ArminVieweg\\Dce\\ViewHelpers}
<div class="dce">
    Your template goes here...
</div>
',
          ),
        ),
        'template_file' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.templateFile',
          'displayCond' => 'FIELD:template_type:IN:file',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 30,
            'eval' => 'required',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'blindLinkOptions' => 'page,folder,url,mail,spec',
                  'blindLinkFields' => 'title,target,class,params',
                ),
              ),
            ),
          ),
        ),
        'cache_dce' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.cacheDce',
          'config' => 
          array (
            'type' => 'check',
            'default' => '1',
          ),
        ),
        'show_access_tab' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.showAccessTab',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'show_category_tab' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.showCategoryTab',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'show_media_tab' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.showMediaTab',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'flexform_label' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.flexformLabel',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim,required',
            'default' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.flexformLabel.default',
            'size' => 30,
          ),
        ),
        'use_simple_backend_view' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.useSimpleBackendView',
          'config' => 
          array (
            'type' => 'check',
            'default' => '1',
          ),
          'onChange' => 'reload',
        ),
        'backend_view_header' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.backendViewHeader',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'ArminVieweg\\Dce\\UserFunction\\ItemsProcFunc->getDceFields',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
          'displayCond' => 'FIELD:use_simple_backend_view:=:1',
          'onChange' => 'reload',
        ),
        'backend_view_bodytext' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.backendViewBodytext',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'itemsProcFunc' => 'ArminVieweg\\Dce\\UserFunction\\ItemsProcFunc->getDceFields',
            'size' => 5,
            'minitems' => 0,
            'maxitems' => 15,
          ),
          'displayCond' => 'FIELD:use_simple_backend_view:=:1',
        ),
        'backend_template_type' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.backendTemplateType',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.backendTemplateType.inline',
                1 => 'inline',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.backendTemplateType.file',
                1 => 'file',
              ),
            ),
          ),
          'displayCond' => 'FIELD:use_simple_backend_view:!=:1',
          'onChange' => 'reload',
        ),
        'backend_template_content' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.backendTemplateContent',
          'displayCond' => 
          array (
            'AND' => 
            array (
              0 => 'FIELD:use_simple_backend_view:!=:1',
              1 => 'FIELD:backend_template_type:!IN:file',
            ),
          ),
          'config' => 
          array (
            'type' => 'user',
            'size' => '30',
            'userFunc' => 'ArminVieweg\\Dce\\UserFunction\\UserFields\\CodemirrorField->getCodemirrorField',
            'parameters' => 
            array (
              'mode' => 'htmlmixed',
              'showTemplates' => false,
            ),
            'default' => '
{namespace dce=ArminVieweg\\Dce\\ViewHelpers}
<f:layout name="BackendTemplate" />

<f:section name="header">
	<strong>{dce.title}</strong><br>
</f:section>
<f:section name="bodytext">
	Your backend template goes here...
</f:section>',
          ),
        ),
        'backend_template_file' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.backendTemplateFile',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 30,
            'eval' => 'required',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'blindLinkOptions' => 'page,folder,url,mail,spec',
                  'blindLinkFields' => 'title,target,class,params',
                ),
              ),
            ),
          ),
          'displayCond' => 
          array (
            'AND' => 
            array (
              0 => 'FIELD:use_simple_backend_view:!=:1',
              1 => 'FIELD:backend_template_type:IN:file',
            ),
          ),
        ),
        'template_layout_root_path' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.layoutRootPath',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim,required',
            'default' => 'EXT:dce/Resources/Private/Layouts/',
          ),
        ),
        'template_partial_root_path' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.partialRootPath',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim,required',
            'default' => 'EXT:dce/Resources/Private/Partials/',
          ),
        ),
        'enable_detailpage' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.enableDetailpage',
          'config' => 
          array (
            'type' => 'check',
          ),
          'onChange' => 'reload',
        ),
        'detailpage_identifier' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.detailpageIdentifier',
          'displayCond' => 'FIELD:enable_detailpage:=:1',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,is_in',
            'is_in' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ01234567890_-',
            'default' => 'detailDceUid',
          ),
        ),
        'detailpage_template_type' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.templateType',
          'displayCond' => 'FIELD:enable_detailpage:=:1',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.templateType.inline',
                1 => 'inline',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.templateType.file',
                1 => 'file',
              ),
            ),
          ),
          'onChange' => 'reload',
        ),
        'detailpage_template' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.detailpageTemplate',
          'displayCond' => 
          array (
            'AND' => 
            array (
              0 => 'FIELD:enable_detailpage:=:1',
              1 => 'FIELD:detailpage_template_type:!IN:file',
            ),
          ),
          'config' => 
          array (
            'type' => 'user',
            'size' => '30',
            'userFunc' => 'ArminVieweg\\Dce\\UserFunction\\UserFields\\CodemirrorField->getCodemirrorField',
            'parameters' => 
            array (
              'mode' => 'htmlmixed',
              'showTemplates' => false,
            ),
            'default' => '{namespace dce=ArminVieweg\\Dce\\ViewHelpers}
<div class="dce dce-detailpage">
	Your detailpage template goes here...
</div>
',
          ),
        ),
        'detailpage_template_file' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.detailpageTemplateFile',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 30,
            'eval' => 'required',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'blindLinkOptions' => 'page,folder,url,mail,spec',
                  'blindLinkFields' => 'title,target,class,params',
                ),
              ),
            ),
          ),
          'displayCond' => 
          array (
            'AND' => 
            array (
              0 => 'FIELD:enable_detailpage:=:1',
              1 => 'FIELD:detailpage_template_type:IN:file',
            ),
          ),
        ),
        'enable_container' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.enableContainer',
          'config' => 
          array (
            'type' => 'check',
          ),
          'onChange' => 'reload',
        ),
        'container_item_limit' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.containerItemLimit',
          'displayCond' => 'FIELD:enable_container:=:1',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'num',
            'default' => 0,
            'size' => 2,
          ),
        ),
        'container_template_type' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.templateType',
          'displayCond' => 'FIELD:enable_container:=:1',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.templateType.inline',
                1 => 'inline',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.templateType.file',
                1 => 'file',
              ),
            ),
          ),
          'onChange' => 'reload',
        ),
        'container_template' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.containerTemplate',
          'displayCond' => 
          array (
            'AND' => 
            array (
              0 => 'FIELD:enable_container:=:1',
              1 => 'FIELD:container_template_type:!IN:file',
            ),
          ),
          'config' => 
          array (
            'type' => 'user',
            'size' => '30',
            'userFunc' => 'ArminVieweg\\Dce\\UserFunction\\UserFields\\CodemirrorField->getCodemirrorField',
            'parameters' => 
            array (
              'mode' => 'htmlmixed',
              'doNotShowFields' => true,
            ),
            'default' => '{namespace dce=ArminVieweg\\Dce\\ViewHelpers}
<f:layout name="DefaultContainer" />

<f:section name="main">
	<f:render partial="Container/Dces" arguments="{dces:dces}" />
</f:section>',
          ),
        ),
        'container_template_file' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.containerTemplateFile',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 30,
            'eval' => 'required',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'blindLinkOptions' => 'page,folder,url,mail,spec',
                  'blindLinkFields' => 'title,target,class,params',
                ),
              ),
            ),
          ),
          'displayCond' => 
          array (
            'AND' => 
            array (
              0 => 'FIELD:enable_container:=:1',
              1 => 'FIELD:container_template_type:IN:file',
            ),
          ),
        ),
        'palette_fields' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.paletteFields',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'itemsProcFunc' => 'ArminVieweg\\Dce\\UserFunction\\ItemsProcFunc->getAvailableTtContentColumnsForPaletteFields',
            'size' => 10,
            'default' => 'sys_language_uid,l18n_parent,colPos,spaceBefore,spaceAfter,section_frame,hidden',
            'minitems' => 0,
            'maxitems' => 999,
          ),
        ),
      ),
    ),
    'tx_dce_domain_model_dcefield' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dcefield',
        'label' => 'title',
        'label_userFunc' => 'ArminVieweg\\Dce\\UserFunction\\CustomLabels\\DceFieldLabel->getLabel',
        'hideTable' => true,
        'adminOnly' => true,
        'rootLevel' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'type' => 'type',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          0 => 'ext-dce-dcefield-type-element',
          1 => 'ext-dce-dcefield-type-tab',
          2 => 'ext-dce-dcefield-type-section',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,title,type,variable',
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--palette--;;general_header,configuration,--palette--;;tca_options,parent_dce,parent_field',
          'columnsOverrides' => 
          array (
            'configuration' => 
            array (
              'config' => 
              array (
                'fixedFont' => true,
                'enableTabulator' => true,
              ),
            ),
          ),
        ),
        1 => 
        array (
          'showitem' => '--palette--;;general_header,parent_dce',
        ),
        2 => 
        array (
          'showitem' => '--palette--;;general_header,section_fields_tag,section_fields,parent_dce',
        ),
      ),
      'palettes' => 
      array (
        'general_header' => 
        array (
          'showitem' => 'type,title,variable,hidden',
          'canNotCollapse' => true,
        ),
        'tca_options' => 
        array (
          'showitem' => 'map_to,new_tca_field_name,new_tca_field_type',
          'canNotCollapse' => true,
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/locallang_general.xml:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/locallang_general.xml:LGL.default_value',
                1 => 0,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_dce_domain_model_dcefield',
            'foreign_table_where' => 'AND tx_dce_domain_model_dcefield.pid=###CURRENT_PID### AND tx_dce_domain_model_dcefield.sys_language_uid IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dcefield.hidden',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'sorting' => 
        array (
          'label' => 'Sorting',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'size' => 13,
            'eval' => 'datetime',
            'checkbox' => 0,
            'default' => 0,
            'range' => 
            array (
              'lower' => 1585544400,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'renderType' => 'inputDateTime',
          ),
        ),
        'endtime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'size' => 13,
            'eval' => 'datetime',
            'checkbox' => 0,
            'default' => 0,
            'range' => 
            array (
              'lower' => 1585544400,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'renderType' => 'inputDateTime',
          ),
        ),
        'type' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dcefield.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dcefield.type.element',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dcefield.type.tab',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dcefield.type.section',
                1 => 2,
              ),
            ),
          ),
          'displayCond' => 'FIELD:parent_field:=:0',
          'onChange' => 'reload',
        ),
        'title' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dcefield.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 15,
            'eval' => 'trim,required',
          ),
        ),
        'variable' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dcefield.variable',
          'config' => 
          array (
            'type' => 'input',
            'size' => 15,
            'eval' => 'trim,required,is_in,ArminVieweg\\Dce\\UserFunction\\CustomFieldValidation\\NoLeadingNumberValidator,ArminVieweg\\Dce\\UserFunction\\CustomFieldValidation\\LowerCamelCaseValidator',
            'is_in' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ01234567890_',
          ),
        ),
        'configuration' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dcefield.configuration',
          'config' => 
          array (
            'type' => 'user',
            'size' => '30',
            'userFunc' => 'ArminVieweg\\Dce\\UserFunction\\UserFields\\CodemirrorField->getCodemirrorField',
            'parameters' => 
            array (
              'mode' => 'xml',
              'showTemplates' => true,
            ),
          ),
        ),
        'map_to' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dcefield.mapTo',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'ArminVieweg\\Dce\\UserFunction\\ItemsProcFunc->getAvailableTtContentColumnsForTcaMapping',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
          'displayCond' => 'FIELD:parent_field:=:0',
          'onChange' => 'reload',
        ),
        'new_tca_field_name' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dcefield.newTcaFieldName',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim,required,lower',
          ),
          'displayCond' => 
          array (
            'AND' => 
            array (
              0 => 'FIELD:parent_field:=:0',
              1 => 'FIELD:map_to:=:*newcol',
            ),
          ),
        ),
        'new_tca_field_type' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dcefield.newTcaFieldType',
          'config' => 
          array (
            'type' => 'input',
            'default' => 'auto',
            'eval' => 'trim,required',
          ),
          'displayCond' => 
          array (
            'AND' => 
            array (
              0 => 'FIELD:parent_field:=:0',
              1 => 'FIELD:map_to:=:*newcol',
            ),
          ),
        ),
        'section_fields' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dcefield.section_fields',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_dce_domain_model_dcefield',
            'foreign_sortby' => 'sorting',
            'foreign_field' => 'parent_field',
            'minitems' => 0,
            'maxitems' => 999,
            'appearance' => 
            array (
              'collapseAll' => 0,
              'expandSingle' => 0,
              'levelLinksPosition' => 'bottom',
              'useSortable' => 1,
              'showPossibleLocalizationRecords' => 1,
              'showRemovedLocalizationRecords' => 1,
              'showAllLocalizationLink' => 1,
              'showSynchronizationLink' => 1,
              'enabledControls' => 
              array (
                'info' => false,
                'dragdrop' => true,
                'sort' => true,
              ),
            ),
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'parent_field' => 
                array (
                  'config' => 
                  array (
                    'default' => -1,
                  ),
                ),
              ),
            ),
          ),
        ),
        'section_fields_tag' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dcefield.section_fields_tag',
          'config' => 
          array (
            'type' => 'input',
            'size' => 15,
            'eval' => 'trim,required',
          ),
        ),
        'parent_dce' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dcefield.parent_dce',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'parent_field' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dcefield.parent_field',
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'tx_kesearch_filteroptions' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_filteroptions',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:ke_search/res/img/table_icons/icon_tx_kesearch_filteroptions.gif',
        'searchFields' => 'title,tag',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,title,tag',
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_kesearch_filteroptions',
            'foreign_table_where' => 'AND tx_kesearch_filteroptions.pid=###CURRENT_PID### AND tx_kesearch_filteroptions.sys_language_uid IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'title' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_filteroptions.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
          ),
        ),
        'tag' => 
        array (
          'exclude' => 0,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_filteroptions.tag',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
            'eval' => 'trim,required,TeaminmediasPluswerk\\KeSearch\\UserFunction\\CustomFieldValidation\\FilterOptionTagValidator',
          ),
        ),
        'automated_tagging' => 
        array (
          'exclude' => 1,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_filteroptions.automated_tagging',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 5,
            'minitems' => 0,
            'maxitems' => 99,
          ),
        ),
        'automated_tagging_exclude' => 
        array (
          'exclude' => 1,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_filteroptions.automated_tagging_exclude',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 5,
            'minitems' => 0,
            'maxitems' => 99,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, tag, automated_tagging,automated_tagging_exclude',
        ),
      ),
    ),
    'tx_kesearch_filters' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_filters',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'ORDER BY crdate',
        'delete' => 'deleted',
        'type' => 'rendertype',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:ke_search/res/img/table_icons/icon_tx_kesearch_filters.gif',
        'searchFields' => 'title',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,title,options,rendertype',
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_kesearch_filters',
            'foreign_table_where' => 'AND tx_kesearch_filters.pid=###CURRENT_PID### AND tx_kesearch_filters.sys_language_uid IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'title' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_filters.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
          ),
        ),
        'rendertype' => 
        array (
          'exclude' => 0,
          'l10n_display' => 'defaultAsReadonly',
          'displayCond' => 'FIELD:l10n_parent:<:1',
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_filters.rendertype',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_filters.rendertype.I.0',
                1 => 'select',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_filters.rendertype.I.1',
                1 => 'list',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_filters.rendertype.I.2',
                1 => 'checkbox',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_filters.rendertype.I.3',
                1 => 'textlinks',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'default' => 'select',
          ),
        ),
        'markAllCheckboxes' => 
        array (
          'exclude' => 0,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_filters.markAllCheckboxes',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'options' => 
        array (
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_filters.options',
          'l10n_mode' => 'exclude',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_kesearch_filteroptions',
            'maxitems' => 500,
            'appearance' => 
            array (
              'collapseAll' => true,
              'expandSingle' => true,
              'useSortable' => true,
              'showPossibleLocalizationRecords' => true,
              'showAllSynchronizationLink' => true,
              'showSynchronizationLink' => true,
              'enabledControls' => 
              array (
                'info' => true,
                'dragdrop' => true,
                'sort' => true,
                'hide' => true,
                'delete' => true,
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
          ),
        ),
        'target_pid' => 
        array (
          'exclude' => 1,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_filters.target_pid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'amount' => 
        array (
          'exclude' => 0,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_filters.amount',
          'config' => 
          array (
            'type' => 'input',
            'default' => '10',
            'size' => '30',
            'eval' => 'trim,int',
          ),
        ),
        'shownumberofresults' => 
        array (
          'exclude' => 0,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_filters.shownumberofresults',
          'config' => 
          array (
            'type' => 'check',
            'default' => '1',
          ),
        ),
        'alphabeticalsorting' => 
        array (
          'exclude' => 0,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_filters.alphabeticalsorting',
          'config' => 
          array (
            'type' => 'check',
            'default' => '1',
          ),
        ),
      ),
      'types' => 
      array (
        'select' => 
        array (
          'showitem' => 'sys_language_uid,l10n_parent, l10n_diffsource, hidden, title,rendertype, options, shownumberofresults, alphabeticalsorting',
        ),
        'list' => 
        array (
          'showitem' => 'sys_language_uid,l10n_parent, l10n_diffsource, hidden, title,rendertype, options, shownumberofresults, alphabeticalsorting',
        ),
        'checkbox' => 
        array (
          'showitem' => 'sys_language_uid,l10n_parent, l10n_diffsource, hidden, title,rendertype, markAllCheckboxes, options, shownumberofresults, alphabeticalsorting',
        ),
        'textlinks' => 
        array (
          'showitem' => 'sys_language_uid,l10n_parent, l10n_diffsource, hidden, title,rendertype, target_pid, amount, shownumberofresults, alphabeticalsorting, options',
        ),
      ),
    ),
    'tx_kesearch_index' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_index',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY crdate',
        'enablecolumns' => 
        array (
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'iconfile' => 'EXT:ke_search/res/img/table_icons/icon_tx_kesearch_index.gif',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'targetpid,content,params,type,tags,abstract,title,language',
      ),
      'columns' => 
      array (
        'starttime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'default' => '0',
            'checkbox' => '0',
          ),
        ),
        'endtime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'date',
            'renderType' => 'inputDateTime',
            'checkbox' => '0',
            'default' => '0',
            'range' => 
            array (
              'upper' => 2147505247,
              'lower' => 1583042400,
            ),
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingleBox',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'ORDER BY fe_groups.title',
            'size' => 6,
            'minitems' => 0,
            'maxitems' => 99999,
          ),
        ),
        'targetpid' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_index.targetpid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'content' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_index.content',
          'config' => 
          array (
            'type' => 'text',
            'wrap' => 'OFF',
            'cols' => '30',
            'rows' => '5',
          ),
        ),
        'params' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_index.params',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
          ),
        ),
        'type' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_index.type',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
          ),
        ),
        'tags' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_index.tags',
          'config' => 
          array (
            'type' => 'text',
            'wrap' => 'OFF',
            'cols' => '30',
            'rows' => '5',
          ),
        ),
        'abstract' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_index.abstract',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '30',
            'rows' => '5',
          ),
        ),
        'title' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_index.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
          ),
        ),
        'language' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_index.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.uid',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'sortdate' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_index.sortdate',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'size' => '10',
            'eval' => 'datetime',
            'checkbox' => '0',
            'default' => '0',
          ),
        ),
        'orig_uid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'orig_pid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'directory' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_index.directory',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
          ),
        ),
        'hash' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'starttime, endtime, fe_group, targetpid, content, params, type, tags, abstract, title, language',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
      ),
    ),
    'tx_kesearch_indexerconfig' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY crdate',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:ke_search/res/img/table_icons/icon_tx_kesearch_indexerconfig.gif',
        'searchFields' => 'title',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,title,storagepid,startingpoints_recursive,single_pages,sysfolder,type,index_content_with_restrictions,index_passed_events,index_news_category_mode,index_news_category_selection,directories,fileext,filteroption,index_page_doctypes',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'title' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
          ),
        ),
        'storagepid' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.storagepid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'minitems' => 1,
            'maxitems' => 1,
          ),
        ),
        'targetpid' => 
        array (
          'displayCond' => 'FIELD:type:!IN:page,tt_content,file,templavoila,comments,remote',
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.targetpid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'minitems' => 1,
            'maxitems' => 1,
          ),
        ),
        'type' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.type.I.0',
                1 => 'page',
                2 => 'EXT:ke_search/res/img/types_backend/selicon_tx_kesearch_indexerconfig_type_0.gif',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.type.I.1',
                1 => 'ke_yac',
                2 => 'EXT:ke_search/res/img/types_backend/selicon_tx_kesearch_indexerconfig_type_1.gif',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.type.I.2',
                1 => 'ttnews',
                2 => 'EXT:ke_search/res/img/types_backend/selicon_tx_kesearch_indexerconfig_type_2.gif',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.type.I.5',
                1 => 'tt_address',
                2 => 'EXT:ke_search/res/img/types_backend/selicon_tx_kesearch_indexerconfig_type_5.gif',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.type.I.6',
                1 => 'tt_content',
                2 => 'EXT:ke_search/res/img/types_backend/selicon_tx_kesearch_indexerconfig_type_6.gif',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.type.I.7',
                1 => 'file',
                2 => 'EXT:ke_search/res/img/types_backend/selicon_tx_kesearch_indexerconfig_type_7.gif',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.type.I.8',
                1 => 't3s_content',
                2 => 'EXT:ke_search/res/img/types_backend/selicon_tx_kesearch_indexerconfig_type_8.gif',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.type.I.9',
                1 => 'templavoila',
                2 => 'EXT:ke_search/res/img/types_backend/selicon_tx_kesearch_indexerconfig_type_9.gif',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.type.I.10',
                1 => 'mmforum',
                2 => 'EXT:ke_search/res/img/types_backend/selicon_tx_kesearch_indexerconfig_type_10.gif',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.type.I.11',
                1 => 'comments',
                2 => 'EXT:ke_search/res/img/types_backend/selicon_tx_kesearch_indexerconfig_type_11.gif',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.type.I.12',
                1 => 'news',
                2 => 'EXT:ke_search/res/img/types_backend/selicon_tx_kesearch_indexerconfig_type_12.gif',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.type.I.13',
                1 => 'a21glossary',
                2 => 'EXT:ke_search/res/img/types_backend/selicon_tx_kesearch_indexerconfig_type_13.gif',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.type.I.14',
                1 => 'cal',
                2 => 'EXT:ke_search/res/img/types_backend/selicon_tx_kesearch_indexerconfig_type_14.gif',
              ),
            ),
            'itemsProcFunc' => 'tx_kesearch_lib_items->fillIndexerConfig',
            'size' => 1,
            'maxitems' => 1,
            'default' => 'page',
          ),
          'onChange' => 'reload',
        ),
        'startingpoints_recursive' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.startingpoints_recursive',
          'displayCond' => 'FIELD:type:IN:page,tt_content,ttnews,tt_address,templavoila,comments,news,a21glossary,cal',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 99,
          ),
        ),
        'single_pages' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.single_pages',
          'displayCond' => 'FIELD:type:IN:page,tt_content,templavoila',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 99,
          ),
        ),
        'sysfolder' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.sysfolder',
          'displayCond' => 'FIELD:type:IN:ke_yac,ttnews,tt_address,mmforum,comments,news,a21glossary,cal',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 99,
          ),
        ),
        'index_content_with_restrictions' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.index_content_with_restrictions',
          'displayCond' => 'FIELD:type:=:page',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.index_content_with_restrictions.I.0',
                1 => 'yes',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.index_content_with_restrictions.I.1',
                1 => 'no',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'default' => 'no',
          ),
        ),
        'index_passed_events' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.index_passed_events',
          'displayCond' => 'FIELD:type:=:ke_yac',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.index_passed_events.I.0',
                1 => 'yes',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.index_passed_events.I.1',
                1 => 'no',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'index_news_category_mode' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.index_news_category_mode',
          'displayCond' => 'FIELD:type:IN:ttnews,news',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.index_news_category_mode.I.1',
                1 => '1',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.index_news_category_mode.I.2',
                1 => '2',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'index_news_archived' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.index_news_archived',
          'displayCond' => 'FIELD:type:IN:news',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.index_news_archived.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.index_news_archived.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.index_news_archived.I.2',
                1 => '2',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'index_news_category_selection' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.index_news_category_selection',
          'displayCond' => 'FIELD:type:=:ttnews',
          'config' => 
          array (
            'type' => 'none',
          ),
        ),
        'index_extnews_category_selection' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xml:tx_news_domain_model_news.categories',
          'displayCond' => 'FIELD:type:=:news',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'renderMode' => 'tree',
            'treeConfig' => 
            array (
              'parentField' => 'parent',
            ),
            'foreign_table' => 'sys_category',
            'foreign_table_where' => '',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 20,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'index_news_useHRDatesSingle' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.index_news_useHRDatesSingle',
          'displayCond' => 'FIELD:type:=:ttnews',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'index_news_useHRDatesSingleWithoutDay' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.index_news_useHRDatesSingleWithoutDay',
          'displayCond' => 'FIELD:type:=:ttnews',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'index_use_page_tags' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.index_use_page_tags',
          'displayCond' => 'FIELD:type:IN:ttnews,tt_address,mmforum,comments,news',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'directories' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.directories',
          'displayCond' => 'FIELD:type:IN:file',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 10,
            'eval' => 'trim',
          ),
        ),
        'fileext' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.fileext',
          'displayCond' => 'FIELD:type:IN:file,page,tt_content',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
            'default' => 'pdf,ppt,doc,xls,docx,xlsx,pptx',
          ),
        ),
        'index_use_page_tags_for_files' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.index_use_page_tags_for_files',
          'displayCond' => 'FIELD:type:IN:page,tt_content',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
        'index_page_doctypes' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.index_page_doctypes',
          'displayCond' => 'FIELD:type:=:page',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
            'default' => '1,2,5',
          ),
        ),
        'commenttypes' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.commenttypes',
          'displayCond' => 'FIELD:type:=:comments',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
            'default' => 'pages',
          ),
        ),
        'filteroption' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.filteroption',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'itemsProcFunc' => 'user_filterlist->getListOfAvailableFiltersForTCA',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'tvpath' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.tvpath',
          'displayCond' => 'FIELD:type:=:templavoila',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
            'default' => 'field_content',
          ),
        ),
        'fal_storage' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.fal_storage',
          'displayCond' => 'FIELD:type:=:file',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.fal_storage.dont_use_fal',
                1 => -1,
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'default' => -1,
            'foreign_table' => 'sys_file_storage',
            'allowNonIdValues' => 1,
          ),
        ),
        'contenttypes' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.contenttypes',
          'displayCond' => 'FIELD:type:IN:page,tt_content',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 10,
            'eval' => 'trim',
            'default' => 'text,textmedia,textpic,bullets,table,html,header,uploads',
          ),
        ),
        'cal_expired_events' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:ke_search/locallang_db.xml:tx_kesearch_indexerconfig.cal_expired_events',
          'displayCond' => 'FIELD:type:IN:cal',
          'config' => 
          array (
            'type' => 'check',
            'default' => '0',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'hidden, title, storagepid,targetpid,type,startingpoints_recursive,single_pages,sysfolder,index_content_with_restrictions,index_passed_events,index_news_archived,index_news_category_mode,index_news_category_selection,index_extnews_category_selection,index_news_useHRDatesSingle,index_news_useHRDatesSingleWithoutDay,index_use_page_tags,fal_storage,directories,fileext,index_page_doctypes,contenttypes,commenttypes,filteroption,tvpath,index_use_page_tags_for_files,cal_expired_events',
        ),
      ),
    ),
    'tx_koningbootstrapcarousel_domain_model_slide' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide',
        'label' => 'title',
        'hideAtCopy' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'editlock' => 'editlock',
        'dividers2tabs' => true,
        'hideTable' => true,
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'searchFields' => 'uid, title',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'iconfile' => 'EXT:koning_bootstrap_carousel/Resources/Public/Icons/tx_koningbootstrapcarousel_domain_model_slide.gif',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden, title, link, link_text, visual, visual_size, visual_position',
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'title,--palette--;;access,link,link_text,visual,visual_size,visual_position',
        ),
      ),
      'palettes' => 
      array (
        'access' => 
        array (
          'showitem' => 'hidden, starttime, endtime',
          'canNotCollapse' => false,
        ),
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'starttime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/locallang_general.php:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '10',
            'eval' => 'datetime',
            'checkbox' => '0',
            'default' => '0',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'renderType' => 'inputDateTime',
          ),
        ),
        'endtime' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/locallang_general.php:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'size' => '8',
            'eval' => 'datetime',
            'checkbox' => '0',
            'default' => '0',
            'range' => 
            array (
              'upper' => 1609394400,
              'lower' => 1583042400,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'renderType' => 'inputDateTime',
          ),
        ),
        'title' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.title',
          'config' => 
          array (
            'type' => 'text',
            'eval' => 'trim, required',
            'size' => 30,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'link' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.link',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'link_text' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.link_text',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'visual' => 
        array (
          'label' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'visual',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:media.addFileReference',
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
            'minitems' => 1,
            'maxitems' => 1,
          ),
        ),
        'visual_size' => 
        array (
          'label' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_size',
          'config' => 
          array (
            'type' => 'select',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_size.cover',
                1 => 'cover',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_size.contain',
                1 => 'contain',
              ),
            ),
            'renderType' => 'selectSingle',
          ),
        ),
        'visual_position' => 
        array (
          'label' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position',
          'config' => 
          array (
            'type' => 'select',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.left-top',
                1 => 'left-top',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.left-center',
                1 => 'left-center',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.left-bottom',
                1 => 'left-bottom',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.right-top',
                1 => 'right-top',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.right-center',
                1 => 'right-center',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.right-bottom',
                1 => 'right-bottom',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.center-top',
                1 => 'center-top',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.center-center',
                1 => 'center-center',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.center-bottom',
                1 => 'center-bottom',
              ),
            ),
            'renderType' => 'selectSingle',
          ),
        ),
      ),
    ),
    'tx_savcharts_domain_model_database' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_database',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:sav_charts/Resources/Public/Icons/icon_tx_savcharts_domain_model_database.gif',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,title,handlertype,driver,tables,host,port,socket,name,username,userpassword,persistent',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_database.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
            'eval' => 'trim',
          ),
        ),
        'handlertype' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_database.handlertype',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_database.handlertype.I.1',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_database.handlertype.I.2',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_database.handlertype.I.3',
                1 => '2',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
          'displayCond' => 'EXT:dbal:LOADED:true',
        ),
        'driver' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_database.driver',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
            'eval' => 'trim',
          ),
          'displayCond' => 'EXT:dbal:LOADED:true',
        ),
        'tables' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_database.tables',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '30',
            'rows' => '5',
          ),
          'displayCond' => 'EXT:dbal:LOADED:true',
        ),
        'host' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_database.host',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
            'eval' => 'trim',
          ),
        ),
        'port' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_database.port',
          'config' => 
          array (
            'type' => 'input',
            'size' => '4',
            'max' => '6',
            'eval' => 'int',
            'checkbox' => '0',
            'range' => 
            array (
              'upper' => '999999',
              'lower' => '0',
            ),
            'default' => 0,
          ),
        ),
        'socket' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_database.socket',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
            'eval' => 'trim',
          ),
        ),
        'name' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_database.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
            'eval' => 'trim',
          ),
        ),
        'username' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_database.username',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
            'eval' => 'trim',
          ),
        ),
        'userpassword' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_database.userpassword',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
            'eval' => 'trim',
          ),
        ),
        'persistent' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_database.persistent',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'hidden, title, handlertype, driver, tables, host, port, socket, name, username, userpassword, persistent',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
      ),
    ),
    'tx_savcharts_domain_model_query' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_query',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:sav_charts/Resources/Public/Icons/icon_tx_savcharts_domain_model_query.gif',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,title,database_id,select_clause,from_clause,where_clause,groupby_clause,orderby_clause,limit_clause',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_query.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
            'eval' => 'trim',
          ),
        ),
        'database_id' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_query.database_id',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_query.database_id.I.0',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_savcharts_domain_model_database',
            'foreign_table_where' => 'AND 1 ',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'select_clause' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_query.select_clause',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '30',
            'rows' => '5',
          ),
        ),
        'from_clause' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_query.from_clause',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '30',
            'rows' => '5',
          ),
        ),
        'where_clause' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_query.where_clause',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '30',
            'rows' => '5',
          ),
        ),
        'groupby_clause' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_query.groupby_clause',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '30',
            'rows' => '2',
          ),
        ),
        'orderby_clause' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_query.orderby_clause',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '30',
            'rows' => '2',
          ),
        ),
        'limit_clause' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:sav_charts/Resources/Private/Language/locallang_db.xlf:tx_savcharts_domain_model_query.limit_clause',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '30',
            'rows' => '2',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'hidden, title, database_id, select_clause, from_clause, where_clause, groupby_clause, orderby_clause, limit_clause',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
      ),
    ),
  ),
  'categoryRegistry' => 'O:40:"TYPO3\\CMS\\Core\\Category\\CategoryRegistry":4:{s:11:"' . "\0" . '*' . "\0" . 'registry";a:3:{s:5:"pages";a:1:{s:10:"categories";a:1:{s:8:"position";s:18:"replace:categories";}}s:17:"sys_file_metadata";a:1:{s:10:"categories";a:1:{s:8:"position";s:18:"replace:categories";}}s:10:"tt_content";a:1:{s:10:"categories";a:1:{s:8:"position";s:18:"replace:categories";}}}s:13:"' . "\0" . '*' . "\0" . 'extensions";a:1:{s:4:"core";a:3:{s:5:"pages";a:1:{s:10:"categories";s:10:"categories";}s:17:"sys_file_metadata";a:1:{s:10:"categories";s:10:"categories";}s:10:"tt_content";a:1:{s:10:"categories";s:10:"categories";}}}s:20:"' . "\0" . '*' . "\0" . 'addedCategoryTabs";a:3:{s:5:"pages";s:5:"pages";s:17:"sys_file_metadata";s:17:"sys_file_metadata";s:10:"tt_content";s:10:"tt_content";}s:11:"' . "\0" . '*' . "\0" . 'template";s:60:"


CREATE TABLE %s (
  %s int(11) DEFAULT \'0\' NOT NULL
);


";}',
);
#
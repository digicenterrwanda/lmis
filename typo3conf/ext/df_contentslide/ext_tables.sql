CREATE TABLE tt_content (
	tx_df_contentslide_contentslide tinyint(1) NOT NULL DEFAULT '0',
	tx_df_contentslide_options tinyint(1) NOT NULL DEFAULT '0',
	tx_df_contentslide_layout varchar(255) DEFAULT 'layout1' NOT NULL,
	tx_df_contentslide_animation varchar(255) DEFAULT 'slideDownwards' NOT NULL,
	tx_df_contentslide_header varchar(1024) DEFAULT '' NOT NULL,
);
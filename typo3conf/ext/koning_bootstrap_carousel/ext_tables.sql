#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
    koningbootstrapcarousel_slides int(11) DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_koningbootstrapcarousel_domain_model_slide'
#
CREATE TABLE tx_koningbootstrapcarousel_domain_model_slide (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    tstamp int(11) DEFAULT '0' NOT NULL,
    crdate int(11) DEFAULT '0' NOT NULL,
    cruser_id int(11) DEFAULT '0' NOT NULL,
    sorting int(10) DEFAULT '0' NOT NULL,
    editlock tinyint(4) DEFAULT '0' NOT NULL,
    deleted tinyint(4) DEFAULT '0' NOT NULL,
    hidden tinyint(4) DEFAULT '0' NOT NULL,
    starttime int(11) DEFAULT '0' NOT NULL,
    endtime int(11) DEFAULT '0' NOT NULL,
    content_id int(11) DEFAULT '0' NOT NULL,
    title tinytext,
    link text,
    link_text text,
    visual int(11) DEFAULT '0' NOT NULL,
    visual_size varchar(255) DEFAULT '' NOT NULL,
    visual_position varchar(255) DEFAULT '' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
    KEY content_id (content_id)
);

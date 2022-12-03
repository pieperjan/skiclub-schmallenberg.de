#
# Add SQL definition of database tables
#
CREATE TABLE tt_content (
   tx_npt3basic_displayconditions_xs varchar(255) DEFAULT '' NOT NULL,
   tx_npt3basic_displayconditions_sm varchar(255) DEFAULT '' NOT NULL,
   tx_npt3basic_displayconditions_md varchar(255) DEFAULT '' NOT NULL,
   tx_npt3basic_displayconditions_lg varchar(255) DEFAULT '' NOT NULL,
   tx_npt3basic_displayconditions_xl varchar(255) DEFAULT '' NOT NULL,
);

CREATE TABLE tx_bootstrappackage_card_group_item (
    card_layout varchar(255) DEFAULT '' NOT NULL,
    card_background varchar(255) DEFAULT '' NOT NULL,
    card_width varchar(255) DEFAULT '' NOT NULL,
);

<?php
/**
 * insall plugin event and add table to database
 * @since 1.0
 * @created majid ahmadi
 * @date 20-02-2021
 *
 */

namespace yaldaPoll;

/**
 * class for installation
 */
class installer
{

	/**
	 * constructor function
	 * @param none
	 * @return void
	 * @since 1.0
	 */
	public function __construct()
	{
		//die("mmm");
		$this->makeTables();
		$this->setSettings();
	}


	/**
	 * making database table
	 * @param none
	 * @return void
	 * @since 1.0
	 */
	private function makeTables()
	{
		$this->makeTableQuery() ;
		//$this->makeCostsTable();
	}


	/**
	 * making database table
	 * @param none
	 * @return void
	 * @since 1.0
	 */
	private function setSettings()
	{

	}


	/**
	 * making material table
	 * @param none
	 * @return void
	 * @since 1.0
	 */
	private function makeTableQuery()
	{
		global $wpdb ;
		$max_index_length = 500;
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

		$table_name = $wpdb->prefix . 'yldp_polls';
		$collate = '';
		if ( $wpdb->has_cap( 'collation' ) ) {
			$collate = $wpdb->get_charset_collate();
		}
		$sql = "CREATE TABLE IF NOT EXISTS $table_name (
             id int(11) unsigned NOT NULL AUTO_INCREMENT,
             companyname varchar(1024) ,
             `position` varchar(1024)  ,
    		 `product_type` varchar(1024) ,
    		 sorat tinyint(2) , 
    		 barkhord tinyint(2) ,
    		 motabeghat tinyint(2) ,
    motabeghat_graphic tinyint(2) ,
    karaei tinyint(2) ,
    poshtibani tinyint(2) ,
    zamanbandi tinyint(2) , 
    amoozesh tinyint(2) , 
    ux tinyint(2) , 
    ertebatat tinyint(2) ,
    moshtari varchar(1024) ,
    nemayande_moshtari varchar(1024) , 
    phonenumber varchar(15) , 
    email varchar(1024) , 
    description text ,
             PRIMARY KEY  (id)
            ) $collate ;   ";
		dbDelta($sql);





		add_option("yldpolldb_version","1.0");




	}


}



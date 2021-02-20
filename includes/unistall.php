<?php


/**
 * unistall functions
 * delete any table and data
 * be carefull
 */

namespace yaldaPoll;

/**
 * this class use deactive or unistall plugin
 */
class unistaller {

	/**
	 * unistaller constructor
	 *
	 * @param
	 *
	 * @return
	 * @since 1.0
	 */
	public function __construct() {
		$this->deleteTables();
	}

	/**
	 * delete tables
	 *
	 * @param
	 *
	 * @return
	 * @since 1.0
	 */
	private function deleteTables() {
		$this->singleTableDelete( "yldp_polls" );

		delete_option( "yldpolldb_version" );
	}


	/**
	 * delete singe table query
	 *
	 * @param string tablename
	 *
	 * @return boolean
	 * @since 1.0
	 */
	private function singleTableDelete( $tablename ) {
		global $wpdb;
		$table_name = $wpdb->prefix . $tablename;
		$wpdb->query( "DROP TABLE IF EXISTS " . $table_name );
	}


}




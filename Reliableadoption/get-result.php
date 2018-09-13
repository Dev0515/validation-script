<?php
	
		$userid = $_REQUEST["usrid"];
		$production = $_REQUEST["production"];

		global $wpdb;

		$table_name = $wpdb->prefix . 'production';

		$results = $wpdb->get_var( "SELECT * FROM $table_name WHERE usr_id = $userid");

		$cntrow= $wpdb->num_rows;

		if ($cntrow > 0 )
		{
		$wpdb->query($wpdb->prepare("UPDATE $table_name SET notes='$production' WHERE usr_id=$userid"));
		}else{
		$wpdb->insert( $table_name, array(
		'usr_id' => $userid,
		'notes' => $production,
		'status' => '1'
		) );
		}

print_r($_POST);die;
		?>

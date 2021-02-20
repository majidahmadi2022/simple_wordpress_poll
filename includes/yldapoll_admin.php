<?php
/**
 * yalda poll admin page for list of poll
 * @since 1.0
 * @created  Majid Ahmadi
 * @date 20-02-2021
 *
 */

function yaldapoll_admin()
{
	?>
	<div class="wrap">
		<h2><?php echo __("Polls" , "pricecalculator") ; ?></h2>

		<?php
		global $wpdb;
		$table_name = $wpdb->prefix . "yldp_polls";


		$rows = $wpdb->get_results("SELECT * from $table_name as a");
		//die(print_r($rows));
		?>
		<table class='wp-list-table widefat fixed striped posts'>
			<tr>
				<th class="manage-column ss-list-width"><?php echo __("Id" , "yaldapoll") ; ?></th>
				<th class="manage-column ss-list-width"><?php echo __("Customer Name" , "yaldapoll") ; ?></th>
				<th class="manage-column ss-list-width"><?php echo __("Phone Number" , "yaldapoll") ; ?></th>
				<th class="manage-column ss-list-width"><?php echo __("View Detail" , "yaldapoll") ; ?></th>
			</tr>
			<?php foreach ($rows as $row) { ?>
				<tr>
					<td class="manage-column ss-list-width"><?php echo $row->id; ?></td>
					<td class="manage-column ss-list-width"><?php echo $row->moshtari; ?></td>
					<td class="manage-column ss-list-width"><?php echo $row->phonenumber; ?></td>
					<td><a class="btn btn-edit" href="<?php echo admin_url('admin.php?page=poll_view_detail&id=' . $row->id); ?>"><?php echo __("View") ; ?></a></td>
				</tr>
			<?php } ?>
		</table>
	</div>
	<?php
}

function yaldapoll_detail()
{
	$id = $_GET['id'] ;
	global $wpdb ;
	$table_name = $wpdb->prefix . "yldp_polls";


	$row = $wpdb->get_row("SELECT * from $table_name  where id = $id ");
	?>
	<table class='wp-list-table widefat fixed striped posts'>
		<tr>
			<th class="manage-column ss-list-width"><?php echo __("Id" , "yaldapoll") ; ?></th>
			<th class="manage-column ss-list-width"><?php echo __("Customer Name" , "yaldapoll") ; ?></th>
			<th class="manage-column ss-list-width"><?php echo __("Phone Number" , "yaldapoll") ; ?></th>
			<th class="manage-column ss-list-width"><?php echo __("Agent" , "yaldapoll") ; ?></th>
		</tr>
		<tr>
				<td class="manage-column ss-list-width"><?php echo $row->id; ?></td>
				<td class="manage-column ss-list-width"><?php echo $row->moshtari; ?></td>
				<td class="manage-column ss-list-width"><?php echo $row->phonenumber; ?></td>
			<td class="manage-column ss-list-width"><?php echo $row->nemayande_moshtari; ?></td>
		</tr>
		<tr>
			<th class="manage-column ss-list-width"><?php echo __("Company Name" , "yaldapoll") ; ?></th>
			<th class="manage-column ss-list-width"><?php echo __("Product Title" , "yaldapoll") ; ?></th>
			<th class="manage-column ss-list-width"><?php echo __("Email" , "yaldapoll") ; ?></th>
			<th></th>
		</tr>
		<tr>
			<td class="manage-column ss-list-width"><?php echo $row->companyname; ?></td>
			<td class="manage-column ss-list-width"><?php echo $row->product_type; ?></td>
			<td class="manage-column ss-list-width"><?php echo $row->email; ?></td>
			<td></td>
		</tr>
		<tr>
			<th class="manage-column ss-list-width"><?php echo __("Sorat" , "yaldapoll") ; ?></th>
			<th class="manage-column ss-list-width"><?php echo __("Barkhord" , "yaldapoll") ; ?></th>
			<th class="manage-column ss-list-width"><?php echo __("Motabeghat" , "yaldapoll") ; ?></th>
			<th class="manage-column ss-list-width"><?php echo __("Motabeghat Graphic" , "yaldapoll") ; ?></th>
		</tr>
		<tr>
			<td class="manage-column ss-list-width"><?php echo $row->sorat; ?></td>
			<td class="manage-column ss-list-width"><?php echo $row->barkhord; ?></td>
			<td class="manage-column ss-list-width"><?php echo $row->motabeghat; ?></td>
			<td class="manage-column ss-list-width"><?php echo $row->motabeghat_graphic; ?></td>
		</tr>
		<tr>
			<th class="manage-column ss-list-width"><?php echo __("Karaei" , "yaldapoll") ; ?></th>
			<th class="manage-column ss-list-width"><?php echo __("Poshtibani" , "yaldapoll") ; ?></th>
			<th class="manage-column ss-list-width"><?php echo __("Zamanbandi" , "yaldapoll") ; ?></th>
			<th class="manage-column ss-list-width"><?php echo __("Amozesh" , "yaldapoll") ; ?></th>
		</tr>
		<tr>
			<td class="manage-column ss-list-width"><?php echo $row->karaei; ?></td>
			<td class="manage-column ss-list-width"><?php echo $row->poshtibani; ?></td>
			<td class="manage-column ss-list-width"><?php echo $row->zamanbandi; ?></td>
			<td class="manage-column ss-list-width"><?php echo $row->amoozesh; ?></td>
		</tr>
		<tr>
			<th class="manage-column ss-list-width"><?php echo __("ux" , "yaldapoll") ; ?></th>
			<th class="manage-column ss-list-width"><?php echo __("Ertebatat" , "yaldapoll") ; ?></th>

		</tr>
		<tr>
			<td class="manage-column ss-list-width"><?php echo $row->ux; ?></td>
			<td class="manage-column ss-list-width"><?php echo $row->ertebatat; ?></td>
		</tr>
		<tr>
			<th class="manage-column ss-list-width" colspan="4"><?php echo __("Description" , "yaldapoll") ; ?></th>
		</tr>
		<tr>
			<td class="manage-column ss-list-width" colspan="4"><?php echo $row->description; ?></td>

		</tr>
	</table>
	<?php
}
?>
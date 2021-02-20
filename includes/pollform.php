<?php
/**
 * poll form
 * @sicne 1.0
 * @created Majid Ahmadi
 */
function poll_form()
{
	?>
	<div class="ajax-form">
		<div class="container">
			<div class=row>
				<div class="col-md-12 col-md-offset-12 form-box">
					<h1><?php echo __("Poll Form Yalda" , "yaldapoll" ) ; ?></h1>
					<div id="message"></div>
					<div class="information">
						<h3><?php echo __("dear client" , "yaldapoll") ; ?></h3>
						<p><?php echo __("Customer Message" , "yaldapoll") ; ?></p>
					</div>
					<form action="" method="post" name="pollform" id="pollform" class="ajax"
					      enctype="multipart/form-data">

						<div class="row">
							<div class="col-md-6 col-sm-12 ">
								<label class="label"><?php echo __("Customer Name" , "yaldapoll" ) ; ?></label>
								<br>
								<input type="text" name="moshtari" class="form-control" required="true" id="moshtari"/>
							</div>
							<div class="col-md-6 col-sm-12 ">
								<label class="label"><?php echo __("Phone Number" , "yaldapoll" ) ; ?></label>
								<br>
								<input type="text" name="phonenumber" class="form-control" required="true" id="phonenumber"/>
							</div>
							<div class="col-md-6 col-sm-12 ">
								<label class="label"><?php echo __("Email" , "yaldapoll" ) ; ?></label>
								<br>
								<input type="email" name="email" class="form-control" id="email"/>
							</div>
							<div class="col-md-6 col-sm-12 ">
								<label class="label"><?php echo __("Agent" , "yaldapoll" ) ; ?></label>
								<br>
								<input type="text" name="agent" class="form-control" id="agent"/>
							</div>
							<div class="col-md-6 col-sm-12 ">
								<label class="label"><?php echo __("Company Name" , "yaldapoll" ) ; ?></label>
								<br>
								<input type="text" name="companyname" class="form-control" id="companyname"/>
							</div>
							<div class="col-md-6 col-sm-12 ">
								<label class="label"><?php echo __("Product Title" , "yaldapoll" ) ; ?></label>
								<br>
								<input type="text" name="product_type" class="form-control" id="product_type"/>
							</div>
							<div class="col-md-12 col-sm-12 ">
								<label class="label"><?php echo __("Sorat" , "yaldapoll" ) ; ?></label>
								<br>
								<div class="d-flex">
								<input type="radio" name="sorat" class="form-control-radio"  required="required" value="1"/>1
								<input type="radio" name="sorat" class="form-control-radio"  required="required" value="2"/>2
								<input type="radio" name="sorat" class="form-control-radio"  required="required" value="3"/>3
								<input type="radio" name="sorat" class="form-control-radio"  required="required" value="4"/>4
								<input type="radio" name="sorat" class="form-control-radio"  required="required" value="5"/>5
								</div>
							</div>
							<div class="col-md-12 col-sm-12 ">
								<label class="label"><?php echo __("Barkhord" , "yaldapoll" ) ; ?></label>
								<br>
								<div class="d-flex">
									<input type="radio" name="barkhord" class="form-control-radio"  required="required" value="1"/>1
									<input type="radio" name="barkhord" class="form-control-radio"  required="required" value="2"/>2
									<input type="radio" name="barkhord" class="form-control-radio"  required="required" value="3"/>3
									<input type="radio" name="barkhord" class="form-control-radio"  required="required" value="4"/>4
									<input type="radio" name="barkhord" class="form-control-radio"  required="required" value="5"/>5
								</div>
							</div>
							<div class="col-md-12 col-sm-12 ">
								<label class="label"><?php echo __("Motabeghat" , "yaldapoll" ) ; ?></label>
								<br>
								<div class="d-flex">
									<input type="radio" name="motabeghat" class="form-control-radio"  required="required" value="1"/>1
									<input type="radio" name="motabeghat" class="form-control-radio"  required="required" value="2"/>2
									<input type="radio" name="motabeghat" class="form-control-radio"  required="required" value="3"/>3
									<input type="radio" name="motabeghat" class="form-control-radio"  required="required" value="4"/>4
									<input type="radio" name="motabeghat" class="form-control-radio"  required="required" value="5"/>5
								</div>
							</div>
							<div class="col-md-12 col-sm-12 ">
								<label class="label"><?php echo __("Motabeghat Graphic" , "yaldapoll" ) ; ?></label>
								<br>
								<div class="d-flex">
									<input type="radio" name="motabeghatgr" class="form-control-radio"  required="required" value="1"/>1
									<input type="radio" name="motabeghatgr" class="form-control-radio"  required="required" value="2"/>2
									<input type="radio" name="motabeghatgr" class="form-control-radio"  required="required" value="3"/>3
									<input type="radio" name="motabeghatgr" class="form-control-radio"  required="required" value="4"/>4
									<input type="radio" name="motabeghatgr" class="form-control-radio"  required="required" value="5"/>5
								</div>
							</div>
							<div class="col-md-12 col-sm-12 ">
								<label class="label"><?php echo __("Karaei" , "yaldapoll" ) ; ?></label>
								<br>
								<div class="d-flex">
									<input type="radio" name="karaei" class="form-control-radio"  required="required" value="1"/>1
									<input type="radio" name="karaei" class="form-control-radio"  required="required" value="2"/>2
									<input type="radio" name="karaei" class="form-control-radio"  required="required" value="3"/>3
									<input type="radio" name="karaei" class="form-control-radio"  required="required" value="4"/>4
									<input type="radio" name="karaei" class="form-control-radio"  required="required" value="5"/>5
								</div>
							</div>
							<div class="col-md-12 col-sm-12 ">
								<label class="label"><?php echo __("Poshtibani" , "yaldapoll" ) ; ?></label>
								<br>
								<div class="d-flex">
									<input type="radio" name="poshtibani" class="form-control-radio"  required="required" value="1"/>1
									<input type="radio" name="poshtibani" class="form-control-radio"  required="required" value="2"/>2
									<input type="radio" name="poshtibani" class="form-control-radio"  required="required" value="3"/>3
									<input type="radio" name="poshtibani" class="form-control-radio"  required="required" value="4"/>4
									<input type="radio" name="poshtibani" class="form-control-radio"  required="required" value="5"/>5
								</div>
							</div>
							<div class="col-md-12 col-sm-12 ">
								<label class="label"><?php echo __("Zamanbandi" , "yaldapoll" ) ; ?></label>
								<br>
								<div class="d-flex">
									<input type="radio" name="zamanbandi" class="form-control-radio"  required="required" value="1"/>1
									<input type="radio" name="zamanbandi" class="form-control-radio"  required="required" value="2"/>2
									<input type="radio" name="zamanbandi" class="form-control-radio"  required="required" value="3"/>3
									<input type="radio" name="zamanbandi" class="form-control-radio"  required="required" value="4"/>4
									<input type="radio" name="zamanbandi" class="form-control-radio"  required="required" value="5"/>5
								</div>
							</div>
							<div class="col-md-12 col-sm-12 ">
								<label class="label"><?php echo __("Amozesh" , "yaldapoll" ) ; ?></label>
								<br>
								<div class="d-flex">
									<input type="radio" name="amozesh" class="form-control-radio"  required="required" value="1"/>1
									<input type="radio" name="amozesh" class="form-control-radio"  required="required" value="2"/>2
									<input type="radio" name="amozesh" class="form-control-radio"  required="required" value="3"/>3
									<input type="radio" name="amozesh" class="form-control-radio"  required="required" value="4"/>4
									<input type="radio" name="amozesh" class="form-control-radio"  required="required" value="5"/>5
								</div>
							</div>
							<div class="col-md-12 col-sm-12 ">
								<label class="label"><?php echo __("ux" , "yaldapoll" ) ; ?></label>
								<br>
								<div class="d-flex">
									<input type="radio" name="ux" class="form-control-radio"  required="required" value="1"/>1
									<input type="radio" name="ux" class="form-control-radio"  required="required" value="2"/>2
									<input type="radio" name="ux" class="form-control-radio"  required="required" value="3"/>3
									<input type="radio" name="ux" class="form-control-radio"  required="required" value="4"/>4
									<input type="radio" name="ux" class="form-control-radio"  required="required" value="5"/>5
								</div>
							</div>
							<div class="col-md-12 col-sm-12 ">
								<label class="label"><?php echo __("Ertebatat" , "yaldapoll" ) ; ?></label>
								<br>
								<div class="d-flex">
									<input type="radio" name="ertebatat" class="form-control-radio"  required="required" value="1"/>1
									<input type="radio" name="ertebatat" class="form-control-radio"  required="required" value="2"/>2
									<input type="radio" name="ertebatat" class="form-control-radio"  required="required" value="3"/>3
									<input type="radio" name="ertebatat" class="form-control-radio"  required="required" value="4"/>4
									<input type="radio" name="ertebatat" class="form-control-radio"  required="required" value="5"/>5
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<label class="label"><?php echo __("Description" , "yaldapoll" ) ; ?></label>
								<br>
								<textarea  name="description" class="form-control" id="description"></textarea>
							</div>
							<input type="hidden" name="action" value="send_form" style="display: none; visibility: hidden; opacity: 0;">

							<div class="submit-btn" style="margin-top: 20px">
								<button type="submit" class="btn btn-submit" ><?php echo __("Send Data" , 'yaldapoll') ; ?></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script>
        jQuery( 'form[name="pollform"]' ).on( 'submit', function() {
            var form_data = jQuery( this ).serializeArray();

            // Here we add our nonce (The one we created on our functions.php. WordPress needs this code to verify if the request comes from a valid source.
            form_data.push( { "name" : "security", "value" : ajax_nonce } );

            // Here is the ajax petition.
            jQuery.ajax({
                url : ajax_url, // Here goes our WordPress AJAX endpoint.
                type : 'post',
                data : form_data,
                success : function( response ) {
                    // You can craft something here to handle the message return
                    alert( response );
                },
                fail : function( err ) {
                    // You can craft something here to handle an error if something goes wrong when doing the AJAX request.
                    alert( "There was an error: " + err );
                }
            });

            // This return prevents the submit event to refresh the page.
            return false;
        });
	</script>
	<?php
}
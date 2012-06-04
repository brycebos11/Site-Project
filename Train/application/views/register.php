<div style="z-index: 0; width: 1096px; height: 766px; position: relative; top: 15px; left: 0px;">
	<div style="border-color: #000080; z-index: 1; border-style: double; border-width: thick; padding: 1px 4px; left: 5px; position: relative; float: left; width: 500px; top: 100px; background-color: #FFFFFF;">
		<p>
		<h3>Please enter all the information that is requested below and then click the "All Aboard" button 
		to punch your ticket to begin the adventure of your life!</h3>
		</p>
                
                
<script type="text/javascript">


  $(document).ready(function(){
      var validator = $("#myform").validate({
          rules: {
              email: {
                  required: true,
                  email: true
              }
          },
          messages: {
              email: {                 
                  required: "Please enter a valid email address"
              }
          },
          errorPlacement: function(error, element) {  
              error.appendTo( element.parent() );         
          }
      });
 });
</script>
                
			<?php $attributes = array('id' => 'myform');
                        echo form_open('register_control', $attributes); ?>
				<p>
					First Name:<br />
					<input name="first_name" type="text" id="first_name" value="<?php echo set_value('first_name'); ?>" size="30"/>
				</p>
				<p>
					Last Name:<br />
					<input name="last_name" type="text" id="last_name" value="<?php echo set_value('last_name'); ?>" size="30"/>
				</p>
				<p>
					City:<br />
					<input name="city" type="text" id="city" value="<?php echo set_value('city'); ?>" size="30"/>
				</p>
				<p>
					State:<br />
					<?php echo state_dropdown('AL'); ?>
				</p>
				<p>
					Zip Code:<br />
					<input name="zip_code" type="text" id="zip_code" value="<?php echo set_value('zip_code'); ?>" size="30"/>
				</p>
				<p>
					Username:<br />
					<input name="username" type="text" id="username" value="<?php echo set_value('username'); ?>" size="30"/>
				</p>
				<p>
					Email:<br />
					<input name="email" type="text" id="email" value="<?php echo set_value('email'); ?>" size="30" />
				</p>
				<p>
					Password (Length of 6 - 12 characters):<br />
					<input name="password" type="password" id="password" size="30"/>
				</p>
				<p>
					Password Confirmation:<br />
					<input name="password_conf" type="password" id="password_conf" size="30"/>
				</p>
				<input name="all_aboard" type="submit" value="All Aboard!" />
			</form>
	</div>
<?php

    if (validation_errors() == FALSE)
    {
        echo "";
    }
    else
    {
        echo '<div style="z-index: 1; border-style: double; border-width: thick; padding: 1px 4px; position: relative; float: right; width: 300px; color: red; top: 100px;">
		<h3>'.validation_errors().'</h3>
	</div>';
    }
?>
        
</div>
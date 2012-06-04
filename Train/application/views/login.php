<div style="z-index: 0; width: 1096px; height: 480px; position: relative; top: 15px; left: 0px;">
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

	<div style="border-color: #000080; z-index: 1; border-style: double; border-width: thick; padding: 1px 4px; position: relative; float: left; width: 300px; top: 100px; background-color: #FFFFFF;">
		<p>
		<h3>If you are already on board and would like to check back in to your seat, then please enter your
		 username and password below. Then click the "I'm Back!" button to have some more fun!</h3>
		</p>
			<?php echo form_open('login_control'); ?>
				<p>
					Username:<br />
					<input name="username_id" type="text" ID="username_id" value="<?php echo set_value('username_id'); ?>" size="30"/>
				</p>
				<p>
					Password:<br />
					<input name="password" type="password" ID="password" size="30"/>
				</p>
				<input name="im_back" type="submit" value="I'm Back!" />
			</form>
	</div>
</div>
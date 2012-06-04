<div style="z-index: 0; width: 1096px; height: 766px; position: relative; top: 15px; left: 0px;">
<div style="z-index: 1; border-style: none; border-width: 0px; padding: 1px 4px; position: relative; float: right; width: 300px; top: 100px; color: red;">
	<h3><?php echo validation_errors(); ?></h3>
</div>

<div style="z-index: 1; border-style: none; border-width: 0px; padding: 1px 4px; position: relative; float: left; width: 300px; top: 100px;">
	<p>
	<h3>To finish registration or login, please enter your username and password below.</h3>
	</p>
		<?php echo form_open('first_register_control'); ?>
			<p>
				Username:<br />
				<input name="username" type="text" ID="username" value="<?php echo set_value('username'); ?>" size="30"/>
			</p>
			<p>
				Password:<br />
				<input name="password" type="password" ID="password" value="<?php echo set_value('password'); ?>" size="30"/>
			</p>
			<input name="login" type="submit" value="Login" />
		</form>
</div>
</div>
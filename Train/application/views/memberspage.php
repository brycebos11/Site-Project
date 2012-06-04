<div style="background-color:white; height: 550px;">
    <div style="float: left; width: 700px; margin-left: 30px;">
	<h2>This is the members only home page!</h2>
	From here you can navigate to your database where all your train info is stored, you can check out the forums and catch up on the latest news and tips, or
	you can check out the classifieds section to see what's for sale!
	
	<br />
	<br />
	
	<h3>If you would like to go to your database, then click on <?php echo anchor('welcome_control', 'take me to my database!'); ?></h3>
	
	<br />
	<br />
	
	<h3>If you would like to go to the forums, then click <?php echo anchor('welcome_control', 'to the forums I go!'); ?></h3>
	
	<br />
	<br />
	
	<h3>If you would like to go to the classifieds section, then click on <?php echo anchor('welcome_control', 'let\'s see what\'s for sale!'); ?></h3>

	<br />
	<br />
	
	<h2><a href="index.php/welcome_control">Logout</a></h2>
    </div>
        <div style="float: right; top: 0px; margin-right: 20px; margin-top: 20px;">
            <h2>Look here for upcoming events!</h2>
            <p></p>
            <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;height=400&amp;wkst=1&amp;bgcolor=%23ccccff&amp;src=brycebos11%40gmail.com&amp;color=%23182C57&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " width="600" height="400" frameborder="0" scrolling="no"></iframe>
        </div>
</div>
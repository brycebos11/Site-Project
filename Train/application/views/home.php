	<script type='text/javascript' src='scripts/silverlight.js'></script>
	<bgsound loop="-1" src="multimedia/Train%20sound.wav" />

<div id="main">
	<div style="float: left; margin: 10px 0 10px 25px;" id="silverlightcontainer">
		<object data="data:application/x-silverlight-2," type="application/x-silverlight-2" width="640" height="480">
			<param name="source" value="multimedia/Train.xap"/>
			<param name="background" value="white" />
			<param name="minRuntimeVersion" value="2.0.31005.0" />
			<param name="autoUpgrade" value="true" />
			<a href="http://go.microsoft.com/fwlink/?LinkID=124807" style="text-decoration: none;">
				<img src="http://go.microsoft.com/fwlink/?LinkId=108181" alt="Get Microsoft Silverlight" style="border-style: none;"/>
			</a>
		</object>
		<iframe id="_sl_historyFrame" style='visibility:hidden;height:0;width:0;border:0px;'></iframe>
	</div>

	<div style="float: left;" id="container">
		<h1>Here you will find everything you want about model railroading!</h1>
		<div id="body">
			<p>If you would like to register to become a member of this site, then click on <?php echo anchor('register_control', 'I want to register now!'); ?></p>
	
	
			<p>If you are already a member of this site and would like to login, then click on <?php echo anchor('login_control', 'I want to log in!'); ?></p>
		</div>
	
	</div>
	<div style="float: left;" id="container">
		<h1>What are some of the things I will be able to do as a member of this site?</h1>
		<div id="body">
			
			<p>As a member of this great site, you will: 
				<ul>
					<li>Have access to your very own database that will allow you to track your model railroading trains.</li>
					<li>Become a member of a forum where you can discuss anything related to trains.</li>
					<li>Post or search ads in the classifieds section of the site.</li>
				</ul>
			</p>
		
		</div>
	
		
	</div>
</div>

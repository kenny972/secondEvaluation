<?php
  include("template/header.php") 
 ?>


		<!-- data recovery from the page registration -->
	<p> Welcome, Your account has been successfully created.</p>
	<p>You are : 
		<?php echo $_POST ['FirstName'] . ' ' . $_POST['LastName'];  
		?> 
	</p>
	<br><br>
	<!-- <p>
		Now, please  <a href="indexVue.php">  click here </a> to return to the home page and enter your email address, as well as your password in the related part.
	</p> -->



	<footer>
		
	</footer>	
		<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>
		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
		(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='https://www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		ga('create','UA-XXXXX-X','auto');ga('send','pageview');
		</script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>
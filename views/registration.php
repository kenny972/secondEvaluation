
<!-- include the header on my pages -->
<?php
  include("template/header.php") 
 ?>




<br><br><br>

	<!-- div with the form -->
	<div class="Registration" align="center">
		<h3 style="color: #E87D00;background-color: #424242;">Registration
		</h3>

					<br>

		<form method="POST" action="yourAccount.php">
			<table>
					<p>
						<input type="text" name="FirstName" placeholder="First Name">
					</p>

					<p>
						<input type="text" name="LastName" placeholder="Last Name">
					</p>

					<p>
						<input type="password" name="password" placeholder="Password">
					</p>

					<p>
						<input type="Password" name="password2" placeholder="Confirm your password">
					</p>

					<p>
						<input class="btn btn-primary" type="submit" name="" value="I Confirm my Registration">
					</p>
			</table>	
		</form>
									<br>
	</div>




	<footer></footer>	
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
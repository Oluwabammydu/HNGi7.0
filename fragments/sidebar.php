<section id="sidebar">
	<div id="upper">
		<h5 id="admin-badge">ADMINISTRATOR</h5>
		<img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722683/mentors-first_qlquq9.png" height="110px">
		<div id="username"><?php echo $_SESSION["fullname"]; ?></div>
	</div>
	<hr id="hr1">
	<nav id="lower">
		<a href="dashboard.php">Dashboard</a>
		<hr id="hr2">
		<a href="registered_mentors.php">Mentors</a>
		<hr id="hr2">
		<a href="registered_interns.php">Interns</a>

        <hr id="hr2">
        <a href="news_update.php">News Update</a> <!--Added news update to admin menu-->

		<hr id="hr2">
<<<<<<< HEAD
<<<<<<< HEAD
		<?php 
=======
		<a href="registered_sponsors.php">Sponsors</a>
		<hr id="hr2">
		<?php
>>>>>>> f1394d23e52a617d8e07fbfac93253a57ca883a1
=======
		<a href="registered_sponsors.php">Sponsors</a>
		<hr id="hr2">
		<?php
>>>>>>> 4e283c1de9e75b8cdb82655a22aa05c86c1c18d1
			if($_SESSION["role"] == 1) {
			?>
				<a href="admins.php">Admins</a>
			<?php
			}
		?>
		
		<!-- <select>
			<option selected="selected" disabled="disabled">Overview</option>
			<option value="0">Mentors</option>
			<option value="1">Users</option>
		</select>
		<a href="#">Advanced</a> -->
		<hr id="hr2">
		<a href="./logout.php">Logout</a>
	</nav>
</section>

<?php
	include("functions.php");
	// cacheVideoData();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
		<script src="../js/scripts.js" type="text/javascript"></script>
    <title> Calendar Demo </title>
	</head>
	<body>
		<div class="form-inline" id="titleBar" style="text-align: center">
			<a id="prev-month" class="btn btn-default" href="<?php echo getPrevMonthUrl(); ?>" role="button"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<h2 id="monthName"> <?php echo getMonthName(); ?> </h2>
			<a id="next-month" class="btn btn-default" href="<?php echo getNextMonthUrl(); ?>" role="button"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>

    <div class="container">
			<?php getMonth() ?>
    </div>

		<?php if (getLastVideoDay() != 0) include("modal.php") ?>
		<!-- <script async defer src="//platform.instagram.com/en_US/embeds.js"></script> -->
    <script src="https://player.vimeo.com/api/player.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
	</body>
</html>

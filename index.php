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
		<?php
			$webdev_class = "active";
			include("navbar.php");
		?>

      <div class="container" style="margin-bottom: 20px;">
        <div class="col-xs-1 col-sm-offset-4 col-xs-offset-2 text-center"><a id="prev-month" class="btn btn-default" href="<?php echo getPrevMonthUrl(); ?>" role="button"><span class="glyphicon glyphicon-chevron-left"></span></a></div>
        <div class="col-sm-3 col-xs-6"><h2 class="text-center" id="monthName"> <?php echo getMonthName(); ?> </h2></div>
        <div class="col-xs-1 text-center"><a id="next-month" class="btn btn-default" href="<?php echo getNextMonthUrl(); ?>" role="button"><span class="glyphicon glyphicon-chevron-right"></span></a></div>
      </div>

      <div class="container">
				<?php getInstaMonth() ?>
      </div>

			<?php if (getLastVideoDay() != 0) include("modal.php") ?>

    </div>
		<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
	</body>
</html>

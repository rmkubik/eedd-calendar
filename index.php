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
			include("../navbar.php");
		?>

      <div class="container" style="margin-bottom: 20px;">
        <div class="col-xs-1 col-sm-offset-4 col-xs-offset-2 text-center"><a id="prev-month" class="btn btn-default" href="<?php echo getPrevMonthUrl(); ?>" role="button"><span class="glyphicon glyphicon-chevron-left"></span></a></div>
        <div class="col-sm-3 col-xs-6"><h2 class="text-center" id="monthName"> <?php echo getMonthName(); ?> </h2></div>
        <div class="col-xs-1 text-center"><a id="next-month" class="btn btn-default" href="<?php echo getNextMonthUrl(); ?>" role="button"><span class="glyphicon glyphicon-chevron-right"></span></a></div>
      </div>

      <div class="container">
				<?php getInstaMonth() ?>
      </div>

      <div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
						 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						 <!-- <div class="modal-title">
							 <a class="" href="#video-carousel" role="button" onclick="slideNext()" data-slide="next">
								 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								 <span class="sr-only">Next</span>
							 </a>
							 <h4><?php echo getModalTitle(); ?></h4>
						 </div> -->
						 <div class="form-inline" style="text-align: center">
							 <a id="next-month" class="btn btn-default" href="#video-carousel" role="button" onclick="slidePrev()" data-slide="prev">
								 <span class="glyphicon glyphicon-chevron-left"></span>
								 <span class="sr-only">Previous</span>
							 </a>
							 <h4 class="modal-title"><?php echo getModalTitle(); ?></h4>
							 <a id="next-month" class="btn btn-default" href="#video-carousel" role="button" onclick="slideNext()" data-slide="next">
								 <span class="glyphicon glyphicon-chevron-right"></span>
								 <span class="sr-only">Next</span>
							 </a>
						 </div>
					 </div>
           <div class="modal-body">
            <div id="video-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
              <?php getInstaModal() ?>
              </div>
            </div>
          </div>
           <!-- <div class="modal-footer">
             <a class="btn btn-default" href="#" role="button"><span class="glyphicon glyphicon-thumbs-up"></span></a>
             <a class="btn btn-default" href="#" role="button"><span class="glyphicon glyphicon-thumbs-up"></span></a>
             <a class="btn btn-default" href="#" role="button"><span class="glyphicon glyphicon-thumbs-up"></span></a>
           </div> -->
         </div><!-- /.modal-content -->
       </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    </div>
		<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
	</body>
</html>

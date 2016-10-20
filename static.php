<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <title> Calendar Demo </title>
	</head>
	<body>
    <nav class="navbar navbar-default">
       <ul class="nav navbar-nav">
         <li><a href="../index.html">Home</a></li>
         <li><a href="/null2full/index.html">Pokemon</a></li>
         <li class="active"><a href="/calendar/index.php">Calendar</a></li>
         <li><a href="/boardgame/index.html">Board Game</a></li>
       </ul>
    </nav>
      <div class="container" style="margin-bottom: 20px;">
        <div class="col-xs-1 col-sm-offset-4 col-xs-offset-2 text-center"><a class="btn btn-default" href="#" role="button"><span class="glyphicon glyphicon-chevron-left"></span></a></div>
        <div class="col-sm-2 col-xs-6"><h2 class="text-center" id="monthName">January</h2></div>
        <div class="col-xs-1 text-center"><a class="btn btn-default" href="#" role="button"><span class="glyphicon glyphicon-chevron-right"></span></a></div>
      </div>
    <div class="container">
      <div class="row">
        <div class="col7-sm-1 col7-sm-offset-5"><div class="calendarDay"><a data-toggle="modal" data-target="#myModal"><img src="http://lorempixel.com/640/640/people/"/><div class="day1 overlay"></div></a></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/sports/"/><div class="day2 overlay"></div></div></div>
      </div>
      <div class="row">
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/nightlife/"/><div class="day3 overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/animals/"/><div class="day4 overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/city/"/><div class="overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/food/"/><div class="overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/transport/"/><div class="overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/nature/"/><div class="overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/business/"/><div class="overlay"></div></div></div>
      </div>
      <div class="row">
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/fashion/"/><div class="overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/technics/"/><div class="overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/cats/"/><div class="overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/city/"/><div class="overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/food/"/><div class="overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/transport/"/><div class="overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/nightlife/"/><div class="overlay"></div></div></div>
      </div>
      <div class="row">
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/people/"/><div class="overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/people/"/><div class="overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/people/"/><div class="overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/people/"/><div class="overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/people/"/><div class="overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/people/"/><div class="overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/people/"/><div class="overlay"></div></div></div>
      </div>
      <div class="row">
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/people/"/><div class="overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/people/"/><div class="overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/people/"/><div class="overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/people/"/><div class="overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/people/"/><div class="overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/people/"/><div class="overlay"></div></div></div>
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/people/"/><div class="overlay"></div></div></div>
      </div>
      <div class="row">
        <div class="col7-sm-1"><div class="calendarDay"><img src="http://lorempixel.com/640/640/people/"/><div class="overlay"></div></div></div>
      </div>

      <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <h4 class="modal-title">January 1st</h4>
           </div>
           <div class="modal-body">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/101860081" name="January 1st"></iframe>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque malesuada semper suscipit. Curabitur rutrum imperdiet mauris, nec blandit augue consectetur in. Integer congue risus ac tempor sagittis. Cras eget porttitor eros.
                  </p>
                </div>
                <div class="item">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/101860081" name="January 2nd"></iframe>
                  </div>
                  <p>
                    Nullam tristique consequat nibh vitae lobortis. Quisque ornare, erat id mollis condimentum, nunc arcu lobortis nulla, in consequat erat nisl et dolor. In gravida sagittis nisi, sed blandit nisi eleifend vitae.
                  </p>
                </div>
                <div class="item">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/101860081" name="January 3rd"></iframe>
                  </div>
                  <p>
                    Pellentesque ac mauris tincidunt leo dictum laoreet. Proin ac quam sit amet metus fringilla sodales eu ut mauris. Vestibulum vel nisi ac leo consectetur iaculis.
                  </p>
                </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
           <div class="modal-footer">
             <a class="btn btn-default" href="#" role="button"><span class="glyphicon glyphicon-thumbs-up"></span></a>
             <a class="btn btn-default" href="#" role="button"><span class="glyphicon glyphicon-thumbs-up"></span></a>
             <a class="btn btn-default" href="#" role="button"><span class="glyphicon glyphicon-thumbs-up"></span></a>
           </div>
         </div><!-- /.modal-content -->
       </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    </div>
		<script type="text/javascript" src="js/scripts.js"></script>
	</body>
</html>

<!DOCTYPE html>
<html>
	<head>
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <title> Calendar Admin </title>
  </head>
  <body>
    <form method="post">
      <?php updateJSON(); ?>
      <?php generateTable(); ?>
    </form>
  </body>
  <?php
  function generateTable() {
    $monthNames = ["jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec"];
    $string = file_get_contents("data/months.json");
    $month_data = json_decode($string, true);
    echo '<table class="table table-striped">';
    // echo '<tr><th> Day </th><th> Links </th><th> Description </th><th> Update </th> </tr>';
		echo '<tr><th> Day </th><th> Vimeo ID </th><th> Update </th> </tr>';
    for ($month = 0; $month < 12; $month++) {
      for ($day = 1; $day <= $month_data[$monthNames[$month]]["days"]; $day++) {
        echo '<tr>';
        echo "<td>" . $monthNames[$month] . "-$day</td>";
				echo "<td><label>Viemo ID:</label><input value=\"" . $month_data[$monthNames[$month]][$day]['vid_id'] . "\"";
        echo "class=\"form-control\" name=\"" . $monthNames[$month] . "-$day-vid_id\"></input>";
        // echo "<td><label>Thumbnail:</label><input value=\"" . $month_data[$monthNames[$month]][$day]['thumbnail'] . "\"";
        // echo "class=\"form-control\" name=\"" . $monthNames[$month] . "-$day-thumbnail\"></input>";
        // echo "<label>Video:</label><input value=\"" . $month_data[$monthNames[$month]][$day]['video'] . "\"";
        // echo "class=\"form-control\" name=\"" . $monthNames[$month] . "-$day-video\"></input></td>";
        // echo "<td><textarea class=\"form-control\" rows=\"5\" name=\"" . $monthNames[$month] . "-$day-desc\">" . $month_data[$monthNames[$month]][$day]['desc'] . "</textarea></td>";
        echo "<td><button type=\"submit\" class=\"btn btn-default\" name=\"" . $monthNames[$month] . "-$day-submit\">Update</buton></td>";
        echo '</tr>';
      }
    }
    echo '</table>';
  }
  function updateJSON() {
    $monthNames = ["jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec"];
    if (isset($_POST) && !empty($_POST)) {
      $string = file_get_contents("data/months.json");
      $month_data = json_decode($string, true);
      for ($month = 0; $month < 12; $month++) {
				$lastDay = 0;
        for ($day = 1; $day <= $month_data[$monthNames[$month]]["days"]; $day++) {
          //if (array_key_exists($monthNames[$month] . "-$day-submit",$_POST)) {
						$month_data[$monthNames[$month]][$day]["vid_id"] = $_POST[$monthNames[$month] . "-$day-vid_id"];
						if ($month_data[$monthNames[$month]][$day]["vid_id"] != "") {
							if ($day > $lastDay)
								$lastDay = $day;
						}
            // $month_data[$monthNames[$month]][$day]["thumbnail"] = $_POST[$monthNames[$month] . "-$day-thumbnail"];
            // $month_data[$monthNames[$month]][$day]["video"] = $_POST[$monthNames[$month] . "-$day-video"];
            // $month_data[$monthNames[$month]][$day]["desc"] = $_POST[$monthNames[$month] . "-$day-desc"];
          //}
        }
				$month_data[$monthNames[$month]]["lastDay"] = $lastDay;
      }
      $month_json = json_encode($month_data);
      file_put_contents("data/months.json", $month_json);
    }
  }
  ?>
</html>

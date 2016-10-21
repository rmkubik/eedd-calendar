<?php
  function getMonthName() {
    $month = "";
    if (isset($_GET['m']) && !empty($_GET['m'])) {
      switch ($_GET['m']) {
        case "jan":
          $month = "January";
          break;
        case "feb":
          $month = "February";
          break;
        case "mar":
          $month = "March";
          break;
        case "apr":
          $month = "April";
          break;
        case "may":
          $month = "May";
          break;
        case "jun":
          $month = "June";
          break;
        case "jul":
          $month = "July";
          break;
        case "aug":
          $month = "August";
          break;
        case "sep":
          $month = "September";
          break;
        case "oct":
          $month = "October";
          break;
        case "nov":
          $month = "November";
          break;
        case "dec":
          $month = "December";
          break;
        default:
          $month = date('F');
          break;
      }
    } else {
      $month = date('F');
    }
    return $month;
  }
  function getPrevMonthUrl() {
    $currentMonth = "";
    if (isset($_GET['m']) && !empty($_GET['m'])) {
      $currentMonth = $_GET['m'];
    } else {
      $currentMonth = date('M');
    }
    return "?m=" . strtolower(Date('M', strtotime($currentMonth . " last month")));
  }
  function getNextMonthUrl() {
    $currentMonth = "";
    if (isset($_GET['m']) && !empty($_GET['m'])) {
      $currentMonth = $_GET['m'];
    } else {
      $currentMonth = date('M');
    }
    return "?m=" . strtolower(Date('M', strtotime($currentMonth . " next month")));
  }
  function getInstaMonth() {
    $currentMonth = getCurrentMonth();
    $month_data = getMonthData();

    $days = 1;
    $first_day = true;
    while ($days < $month_data[$currentMonth]["days"]) {
      echo '<div class="row">';
      $i = 1;
      if ($first_day) {
        $i = $month_data[$currentMonth]["indent"] + 1;
      }
      for (; $i <= 7 && $days <= $month_data[$currentMonth]["days"]; $i++, $days++) {
        echo '<div class="col7-sm-1';
        if ($first_day) {
          echo " col7-sm-offset-" . $month_data[$currentMonth]["indent"];
          $first_day = false;
        }
        echo '">';
        echo '<div class="calendarDay">';

        $instaAddress = getInstaThumbnailUrl($month_data[$currentMonth][$days]["vid_id"]);
        if ($instaAddress != "") {
          echo '<a data-toggle="modal" data-target="#videoModal" onclick="openModal(\'';
          echo $currentMonth;
          echo '\', ';
          echo $days;
          echo ')">';
          echo '<img src="';
          echo $instaAddress;
          echo '" data-target="#video-carousel" data-slide-to="';
          echo $days - 1;
          echo '"/>';
          echo '<div class="day overlay"';
          echo ' data-target="#video-carousel" data-slide-to="';
          echo $days - 1;
          echo '">' . $days . '</div></a>';
        } else {
          echo '<div class="day">' . $days . '</div>';
        }
        echo '</div></div>';
      }
      echo '</div>';
    }
  }
  function getMonth() {
    $currentMonth = getCurrentMonth();
    $month_data = getMonthData();

    $days = 1;
    $first_day = true;
    while ($days < $month_data[$currentMonth]["days"]) {
      echo '<div class="row">';
      $i = 1;
      if ($first_day) {
        $i = $month_data[$currentMonth]["indent"] + 1;
      }
      for (; $i <= 7 && $days <= $month_data[$currentMonth]["days"]; $i++, $days++) {
        $video_data = getVideoData($month_data[$currentMonth][$days]["vid_id"]);
        echo '<div class="col7-sm-1';
        if ($first_day) {
          echo " col7-sm-offset-" . $month_data[$currentMonth]["indent"];
          $first_day = false;
        }
        echo '">';
        echo '<div class="calendarDay"><a data-toggle="modal" data-target="#videoModal" onclick="openModal(\'';
        echo $currentMonth;
        echo '\', ';
        echo $days;
        echo ')"><img src="';
        echo $video_data[0]["thumbnail_medium"];
        echo '" class="';
        echo calcAspectRatio($video_data[0]["width"], $video_data[0]["height"]) > 0 ? "crop-horizontal" : "crop-vertical";
        echo '" data-target="#video-carousel" data-slide-to="';
        echo $days - 1;
        echo '"/>';
        echo '<div class="day' . $days . ' overlay"';
        echo ' data-target="#video-carousel" data-slide-to="';
        echo $days - 1;
        echo '"></div></a></div></div>';
        }
      echo '</div>';
      }
    }
  function getInstaModal() {
    $currentMonth = getCurrentMonth();
    $month_data = getMonthData();
    $first_day = true;
    for ($i = 1; $i <= $month_data[$currentMonth]["days"]; $i++) {
      if (isset($month_data[$currentMonth][$i]["vid_id"]) && !empty($month_data[$currentMonth][$i]["vid_id"])) {
        echo '<div id="' . $currentMonth . $i . '"';
        echo 'class="item';
        if ($first_day) {
          echo ' active';
          $first_day = false;
        }
        echo '">';
        echo getInstaEmbedScript($month_data[$currentMonth][$i]["vid_id"], $currentMonth . $i);
        echo '</div>';
      }
    }
  }
  function getModal() {
    $currentMonth = getCurrentMonth();
    $month_data = getMonthData();
    $first_day = true;
    for ($i = 1; $i <= $month_data[$currentMonth]["days"]; $i++) {
      if (isset($month_data[$currentMonth][$i]["vid_id"]) && !empty($month_data[$currentMonth][$i]["vid_id"])) {
        $video_data = getVideoData($month_data[$currentMonth][$i]["vid_id"]);
        echo '<div class="item';
        if ($first_day) {
          echo ' active';
          $first_day = false;
        }
        echo '">';
        echo '<div class="embed-responsive embed-responsive-16by9">';
        echo '<iframe class="embed-responsive-item" src="';
        echo getVideoPlayerUrl($month_data[$currentMonth][$i]["vid_id"]);
        echo '" name="January 1st" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
        echo '</div>';
        echo '<p>';
        echo $video_data[0]["description"];
        echo '</p>';
        echo '</div>';
      }
    }
  }
  function getModalTitle() {
    $output = getMonthName() . " ";
    if (isset($_GET['d']) && !empty($_GET['d'])) {
      switch ($_GET["d"]) {
        case 1:
        case 21:
        case 31:
          $output .= $_GET["d"] . "st";
          break;
        case 2:
        case 22:
          $output .= $_GET["d"] . "nd";
          break;
        case 3:
        case 23:
          $output .= $_GET["d"] . "rd";
          break;
        default:
          $output .= $_GET["d"] . "th";
          break;
      }
    } else {
      $output .= date('jS');
    }
    return $output;
  }
  function cacheVideoData() {
    $month_data = getMonthData();
    $currentMonth = getCurrentMonth();
    $days = 1;
    while ($days <= $month_data[$currentMonth]["days"]) {
      $vid_id = $month_data[$currentMonth][$days++]["vid_id"];
      if (isset($vid_id) && !empty($vid_id)) {
        if (!isset($_COOKIE[$vid_id]) || empty($_COOKIE[$vid_id])) {
          $video_data = getVideoData($vid_id);
          $vimeo_address = file_get_contents("https://vimeo.com/api/v2/video/" . $vid_id . ".json");
          setcookie($vid_id, $vimeo_address, time() + 2678000); //set a cookie with the id's videos, expires in one month
        }
        // echo "<p style=\"color: red;\">" . $_COOKIE[$vid_id] . "</p><p style=\"color: blue;\">";
        // print_r(json_decode($_COOKIE[$vid_id], true));
        // echo "</p>";
        // $test = json_decode($_COOKIE[$vid_id], true);
        // // $test = json_decode($test,true);
        // echo $test[0]["id"];
      }
    }
  }
  function getVideoData($vid_id) {
    //if not valid vid_id return default data
    if (isset($vid_id) && !empty($vid_id)) {
      if (isset($_COOKIE[$vid_id])) {
        return json_decode($_COOKIE[$vid_id], true);
      } else { //if no cookie set for vid_id, query vimeo api
        $vimeo_address = file_get_contents("https://vimeo.com/api/v2/video/" . $vid_id . ".json");
        return json_decode($vimeo_address, true);
      }
    } else {
      return array(array("description" => "", "thumbnail_medium" => "images/empty.svg", "width" => 1, "height" => 1));
    }
  }
  function getCurrentMonth() {
    if (isset($_GET['m']) && !empty($_GET['m'])) {
      return $_GET['m'];
    } else {
      return strtolower(date('M'));
    }
  }
  function getMonthData() {
    $string = file_get_contents("data/months.json");
    return json_decode($string, true);
  }
  function getVideoPlayerUrl($vid_id) {
    if (isset($vid_id) && !empty($vid_id)) {
      return "https://player.vimeo.com/video/$vid_id";
    } else {
      return "";
    }
  }
  function calcAspectRatio($width, $height) {
    $ratios = array("1.77"=>"16.9","1.33"=>"4:3","1"=>"1:1","0.8"=>"4:5","0.56"=>"9:16");
    return $width / $height;
  }
  function getInstaThumbnailUrl($vid_id) {
    //if not valid vid_id return default data
    if (isset($vid_id) && !empty($vid_id)) {
      return 'https://instagram.com/p/' . $vid_id . '/media/?size=t"';
    } else {
      //set default image here
      return "";
    }
  }
  function getInstaEmbedScript($vid_id, $div_id) {
    $script = "";
    if (isset($vid_id) && !empty($vid_id)) {
      $script = '<script>
      var URL = "https://api.instagram.com/oembed?url=http://instagr.am/p/' . $vid_id . '/&OMITSCRIPT=true";
			$.ajax({
				url: URL,
				dataType: "jsonp",
				cache: "false",
				success: function(response) {
					document.getElementById("' . $div_id . '").innerHTML = response.html;
					instgrm.Embeds.process();
				}
			});
      </script>';
    }
    return $script;
  }
 ?>

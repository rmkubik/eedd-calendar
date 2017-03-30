$("#videoModal").bind('slide.bs.carousel', function (event) {
  //Change the title of the slider ot the appropriate day on slide event
  var to = $(event.relatedTarget).index();
  // var match = /\?m=(.*)/.exec(window.location.search);
  var _GET = GETParams();
  var month;
  if (_GET["m"] == null)
    month = new Date().getMonth();
  else
    month = _GET["m"];
  $(".modal-title").html(formatDate(month, (to + 1)));
});
function formatDate(month, day) {
  /* Format a month day pair to the appropriate english syntax
      Month can be in either "mon" or 0-11 syntax */
  var output = "";
  var monthNames = {
    0: "January",
    "jan": "January",
    1: "February",
    "feb": "February",
    2: "March",
    "mar": "March",
    3: "April",
    "apr": "April",
    4: "May",
    "may": "May",
    5: "June",
    "jun": "June",
    6: "July",
    "jul": "July",
    7: "August",
    "aug": "August",
    8: "September",
    "sep": "September",
    9: "October",
    "oct": "October",
    10: "November",
    "nov": "November",
    11: "December",
    "dec": "December"
  }
  output += monthNames[month] + " ";
  switch (day) {
    case 1:
    case 21:
    case 31:
      output += day + "st";
      break;
    case 2:
    case 22:
      output += day + "nd";
      break;
    case 3:
    case 23:
      output += day + "rd";
      break;
    default:
      output += day + "th";
      break;
  }
  return output;
}
function slidePrev() {
  //go to prev month is this is the first day in a month
  if ($('div.active').index() + 1 == 1)
    window.location.replace($("#prev-month").attr("href") + "&d=L");
  new Vimeo.Player($("div.active iframe")[0]).pause();
}
function slideNext() {
  //go to next month is this is the last day in a month
  if ($(".item").length == $('div.active').index() + 1)
    window.location.replace($("#next-month").attr("href") + "&d=1");
  new Vimeo.Player($("div.active iframe")[0]).pause();
}
$(window).load(function(){
  //if modal was open previously, reopen it now
  var _GET = GETParams();
  if (_GET["d"] != null)
    $('#videoModal').modal('show');
});
function GETParams() {
  //get the GET parameters of the current url
  //author: Ates Goral
  var $_GET = {};
  document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    function decode(s) {
        return decodeURIComponent(s.split("+").join(" "));
    }
    $_GET[decode(arguments[1])] = decode(arguments[2]);
  });
  return $_GET;
}
function openModal(month, day) {
  $(".modal-title").html(formatDate(month, day));
}

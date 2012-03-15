<!DOCTYPE html>
<html>
<head>
	<title>Chris &hearts; Amy &#10057; <?= raft("page.title") ?></title>
	
	<!-- UTF-8 (Unicode) encoding -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <!-- HTML5 shim, for IE6-8 support of HTML elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/baskerville/stylesheet.css" />
	
	<link rel="stylesheet" href="css/default.css" type="text/css" />
</head>
<body>

<div class="container">

  <header class="row">
    <div class="span5">
      <div id="hd-logo" style="float:right;margin-right:-30px;">
        Amy
        <small>Ogan</small>
      </div>
    </div>
    <div id="hd-mark" class="span2">
      <img src="img/hd-mark.png" />
    </div>
    <div class="span5">
      <div id="hd-logo" style="float:left;margin-left:-30px;">
        Chris
        <small>Harrison</small>
      </div>
    </div>
  </header>
  
  <nav class="row">
    <div class="span12">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="venue.html">Venue</a></li>     
        <li><a href="schedule.html">Schedule</a></li>
        <li><a href="activities.html">Activities</a></li>
        <li><a href="history.html">History</a></li>
        <li><a href="hotel.html">Hotel Info</a></li>
        <li><a href="theme.html">Theme</a></li>
        <li><a href="registry.html">Registry</a></li>
        <li><a href="roles.html">Roles</a></li>
      </ul>
    </div>
  </nav>
  
  <div class="row">
    <div class="span12" id="content">
      <?= raft("page.content") ?>
    </div>
  </div>
  
  <footer>
    &nbsp;
  </footer>

</div>

<!-- Javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
  (function ($, undefined) {
    // Resizes the content's minimum height accordingly, 
    // so that the footer remains at the bottom.
    function resizeHeight() {
      var hHeader = $('header').outerHeight()
        , hNav = $('nav').outerHeight()
        , hContent = $('#content').outerHeight()
        , hFooter = $('footer').outerHeight()
        , hWindow = $(window).outerHeight()
        , hTotal = hHeader + hNav + hContent + hFooter;

      if (hTotal < hWindow) {
        var h = hWindow - hHeader - hNav - hFooter;
        $('#content').css('min-height', h);
      }
    }
    
    // Resizes the width of the navigation according to its content links,
    // so that the links are perfectly centered on the page.
    function resizeNavigation() {
      var width = 0;
      
      $('nav a').each(function () {
        width += $(this).outerWidth();
      });
      
      $('nav ul').width(width);
    }
    
    // Highlights the current link in the navigation.
    function highlightCurrent() {
      $('nav a').each(function () {
        var $this = $(this)
          , href = $this.attr('href')
          , pathname = window.location.pathname
          , filename = pathname.substr(pathname.lastIndexOf('/') + 1);

        if ((filename.length == 0 && href == 'index.html')
            || href == filename) {
          $this.addClass('selected');
        }
      });
    }

    $(document).ready(function() {
      resizeHeight();
      resizeNavigation();
      highlightCurrent();
    });
    $(window).resize(resizeHeight);
  } (jQuery));
</script>
</body>
</html>

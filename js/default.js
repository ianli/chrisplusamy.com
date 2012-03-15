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
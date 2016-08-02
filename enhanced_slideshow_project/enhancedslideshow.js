(function ($) {
  Drupal.behaviors.enhancedSlideshow = {
    attach: function (context, settings) {
      window.onhashchange = function() {
        ga('send', 'pageview', location.pathname + location.search + location.hash);
        oas_tag.reloadAds();
      }
      $('ul.pager li.pager-previous a').text('‹');    
      $('ul.pager li.pager-next a').text('›');
    }
  };
}(jQuery));
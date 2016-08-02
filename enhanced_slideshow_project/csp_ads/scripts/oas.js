/**
 * Finds the screen context based on device width.
 */
function csp_ads_screen_context() {

  // Determine if the user is on a mobile device.
  var mobile_device = navigator.userAgent.match(/(iPhone|iPod|Android|BlackBerry)/);

  // Get the screen height/width or browser height/width. This depends
  // on the mobile device variable set above.
  if (mobile_device) {
    screen_width = screen.width;
  }
  else {
    screen_width = jQuery(window).width();
  }
  
  // Statically set the mobile breakpoint. Any devices which have higher than a 1
  // pixel ratio will be treated like normal devices.  For example the iPad retina
  // has a resolution of 1536 pixels with a 2 pixel ratio.  At a 1 pixel ratio an
  // iPad retina display is 768px.
  mobile_break = 767;

  // Return either desktop or mobile based on browser width.
  // Special behavior for homepage
  if(window.location.pathname == '/') {
    return csp_ads_screen_context_front(screen_width);
  }
  else if (screen_width > mobile_break) {
    return 'desktop';
  }
  else {
    return 'mobile';
  }
}

function csp_ads_screen_context_front(screen_width) {
  // >991: "x01,x02,x04,x05,x06,x11,x13"
  // 991-768: "x19,x39,x04,x05,x06,x11,x13"
  // <=767: "x21,x22,x24,x25,x26,x31"
  var desktop = 992;
  var mobile = 767;

  if(desktop > screen_width && screen_width > mobile) {
    Drupal.settings.oas['front-tablet'] = ["x19","x39","x04","x05","x06","x11","x13"];
    return 'front-tablet';
  } 
  else if (screen_width > mobile) {
    return 'desktop';
  }
  else {
    return 'mobile';
  }
}

/**
 * Determines what positions should be loaded.
 */
function csp_ads_positions() {
  context = csp_ads_screen_context();
  if (typeof Drupal.settings.oas[context] != 'undefined') {
    return Drupal.settings.oas[context].join(','); // Serving either desktop or mobile positions.
  }
  return ''; // No positions served.
}

/**
 * Match loaded ads with their sizes for DX tags
 */
function csp_ads_dx_sizes() {
  context = csp_ads_screen_context();
  if (typeof Drupal.settings.oasdx[context] != 'undefined') {
    dxencoded = Drupal.settings.oasdx[context];
    var dxoutput = JSON.stringify(dxencoded);
    return dxoutput.replace(/\"/g, "");
  }
  return ''; // No positions served.
}

/**
 * Waits for document to be ready.
 */
jQuery(function() {

  // Add .desktop-ads class to body.
  if (csp_ads_screen_context() == 'desktop') {
    jQuery('body').addClass('desktop-ads').removeClass('mobile-ads');
  }
  
  // Add .mobile-ads class to body.
  else {
    jQuery('body').addClass('mobile-ads').removeClass('desktop-ads');
  }
  
});
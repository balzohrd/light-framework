// LESS
less = {
    env: "development", // or "production"
    async: false,       // load imports async
    fileAsync: false,   // load imports async when in a page under
                        // a file protocol
    poll: 1000,         // when in watch mode, time in ms between polls
    functions: {},      // user functions, keyed by name
    dumpLineNumbers: "comments", // or "mediaQuery" or "all"
    relativeUrls: false,// whether to adjust url's to be relative
                        // if false, url's are already relative to the
                        // entry less file
    rootpath: ":/a.com/"// a path to add on to the start of every url
                        //resource
};

// Sticky header
$(function(){
var stickyRibbonTop = $('#header').offset().top;
  
$(window).scroll(function(){
        if( $(window).scrollTop() > stickyRibbonTop ) {
                $('#header').css({position: 'fixed', top: '0px'});
        } else {
                $('#header').css({position: 'static', top: '0px'});
        }
});
});
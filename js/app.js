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

// DOM ready
$(document).ready(function () {
    
    // Show card & white overlay
    $('#test').click(function () {
       $('#overlay').fadeIn(500);
       $('.card-container').fadeIn(500); 
    });
    
    // Hide card & white overlay
    $('#overlay').click(function () {
       $('#overlay').fadeOut(500);
       $('.card-container').fadeOut(500); 
    });
    
    // Flip card
    $('.front .flip').click(function () {
       $('#card').toggleClass("flipped");
       $('.front .flip').fadeOut(200);
       $('.back .flip').fadeIn(200); 
    });
    $('.back .flip').click(function () {
       $('#card').toggleClass("flipped");
       $('.back .flip').fadeOut(200);
       $('.front .flip').fadeIn(200); 
    });
    
});// /DOM ready
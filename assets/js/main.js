jQuery(document).ready(function ($) {
    var menuToggle = $('.OverlayNav__toggle');
    var menu = $('.OverlayNav');
    var menuCog = $('.OverlayNav__cog');
    var menuList = $('.OverlayNav__list');
    var robotTop = $('.OverlayNav__robot--top');
    var homeRobot = $('.HomeHero__robot');
    var homeButton = $('.HomeHero__button');
    var overlayTint = $('.OverlayNav__tint');
    
    // a robot on the homepage hides
    // when one hovers over a button
    $(homeButton).hover(function() {
        $(homeRobot).addClass('hiding');
    }, function() {
        $(homeRobot).removeClass('hiding');
    });
    
    
    // one robot on the overlay navigation peeks in
    // when one hovers over the navigation links.
    $(menuList).hover(function() {
        $(robotTop).addClass('peeking'); 
    }, function() {
        $(robotTop).removeClass('peeking');
    });
    
    // the navigation menu cog spins
    // when one hovers over it
    $(menuCog).hover(function() {
        $(this).addClass('fa-spin');
    }, function() {
        $(this).removeClass('fa-spin');
    }).click(function() {
        toggleMenu();
        toggleOverlayTint();
    });
    
    $(overlayTint).click(function() {
        toggleMenu();
        toggleOverlayTint();
    });
    
    var toggleMenu = function() {
        $(menu).toggleClass('active');   
    };
    
    var toggleOverlayTint = function() {
        $(overlayTint).toggleClass('active');
    };
});

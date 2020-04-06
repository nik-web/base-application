/*
 * Base application with Laminsas MVC framework
 * 
 * This file is the main script.
 * Licensed under MIT LICENSE
 */

var hamburger = document.querySelector('.hamburg');
if (hamburger) {
    hamburger.onclick = function () {

        this.classList.toggle ('open-hamburg');

        var nav = document.getElementById('main-nav-bar');
        nav.classList.toggle ('open-main-nav-bar');

    };
};

// object HTMLCollection of <ul class="main-nav-bar-dropdown">
var mainNavDropdownMenus = document.getElementsByClassName('main-nav-bar-dropdown');

if (0 !== mainNavDropdownMenus.length) {
    /* 
     * When the user clicks on the main navigation item dropdown, toggle between 
     * hiding and showing the dropdown this dropdown menu.
     */
    var firstMainNavDropdownButtonID = 'info_dropdown';
    var firstMainNavDropdownButton = document.getElementById(firstMainNavDropdownButtonID);

    if (firstMainNavDropdownButton) {
        var firstMainNavDropdownMenuID = firstMainNavDropdownButtonID +  '-menu';
        
        //alert (firstMainNavDropdownMenuID);
        
        firstMainNavDropdownButton.addEventListener('click', function(){
            
            //alert ('Hallo!');

            for (var i = 0; i < mainNavDropdownMenus.length; i++) {
                var openDropdown = mainNavDropdownMenus[i];
                
                if ( firstMainNavDropdownMenuID !== openDropdown.id ) {
                    if (openDropdown.classList.contains('main-nav-bar-dropdown-show')) {
                        openDropdown.classList.remove('main-nav-bar-dropdown-show');
                    }
                }
            }
            
            document.getElementById(firstMainNavDropdownMenuID).classList.toggle('main-nav-bar-dropdown-show');
        });
    }

    var secondMainNavDropdownButtonID = 'gallery_dropdown';
    var secondMainNavDropdownButton = document.getElementById(secondMainNavDropdownButtonID);

    if (secondMainNavDropdownButton) {
        var secondMainNavDropdownMenuID = secondMainNavDropdownButtonID +  '-menu';
        
        secondMainNavDropdownButton.addEventListener('click', function(){
            
            for (var i = 0; i < mainNavDropdownMenus.length; i++) {
                var openDropdown = mainNavDropdownMenus[i];
                
                if ( secondMainNavDropdownMenuID !== openDropdown.id ) {
                    if (openDropdown.classList.contains('main-nav-bar-dropdown-show')) {
                        openDropdown.classList.remove('main-nav-bar-dropdown-show');
                    }
                }
            }
            
            document.getElementById(secondMainNavDropdownMenuID).classList.toggle('main-nav-bar-dropdown-show');
        });
    }
    
    // Close the dropdown menu if the user clicks outside of the dropdown link
    window.onclick = function(event) {
        if ( !event.target.matches('.main-nav-item-dropdown button')) {
            var dropdowns = document.getElementsByClassName("main-nav-bar-dropdown");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('main-nav-bar-dropdown-show')) {
                    openDropdown.classList.remove('main-nav-bar-dropdown-show');
                }
            }
        }
    };
}
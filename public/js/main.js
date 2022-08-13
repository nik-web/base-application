/*
 * Base application with Laminsas MVC framework
 * 
 * This file is the main script.
 * Licensed under MIT LICENSE
 */

/**
 * Supporded main navigation
 * 
 * @return {Boolean}
 */
function supportedMainNavigation() {

    // object HTMLButtonElement or null
    let hamburgerButton = document.getElementById('hamburg-main-nav');
    // object HTMLUListElement or null
    let mainNavBar = document.getElementById('main-nav-bar');
    
    if (null === hamburgerButton || null === mainNavBar) {
        //alert ('Button oder Navigation nicht gefunden!');
        
        return false;
    }
    
    function toggleMainNav() {
        hamburgerButton.classList.toggle ('open-hamburg');
        mainNavBar.classList.toggle ('open-main-nav-bar');
    }
    
    hamburgerButton.addEventListener('click', toggleMainNav);
    
    // object HTMLCollection
    let mainNavDropdownButtons = document.getElementsByClassName('main-nav-button');
    let mainNavDropdownMenus = document.getElementsByClassName('main-nav-bar-dropdown');
    
    for (let i = 0; i < mainNavDropdownButtons.length; i++) {
        
        mainNavDropdownButtons[i].addEventListener('click', function() {
            
            for (let j = 0; j < mainNavDropdownMenus.length; j++) {
            
                if (j !== i) {
                    if (mainNavDropdownMenus[j].classList.contains('main-nav-bar-dropdown-show')) {
                        mainNavDropdownMenus[j].classList.remove('main-nav-bar-dropdown-show');
                    }
                } else {
                    mainNavDropdownMenus[j].classList.toggle('main-nav-bar-dropdown-show');
                }
            }
            
        });
    }    
}

supportedMainNavigation();
    
// Close the dropdown menu if the user clicks outside of the dropdown link
window.onclick = function(event) {
    if ( !event.target.matches('.main-nav-item-dropdown button')) {
        let dropdowns = document.getElementsByClassName("main-nav-bar-dropdown");
        for (let i = 0; i < dropdowns.length; i++) {
            let openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('main-nav-bar-dropdown-show')) {
                openDropdown.classList.remove('main-nav-bar-dropdown-show');
            }
        }
    }
};
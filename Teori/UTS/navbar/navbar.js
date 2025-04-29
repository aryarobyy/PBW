function setupNavIndicator() {
    const navLinks = document.querySelectorAll('.nav-link');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-container .nav-link');
    const desktopIndicator = document.querySelector('.nav-container .nav-indicator');
    const mobileIndicator = document.querySelector('.mobile-nav-container .nav-indicator');
  
    if (desktopIndicator) {
      const activeDesktopLink = document.querySelector('.nav-container .nav-link.active');
      if (activeDesktopLink) {
        updateIndicator(activeDesktopLink, desktopIndicator);
      }
    }
  
    if (mobileIndicator) {
      const activeMobileLink = document.querySelector('.mobile-nav-container .nav-link.active');
      if (activeMobileLink) {
        updateIndicator(activeMobileLink, mobileIndicator);
      }
    }
  
    navLinks.forEach(link => {
      link.addEventListener('mouseenter', function() {
        if (desktopIndicator) {
          updateIndicator(link, desktopIndicator);
        }
      });
    });
  
    const navMenu = document.querySelector('.nav-container .nav-menu');
    if (navMenu && desktopIndicator) {
      navMenu.addEventListener('mouseleave', function() {
        const activeLink = document.querySelector('.nav-container .nav-link.active');
        if (activeLink) {
          updateIndicator(activeLink, desktopIndicator);
        }
      });
    }
  
    mobileNavLinks.forEach(link => {
      link.addEventListener('mouseenter', function() {
        if (mobileIndicator) {
          updateIndicator(link, mobileIndicator);
        }
      });
    });
  
    const mobileNavMenu = document.querySelector('.mobile-nav-container .nav-menu');
    if (mobileNavMenu && mobileIndicator) {
      mobileNavMenu.addEventListener('mouseleave', function() {
        const activeLink = document.querySelector('.mobile-nav-container .nav-link.active');
        if (activeLink) {
          updateIndicator(activeLink, mobileIndicator);
        }
      });
    }
  }

  function updateIndicator(link, indicator) {
    const item = link.querySelector('.nav-item');
    if (item) {
      const rect = item.getBoundingClientRect();
      const parentRect = indicator.parentElement.getBoundingClientRect();
      indicator.style.width = `${rect.width}px`;
      indicator.style.left = `${rect.left - parentRect.left}px`;
      indicator.style.opacity = '1';
    }
  }
  
  document.addEventListener('DOMContentLoaded', function() {
    console.log("Navbar.js loaded, calling setupNavIndicator");
    setupNavIndicator();
  });
  
// Remove fixed-top from navbar menu in mobile

if (window.innerWidth < 700) {
    document.querySelector("#navBarFix").classList.remove('fixed-top');
} else if (window.innerWidth >= 700) {
    document.querySelector("#navBarFix").classList.add('fixed-top');
}

// End of Remove fixed-top from navbar menu in mobile

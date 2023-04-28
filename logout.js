
if (document.cookie.indexOf('Name=') !== -1) {
    var removeCookieBtn = document.getElementById('remove-cookie-btn');

    // Add a click event listener to the button
    removeCookieBtn.addEventListener('click', function() {
        // Make an AJAX request to the PHP script that removes the cookie
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'remove_cookie.php', true);
        xhr.onload = function() {
        if (xhr.status === 200) {
            // Reload the page to reflect the removal of the cookie
            location.reload();
        }
        };
        xhr.send();
    });
}else{
    var removeCookieBtn = document.getElementById('remove-cookie-btn');
    removeCookieBtn.style.display = 'none';
}
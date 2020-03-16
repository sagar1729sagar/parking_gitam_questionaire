<?php
function safe_redirect($url, $exit=true) {

    // Only use the header redirection if headers are not already sent
    if (!headers_sent()){

        header('HTTP/1.1 301 Moved Permanently');
        header('Location: ' . $url);

        // Optional workaround for an IE bug (thanks Olav)
        header("Connection: close");
    }

    // HTML/JS Fallback:
    // If the header redirection did not work, try to use various methods other methods

    print '<html>';
    print '<head><title>Redirecting you...</title>';
    print '<meta http-equiv="Refresh" content="0;url='.$url.'" />';
    print '</head>';
    print '<body onload="location.replace(\''.$url.'\')">';

  
    print '</body>';
    print '</html>';

    // Stop the script here (optional)
    if ($exit) exit;
}

  ?>

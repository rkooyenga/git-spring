<?php
###################################################################################################################
# 
# This script can take two URL variables
# 
# "type"
#   OPTIONAL
#   STRING
#   Sets the type of file that is output
# 
# "link"
#   REQUIRED
#   STRING
#   The link to grab and output through this proxy script
# 
###################################################################################################################

$linkvar = isset($_GET['link']) ? $_GET['link'] : NULL;

if (empty($linkvar)) {
  header("Location: https://rkooyenga.github.io/oneworld-site-restore/", TRUE, 302);
  exit();
}

# First we need to set the headers for the output file
# So check to see if the type is specified first and if so, then set according to what is being requested
if(isset($_GET['type']) && $_GET['type'] != ''){
    switch($_GET['type']){
        case 'css':
            header('Content-Type: text/css');
            break;

        case 'html':
            header('Content-Type: text/html');
            break;

        case 'js':
            header('Content-Type: text/javascript');
            break;

        case 'json':
            header('Content-Type: application/json');
            break;

        case 'rss':
            header('Content-Type: application/rss+xml; charset=ISO-8859-1');
            break;

        case 'xml':
            header('Content-Type: text/xml');
            break;

        default:
            header('Content-Type: text/text');
            break;
    }

# Otherwise, try and determine what file type should be output by the file extension from the link
}else{
    # See if we can find a file type in the link specified and set the headers accordingly

    # If css file extension is found, then set the headers to css format
    if(strstr($_GET['link'], '.css') != FALSE){
        header('Content-Type: text/css');

  # If css file extension is found, then set the headers to html format
    if(strstr($_GET['link'], '.html') != FALSE){
        header('Content-Type: text/html');

    # If javascript file extension is found, then set the headers to javascript format
    }elseif(strstr($_GET['link'], '.js') != FALSE){
        header('Content-Type: text/javascript');

    # If json file extension is found, then set the headers to json format
    }elseif(strstr($_GET['link'], '.json') != FALSE){
        header('Content-Type: application/json');

    # If rss file extension is found, then set the headers to rss format
    }elseif(strstr($_GET['link'], '.rss') != FALSE){
        header('Content-Type: application/rss+xml; charset=ISO-8859-1');

    # If css xml extension is found, then set the headers to xml format
    }elseif(strstr($_GET['link'], '.xml') != FALSE){
        header('Content-Type: text/xml');

    # If we still haven't found a suitable file extension, then just set the headers to plain text format
    }else{
        header('Content-Type: text/plain');
    }
}
}

# Now get the contents of our page we're wanting
$contents = file_get_contents($_GET['link']);

# And finally, spit everything out
echo $contents;
?>

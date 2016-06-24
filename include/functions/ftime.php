<?PHP

include("arabic.php");
include("timeago.php");

function timeago($Time_added)
{
    return time_ago($Time_added);
}

//http://php.net/manual/en/reserved.variables.get.php
function getUrlWithout($getNames)
{
    $url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $questionMarkExp = explode("?", $url);
    $urlArray = explode("&", $questionMarkExp[1]);
    $retUrl = $questionMarkExp[0];
    $retGet = "";
    $found = array();
    foreach ($getNames as $id => $name) {
        foreach ($urlArray as $key => $value) {
            if (isset($_GET[$name]) && $value == $name . "=" . $_GET[$name])
                unset($urlArray[$key]);
        }
    }
    $urlArray = array_values($urlArray);
    foreach ($urlArray as $key => $value) {
        if ($key < sizeof($urlArray) && $retGet !== "")
            $retGet .= "&";
        $retGet .= $value;
    }
    return $retUrl . "?" . $retGet;
}

function getCurrentPage($pageKey)
{

    $page = isset($_GET[$pageKey]);
    return $page;
}

?>


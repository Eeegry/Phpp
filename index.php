<?php
    $string = "This is example!";

    echo strlen($string)."<br />";
    echo strpos($string, "exa")."<br />";

    if (strpos ($string, "T") === false) echo "T is not found";
    else echo "T is found";

    echo "<br />".substr($string, 3, -2)."<br />";
    echo str_replace(array($string),"are", $string);

    $str = "<b>XAXA, zhirniy shrift</b>";
    echo htmlspecialchars($str);

    echo "br />".strtolower($string)."<br />".strtoupper($string)."<br />";

    echo md5("123")."<br />";

    echo trim("  string    sd          gg     ");
?>
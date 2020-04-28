
<?php 
    echo "<p>" . $_COOKIE['username'] . "</p>";
    echo "<p>" . $_COOKIE['firstname'] . "</p>";
    echo "<p>" . $_COOKIE['lastname'] . "</p>";
    if (isset($_COOKIE['cookie'])) {
        foreach ($_COOKIE['cookie'] as $key=>$val) {
            echo $key . ' is ' . $val."<br>\n";
        } //end foreach
    } //end if
?>
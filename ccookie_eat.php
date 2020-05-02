
<?php 
    echo isset($_COOKIE['username']) ? "<p>" . $_COOKIE['username'] . "</p>" : "<p>No username is set.</p>";
    echo isset($_COOKIE['firstname']) ? "<p>" . $_COOKIE['firstname'] . "</p>" : "<p>No first name is set.</p>";
    echo isset($_COOKIE['lastname']) ? "<p>" . $_COOKIE['lastname'] . "</p>" : "<p>No last name is set.</p>";
    if (isset($_COOKIE['cookie'])) {
        foreach ($_COOKIE['cookie'] as $key=>$val) {
            echo $key . ' is ' . $val."<br>\n";
        } //end foreach
    } //end if
?>
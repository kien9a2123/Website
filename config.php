

    <?php

    /* Database credentials. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    define('DB_SERVER', 'sql106.byethost.com');

    define('DB_USERNAME', 'b7_24908459');

    define('DB_PASSWORD', 'kien8a11');
    //define('DB_PASSWORD', '&W5gj7SgT8{Fr5/[');

    define('DB_NAME', 'b7_24908459_boxvps');



    /* Attempt to connect to MySQL database */

    $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);



    // Check connection

    if($mysqli === false){

        die("ERROR: Could not connect. " . $mysqli->connect_error);

    }

    ?>


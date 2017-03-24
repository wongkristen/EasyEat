
<!--echo getcwd();-->
<?php
    include 'server/database/database.php';
    $connection = include 'server/database/connection.php';

    getAllWaiter($connection);



?>
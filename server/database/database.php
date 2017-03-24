<?php include 'server/models/waiter.php';?>

<?php

    function getAllWaiter($con){
        $result = mysqli_query($con, 'SELECT * FROM waiter');
        $myAssoc = mysqli_fetch_assoc($result);
        foreach($myAssoc as $cname => $cvalue){
            print $cvalue;
        }
    }

    function getAllTable($con){

    }

    function getBill($con, $table_id){

    }

    function orderFood($con, $food_list){

    }




    function CloseConnection($con){
        mysqli_close($con);
    }
?>
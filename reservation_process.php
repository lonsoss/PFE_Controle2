<?php
include 'db/config.php';


if(!empty($_POST['name']) && !empty($_POST['date']) && !empty($_POST['time'])) {
    $name = @strtolower($_POST['name']);
    $date = @$_POST['date'];
    $time = @$_POST['time'];

    $request = "SELECT * FROM tables WHERE status = 'disponible'";
    $result = $con -> query($request);

    if(mysqli_num_rows($result) >= 1){
        $row = mysqli_fetch_assoc($result);
        $table_id = $row['id'];

        $request = "INSERT INTO reservations (table_id, customer_name, reservation_date, reservation_time) VALUES ('$table_id', '$name','$date','$time')";
        $result = $con -> query($request);

        if($result === true){
            $request = "UPDATE tables SET status = 'occupée' WHERE id = '$table_id'";
            $result = $con -> query($request);
            header("location: reservation_success.php?id=$table_id&success=Reservation added successfully");
        }
        else{
            header("location: reservation.php?failed=failed to insert reservation!");
        }   
    }
    else{
        header("location: reservation.php?available=No available table!");
    }
}
else{
    header("location: reservation.php?empty=Please fill required fields!");
}

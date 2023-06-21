<?php
include 'db/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <title>Success Reservation!</title>
    <style>
        *{
            font-family:Arial, Helvetica, sans-serif;
        }
        .box{
            border-radius: 15px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            overflow:hidden;
        }
        .bg-orange{
            background-color: #F97B22;
        }
        .img-section{
            width: 100%;
            height: 300px;
            background: url('./catering-service-animate.svg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        @keyframes anima {
            0%   {scale:1;box-shadow: 3px 4px 30px rgba(0, 0, 0, 0.3);}
            50% {scale:1.1;}
            100% {scale:1;}
        }
        .list-box{
            padding: 10px;
            transition: .1s;
            transform-origin: 0% 0%;
            scale:1;
            animation: anima 2s infinite;
        }
        .list-box:hover{
            animation-play-state: paused;
            box-shadow: 3px 4px 30px rgba(0, 0, 0, 0.3);
        }
        
        
    </style>
</head>
<body>
    <header class="bg-orange shadow d-flex align-items-center justify-content-center" style="height:60px;z-index:99 !important;">
        <a href="index.php" class="text-center fw-bold fs-1 text-decoration-none text-light m-0 py-2">PFE <span class="fs-6 fw-light">(controle2)</span></a>
    </header>

    <div style="height: calc(100vh - 115px);" class="container d-flex align-items-center">
        <?php 

        $id = @$_GET['id'];

        $reservations = "SELECT * FROM reservations WHERE table_id ='$id'";
        $reservations_res = $con -> query($reservations);
        $reservations_row = mysqli_fetch_assoc($reservations_res);
        $reservation_id = $reservations_row['table_id'];
        $name = $reservations_row['customer_name'];
        
        $tables = "SELECT * FROM tables WHERE id = $reservation_id";
        $tables_res = $con -> query($tables);
        $tables_row = mysqli_fetch_assoc($tables_res);
        $table_id = $tables_row['number'];


        if (isset($_GET['success'])) {
            echo '<div class="card box row col-4 offset-4 d-flex align-items-center justify-content-center pb-1">
                    <h4 class="text-center text-light bg-orange fw-bold py-3">See you soon Mr.' . ucfirst($name) . '</h4>
                    <div class="img-section"></div>
                    <div class="card-body">
                        <h4 class="card-title text-center fw-bold">Reservation Details</h4>
                    </div>
                    <ul class="list-group list-group-flush p-0 text-center">
                        <li class="list-group-item w-100"><i class="fa-solid fa-utensils me-2" style="color: #f97b22;"></i>Table : <span class="bg-orange text-light fw-bold rounded px-3 py-2"> ' . $table_id . '</span></li>
                        <li class="list-group-item"><i class="fa-regular fa-calendar me-2" style="color: #f97b22;"></i>Date : <span class="bg-orange text-light fw-bold rounded px-3 py-2">' . $reservations_row['reservation_date'] . '</span></li>
                        <li class="list-group-item"><i class="fa-regular fa-clock me-2" style="color: #f97b22;"></i>Time : <span class="bg-orange text-light fw-bold rounded px-3 py-2">' . $reservations_row['reservation_time'] . '</span></li>
                    </ul>
                </div>';
        }
        ?>

        <div class="position-relative col-3 offset-1 h-50">
            <div style="width: ;" class="list-box rounded position-relative position-absolute top-50 start-50 translate-middle">
                <h5 style="color: #F97B22;" class="fw-bold text-center">Check Reservations List!</h5>
                <a href="view_reservations.php" class="arrow text-decoration-none bg-orange m-auto  d-flex align-items-center justify-content-center rounded-circle" style="width: 100px; height: 100px;">
                <i class="fa-solid fa-3x fa-angles-right" style="color: #ffffff;"></i>
                </a>
            </div>
        </div>
        
        
    </div>
    <footer style="height:55px;" class="d-flex align-items-center justify-content-center bg-orange">
        <p class="mb-0 py-3 text-muted small" style=" color:white !important;">&copy; Copyright <script>document.write(new Date().getFullYear())</script> Made with <i class="fa-solid fa-bolt" style="color:#000;"></i> By <a style="color:#000;" class="text-decoration-none" href="#">Omar</a></p>
    </footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
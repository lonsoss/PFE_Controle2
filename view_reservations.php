<?php
include 'db/config.php';

    $magic_Table = "SELECT tables.id, tables.number, reservations.customer_name, reservations.reservation_date, reservations.reservation_time FROM reservations INNER JOIN tables ON reservations.table_id=tables.id ORDER BY reservation_date, reservation_time";
    $magic_result = $con -> query($magic_Table);

    $count = 0;
    $count += 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <title>Reservations List</title>
    <style>
        *{
            font-family:Arial, Helvetica, sans-serif;
        }
        .box{
            border-radius: 15px;
            overflow:hidden;
        }
        .bg-orange{
            background-color: #F97B22 !important;
        }
        .left-section{
            z-index: -1;
            width: 700px;
            clip-path: polygon(0% 0%, 100% 0%, 60% 100%, 0% 100%);
        }
        .container-fluid{
            padding-left: 0;
            padding-right: 200px;
        }
    </style>
</head>
<body>
    <header class="bg-orange shadow d-flex align-items-center justify-content-center" style="height:60px;z-index:99 !important;">
        <a href="index.php" class="text-center fw-bold fs-1 text-decoration-none text-light m-0 py-2">PFE <span class="fs-6 fw-light">(controle2)</span></a>
    </header>

    <div style="height: calc(100vh - 115px); width: 100vw;" class="container-fluid z-2 d-flex align-items-center justify-content-between">
    
    <div class="left-section h-100 bg-orange d-flex align-items-center">
        <h1 class="fw-bold text-light ps-5">List Of Booked Tables</h1>
    </div>
    <table class="table shadow box table-striped w-50 text-center">
        <tr>
            <th class="bg-orange text-light"><i class="fa-solid fa-utensils me-2"></i>Table</th>
            <th class="bg-orange text-light"><i class="fa-regular fa-user me-2"></i>Customer</th>
            <th class="bg-orange text-light"><i class="fa-regular fa-calendar me-2"></i>Date</th>
            <th class="bg-orange text-light"><i class="fa-regular fa-clock me-2"></i>Time</th>
            
        </tr>
        <?php foreach ($magic_result as $magic_row) : ?>
        <tr>
            <td><?php echo $magic_row['number'] ?></td>
            <td><?php echo $magic_row['customer_name'] ?></td>
            <td><?php echo $magic_row['reservation_date'] ?></td>
            <td><?php echo $magic_row['reservation_time'] ?></td>
        </tr>
        <?php endforeach ?>
    </table>
    </div>
    

    <footer style="height:55px;" class="d-flex align-items-center justify-content-center bg-orange">
        <p class="mb-0 py-3 text-muted small" style=" color:white !important;">&copy; Copyright <script>document.write(new Date().getFullYear())</script> Made with <i class="fa-solid fa-bolt" style="color:#000;"></i> By <a style="color:#000;" class="text-decoration-none" href="#">Omar</a></p>
    </footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
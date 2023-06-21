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
    <title>Reservation</title>
    <style>
        *{
            font-family:Arial, Helvetica, sans-serif;
        }
        .bg-orange{
            background-color: #F97B22 !important;
        }  
        .box{
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <header class="bg-orange shadow d-flex align-items-center justify-content-center" style="height:60px;z-index:99 !important;">
        <a href="index.php" class="text-center fw-bold fs-1 text-decoration-none text-light m-0 py-2">PFE <span class="fs-6 fw-light">(controle2)</span></a>
    </header>

    <div style="height: calc(100vh - 115px);" class="container d-flex align-items-center">
        <div class="box row col-4 offset-4 border py-4 px-2">
            <h1 class="text-center">Reservation</h1>
            <form method="POST" action="reservation_process.php">
            <?php 

                if (isset($_GET['empty'])) {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> ' . $_GET["empty"] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
                if (isset($_GET['available'])) {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> ' . $_GET["available"] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
                if (isset($_GET['failed'])) {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Failed!</strong> ' . $_GET["failed"] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }

                ?>
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputDate" class="form-label">Date</label>
                    <input type="date" min="2023-06-20" max="2023-07-20" name="date" class="form-control" id="exampleInputDate" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputTime" class="form-label">Time</label>
                    <input type="time" name="time" class="form-control" id="exampleInputTime">
                </div>
                <button type="submit" style="background-color:#F97B22;" class="btn btn-primary w-100 mb-2 border border-none">Book</button>
            </form>
        </div>
    </div>
    <footer style="height:55px;" class="d-flex align-items-center justify-content-center bg-orange">
        <p class="mb-0 py-3 text-muted small" style=" color:white !important;">&copy; Copyright <script>document.write(new Date().getFullYear())</script> Made with <i class="fa-solid fa-bolt" style="color:#000;"></i> By <a style="color:#000;" class="text-decoration-none" href="#">Omar</a></p>
    </footer>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
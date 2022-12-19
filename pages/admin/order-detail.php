<?php

require '../../function/function.php';

$id = $_GET['id'];
$order = query("SELECT * FROM `order` INNER JOIN `order_detail` ON $id = order_detail.id_order INNER JOIN `menu` ON order_detail.id_menu = menu.id");

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/sidebar.css">
    <link rel="stylesheet" href="../../css/utilities.css">
    <link rel="stylesheet" href="../../css/reservations-detail.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <section class="transactions-detail overflow-auto">
        <main class="main-wrapper">
            <div class="ps-lg-0">
                <h2 class="text-4xl fw-bold color-palette-1 mb-30">Details #$_COOKIE<?= $order[0]['id'] ?></h2>
                <div class="details">
                    <div class="main-content main-content-card overflow-auto">
                        <section class="checkout mx-auto">
                            <div class="d-flex flex-row  align-items-center justify-content-between mb-30">
                                <div class="game-checkout d-flex flex-row align-items-center">
                                    <div>
                                        <p class="fw-bold text-xl color-palette-1 mb-10">KuyMakan</p>
                                        <p class="color-palette-2 m-0"><?= $order[0]['bookedfor'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="purchase pt-30">
                                <h2 class="fw-bold text-xl color-palette-1 mb-20">Reservation Details</h2>
                                <p class="text-lg color-palette-1 mb-20">No. Table <span class="purchase-details"><?= $id ?></span></p>
                                <p class="text-lg color-palette-1 mb-20">Email<span class="purchase-details"><?= $order[0]['id_customer'] ?></span></p>
                                <p class="text-lg color-palette-1 mb-20">Total Person <span class="purchase-details"><?= $order[0]['person'] ?></span></p>
                            </div>
                            <div class="payment pt-10 pb-10">
                                <h2 class="fw-bold text-xl color-palette-1 mb-20">Payment Informations</h2>
                                <p class="text-lg color-palette-1 mb-20"><?= $order[0]['name'] ?> <span class="purchase-details"><?= $order[0]['total_price'] ?></span></p>
                                <h3 class="text-lg fw-bold color-palette-1 mb-20">Total <span class="purchase-details"><?= $order[0]['total_price'] ?></span></h3>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
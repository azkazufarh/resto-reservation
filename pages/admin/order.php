<?php
require '../../function/function.php';

$orders = query("SELECT * FROM `order`");
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
    <link rel="stylesheet" href="../../css/overview.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <section class="overview overflow-auto">
        <section class="sidebar">
            <div class="content pt-50 pb-30 ps-30">
                <div class="user text-center pb-50 pe-30">
                    <h2 class="fw-bold text-xl color-palette-1 m-0">Admin</h2>
                    <p class="color-palette-2 m-0">Dashboard Area</p>
                </div>
                <div class="menus">
                    <div class="item mb-30">
                        <svg class="icon me-3" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.9033 14.7502H14.9033V21.7502H21.9033V14.7502Z" stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10.9033 14.7502H3.90332V21.7502H10.9033V14.7502Z" stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21.9033 3.75024H14.9033V10.7502H21.9033V3.75024Z" stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10.9033 3.75024H3.90332V10.7502H10.9033V3.75024Z" stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="item-title m-0">
                            <a href="../admin/index.php" class="text-lg text-decoration-none">Overview</a>
                        </p>
                    </div>
                    <div class="item active mb-30">
                        <svg class="icon me-3" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.90332 2.41406L3.90332 6.41406V20.4141C3.90332 20.9445 4.11403 21.4532 4.48911 21.8283C4.86418 22.2033 5.37289 22.4141 5.90332 22.4141H19.9033C20.4338 22.4141 20.9425 22.2033 21.3175 21.8283C21.6926 21.4532 21.9033 20.9445 21.9033 20.4141V6.41406L18.9033 2.41406H6.90332Z" stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16.9033 10.4141C16.9033 11.4749 16.4819 12.4923 15.7317 13.2425C14.9816 13.9926 13.9642 14.4141 12.9033 14.4141C11.8425 14.4141 10.825 13.9926 10.0749 13.2425C9.32475 12.4923 8.90332 11.4749 8.90332 10.4141" stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3.90332 6.41406H21.9033" stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="item-title m-0">
                            <a href="../admin/order.php" class="text-lg text-decoration-none">Order</a>
                        </p>
                    </div>
                    <div class="item mb-30">
                        <svg class="icon me-3" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.9033 11.9141C21.9068 13.234 21.5984 14.536 21.0033 15.7141C20.2978 17.1258 19.2131 18.3133 17.8708 19.1434C16.5285 19.9735 14.9816 20.4135 13.4033 20.4141C12.0835 20.4175 10.7814 20.1092 9.60332 19.5141L3.90332 21.4141L5.80332 15.7141C5.20825 14.536 4.89988 13.234 4.90332 11.9141C4.90393 10.3358 5.34393 8.78894 6.17404 7.44664C7.00415 6.10434 8.19157 5.01966 9.60332 4.31409C10.7814 3.71902 12.0835 3.41065 13.4033 3.41409H13.9033C15.9877 3.52908 17.9564 4.40885 19.4325 5.88495C20.9086 7.36105 21.7883 9.32974 21.9033 11.4141V11.9141Z" stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="item-title m-0">
                            <a href="../admin/costumers.php" class="text-lg text-decoration-none">Costumers</a>
                        </p>
                    </div>
                    <div class="item mb-30">
                        <svg class="icon me-3" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.9033 11.9141C21.9068 13.234 21.5984 14.536 21.0033 15.7141C20.2978 17.1258 19.2131 18.3133 17.8708 19.1434C16.5285 19.9735 14.9816 20.4135 13.4033 20.4141C12.0835 20.4175 10.7814 20.1092 9.60332 19.5141L3.90332 21.4141L5.80332 15.7141C5.20825 14.536 4.89988 13.234 4.90332 11.9141C4.90393 10.3358 5.34393 8.78894 6.17404 7.44664C7.00415 6.10434 8.19157 5.01966 9.60332 4.31409C10.7814 3.71902 12.0835 3.41065 13.4033 3.41409H13.9033C15.9877 3.52908 17.9564 4.40885 19.4325 5.88495C20.9086 7.36105 21.7883 9.32974 21.9033 11.4141V11.9141Z" stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="item-title m-0">
                            <a href="../admin/menu.php" class="text-lg text-decoration-none">Food Menu's</a>
                        </p>
                    </div>
                    <div class="item mb-30">
                        <svg class="icon me-3" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.2634 7.05396C20.5218 8.31274 21.3787 9.9164 21.7257 11.6621C22.0728 13.4079 21.8944 15.2173 21.2131 16.8617C20.5318 18.5061 19.3782 19.9115 17.8983 20.9003C16.4183 21.8891 14.6783 22.4169 12.8984 22.4169C11.1185 22.4169 9.37859 21.8891 7.89861 20.9003C6.41864 19.9115 5.26508 18.5061 4.58381 16.8617C3.90253 15.2173 3.72413 13.4079 4.07116 11.6621C4.41819 9.9164 5.27506 8.31274 6.53344 7.05396" stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.9033 2.41406V12.4141" stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="item-title m-0">
                            <a href="../logout.php" class="text-lg text-decoration-none">Log Out</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <main class="main-wrapper">
            <div class="ps-lg-0">
                <h2 class="text-4xl fw-bold color-palette-1 mb-30">Orders</h2>
                <div class="latest-transaction">
                    <p class="text-lg fw-medium color-palette-1 mb-14">Latest Order</p>
                    <div class="main-content main-content-table overflow-auto">
                        <table class="table table-borderless">
                            <thead>
                                <tr class="color-palette-1">
                                    <th class="text-start" scope="col">Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($orders as $order) : ?>
                                    <tr class="align-middle">
                                        <th scope="row">
                                            <div class="game-title-header">
                                                <p class="game-title fw-medium text-start color-palette-1 m-0"><?= $order['id_customer'] ?></p>
                                            </div>
                                        </th>
                                        <td>
                                            <p class="fw-medium color-palette-1 m-0"><?= $order['bookedfor'] ?></p>
                                        </td>
                                        <td>
                                            <div>
                                                <span class="float-start icon-status pending"></span>
                                                <p class="fw-medium text-start color-palette-1 m-0 position-relative">
                                                    <?php if ($order['confirmation'] == 1) echo "Success";
                                                    else echo "Failed" ?></p>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary">Order Details</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
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
                    <div class="item active mb-30">
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
                    <div class="item mb-30">
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
                <h2 class="text-4xl fw-bold color-palette-1 mb-30">Dashboard</h2>
                <div class="top-up-categories mb-30">
                    <p class="text-lg fw-medium color-palette-1 mb-14">Costumers</p>
                    <div class="main-content">
                        <div class="row">
                            <div class="col-lg-4 ps-15 pe-15 pb-lg-0 pb-4">
                                <div class="categories-card">
                                    <div class="d-flex align-items-center mb-24">
                                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <mask id="mask0-category-1" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="60" height="60">
                                                <circle cx="30" cy="30" r="30" fill="#D7D7F8" />
                                            </mask>
                                            <g mask="url(#mask0-category-1)">
                                                <circle cx="30" cy="30" r="30" fill="#D7D7F8" />
                                                <mask id="mask1-category-1" mask-type="alpha" maskUnits="userSpaceOnUse" x="10" y="12" width="40" height="30">
                                                    <rect x="10" y="12.5" width="40" height="28.75" rx="6" fill="#695DE9" />
                                                </mask>
                                                <g mask="url(#mask1-category-1)">
                                                    <rect x="10" y="12.5" width="40" height="28.75" rx="6" fill="#695DE9" />
                                                    <circle cx="43" cy="19" r="10" fill="#4F46B5" />
                                                </g>
                                                <circle cx="43" cy="18" r="9" fill="#2B2467" />
                                                <path d="M42.5109 13.0768C42.6649 12.603 43.3352 12.603 43.4891 13.0768L44.3279 15.6581C44.3967 15.87 44.5942 16.0135 44.817 16.0135H47.5311C48.0293 16.0135 48.2365 16.651 47.8334 16.9438L45.6376 18.5392C45.4574 18.6701 45.3819 18.9023 45.4508 19.1142L46.2895 21.6955C46.4435 22.1693 45.9012 22.5633 45.4981 22.2705L43.3023 20.6751C43.1221 20.5442 42.878 20.5442 42.6977 20.6751L40.5019 22.2705C40.0989 22.5633 39.5566 22.1693 39.7105 21.6955L40.5492 19.1142C40.6181 18.9023 40.5427 18.6701 40.3624 18.5392L38.1666 16.9438C37.7635 16.651 37.9707 16.0135 38.4689 16.0135H41.1831C41.4059 16.0135 41.6033 15.87 41.6722 15.6581L42.5109 13.0768Z" fill="white" />
                                                <rect x="25" y="40" width="10" height="7.5" fill="#695DE9" />
                                                <rect x="17.5" y="47.5" width="25" height="2.5" rx="1.25" fill="#695DE9" />
                                                <path d="M32.6875 35.3125L15.5 35.3125" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M19.5 18.3125L15.5 18.3125" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M26.4375 29.5L15.5 29.5" stroke="#B7B0F4" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                        </svg>
                                        <p class="color-palette-1 mb-0 ms-12">Total<br> Income</p>
                                    </div>
                                    <div>
                                        <p class="text-sm color-palette-2 mb-1">Today</p>
                                        <p class="text-2xl color-palette-1 fw-medium m-0">Rp 18.000.500</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                            <a href="order-detail.php?id=<?= $order['id'] ?>" class="btn btn-primary">Order Details</a>
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
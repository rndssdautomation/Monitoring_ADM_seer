<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM</title>
    <link rel="stylesheet" href="<?= base_url();?>/assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/icon.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/font.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/app.css">
    <link rel="shortcut icon" href="<?= base_url();?>/assets/images/favicon.svg" type="image/x-icon">
    <script>
    function setZoom(zoomLevel) {
        document.body.style.zoom = zoomLevel;
    }
    window.onload = function() {
        setZoom('65%');
    };
    </script>
</head>

<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand navbar-light ">
                <div class="container-fluid">
                    <div>
                        <a haref="" class="burger-btn d-block">
                            <!-- <h4>MONITORING SEER ADM</h4> -->
                            <h4><strong><span style="font-size: 1.5em;">MONITORING SEER ADM</span></strong></h4>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div>
                        <div class="d-flex justify-content-center">
                            <img src="<?= base_url();?>/assets/images/logo/ssd.png" alt="ssd" width="400" height="65">
                        </div>
                    </div>
                    <div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600">User</h6>
                                            <p class="mb-0 text-sm text-gray-600">ADM</p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md bg-primary me-8">
                                                <span
                                                    class="avatar-content"><?php  $data = "Astra Daihatsu Motor"; $whatIWant = substr($data, strpos($data, " ") + 1); $akhir = substr($whatIWant,0,1); $awal = substr($data,0,1); echo $awal;echo $akhir; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <h6 class="dropdown-header">Hello, User!</h6>
                                        <hr>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <link rel="stylesheet" href="<?= base_url();?>/assets/vendors/iconly/bold.css">
        <div class="page-heading">

            <div class="page-title">
                <div class="row justify-content-between">
                </div>
            </div>
        </div>
        <div class="col" style="margin-left: 1%; margin-right: 1%;">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col">
                                        <div class="col">
                                            <h4
                                                style="border-right: 2px solid #7c8db5; height: 45px; margin: 0; padding: 0;">
                                                DELIVERY FAILED</h4>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="name ms-5 py-2">
                                            <h3 class="font-extrabold mb-0" id="count_task_failed"></h3>
                                        </div>
                                    </div>
                                    <div class="col d-flex justify-content-end">
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#infodeliveryfailed" id="buttonfailed">
                                            Details
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col">
                                        <div class="col">
                                            <h4
                                                style="border-right: 2px solid #7c8db5; height: 45px; margin: 0; padding: 0;">
                                                DELIVERY SUCCESS</h4>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="name ms-5 py-2">
                                            <h3 class="font-extrabold mb-0" id="count_task_success"></h3>
                                        </div>
                                    </div>
                                    <div class="col d-flex justify-content-end">
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#infodeliverysuccess">
                                            Details
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col">
                                        <div class="col">
                                            <h4
                                                style="border-right: 2px solid #7c8db5; height: 45px; margin: 0; padding: 0;">
                                                HISTORY TASK</h4>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="name ms-5 py-2">
                                            <h3 class="font-extrabold mb-0" id="count_task_history"></h3>
                                        </div>
                                    </div>
                                    <div class="col d-flex justify-content-end">
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#infohistorytask" onclick="getHistoryData()">
                                            Details
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-left: 1%; margin-right: 1%;">
            <div class="col" style="width: 50%">
                <div class="col">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>ROBOT 1</h4>
                                </div>
                                <div class="card-body">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 col-lg-3 col-md-6">
                                                <div class="card"
                                                    style="  overflow-x: auto; border: 1px solid; border-color: #435ebe; border-radius: 25px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                    <div class="card-body px-4 py-4-5" style="min-height: 135px;"
                                                        style="height: 150px;">
                                                        <div class="row">
                                                            <div
                                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start">
                                                                <div class="stats-icon blue  ">
                                                                    <i class="bi bi-minecart"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Robot
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0 " id="robot2_name">
                                                                    <!-- AF-01 -->
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-3 col-md-6">
                                                <div class="card"
                                                    style="  overflow-x: auto; border: 1px solid; border-color: #435ebe; border-radius: 25px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                    <div class="card-body px-4 py-4-5" style="min-height: 135px;"
                                                        style="height: 150px;">
                                                        <div class="row">
                                                            <div
                                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start">
                                                                <div class="stats-icon pink  ">
                                                                    <i class="iconly-boldSend"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Destination
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0 "
                                                                    id="robot2_destination">
                                                                    <!-- AP34 -->
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-3 col-md-6">
                                                <div class="card"
                                                    style="  overflow-x: auto; border: 1px solid; border-color: #435ebe; border-radius: 25px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                    <div class="card-body px-4 py-4-5" style="min-height: 135px;"
                                                        style="height: 150px;">
                                                        <div class="row">
                                                            <div
                                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start">
                                                                <div class="stats-icon orange  ">
                                                                    <i class="bi bi-arrow-bar-right"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Next Task
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0" id="robot2_next">
                                                                    <!-- ProductCTCB2 -->
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-3 col-md-6">
                                                <div class="card"
                                                    style="  overflow-x: auto; border: 1px solid; border-color: #435ebe; border-radius: 25px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                    <div class="card-body px-4 py-4-5" style="min-height: 135px;"
                                                        style="height: 150px;">
                                                        <div class="row">
                                                            <div
                                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start">
                                                                <div class="stats-icon green  ">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8 px-1">
                                                                <h6 class="text-muted font-semibold"> Queue
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0" id="robot2_remaining">
                                                                    <!-- 23 -->
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col">
                                                <div class="card"
                                                    style="  overflow-x: auto; border: 1px solid; border-color: #435ebe; border-radius: 25px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                    <div class="card-body px-4 py-4-5" style="min-height: 135px;">
                                                        <div class="row">
                                                            <div
                                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start">
                                                                <div class="stats-icon grey  ">
                                                                    <i class="bi bi-broadcast-pin"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Status
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0 " id="robot2_status">
                                                                    <!-- running -->
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card"
                                                    style="  overflow-x: auto; border: 1px solid; border-color: #435ebe; border-radius: 25px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                    <div class="card-body px-4 py-4-5" style="min-height: 135px;">
                                                        <div class="row">
                                                            <div
                                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start">
                                                                <div class="stats-icon yellow  ">
                                                                    <i class="iconly-boldLocation"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Location
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0 " id="robot2_current">
                                                                    <!-- AP12 -->
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card"
                                                    style="  overflow-x: auto; border: 1px solid; border-color: #435ebe; border-radius: 25px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                    <div class="card-body px-4 py-4-5" style="min-height: 135px;">
                                                        <div class="row">
                                                            <div
                                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start">
                                                                <div class="stats-icon darkblue  ">
                                                                    <i class="bi bi-battery-full"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Battery
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0" id="robot2_battery">
                                                                    <!-- 98 -->
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card"
                                                    style="  overflow-x: auto; border: 1px solid; border-color: #435ebe; border-radius: 25px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                    <div class="card-body px-4 py-4-5" style="min-height: 135px;">
                                                        <div class="row">
                                                            <div
                                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start">
                                                                <div class="stats-icon red   ">
                                                                    <i class="bi bi-battery-charging"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Charging
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0 " id="robot2_charging">
                                                                    <!-- false -->
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>ROBOT 2</h4>
                                </div>
                                <div class="card-body">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 col-lg-3 col-md-6">
                                                <div class="card"
                                                    style="  overflow-x: auto; border: 1px solid; border-color: #435ebe; border-radius: 25px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                    <div class="card-body px-4 py-4-5" style="min-height: 135px;"
                                                        style="height: 150px;">
                                                        <div class="row">
                                                            <div
                                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start">
                                                                <div class="stats-icon blue  ">
                                                                    <i class="bi bi-minecart"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Robot
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0 " id="robot1_name">
                                                                    <!-- AF-01 -->
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-3 col-md-6">
                                                <div class="card"
                                                    style="  overflow-x: auto; border: 1px solid; border-color: #435ebe; border-radius: 25px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                    <div class="card-body px-4 py-4-5" style="min-height: 135px;"
                                                        style="height: 150px;">
                                                        <div class="row">
                                                            <div
                                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start">
                                                                <div class="stats-icon pink  ">
                                                                    <i class="iconly-boldSend"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Destination
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0 "
                                                                    id="robot1_destination">
                                                                    <!-- AP34 -->
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-3 col-md-6">
                                                <div class="card"
                                                    style="  overflow-x: auto; border: 1px solid; border-color: #435ebe; border-radius: 25px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                    <div class="card-body px-4 py-4-5" style="min-height: 135px;"
                                                        style="height: 150px;">
                                                        <div class="row">
                                                            <div
                                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start">
                                                                <div class="stats-icon orange  ">
                                                                    <i class="bi bi-arrow-bar-right"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Next Task
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0" id="robot1_next">
                                                                    <!-- ProductCTCB2 -->
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-3 col-md-6">
                                                <div class="card"
                                                    style="  overflow-x: auto; border: 1px solid; border-color: #435ebe; border-radius: 25px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                    <div class="card-body px-4 py-4-5" style="min-height: 135px;"
                                                        style="height: 150px;">
                                                        <div class="row">
                                                            <div
                                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start">
                                                                <div class="stats-icon green  ">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8 px-1">
                                                                <h6 class="text-muted font-semibold"> Queue
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0" id="robot1_remaining">
                                                                    <!-- 23 -->
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col">
                                                <div class="card"
                                                    style="  overflow-x: auto; border: 1px solid; border-color: #435ebe; border-radius: 25px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                    <div class="card-body px-4 py-4-5" style="min-height: 135px;">
                                                        <div class="row">
                                                            <div
                                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start">
                                                                <div class="stats-icon grey  ">
                                                                    <i class="bi bi-broadcast-pin"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Status
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0 " id="robot1_status">
                                                                    <!-- running -->
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card"
                                                    style="  overflow-x: auto; border: 1px solid; border-color: #435ebe; border-radius: 25px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                    <div class="card-body px-4 py-4-5" style="min-height: 135px;">
                                                        <div class="row">
                                                            <div
                                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start">
                                                                <div class="stats-icon yellow  ">
                                                                    <i class="iconly-boldLocation"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Location
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0 " id="robot1_current">
                                                                    <!-- AP12 -->
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card"
                                                    style="  overflow-x: auto; border: 1px solid; border-color: #435ebe; border-radius: 25px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                    <div class="card-body px-4 py-4-5" style="min-height: 135px;">
                                                        <div class="row">
                                                            <div
                                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start">
                                                                <div class="stats-icon darkblue  ">
                                                                    <i class="bi bi-battery-full"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Battery
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0" id="robot1_battery">
                                                                    <!-- 98 -->
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card"
                                                    style="  overflow-x: auto; border: 1px solid; border-color: #435ebe; border-radius: 25px; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                    <div class="card-body px-4 py-4-5" style="min-height: 135px;">
                                                        <div class="row">
                                                            <div
                                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start">
                                                                <div class="stats-icon red   ">
                                                                    <i class="bi bi-battery-charging"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Charging
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0 " id="robot1_charging">
                                                                    <!-- false -->
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div calss="col" style="width: 50%">
                <div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">TASK QUEUE</h5>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="pisah" data-bs-toggle="tab" href="#splitrobot"
                                        role="tab" aria-controls="hosplitrobote" aria-selected="true">Split Task</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="satu" data-bs-toggle="tab" href="#meregerobot" role="tab"
                                        aria-controls="meregerobot" aria-selected="false">All Task</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="splitrobot" role="tabpanel"
                                    aria-labelledby="pisah">
                                    <div class="row">
                                        <div class="col" width="50%">
                                            <div class="card-header">
                                                <h4>Robot 1</h4>
                                            </div>
                                            <div
                                                style="  overflow-x: auto; border: 1px solid; border-color: #435ebe; border-radius: 25px; padding-bottom: 25px; padding-left: 50px; padding-right: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                <p></p>
                                                <table class="table my-2" id="table_queue_robot1">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 5%; text-align: center;">No
                                                            </th>
                                                            <th style="text-align: center;">Task</th>
                                                            <th style="text-align: center;">Status</th>
                                                            <th style="text-align: center;">Created On</th>
                                                            <th style="text-align: center;">Ended On</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col" width="50%">
                                            <div class="card-header">
                                                <h4>Robot 2</h4>
                                            </div>
                                            <div
                                                style="overflow-x: auto; border: 1px solid; border-color: #435ebe; border-radius: 25px; padding-bottom: 25px; padding-left: 50px; padding-right: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                <p></p>
                                                <table class="table my-2" id="table_queue_robot2">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 5%; text-align: center;">No
                                                            </th>
                                                            <th style="text-align: center;">Task</th>
                                                            <th style="text-align: center;">Status</th>
                                                            <th style="text-align: center;">Created On</th>
                                                            <th style="text-align: center;">Ended On</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="meregerobot" role="tabpanel" aria-labelledby="satu">
                                    <div class="card-header">
                                        <h4>All robot</h4>
                                    </div>
                                    <div
                                        style="  overflow-x: auto; border: 1px solid; border-color: #435ebe; border-radius: 25px; padding-bottom: 25px; padding-left: 50px; padding-right: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <p></p>
                                        <table class="table my-2" id="table_queue_robot_all">
                                            <thead>
                                                <tr>
                                                    <th style="width: 5%; text-align: center;">No
                                                    </th>
                                                    <th style="text-align: center;">AGV</th>
                                                    <th style="text-align: center;">Task</th>
                                                    <th style="text-align: center;">Status</th>
                                                    <th style="text-align: center;">Created On</th>
                                                    <th style="text-align: center;">Ended On</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Info List Task-->
        <div class="modal fade" id="infotasklist" tabindex="-1" aria-labelledby="InfoLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Task List</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <table class="table my-2" id="table_list">
                                <thead>
                                    <tr>
                                        <th style="width: 5%; text-align: center;">No</th>
                                        <th style="text-align: center;">Task</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Modal Info List Task-->

        <!-- Modal Info Delivery Failed-->
        <div class="modal fade" id="infodeliveryfailed" tabindex="-1" aria-labelledby="InfoLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delivery Failed</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container" style="overflow-x: auto;">
                            <table class="table my-2" id="table_failed">
                                <thead>
                                    <tr>
                                        <th style="width: 5%; text-align: center;">No</th>
                                        <th style="text-align: center;">Task</th>
                                        <th style="text-align: center;">Robot</th>
                                        <th style="text-align: center;">Status</th>
                                        <th style="text-align: center;">Created On</th>
                                        <th style="text-align: center;">Ended On</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Modal Delivery Failed-->

        <!-- Modal Info Delivery Success-->
        <div class="modal fade" id="infodeliverysuccess" tabindex="-1" aria-labelledby="InfoLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delivery Success</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container" style="overflow-x: auto;">
                            <table class="table my-2" id="table_success">
                                <thead>
                                    <tr>
                                        <th style="width: 5%; text-align: center;">No</th>
                                        <th style="text-align: center;">Task</th>
                                        <th style="text-align: center;">Robot</th>
                                        <th style="text-align: center;">Status</th>
                                        <th style="text-align: center;">Created On</th>
                                        <th style="text-align: center;">Ended On</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Modal Delivery Success-->

        <!-- Modal Info History Task-->
        <div class="modal fade" id="infohistorytask" tabindex="-1" aria-labelledby="InfoLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">History Task</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container" style="overflow-x: auto;">
                            <table class="table my-2" id="table_history">
                                <thead>
                                    <tr>
                                        <th style="width: 5%; text-align: center;">No</th>
                                        <th style="text-align: center;">Task</th>
                                        <th style="text-align: center;">Robot</th>
                                        <th style="text-align: center;">Status</th>
                                        <th style="text-align: center;">Created On</th>
                                        <th style="text-align: center;">Ended On</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Modal History Task-->

        <!-- JAVASCRIPT -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?= base_url();?>/assets/css/jquery.dataTables.min.css">
        <script type="text/javascript" src="<?= base_url();?>/assets/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url();?>/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="<?= base_url();?>/assets/js/bootstrap.bundle.min.js"></script>

        <script>
        $(document).ready(function() {
            var raw_data = new EventSource('<?php echo base_url('get_api_data_delivery'); ?>');
            raw_data.onmessage = function(event) {
                var data = JSON.parse(event.data);
                //FAILED
                var failed_total = data.failed.length;
                var filed = document.getElementById('count_task_failed');
                filed.textContent = failed_total;

                // Tabel Failed
                var tableFailedBody = document.getElementById('table_failed').getElementsByTagName(
                    'tbody')[
                    0];
                tableFailedBody.innerHTML = '';
                for (var i = 0; i < failed_total; i++) {
                    var row = tableFailedBody.insertRow(i);
                    var failedNo = row.insertCell(0);
                    var failedTask = row.insertCell(1);
                    var failedRobot = row.insertCell(2);
                    var failedStatus = row.insertCell(3);
                    var failedCreatedOn = row.insertCell(4);
                    var failedEndedOn = row.insertCell(5);

                    failedNo.innerHTML = i + 1;
                    failedTask.innerHTML = data.failed[i].task_failed;
                    failedRobot.innerHTML = data.failed[i].robot_failed;
                    failedStatus.innerHTML = data.failed[i].status_failed;
                    failedCreatedOn.innerHTML = data.failed[i].creat_failed;
                    failedEndedOn.innerHTML = data.failed[i].end_failed;
                }
                if ($.fn.DataTable.isDataTable('#table_failed')) {
                    $('#table_failed').DataTable().destroy();
                }

                $('#table_failed').DataTable({
                    "pageLength": 100
                });


                //SUCCESS
                var success_total = data.success.length;
                var success = document.getElementById('count_task_success');
                success.textContent = success_total;

                // Tabel Success
                var tablesuccessBody = document.getElementById('table_success').getElementsByTagName(
                    'tbody')[
                    0];
                tablesuccessBody.innerHTML = '';
                for (var i = 0; i < success_total; i++) {
                    var row = tablesuccessBody.insertRow(i);
                    var successNo = row.insertCell(0);
                    var successTask = row.insertCell(1);
                    var successRobot = row.insertCell(2);
                    var successStatus = row.insertCell(3);
                    var successCreatedOn = row.insertCell(4);
                    var successEndedOn = row.insertCell(5);

                    successNo.innerHTML = i + 1;
                    successTask.innerHTML = data.success[i].task_success;
                    successRobot.innerHTML = data.success[i].robot_success;
                    successStatus.innerHTML = data.success[i].status_success;
                    successCreatedOn.innerHTML = data.success[i].creat_success;
                    successEndedOn.innerHTML = data.success[i].end_success;
                }
                if ($.fn.DataTable.isDataTable('#table_success')) {
                    $('#table_success').DataTable().destroy();
                }

                $('#table_success').DataTable({
                    "pageLength": 100
                });

                //HISTORY
                var history_total = data.history.length;
                var history = document.getElementById('count_task_history');
                history.textContent = history_total;
                // Tabel History
                var tablehistoryBody = document.getElementById('table_history').getElementsByTagName(
                    'tbody')[
                    0];
                tablehistoryBody.innerHTML = '';
                for (var i = 0; i < history_total; i++) {
                    var row = tablehistoryBody.insertRow(i);
                    var historyNo = row.insertCell(0);
                    var historyTask = row.insertCell(1);
                    var historyRobot = row.insertCell(2);
                    var historyStatus = row.insertCell(3);
                    var historyCreatedOn = row.insertCell(4);
                    var historyEndedOn = row.insertCell(5);

                    historyNo.innerHTML = i + 1;
                    historyTask.innerHTML = data.history[i].task;
                    historyRobot.innerHTML = data.history[i].robot;
                    historyStatus.innerHTML = data.history[i].status;
                    historyCreatedOn.innerHTML = data.history[i].creat;
                    historyEndedOn.innerHTML = data.history[i].end;
                }
                if ($.fn.DataTable.isDataTable('#table_history')) {
                    $('#table_history').DataTable().destroy();
                }

                $('#table_history').DataTable({
                    "pageLength": 100
                });
            };

            //STATUS
            var robotData = new EventSource('<?php echo base_url('get_api_data_status_robot'); ?>');

            robotData.onmessage = function(event) {
                var data = JSON.parse(event.data);
                if (data.length > 0) {
                    //robot 1
                    document.getElementById('robot1_name').textContent = data[0].info_robot;
                    document.getElementById('robot1_current').textContent = data[0].location_curent;
                    document.getElementById('robot1_battery').textContent = data[0].status_batterylevel;
                    document.getElementById('robot1_charging').textContent = data[0].status_charging;
                    //robot 2
                    document.getElementById('robot2_name').textContent = data[1].info_robot;
                    document.getElementById('robot2_current').textContent = data[1].location_curent;
                    document.getElementById('robot2_battery').textContent = data[1].status_batterylevel;
                    document.getElementById('robot2_charging').textContent = data[1].status_charging;
                }
            };
        });
        </script>



</body>

</html>
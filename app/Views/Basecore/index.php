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
        setZoom('75%');
    };
    </script>
</head>

<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand navbar-light ">
                <div class="container-fluid">
                    <a haref="" class="burger-btn d-block" style="width: 435px">
                        <h4>Monitoring SEER ADM</h4>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto   mb-lg-0">
                            <li class="nav-item dropdown me-3">
                                <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                    aria-expanded="false">

                                    <i class='iconly-boldNotification fs-4 text-gray-600'></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <h6 class="dropdown-header">Notifications</h6>
                                    </li>
                                    <li><a class="dropdown-item">No notification available</a></li>
                                </ul>
                            </li>
                        </ul>
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
                                </li>
                            </ul>
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
        <div class="col">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col">
                                        <div class="col">
                                            <h4
                                                style="border-right: 2px solid #7c8db5; height: 45px; margin: 0; padding: 0;">
                                                DATA TASKLIST</h4>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="name ms-5 py-2">
                                            <h3 class="font-extrabold mb-0" id="count_task_list"></h3>
                                        </div>
                                    </div>
                                    <div class="col d-flex justify-content-end">
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#infotasklist">
                                            Details
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
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
                                            data-bs-target="#infodeliveryfailed">
                                            Details
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
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
                    <div class="col-6 col-lg-3 col-md-6">
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
                                            data-bs-target="#infohistorytask">
                                            Details
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- AWAL ROBOT 1 -->
                <div style="width:50%">
                    <div class="container">
                        <div class="row">
                            <div class="page-content">
                                <section class="row">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="row">
                                            <div class="col-6 col-lg-3 col-md-6">
                                                <div class="card">
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
                                                <div class="card">
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
                                                <div class="card">
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
                                                <div class="card">
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
                                    <div class="col-12 col-lg-3">
                                        <div class="col">
                                            <div class="col">
                                                <div class="card">
                                                    <div class="card-body">
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
                                                <div class="card">
                                                    <div class="card-body">
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
                                                <div class="card">
                                                    <div class="card-body">
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
                                                <div class="card">
                                                    <div class="card-body">
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
                                    <div class="col-12 col-lg-9 ">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>TASK QUEUING LIST</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="container my-4"
                                                            style="  overflow-x: auto; border: 1px solid; border-color: #435ebe; border-radius: 25px; margin-top: 25px; padding-bottom: 25px; padding-left: 50px; padding-right: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- AWAL ROBOT 2 -->
                <div style="width:50%">
                    <div class="container">
                        <div class="row">
                            <div class="page-content">
                                <section class="row">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="row">
                                            <div class="col-6 col-lg-3 col-md-6">
                                                <div class="card">
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
                                                <div class="card">
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
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-3 col-md-6">
                                                <div class="card">
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
                                                <div class="card">
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
                                    <div class="col-12 col-lg-9 ">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>TASK QUEUING LIST</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="container my-4"
                                                            style="  overflow-x: auto; border: 1px solid; border-color: #435ebe; border-radius: 25px; margin-top: 25px; padding-bottom: 25px; padding-left: 50px; padding-right: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
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
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <div class="col">
                                            <div class="col">
                                                <div class="card">
                                                    <div class="card-body">
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
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card">
                                                    <div class="card-body">
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
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card">
                                                    <div class="card-body">
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
                                                <div class="card">
                                                    <div class="card-body">
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
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
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
        // Function Task List
        function getListData() {
            $.ajax({
                url: "<?php echo base_url('get_api_list_task'); ?>",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('#table_list tbody').empty();
                    $.each(data.data, function(index, item) {
                        var row = "<tr>" +
                            "<td class='text-center'>" + (index + 1) + "</td>" +
                            "<td class='text-center'>" + item.task + "</td>" +
                            "</tr>";

                        $('#table_list tbody').append(row);
                    });
                    $('#table_list').DataTable();
                    setTimeout(getListData, 5000);
                    var list_count = data.data.length;
                    $('#count_task_list').html(list_count);
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching data:", error);
                }
            });
        }
        getListData();

        // Function Task Failed
        function getFailedData() {
            $.ajax({
                url: "<?php echo base_url('get_api_data_delivery_failed'); ?>",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('#table_failed tbody').empty();
                    $.each(data.data, function(index, item) {
                        var row = "<tr>" +
                            "<td class='text-center'>" + (index + 1) + "</td>" +
                            "<td class='text-center'>" + item.task_failed + "</td>" +
                            "<td class='text-center'>" + item.robot_failed + "</td>" +
                            "<td class='text-center'>" + item.status_failed + "</td>" +
                            "<td class='text-center'>" + item.creat_failed + "</td>" +
                            "<td class='text-center'>" + item.end_failed + "</td>" +
                            "</tr>";

                        $('#table_failed tbody').append(row);
                    });
                    $('#table_failed').DataTable();
                    setTimeout(getFailedData, 5000);
                    var failed_count = data.data.length;
                    $('#count_task_failed').html(failed_count);
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching data:", error);
                }
            });
        }
        getFailedData();

        // Function Task Success
        function getSuccessData() {
            $.ajax({
                url: "<?php echo base_url('get_api_data_delivery_success'); ?>",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('#table_success tbody').empty();
                    $.each(data.data, function(index, item) {
                        var row = "<tr>" +
                            "<td class='text-center'>" + (index + 1) + "</td>" +
                            "<td class='text-center'>" + item.task_success + "</td>" +
                            "<td class='text-center'>" + item.robot_success + "</td>" +
                            "<td class='text-center'>" + item.status_success + "</td>" +
                            "<td class='text-center'>" + item.creat_success + "</td>" +
                            "<td class='text-center'>" + item.end_success + "</td>" +
                            "</tr>";

                        $('#table_success tbody').append(row);
                    });
                    $('#table_success').DataTable();
                    setTimeout(getSuccessData, 5000);
                    var success_count = data.data.length;
                    $('#count_task_success').html(success_count);
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching data:", error);
                }
            });
        }
        getSuccessData();

        // Function Task History
        function getHistoryData() {
            $.ajax({
                url: "<?php echo base_url('get_api_data_history_task'); ?>",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('#table_history tbody').empty();
                    $.each(data.data, function(index, item) {
                        var row = "<tr>" +
                            "<td class='text-center'>" + (index + 1) + "</td>" +
                            "<td class='text-center'>" + item.task_history + "</td>" +
                            "<td class='text-center'>" + item.robot_history + "</td>" +
                            "<td class='text-center'>" + item.status_history + "</td>" +
                            "<td class='text-center'>" + item.creat_history + "</td>" +
                            "<td class='text-center'>" + item.end_history + "</td>" +
                            "</tr>";

                        $('#table_history tbody').append(row);
                    });
                    $('#table_history').DataTable();
                    setTimeout(getHistoryData, 5000);
                    var history_count = data.data.length;
                    $('#count_task_history').html(history_count);
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching data:", error);
                }
            });
        }
        getHistoryData();

        // DATA STATUS ROBOT
        function getStatusRobot() {
            $.ajax({
                url: "<?php echo base_url('get_api_data_status_robot'); ?>",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    var robots = data.data;
                    if (robots.length > 0) {
                        for (var i = 0; i < robots.length; i++) {
                            var robot = robots[i];
                            $('#robot' + (i + 1) + '_name').html(robot.info_robot);
                            $('#robot' + (i + 1) + '_destination').html(robot
                                .location_target);
                            $('#robot' + (i + 1) + '_next').html(robot.curent_task_before);
                            $('#robot' + (i + 1) + '_remaining').html(robot.remaining);
                            $('#robot' + (i + 1) + '_status').html(robot.data_curent_task);
                            $('#robot' + (i + 1) + '_current').html(robot.location_curent);
                            $('#robot' + (i + 1) + '_battery').html(robot
                                .status_batterylevel);
                            $('#robot' + (i + 1) + '_charging').html(robot.status_charging ?
                                'Charging' : 'Not Charging');
                            $('#robot' + (i + 1) + '_map').html(robot.status_status_map);
                            $('#robot' + (i + 1) + '_group').html(robot.status_group_agv);
                        }

                        setTimeout(getStatusRobot, 5000);
                    } else {
                        console.log("No robots found");
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching data:", error);
                }
            });
        }
        getStatusRobot();

        // Function Queue Robot 1
        function getQueueRobot1Data() {
            $.ajax({
                url: "<?php echo base_url('get_api_data_queue_robot1'); ?>",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    var desiredTasks = ["ProductBV1", "ProductBV2", "ProductRUV", "ProductCTCB2",
                        "ProductBLV", "ProductT5", "ProductCTCB1", "ProductBUV"
                    ];
                    $('#table_queue_robot1 tbody').empty();
                    $.each(data.data, function(index, item) {
                        if (desiredTasks.includes(item.task)) {
                            var row = "<tr>" +
                                "<td class='text-center'>" + (index + 1) + "</td>" +
                                "<td class='text-center'>" + item.task + "</td>" +
                                "<td class='text-center'>" + item.status + "</td>" +
                                "<td class='text-center'>" + item.creat + "</td>" +
                                "<td class='text-center'>" + item.end + "</td>" +
                                "</tr>";

                            $('#table_queue_robot1 tbody').append(row);
                        }

                    });
                    $('#table_queue_robot1').DataTable();
                    setTimeout(getQueueRobot1Data, 5000);
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching data:", error);
                }
            });
        }
        getQueueRobot1Data();


        // Function Queue Robot 2
        function getQueueRobot2Data() {
            $.ajax({
                url: "<?php echo base_url('get_api_data_queue_robot2'); ?>",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('#table_queue_robot2 tbody').empty();
                    $.each(data.data, function(index, item) {
                        var row = "<tr>" +
                            "<td class='text-center'>" + (index + 1) + "</td>" +
                            "<td class='text-center'>" + item.task + "</td>" +
                            "<td class='text-center'>" + item.status + "</td>" +
                            "<td class='text-center'>" + item.creat + "</td>" +
                            "<td class='text-center'>" + item.end + "</td>" +
                            "</tr>";

                        $('#table_queue_robot2 tbody').append(row);
                    });
                    $('#table_queue_robot2').DataTable();
                    setTimeout(getQueueRobot2Data, 5000);
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching data:", error);
                }
            });
        }
        getQueueRobot2Data();
    });
    </script>
</body>

</html>
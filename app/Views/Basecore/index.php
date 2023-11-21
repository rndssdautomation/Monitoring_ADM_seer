<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM</title>
    <link rel="stylesheet" href="<?= base_url();?>/assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/font.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/app.css">
    <link rel="shortcut icon" href="<?= base_url();?>/assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand navbar-light ">
                <div class="container-fluid">
                    <a haref="" class="burger-btn d-block">
                        <i class="iconly-boldFilter fs-3 text-black-600"></i>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
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
        <div class="page-heading" style="margin: 25px">
            <h3>Monitoring SEER ADM</h3>
            <div class="page-title">
                <div class="row justify-content-between">
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>TASK LIST</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                        <div class="name ms-4 py-2">
                                            <h3 class="font-extrabold mb-0" id="count_task_list"></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-end">
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
                                <h4>DELIVERY FAILED</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                        <div class="name ms-4 py-2">
                                            <h3 class="font-extrabold mb-0" id="count_task_failed"></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-end">
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
                                <h4>DELIVERY SUCCESS</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                        <div class="name ms-4 py-2">
                                            <h3 class="font-extrabold mb-0" id="count_task_success"></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-end">
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
                                <h4>HISTORY TASK</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                        <div class="name ms-4 py-2">
                                            <h3 class="font-extrabold mb-0" id="count_task_history"></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-end">
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
        </div>
        <div class="col">
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
                                                                <div class="stats-icon blue mb-2">
                                                                    <i class="iconly-boldUser"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Robot
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0 " id="robot1_name">
                                                                    AF-01
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
                                                                <div class="stats-icon pink mb-2">
                                                                    <i class="iconly-boldSend"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Destination
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0 "
                                                                    id="robot1_destination">
                                                                    AP34
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
                                                                <div class="stats-icon orange mb-2">
                                                                    <i class="iconly-boldLocation"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Next Task
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0" id="robot1_next">
                                                                    ProductCTCB2
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
                                                                <div class="stats-icon green mb-2">
                                                                    <i class="iconly-boldCategory"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8 px-1">
                                                                <h6 class="text-muted font-semibold"> Queue
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0" id="robot1_remaining">
                                                                    23
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
                                                                <div class="stats-icon blue mb-2">
                                                                    <i class="iconly-boldUser"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Status
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0 " id="robot1_status">
                                                                    running
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
                                                                <div class="stats-icon pink mb-2">
                                                                    <i class="iconly-boldCategory"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Location
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0 " id="robot1_current">
                                                                    AP12
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
                                                                <div class="stats-icon red mb-2">
                                                                    <i class="iconly-boldArrow---Right"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Battery
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0" id="robot1_battery">
                                                                    98
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
                                                                <div class="stats-icon orange mb-2">
                                                                    <i class="iconly-boldLocation"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Group
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0" id="robot1_group">
                                                                    LPK
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
                                                                <div class="stats-icon green mb-2">
                                                                    <i class="iconly-boldSend"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8 px-1">
                                                                <h6 class="text-muted font-semibold">
                                                                    Map
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0" id="robot1_map">
                                                                    ADM
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
                                                                <div class="stats-icon purple mb-2 ">
                                                                    <i class="iconly-boldDocument"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Charging
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0 " id="robot1_charging">
                                                                    false
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
                                                                <div class="stats-icon blue mb-2">
                                                                    <i class="iconly-boldUser"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Robot
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0 " id="robot1_name">
                                                                    AF-01
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
                                                                <div class="stats-icon pink mb-2">
                                                                    <i class="iconly-boldSend"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Destination
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0 "
<<<<<<< HEAD
                                                                    id="robot1_destination">
                                                                    AP34
=======
                                                                    id="robot2_destination">
>>>>>>> f905c8a3986a3b8a9be9e041586b04b0b248c90e
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
                                                                <div class="stats-icon orange mb-2">
                                                                    <i class="iconly-boldLocation"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Next Task
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0" id="robot1_next">
                                                                    ProductCTCB2
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
                                                                <div class="stats-icon green mb-2">
                                                                    <i class="iconly-boldCategory"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8 px-1">
                                                                <h6 class="text-muted font-semibold"> Queue
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0" id="robot1_remaining">
                                                                    23
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
                                                                <div class="stats-icon blue mb-2">
                                                                    <i class="iconly-boldUser"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Status
                                                                </h6>
<<<<<<< HEAD
                                                                <h6 class="font-extrabold mb-0 " id="robot1_status">
                                                                    running
=======
                                                                <h6 class="font-extrabold mb-0 " id="robot2_status">
>>>>>>> f905c8a3986a3b8a9be9e041586b04b0b248c90e
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
                                                                <div class="stats-icon pink mb-2">
                                                                    <i class="iconly-boldCategory"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Location
                                                                </h6>
<<<<<<< HEAD
                                                                <h6 class="font-extrabold mb-0 " id="robot1_current">
                                                                    AP12
=======
                                                                <h6 class="font-extrabold mb-0 " id="robot2_current">
>>>>>>> f905c8a3986a3b8a9be9e041586b04b0b248c90e
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card">
<<<<<<< HEAD
                                                    <div class="card-body">
=======
                                                    <div class="card-body px-4 py-4-5" style="min-height: 150px;"
                                                        style="height: 150px;">
                                                        <div class="row">
                                                            <div
                                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start">
                                                                <div class="stats-icon orange mb-2">
                                                                    <i class="iconly-boldLocation"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Group
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0" id="robot2_group">
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card">
                                                    <div class="card-body px-4 py-4-5" style="min-height: 150px;"
                                                        style="height: 150px;">
                                                        <div class="row">
                                                            <div
                                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start">
                                                                <div class="stats-icon green mb-2">
                                                                    <i class="iconly-boldSend"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8 px-1">
                                                                <h6 class="text-muted font-semibold">
                                                                    Map
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0" id="robot2_map">
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card">
                                                    <div class="card-body px-4 py-4-5" style="min-height: 150px;"
                                                        style="height: 150px;">
>>>>>>> f905c8a3986a3b8a9be9e041586b04b0b248c90e
                                                        <div class="row">
                                                            <div
                                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start">
                                                                <div class="stats-icon red mb-2">
                                                                    <i class="iconly-boldArrow---Right"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Battery
                                                                </h6>
<<<<<<< HEAD
                                                                <h6 class="font-extrabold mb-0" id="robot1_battery">
                                                                    98
=======
                                                                <h6 class="font-extrabold mb-0" id="robot2_battery">
>>>>>>> f905c8a3986a3b8a9be9e041586b04b0b248c90e
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
                                                                <div class="stats-icon orange mb-2">
                                                                    <i class="iconly-boldLocation"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Group
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0" id="robot1_group">
                                                                    LPK
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
                                                                <div class="stats-icon green mb-2">
                                                                    <i class="iconly-boldSend"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8 px-1">
                                                                <h6 class="text-muted font-semibold">
                                                                    Map
                                                                </h6>
                                                                <h6 class="font-extrabold mb-0" id="robot1_map">
                                                                    ADM
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
                                                                <div class="stats-icon purple mb-2 ">
                                                                    <i class="iconly-boldDocument"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                                <h6 class="text-muted font-semibold">
                                                                    Charging
                                                                </h6>
<<<<<<< HEAD
                                                                <h6 class="font-extrabold mb-0 " id="robot1_charging">
                                                                    false
=======
                                                                <h6 class="font-extrabold mb-0 " id="robot2_charging">
>>>>>>> f905c8a3986a3b8a9be9e041586b04b0b248c90e
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
    });
    </script>
    <!-- <script>
    $(document).ready(function() {

        //---------task success---------

        var task_success = $('#table_success').DataTable({
            columns: [{
                    data: null,
                    render: 'meta.row+1',
                    className: "text-center"
                },
                {
                    data: 'task_success',
                    className: "text-center"
                },
                {
                    data: 'robot_success',
                    className: "text-center"
                },
                {
                    data: 'status_success',
                    className: "text-center"
                },
                {
                    data: 'creat_success',
                    className: "text-center"
                },
                {
                    data: 'end_success',
                    className: "text-center"
                }
            ],
            "keys": true,
        });
        //Function task success
        function taskdatasuccess() {
            $.ajax({
                url: "<?php echo base_url('get_api_data_delivery_success'); ?>",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    task_success.clear().rows.add(data.data).draw();
                    setTimeout(taskdatasuccess, 5000);
                    var success_count = data.data.length;
                    $('#count_task_success').html(success_count);
                }
            });
        }
        taskdatasuccess();

    });
    </script> -->
</body>

</html>
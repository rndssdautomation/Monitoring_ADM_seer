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
        <div class="page-heading">
            <!-- <h3>DASHBOARD</h3> -->
            <div class="page-title">
                <div class="row justify-content-between">
                    <div class="col-8 col-md-4 order-md-1 order-first">
                        <h3>ADM</h3>
                    </div>
                    <script>
                    const connectBtn = document.getElementById('connectBtn');
                    const resetBtn = document.getElementById('resetBtn');
                    const inputIP = document.getElementById('inputIP');

                    inputIP.addEventListener('input', function() {
                        connectBtn.removeAttribute('disabled');
                    });

                    resetBtn.addEventListener('click', function() {
                        connectBtn.innerText = 'konek';
                        inputIP.readOnly = false;
                        resetBtn.disabled = true;
                    });

                    connectBtn.addEventListener('click', function() {
                        connectBtn.innerText = 'konek';
                        inputIP.readOnly = true;
                        resetBtn.disabled = false;
                    });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-6 col-lg-2 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5" style="min-height: 150px;"
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
                                                    Status
                                                </h6>
                                                <select class="form-select font-extrabold" id="robot_select">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-2 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5" style="min-height: 150px;"
                                        style="height: 150px;">
                                        <div class="row">
                                            <div
                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start">
                                                <div class="stats-icon pink mb-2">
                                                    <i class="iconly-boldCategory"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                <h6 class="text-muted font-semibold">
                                                    Status
                                                </h6>
                                                <h6 class="font-extrabold mb-0 " id="status_robot">
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-2 col-md-6">
                                <div class="card">
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
                                                    saat ini
                                                </h6>
                                                <h6 class="font-extrabold mb-0" id="location_curent"></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-2 col-md-6">
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
                                                    tujuan
                                                </h6>
                                                <h6 class="font-extrabold mb-0" id="destination_task"></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-2 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5" style="min-height: 150px;"
                                        style="height: 150px;">
                                        <div class="row">
                                            <div
                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start">
                                                <div class="stats-icon red mb-2">
                                                    <i class="iconly-boldArrow---Right"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                <h6 class="text-muted font-semibold">
                                                    tugas selanjut nya
                                                </h6>
                                                <h6 class="font-extrabold mb-0" id="next_task"></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-2 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5" style="min-height: 150px;"
                                        style="height: 150px;">
                                        <div class="row">
                                            <div
                                                class="col-md-4 col-lg-12 col-xl-12 col-xxl-4 d-flex justify-content-start">
                                                <div class="stats-icon purple mb-2 ">
                                                    <i class="iconly-boldDocument"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-8">
                                                <h6 class="text-muted font-semibold">
                                                    sisa tugas
                                                </h6>
                                                <h6 class="font-extrabold mb-0 " id="count_task_queue"></h6>
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
                                        <h4>queue antrian</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="container my-4"
                                            style="  overflow-x: auto; border: 1px solid; border-color: #435ebe; border-radius: 25px; margin-top: 25px; padding-bottom: 25px; padding-left: 50px; padding-right: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                            <p></p>
                                            <table class="table my-2" id="table_queue">
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>STATUS ROBOT</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="container my-4"
                                            style=" overflow-x: auto; border: 1px solid; border-color: #435ebe; border-radius: 25px;  padding-bottom: 25px; padding-left: 50px; padding-right: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                            <p>
                                            </p>
                                            <table class="table my-2" id="robot_list">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 5%; text-align: center;">No</th>
                                                        <th style="text-align: center;"></th>
                                                        <th style="text-align: center;"></th>
                                                        <th style="text-align: center;"></th>
                                                        <th style="text-align: center;"></th>
                                                        <th style="text-align: center;"></th>
                                                        <th style="text-align: center;"></th>
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
                        <div class="card">
                            <div class="card-header">
                                <h4>Tasklist</h4>
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
                                            info
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>task</h4>
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
                                            task
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>task</h4>
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
                                            task
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>histori</h4>
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
                                            task
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Info Total Task-->
                    <div class="modal fade" id="infotasklist" tabindex="-1" aria-labelledby="InfoLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">task List</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <table class="table my-2" id="task_data">
                                        </table>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir Modal Info Total Task-->
                    <!-- Modal Info Delivery Failed-->
                    <div class="modal fade" id="infodeliveryfailed" tabindex="-1" aria-labelledby="InfoLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">gagal </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container" style="overflow-x: auto;">
                                        <table class="table my-2" id="table_failed">
                                            <thead>
                                                <tr>
                                                    <th style="width: 5%; text-align: center;">No</th>
                                                    <th style="text-align: center;">tugas</th>
                                                    <th style="text-align: center;">robot</th>
                                                    <th style="text-align: center;">Status</th>
                                                    <th style="text-align: center;">mulai</th>
                                                    <th style="text-align: center;">akhir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir Modal Delivery Failed-->
                    <!-- Modal Info Delivery Success-->
                    <div class="modal fade" id="infodeliverysuccess" tabindex="-1" aria-labelledby="InfoLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">berhasil </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container" style="overflow-x: auto;">
                                        <table class="table my-2" id="table_success">
                                            <thead>
                                                <tr>
                                                    <th style="width: 5%; text-align: center;">No</th>
                                                    <th style="text-align: center;">tugas</th>
                                                    <th style="text-align: center;">robot</th>
                                                    <th style="text-align: center;">Status</th>
                                                    <th style="text-align: center;">mulai</th>
                                                    <th style="text-align: center;">akhir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir Modal Delivery Success-->
                    <!-- Modal Info History Task-->
                    <div class="modal fade" id="infohistorytask" tabindex="-1" aria-labelledby="InfoLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">task </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container" style="overflow-x: auto;">
                                        <table class="table my-2" id="table_history">
                                            <thead>
                                                <tr>
                                                    <th style="width: 5%; text-align: center;">No</th>
                                                    <th style="text-align: center;">tugas</th>
                                                    <th style="text-align: center;">robot</th>
                                                    <th style="text-align: center;">Status</th>
                                                    <th style="text-align: center;">mulai</th>
                                                    <th style="text-align: center;">akhir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>/assets/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="<?= base_url();?>/assets/js/jquery.dataTables.min.js"></script>
    </div>
    <script src="<?= base_url();?>/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url();?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url();?>/assets/js/main.js"></script>
</body>

</html>
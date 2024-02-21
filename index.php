<head>
    <?php include 'includes/head.inc.php'; ?>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="wrapper">
        <?php include 'includes/nav.inc.php'; ?>

        <div class="main">
            <?php include 'includes/topnav.inc.php'; ?>
            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h3 class="fw-bold fs-2 mb-4">Dashboard</h3>
                        <div class="row">
                            <div class="col-12 col-md-4 ">
                                <div class="card border-0 card-today">
                                    <div class="card-body py-4 text-center">
                                        <i class="fa fa-list card-icon"></i>
                                        <h3 class="mb-3 fw-bold">
                                            Today's Expenses
                                        </h3>
                                        <h4 class="mb-3 fw-bold">
                                            $0
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 ">
                                <div class="card border-0 card-yesterday">
                                    <div class="card-body py-4 text-center">
                                        <i class="fa fa-rotate-left card-icon"></i>
                                        <h3 class="mb-3 fw-bold">
                                            Yesterday's Expenses
                                        </h3>
                                        <h4 class="mb-3 fw-bold">
                                            $0
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 ">
                                <div class="card border-0 card-last-7-days">
                                    <div class="card-body py-4 text-center">
                                        <i class="fa fa-calendar-o card-icon"></i>
                                        <h3 class="mb-3 fw-bold">
                                            Last 7 Days' Expenses
                                        </h3>
                                        <h4 class="mb-3 fw-bold">
                                            $0
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 ">
                                <div class="card border-0 card-last-30-days">
                                    <div class="card-body py-4 text-center">
                                    <i class="fa fa-calendar card-icon" ></i>
                                        <h3 class="mb-3 fw-bold">
                                            Last 30 Days' Expenses
                                        </h3>
                                        <h4 class="mb-3 fw-bold">
                                            $0
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 ">
                                <div class="card border-0 card-budget-left">
                                    <div class="card-body py-4 text-center">
                                        <i class="fa fa-money card-icon"></i>
                                        <h3 class="mb-3 fw-bold">
                                            Monthly Budget Left
                                        </h3>
                                        <h4 class="mb-3 fw-bold">
                                            $0
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 ">
                                <div class="card border-0 card-total-expenses">
                                    <div class="card-body py-4 text-center">
                                        <i class="fa fa-file-text-o card-icon"></i>
                                        <h3 class="mb-3 fw-bold">
                                            Total Expenses
                                        </h3>
                                        <h4 class="mb-3 fw-bold">
                                            $0
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <?php include 'includes/footer.inc.php'; ?>
</body>
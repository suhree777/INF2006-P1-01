<head>
    <?php include 'includes/head.inc.php'; ?>
    <link rel="stylesheet" href="css/report.css">
</head>

<body>
    <div class="wrapper">
        <?php include 'includes/nav.inc.php'; ?>

        <div class="main">
            <?php include 'includes/topnav.inc.php'; ?>

            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-12">
                                <div class="card border-0 card-report">
                                    <div class="card-body py-5 text-center">
                                        <h3 class="mb-4 fw-bold">Datewise Expense Report</h3>
                                        <form>
                                            <div class="form-group mb-4">
                                                <label for="fromDate" class="form-label">From:</label>
                                                <input type="date" class="form-control text-center" id="fromDate" required>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="toDate" class="form-label">To:</label>
                                                <input type="date" class="form-control text-center" id="toDate" required>
                                            </div>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <?php include 'includes/footer.inc.php'; ?>
        </div>
    </div>
</body>
<head>
    <?php include 'includes/head.inc.php'; ?>
    <link rel="stylesheet" href="css/budget.css">
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
                                <div class="card border-0 card-budget">
                                    <div class="card-body py-5 text-center">
                                        <h3 class="mb-4 fw-bold">Enter your budget for this month:</h3>
                                        <form>
                                            <div class="mb-3">
                                                <input type="text" class="form-control text-center" id="budgetInput" placeholder="$0" required>
                                            </div>
                                            <button type="submit" class="btn btn-success d-block mx-auto">Submit</button>
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
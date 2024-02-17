<head>
    <?php include 'includes/head.inc.php'; ?>
    <link rel="stylesheet" href="css/manexp.css">
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
                                <div class="card border-0 card-man-exp">
                                    <div class="card-body py-5 text-center">
                                        <div class="card-body">
                                            <h2 class="text-start mb-4">Expenses</h2>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Item</th>
                                                        <th scope="col">Cost</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Grocery</td>
                                                        <td>$196.00</td>
                                                        <td>01-04-2023</td>
                                                        <td>
                                                            <button class="btn"><i class="far fa-trash-alt"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
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
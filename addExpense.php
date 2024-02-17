<head>
    <?php include 'includes/head.inc.php'; ?>
    <link rel="stylesheet" href="css/addexp.css">
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
                                <div class="card border-0 card-add-exp">
                                    <div class="card-body py-5 text-center">
                                        <form>
                                            <!-- Date of Expense -->
                                            <div class="mb-4">
                                                <label for="dateOfExpense" class="form-label">Date of Expense:</label>
                                                <input type="date" class="form-control text-center" id="dateOfExpense" required>
                                            </div>

                                            <!-- Item Name -->
                                            <div class="mb-4">
                                                <label for="itemName" class="form-label">Item:</label>
                                                <input type="text" class="form-control text-center" id="itemName" placeholder="What did you buy?" required>
                                            </div>

                                            <!-- Cost of Item -->
                                            <div class="mb-4">
                                                <label for="itemCost" class="form-label">Cost of Item:</label>
                                                <input type="number" class="form-control text-center" id="itemCost" placeholder="How much did it cost?" required>
                                            </div>

                                            <!-- Submit Button -->
                                            <button type="submit" class="btn btn-success">Add</button>
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
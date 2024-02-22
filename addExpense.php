<head>
    <?php include 'includes/head.inc.php'; ?>
    <link rel="stylesheet" href="css/addexp.css">
</head>


<?php
include "/var/www/inc/dbinfo.inc";

// If the form is submitted, process the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create database connection
    $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    // Get form data and sanitize it
    $dateOfExpense = mysqli_real_escape_string($connection, $_POST['dateOfExpense']);
    $itemName = mysqli_real_escape_string($connection, $_POST['itemName']);
    $itemCost = mysqli_real_escape_string($connection, $_POST['itemCost']);

    // Prepare an insert statement
    $query = "INSERT INTO expenses (Date, Item, Cost) VALUES (?, ?, ?)";

    if ($stmt = mysqli_prepare($connection, $query)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "issd", $userId, $dateOfExpense, $itemName, $itemCost);

        // Execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            echo "<p>Expense added successfully.</p>";
        } else {
            echo "<p>Error adding expense: " . mysqli_stmt_error($stmt) . "</p>";
        }

        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        echo "<p>Error preparing statement: " . mysqli_error($connection) . "</p>";
    }

    // Close connection
    mysqli_close($connection);
}
?>

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
                                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
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
                                                <input type="number" class="form-control text-center" id="itemCost" placeholder="How much did it cost?" step="0.01" required>
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
<head>
    <?php include 'includes/head.inc.php'; ?>
    <link rel="stylesheet" href="css/addexp.css">
</head>


<?php
include "/var/www/inc/dbinfo.inc";

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create database connection
    $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Retrieve and sanitize form data
    $userId = filter_input(INPUT_POST, 'UserId', FILTER_SANITIZE_NUMBER_INT);
    $itemName = filter_input(INPUT_POST, 'Item', FILTER_SANITIZE_STRING);
    $itemCost = filter_input(INPUT_POST, 'Cost', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $expenseDate = filter_input(INPUT_POST, 'Date', FILTER_SANITIZE_STRING); // Assuming you're capturing the date in the form

    // Prepare an insert statement
    $stmt = $connection->prepare("INSERT INTO expenses (UserId, Item, Cost, Date) VALUES (?, ?, ?, ?)");

    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("issd", $userId, $itemName, $itemCost, $expenseDate);

    // Set parameters and execute
    if ($stmt->execute()) {
        echo "Expense added successfully.";
    } else {
        echo "ERROR: Could not execute query: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $connection->close();
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
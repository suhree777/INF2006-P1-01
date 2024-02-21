<head>
    <?php include 'includes/head.inc.php'; ?>
    <link rel="stylesheet" href="css/addexp.css">
</head>

<?php
include "../inc/dbinfo.inc"; // Include the database connection info

// Database connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Sanitize POST data
    $userId = mysqli_real_escape_string($conn, $_POST['UserId']);
    $item = mysqli_real_escape_string($conn, $_POST['Item']);
    $cost = mysqli_real_escape_string($conn, $_POST['Cost']);
    $date = mysqli_real_escape_string($conn, $_POST['Date']);

    // Prepare an insert statement
    $sql = "INSERT INTO expense (UserId, Item, Cost, Date) VALUES (?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("issd", $userId, $item, $cost, $date);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            echo "<p>Expense added successfully.</p>";
        } else {
            echo "<p>Error: " . $stmt->error . "</p>";
        }
        
        // Close statement
        $stmt->close();
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
}

// Close connection
$conn->close();
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
                                            <!-- User ID (hidden, assuming you are getting it from session or another method) -->
                                            <input type="hidden" name="UserId" value="TheUserIdValue" />

                                            <!-- Date of Expense -->
                                            <div class="mb-4">
                                                <label for="dateOfExpense" class="form-label">Date of Expense:</label>
                                                <input type="date" class="form-control text-center" id="dateOfExpense" name="Date" required>
                                            </div>

                                            <!-- Item Name -->
                                            <div class="mb-4">
                                                <label for="itemName" class="form-label">Item:</label>
                                                <input type="text" class="form-control text-center" id="itemName" name="Item" placeholder="What did you buy?" required>
                                            </div>

                                            <!-- Cost of Item -->
                                            <div class="mb-4">
                                                <label for="itemCost" class="form-label">Cost of Item:</label>
                                                <input type="number" class="form-control text-center" id="itemCost" name="Cost" placeholder="How much did it cost?" required>
                                            </div>

                                            <!-- Submit Button -->
                                            <button type="submit" name="submit" class="btn btn-success">Add Expense</button>
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
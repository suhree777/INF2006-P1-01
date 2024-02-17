<aside id="sidebar">
    <div class="d-flex">
        <button class="toggle-btn" type="button">
            <i class="lni lni-grid-alt"></i>
        </button>
        <div class="sidebar-logo">
            <a href="#">Expense Tracker</a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="index.php" class="sidebar-link">
                <i class="lni lni-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="budget.php" class="sidebar-link">
                <i class="lni lni-wallet"></i>
                <span>Set Budget</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#expenses"
                aria-expanded="false" aria-controls="expenses">
                <i class="lni lni-plus"></i>
                <span>Expenses</span>
            </a>
            <ul id="expenses" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="addExpense.php" class="sidebar-link">Add Expenses</a>
                </li>
                <li class="sidebar-item">
                    <a href="manExpense.php" class="sidebar-link">Manage Expenses</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="report.php" class="sidebar-link">
                <i class="lni lni-graph"></i>
                <span>Datewise Expense Report</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-footer">
        <a href="#" class="sidebar-link">
            <i class="lni lni-exit "></i>
            <span>Logout</span>
        </a>
    </div>
</aside>
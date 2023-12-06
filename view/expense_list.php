<?php
  include("../controller/controller.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/style.css">
  <title>Expense List</title>
</head>
<body>
  <header>
    <div class="container">
      <a class="home-link" href="index.php"><h4>EManage system</h4></a>
      <nav>
        <ul>
          <li><a href="add_expense.php">Add</a></li>
          <li><a href="edit_expense.php">Edit</a></li>
          <li><a href="expense_list.php">List</a></li>
          <li><a href="expense_report.php">Report</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="container">
 
    <table>
      <tr>
        <th>ID</th>
        <th>Amount</th>
        <th>Date</th>
      </tr>
      <?php
        $control = new ExpenseController();
        $control->viewExpensesAction1();


      ?>
    </table>

    <table>
      <tr>
        <th>Catagory Id</th>
        <th>Name</th>
      </tr>
      <?php
        $control = new ExpenseController();
        $control->viewExpensesAction2();

      ?>
    </table>
  </div>

  <footer>
    <h4>&#169; Copyright-Biruk Lemma - 2023</h4>
  </footer>
</body>
</html>
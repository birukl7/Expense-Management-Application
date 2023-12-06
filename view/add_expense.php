<?php
  include("../controller/controller.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/style.css">
  <title>Add to Expense</title>
</head>
<body>
  <header>
      <div class="container">
        <a class="home-link" href="../index.php"><h4>EManage system</h4></a>
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
  <main>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
      <label for="name1">Name</label> <br>
      <input type="text" name="name" id="name1"> <br>
      <label for="catagory1">Catagory</label> <br>
      <input type="text" name="catagory_id" id="catagory1"> <br>
      <label for="amount1">Amount</label> <br>
      <input type="text" name="amount" id="amount1" /> <br>
      <label for="date1">Date</label> <br>
      <input type="date" name="date" id="date1"> <br>
      <input type="submit" value="Submit" name="submit">

    </form>

    <?php
      $control = new ExpenseController();
      $control->addExpenseAction();
    ?>
  </main>
    </div>

  
  <footer>
    <h4>&#169; Copyright-Biruk Lemma - 2023</h4>
  </footer>
</body>
</html>
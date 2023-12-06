<?php
  include("../controller/controller.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/style.css">
  <title>Edit Expense</title>
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
      <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
      <fieldset> 
        <legend>Update Expense</legend>
        <label for="id">Enter id you wish to update</label><br>
        <input type="text" name="id" id="id"> <br>
        <label for="name">Enter the updated name </label> <br>
        <input type="text" name="update-name" id="name"> <br>
        <label for="update-name">Enter the updated amount</label> <br>
        <input type="text" name="update-amount" id="update-name"> <br>
        <label for="date">Enter updated date</label> <br>
        <input type="date" name="update-date" id="date"> <br>
        <label for="catagory_id">Enter updated catagory id</label> <br>
        <input type="text" name="catagory_id" id="catagory_id"> <br>
        <input type="submit" value="Submit" name="submit-update-id">
      </fieldset>

    </form>
    <br> <br> <br>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
      <fieldset> 
        <legend>Delete Expense</legend> 
        <label for="catagory-id">Enter catagory id</label> <br>
        <input type="text" name="delete-catagory-id" id="catagory-id"> <br>
        <input type="submit" value="Submit" name="submit-delete">
      </fieldset>
    </form>
    <?php
      $control = new ExpenseController();
      $control->editExpenseAction();
      $control->deleteExpenseAction();
    ?>
    </div>


  <footer>
      <h4>&#169; Copyright-Biruk Lemma - 2023</h4>
    </footer>
</body>
</html>
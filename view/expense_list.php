<?php
  include("../controller/controller.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Expense List</title>
</head>
<body>
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
</body>
</html>
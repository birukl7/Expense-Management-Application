<?php
  include("../controller/controller.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add to Expense</title>
</head>
<body>
  <header>
    <h1>Expense Mangement System</h1>
  </header>

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
  
</body>
</html>
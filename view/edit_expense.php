<?php
  include("../controller/controller.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Expense</title>
</head>
<body>
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
</body>
</html>
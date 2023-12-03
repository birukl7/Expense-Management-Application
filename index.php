<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <title>Expense Management System</title>
</head>
<body>
  <header>
    <div class="container">
      <a class="home-link" href="index.php"><h4>EManage system</h4></a>
      <nav>
        <ul>
          <li><a href="view/add_expense.php">Add</a></li>
          <li><a href="view/edit_expense.php">Edit</a></li>
          <li><a href="view/expense_list.php">List</a></li>
          <li><a href="view/expense_report.php">Report</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    
    <div class="container">

        <div class="cards">
          <a href="view/add_expense.php">
            <button class="btn"><img src="images/plus.svg" alt=""> Add Expense</button>
          </a>
        </div>


        <div class="cards">
          <a href="view/edit_expense.php">
            <button class="btn"><img src="images/plus.svg" alt=""> Edit Expense</button>
          </a>
        </div>



        <div class="cards">
          <a href="view/expense_list.php">
          <button class="btn"><img src="images/plus.svg" alt=""> Show Expense List</button>
          </a>
        </div>



        <div class="cards">
          <a href="view/expense_report.php">
            <button class="btn"><img src="images/plus.svg" alt=""> Show Expense Report</button>
          </a>
        </div>
  

    </div>
  </main>

  <footer>
    <h4>&#169; Copyright-Biruk Lemma - 2023</h4>
  </footer>
</body>
</html>
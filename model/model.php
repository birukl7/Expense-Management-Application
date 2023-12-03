<?php
  class ExpenseModel {
    private $mysqli;

    function __construct($servername, $username, $password, $database)
    {
      $this->mysqli = new mysqli($servername, $username, $password, $database);

      if($this->mysqli->connect_error){
        die("connection failed: ". $this->mysqli->connect_error);
      }
    }

    
    public function createExpense($amount, $date, $catagory_id) {
      $result = $this->mysqli->prepare("INSERT INTO `expenses` (amount, date, category_id) VALUES (?,?,?)");
      $result->bind_param("dsi", $amount, $date, $catagory_id);

      if($result->execute()){
        echo "Task created successfully.";
      } else {
        echo "Error creating task: ".$result->error;
      }

      $result->close();
    }

    public function getExpenseById($id){
      $result = $this->mysqli->prepare("SELECT * FROM `expenses` WHERE id = ?");
      $result->bind_param("i", $id);

      if($result->execute()){
        echo "Task created successfully.";
      } else {
        echo "Error creating task: ".$result->error;
      }
      $result->close();
    }

    public function updateExpense($id, $amount, $date, $catagory_id){
      $result = $this->mysqli->prepare("UPDATE `expenses` SET amount = ?, date = ?, category_id = ? WHERE id = ?");
      $result->bind_param("dsii", $amount, $date, $catagory_id, $id);

      if($result->execute()){
        echo "Task created successfully.";
      } else {
        echo "Error creating task: ".$result->error;
      }
      $result->close();
    }

    public function deleteExpense($id){
      $result = $this->mysqli->prepare("DELETE FROM `expenses` WHERE id=?");
      $result->bind_param("i", $id);

      if($result->execute()){
        echo "Task created successfully.";
      } else {
        echo "Error creating task: ".$result->error;
      }
      $result->close();
    }

    public function getAllExpense(){
      $result = $this->mysqli->prepare("SELECT * FROM `expenses`");

      $result->execute();
      $sql = $result->get_result();

      while($row = $sql->fetch_assoc()){
        echo "<tr> 
                <td>".$row['id']."</td>
                <td>".$row['amount']."</td>
                <td>".$row['date']."</td>
              </tr>";
      }
      $result->close();
    }

    public function __destruct()
    {
      $this->mysqli->close();
    }
  }

  class CatagoryModel {
    private $mysqli;

    function __construct($servername, $username, $password, $database)
    {
      $this->mysqli = new mysqli($servername, $username, $password, $database);

      if($this->mysqli->connect_error){
        die("connection failed: ". $this->mysqli->connect_error);
      }
    }
 
    public function createCatagory($name){
      $result = $this->mysqli->prepare("INSERT INTO `categories` (name) VALUES (?)");
      $result->bind_param("s", $name);

      if($result->execute()){
        echo "Task created successfully.";
      } else {
        echo "Error creating task: ".$result->error;
      }
    }

    public function updateCatagory($id, $name){
      $result = $this->mysqli->prepare("UPDATE `categories` SET name= ? WHERE id = ?");
      $result->bind_param("si", $name, $id);

      if($result->execute()){
        echo "Task created successfully.";
      } else {
        echo "Error creating task: ".$result->error;
      }
      $result->close();
    }

    public function deleteCatagory($id){
      $result = $this->mysqli->prepare("DELETE FROM `categories` WHERE id=?");
      $result->bind_param("i", $id);

      if($result->execute()){
        echo "Task created successfully.";
      } else {
        echo "Error creating task: ".$result->error;
      }
      $result->close();
    }

    public function getCatagoryById($id){
      $result = $this->mysqli->prepare("SELECT * FROM `catagories` WHERE id=?");
      $result->bind_param("i", $id);

      if($result->execute()){
        echo "Task created successfully.";
      } else {
        echo "Error creating task: ".$result->error;
      }

    }

    public function getAllCatagories(){
      $result = $this->mysqli->prepare("SELECT * FROM `categories`");
      $result->execute();
      $sql = $result->get_result();
      while($row = $sql->fetch_assoc()){
        echo "<tr> 
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
              </tr>";

      }
    }

    public function __destruct()
    {
      $this->mysqli->close();
    }
  }


?>
<?php
  include("../model/model.php");
  class ExpenseController{

    public function __construct()
    {
      
    }
    public function addExpenseAction(){
      $expenseModel = new ExpenseModel("localhost", "root", "", "expense_management");
      $catagoryModel = new CatagoryModel("localhost", "root", "", "expense_management");

      if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $catagory_id = $_POST["catagory_id"];
        $amount = $_POST["amount"];
        $date = $_POST["date"];

        $catagoryModel->createCatagory($name);
        $expenseModel->createExpense($amount, $date, $catagory_id);

      }
      

    }

    public function editExpenseAction(){
      if(isset($_POST["submit-update-id"])){
        $expenseModel = new ExpenseModel("localhost", "root", "", "expense_management");
        $catagoryModel = new CatagoryModel("localhost", "root", "", "expense_management");
        $id = $_POST["id"];
        $name = $_POST["update-name"];
        $date = $_POST["update-date"];
        $catagory_id = $_POST["catagory_id"];
        $amount = $_POST["update-amount"];
        $catagoryModel->updateCatagory($catagory_id, $name);
        $expenseModel->updateExpense($id, $amount, $date, $catagory_id);
      }
    }

    public function deleteExpenseAction(){
      if(isset($_POST["submit-delete"])){
        $catagory_id = $_POST["delete-catagory-id"];
        $catagoryModel = new CatagoryModel("localhost", "root", "", "expense_management");
        $catagoryModel->deleteCatagory($catagory_id);
      }
    }

    public function viewExpensesAction1(){
      $expenseModel = new ExpenseModel("localhost", "root", "", "expense_management");
      $expenseModel->getAllExpense();
    }

    public function viewExpensesAction2(){
      $catagoryModel = new CatagoryModel("localhost", "root", "", "expense_management");
      $catagoryModel->getAllCatagories();
    }

    public function generateExpenseReportAction(){

    }
  }
?>
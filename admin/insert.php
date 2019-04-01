<?php 
	include "baza.php";

	if(isset($_POST['sub'])) {

      if(empty($_POST['name'])) {
        header("Location: bazapanel.php");
      }else {
        $name = mysqli_escape_string($db,test_input($_POST["name"]));
      }
      if(empty($_POST['surname'])) {
        header("Location: bazapanel.php");
      }else {
        $surname = mysqli_escape_string($db,test_input($_POST["surname"]));
      }
      if (empty($_POST["adress"])) {
        header("Location: bazapanel.php");
      } else {
        $adress = mysqli_escape_string($db,test_input($_POST["adress"]));
      }
      if (empty($_POST["nomer"])) {
        header("Location: bazapanel.php");
      } else {
        $nomer = test_input($_POST["nomer"]);
      }
      if (empty($_POST["datee"])) {
        header("Location: bazapanel.php");
      } else {
        $datee = test_input($_POST["datee"]);
      }
      $yunalish = $_POST['yunalish'];
    }  

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
	if(empty($name) and empty($surname)) {
        $query = '';
       } else {
         $query = "INSERT INTO talabalar (`name`, `surname` , `adress` , `nomer` , `datee` , `yunalish_id`) VALUES ('$name', '$surname', '$adress', '$nomer', '$datee', '$yunalish')";
       }
       
       $result1 = @mysqli_query($db, $query);

       if($result1) {
        header("Location: index.php");
       } else {
        echo "Ro'yhatga olishda xatolik yuzaga keldi!";
       } 
 ?>
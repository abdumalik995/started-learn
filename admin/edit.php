<?php 
include "baza.php";
if(isset($_GET['id'])) {
	$id = $_GET['id'];
}

$sql = "SELECT * FROM talabalar WHERE id=$id";
$res = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($res);
print_r($row);
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>bazap php</title>
</head>
<style type="text/css">
    
	#mail {
    position: relative;
    margin: auto;
    margin-top: 100px;
    padding-top: 10px;
    padding-left: 100px;
    width: 50%;
    height: 440px;
    /*text-align: center;*/
    background: #fff;
    box-shadow: 0px 0px 10px #222;
    overflow: hidden;
	}
	#mail>form>input, #mail>form>textarea {
    margin-bottom: 20px;
    width: 50%;
    height: 40px;
    background: #f2f2f7;
    font-size: 16px;
    font-weight: 500;
    padding-left: 20px;
    border: none;
    border-radius: 3px;

	}
	#mail>form>textarea {
    padding-top: 7px;
	}
	#mail>form>#sub {
    margin-top: 20px;
    margin-bottom: 70px;
    width: 170px;
    height: 45px;
    background: crimson;
    color: #fff;
    text-align: center;
    border: none;
    box-shadow: 0px 0px 10px #7b7474;
    cursor: pointer;
	}
    h1 {
        text-align: center;
    }
    h1 span {
        color: crimson;
    }
    .red {
        color: red;
    }
    input[type="radio"] {
        width: 20px !important;
        

    }
    #comment {
        margin: 20px 0;
        border: 1px solid #ccc;
        padding:25px 10px;
        border-radius: 5px;
    }    
</style>
<body>

	<div id="mail">
        <div></div>
			<h1>Ro`yxatni <span>o`zgartirish</span></h1>
                 
			<form id="form" action="update.php" method="post" autocomplete="off">
            <input type="text" name="name"  placeholder="Ism">
            
            <br>			
			<input type="text" name="surname" placeholder="Familiya">
            
            <br>
            <input type="text" name="adress" placeholder="Manzil"><br>
               
            Fakultetni tanlang: <select name="yunalish">
                <option></option>
                <option value="1">KIF</option>
                <option value="2">Telekom</option>
                <option value="3">Dasturiy</option>
                <option value="4">Aloqalash</option>
                <option value="5">Radio va mobil</option>
            </select> <br>
						
			<input id="sub" type="submit" name="sub" value="SUBSCRIBE">
		</form>
        
		</div>
   
          
    </div>
        

</body>
</html> 
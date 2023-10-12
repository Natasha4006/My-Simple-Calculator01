<?php




        
if(isset($_POST['submit'])){


$oper=$_POST['oper'];
$num1=$_POST['num1'];
$num2=$_POST['num2'];

       if ($oper == 'div' && $num2 == 0) {
        $result = 'Division by zero is not allowed'; 

               
                } else {


switch($oper){

   case "add":
       $result=$num1+$num2;
      
       break;
   
   case "sub":
       $result=$num1-$num2;
      
       break;
   
   case "mul":
       $result=$num1*$num2;
      
       break;
   
   case "div":
       $result=$num1/$num2;
       
       break;
   default:
   //$result="Please select valid  Operation";
}
   
}






?>




<!DOCTYPE html>
<html lang= "en" dir=""ltr>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
       
       <link rel="stylesheet" href="styles.css">
        <title>Natasha's Calculator</title>
        
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">

<style>
    *{

        margin:0%;
        padding:0%;
        font-family:'Poppins', sans-serif;
        


    }

    .calc{
        width: 600px;
        height: 600px;
        background:linear-gradient(#aa076b,#61045f);
        border-radius:30% 70% 70% /  30% 70% 70%;
        position: absolute;
        left:50%;
        top:50%;
        transform: translate(-50%,-50%);
        text-align: center;
        box-shadow:20px 6px 0px 0px rgb(128 128 128 / 26%);
    }
    form{
        position: absolute;
        left: 50%;
        top:45%;
        transform: translate(-50%, -50%);

    }

    input{
        width: 300px;
        height: 40px;
        margin-top:20px;
        border-radius:40px;
        padding: 0px 30px;
        font-size:18px;
        color:black;
        border: 2px solid rgba(0,0,0,0.656);
        outline: none;

    }

    input:hover{
        width: 260px;
        transition:0.3s;
    }

    input[type="submit"]{
        background-color: #4839B0;
        width: 200px;
        height:40px;
        color:white;
        font-size:20px;
        border:none;
       
    }
    input[type="submit"]:hover{
        transform: scale(0.9);
    }

  
       


    

    select{
        width: 280px;
        height:40px;
        margin-top:20px;
        border-radius:40px;
        padding: 0px 30px;
        font-size:18px;
        color:black;
        border:none;





    }
</style>

    </head>


    <body>

    <div class="calc">
         <h3 style="text-align:center; margin-top: 50px; color:white">NAT'S CALCULATOR</h3>

         <form action="" method="POST">
         <input type="text" name="num1" placeholder="Enter a number " value="<?php echo @$num1;?>">
         <input type="text" name="num2" placeholder="Enter another number " value="<?php echo @$num2;?>">
         <br>

        </br>
         <select name="oper">
        <option value="">Choose a method</option>
        <option value="add">Add</option>
        <option value="sub">Sub</option>
        <option value="div">Div</option>
        <option value="mul">Mul</option>
    </select> <br>

    <input type="submit" name="submit">
    <h5 style=" margin-top: 30px; font-size:18px;">The Answer is:</h5>

    <span style=color:white;font-size:23px;><?php echo @$result;?> </span>
         

            </form>



    </div>
        


    </body>


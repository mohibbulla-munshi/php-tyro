<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Calculator</title>
</head>

<body>
  <section class="container">
    <div class="header">
      <div class="display">
        <?php
          if(is_numeric($_POST['number1']) && is_numeric($_POST['number2'])){
              $number1 = $_POST['number1'];
              $number2 = $_POST['number2'];
              $operator = $_POST['operator'];
                switch($operator){
                  case '+':
                    echo $number1+$number2;
                    break;
                  case '-':
                    echo $number1-$number2;
                    break;
                  case '/':
                    if($number2>0){
                      echo $number1/$number2;
                    }
                    else{
                      echo "Second Value should be greater than zero";
                    }
                    break;
                  case '*':
                    echo $number1*$number2;
                    break;
                }
          }
          else{
              echo "Please Enter Numeric Values";
          }
          
        ?>
      </div>
    </div>
    <div class="main">
      <div class="form">
        <form method="POST" action="#">
          <label for="number1">First Number</label>
          <input id="number1" name=" number1" required type="text">
          <label for="number2">Second Number</label>
          <input id="number2" name="number2" required type="text">
          <select name="operator" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
          </select>
          <input name="submit" type="submit" value="=">
        </form>
      </div>
    </div>
  </section>
</body>

</html>
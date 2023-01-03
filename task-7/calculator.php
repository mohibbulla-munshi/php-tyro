<?php
//for Graduate
function Graduate($p){
  if($p==4){
    return 'Congratulations! You have got A+. Remember, success is a consequences, must not be a goal.';
  }
  if($p<4 && $p>=3.75){
    return 'You got A';
  }
  if($p<3.75 && $p>=3.50){
    return 'You got A-';
  }
  if($p<3.50 && $p>=3.25){
    return 'You got B+';
  }
  if($p<3.25 && $p>=3.00){
    return 'You got B';
  }
  if($p<3.00 && $p>=2.75){
    return 'You got B-';
  }
  if($p<2.75 && $p>=2.50){
    return 'You got C+';
  }
  if($p<2.50 && $p>=2.25){
    return 'You got C';
  }
  if($p<2.25 && $p>=2.00){
    return 'You got D';
  }
  if($p<2.00 && $p>=0){
    return 'Sorry, you have to try again. Better luck next time. Remember, Failure is the pillar of success';
  }
}
//for underGraduate
function underGraduate($p){
  if($p==5){
    return 'Congratulations! You have got A+. Remember, success is a consequences, must not be a goal.';
  }
  if($p<5 && $p>=4){
    return 'You got A';
  }
  if($p<4 && $p>=3.50){
    return 'You got A-';
  }
  if($p<3.50 && $p>=3.00){
    return 'You got B+';
  }
  if($p<3.00 && $p>=2.00){
    return 'You got C';
  }
  if($p<2.00 && $p>=1.00){
    return 'You got D';
  }
  if($p<1.00 && $p>=0){
    return 'Sorry, you have to try again. Better luck next time. Remember, Failure is the pillar of success';
  }
}
if(isset($_POST['submit'])){
  $point = $_POST['point'];
  $study = $_POST['study_level'];
  
  if($_POST['point']<0 || $_POST['point']>5){
    echo "You have provided wrong grade point.";
  }
  else if($_POST['point'] > 4 && $_POST['study_level'] == "Graduation"){
    echo 'The GPA for Masters and Graduation should be below 4.';
  }
  else if($_POST['point'] > 4 && $_POST['study_level'] == "Masters"){
    echo 'The GPA for Masters and Graduation should be below 4.';
  }
  else if( $_POST['study_level'] == "Graduation"|| $_POST['study_level'] == "Masters"){
    echo Graduate($point);
  }
  else{
      echo underGraduate($point);
  }
}
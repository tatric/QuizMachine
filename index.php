<?php
// quiz controller.
//

include './config.php';


echo "Total from database = ".$QuizTable->Total();
//if form submitted
//if (formSubmitted == true) {
// define variables and set to empty values
$QuizName = $QuizQuestion = $AnswerA = $FeedbackA = $Action = "";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $QuizName = test_input($_POST["QuizName"]);
  $QuizQuestion = test_input($_POST["QuizQuestion"]);
  $AnswerA = test_input($_POST["AnswerA"]);
  $FeedbackA = test_input($_POST["FeedbackA"]);
  $questionNumber= test_input($_POST["questionNumber"]);
  $Action = test_input($_POST["Action"]);
}

//Select uniq(quiz_name) from quiztable.
$Quizes = $QuizTable->distinctColumb('quiz_name');
echo "</br> Quizes =";
print_r($Quizes);
$qu='';
foreach ($Quizes as $Quiz){
	$qu.=$Quiz['quiz_name'];
	}
//var_dump ($_POST);

#add to database

//} else {
  #get the current form data if any and show the form.

  //$out['Qname']='Git';
  //$out['formName']='Create Quiz';
  //$out['questionNumber']=$questionNumber+1;
  $out['mainPage']=$qu;//izes['quiz_name']; //'./main.html';
  $out['mainTitle']='Select a quiz';
  $out['Qname'] = 'Quiz name';
  $out['title']= 'Quiz Machine';
  //$out['maincontent']= $Quizes;
include './template.html';

//}

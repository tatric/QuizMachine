<?php
// create a quiz controller.
//

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

var_dump ($_POST);

#add to database

//} else {
  #get the current form data if any and show the form.

  $out['Qname']='Git';
  $out['formName']='Create Quiz';
  $out['questionNumber']=$questionNumber+1;
include 'template.html';

//}

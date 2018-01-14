<?php
// create a quiz controller.
//'/var/www/ham/QuizMachine/DatabaseTable.php'
//
include '../config.php';


echo "Total from database = ".$QuizTable->findById('1')."</br>";
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
  $data['quiz_name'] = test_input($_POST["QuizName"]);
  $data['quiz_question'] = test_input($_POST["QuizQuestion"]);
  $data['answerA'] = test_input($_POST["AnswerA"]);
  $data['feedbackA'] = test_input($_POST["FeedbackA"]);
  $data['answerB'] = test_input($_POST["AnswerB"]);
  $data['feedbackB'] = test_input($_POST["FeedbackB"]);
  $data['answerC'] = test_input($_POST["AnswerC"]);
  $data['feedbackC'] = test_input($_POST["FeedbackC"]);
  $data['answerD'] = test_input($_POST["AnswerD"]);
  $data['feedbackD'] = test_input($_POST["FeedbackD"]);
  $data['BA'] = test_input($_POST["BA"]);
  $data['BB'] = test_input($_POST["BB"]);
  $data['BC'] = test_input($_POST["BC"]);
  $data['BD'] = test_input($_POST["BD"]);
  $data['question_number']= test_input($_POST["questionNumber"]);
  $data['action'] = test_input($_POST["Action"]);
  $data['id']='';
}
try{
  print_r("Save=".$QuizTable->save($data));
} catch (PDOException $e) {
  $out['mainTitle'] = 'An error has occurred';
  $out['mainPage'] = 'Database error: ' . $e->getMessage() . ' in '
  . $e->getFile() . ':' . $e->getLine();
}
print_r ($data);

#add to database

//} else {
  #get the current form data if any and show the form.

  $out['Qname']='Git';
  $out['mainTitle'] = $out['title']='Create Quiz';
  $out['questionNumber']=$data['questionNumber']+1;
  $out['mainPage']='createForm.html';
  'mainTitle';
include '../template.html';

//}

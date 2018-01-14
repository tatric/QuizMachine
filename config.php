<?php
include '/var/www/ham/QuizMachine/DatabaseTable.php';
$table='quiztable';
$primaryKey='id';  //pgsql:host=192.168.137.160;port=5432;dbname=platin',
//$pdo = new PDO('pgsql:host=192.168.1.22;port=5432;dbname=Quiz','Quizuser','quizpass45');
$pdo = new PDO('sqlite:/var/www/ham/QuizMachine/sqlite/messaging.sqlite3');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$pdo->exec("drop table $table");
$pdo->exec("CREATE TABLE IF NOT EXISTS $table (
                    id INTEGER PRIMARY KEY, 
					 quiz_name TEXT,
                     quiz_question TEXT,
                     answerA TEXT,
                     feedbackA TEXT,
                     answerB TEXT,
                     feedbackB TEXT,
                     answerC TEXT,
                     feedbackC TEXT,
                     answerD TEXT,
                     feedbackD TEXT,
                     BA INTEGER,
                     BB INTEGER,
                     BC INTEGER,
                     BD INTEGER,
                     question_number INTEGER,
                     action TEXT
                     )"
                    
                    
                    );
$QuizTable = new DatabaseTable($pdo, $table, $primaryKey);

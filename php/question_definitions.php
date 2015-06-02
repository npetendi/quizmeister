<?php

/*
 * Question classes
 */
class Answer {
    public $answer;
    public $is_correct;

    function __construct($answer, $is_correct){
        $this->answer = $answer;
        $this->is_correct = $is_correct;
    }
}

class Question
{
    public $id;
    public $text;
    public $possibleAnswers;

    function __construct($id){
        $this->id = $id;
        $this->possibleAnswers = array();
    }

    function addAnswer($answer) {
        $this->possibleAnswers[] = $answer;
    }
}

/*
 * Question definitions
 */
$all_questions = array();

/*
 * Question 1
 */
$question = new Question(1);
$question->text = "Was ist eine populäre Bezeichnung für eine Regelung zum Schutze des Verbrauchers in Deutschland, die sich auf Mängel in der Montageanleitung bezieht?";
$question->addAnswer(new Answer("Reklamations-Klausel", false));
$question->addAnswer(new Answer("B-Waren-Verordnung", false));
$question->addAnswer(new Answer("IKEA-Klausel", true));
$question->addAnswer(new Answer("Ramsch-Klausel", false));
$all_questions[] = $question;

/*
 * Question 2
 */
$question = new Question(2);
$question->text = "Welcher der genannten Bäume zählt NICHT zu den Nadelbäumen?";
$question->addAnswer(new Answer("Urweltmammutbaum", false));
$question->addAnswer(new Answer("Araukarie", false));
$question->addAnswer(new Answer("Lärche", false));
$question->addAnswer(new Answer("Ilex", true));
$all_questions[] = $question;

/*
 * Question 3
 */
$question = new Question(3);
$question->text = "Was spielt man, wenn man in den USA eine 'Fruit Machine' benutzt?";
$question->addAnswer(new Answer("Poker", false));
$question->addAnswer(new Answer("Einarmiger Bandit", true));
$question->addAnswer(new Answer("Bingo", false));
$question->addAnswer(new Answer("Flipper", false));
$all_questions[] = $question;

/*
 * Question 4
 */
$question = new Question(4);
$question->text = "Wie heißt der Teil in einem Verbrennungsmotor, der am Pleuel anngebracht ist und sich im Zylinder bewegt?";
$question->addAnswer(new Answer("Zylinderkopf", false));
$question->addAnswer(new Answer("Zündkerze", false));
$question->addAnswer(new Answer("Ölfilter", false));
$question->addAnswer(new Answer("Kolben", true));
$all_questions[] = $question;

/*
 * Question 5
 */
$question = new Question(5);
$question->text = "Wie nennt man 1000 Kilobyte auf der Computer-Festplatte?";
$question->addAnswer(new Answer("1 Byte", false));
$question->addAnswer(new Answer("1 Megabyte", true));
$question->addAnswer(new Answer("1 Gigabyte", false));
$question->addAnswer(new Answer("1 Terabyte", false));
$all_questions[] = $question;

/*
 * Question 6
 */
$question = new Question(6);
$question->text = "Unter welchem Vorwurf wurde 1962 gegen den 'Spiegel' ermittelt?";
$question->addAnswer(new Answer("Beamtenbeleidigung", false));
$question->addAnswer(new Answer("Steuerhinterziehung", false));
$question->addAnswer(new Answer("Korruption", false));
$question->addAnswer(new Answer("Landesverrat", true));
$all_questions[] = $question;

/*
 *	Add additional questions here, pay attention to the assignment of unused IDs!
 */
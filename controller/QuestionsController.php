<?php

include_once "configg.php";
include_once "../models/questions.php";

class QuestionsController {

    public function findMany() {
        try {
            return DataBase::connect()->query("SELECT * FROM `questions`");
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function findOne($id) {
        try {
            return DataBase::connect()->query("SELECT * FROM `questions` WHERE `id`='$id'")->fetch();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function store(Questions $req) {
        try {
            DataBase::connect()->prepare("INSERT INTO `quizz`(id, `id_quizz`, `question_summary`, `correct_answer`, `option1`, `option2`, `option3`)VALUES(NULL, ?, ?, ?, ?)")->execute([$req->getid_quizz(), $req->getquestion_summary(), $req->getcorrect_answer()
            {, $req->getoption1(), $req->getoption2(), $req->getoption3()]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function delete($id) {
        try {
            DataBase::connect()->prepare("DELETE FROM `questions` WHERE `id`=? ")->execute([$id]);
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    public function update(Questions $req, $id) {
        try {
            DataBase::connect()->prepare("UPDATE `questions` SET `id_quizz`=?, `question_summary`=?, `correct_answer`=?, `option1`=?,`option2`=?,`option3`=?,WHERE `id`=$id")->execute([$req->getid_quizz(), $req->getquestion_summary(), $req->getcorrect_answer()
            {, $req->getoption1(), $req->getoption2(), $req->getoption3()]);
        }
    }

}
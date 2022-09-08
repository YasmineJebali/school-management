<?php

include_once "configg.php";
include_once "../models/Quizz.php";

class QuizzController {

    public function findMany() {
        try {
            return DataBase::connect()->query("SELECT * FROM `quizz`");
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function findOne($id) {
        try {
            return DataBase::connect()->query("SELECT * FROM `quizz` WHERE `id`='$id'")->fetch();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function store(Quizz $req) {
        try {
            DataBase::connect()->prepare("INSERT INTO `quizz`(id, `id_courses`, `difficulty_level`, `summary`, `quiz_status`)VALUES(NULL, ?, ?, ?, ?)")->execute([$req->getid_courses(), $req->getdifficulty_level(), $req->getsummary()
            {, $req->getquizz_status()]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function delete($id) {
        try {
            DataBase::connect()->prepare("DELETE FROM `quizz` WHERE `id`=? ")->execute([$id]);
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    public function update(Quizz $req, $id) {
        try {
            DataBase::connect()->prepare("UPDATE `quizz` SET `difficulty_level`=?, `summary`=?, `quiz_status`=?,WHERE `id`=$id")->execute([ $req->getdifficulty_level(), $req->getsummary()
            {, $req->getquizz_status()]);
        }
    }

}
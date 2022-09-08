<?php

include_once "configg.php";
include_once "../models/Course.php";

class GroupeController {

    public function findMany() {
        try {
            return DataBase::connect()->query("SELECT * FROM `courses`");
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function findOne($id) {
        try {
            return DataBase::connect()->query("SELECT * FROM `courses` WHERE `id`='$id'")->fetch();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function store(Course $req) {
        try {
            DataBase::connect()->prepare("INSERT INTO `courses`(_uid, `course_title`, `course_subject`, `course_content`, `course_file`)VALUES(NULL, ?, ?, ?, ?)")->execute([$req->gettitle(), $req->getsubjects(), $req->getcontent(), $req->getfile()]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function delete($id) {
        try {
            DataBase::connect()->prepare("DELETE FROM `courses` WHERE `id`=? ")->execute([$id]);
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    public function update(Course $req, $id) {
        try {
            DataBase::connect()->prepare("UPDATE `courses` SET `course_title`=?, `course_subject`=?, `course_content`=?, `course_file`=? WHERE `id`=$id")->execute([$req->gettitle(), $req->getsubjects(), $req->getcontent(), $req->getfile()]);
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

}
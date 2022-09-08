<?php

include_once "configg.php";
include_once "../models/users.php";

class UsersController {

    public function findMany() {
        try {
            return DataBase::connect()->query("SELECT * FROM `users`");
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function findOne($id) {
        try {
            return DataBase::connect()->query("SELECT * FROM `users` WHERE `id`='$id'")->fetch();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function store(Users $req) {
        try {
            DataBase::connect()->prepare("INSERT INTO `quizz`(id, `first_name`, `last_name`, `email`, `password`, `profile_picture`, `user_role`)VALUES(NULL, ?, ?, ?, ?)")->execute([$req->getfirst_name(), $req->getlast_name(), $req->getemail()
            {, $req->getpassword(), $req->getprofile_picture(), $req->getuser_picture()]);
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

    public function update(Users $req, $id) {
        try {
            DataBase::connect()->prepare("UPDATE `questions` SET `first_name`=?, `last_name`=?, `email`=?, `password`=?,`profile_picture`=?,`user_role`=?,WHERE `id`=$id")->execute([$req->getfirst_name(), $req->getlast_name(), $req->getemail()
            {, $req->getpassword(), $req->getprofile_picture(), $req->getuser_picture()]);
        }
    }

}
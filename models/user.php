<?php

function getAllUser(){
    try {
        $sql = 'SELECT * FROM user';

        $stmt = $GLOBALS['conn'] -> prepare($sql);

        $stmt -> execute();

        return $stmt -> fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getUserById($id) {
    try {
        $sql = 'SELECT * FROM user WHERE id_user = :id';

        $stmt = $GLOBALS['conn'] -> prepare($sql);

        $stmt -> bindParam(':id',$id);

        $stmt -> execute();

        return $stmt -> fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}
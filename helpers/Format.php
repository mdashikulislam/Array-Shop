<?php
    class Format{

        public static function shortTitle($title,$limit =100){
            $title = $title." ";
            $title = substr($title,0,$limit);
            $title = substr($title,0,strrpos($title,' '));
            $title = $title.'...';
            return $title;
        }

        public static function userLoginValidation($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }

?>
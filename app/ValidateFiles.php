<?php

class ValidateFiles
{
    public function isFileExist($route)
    {
        if (file_exists($route)) {
            return true;
        }
        return false;
    }

    public function isDirExist($route)
    {
        if (is_dir($route)) {
            return true;
        }
        return false;
    }

    public function isNameCorrect($name)
    {
        if ($name != '') {
            return true;
        }
        return false;
    }
}
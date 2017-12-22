<?php

namespace utility;

class validation
{

    static function password($data)
    {
        if (!count($data) >= 6) {
            return false;
        } else {
            return true;
        }

    }

    static function field($data)
    {
        if (!count($data) >= 1) {
            return false;
        } else {
            return true;
        }
    }


    static function email($email)
    {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }


}

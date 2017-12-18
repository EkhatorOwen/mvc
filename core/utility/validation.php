<?php

namespace utility;

class validation
{

    static function password($data)
    {
        if(!count($data)>=6)
        {
            return false;
        }
        else
        {
            return true;
        }

    }




}




?>
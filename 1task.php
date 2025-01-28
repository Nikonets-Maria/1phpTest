<?php
$bye_count = 0;
while(true)
{
    $year = mt_rand(1900, 2000);
    $input_text = readline('>');
    if(ctype_upper($input_text))
    {
        if( $input_text == 'BYE')
        {
            $bye_count++;
            if($bye_count == 3)
            {
                echo'BYE, HONUE!';
                break;
            }
            else
            {
                echo'NO SINSE", '.$year.', "YEAR!';
            }
        }
        else
        {
            echo'NO SINSE", '.$year.', "YEAR!';
            $bye_count =0;
        }
    }
    else
    {
        if($input_text=='BYE')
        {
            $bye_count = 0;
        }
        else
        {
            echo'WHAT!? TALK LOUDER SON!';
            $bye_count = 0;
        }
    }
}


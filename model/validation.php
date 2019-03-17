<?php
//check name
function validName($fname, $lname)
{
    if(!ctype_alpha($fname) or $fname == "") //if the name does not only contain letters
    {
        return false;
    }

    else if(!(preg_match('/^[a-z]+$/i',$lname)) || $lname == "") //if the name does not only contain letters
    {
        return false;
    }

    return true;
}

//check address
function validAddress($address)
{
    if($address == "") //if it is left blank
    {
        return false;
    }

    return true;
}

//check city
function validCity($city)
{
    if($city == "") //if it is left blank
    {
        return false;
    }

    return true;
}

//check state
function validState($state)
{
    if($state == "") //if it is left blank
    {
        return false;
    }

    return true;
}

//check zip
function validZip($zip)
{
    if(preg_match('/^[a-z]+$/i',$zip) || $zip == "" || strlen((string)$zip) != 5) //if it contains letters or wrong amount of numbers
    {
        return false;
    }

    return true;
}

//check phone
function validPhone($phone)
{
    if(preg_match('/^[a-z]+$/i',$phone) || $phone == "" || strlen((string)$phone) != 10) //if the phone contains letters
    {
        return false;
    }

    return true;
}

//check email
function validEmail($email)
{
    if(!(filter_var($email, FILTER_VALIDATE_EMAIL))) //if email is not valid
    {
        return false;
    }

    return true;
}
<?php


function home()
{
    return view("home", ["myName" => "myo min naing", "myAge" => 28]);
}


function about()
{
    return view("about", ["myLove" => "Khaing Thin Thin Htay", "herAge" => 27]);
}

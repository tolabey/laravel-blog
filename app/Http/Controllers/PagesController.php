<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{

    public function getIndex()
    {
        #process variable data or params
        #talk to the model
        #receive from the model
        #compile or process data from the model if needed
        #pass that data to the correct view
        return view('pages.welcome');
    }

    public function getAbout()
    {
        $first = 'Alex';
        $last = 'Curtis';

        $full = $first." 3213 ". $last;

        $email = "tolamusti@gmail.com";

        $data['email'] = $email;
        $data['fullname'] = $full;

        return view('pages.about')->withFirst($first)->with("email", $email)->withData($data);
    }

    public  function getContact()
    {

        return view('pages.contact');

    }


}
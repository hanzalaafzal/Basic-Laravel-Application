<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Contact;

class customAuth extends Controller
{
    public function showLoginForm()
    {
      if(Auth::check())
      {
        return redirect()->route('dashboard');
      }
      else {
        return view('layout.main_app');
      }


    }
    public function showRegistrationForm()
    {
      return view('layout.main_app');
    }
    public function customLogout()
      {
        if(Auth::check())
        {
          Auth::logout();
          return redirect()->route('customLogin');
        }
        else {
          return redirect()->route('index.index');
        }
      }

    public function dashboard()
    {
      if(Auth::check())
      {

          $queries=Contact::paginate(5);
          //dd($queries);
          return view('layout.main_app',compact('queries'));
      }
      else {
        return redirect()->route('customLogin');
      }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mews\Captcha\Facades\Captcha;

class MyFormController extends Controller
{
  public function showForm()
  {
      return view('form');
  }

  public function submitForm(Request $request)
  {
      $request->validate([
          'captcha' => 'required|captcha',
      ]);

      // Handle successful form submission
      return back()->with('success', 'Form submitted successfully!');
  }
}

<?php

namespace App\Http\Controllers;


use App\Services\Newsletter;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    
    public function __invoke(Newsletter $newsletter)
{
        request()->validate(['email' => 'required|email']);
        
        try {
            $newsletter->subscribe(Request('email'));
        } catch(Exception $e) {
            throw ValidationException::withMessages([
                'email' => $e->getMessage()
            ]);
        }

        return redirect('/')->with('success', 'You are on our Newsletter');
    }
}
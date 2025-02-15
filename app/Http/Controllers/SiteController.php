<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class SiteController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function services()
    {
        return view('site.services');
    }

    public function portfolio()
    {
        return view('site.portfolio');
    }

    public function blog()
    {
        $posts = Blog::latest()->paginate(10);
        return view('site.blog', compact('posts'));
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function sendContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // Aqui você pode processar o formulário, como enviar um e-mail

        return back()->with('success', 'Mensagem enviada com sucesso!');
    }
}

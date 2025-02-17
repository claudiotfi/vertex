<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class SiteController extends Controller
{
    protected $template = 'templates.vertex-one.'; // Caminho para o template

    public function home()
    {
        return view($this->template.'home');
    }

    public function services()
    {
        return view($this->template.'services');
    }

    public function portfolio()
    {
        return view($this->template.'portfolio');
    }

    public function blog()
    {
        //$posts = Blog::latest()->paginate(10);
        $posts = [];        
        return view($this->template.'blog', compact('posts'));
    }

    public function contact()
    {
        return view($this->template.'contact');
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

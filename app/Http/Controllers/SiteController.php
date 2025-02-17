<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class SiteController extends Controller
{
    protected $template;

    public function __construct()
    {
        // Define o template uma única vez
        $this->template = 'vertex-one';

        // Compartilha a variável $template com todas as views
        view()->share('template', $this->template);
    }


    public function home()
    {
        return view('templates.'.$this->template.'.home');
    }

    public function services()
    {
        return view('templates.'.$this->template.'.services');
    }

    public function portfolio()
    {
        return view('templates.'.$this->template.'.portfolio');
    }

    public function blog()
    {
        //$posts = Blog::latest()->paginate(10);
        $posts = [];        
        return view('templates.'.$this->template.'.blog', compact('posts'));
    }

    public function contact()
    {
        return view('templates.'.$this->template.'.contact');
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

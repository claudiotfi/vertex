<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class AdminController extends Controller
{
    public function dashboard()
    {
        return response()->json(['message' => 'Admin Dashboard']);
    }

    public function listBlogs()
    {
        $blogs = Blog::latest()->paginate(10);
        return response()->json($blogs);
    }

    public function createBlog(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $blog = Blog::create($request->all());
        return response()->json($blog, 201);
    }

    public function updateBlog(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $blog->update($request->all());
        return response()->json($blog);
    }

    public function deleteBlog(Blog $blog)
    {
        $blog->delete();
        return response()->json(['message' => 'Blog deleted']);
    }

    public function listUsers()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function createUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json($user, 201);
    }

    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'name' => 'sometimes|required',
            'email' => 'sometimes|required|email|unique:users,email,' . $user->id,
            'password' => 'sometimes|required|min:6'
        ]);

        $user->update($request->only(['name', 'email', 'password']));
        return response()->json($user);
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return response()->json(['message' => 'User deleted']);
    }
}

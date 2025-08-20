<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
  
class AuthController extends Controller
{
    /**
     * Tulis kode pada Metode
     *
     * @return response()
     */
    public function index(): View
    {
        return view('auth.login');
    }  
      
    /**
     * Tulis kode pada Metode
     * @return response()
     */
    public function registration(): View
    {
        return view('auth.registration');
    }
      
    /**
     * Tulis kode pada Metode
     *
     * @return response()
     */
    public function postLogin(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin')
                        ->withSuccess('You have Successfully loggedin');
        }

        return redirect("login")->withError('Oppes! You have entered invalid credentials');
    }
        
    /**

     *
     * @return response()
     */
    public function postRegistration(Request $request): RedirectResponse
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $user = $this->create($data);
            
        Auth::login($user); 

        return redirect("/admin")->withSuccess('Great! You have Successfully loggedin');
    }
    
    
    /**
     * Tulis kode pada Metode
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
    
    /**
     * Tulis kode pada Metode
     *
     * @return response()
     */
    public function logout(): RedirectResponse
    {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
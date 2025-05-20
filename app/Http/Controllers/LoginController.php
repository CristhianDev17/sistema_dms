<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('guest.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(Request $request)
    {
        // Validar datos
        $request->validate([
            'usu_usuario' => 'required',
            'usu_contra' => 'required',
        ]);

        // Buscar usuario y verificar contraseña
        $user = User::where('usu_usuario', $request->usu_usuario)->first();

        if ($user && Hash::check($request->usu_contra, $user->usu_contra)) {
            Auth::login($user, $request->has('remember'));
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'usu_usuario' => 'Credenciales incorrectas.',
        ])->withInput();
    }

    /**
     * Cerrar sesión
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Sesión cerrada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

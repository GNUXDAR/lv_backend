<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        // dd("Hello world");

        // Eloquent
        $users = User::all(); // traer todos los datos
        // $users = User::find(3); // traer al ususario con id 3
        // $users = User::findOrFail(1); //buscar el ID y muestra error si no lo encuentra
        // busqueda condicionada
        // $users = User::where('age', '>=', 18)->orWhere('zip_code', 7654321)->orderBy('age', 'desc')->limit(1)->get(); //->first()

        // retornar vistas
        // return view('user.index');

        // DB
        // $users = DB::select("Select * from users");

        // retornar datos desde el modelo
        // return view('user.index', ["users" => $users]);
        // es lo mismo que escribir
        return view('user.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    public function create() {
        // dos maneras de guardar datoscon  Eloquent
        $user = new User;
        $user->name = "Arturo";
        $user->email = "admin@not-reply.com";
        $user->password = Hash::make('1234567');
        $user->age = 33;
        $user->address = "Quito";
        $user->zip_code = 7654321;
        $user->save();

        User::create([
            "name" => "Meryuris",
            "email" => "mf@not-reply.com",
            "password" => Hash::make('1234567'),
            "age" => 30,
            "address" => "Sucre",
            "zip_code" => 7654321
        ]);

        // DB
        // DB::insert( DB::raw('INSERT INTO users VALUR ... '));


        return redirect()->route('user.index');
    }
}

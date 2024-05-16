<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\Info;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infos = Info::get();
        return view('index', compact('infos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        // Obtener el nombre del archivo con un timestamp para evitar conflictos
        $fileName = time() . '.' . $request->file('file')->extension();

        // Guardar la imagen en la carpeta public/images
        $request->file('file')->storeAs('public/images', $fileName);

        // Crear una nueva instancia de Info y asignar los valores
        $info = new Info;
        $info->name = $request->name;
        $info->email = $request->email;
        $info->file_url = $fileName;

        // Guardar el registro en la base de datos
        $info->save();

        // Redireccionar a la ruta 'index'
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function create()
    {
        return view('create');
    }

    public function show($id)
    {
        //Para verificar si existe ese id o no
        $info = Info::findOrFail($id);
        return view('show', compact('info'));
    }

    public function edit($id)
    {
        //Para verificar si existe ese id o no
        $user = Info::findOrFail($id);
        return view('edit', compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
        $user = Info::findOrFail($id);

        // Actualizar los campos del usuario
        $user->name = $request->name;
        $user->email = $request->email;

        // Actualizar la imagen de perfil si se proporcionó una nueva
        if ($request->hasFile('file')) {
            $fileName = time() . '.' . $request->file->extension();
            $request->file->storeAs('public/images', $fileName);
            $user->file_url = $fileName;
        }
        //Guarda en la base de datos
        $user->save();

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       
    }
}

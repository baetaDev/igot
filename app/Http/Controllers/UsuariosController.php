<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuariosController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $user;

    public function __construct(User $user)
    {
        $this->middleware('auth');
        $this->user = $user;
    }

    public function index() 
    {        
        $this->authorize('is_admin');

        $users = $this->user->paginate(5);
        
        return view('usuarios',['users'=>$users]);
    }
    public function create() 
    {
        echo 'create';
    }
    public function store(Request $request) {
        echo 'store';
    }
    public function show($id) {
        echo 'show';
    }
    public function edit($id) {
        echo 'edit';
    }
    public function update(Request $request, $id) {
        echo 'update';
    }
    public function destroy($id) {
        echo 'destroy';
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
class BackController extends Controller{

    protected $mensaje;

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('is_admin');
    }


    public function getIndex(){
        return view('back.index');
    }
    public function postUpdateUser(Request $request){
        $min='|min:6';
        $passReq='|unique:users,email';
        if(User::find($request['id'])['email']==$request['email']) $passReq='';
        if(!$request['password']) $min='';
        $rules = [
            'name' => 'required|max:30',
            'email' => 'required|email|max:255'.$passReq,
            'password' => 'max:18'.$min,
        ];
        $messages = [
            'name.required' => 'El campo es requerido',
            'name.max' => 'El máximo de caracteres permitidos son 30',
            'email.required' => 'El campo es requerido',
            'email.email' => 'El formato de email es incorrecto',
            'email.max' => 'El máximo de caracteres permitidos son 18',
            'email.min' => 'El mínimo de caracteres permitidos son 18',
            'email.unique' => 'El email ya existe',
            'password.max' => 'El máximo de caracteres permitidos son 18',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        //Si la validación no es correcta redireccionar al formulario con los errores
        if ($validator->fails()) {
            return redirect()->back()->with('error',$validator->messages()->all());
        } else { // De los contrario guardar al usuario
            $user=User::find($request['id']);
            $user->name = $request->name;
            $user->email = $request->email;
            if($request->password) {
                $user->password = bcrypt($request->password);
            }
            $user->remember_token = str_random(100);
            $user->type = $request->type;
            if ($user->save()) {
                return redirect()->back()->with('message', 'usuario modificado');
            } else {
                return redirect()->back()->with('error',array( 'Ha ocurrido un error al guardar los datos'));
            }



        }


    }

}

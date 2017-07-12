<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use App\Reserve;
use Illuminate\Support\Facades\DB;
use App\Contact;
use App\Setting;

class BackController extends Controller{

    protected $mensaje;
    public $sets;

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('is_admin');
        $this->sets=Setting::all(['key','value']);
    }


    public function getIndex(){
        $n_reservas=Reserve::where("estado","=","-1")->count();
        $n_reservas_hoy=Reserve::where("estado","=","1")->where("fecha","=", DB::raw('curdate()'))->count();
        $n_contact_sin=Contact::where("respuesta","=",null)->count();
        session()->put('res_sin',$n_reservas);
        session()->put('res_hoy',$n_reservas_hoy);
        session()->put('con_sin',$n_contact_sin);
        session()->put('total_res',$n_reservas+$n_reservas_hoy+$n_contact_sin);
        return view('back.index')->with('sets',$this->sets);
    }
    public function postSets(Request $request){
        $reg=Setting::where('key','=',$request->key)->first();
        $reg->value=$request->value;
        $reg->save();
        return redirect()->back()->with('message', 'configuración modificada');
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

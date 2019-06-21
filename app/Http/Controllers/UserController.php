<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Wilayah;
use App\Area;
use App\User;


class UserController extends Controller
{
    public function insert()
    {
        $data['areas'] = area::all();
        $data['wilayahs'] = wilayah::all();
        return view('admin/user/insert_user',$data);
    }
    public function index(Request $request)
    {   
        // if(!Session::get('login')){
        //     return redirect('login')->with('alert','Kamu harus login dulu');
        // }
        // else{
        //     return view('user');
        // }

        $data['areas'] = area::all();
        $data['wilayahs'] = wilayah::all();
        $data['no'] = 1;
        // $data['users'] = user::all();
        if ($request->rule == 'admin')
        {
            $data['users'] = DB::table('users')->where('rule', 'admin')->get();
            $data['no'] = 1;
            return view('admin/user/user', $data);
            
        }
        elseif ($request->rule == 'officer')
        {
            $data['users'] = DB::table('users')->where('rule', 'officer')->get();
            $data['no'] = 1;
            return view('admin/user/user', $data);
        }
        elseif ($request->rule == 'manager')
        {
            $data['users'] = DB::table('users')->where('rule', 'manager')->get();
            $data['no'] = 1;
            return view('admin/user/user', $data);
        }
        elseif ($request->rule == 'manager_non_crm')
        {
            $data['users'] = DB::table('users')->where('rule', 'manager_non_crm')->get();
            $data['no'] = 1;
            return view('admin/user/user', $data);
        }
        elseif ($request->rule == 'direktur')
        {
            $data['users'] = DB::table('users')->where('rule', 'direktur')->get();
            $data['no'] = 1;
            return view('admin/user/user', $data);
        }
        else
        {
            $data['users'] = user::all();
            $data['no'] = 1;
            return view('admin/user/user', $data);
        }
        // return view('admin/user/user', $data);
    }

    // public function login(){
    //     return view('auth.login');
    // }
    // public function loginPost(Request $request){

    //     $email = $request->email;
    //     $password = $request->password;

    //     $data = User::where('email',$email)->first();
    //     if($data){ //apakah email tersebut ada atau tidak
    //         if(Hash::check($password,$data->password)){
    //             Session::put('name',$data->name);
    //             Session::put('email',$data->email);
    //             Session::put('login',TRUE);
    //             return redirect('home_user');
    //         }
    //         else{
    //             return redirect('login')->with('alert','Password atau Email, Salah !');
    //         }
    //     }
    //     else{
    //         return redirect('login')->with('alert','Password atau Email, Salah!');
    //     }
    // }
    // public function logout(){
    //     Session::flush();
    //     return redirect('login')->with('alert','Kamu sudah logout');
    // }
    // public function register(Request $request){
    //     return view('register');
    // }
    public function store(Request $request)
    {
      $this->validate($request,[
        'username'      =>['required', 'string'],
        'nama_depan'    =>['required', 'string'],
        'nama_belakang' =>['required', 'string'],
        'password'      =>['required', 'string'],
        'email'         =>['required', 'string','unique:users'],
        'no_hp'         =>['required', 'string'],
        'username'      =>['required', 'string']
      ]);

      $users = new user;
      $users->username       = $request->username;
      $users->nama_depan     = $request->nama_depan;
      $users->nama_belakang  = $request->nama_belakang;
      $users->password       = $request->password;
      $users->email          = $request->email;
      $users->wilayah_id     = $request->wilayah_id;
      $users->no_hp          = $request->no_hp;
      $users->nama_area      = $request->nama_area;
      $users->nama_wilayah   = $request->nama_wilayah;
      $users->rule           = $request->rule;

      if ($users->save()){
        return redirect('/insert_user')->with('success', 'item berhasil ditambahkan');
      }
      else{
        return redirect('/insert_user')->with('error', 'item gagal ditambahkan');
      }
    }
    public function update(Request $request, $id){
        $user = user::findorFail($id);
        $this->validate($request,[
            'username'      =>['required', 'string'],
            'nama_depan'    =>['required', 'string'],
            'nama_belakang' =>['required', 'string'],
            'password'      =>['required', 'string'],
            'email'         =>['required', 'string'],
            'no_hp'         =>['required', 'string'],
            'username'      =>['required', 'string']
        ]);
            $user->username       = $request->username;
            $user->nama_depan     = $request->nama_depan;
            $user->nama_belakang  = $request->nama_belakang;
            $user->password       = $request->password;
            $user->email          = $request->email;
            $user->wilayah_id     = $request->wilayah_id;
            $user->no_hp          = $request->no_hp;
            $user->nama_area      = $request->nama_area;
            $user->nama_wilayah   = $request->nama_wilayah;
            $user->rule           = $request->rule;
  
        if ($user->save())
          return redirect()->route('index.user')->with(['success'=>'edit sukses']);
    }
    public function delete($email){
        $user = user::findOrFail($email)->delete();
        return redirect()->route('index.user')->with('success', 'delete sukses');
    }
    public function edit($email){
        
        $user = user::findOrFail($email);
        $data['areas'] = area::all();
        $data['wilayahs'] = wilayah::all();
        return view('admin/user/edit_user',$data)->with('user', $user);
    }
    
}

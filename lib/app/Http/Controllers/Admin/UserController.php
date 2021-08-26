<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Role;
use Hash;

class UserController extends Controller
{
    //
    private $user;
    public function __construct(User $user, Role $role) {
        $this->user = $user;
        $this->role = $role;
    }

    public function getUser() {
        $data['user'] = DB::table('gara_user')->orderBy('gara_user.id', 'ASC')->paginate(4);
        return view('user', $data);
    }

    public function detailUser($id) {
        $data['user'] = DB::table('gara_user')->join('gara_role_user', 'gara_user.id', 'gara_role_user.user_id')
                                            ->join('gara_role', 'gara_role.id', 'gara_role_user.role_id')
                                            ->where('gara_user.id', $id)
                                            ->get();
        // dd($data['user']);
        return view('user_detail', $data);
    }

    public function addUser() {
        $data['roles'] = DB::table('gara_role')->get();
        return view('add_user', $data);
    }

    public function postUser(Request $request) {
        try {
            DB::beginTransaction();
            $data = $this->user->create([
                'name_user' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            // Insert data to role_user
            // $roles = $request->roles;
            // foreach($roles as $roleID) {
            //     DB::table('gara_role_user')->insert([
            //         'user_id' =>  $data->id,
            //         'role_id' =>  $roleID
            //     ]);
            // }
            // dd($data->roles()->attach($request->roles));
            $data->roles()->attach($request->roles);
            DB::commit();
            return redirect()->intended('admin/permission')->with('status', 'User Added!');
        } catch (Exception $exception) {
            DB::beginTransaction();
        }
    }

    //============== Edit User ===============
    public function getEditUser($id) {
        $data['roles'] = DB::table('gara_role')->get();
        $data['user'] = DB::table('gara_user')->where('gara_user.id',$id)->get()->first();
        $data['listRoleOfUser'] = DB::table('gara_role_user')->where('gara_role_user.user_id',$id)->pluck('role_id');
        // dd($data['listRoleOfUser']);
        return view('edit_user', $data);
    }

    public function postEditUser(Request $request, $id) {
        try {
            DB::beginTransaction();
            //Update User table
            $this->user->where('id', $id)->update([
                'name_user' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)        
            ]);

            //Update role_user table
            DB::table('gara_role_user')->where('gara_role_user.user_id', $id)->delete();
            $updateUser = $this->user->find($id);
            $updateUser->roles()->attach($request->roles);

            DB::commit();
            return redirect()->intended('admin/permission')->with('status', 'User Updated!');
        } catch (Exception $exception) {
            DB::beginTransaction();
        }
    }

    //============== Edit User ===============
    public function deleteUser($id) {
        try {
            DB::beginTransaction();
            //Delete User
            $user = $this->user->find($id);
            $user->delete($id);
            //Delete user belong to role_user table
            $user->roles()->detach();

            DB::commit();
            return redirect()->intended('admin/permission')->with('status', 'User Deleted!');
        } catch (Exception $exception) {
            DB::beginTransaction();
        }
    }
}

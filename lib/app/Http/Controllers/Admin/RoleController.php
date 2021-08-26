<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Role;
use App\Models\Permission;

class RoleController extends Controller
{
    //
     private $permission;
    public function __construct(Role $role, Permission $permission) {
        $this->role = $role;
        $this->permission = $permission;
    }

    public function addRole() {
        $data['permission'] = DB::table('gara_permission')->get();
        $data['roles'] = DB::table('gara_role')->orderBy('gara_role.id', 'ASC')->paginate(5);
        // dd( $data['permission']);
        return view('role', $data);
    }

    public function postRole(Request $request) {
        try {
            DB::beginTransaction();
            $data = $this->role->create([
                'name' => $request->name,
                'display_name' => $request->display_name
            ]);
            
            $data->permission()->attach($request->permission);
            DB::commit();
            return redirect()->intended('admin/role')->with('status', 'Role Added!');
        } catch (Exception $exception) {
            DB::beginTransaction();
        }
    }

    public function getEditRole($id) {
        $data['role'] = DB::table('gara_role')->where('gara_role.id', $id)->get()->first();
        $data['permission'] = DB::table('gara_permission')->get();
        $data['listRoleOfRole'] = DB::table('gara_role_permission')->where('gara_role_permission.role_id',$id)->pluck('permission_id');
        // dd($data['listRoleOfRole']);
        return view('edit_role', $data);
    }

    public function postEditRole(Request $request, $id) {
        try {
            DB::beginTransaction();
            //Update Role table
            $this->role->where('id', $id)->update([
                'name' => $request->name,
                'display_name' => $request->display_name
            ]);

            //Update role_user table
            DB::table('gara_role_permission')->where('gara_role_permission.role_id', $id)->delete();
            $updateRole = $this->role->find($id);
            $updateRole->permission()->attach($request->permission);

            DB::commit();
            return redirect()->intended('admin/role')->with('status', 'Role Updated!');
        } catch (Exception $exception) {
            DB::beginTransaction();
        }
    }

    public function deleteRole($id) {
        try {
            DB::beginTransaction();
            //Delete Role
            $role = $this->role->find($id);
            $role->delete($id);
            //Delete role belong to role_permission table
            $role->permission()->detach();

            DB::commit();
            return redirect()->intended('admin/role')->with('status', 'Role Deleted!');
        } catch (Exception $exception) {
            DB::beginTransaction();
        }
    }
}

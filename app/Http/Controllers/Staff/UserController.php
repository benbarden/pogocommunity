<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Traits\PogoServices;
use App\User;
use App\UserRole;

class UserController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use PogoServices;

    /**
     * @var array
     */
    private $validationRules = [
        'name' => 'required',
        'email' => 'required',
        'status' => 'required',
    ];

    public function showList()
    {
        $userList = $this->getServiceUser()->getAll();

        $bindings = [];

        $bindings['TopTitle'] = 'User list';
        $bindings['PageTitle'] = 'User list';

        $bindings['UserList'] = $userList;

        return view('staff.user.list', $bindings);
    }

    public function editUser($userId)
    {
        $userData = $this->getServiceUser()->find($userId);
        if (!$userData) abort(404);

        $request = request();

        $bindings = [];

        if ($request->isMethod('post')) {

            $bindings['FormMode'] = 'edit-post';

            $this->validate($request, $this->validationRules);

            $userData->name = $request->name;
            $userData->email = $request->email;
            $userData->is_staff = $request->is_staff == 'on' ? 1 : 0;
            $userData->status = $request->status;
            $userData->save();

            // Clear roles
            $userData->setRoles([]);

            if (isset($request->role_item)) {

                foreach ($request->role_item as $roleKey => $roleValue) {

                    $role = UserRole::getRoleFromId($roleKey);
                    $userData->addRole($role);

                }
                $userData->save();

            }

            return redirect(route('staff.user.list'));

        } else {

            $bindings['FormMode'] = 'edit';

        }

        $bindings['TopTitle'] = 'Staff - Edit user';
        $bindings['PageTitle'] = 'Edit user';
        $bindings['UserData'] = $userData;
        $bindings['UserId'] = $userId;

        $bindings['RoleList'] = UserRole::getRoleList();

        $bindings['StatusList'] = User::getStatusList();

        $userRoleList = $userData->user_roles;
        if ($userRoleList) {
            $userRoleListForView = [];
            foreach ($userRoleList as $userRole) {
                $roleId = UserRole::getIdFromName($userRole);
                $userRoleListForView[] = ['id' => $roleId, 'role' => $userRole];
            }
            $bindings['UserRoleList'] = $userRoleListForView;
        }

        return view('staff.user.edit', $bindings);
    }

}

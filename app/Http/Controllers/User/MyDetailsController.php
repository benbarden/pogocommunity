<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use App\Traits\PogoServices;

class MyDetailsController extends Controller
{
    use PogoServices;

    /**
     * @var array
     */
    private $validationRules = [
        'name' => ['required', 'string', 'max:30'],
        'email' => ['required', 'string', 'email', 'max:255'],
    ];

    public function show()
    {
        $userData = Auth::user();

        $bindings = [];

        $bindings['TopTitle'] = 'My details';
        $bindings['PageTitle'] = 'My details';

        $bindings['UserData'] = $userData;

        return view('user.my-details.show', $bindings);
    }

    public function edit()
    {
        $userData = Auth::user();
        if (!$userData) abort(404);

        $request = request();

        $bindings = [];

        if ($request->isMethod('post')) {

            $bindings['FormMode'] = 'edit-post';

            $this->validate($request, $this->validationRules);

            $userData->name = $request->name;
            $userData->email = $request->email;

            if (isset($request->password)) {
                $userData->password = Hash::make($request->password);
            }

            $userData->save();

            return redirect(route('user.my-details.show'));

        } else {

            $bindings['FormMode'] = 'edit';

        }

        $bindings['TopTitle'] = 'Edit my details';
        $bindings['PageTitle'] = 'Edit my details';
        $bindings['UserData'] = $userData;

        return view('user.my-details.edit', $bindings);
    }
}

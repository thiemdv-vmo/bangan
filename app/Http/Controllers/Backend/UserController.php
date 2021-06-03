<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Repositories\UserRepository;

class UserController extends Controller
{
    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function index() {
        $records = $this->userRepo->getAllUser();
        return view('backend/user/index', compact('records'));
    }

    public function create() {
        $roles = $this->roleRepo->getAllRole();
        $role_html = \App\Helpers\StringHelper::getSelectRoleOptions($roles);
        return view('backend/user/create', compact('role_html'));
    }

    public function store(Request $request) {
        $input = $request->all();
        $validator = \Validator::make($input, $this->userRepo->validateCreate());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $password = $request->get('password');
        $input['password'] = bcrypt($password);
        if (isset($input['status'])) {
            $input['status'] = 1;
        } else {
            $input['status'] = 0;
        }
        $this->userRepo->create($input);

        return redirect()->route('admin.user.index');
    }

    public function edit($id) {
        $record = $this->userRepo->find($id);
        $roles = $this->roleRepo->getAllRole();
        $role_html = \App\Helpers\StringHelper::getSelectRoleOptions($roles, $record->role_id);
        return view('backend/user/update', compact('record', 'role_html'));
    }

    public function editProfile($id) {
        $record = $this->userRepo->find($id);
        return view('backend/profile/edit', compact('record'));
    }
    public function updateProfile(Request $request, $id) {
        $input = $request->all();
        $validator = \Validator::make($input, $this->userRepo->validateUpdate($id,$input['password']));
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if (!$input['password']){
            unset($input['password']);
        }else{
            $password = $request->get('password');
            $input['password'] = bcrypt($password);
        }
        $input['status'] = 1;
        $this->userRepo->update($input, $id);
        return redirect()->route('admin.user.index_profile', $id)->with('success', 'Update thành công');
    }
    public function update(Request $request, $id) {
        $input = $request->all();
        $validator = \Validator::make($input, $this->userRepo->validateUpdate($id));
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if (!$input['password'])
            unset($input['password']);
        if (isset($input['status'])) {
            $input['status'] = 1;
        } else {
            $input['status'] = 0;
        }
        $this->userRepo->update($input, $id);
        return redirect()->route('admin.user.edit', $id)->with('success', 'Update thành công');
    }

    public function destroy($id) {
        $this->userRepo->delete($id);
        return redirect()->back();
    }

}

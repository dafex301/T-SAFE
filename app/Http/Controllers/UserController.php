<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Cabang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class UserController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate()
    {
    }

    public function register()
    {
        return view('auth.register');
    }

    public function create(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        auth()->login($user);

        return redirect('/')->with('success', "Account successfully registered.");
    }

    // CRUD User
    public function index()
    {
        return view('admin.user.index', [
            'users' => User::orderBy('updated_at', 'desc')->get(),
            'role' => Role::all(),
            'cabang' => Cabang::all()
        ]);
    }

    public function show()
    {
        return view('profile');
    }

    public function updatePassword()
    {

        // first get the current user id
        $id = auth()->user()->id;

        // then find the user from database
        $user = User::findOrFail($id);

        // validate the current password with password in database
        if (Hash::check(request('current_password'), $user->password)) {
            // now we are sure that current password is valid
            // go ahead and update the password
            $user->password = request('new_password');
            $user->save();

            return redirect('/profile')->with('success', "Password successfully updated.");
        } else {
            return redirect('/profile')->with('error', "Current password does not match.");
        }

        return redirect('/profile')->with('error', "Something went wrong.");
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'nik' => 'required',
            'username' => 'required',
            'role' => 'required',
            'password' => 'required',
            'cabang' => 'required',
        ]);


        // Create user
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'nik' => $data['nik'],
            'cabang' => $data['cabang'],
            'username' => $data['username'],
            'role' => $data['role'],
            'password' => $data['password'],
        ]);

        return redirect('/admin/akun')->with('success', "User successfully created.");
    }

    public function import(Request $request)
    {
        $file = $request->file('file');
        $fileContents = file($file->getPathname());

        $cabangMap = Cabang::pluck('id', 'name');
        $roleMap = Role::pluck('id', 'name');


        foreach ($fileContents as $line) {
            // skip first line
            if ($line == $fileContents[0]) {
                continue;
            }
            $data = str_getcsv($line);

            $cabangId = $cabangMap[$data[4]] ?? null;
            $roleId = $roleMap[$data[5]] ?? null;

            if ($cabangId !== null && $roleId !== null) {
                $user = User::firstOrNew(['nik' => $data[0]]);

                if (!$user->exists) {
                    $user->name = $data[1];
                    $user->username = $data[2];
                    $user->password = $data[3];
                    $user->cabang = $cabangId;
                    $user->role = $roleId;
                    $user->save();
                }
            }
        }

        return redirect()->back()->with('success', 'CSV file imported successfully.');
    }

    public function update(User $user, String $id)
    {
        $data = request()->validate([
            'name' => 'required',
            'nik' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'role' => 'required',
            'cabang' => 'required',
        ]);

        // Update user
        $user = User::where('id', $id)->update([
            'name' => $data['name'],
            'nik' => $data['nik'],
            'email' => $data['email'],
            'username' => $data['username'],
            'role' => $data['role'],
            'cabang' => $data['cabang'],
        ]);

        return redirect('/admin/akun')->with('success', "User successfully updated.");
    }

    public function destroy(User $user, String $id)
    {
        $user = User::where('id', $id)->delete();

        return redirect('/admin/akun')->with('success', "User successfully deleted.");
    }
}

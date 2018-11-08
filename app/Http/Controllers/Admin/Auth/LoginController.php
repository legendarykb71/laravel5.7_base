<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Auth\Validator;
use Sentinel;
use Illuminate\Support\Str;


class LoginController extends Controller
{
    public function index() {
        // dd(Str::uuid());
        return view('admin.login');
    }

    public function redirectToLogin()
    {
        return redirect()->route('login');
    }

    public function login(Request $request) {
    	
    	try {
            $validatedData = $request->validate([
		        'email' => 'required|email',
		        'password' => 'required',
		    ]);

            $credentials = array(
            	"email" => $validatedData['email'],
            	"password" => $validatedData['password'],
            );

            $remember = ($request->input('remember') == 'on') ? true : false;

            if ($user = Sentinel::authenticate($credentials, $remember)) {
                return redirect()->route('admin.dashboard');
            }

            return redirect()->back()->with('error', 'Invalid Username and password.')->withInput();

        } catch (NotActivatedException $e) {
            
            return Redirect::back()->withErrors(['global' => 'This user is not activated','activate_contact' => 1]);
        }
        catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            return Redirect::back()->withErrors(['global' => 'You are temporary suspended' .' '. $delay .' seconds','activate_contact' => 1]);
        }

    }

    public function logout() {
    	Sentinel::logout();
    	return redirect()->route('login');
    }
}

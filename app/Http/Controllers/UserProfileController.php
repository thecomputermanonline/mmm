<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Requests\EditUserRequest;
class UserProfileController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware(['auth','verified'] );
        //$this->middleware('verified');
    }
    public function getAuthUser ()
    {
        return Auth::user();
    }

    public function updateAuthUser (Request $request)
    {


        //$user = User::find(Auth::id());
        $user = Auth::user();

//        if($request->hasFile('avatar')){
//
//            $this->validate($request,[
//
//                'avatar' =>  'mimes:png',
//
//            ]);
//
//
//        }
        $this->validate(request(),[
            //'avatar' =>  'mimes:png',
          'fname' => 'required|string',
           'lname' => 'required|string',
            'country' => 'required|string',
//            'state' => 'required|string',
//            'gender' => 'required|string',
            'email' => 'required|email|unique:users,email,' . Auth::id()
        ]);

            if (isset($request['avatar'])) {
                $user->addMediaFromRequest('avatar')->toMediaCollection('avatars');
            }
            $user->fname = $request->fname;
            $user->lname = $request->lname;
            $user->country = $request->country;
            $user->state = $request->state;
            $user->gender = $request->gender;
            $user->email = $request->email;
            $user->save();

        $request->session()->flash('status', 'You have updated your account!');

        return view('my-account', array('user' => Auth::user()));

    }

    public function my_profile()
    {
        return view('my-profile');
    }
    public function my_account()
    {
        return view('my-account');
    }


    function changePassword(Request $request){


            if($request->oldpassword == $request->user()->password) {


                $this->validate($request, [
                    'password' => 'required|min:8|confirmed',
                    //'password' => 'min:6|confirmed',

                ]);

                $request->user()->password = bcrypt($request->password);

            }else{

            }

}
    /*
    |-------------------------------------------------------------------------------
    | Updates a User's Profile
    |-------------------------------------------------------------------------------
    | URL:            /api/v1/user
    | Method:         PUT
    | Description:    Updates the authenticated user's profile
    */
    /**
     * Update the user's profile details.
     *
     * @param Request $request
     * @return void
     * @throws \Illuminate\Validation\ValidationException
     */
    public function userProfileUpdate(Request $request)
    {


//        if($request->hasFile('avatar')){
//
//            $this->validate($request,[
//
//                'avatar' =>  'mimes:png',
//
//            ]);
//




        $this->validate($request, [
//            'age' => 'required|integer|min:1',
            'fname' => 'required|string|min:1',
            'lname' => 'required|string|min:1',
            'country' => 'required',
            'state' => 'required|string|min:1',
            'gender' => 'required',
            'email' => 'required|email|unique:users,email,' . Auth::id()
        ]);
//        if (isset($request['avatar'])) {
////            $request->user()->addMediaFromRequest('avatar')->toMediaCollection('avatars');
////            $imageName = time().'.'.$request->avatar->getClientOriginalExtension();
////            $request->avatar->move(public_path('images'), $imageName);
//            $request->user()->uploadImage(request()->file('avatar'));
//        }

       //


        $request->user()->forceFill([
            'fname' => $request->fname,
               // email => $request->age,
                'lname' => $request->lname,
                'country' => $request->country,
                'state' => $request->state,
                'gender' => $request->gender,

        ])->save();
    }

    public function userProfileGet(){
        $user = $this->getAuthUser ();


        return response()->json($user);
    }
    public function destroy(){
//validate to confirm(todo)

        //$user = \User::find(Auth::user()->id);
        $user = $this->getAuthUser ();

        Auth::logout();

        if ($user->delete()) {

            return Redirect::route('home')->with('global', 'Your account has been deleted!');
        }
    }

}

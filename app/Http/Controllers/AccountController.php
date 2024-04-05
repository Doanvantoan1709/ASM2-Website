<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use App\Mail\VerifyAccount;
use App\Models\Customer;
use App\Models\CustomerResetToken;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Mail;
use Hash;

class AccountController extends Controller
{
    public function  login() {
        return view('account.login');
    }

    public function check_login(Request $req) {
        $req->validate([
            'email' => 'required|exists:customers',
            'password' => 'required'
        ]);
        $data = $req->only('email','password');
        $check = auth('cus')->attempt($data);
       
        
        if ($check) {

            return redirect()->route('home.index');
        }
        return redirect()->back()->with('no','');
    }

    
    public function logout() {
        auth('cus')->logout();
        return redirect()->route('account.login')->with('ok','Your logouted');
    }

    public function register() {
        return view('account.register');
    }

    public function check_register(Request $req) {
        $req->validate([
            'name' => 'required|min:6|max:100|not_regex:/[<>]/',
            'email' => 'required|email|min:6|max:100|unique:customers',
            'phone' => 'required|digits:10',
            'password' => 'required|min:4',
        ], [
            'name.min' => 'Full name must be at least 6 characters',
            'phone.digits' => 'The phone number must contain 10 numbers',
            'password.min' => 'Password minimum 4 characters'
        ]);

        $data = $req->only('name','email','phone','address');

        $data['password'] = bcrypt($req->password);
        
        if ($acc = Customer::create($data) ) {
            // Mail::to($acc->email)->send(new VerifyAccount($acc));
            return redirect()->route('account.login')->with('ok', ' ');
        }
        return redirect()->back()->with('no',' ');

    }


    public function change_password() {
        return view('account.change-pwd');
    }

    public function check_change_password(Request $req) {
        $auth = auth('cus')->user();
        $req->validate([
            'old_password' => [
                'required',
                function($attr, $value, $fail) use($auth)  {

                    if (!Hash::check($value, $auth->password) ) {
                        $fail('Your password is not match');
                    }
                }],
            'password' => 'required|min:4',
            'confirm_password' => 'required|same:password'
        ]);

        $data['password'] = bcrypt($req->password);
        $check = $auth->update($data);
        if ($check) {
            auth('cus')->logout();
            return redirect()->back()->with('ok','Update your password successfuly');
        }
        return redirect()->back()->with('no','Something error, please check agian');

    }
    public function verify($email) {
        $acc = Customer::where('email', $email)->whereNUll('email_verified_at')->firstOrFail();
        Customer::where('email', $email)->update(['email_verified_at' => date('Y-m-d')]);
        return redirect()->route('account.login')->with('ok','Verify account successfully, Now you can login');
    }

    public function forgot_password() {
        return view('account.forgot-pwd');
    }

    public function check_forgot_password(Request $req) {
        $req->validate([
            'email' => 'required|email|exists:customers,email' // Kiểm tra email tồn tại trong bảng customers
        ]);
    
        // Kiểm tra xem email đã tồn tại trong bảng customer_reset_tokens hay không
        $existingToken = CustomerResetToken::where('email', $req->email)->first();
    
        if ($existingToken) {
            $token = Str::random(50);
            // Nếu email đã tồn tại, cập nhật token mới
            $existingToken->update(['token' => $token]);
            $customer = Customer::where('email', $req->email)->first();
            Mail::to($req->email)->send(new ForgotPassword($customer, $token));
            
        } 
        else {
            // Nếu email chưa tồn tại, tạo một bản ghi mới
            $token = Str::random(50);
            CustomerResetToken::create([
                'email' => $req->email,
                'token' => $token
            ]);
            $customer = Customer::where('email', $req->email)->first();
            Mail::to($req->email)->send(new ForgotPassword($customer, $token));
        }
    
        // Gửi email với token mới hoặc cũ đến người dùng
       
    
        return redirect()->back()->with('ok','Send email successfully, please check email to continue');
    }

    public function profile() {
    // Lấy thông tin người dùng đã đăng nhập
    $auth = Auth::guard('cus')->user();
            
    // Truyền biến $auth sang view 'account.profile'
    return view('account.profile', compact('auth'));
    }

    public function check_profile(Request $req) {
        $auth = auth('cus')->user();
        $req->validate([
            'name' => 'required|min:6|max:100|not_regex:/[<>]/',
            'email' => 'required|email|min:6|max:100|unique:customers,email,'.$auth->id,
            'phone' => 'required|digits:10',
            'address'  => 'required|min:6|max:255|not_regex:/[<>]/'
        ], [
            'name.required' => 'Họ tên không được để tróng',
            'name.min' => 'Họ ten tối thiểu là 6 ký tự'
        ]);

        $data = $req->only('name','email','phone','address');
       

        $check = $auth->update($data);
        if ($check) {
            return redirect()->back()->with('ok','');
        }
        return redirect()->back()->with('no','');

    }

    public function reset_password($token) {

        $tokenData = CustomerResetToken::checkToken($token);

        return view('account.reset_password');
    }

    public function check_reset_password($token) {
        request()->validate([
            'password' => 'required|min:4',
            'confirm_password' => 'required|same:password'
        ]);

        $tokenData = CustomerResetToken::checkToken($token);
        $customer = $tokenData->customer;

        $data = [
            'password' => bcrypt(request(('password')))
        ];

        $check = $customer->update($data);

        if ($check) {
            return redirect()->route('account.login')->with('ok','Update your password successfuly');
        }

        return redirect()->back()->with('no','Something error, please check agian');

    }
}

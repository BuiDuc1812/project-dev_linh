<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        Auth::logout();
        session()->forget('account');
        return view('login.index',[
            'title'=> 'Đăng nhập hệ thống'
        ]);
    }
    public function store(Request $request) {
        // Kiểm tra dữ liệu nhập vào
        $rules = [
            'email' =>'required|email',
            'password' => 'required'
        ];
        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        // dd($request->all());
        
        if ($validator->fails()) {
            // Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang đăng nhập và thông báo lỗi
            return redirect('admin')->withErrors($validator)->withInput();
        } else {
            // Nếu dữ liệu hợp lệ sẽ kiểm tra trong csdl
            $email = $request->input('email');
            $password = $request->input('password');
     
            if( Auth::attempt(['email' => $email, 'password' =>$password, 'status' => 0])) {
                // Kiểm tra đúng email và mật khẩu sẽ chuyển trang
                session(['user' => Auth::user()]);
                return redirect('admin/home');
            } else {
                // Kiểm tra không đúng sẽ hiển thị thông báo lỗi
                Session::flash('error', 'Email hoặc mật khẩu không đúng!');
                return redirect('admin');
            }
        }
    }
    public function login(Request $request) {
        // Kiểm tra dữ liệu nhập vào
        $rules = [
            'email' =>'required|email',
            'password' => 'required'
        ];
        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        // dd($request->all());
        
        if ($validator->fails()) {
            // Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang đăng nhập và thông báo lỗi
            return redirect('admin')->withErrors($validator)->withInput();
        } else {
            // Nếu dữ liệu hợp lệ sẽ kiểm tra trong csdl
            $email = $request->input('email');
            $password = $request->input('password');
     
            if( Auth::attempt(['email' => $email, 'password' =>$password, 'status' => 0])) {
                // Kiểm tra đúng email và mật khẩu sẽ chuyển trang
                session(['user' => Auth::user()]);
                return redirect('admin/home');
            } else {
                // Kiểm tra không đúng sẽ hiển thị thông báo lỗi
                Session::flash('error', 'Email hoặc mật khẩu không đúng!');
                return redirect('admin');
            }
        }
    }
    
    public function loginCustomer(Request $request) {
        // Kiểm tra dữ liệu nhập vào
        $rules = [
            'email' =>'required|email',
            'password' => 'required'
        ];
        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        // dd($request->all());
        
        if ($validator->fails()) {
            // Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang đăng nhập và thông báo lỗi
            return redirect('/')->withErrors($validator)->withInput();
        } else {
            // Nếu dữ liệu hợp lệ sẽ kiểm tra trong csdl
            $email = $request->input('email');
            $password = $request->input('password');
     
            if( Auth::attempt(['email' => $email, 'password' =>$password, 'status' => 1])) {
                // Kiểm tra đúng email và mật khẩu sẽ chuyển trang
                session(['account' => Auth::user()]);
                // Session::flash('success', 'Đăng nhập thành công!');
                return redirect('/');
            } else {
                // Kiểm tra không đúng sẽ hiển thị thông báo lỗi
                Session::flash('error', 'Email hoặc mật khẩu không đúng!');
                return redirect('/');
            }
        }
    }
    public function loginCheckout(Request $request) {
        // Kiểm tra dữ liệu nhập vào
        $rules = [
            'email' =>'required|email',
            'password' => 'required'
        ];
        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        // dd($request->all());
        
        if ($validator->fails()) {
            // Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang đăng nhập và thông báo lỗi
            return redirect('/cart/checkout')->withErrors($validator)->withInput();
        } else {
            // Nếu dữ liệu hợp lệ sẽ kiểm tra trong csdl
            $email = $request->input('email');
            $password = $request->input('password');
            if( Auth::attempt(['email' => $email, 'password' =>$password, 'status' => 1])) {
                // Kiểm tra đúng email và mật khẩu sẽ chuyển trang
                session(['account' => Auth::user()]);
                Session::flash('success', 'Đăng nhập thành công!');
                return redirect('/cart/checkout');
            } else {
                // Kiểm tra không đúng sẽ hiển thị thông báo lỗi
                Session::flash('error', 'Email hoặc mật khẩu không đúng!');
                return redirect('/cart/checkout');
            }
        }
    }
    public function logoutCustomer() {
        Auth::logout();
        session()->forget('account');
        return redirect('/');
    }
    public function logoutCheckout() {
        Auth::logout();
        session()->forget('account');
        return redirect('/cart/checkout');
    }

    public function forgotpassword(){
        return view('layout.forgotpassword');
    }

    public function resetpassword(Request $request){
        $email = $request->email;
        $user = User::where('email', $email)->first();;
        if($user != null){
            $user->password =bcrypt($request->newpass);
            $user->save();
            return redirect()->back()->with('success','Mật khẩu của bạn đã được cập nhật !!!');
        }
        return redirect()->back()->with('error','Email không trùng khớp !!!');
    }
}

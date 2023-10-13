<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\User;
use App\Models\Presensi;
use App\Models\Mapel;
use Illuminate\Http\Request;

class SiswaLoginController extends Controller
{
    use AuthenticatesUsers;

    public function index()
    {
     $presensis = Presensi::where('absensi_id', '!=', 2)->latest()->get();

    // return view('dashboard-siswa', [
    //     'title' => 'Dashboard',
    //   'title' => 'Data Siswa',
    //   'siswa' => Siswa::all(),
    //   'kelas' => kelas::all(),
    //   'mapel' => Mapel::all(),
    //   'guru' => User::all(),
    //   // 'title' => 'Data kelas',
    // ]);
    $presensis = Presensi::where('absensi_id', '!=', 2)->latest()->get();

    return view('dashboard-siswa', [
      'title' => 'dashboard-Mahasiswa',
      'siswa' => Siswa::count(),
      'guru' => User::count(),
      'mapel' => Mapel::count(),
      'kelas' => Kelas::count(),
      'presensis' => $presensiss,
    ]);
    
    }
    

    protected $redirectTo = 'siswa/index';

    public function __construct()
    {
      $this->middleware('guest')->except('logout');
    }

    public function guard()
    {
     return Auth::guard('siswa');
    }

    public function showLoginForm()
    {
      $title = "login"; 
      return view('loginsiswa', compact('title'));
    }

    public function login(Request $request){
        $credentials = $request->validate([
          'email' => 'required',
          'password' => 'required'
      ]);
      // dd('kntl');
      if (Auth::guard('siswa')->attempt($credentials)) {
          // $user = auth()->user();
          $request->session()->regenerate();
          // dd('kntl');
          return redirect()->intended('/siswa/index');
      }
      // dd('mmk');
      return back()->with('loginError', 'Login Failed!!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();
        return back()->with('logout', 'Logout Success !!');
    }
}

<?php

namespace App\Http\Controllers\admin\dashboard;

use App\core\member\MemberInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // private $memberInterface;
    // public function __construct( MemberInterface $memberInterface){
    //     $this->memberInterface = $memberInterface;
    // }
    public function dashboard()
    {
        return view('admin.dashboard.dashboard');
    }
}

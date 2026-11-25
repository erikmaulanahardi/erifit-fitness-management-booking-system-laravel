<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(Request $request)
    {
        $members = Member::with('user')
            ->latest('id')
            ->paginate(10);

        return view('admin.members.index', compact('members'));
    }
}

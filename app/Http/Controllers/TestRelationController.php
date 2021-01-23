<?php

namespace App\Http\Controllers;

use App\Role;
use App\Staff;
use Illuminate\Http\Request;
use App\User;
use App\Tour;
use App\Category;
use App\News;
class TestRelationController extends Controller
{
    public function test(Request $request)
    {
        $user = User::with('tours')->find(1); //Working fine

        $tour = Tour::with('members')->find(3); //ok

//        $category;

        $news = News::with(['author', 'category'])->find(1); //working fine

        $category = Category::with('news')->find(1); //ok

        $staff = Staff::with(['news', 'role'])->find(8);

        $roles = Role::with('users')->find(1);
//        $roles = Role::find(1);

        return $staff;

    }
}

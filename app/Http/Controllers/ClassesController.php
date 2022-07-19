<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function all(){
//        $classes = Classes::all(); //lọc tất cả
//        $classes = Classes::where("cid","like","TH9%")->get();//lọc dữ liệu theo mục
//        $classes = Classes::orderBy("name","asc")->get(); // sắp xếp theo tên từ A -> Z
//        $classes = Classes::orderBy("name","asc")->select('name','room')->limit(5)->skip(5)->get(); // lấy mỗi name và room, giới hạn chỉ lấy 5 phòng bằng lệnh limit, skip bỏ qua những record đầu tiên
//        dd($classes);
        $classes = Classes::withCount("students")->paginate(5);
        return view("classes.list-classes",[
            "classes"=>$classes //nạp vào biến classes phía bên trái để vứt sang giao diện
        ]);
    }
}

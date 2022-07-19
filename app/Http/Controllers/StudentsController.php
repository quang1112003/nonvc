<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function all(){
//        $classes = Classes::all(); //lọc tất cả
//        $classes = Classes::where("cid","like","TH9%")->get();//lọc dữ liệu theo mục
//        $classes = Classes::orderBy("name","asc")->get(); // sắp xếp theo tên từ A -> Z
//        $classes = Classes::orderBy("name","asc")->select('name','room')->limit(5)->skip(5)->get(); // lấy mỗi name và room, giới hạn chỉ lấy 5 phòng bằng lệnh limit, skip bỏ qua những record đầu tiên
//        dd($classes);
//        $classTable = with(new Classes)->getTable();
//        $studentTable = with(new Student())->getTable();
//        $students = Student::leftJoin($classTable, $studentTable.".cid",'=', $classTable.".cid")
//            ->select($studentTable.'.*',$classTable.'name as className',$classTable.'.room')
//            ->simplePaginate(10);
        $students = Student::with("classes")->simplePaginate(10);
        return view("students.list-students",[
            "students"=>$students //nạp vào biến classes phía bên trái để vứt sang giao diện
        ]);
    }
}

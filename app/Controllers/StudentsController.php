<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\I18n\Time;

class StudentsController extends BaseController
{
    public function newStudent()
    {
        $db = \Config\Database::connect();
        $today = new Time('now');
        $user = "wisaac";
        
        $builder = $db->table('users');
        $builder->select('users.school_id, school_name, access_level, email, full_name');
        $builder->join('schools', 'schools.school_id = users.school_id');
        $querry = $builder->getWhere(['user_name'=>$user]);
        $row = $querry->getRow();
        $sklId = $row->school_id;
        
        $studentsDetails = $db->table('students');
        $studentsDetails->selectMax('student_id');
        $nxtStudent = $studentsDetails->getWhere(['school_id'=>$sklId]);
        $idResult = $nxtStudent->getRow();
        $nextId = $idResult->student_id; //101 022 0001 == 'sklId' 'year' 'number in the year'
        if ($nextId+1==1){
            $nextId = '0001';
        }else{
            $nextId+=1;
        }
        $year = substr($today->getYear(),1) ;

        $data = [
            'today'     =>$today->toDateString(),
            'schoolId'     =>$sklId,
            'pageTitle' =>"New Student",
            'userName'  =>$user,
            'fullName'  =>$row->full_name,
            'schoolName'=>$row->school_name,
            'nxtStudentId' =>$sklId.$year.$nextId

        ];


        echo view('templates/header', $data);
        echo view('students/newStudent');
        echo view('templates/footer');
    }
}

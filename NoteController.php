<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index($name){
        $notes=["Mohamed Alaoui" => "16", "Ahmed Bennani" => "14", "Rachida kich" =>"6", "Aicha Saaoudi" => "19","Noura Alaoui" => "7", "Samar Rhaoussi" => "13","Aicha Siraj" => "10", "Samiha Hakim" => "09", "Mohamed Rami"=> "17", "Sami Tazi"=> "7", "Noura Tazi" => "14"] ;
        arsort($notes);
        return view("notes",["notes"=>$notes,"name"=>$name]);
       }
       public function store(){
        $nom=$_POST["name"];
        return redirect()->route("notes",["name"=>$nom]);
        
       }

    
       
       public function decorate(){
        $b = true;
        $notes=["Mohamed Alaoui" => "16", "Ahmed Bennani" => "14", "Rachida kich" =>"6", "Aicha Saaoudi" => "19","Noura Alaoui" => "7", "Samar Rhaoussi" => "13","Aicha Siraj" => "10", "Samiha Hakim" => "09", "Mohamed Rami"=> "17", "Sami Tazi"=> "7", "Noura Tazi" => "14"] ;

        return view('notes', compact('notes','b'));
        
       }
}
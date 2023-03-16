<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
    function index(){
    
        $workers=[
            ['id'=>'1', 'name'=>'Sheldon Cooper', 'surname'=>'(Jim Parsons)', 'age'=>'43', 'img'=>'/img/sheldon.jpg'],
    
            ['id'=>'2', 'name'=>'Leonard Hofstadter', 'surname'=>'(Johnny Galeck)', 'age'=>'48', 'img'=>'/img/leonard.jpg'],
    
            ['id'=>'3', 'name'=>'Howard Wolowitz', 'surname'=>'(Simon Helberg)', 'age'=>'43', 'img'=>'/img/howard.jpg'],
    
            ['id'=>'4', 'name'=>'Raji Koothrappali', 'surname'=>'(Kunal Nayyar)', 'age'=>'42', 'img'=>'/img/raji.jpg'],
    
            ['id'=>'5', 'name'=>'Penny', 'surname'=>'(Kaley Cuoco)', 'age'=>'38', 'img'=>'/img/penny.jpg'],
    
            ['id'=>'6', 'name'=>'Bernadette Rostenkowski', 'surname'=>'(Melissa Rauch)', 'age'=>'43', 'img'=>'/img/berny.jpg'],
    
            ['id'=>'7', 'name'=>'Amy Farrah Fowler', 'surname'=>'(Mayim Bialik)', 'age'=>'47', 'img'=>'/img/amy.jpg'],
         
           
        ];
        
        return view('workersPage', compact ('workers'));
    }

    function show($id){
        $workers=[
            ['id'=>'1', 'name'=>'Sheldon Cooper', 'surname'=>'(Jim Parsons)', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'age'=>'43', 'img'=>'/img/sheldon.jpg'],
    
            ['id'=>'2', 'name'=>'Leonard Hofstadter', 'surname'=>'(Johnny Galeck)', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'age'=>'48', 'img'=>'/img/leonard.jpg'],
    
            ['id'=>'3', 'name'=>'Howard Wolowitz', 'surname'=>'(Simon Helberg)', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'age'=>'43', 'img'=>'/img/howard.jpg'],
    
            ['id'=>'4', 'name'=>'Raji Koothrappali', 'surname'=>'(Kunal Nayyar)', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'age'=>'42', 'img'=>'/img/raji.jpg'],
    
            ['id'=>'5', 'name'=>'Penny', 'surname'=>'(Kaley Cuoco)', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'age'=>'38', 'img'=>'/img/penny.jpg'],
    
            ['id'=>'6', 'name'=>'Bernadette Rostenkowski', 'surname'=>'(Melissa Rauch)', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'age'=>'43', 'img'=>'/img/berny.jpg'],
    
            ['id'=>'7', 'name'=>'Amy Farrah Fowler', 'surname'=>'(Mayim Bialik)', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'age'=>'47', 'img'=>'/img/amy.jpg'],
         
           
        ];
    
        foreach($workers as $worker){
            if($worker['id']==$id){
                return view('workerDetail', ['worker'=>$worker]);  
            }
        }
        
    }
}

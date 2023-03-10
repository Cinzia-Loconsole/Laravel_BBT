<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/workers-page', function(){
    
    $workers=[
        ['id'=>'1', 'name'=>'Sheldon Cooper', 'surname'=>'(Jim Parsons)', 'age'=>'43', 'img'=>'/img/sheldon.jpg'],

        ['id'=>'2', 'name'=>'Leonard Hofstadter', 'surname'=>'(Johnny Galeck)', 'age'=>'48', 'img'=>'/img/leonard.jpg'],

        ['id'=>'3', 'name'=>'Howard Wolowitz', 'surname'=>'(Simon Helberg)', 'age'=>'43', 'img'=>'/img/howard.jpg'],

        ['id'=>'4', 'name'=>'Raj Koothrappali', 'surname'=>'(Kunal Nayyar)', 'age'=>'42', 'img'=>'/img/raji.jpg'],

        ['id'=>'5', 'name'=>'Penny', 'surname'=>'(Kaley Cuoco)', 'age'=>'38', 'img'=>'/img/penny.jpg'],

        ['id'=>'6', 'name'=>'Bernadette Rostenkowski', 'surname'=>'(Melissa Rauch)', 'age'=>'43', 'img'=>'/img/berny.jpg'],

        ['id'=>'5', 'name'=>'Amy Farrah Fowler', 'surname'=>'(Mayim Bialik)', 'age'=>'47', 'img'=>'/img/amy.jpg'],
     
       
    ];
    
    return view('workers', compact ('workers'));
})->name('workersPage');

Route::get('/worker-detail/{id}',function($id){
    $workers=[
        ['id'=>'1', 'name'=>'Sheldon Cooper', 'surname'=>'(Jim Parsons)', 'age'=>'43', 'img'=>'/img/sheldon.jpg'],

        ['id'=>'2', 'name'=>'Leonard Hofstadter', 'surname'=>'(Johnny Galeck)', 'age'=>'48', 'img'=>'/img/leonard.jpg'],

        ['id'=>'3', 'name'=>'Howard Wolowitz', 'surname'=>'(Simon Helberg)', 'age'=>'43', 'img'=>'/img/howard.jpg'],

        ['id'=>'4', 'name'=>'Raj Koothrappali', 'surname'=>'(Kunal Nayyar)', 'age'=>'42', 'img'=>'/img/raji.jpg'],

        ['id'=>'5', 'name'=>'Penny', 'surname'=>'(Kaley Cuoco)', 'age'=>'38', 'img'=>'/img/penny.jpg'],

        ['id'=>'6', 'name'=>'Bernadette Rostenkowski', 'surname'=>'(Melissa Rauch)', 'age'=>'43', 'img'=>'/img/berny.jpg'],

        ['id'=>'5', 'name'=>'Amy Farrah Fowler', 'surname'=>'(Mayim Bialik)', 'age'=>'47', 'img'=>'/img/amy.jpg'],
     
       
    ];

    foreach($workers as $worker){
        if($worker['id']==$id){
            return view('worker-detail', ['worker'=>$worker]);  
        }
    }
    
})->name('worker-detail');

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

// WELCOME HOME PAGE
Route::get('/', function () {
    return view('welcome');
});


// WORKERS PAGE
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


// WORKERS DETAIL PAGE
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

// GADGET

Route::get('/gadgets', function(){
    
    $gadgets=[
        ['id'=>'1', 'name'=>'Lego - appartamento', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'price'=>'50.99', 'img'=>'/img/gad1.jpg'],

        ['id'=>'2', 'name'=>'Leonard funko', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'price'=>'27.29', 'img'=>'/img/gad2.jpg'],

        ['id'=>'3', 'name'=>'Cover Big Bang Theory', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'price'=>'40', 'img'=>'/img/gad3.jpg'],

        ['id'=>'4', 'name'=>'Sheldon Wacky Wobbler', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'price'=>'17.10', 'img'=>'/img/gad4.jpg'],

        ['id'=>'5', 'name'=>'Cappello Bazinga', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'price'=>'32.25', 'img'=>'/img/gad5.jpg'],

        ['id'=>'6', 'name'=>'Cubo di Rubick Sheldon', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'price'=>'33.50', 'img'=>'/img/gad6.jpg'],
     
       
    ];
    
    return view('gadgets', compact ('gadgets'));
})->name('gadgetsPage');

// GADGET DETAIL
Route::get('/gadget-detail/{id}',function($id){

    $gadgets=[
        ['id'=>'1', 'name'=>'Lego - appartamento', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'price'=>'50.99', 'img'=>'/img/gad1.jpg'],

        ['id'=>'2', 'name'=>'Leonard funko', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'price'=>'27.29', 'img'=>'/img/gad2.jpg'],

        ['id'=>'3', 'name'=>'Cover Big Bang Theory', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'price'=>'40', 'img'=>'/img/gad3.jpg'],

        ['id'=>'4', 'name'=>'Sheldon', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'price'=>'17.10', 'img'=>'/img/gad4.jpg'],

        ['id'=>'5', 'name'=>'Cappello Bazinga', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'price'=>'32.25', 'img'=>'/img/gad5.jpg'],

        ['id'=>'6', 'name'=>' Cubo di Rubick Sheldon', 'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'price'=>'33.50', 'img'=>'/img/gad6.jpg'],
     
       
    ];

    foreach($gadgets as $gadget){
        if($gadget['id']==$id){
            return view ('gadget-detail', ['gadget'=>$gadget]);
        }
    }

})->name('gadget-detail');
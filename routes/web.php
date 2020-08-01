<?php
use App\Movie;
Route::redirect ('/','UI/landing');
// Route::get('/',function(){
//   return "hello world";

  
// });
// Route::get('/landing',function(){
//   return "landing";
// });
Route::prefix('UI')->group(function(){
    //Route::view('/landing','UI.landing');


Route::get('/landing',function(){
    //$movies=Movie::all();
    $movies=Movie::paginate(3);
   
    return view('UI.landing',['movies'=>$movies]);
});
    Route::get('/detail/{id}',function($id){
        //return $id.$secondid;
    return view('UI.detail');
});
    Route::get('/testing',function(){
        return 'prefix-success';
});

});

// Route::get('/rntesting',function(){
//     return "This route name work";
// })->name('rntesting');
// Route::get('/rn',function(){
//     return redirect()->route('rntesting');
// });

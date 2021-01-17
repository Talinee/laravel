<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function () {
    return view('welcome') ;
});

Route::get('/area',function () {
    return view('area_form') ;
})->name('area_form');

Route::post('/area', function ( ServerRequestInterface $request) {
    $data = $request->getParsedBody () ;
    $type = (double) $data['type'];
    $width = (double) $data['width'];
    $hight = (double) $data['hight'];
    $area = $type * $width * $height;
        if ($type==1)
        {
            $nametype ='Rectangular';
        }
        else
        {
            $nametype ='Triangle';
        }
    return view('area_result', [
        'area' => $area, 'width' => $width, 'height' => $height,
        'nametype' => $nametype, 
        ]) ;
    }) ->name ('area_result') ;

    Route::get('/mul',function () {
        return view('mul_form');
    })->name('mul_form');

    Route::post('mul',function (ServerRequestInterface $request) {
        $data = $request->getParsedBody();
        $n = (double)$data['n'];
        return view('mul_result',[
            'n' => $n
        ]);
    })->name('mul_result');
    

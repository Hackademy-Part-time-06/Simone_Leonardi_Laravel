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



/ESERCIZIO 2 Con il progetto Laravel appena creato, vai in routes/web.php e aggiungi 3 rotte di tipo get in grado di ritornare
    1. Una stringa;
    2. Un intero;
    3. Un elemento di un array. 

Ad esempio per una stringa:

    Route::get('/stringa', function () { 
        return 'Esempio stringa';
    });
*/


//stringa

Route::get('/stringa', function () { 
    return 'Sono una stringa';
});

//numero

Route::get('/123', function () { 
    return 123;
});


//array 

Route::get('/array', function () { 
    $array = ['Sono','un','array'];
    return $array;
});

Route::get('/chisiamo', function () { 
      return view('chisiamo');
});

Route::get('/contatti', function () { 
    return view('contatti');
});

Route::get('/storia', function () { 
    return view('storia');
});



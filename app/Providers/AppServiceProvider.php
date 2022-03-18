<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Book;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

  
    public function boot()
    {
        $books=Book::first();
        view()->share (compact('books'));
    }
}

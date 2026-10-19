<?php

namespace App;

use Illuminate\Support\ServiceProvider;

class PetServiceProvider extends ServiceProvider{
    public function register(): void{
    }

    public function boot(): void{
        PetPrinter::print();
    }
}

<?php
use App\PetPrinter;

if (! function_exists("greet")){
    function greet(): void{
        PetPrinter::print();
    }
}

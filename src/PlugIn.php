<?php

namespace App;

use Composer\Composer;
use Composer\Plugin\PluginInterface;
use Composer\IO\IOInterface;

class PlugIn implements PluginInterface {
    public function activate(Composer $composer, IOInterface $io){
        require __DIR__ .'/helpers.php'; 
        greet();
    }

    public function deactivate(Composer $composer, IOInterface $io){

    }

    public function uninstall(Composer $composer, IOInterface $io){}
}

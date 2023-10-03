<?php

namespace App\Custom;

class Data {

    public static function articles()
    {
        return [
            1 => ['id' => 1, 'title' => 'Articolo 1', 'category' => 'Esteri', 'description' => 'Descrizione breve ...', 'visible' => true],
            2 => ['id' => 2, 'title' => 'Articolo 2', 'category' => 'Sport', 'description' => 'Descrizione breve ...', 'visible' => true],
            3 => ['id' => 3, 'title' => 'Articolo 3', 'category' => 'Economia', 'description' => 'Descrizione breve ...', 'visible' => true],
            4 => ['id' => 4, 'title' => 'Articolo 4', 'category' => 'Cronaca', 'description' => 'Descrizione breve ...', 'visible' => false],
        ];
    }

}
<?php

namespace App;

class Assigin implements Contract
{
    public function create($terms)
    {
        echo $terms;
    }
}
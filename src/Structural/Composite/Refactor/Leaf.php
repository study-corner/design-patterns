<?php

namespace App\Structural\Composite\Refactor;

class Leaf extends Component
{
    public function operation(): string
    {
        return 'Leaf';
    }
}
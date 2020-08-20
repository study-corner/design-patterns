<?php

namespace App\Structural\Composite\Conceptual;

class Leaf extends Component
{
    public function operation(): string
    {
        return 'Leaf';
    }
}
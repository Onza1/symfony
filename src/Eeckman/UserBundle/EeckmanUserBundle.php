<?php

namespace Eeckman\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EeckmanUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

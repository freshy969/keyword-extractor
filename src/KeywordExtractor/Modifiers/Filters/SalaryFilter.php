<?php

namespace KeywordExtractor\Modifiers\Filters;

use KeywordExtractor\Modifiers\AbstractModifier;

class SalaryFilter extends AbstractModifier
{
    public function modifyToken($token)
    {
        if (preg_match('/^\$?[0-9]*[,]*[0-9]*(\.[0-9]*)?(k|(\/)*hr|(\/)*hour)*$/', $token)) {
            return '';
        }

        return $token;
    }
}
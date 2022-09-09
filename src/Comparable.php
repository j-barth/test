<?php

namespace Jbarth;

interface Comparable
{

    /**
     * The function should return an integer lower than, equals to  or upper than 0 as the current object must be
     * considered against $other
     *
     * @param self $other
     * @return int
     */
    public function compareTo($other): int;
}
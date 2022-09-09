<?php

namespace Util;

interface Comparable
{

    /**
     * The funciton should return an integer lower than, equals to  or upper than 0 as the current object must be
     * considered against $other
     *
     * @param self $other
     * @return int
     */
    public function compareTo($other): int;
}
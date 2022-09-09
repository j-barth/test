<?php

namespace Util;

abstract class CollectionUtils
{

    /**
     * @param Comparable[] $comparableList
     * @return Comparable[]
     */
    public static function sort(array &$comparableList): array
    {
        usort($comparableList,
            function (Comparable $previous, Comparable $current) {
                return $previous->compareTo($current);
            }
        );
        return $comparableList;
    }
}

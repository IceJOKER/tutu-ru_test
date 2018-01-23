<?php

/**
 * Distribute m smoothies between n hipsters
 * @param int $m Smoothies
 * @param int $n Hipsters
 * @return int count of smoothies hipsters can drink
 * TODO make arguments human readable
 */
function distributeSmoothies(int $m, int $n): int
{
    return $m < $n ? 0 : (int)$m / $n;
}
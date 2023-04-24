<?php
/**
 * Summary of getHeroStats
 * @param Character $Hero1
 * @param Character $Hero2
 * @return string
 */
function getHeroStats(Character $Hero1, Character $Hero2): string
{
    $Hero1Stats = $Hero1->getStats();
    $Hero2Stats = $Hero2->getStats();
    $str ="
    <ul class='list-group list-group-flush'>
        <li class='list-group-item'>{$Hero1Stats}</li>
        <li class='list-group-item'>{$Hero2Stats}</li>
    </ul>
    ";
    return $str;

}
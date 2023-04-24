<?php
/**
 * Summary of getHeroStats
 * @param Character $Hero1
 * @param Character $Hero2
 * @return string
 */
function displayHeroStats(Character $Hero1, Character $Hero2): string
{
    // An array of the two heroes stats
    $hero1Stats = $Hero1->getStats();
    $hero2Stats = $Hero2->getStats();

    $hero1FirstLetter = substr($hero1Stats['name'], 0, 1);
    $hero1Health = $hero1Stats['health'];

    $hero2FirstLetter = substr($hero2Stats['name'], 0, 1);
    $hero2Health = $hero2Stats['health'];

    return "
    <div class='d-flex align-items-center justify-content-evenly flex-row '>
        <div>{$hero1FirstLetter} | {$hero1Health}</div>
        <div>{$hero2FirstLetter} | {$hero2Health}</div>
    </div>";
}
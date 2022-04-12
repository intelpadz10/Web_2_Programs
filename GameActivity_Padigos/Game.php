<?php
require_once 'init.php';
require_once 'Session.php';

use Sessions\Session;
class Game
{
    public $player = [];

    public function __construct()
    {
    }

    public function importData($key, $index)
    {
        Session::add($key, $index);
    }

    public function attackBot($type)
    {
        $temp = 'char';
        
        $typeDamage = $type[$_SESSION['character_Index']]['CharacterDamage'];
        $totalDmg =   $typeDamage + $this->getCritDmg($type, $temp, $typeDamage);
        $_SESSION['bot_HealthPoints'] =
            $_SESSION['bot_HealthPoints'] - $totalDmg;
    }

    public function attackPlayer($type)
    {
        $temp = 'bot';
        $typeDamage = $type[$_SESSION['bot_Index']]['botDamage'];
        $totalDmg =   $typeDamage + $this->getCritDmg($type, $temp, $typeDamage);
        $_SESSION['character_HealthPoints'] =
            $_SESSION['character_HealthPoints'] - $totalDmg;
    }

    public function getCritDmg($type, $temp, $prevDmg)
    {
        $criticDmg = 0;
        if($temp == 'char'){
            $criticDmg = ($prevDmg / 100) * $type[$_SESSION['character_Index']]['criticalChance'];
            return $criticDmg;
        }
        else if($temp == 'bot'){
            $criticDmg = ($prevDmg / 100) * $type[$_SESSION['bot_Index']]['criticalChance'];
            return $criticDmg;
        }
    }
}

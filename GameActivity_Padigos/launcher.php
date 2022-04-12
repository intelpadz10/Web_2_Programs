<?php
require_once 'init.php';
require_once 'Session.php';

include 'listOfRandomCharacters.php';
include 'Game.php';

use Sessions\Session;
Session::start();

$randomList = new randomChar();
$bots = $randomList->getBotDetails();
$characters = $randomList->getCharDetails();
?>

<!DOCTYPE html>
<head>
    <style>
    body{
        background-image: url("images/bg.jpg"); 
        background-position: 50% 50%;
        background-repeat: repeat;
    }

    .playerBox{
        background: linear-gradient(to bottom, #ff99cc 0%, #9933ff 100%);
        width: 340px;
        height: 100px;
        margin-bottom: 5px;
        padding: 10px;
        text-align: center;
        float: right;
        display: flex;
        justify-content: center;
        align-items: center;
        /* margin-right: 45px; */
        border-radius: 0px 20px 0px 20px;
        border-style: outset;
    }

    .AIBox{
        background: linear-gradient(to bottom, #ff99cc 0%, #9933ff 100%);
        width: 340px;
        height: 100px;
        margin-bottom: 5px;
        padding: 10px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        /* margin-left: 45px; */
        border-radius: 0px 20px 0px 20px;
        border-style: outset;
    }
    select{
        margin: 5px;
    }
    /* button[value="Attack"], textarea {
        border-style: double;
    } */
    .buttonSubmit{
        text-align: center;
    }
    .choose{
        background: linear-gradient(to bottom, #33ccff 0%, #9933ff 100%);
        /* background-color:#27107c; */
        text-align: center;
        /* margin-left: 200px;
        margin-right: 200px; */
        /* margin-bottom: 5px; */
        border-radius: 10px;
        padding-top: 10px;
        border-style: dotted;
        /* width: 740px; */
    }
    button{
        border-style: double;
        background-color:#bcd4e6;
    }
    P{
        color: white;
        text-align: center;
        letter-spacing: 5px;
    }
    img{
        border-color: purple;
        border-style: dashed;
        border-radius: 5px;
    }
    </style>
</head>

<body>
    <div class= "choose">
        <form action="" method="post"> 
            <label>Choose a Bot: </label>
            <select name="bot">
                <?php foreach ($bots as $bot) {
                    echo '<option value="' .
                        $bot['botOrder'] .
                        '">' .
                        $bot['botName'] .
                        '</option>';
                } ?>
            </select>
            <img src="images/hanabi.jpg" width="50" height="50">
            <img src="images/pharsa.jpg" width="50" height="50">
            <img src="images/karina.jpg" width="50" height="50">
            <img src="images/lancelot.jpg" width="50" height="50">
            <img src="images/nana.jpg" width="50" height="50">
            <img src="images/estess.jpg" width="50" height="50">
            <img src="images/miya.jpg" width="50" height="50">
            <img src="images/change.jpg" width="50" height="50">
            <br>
            <label>Choose a Character: </label>
            <select name="character">
                <?php foreach ($characters as $character) {
                    echo '<option value="' .
                        $character['CharacterOrder'] .
                        '">' .
                        $character['CharacterName'] .
                        '</option>';
                } ?>
            </select>
            <img src="images/moana.jpg" width="50" height="50">
            <img src="images/barbie.jpg" width="50" height="50">
            <img src="images/luisa.jpg" width="50" height="50">
            <img src="images/elsa.jpg" width="50" height="50">
            <img src="images/merida.jpg" width="50" height="50">
            <img src="images/olaf.jpg" width="50" height="50">
            <img src="images/pocahontas.jpg" width="50" height="50">
            <img src="images/mulan.jpg" width="50" height="50">
            <br>
            <button type="submit" name="submit" value="submit">Start the game</button>
        </form>
        <br>
    </div>
    <p>LET THE GAME BEGIN!</p>
    <div class="playerBox">
        <?php
        echo 'PLAYER BOX <br><br>';
        $game = new Game();

        if ($_REQUEST) {
            if (isset($_REQUEST['submit'])) {
                $game->importData('character_Index', $_REQUEST['character']);
                $game->importData(
                    'character_HealthPoints',
                    $characters[$_SESSION['character_Index']][
                        'CharacterHealthPoints'
                    ]
                );
                echo "Player name: {$characters[$_SESSION['character_Index']]['CharacterName']} <br> HP:{$characters[$_SESSION['character_Index']]['CharacterHealthPoints']} <br> DMG: {$characters[$_SESSION['character_Index']]['CharacterDamage']}<br> Critical Chance: {$characters[$_SESSION['character_Index']]['criticalChance']} <br>";
            }
            if (isset($_REQUEST['attack'])) {
                $game->attackBot($characters);
                $game->attackPlayer($bots);
                if ($_SESSION['bot_HealthPoints'] <= 0) {
                    echo 'You win!';
                    Session::stop();
                } elseif ($_SESSION['character_HealthPoints'] <= 0) {
                    echo 'You lose!';
                    Session::stop();
                } else {
                    echo "Player name: {$characters[$_SESSION['character_Index']]['CharacterName']} <br> HP:{$_SESSION['character_HealthPoints']} <br> DMG: {$characters[$_SESSION['character_Index']]['CharacterDamage']}<br> Critical Chance: {$characters[$_SESSION['character_Index']]['criticalChance']} <br>";
                }
            }
        }
        ?>
    </div>

    <div class="AIBox">
        <?php
        echo 'BOT BOX <br><br>';
        $game = new Game();

        if ($_REQUEST) {
            if (isset($_REQUEST['submit'])) {
                $game->importData('bot_Index', $_REQUEST['bot']);
                $game->importData(
                    'bot_HealthPoints',
                    $bots[$_SESSION['bot_Index']]['botHealthPoints']
                );
                echo "Bot name: {$bots[$_SESSION['bot_Index']]['botName']} <br> HP: {$bots[$_SESSION['bot_Index']]['botHealthPoints']} <br> DMG: {$bots[$_SESSION['bot_Index']]['botDamage']}<br> Critical Chance: {$bots[$_SESSION['bot_Index']]['criticalChance']}";
            }
            if (isset($_REQUEST['attack'])) {
                // $game->attackBot($characters);
                // $game->attackPlayer($bots);
                if ($_SESSION['bot_HealthPoints'] <= 0) {
                    echo 'Bot lose!';
                } elseif ($_SESSION['character_HealthPoints'] <= 0) {
                    echo 'Bot wins!';
                } else {
                    echo "Bot name: {$bots[$_SESSION['bot_Index']]['botName']}<br> HP: {$_SESSION['bot_HealthPoints']} <br> DMG: {$bots[$_SESSION['bot_Index']]['botDamage']}<br> Critical Chance: {$bots[$_SESSION['bot_Index']]['criticalChance']}";
                }
            }
        }
        ?>
    </div>

    <div class="buttonSubmit">
        <form action="" method="post"> 
            <!-- <input type="submit" name="attack" value="Attack"> 
            <input type="submit" name="exit" value="Exit">  -->
            <button type="submit" name="attack" value="Attack">Attack</button>
            <button type="submit" name="exit" value="Exit">Exit</button>
        </form>
    </div>
</body>
</html>
<?php
class randomChar
{
    private $bots = [
        [
            'botOrder' => 0,
            'botName' => 'Hanabi',
            'botHealthPoints' => 1000,
            'botDamage' => 500,
            'criticalChance' => 20,
        ],
        [
            'botOrder' => 1,
            'botName' => 'Pharsa',
            'botHealthPoints' => 500,
            'botDamage' => 100,
            'criticalChance' => 30,
        ],
        [
            'botOrder' => 2,
            'botName' => 'Karina',
            'botHealthPoints' => 300,
            'botDamage' => 90,
            'criticalChance' => 10,
        ],
        [
            'botOrder' => 3,
            'botName' => 'Lancelot',
            'botHealthPoints' => 500,
            'botDamage' => 20,
            'criticalChance' => 25,
        ],
        [
            'botOrder' => 4,
            'botName' => 'Nana',
            'botHealthPoints' => 500,
            'botDamage' => 40,
            'criticalChance' => 33,
        ],
        [
            'botOrder' => 5,
            'botName' => 'Estes',
            'botHealthPoints' => 300,
            'botDamage' => 50,
            'criticalChance' => 50,
        ],
        [
            'botOrder' => 6,
            'botName' => 'Miya',
            'botHealthPoints' => 300,
            'botDamage' => 20,
            'criticalChance' => 15,
        ],
        [
            'botOrder' => 7,
            'botName' => 'Change',
            'botHealthPoints' => 300,
            'botDamage' => 25,
            'criticalChance' => 14,
        ],
    ];
    private $character = [
        [
            'CharacterOrder' => 0,
            'CharacterName' => 'Moana',
            'CharacterHealthPoints' => 500,
            'CharacterDamage' => 200,
            'criticalChance' => 20,
        ],
        [
            'CharacterOrder' => 1,
            'CharacterName' => 'Barbie',
            'CharacterHealthPoints' => 500,
            'CharacterDamage' => 50,
            'criticalChance' => 30,
        ],
        [
            'CharacterOrder' => 2,
            'CharacterName' => 'Luisa',
            'CharacterHealthPoints' => 100,
            'CharacterDamage' => 20,
            'criticalChance' => 10,
        ],
        [
            'CharacterOrder' => 3,
            'CharacterName' => 'Elsa',
            'CharacterHealthPoints' => 300,
            'CharacterDamage' => 100,
            'criticalChance' => 25,
        ],
        [
            'CharacterOrder' => 4,
            'CharacterName' => 'Merida',
            'CharacterHealthPoints' => 800,
            'CharacterDamage' => 150,
            'criticalChance' => 15,
        ],
        [
            'CharacterOrder' => 5,
            'CharacterName' => 'Olaf',
            'CharacterHealthPoints' => 700,
            'CharacterDamage' => 90,
            'criticalChance' => 33,
        ],
        [
            'CharacterOrder' => 6,
            'CharacterName' => 'Pocahontas',
            'CharacterHealthPoints' => 300,
            'CharacterDamage' => 60,
            'criticalChance' => 14,
        ],
        [
            'CharacterOrder' => 7,
            'CharacterName' => 'Mulan',
            'CharacterHealthPoints' => 900,
            'CharacterDamage' => 250,
            'criticalChance' => 50,
        ],
    ];

    public function getBotDetails()
    {
        return $this->bots;
    }
    public function getCharDetails()
    {
        return $this->character;
    }
}
?>

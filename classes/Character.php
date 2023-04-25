<?php

// use Character as GlobalCharacter;

/**
 * Character class
 */
class Character
{

    // |------------CONSTRUCTOR------------|


    /**
     * __construct create a new character
     * @param string $name
     * @param integer $experience
     */
    public function __construct(string $name, int $experience = self::NOVICE)
    {
        $this->name = $name;
        $this->experience = $experience;
    }


    // |------------END CONSTRUCTOR------------|
    // |------------CONSTANTS------------|


    /**
     * Level 1 of experience
     * @var integer
     */

    const NOVICE = 1;

    /**
     * Level 2 of experience
     * @var integer
     */

    const MEDIUM = 2;

    /**
     * Level 3 of experience
     * @var integer
     */

    const EXPERT = 3;


    // |------------END CONSTANTS------------|
    // |------------PROPERTIES------------|


    /**
     * The name of the character
     * @var string|null
     */

    private ?string $name = null;

    /**
     * The health of the character
     * @var int
     */

    private int $health = 100;

    /**
     * The experience of the character
     * @var int
     */

    private int $experience = self::NOVICE;


    // |------------END PROPERTIES------------|
    // |------------GETTERS------------|


    /**
     * Get the value of the name of the character
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }


    /**
     * Get the value of the health of the character
     * @return int
     */
    public function getHealth(): int
    {
        return $this->health;
    }


    /**
     * Get the value of the experience of the character
     * @return int
     */
    public function getExperience(): int
    {
        return $this->experience;
    }


    // |------------END GETTERS------------|
    // |------------SETTERS------------|


    /**
     * Set the value of character's health
     * @param int $health 
     * @return self
     */
    public function setHealth(?int $health): self
    {
        $this->health = $health;
        return $this;
    }


    // |------------END SETTERS------------|
    // |------------METHODS------------|

    /**
     * Set the value of character's experience if he levels up
     * @param Character $HeroDefending
     * @return self
     */
    public function experienceUp(Character $HeroDefending): self
    {
        if ($HeroDefending->getHealth() <= 0) {
            switch ($this->experience) {
                case self::NOVICE:
                    $this->experience = self::MEDIUM;
                    break;

                case self::MEDIUM:
                    $this->experience = self::EXPERT;
                    break;

                default:
                    break;
            }
            echo "{$this->name} is now level {$this->getExperience()}";
        }
        return $this;

    }



    /**
     * Before a good fight, a character must say hello to the opponent
     * @param Character $HeroDefending
     * @return self
     */
    public function sayHello(Character $HeroDefending): self
    {
        echo "Hi {$HeroDefending->name} ! I'm {$this->name} <br>";
        return $this;

    }


    /**
     * When a character attacks another character, the defender loses health
     * @param Character $HeroDefending
     * @param int $numberOfAttack
     * @return self
     */
    public function doAttack(Character $HeroDefending, int $numberOfAttack = 1): self
    {
        $attack = $this->experience * 10 * $numberOfAttack;
        $HeroDefending->setHealth($HeroDefending->getHealth() - $attack);
        echo "
        {$this->name} : 'Oh {$HeroDefending->name}. Who needs superpowers?'<br> 🔥 -{$attack} <br>";
        return $this;
    }


    /**
     * When a character super attacks another character, he loses twice the amount of health
     * @return self
     */
    public function doSuperAttack(Character $HeroDefending): self
    {
        $this->doAttack($HeroDefending, 2);
        echo "{$this->name} : ' Is that all you've got, {$HeroDefending->name}? '";
        return $this;
    }


    /**
     * When a character sneaky attacks another character, he loses all his health if he has less than 50
     * @return self
     */
    public function doSneakyAttack(Character $HeroDefending): self
    {
        $HeroDefending->getHealth() < 50 ?
            $HeroDefending->setHealth(0) :
            $HeroDefending->setHealth($HeroDefending->getHealth());
        echo "{$this->name} : ' Every man for himself {$HeroDefending->name}, sneaky attack !' ";
        return $this;
    }


    /**
     * When a character heals himself, he gains 10 health points and cry
     * @return self
     */
    public function doHeal(): self
    {
        $this->setHealth($this->getHealth() + 10);
        echo "{$this->name} : Phew, that was a close one<br>
        {$this->name} : 'I'm gonna need a new pair of pants <br> 💊 +10'";
        return $this;
    }


    /**
     * Get all the stats of the character and return them in an array
     * @return array
     */
    public function getStats(): array
    {
        return [
            'name' => $this->name,
            'health' => $this->health,
            'experience' => $this->experience
        ];
    }

}
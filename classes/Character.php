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
    public function __construct($name, $experience)
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

    private int $experience = 0;


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


    /**
     * Set the value of character's experience if he levels up
     * @return string
     */
    public function setExperienceUp(): string
    {
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
        return "{$this->name} is now level {$this->getExperience()}";
    }


    // |------------END SETTERS------------|
    // |------------METHODS------------|


    /**
     * Before a good fight, a character must say hello to the opponent
     * @param Character $HeroDefending
     * @return string
     */
    public function sayHello(Character $HeroDefending): string
    {
        return "Hi {$HeroDefending->name} ! I'm {$this->name} <br>";
    }


    /**
     * When a character attacks another character, the defender loses health
     * @param Character $HeroDefending
     * @param int $numberOfAttack
     * @return string
     */
    public function doAttack(Character $HeroDefending, int $numberOfAttack = 1): string
    {
        $attack = $this->experience * 10 * $numberOfAttack;
        $HeroDefending->setHealth($HeroDefending->getHealth() - $attack);
        return "I'm {$this->name}, attacking {$HeroDefending->name}";
    }


    /**
     * When a character super attacks another character, he loses twice the amount of health
     * @return string
     */
    public function doSuperAttack(Character $HeroDefending): string
    {
        $this->doAttack($HeroDefending, 2);
        return "I'm {$this->name}, super attacking {$HeroDefending->name}";
    }


    /**
     * When a character sneaky attacks another character, he loses all his health if he has less than 50
     * @return string
     */
    public function doSneakyAttack(Character $HeroDefending): string
    {
        $HeroDefending->getHealth() < 50 ?
            $HeroDefending->setHealth(0) :
            $HeroDefending->setHealth($HeroDefending->getHealth());
        return "I'm {$this->name} and sneaky attacking {$HeroDefending->name} ";
    }


    /**
     * When a character heals himself, he gains 10 health points and cry
     * @return string
     */
    public function doHeal(): string
    {
        $this->setHealth($this->getHealth() + 10);
        return "I'm {$this->name} my health is {$this->getHealth()}";
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
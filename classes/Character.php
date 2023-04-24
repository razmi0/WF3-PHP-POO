<?php


/**
 * Summary of Character
 */
class Character
{
    /**
     * Summary of __construct
     * @param mixed $name
     * @param mixed $health
     * @param mixed $experience
     */
    public function __construct($name, $health, $experience)
    {
        $this->health = $health;
        $this->name = $name;
        $this->experience = $experience;
    }
    /**
     * Summary of getStats
     * @return string
     */
    public function getStats(): string
    {
        return "{$this->name} | {$this->health} | {$this->experience}";
    }
    /**
     * @var integer
     */
    const NOVICE = 1;
    /**
     * @var integer
     */
    const MEDIUM = 2;
    /**
     * @var integer
     */
    const EXPERT = 3;

    /**
     * Summary of name
     * @var string|null
     */
    private ?string $name = null;

    /**
     * Summary of health
     * @var int
     */
    private int $health = 100;

    /**
     * Summary of experience
     * @var int
     */
    private int $experience = 0;

    /**
     * Summary of sayHello
     * @param mixed $name
     * @return string
     */
    public function sayHello(Character $HeroDefending): string
    {
        return "Hi {$HeroDefending->name} ! I'm {$this->name} <br>";
    }
    /**
     * Summary of doAttack
     * @param mixed $attack
     * @return string
     */
    public function doAttack(Character $HeroDefending): string
    {
        $attack = $this->experience * 10;
        $HeroDefending->setHealth($HeroDefending->getHealth() - $attack);
        return "I'm {$this->name}, attacking {$HeroDefending->name} for {$attack}";
    }
    /**
     * Summary of doSuperAttack
     * @return string
     */
    public function doSuperAttack(Character $HeroDefending): string
    {
        $attack = $this->experience * 20;
        $HeroDefending->setHealth($HeroDefending->getHealth() - $attack);
        return "I'm {$this->name}, super attacking {$HeroDefending->name} for {$attack}";
    }
    /**
     * Summary of doSneakyAttack
     * @return string
     */
    public function doSneakyAttack(Character $HeroDefending): string
    {
        $HeroDefending->getHealth() < 50 ? $HeroDefending->setHealth(0) : $HeroDefending->setHealth($HeroDefending->getHealth());
        return "I'm {$this->name} and sneaky attacking {$HeroDefending->name} ";
    }
    /**
     * Summary of doHeal
     * @return string
     */
    public function doHeal(): string
    {
        $this->setHealth($this->getHealth() + 10);
        return "I'm {$this->name} my health is {$this->getHealth()}";
    }

    /**
     * @param int|null $health 
     * @return self
     */
    public function setHealth(?int $health): self
    {
        $this->health = $health;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getHealth(): int
    {
        return $this->health;
    }

    /**
     * @return int|null
     */
    public function getExperience(): int
    {
        return $this->experience;
    }

    /**
     * @param int|null $experience 
     * @return self
     */
    public function setExperience(int $experience): self
    {
        $this->experience = $experience;
        return $this;
    }

}
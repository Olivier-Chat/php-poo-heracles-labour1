<?php


class Fighter
{
    const MAX_LIFE = 100;

    private string $name;
    private int $strength;
    private int $dexterity;
    private int $damage;
    private int $life = self::MAX_LIFE;

    public function __construct(string $name,int $strength, int $dexterity)
    {
        $this->setName($name);
        $this->setStrength($strength);
        $this->setDexterity($dexterity);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Fighter
    {
        $this->name = $name;
        return $this;
    }


    public function getStrength(): int
    {
        return $this->strength;
    }

    public function setStrength(int $strength): Fighter
    {
        $this->strength = $strength;
        return $this;
    }

    public function getDexterity(): int
    {
        return $this->dexterity;
    }

    public function setDexterity(int $dexterity): Fighter
    {
        $this->dexterity = $dexterity;
        return $this;
    }

    public function getLife(): int
    {
        return $this->life;
    }

    public function setLife(int $life): Fighter
    {
        $this->life = $life;
        return $this;
    }

    public function getDamage(): int
    {
        return $this->damage;
    }


    public function setDamage(int $damage): Fighter
    {
        $this->damage = $damage;
        return $this;
    }

    public function fight(Fighter $fighter):void
    {
        $this->setDamage(rand(1,$this->strength));
        $fighter-> defend($this->damage);
    }
    public function defend(int $damage){
        if ($damage > $this->dexterity){
            $damage -= $this->dexterity;
        } else{
            $damage = 0;
        }
        $this->life -= $damage;
        if ($this->life <0) $this->life = 0;

    }




}
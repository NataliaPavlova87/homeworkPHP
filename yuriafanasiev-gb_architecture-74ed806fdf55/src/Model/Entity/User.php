<?php

declare(strict_types = 1);

namespace Model\Entity;

class User implements IObservable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $passwordHash;

    private $comment;

    /**
     * @var Role
     */
    private $role;

    /**
     * @param int $id
     * @param string $name
     * @param string $login
     * @param string $password
     * @param Role $role
     */
    public function __construct(int $id, string $name, string $login, string $password, Role $role)
    {
        $this->id = $id;
        $this->name = $name;
        $this->login = $login;
        $this->passwordHash = $password;
        $this->role = $role;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getPasswordHash(): string
    {
        return $this->passwordHash;
    }

    /**
     * @return Role
     */
    public function getRole(): Role
    {
        return $this->role;
    }


    public function getComment()
    {
        return $this->comment;
    }
    public function setText(string $comment)

    {
        $this->comment = $comment;
    }

    public function addObserver(IObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(IObserver $observer)
    {
        foreach ($this->observers as &$obsrv) {
            if ($obsrv === $observer) {

                 unset($obsrv);
                }
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {

            $observer->handle($this->comment);
        }
    }
}

<?php

namespace GeekBrains\Blog;

use GeekBrains\Person\Name;

class User
{
  public function __construct(
    private int $id,
    private Name $username,
    private string $login,
  ) {
  }

  public function setId(int $id)
  {
    $this->id = $id;
  }
  public function getId(): int
  {
    return $this->id;
  }
  public function setUsername(Name $username)
  {
    $this->username = $username;
  }
  public function getUsername(): Name
  {
    return $this->username;
  }
  public function getLogin(): string
  {
    return $this->login;
  }
  public function setLogin(string $login)
  {
    $this->login = $login;
  }
  public function __toString(): string
  {
    return "Юзер $this->id с именем $this->username и логином $this->login." . PHP_EOL;
  }
}

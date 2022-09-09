<?php

namespace GeekBrains\Blog\Repositories;

use GeekBrains\Blog\User;
use GeekBrains\Blog\Exseptions\UserNotFoundExseption;

class InMemoryUsersRepo
{
  private array $users = [];

  public function getUsers(int $id)
  {
    foreach ($this->users as $user) {
      if ($user->getId() === $id) {
        return $user;
      }
    }
    throw new UserNotFoundExseption("user not found: $id");
  }

  public function setUsers(User $user)
  {
    $this->users[] = $user;
  }
}

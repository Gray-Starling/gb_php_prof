<?php

namespace GeekBrains\Person;

class Person
{
  public function __construct(
    private Name $name,
    private \DateTimeImmutable $registerdOn,
  ) {
  }

  public function __toString(): string
  {
    return $this->name . ' (на сайте с ' . $this->registerdOn->format('Y-m-d') . ')';
  }
}

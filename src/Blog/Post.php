<?php

namespace GeekBrains\Blog;

use GeekBrains\Person\Person;

class Post
{
  public function __construct(
    private int $id,
    private User $author,
    private string $postTitle,
    private string $postText,
  ) {
  }
  public function getId()
  {
    return $this->id;
  }
  public function __toString()
  {
    return $this->author->getUsername() . " создал(а) пост с Заголовком " . "\"" . $this->postTitle . "\"" . " и содержимым: " . PHP_EOL . $this->postText;
  }
}

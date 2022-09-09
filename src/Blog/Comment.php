<?php

namespace GeekBrains\Blog;

class Comment
{
  public function __construct(
    private int $id,
    private User $author,
    private Post $post,
    private string $commentText,
  ) {
  }
  public function __toString()
  {
    return "Коментарий " . $this->id . " написанный " . $this->author->getUsername() . "(" . $this->author->getLogin() . ")" . " к посту " . $this->post->getId() . ":" . PHP_EOL . $this->commentText;
  }
}

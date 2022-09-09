<?php

use GeekBrains\Blog\{Comment, Post, User};
use GeekBrains\Person\{Name, Person};
use Faker\Factory;
use GeekBrains\Blog\Exceptions\UserNotFoundException;
use GeekBrains\Blog\Repositories\InMemoryUsersRepo;

//*--- cвой автозагрузчик
// spl_autoload_register("load");

//*--- composer
include __DIR__ . '/vendor/autoload.php';
include_once './facker.php';


//*--- Реализация своего автозагрузчика
// function load($className)
// {
//   $file =  $className . '.php';
//   $file = str_replace("\\", DIRECTORY_SEPARATOR, $file);
//   $file = str_replace("GeekBrains", "src", $file);

//   if (file_exists($file)) {
//     include $file;
//   }
// }

//*--- без использования faker
// $name = new Name('Иван', 'Иванов');
// $postText = "random text";

//*--- с использованием faker
// $name = fakerRandomName();
// $name2 = fakerRandomName();

// $user = new User(1, $name, "admin");
// $user2 = new User(2, $name2, "moderator");
// $postText = $faker->realText(rand(100, 200));

// $registerdOn = new DateTimeImmutable();
// $person  = new Person($name, $registerdOn);
// $post = new Post(1, $user, "Коментарий 1", $postText);

// $userRepo =  new InMemoryUsersRepo();
// $userRepo->setUsers($user);
// $userRepo->setUsers($user2);
// try {
//   echo $userRepo->getUsers(1);
//   echo $userRepo->getUsers(2);
// } catch (UserNotFoundException | Exception $e) {
//   echo $e->getMessage();
// }

//* ----------- Код по проекту

switch ($argv[1]) {
  case 'user':
    $name = fakerRandomName();
    $user = new User(1, $name, "user");
    echo $user->getUsername();
    break;
  case 'post':
    $name = fakerRandomName();
    $user = new User(1, $name, "user");
    $postTitle = $faker->jobTitle;
    $postText = $faker->realText(rand(100, 200));
    $post = new Post(1, $user, $postTitle, $postText);
    echo $post;
    break;
  case 'comment':
    $name = fakerRandomName();
    $name2 = fakerRandomName();
    $user = new User(1, $name, "user");
    $user2 = new User(1, $name2, "moder");
    $postTitle = $faker->jobTitle;
    $postText = $faker->realText(rand(100, 200));
    $post = new Post(1, $user, $postTitle, $postText);
    $comment =  new Comment(1, $user2, $post, "Прочтите правила написания поста");
    echo $comment;
    break;

  default:
    echo "Такой аргумент не используется";
    break;
}

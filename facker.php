<?php

use GeekBrains\Person\Name;

$faker = Faker\Factory::create('ru_RU');

function fakerRandomName()
{
  global $faker;
  $firstNameFemail = $faker->firstName($gender = 'female');
  $lastNameFemail = $faker->lastName($gender = 'female');
  $firstNameMail = $faker->firstName($gender = 'male');
  $lastNameMail = $faker->lastName($gender = 'male');
  $nameFemail  = new Name($firstNameFemail, $lastNameFemail);
  $nameMail = new Name($firstNameMail, $lastNameMail);
  $names =  [$nameFemail, $nameMail];
  return $names[array_rand($names, 1)];
}

function fakerRandomTitle()
{
  global $faker;

  return $faker->jobTitle;
}

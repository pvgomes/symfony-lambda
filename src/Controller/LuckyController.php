<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{

  public function number()
  {
    $number = random_int(0, 100);
    return new Response(
      sprintf('<h1>Lucky number: %s </h1>', $number)
    );
  }
}

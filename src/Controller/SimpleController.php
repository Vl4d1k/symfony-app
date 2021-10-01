<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class SimpleController
{
    #[Route('/api/number/{max}')]
    public function number(int $max): JsonResponse
    {
        $number = random_int(0, $max);
        return new JsonResponse(['Lucky number' => $number, 'success' => false]);
    }

    #[Route('/api/double/{num}')]
    public function double(int $num): JsonResponse
    {
        $result =  $num * $num;
        return new JsonResponse(['result' => $result]);
    }

    #[Route('/api/sqrt/{num}')]
    public function sqrt(int $num): JsonResponse
    {
        return new JsonResponse(['result' => sqrt($num)]);
    }
}
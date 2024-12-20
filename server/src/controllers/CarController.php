<?php

namespace App\Controllers;

use Jarvis\Framework\Http\JsonController;
use Jarvis\Framework\Http\Request;
use Jarvis\Framework\Http\Response;
use App\Repositories\CarRepository;

class CarController extends JsonController
{
    private CarRepository $repository;

    public function __construct(
        Request $request,
        Response $response,
        CarRepository $repository
    ) {
        $this->repository = $repository;
        parent::__construct($request, $response);
    }

    public function getAll(): array
    {
        return $this->repository->findAll();
    }
}

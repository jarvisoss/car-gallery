<?php

use Jarvis\Framework\Kernel\Kernel;
use Jarvis\Framework\Router\Route;
use App\Controllers\CarController;

# Load composer autoload
require_once __DIR__ . '/../vendor/autoload.php';

# Define route
Route::get('/', [CarController::class, 'getAll']);
Route::storage('/images/{path}', __DIR__ . '/../src/images/');

# Build application and run
return Kernel::build(function () {
    /** @var Kernel $this */
    $this
        ->config(__DIR__ . '/../')
        ->doctrine('pdo_mysql', [__DIR__ . '/../src/'])
        ->cors(['http://localhost:3000']);
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get("/", [ProductController::class, "index"]);
Route::get("/product/{id}", [ProductController::class, "show"]);

Route::get("/products/create", [ProductController::class, "create"])->name("products.create");
/*Voor de verwerking van het formulier om een product toe te voegen, "POST" afhandelen*/
Route::post("product-form", [ProductController::class, "store"]);
<?php

Route::get("/placesIndex", "ControllerPlace@index") -> name("place.index");
Route::get("/placeCreate", "ControllerPlace@create") -> name("place.create");

Route::post("/", "ControllerPlace@store") -> name("place.store");

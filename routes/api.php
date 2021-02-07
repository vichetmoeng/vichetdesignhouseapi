<?php

Route::get('/', function () {
    return response()->json("Hello World from API");
});

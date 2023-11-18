<?php

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\MemberResource;

Route::get('test/{id}', function ($id) {
    // $m = Member::with('father', 'mother', 'children')->find(3);
    $m = Member::with('childrenAsDad', 'childrenAsMom', 'father', 'mother')->find($id);

    return new MemberResource($m);
});

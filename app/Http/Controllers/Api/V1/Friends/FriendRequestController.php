<?php

namespace App\Http\Controllers\Api\V1\Friends;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFriendRequestRequest;
use App\Http\Requests\UpdateFriendRequestRequest;
use App\Models\FriendRequest;

class FriendRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFriendRequestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FriendRequest $friendRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FriendRequest $friendRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFriendRequestRequest $request, FriendRequest $friendRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FriendRequest $friendRequest)
    {
        //
    }

    public function send()
    {
        dd("ssdd");
    }
}

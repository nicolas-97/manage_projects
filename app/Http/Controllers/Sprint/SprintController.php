<?php

namespace App\Http\Controllers\Sprint;

use App\Http\Controllers\Controller;
use App\Models\Backlog;
use App\Models\Sprint;
use Illuminate\Http\Request;

class SprintController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sprint = Sprint::created($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sprint $sprint)
    {
        return [
            $sprint,
            $sprint->tasks
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sprint $sprint)
    {
        $sprint->update($request->all());
        return [
            $sprint,
            $sprint->tasks
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sprint $sprint)
    {
        $sprint->delete();
    }
}

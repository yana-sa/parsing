<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImportCSVRequest;
use App\Models\Cast;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class CastController extends Controller
{

    public function store()
    {
        $file = Storage::disk('public')->get('IMDb names test.csv');

        $rows = explode(PHP_EOL, $file);
        $array = array();
        foreach ($rows as $row) {
            $array[] = str_getcsv($row);
        }
        print_r($array);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cast  $cast
     * @return Response
     */
    public function show(Cast $cast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cast  $cast
     * @return Response
     */
    public function edit(Cast $cast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cast  $cast
     * @return Response
     */
    public function update(Request $request, Cast $cast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cast  $cast
     * @return Response
     */
    public function destroy(Cast $cast)
    {
        //
    }
}

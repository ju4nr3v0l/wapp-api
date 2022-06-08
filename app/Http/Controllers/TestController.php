<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAllTests()
    {
        return response()->json(Test::all());
    }

    public function showOneTest($id)
    {
        return response()->json(Test::find($id));
    }

    public function create(Request $request)
    {
        $test = Test::create($request->all());

        return response()->json($test, 201);
    }

    public function update($id, Request $request)
    {
        $test = Test::findOrFail($id);
        $test->update($request->all());

        return response()->json($test, 200);
    }

    public function delete($id)
    {
        Test::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}

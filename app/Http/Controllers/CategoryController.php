<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = category::all();
        return response()->json($data);
    }
    public function store(Request $request)
    {
        $data = category::create([
            'nama_category' => $request->nama_category
        ]);
        return response()->json($data);
    }
    public function show(category $category)
    {
        return response()->json($category);
    }
    public function update(Request $request, category $category)
    {
       $category->update([
        'nama_category' => $request->nama_category
       ]);
       return response()->json($category);
    }
    public function destroy(category $category)
    {
        $category->delete($category);
        return response()->json('berhasil hapus');
    }
}

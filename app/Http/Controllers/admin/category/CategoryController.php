<?php

namespace App\Http\Controllers\admin\category;

use App\Core\category\CategoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $categoryInterface;
    public function __construct(CategoryInterface $categoryInterface){
        $this->categoryInterface = $categoryInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.index', [
            "categories" => $this->categoryInterface->fetchAllCategories("DESC")
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string|max:100",
            "status" => "boolean"
        ]);
        $data = $request->only("name","status");
        if($this->categoryInterface->storeCat($data)){
            return redirect()->route("category-mamages.index")->with("msg", "Category created successfully..");
        }else{
            return back()->with("msg", "Some error occur..");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        return view('admin.category.edit', [
            'category' => $this->categoryInterface->getSingleCate($slug)
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $request->validate([
            "name" => "required|string|max:100",
            "status" => "boolean"
        ]);
        $data = $request->only("name","status");
        if($this->categoryInterface->updateCat($data, $slug)){
            return redirect()->route("category-mamages.index")->with("msg", "Category has been updated successfully..");
        }else{
            return back()->with("msg", "Some error occur..");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        if($this->categoryInterface->deleteCat($slug)){
            return redirect()->route("category-mamages.index")->with("msg", "Category has been deleted successfully with all products..");
        }else{
            return back()->with("msg", "Some error occur..");
        }
    }
}

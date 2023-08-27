<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Course;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of( Category::query())->addIndexColumn()->make(true);
        }

        return view('dashboard.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        // $category = Category::saveCategory($request);

        $category = new Category;
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->keywords = $request->keywords;
	    $category->save();
        if ($category){
            return redirect()->route('categories.index')->with(['status'=> 200, 'message' => 'Category added!']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category) {

        $categories = Category::all();

        $checked_categories = [$category->id];
        $courses = Course::where('category_id',$category->id)->where('status','3')->get();
        return view('cource',compact('courses','categories','checked_categories'));

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->keywords = $request->keywords;
	    $category->update();

        if ($category){
            return redirect()->route('categories.index')->with(['status'=> 200, 'message' => 'Update Successfully!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {
            $category->delete();
            return response()->json(['status' => 'success', 'message' => 'Deleted successfully!'], 200);
        } catch (\Throwable $e) {
            return response()->json(['status' => 'error', 'message' => 'This Category have courses.']);
        }

    }
}
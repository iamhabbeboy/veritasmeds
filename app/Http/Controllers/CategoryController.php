<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * @var mixed
     */
    protected $category;
    /**
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    /**
     * @return mixed
     */
    public function index()
    {
        return $this->category->all();
    }

    public function store(Request $request)
    {
        $response = $this->category->firstOrCreate(['title' => $request->title], $request->all());
        return response()->json($response);
    }

    public function page()
    {
        $categorys = $this->category->all();
        return view('category', compact('categorys'));
    }

    public function single($id = null)
    {
        if ($id === null) {
            return redirect('/');
        }

        $products = Product::where('category_id', $id)->get();
        $categorys = Category::all();
        return view('product', compact('products', 'categorys'));
    }
}

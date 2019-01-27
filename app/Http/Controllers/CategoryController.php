<?php

namespace App\Http\Controllers;

use Session;
use App\Product;
use App\Picture;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * @var mixed
     */
    protected $category;
    /**
     * product model
     *
     * @var [object]
     */
    protected $product;
    /**
     * @param Category $category
     */
    public function __construct(Category $category, Product $product)
    {
        $this->category = $category;
        $this->product = $product;
    }
    /**
     * @return mixed
     */
    public function index()
    {
        $response = $this->category->loadCategory()->get();
        return response()->json($response);
    }

    public function store(Request $request)
    {
        $response = $this->category->firstOrCreate(['title' => $request->title], $request->all());
        if (session('drugimages')) {

            $pictures = session('drugimages')[0];
            $lastID = $response->id;
            $store_hash = [
                'product_id' => $lastID,
                'type' => 'category',
                'filepath' => array_get($pictures, 'filepath'),
            ];
            Picture::create($store_hash);
        }
        session::forget('drugimages');

        return response()->json($response);
    }

    public function page()
    {
        $categorys = $this->category->loadCategory()->get()->toArray();
        return view('category', compact('categorys'));
    }

    public function single($id = null)
    {
        if ($id === null) {
            return redirect('/');
        }

        $products = $this->product->loadProducts(['category_id' => $id])
            ->get()->toArray();
        $categorys = Category::all();
        return view('product', compact('products', 'categorys'));
    }
}

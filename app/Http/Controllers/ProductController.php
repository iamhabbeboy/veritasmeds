<?php

namespace App\Http\Controllers;

use App\Category;
use App\Picture;
use App\Product;
use App\Review;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    /**
     * @var mixed
     */
    protected $product;
    protected $reviews;
    /**
     * @param Product $product
     */
    public function __construct(Product $product, Review $review)
    {
        $this->product = $product;
        $this->reviews = $review;
    }
    public function index()
    {
        $response = $this->product->loadProducts([]);
        return response()->json($response->get()->toArray());
    }
    /**
     * @param Request $request
     */
    public function store(Request $request)
    {
        // Log::info(Session::get('drugimages'));
        $response = $this->product->firstOrCreate(['title' => $request->title], $request->all());
        if (session('drugimages')) {
            $pictures = session('drugimages');
            $drugimage = [];
            $lastID = $response->id;
            foreach ($pictures as $key => $picture) {
                array_push($drugimage, [
                    'product_id' => $lastID,
                    'type' => 'product',
                    'filepath' => array_get($picture, 'filepath'),
                ]);
            }
            Picture::insert($drugimage);
        }
        session::forget('drugimages');
        return response()->json($response);
    }
    /**
     * @param Request $request
     */
    public function update(Request $request)
    {
        $find = $this->product->find($request->id);
        $find->fill($request->all());
        return response()->json($request->all());
    }
    /**
     * @param Category $category
     */
    public function page(Category $category)
    {
        $products = $this->product->loadProducts([])
            ->get()->toArray();
        $categorys = $category::all();
        return view('product', compact('products', 'categorys'));
    }
    public function single($id = null)
    {
        if ($id === null) {
            return redirect(route('homepage'));
        }
        $product = $this->product->loadProducts(['id' => $id])
            ->first()->toArray();
        $reviews = $this->reviews->loadReview($id)->get();
        return view('single-product', compact('product', 'reviews'));
    }
}

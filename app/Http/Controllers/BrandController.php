<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * @var mixed
     */
    protected $brand;
    /**
     * @param Brand $brand
     */
    public function __construct(Brand $brand)
    {
        $this->brand = $brand;
    }

    public function index()
    {
        return $this->brand->all();
    }
    public function store(Request $request)
    {
        sleep(3);
        $response = $this->brand->firstOrCreate(['title' => $request->title], $request->all());
        return response()->json($response);
    }
}

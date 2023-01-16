<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    protected $category;
    protected $product;
    public function __construct(CategoryRepository $category,ProductRepository $product)
    {
        $this->category = $category;
        $this->product = $product;
    }
    public function productForm()
    {
        $categories = $this->category->all()->get();
        return view('admin.products.form', compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
        ]);
        if ($validator->fails()) {
//            return response()->json(['errors' => $validator->errors()],422);
            return back()->withInput(['errors' => $validator->errors()],422);

        }
        try {
            $this->product->create($request);
            Toastr::success(__('Created Successfully'));
            return redirect()->route('categories');
        } catch (\Exception $e) {
            dd($e);
            Toastr::error(__('Something went wrong, please try again'));
            return back()->withInput();
        }

    }
}

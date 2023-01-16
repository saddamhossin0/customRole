<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(CategoryRepository $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $categories =  $this->category->paginate();
        return view('admin.category.index',compact('categories'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()],422);
        }
        try {
            $this->category->create($request->all());
            Toastr::success(__('Created Successfully'));
            return redirect()->route('categories');
        } catch (\Exception $e) {
            Toastr::error(__('Something went wrong, please try again'));
            return back()->withInput();
        }

    }
    public function edit($id)
    {
        try {
            $category = $this->category->find($id);
            return view('admin.category.update',compact('category'));
        } catch (\Exception $e) {
            Toastr::error(__('Something went wrong, please try again'));
            return back()->withInput();
        }
    }
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()],422);
        }
        try {
            $this->category->update($request->all());
            Toastr::success(__('Created Successfully'));
            return redirect()->route('categories');
        } catch (\Exception $e) {
            Toastr::error(__('Something went wrong, please try again'));
            return back()->withInput();
        }

    }

    public function delete($id)
    {
        try {
            $this->category->delete($id);
            Toastr::success(__('deleted Successfully'));
            return redirect()->route('categories');
        } catch (\Exception $e) {
            Toastr::error(__('Something went wrong, please try again'));
            return back()->withInput();
        }
    }
}

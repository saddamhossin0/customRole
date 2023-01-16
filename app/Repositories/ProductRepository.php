<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\Product;
use App\Traits\ImageTrait;

class ProductRepository
{
    use ImageTrait;

    public function all()
    {
        return Product::latest();
    }

    public function paginate()
    {
        return $this->all()->paginate(5);
    }

    public function create($request)
    {
        $product = new Product();
        $image     = $this->saveFile($request->image);
        if ($image):
            $product->image     = $image;
        else:
            $product->image = [];
        endif;
        $gallery_image     = $this->saveGalleryFile($request->gallery_image);
        if ($gallery_image):
            $product->gallery_image     = $gallery_image;
        else:
            $product->gallery_image = [];
        endif;
        $product->name = $request->name;
        $product->category_id = $request->category;
        $product->price = $request->price;
        $product->save();
        return true;
    }

    public function find($id)
    {
        return Category::find($id);
    }

    public function update($data)
    {
        $category = $this->find($data['id']);
        $category->title = $data['title'];
        $category->save();
        return true;
    }

    public function delete($id): int
    {
        return Category::destroy($id);
    }
}

<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{

    public function all()
    {
        return Category::latest();
    }

    public function paginate()
    {
        return $this->all()->paginate(5);
    }

    public function create($data)
    {
        return Category::create($data);
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

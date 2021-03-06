<?php namespace App\Http\Controllers;

use App\Category;

/**
 * @package App\Http\Controllers
 */
class CategoryController extends Controller
{

    /**
     * @param \App\Category $category
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Category $category)
    {
        $products = $category->productsEnabled()->with('media')->paginate(45);

        return view('category', compact('category', 'products'));
    }
}

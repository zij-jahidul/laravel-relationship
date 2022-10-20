<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function db()
    {
        $query = DB::table('products', 'p')
            ->join('categories AS cat', 'p.category_id', '=', 'cat.id')
            ->select('p.id', 'p.name', 'p.price', 'p.category_id', 'cat.name as category_name');

        if (request()->s) {
            $query->where('p.name', 'LIKE', '%' . request()->s . '%');
        }

        $products = $query->paginate(10);

        //products loop
        foreach ($products as $product) {
            $product->tags = DB::table('tags')
                ->select('tags.id', 'tags.name')
                ->join('product_tag', 'tags.id', '=', 'product_tag.tag_id')
                ->where('product_tag.product_id', $product->id)
                ->get();
        }
        return view('product.db', compact('products'));
    }
    public function index()
    {
        $products = DB::table('products')->get();
        return view('product.index', compact('products'));
    }

    public function category($id)
    {
        $category = DB::table('categories')->where('id', $id);
        return view('category.index', compact('category'));
    }

    public function tag($id)
    {
        $tag = DB::table('tags')->where('id', $id);
        // return $tag;
        return view('tag.index', compact('tag'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('product.create', compact('categories', 'tags'));
    }



    public function store(Request $request)
    {
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        if ($request->tags) {
            $product->tags()->attach($request->tags);
            // foreach ($request->tags as $tag_id) {
            //     $product->tags()->attach($tag_id);
            // }
        }

        // Session a success/error
        // return back();
        session()->flash('success', 'Product created successfully.');
        return redirect()->route('home');
    }
}

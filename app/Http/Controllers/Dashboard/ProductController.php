<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $category = Category::findOrFail($id);
        $products = $category->products()->paginate(25);
        return view('dashboard.products.products', compact('products', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product, $id)
    {
        $category = Category::findOrFail($id);
        return view('dashboard.products.create', compact('category', 'product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'description' => 'required|string'
        ]);
        $category = Category::findOrFail($id);
        $category->products()->create($request->all());
        flash()->success('done');
        return redirect()->route('categories.products.index', [$category->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($category_id, $id)
    {
        $category = Category::find($category_id);
        if ($category) {
            $product = $category->products()->where('id' ,$id)->first();
            if ($product) {
                $product->delete();
                return response()->json([
                    'status' => 1,
                    'msg' => 'تم الحذف بنجاح',
                    'id' => $product->id
                ]);
            }
            return response()->json([
                'status' => 0,
                'msg' => 'المنتج غير موجود'
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'msg' => 'التصنيف غير موجود'
            ]);
        }
    }
}

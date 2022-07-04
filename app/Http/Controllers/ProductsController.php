<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request=request();
        $item=$request->query('item');
        if($item == 'all'){
            $item=Product::all();
        }else{
            $item=Product::paginate($item);
        }
        return view('admin.product.index',[
            'product'=>$item
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.createProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'name'=>'required|String|min:3|max:20',
            'dec'=>'nullable|max:255',
            'price'=>'required|numeric',
            'image'=>'required|image'
        ]);
        if ($request->hasFile('image') && $request->file('image')->isValid()){//فحص هل هي صورة
            $file=$request->file('image');
            $fileNmae='product-image-'.date('d-m-y-h-i').'.'.$file->getClientOriginalExtension();//تحديد الية التسمية
            $image=$file->storeAs('images',$fileNmae,'public');
        }
        $data=array_merge($request->all(),[
            'image'=>$image
        ]);
/*
        $product=new Product();
        $product->name=$request->post('name');
        $product->dec=$request->post('dec');
        $product->price=$request->post('price');
        $product->save();
*/
        Product::create($data);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //if not found id return defult 404
        $product=Product::findOrFail($id);
        return view('admin.product.showProduct',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        if (!$product){
            return view('admin.layout.erore404');
        }
        return view('admin.product.editProduct',[
            'product'=>$product
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=Product::findOrFail($id);
/*
        $product->name=$request->post('name');
        $product->dec=$request->post('dec');
        $product->price=$request->post('price');
        $product->categores_id=$request->post('categores_id');

        $product->save;
*/
        $request->validate([
            'name'=>'required|String|min:3|max:20',
            'dec'=>'nullable|max:255',
            'price'=>'required|numeric',
            'image'=>'nullable|image'
        ]);
        if ($request->hasFile('image') && $request->file('image')->isValid()){//فحص هل هي صورة
            $file=$request->file('image');
            $fileNmae='product-image-'.date('d-m-y-h-i').'.'.$file->getClientOriginalExtension();//تحديد الية التسمية
            $image=$file->storeAs('images',$fileNmae,'public');
        }
        $data=array_merge($request->all(),[
            'image'=>$image
        ]);
        $product->update($data);
        return redirect()->route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index');

    }
}

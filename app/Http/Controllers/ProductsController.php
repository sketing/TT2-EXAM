<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product;
use DB;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$products = Post::all();
        //return $product = Product::where('title', 'item 2')->get();
        //$products = DB::select('SELECT * FROM products');
        //$products=Product::orderBy('title','desc')->take(1)->get();
        //$products=Product::orderBy('title','desc')->get();

        $products=Product::orderBy('created_at','asc')->paginate(9);
        return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'body'=>'required',
            'price'=>'required',
            'cover_image' => 'image|nullable|max:1999',
            'amount_in_storage'=>'required',
        ]);

        //Handle File Upload
        if($request->hasFile('cover_image'))
        {
            //Get fileName with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } 
        else 
        {
            $fileNameToStore = 'noimage.jpg';
        }
        //Create Product
        $product=new Product;
        $product->title = $request->input('title');
        $product->body = $request->input('body');
        $product->price = $request->input('price');
        $product->cover_image = $fileNameToStore;
        $product->amount_in_storage = $request->input('amount_in_storage');
        $product->user_id = Auth::user()->id;
        $product->save();

        return redirect('/products')->with('success', 'Product Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        //Check if correct user
        if(Auth::user()->id !== $product->user_id){
            return redirect('/products')->with('error', 'Unauthorized Page');
        }
        return view('products.edit')->with('product', $product);
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
        $this->validate($request, [
            'title'=>'required',
            'body'=>'required'
        ]);

        if($request->hasFile('cover_image'))
        {
            //Get fileName with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }

        //Create Product
        $product = Product::find($id);
        $product->title = $request->input('title');
        $product->body = $request->input('body');
        if($request->hasFile('cover_image'))
        {
            $product->cover_image = $fileNameToStore;
        }
        $product->save();

        return redirect('/products')->with('success', 'Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if(Auth::user()->id !== $product->user_id){
            return redirect('/products')->with('error', 'Unauthorized Page');
        }

        if($product->cover_image != 'noimage.jpg')
        {
            //Delete Image
            Storage::delete('public/cover_images/'.$product->cover_image);
        }

        $product->delete();
        //Check if correct user
        
        
        return redirect('/products')->with('success', 'Product Removed');
    }

}

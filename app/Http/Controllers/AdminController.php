<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use PhpParser\Node\Expr\FuncCall;

class AdminController extends Controller
{
    public function view_category(){
        $data = Category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request){
        $request->validate([
            'category' => 'required|string|max:255',
        ]);

        $category = new Category;
        $category->category_name = $request->category;
        $category->save();
        toastr()->timeout(2000)->addSuccess('Category added successfully');
        return redirect()->back();
    }

    public function delete_category($id){
        $data = Category::find($id);
        if ($data) {
            $data->delete();
            toastr()->timeout(2000)->addSuccess('Category deleted successfully');
        } else {
            toastr()->timeout(2000)->addError('Category not found');
        }
        return redirect()->back();
    }

    public function edit_category($id){
        $data = Category::find($id);
        return view('admin.edit_category',compact('data'));
    }

    public function update_category(Request $request,$id){
      $data = Category::find($id);  
      $data->category_name= $request->category;
      $data->save();
      return redirect('/view_category');
    }

    public function add_product(){

        $category = Category::all();
        return view('admin.add_product',compact('category')); 
    }
    

    public function upload_product(Request $request)
    {
        $data = new Product;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->qty;
        $data->category = $request->category;
        $image = $request->image;
        
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
           $request->image->move('products',$imagename);
           $data->image = $imagename;
        }
        $data->save();
        toastr()->timeout(2000)->addSuccess('Product added successfully');
        return redirect()->back();
    }

    public Function view_product(){
        $product = Product::all();
     

        return view('admin.view_product',compact('product'));
    }
}

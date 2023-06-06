<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
class ProductController extends Controller
{
    public function index(){
        $role=Auth::user()->role;

        if($role=='1'){
            return view('admin');
        }elseif($role=='2'){
            $product = Product::get();
            $feedback = FeedBack::get();
            return view('user', compact('product', 'feedback'));
            
        }
        else{
            return view('customer');
        }

      
    }

    public function add(){
        return view('add-products');
    }

    public function saveProducts(Request $request){
       
        $product_names = $request->product_names ;
        $product_price=$request->product_price;
        $discount_price=$request->discount_price;
        $discription=$request->discription;

        $product=new Product();
        $product->product_names=$product_names;
        $product->product_price=$product_price;
        $product->discount_price=$discount_price;
        $product->discription=$discription;
        $product->save();

        return redirect()->back()->with('success','product added successfully');
        
    }

    public function editProducts($id){
        $product = Product::where('id','=',$id)->first();
        return view('edit-products',compact('product'));
    }

    public function updateProduct(Request $request){

        $id=$request->id;
        $product_names = $request->product_names;
        $product_price=$request->product_price;
        $discount_price=$request->discount_price;
        $discription=$request->discription;

        Product::where('id','=',$id)->update([
            'product_names'=>$product_names,
            'product_price'=>$product_price,
            'discount_price'=>$discount_price,
            'discription'=>$discription
        ]);
        return redirect()->back()->with('success','Product Updated successfully');
    } 

    public function deleteProduct($id){
        Product::where('id','=',$id)->delete();
       
        return redirect()->back()->with('success','product deleted successfully');

    }
    public function deleteFeedback($id){
        
        FeedBack::where('id','=',$id)->delete();
        return redirect()->back()->with('success','product deleted successfully');

    }

}

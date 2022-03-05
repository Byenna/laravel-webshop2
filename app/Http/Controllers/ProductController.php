<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Multipic;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Image;
use Auth;


class productController extends Controller
{


    public function __construct(){
        $this->middleware('auth');
    }

    public function Allproduct(){

        $products = Product::latest()->paginate(5);
        return view('admin.product.index' , compact('products'));
    }


    public function Storeproduct(Request $request){
        $validated = $request->validate([
            'product_name' => 'required|unique:products|min:4',
            'product_image' => 'required|mimes:jpg,jpeg,png',
        ],
        [
            'product_name.required' => 'Please Input product Name',
            'product_image.min' => 'product Longer then 4 Characters',
        ]);

        $product_image = $request->file('product_image');

        // $name_gen = hexdec(uniqid());
        // $img_ext = strtolower($product_image->getClientOriginalExtension());
        // $img_name = $name_gen.'.'.$img_ext;
        // $up_location = 'image/product/';
        // $last_img =  $up_location.$img_name;
        // $product_image->move($up_location,$img_name);

        $name_gen = hexdec(uniqid()).'.'.$product_image->getClientOriginalExtension();
        Image::make($product_image)->resize(300,200)->save('image/product/'.$name_gen);

        $last_img = 'image/product/'.$name_gen;

        Product::insert([
            'product_name' => $request->product_name,
            'product_image' => $last_img,
            'created_at' => Carbon::now()

        ]);

        return Redirect()->back()->with('success','product Inserted Successfully');

    }

    public function Edit($id){
        $products = Product::find($id);
        return view('admin.product.edit',compact('products'));
    }

    public function Update(Request $request, $id){

        $validated = $request->validate([
            'product_name' => 'required|min:4',
            
        ],
        [
            'product_name.required' => 'Please Input product Name',
            'product_image.min' => 'product Longer then 4 Characters',
        ]);

        $old_image = $request->old_image;


        $product_image = $request->file('product_image');

        if($product_image){

        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($product_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/product/';
        $last_img =  $up_location.$img_name;
        $product_image->move($up_location,$img_name);

        unlink($old_image);
        Product::find($id)->update([
            'product_name' => $request->product_name,
            'product_image' => $last_img,
            'created_at' => Carbon::now()

        ]);

        return Redirect()->back()->with('success','product Updated Successfully');

        }else{

            Product::find($id)->update([
                'product_name' => $request->product_name,
                'created_at' => Carbon::now()
    
            ]);
    
            return Redirect()->back()->with('success','product Updated Successfully');

        }
    }

    public function Delete($id){
        $image = product::find($id);
        $old_image = $image->product_image;
        unlink($old_image);

        Product::find($id)->delete();
        return Redirect()->back()->with('success','product Deleted Successfully');
    }

    //This is for Multi Imae All Methods

    public function Multipic(){
        $images = Multipic::all();
        return view('admin.multipic.index',compact('images'));
    }

    public function StoreImg(Request $request){


        $image = $request->file('image');

        foreach($image as $multi_img){


        $name_gen = hexdec(uniqid()).'.'.$multi_img->getClientOriginalExtension();
        Image::make($multi_img)->resize(300,200)->save('image/multi/'.$name_gen);

        $last_img = 'image/multi/'.$name_gen;

        Multipic::insert([
            'image' => $last_img,
            'created_at' => Carbon::now()

        ]);
            }//end of the foreach
        return Redirect()->back()->with('success','product Inserted Successfully');




    }

    public function Logout(){
        Auth::logout();
        return Redirect()->route('login')->with('success', 'User Logout');
    }







    
}
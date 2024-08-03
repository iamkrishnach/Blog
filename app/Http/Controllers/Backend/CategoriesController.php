<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\OuterCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;


class CategoriesController extends Controller
{
    public function add_outer_catgeory($id = null){
        $data = OuterCategory::get();
        $value = null;
        if ($id) {
            $value = OuterCategory::where('id',$id)->first();
        }
        return view('Backend.Category.OuterCategeory',['data'=>$data,'value'=>$value]);
    }

    public function save_outer_catgeory(Request $request){
        $this->validate($request,[
            'outercategory'=> 'required|regex:/^[\pL\s]+$/u|max:255',
            ]);
        $data = OuterCategory::create([
            'name' => $request->outercategory,
            'slug' => strtolower($request->outercategory)
        ]);
        return redirect()->back()->with(['success' => "$data->name Outer Category save successfully"]);
    }

    public function update_outer_catgeory(Request $request, $id){
        $this->validate($request,[
            'outercategory'=> 'required|regex:/^[\pL\s]+$/u|max:255',
            ]);
            $data = OuterCategory::find($id);
            $data->name = $request->outercategory;
            $data->slug = strtolower($request->outercategory);
            $data->save();
            return redirect(url('add-outer-catgeory'))->with(['success' => "$data->name Outer Category updated successfully"]);
    }

    public function activeouter($id){
        $data=OuterCategory::find($id);
        $data->status=1;
        $data->save();
        return redirect()->back()->with(['success'=>"{$data->name} Category Active  Successfully"]);
    }

    public function deactiveouter($id){
        $data=OuterCategory::find($id);
        $data->status=2;
        $data->save();
        return redirect()->back()->with(['error'=>"{$data->name} Category Dective Successfully"]);
    }

    public function deleteoutercategory($id){
        $data = Category::where('outer_cat_id',$id)->delete();
        $data = subCategory::where('outer_cat_id',$id)->delete();
        $data=OuterCategory::find($id);
        $data->delete();
        return redirect()->back()->with(['error'=>"{$data->name} Category Deleted  Successfully"]);
   
    }


    #Category

    public function add_catgeory($id = null){
        $outer= OuterCategory::orderBy('id','Desc')->where('status','1')->get();
        $data = Category::with('outercatgeory')->orderBy('id','Desc')->get();
       
        $value = null;
        if ($id) {
            $value = Category::where('id',$id)->first();
           
        }
        return view('Backend.Category.Category',['data'=>$data,'value'=>$value,'outer'=>$outer]);
    }

    public function save_catgeory(Request $request){
        $this->validate($request,[
            'outercategory'=>'required',
            'category'=> 'required|regex:/^[\pL\s]+$/u|max:255',
            ]);
        $data = Category::create([
            'outer_cat_id'=> $request->outercategory,
            'name' => $request->category,
            'slug' => strtolower($request->category)
        ]);
        return redirect()->back()->with(['success' => "$data->name Category save successfully"]);
    }

    public function update_catgeory(Request $request, $id){
        $this->validate($request,[
            'outercategory'=>'required',
            'category'=> 'required|regex:/^[\pL\s]+$/u|max:255',
            ]);
            $data = Category::find($id);
            $data->outer_cat_id =$request->outercategory;
            $data->name = $request->category;
            $data->slug = strtolower($request->category);
            $data->save();
            return redirect(url('add-catgeory'))->with(['success' => "$data->name Category updated successfully"]);
    }

    public function activecategory($id){
        $data=Category::find($id);
        $data->status=1;
        $data->save();
        return redirect()->back()->with(['success'=>"{$data->name} Category Active  Successfully"]);
    }

    public function deactivecategory($id){
        $data=Category::find($id);
        $data->status=2;
        $data->save();
        return redirect()->back()->with(['error'=>"{$data->name} Category Dective Successfully"]);
    }

    public function deletecategory($id){
        $data=Category::find($id);
        $data->delete();
        return redirect()->back()->with(['error'=>"{$data->name} Category Deleted  Successfully"]);
    }


        #SubCategory

        public function add_sub_catgeory($id = null){
            $outer= OuterCategory::orderBy('id','Desc')->where('status','1')->get();
            $category = Category::orderBy('id','Desc')->where('status','1')->get();
            $data = SubCategory::with('outercatgeory','catgeory')->orderBy('id','Desc')->get();
            $value = null;
            if ($id) {
                $value = SubCategory::where('id',$id)->first();
               
            }
            return view('Backend.Category.SubCategory',['category'=>$category,'value'=>$value,'outer'=>$outer,'data'=>$data]);
        }
    
        public function save_sub_catgeory(Request $request){
            $this->validate($request,[
                'outercategory'=>'required',
                'category'=>'required',
                'subcategory'=> 'required',
                ]);
            $data = SubCategory::create([
                'outer_cat_id'=> $request->outercategory,
                'category_id'=> $request->category,
                'name' => $request->subcategory,
                'slug' => strtolower($request->subcategory)
            ]);
            return redirect()->back()->with(['success' => "$data->name SubCategory save successfully"]);
        }
    
        public function update_sub_catgeory(Request $request, $id){
            $this->validate($request,[
                'outercategory'=>'required',
                'category'=>'required',
                'subcategory'=> 'required|regex:/^[\pL\s]+$/u|max:255',
                ]);
                $data = SubCategory::find($id);
                $data->outer_cat_id =$request->outercategory;
                $data->category_id = $request->category;
                $data->name = $request->subcategory;
                $data->slug = strtolower($request->subcategory);
                $data->save();
                return redirect(url('add-sub-category'))->with(['success' => "$data->name SubCategory updated successfully"]);
        }
    
        public function activesub_category($id){
            $data=SubCategory::find($id);
            $data->status=1;
            $data->save();
            return redirect()->back()->with(['success'=>"{$data->name} SubCategory Active  Successfully"]);
        }
    
        public function deactivesub_category($id){
            $data=SubCategory::find($id);
            $data->status=2;
            $data->save();
            return redirect()->back()->with(['error'=>"{$data->name} SubCategory Dective Successfully"]);
        }
    
        public function deletesub_category($id){
            $data=SubCategory::find($id);
            $data->delete();
            return redirect()->back()->with(['error'=>"{$data->name} SubCategory Deleted  Successfully"]);
        }
}

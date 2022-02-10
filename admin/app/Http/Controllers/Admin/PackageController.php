<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PackageModel;
use App\Models\Admin\PackimgModel;
use App\Models\Admin\CategoryModel;
use DB;
use Auth;
use Validator;
use Image;
use Illuminate\Http\Request;

class PackageController extends Controller
{
   // private $table = 'tbl_category';
    public function __construct()
    {
        $this->PackageModel = new PackageModel();
        $this->middleware('auth');
    }
    public function index()
    {
        $result['categorydata'] = PackageModel::where('isdelete', 0)->orderBy('id', 'DESC')->get();
        return view('admin/package/index', $result);
    }
    public function add($id = '')
    {
        $result['Categoryname'] = CategoryModel::where('isdelete', 0)
        ->select('name','id')
        ->orderBy('id', 'DESC')
        ->get();
        if ($id != '') {
            $result['id'] = $id;
            $result['data'] = PackageModel::where('id', $id)->where('isdelete',0)->get()->first();
            $result['imgdata'] = PackimgModel::where('p_id', $id)->get();
            return view('admin/package/add', $result);
        }

        $result['id'] = '';
        $result['imgdata']="";
        return view('admin/package/add', $result);
    }
    public function save(Request $Request)
    {
       
        $Request->validate([
            'package_name' => 'required|unique:tbl_package,package_name,'. $Request->id,
            'cat_id' => 'required',
            'price' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $id = $Request->id;
        if ($id != '') {
            $PackageModel = PackageModel::find($id);
            $PackageModel->package_name = StringRepair($Request->package_name);
            $PackageModel->price = StringRepair($Request->price);
            $PackageModel->cat_id = StringRepair($Request->cat_id);
            $PackageModel->created_by = Auth::user()->id;
            $PackageModel->save();
            $pid = $id ;
            $message = 'updated Successfully';
        } else {
            $PackageModel = new PackageModel();
            $PackageModel->package_name = StringRepair($Request->package_name);
            $PackageModel->price = StringRepair($Request->price);
            $PackageModel->cat_id = StringRepair($Request->cat_id);
            $PackageModel->created_by = Auth::user()->id;
            $PackageModel->save();
            $pid = $PackageModel->id;
         
            $message = 'Added Successfully';
        }

        $authid = Auth::user()->id;
        $today = date('Y-m-d H:i:s');

        if($Request->hasfile('images')) {
            foreach($Request->file('images') as $file)
            {
                $var = date_create();
                $time = date_format($var, 'YmdHis');
                $rendome = rand(99,999999999);
                $name = $time . '-' .$rendome.'-'. $file->getClientOriginalName();
                $file1=public_path().'/uploads/'. $name;  
                $file2=public_path().'/100/'. $name;  
                $file3=public_path().'/250/'. $name;  
                $file4=public_path().'/90/'. $name;  

                $image_resize = Image::make($file->getRealPath())->save($file1);  
                $image_resize = Image::make($file->getRealPath())->resize(100,100)->save($file2);              
                $image_resize = Image::make($file->getRealPath())->resize(250,250)->save($file3);              
                $image_resize = Image::make($file->getRealPath())->resize(90,50)->save($file4); 

                $PackimgModel= new PackimgModel();
                $PackimgModel->img=$name; 
                $PackimgModel->p_id=$pid;
                $PackimgModel->created_by=$authid;
                $PackimgModel->save();
            }
        }    

        $cloop = StringRepair($Request->cloop);
       

        for ($i = 1; $i <= $cloop; $i++){

            $subid="subid_".$i;
            $c_name="c_name_".$i;
            $FileName="FileName_".$i;
            $ispayed="is_payed".$i;
           
         
            $subid = $Request->$subid;
            $c_name = $Request->$c_name;
            $ispayed = $Request->$ispayed;
          
            // print_r($Request->post());
            // exit;
            if ($subid != 0 or $subid != '') {
                $PackimgModel = PackimgModel::find($subid);
                $PackimgModel->c_name = StringRepair($c_name);
                $PackimgModel->created_by = Auth::user()->id;

                $Request->validate([
                    ''.$FileName.'.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                ]);
              
                if($subid != 0 or $subid!="" or $FileName!="") {
                    if($Request->hasfile(''.$FileName.'')) {
                        $file=$Request->file(''.$FileName.'');
                        $var = date_create();
                        $time = date_format($var, 'YmdHis');
                        $rendome = rand(99,999999999);
                        $name = $time . '-' .$rendome.'-'. $file->getClientOriginalName();
                        $file1=public_path().'/uploads/'. $name;  
                        $file2=public_path().'/100/'. $name;  
                        $file3=public_path().'/250/'. $name;  
                        $file4=public_path().'/90/'. $name;  
                        $image_resize = Image::make($file->getRealPath())->save($file1);  
                        $image_resize = Image::make($file->getRealPath())->resize(100,100)->save($file2);              
                        $image_resize = Image::make($file->getRealPath())->resize(250,250)->save($file3);   
                        $image_resize = Image::make($file->getRealPath())->resize(90,50)->save($file4);  
                        $PackimgModel = PackimgModel::find($subid);
                        if($name!=""){
                            $PackimgModel->img=$name;
                        }
                        $PackimgModel->save();
                    }
                }
                $PackimgModel->save();
            }else{
                $PackimgModel = new PackimgModel();
                $PackimgModel->c_name = StringRepair($c_name);
                $PackimgModel->p_id = StringRepair($pid);
                $PackimgModel->created_by = Auth::user()->id;
                if($Request->hasfile(''.$FileName.'')) {
                    $file=$Request->file(''.$FileName.'');
                    $var = date_create();
                    $time = date_format($var, 'YmdHis');
                    $rendome = rand(99,999999999);
                    $name = $time . '-' .$rendome.'-'. $file->getClientOriginalName();
                    $file1=public_path().'/uploads/'. $name;  
                    $file2=public_path().'/100/'. $name;  
                    $file3=public_path().'/250/'. $name;  
                    $file4=public_path().'/90/'. $name;  
                    $image_resize = Image::make($file->getRealPath())->save($file1);  
                    $image_resize = Image::make($file->getRealPath())->resize(100,100)->save($file2);              
                    $image_resize = Image::make($file->getRealPath())->resize(250,250)->save($file3);   
                    $image_resize = Image::make($file->getRealPath())->resize(90,50)->save($file4);  
                    $PackimgModel->img=$name;
                }
                $PackimgModel->save();
            }
            
        }
        $Request->session()->flash('message', $message);
        return redirect('package');
    }
    public function delete($id)
    {
        $PackageModel = PackageModel::find($id);
        $PackageModel->isdelete=1;
        $PackageModel->created_by = Auth::user()->id;
        $PackageModel->save();
        $message = 'Delete Successfully';
        session()->flash('message', $message);
        return redirect('package');
    }
    public function deleteimg($nid,$id)
    {
       
        $PackimgModel = PackimgModel::find($id);
        $PackimgModel->isdelete=1;
        $PackimgModel->created_by = Auth::user()->id;
        $PackimgModel->delete();
        $message = 'Delete Successfully';
        session()->flash('message', $message);
        return redirect('package/add/'.$nid.'');
    }
    public function imageedit($nid,$id)
    {
        $result['data'] = PackimgModel::where('id', $id)->where('isdelete',0)->get()->first();
        $result['id'] = $id;
        $result['nid'] = $nid;
        return view('admin/package/imageedit', $result);
    }
    public function saveimg(Request $Request)
    {
        $id=$Request->id;
        $nid=$Request->nid;
        $Request->validate([
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
      
        if($Request->hasfile('images')) {
            $file=$Request->file('images');
            $var = date_create();
            $time = date_format($var, 'YmdHis');
            $rendome = rand(99,999999999);
            $name = $time . '-' .$rendome.'-'. $file->getClientOriginalName();
            $file1=public_path().'/uploads/'. $name;  
            $file2=public_path().'/100/'. $name;  
            $file3=public_path().'/250/'. $name;  
            $file4=public_path().'/90/'. $name;  
            $image_resize = Image::make($file->getRealPath())->save($file1);  
            $image_resize = Image::make($file->getRealPath())->resize(100,100)->save($file2);              
            $image_resize = Image::make($file->getRealPath())->resize(250,250)->save($file3);   
            $image_resize = Image::make($file->getRealPath())->resize(90,50)->save($file4);  
            $PackimgModel = PackimgModel::find($id);
            $PackimgModel->img=$name;
            $PackimgModel->save();
        }    
        return redirect('package/add/'.$nid.'');
    }

    public function cloop($id)
    {
        $params = array('id' => $id);
        return view('admin/package/cloop', $params);
    }

}

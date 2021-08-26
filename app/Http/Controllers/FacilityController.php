<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facility;
use App\FacilityCategory;
use App\Category;

use Auth;

class FacilityController extends Controller
{    
    function create(){
        return view('create_facility.create_facility');
    }

    function edit($id){
        $facility = Facility::find($id);
        $categories = Category::all();
        dd($category);
        return view('create_facility.edit_facility' , ['facility' => $facility , 'categories' => $categories]);
    }
    
    function store(Request $request)
    {
        $facility = new Facility();
        if($request->hasFile('image') && $request->file('image')->isValid())
        {
            $image = $request->file('image')->getClientOriginalName();
            $facility->picture = $request->file('image')->storeAs('public/images' , $image);
        }
        $facility->name = $request ->name;
        $facility->tel = $request->tel;
        $facility->address = $request->address;
        $facility->business_hour = $request->hour;
        $facility->day_off = $request->day_off;
        $facility->url = $request->url;
        $facility->user_id = Auth::id();
        $facility->save();


        $facility_category = new FacilityCategory();
        // $request->category; をループする。その中で配列の数分、$facility_category->category_idに代入して毎回save

        // foreach((array)$request->category as $attributes)
        foreach((array)$request->category as $value)
        {   
            $facility_category = new FacilityCategory();
            $facility_category->facility_id = $facility->id;
            $facility_category->category_id = $value; 
            $facility_category->save();
        }

        return redirect() -> route('top');
    }

    function update(Request $request , $id)
    {
        $facility = Facility::find($id);

        if($request->hasFile('image') && $request->file('image')->isValid())
        {
            $image = $request->file('image')->getClientOriginalName();
            $facility->picture = $request->file('image')->storeAs('public/images' , $image);
        }
        $facility->name = $request ->name;
        $facility->tel = $request->tel;
        $facility->address = $request->address;
        $facility-> business_hour = $request->hour;
        $facility-> day_off = $request-> dayoff;
        $facility-> url = $request-> url;
        $facility->save();
        // ここにnew Facility_categoryをいれる？？
        return view('create_facility.create_facility' , ['create_facility' => $facility]);
    }
  
    function index()
    {
        $facilities = Facility::all();
        return view('top',['facilities' => $facilities ]);
    }
}




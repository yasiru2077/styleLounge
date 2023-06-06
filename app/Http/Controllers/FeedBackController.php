<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    
    public function addFeedback(){
        return view('customer-feedback');
    }

    public function saveFeedback(Request $request){
        
       

        $feed=new FeedBack;

        $feed->feedback=$request->feedback;
        $feed->email=$request->email;
        $feed->min_price=$request->min_price;
        $feed->max_price=$request->max_price;
        $feed->recomend=$request->recomend;
        $feed->description=$request->description;
        $feed->save();
        return redirect()->back()->with('success','feedback added successfully');
        
    }

}

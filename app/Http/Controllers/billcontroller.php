<?php

namespace App\Http\Controllers;

use App\billing;
use Illuminate\Http\Request;

class billcontroller extends Controller
{
    public function store(Request $request){

        $billing = new billing;
       // dd($request->all());

        //validations
        $this->validate($request,[

          'quantity'=>'required|max:2|min:1',



       ]);




        $billing->date=$request->date;
        $billing->price=$request->price;
        $billing->discount=$request->discount;
        $billing->total=$request->total;
        $billing->quantity=$request->quantity;
        $billing->description=$request->description;
        $billing->customer_name=$request->customerName;
        $billing->Salesperson=$request->salesperson;
        $billing->ItemNo=$request->ItemNo;
        $billing->save();
        $data=billing::all();
        //dd($data);
        return view('bill')->with('bill',$data);
        //return redirect()->back(); //redirect to the previous page,or a particular page->return view('/task')

    }

    public function delBill($id){

        $billing=billing::find($id);
        $billing->delete();
        return redirect()->back();
    }

    public function editBill($id){

        $billing=billing::find($id);
        return view('updateBill')->with('billdata',$billing);

    }

    public function updateBill(Request $request){

        $id=$request->id;
        $date=$request->date;
        $price=$request->price;
        $discount=$request->discount;
        $total=$request->total;
        $quantity=$request->quantity;
        $description=$request->description;
        $customerName=$request->customerName;
        $salesperson=$request->salesperson;
        $ItemNo=$request->ItemNo;

       $data=billing::find($id);
        //$billing = billing::find($id);

        $data->date=$date;
        $data->price=$price;
        $data->discount=$discount;
        $data->total=$total;
        $data->quantity=$quantity;
        $data->description=$description;
        $data->customer_name=$customerName;
        $data->salesperson=$salesperson;
        $data->ItemNo=$ItemNo;
        $data->save();

        $data=billing::all();
        //return view('bill')->with('billdata',$data);
        return view('bill')->with('bill',$data);//view variable





    }



}

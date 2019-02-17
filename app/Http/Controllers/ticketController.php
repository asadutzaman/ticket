<?php

namespace App\Http\Controllers;


use App\ticket;
use App\query;
use App\uproduct;
use Illuminate\Http\Request;

class ticketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
     public function form()      // route function
    {
        return view('products.form');
    }
    public function index()
    {
        //
    }
    public function ticket(){
        //return view('table');
        $tickets = ticket::latest()->paginate(5);
  
        return view('tickets.ticket',compact('tickets'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $complain_sub   =   $_POST['complain_sub'];
        $query_sub      =   $_POST['query_sub'];
        $product_sub   =   $_POST['product_sub'];
        //$status         =   1;

        $request->validate([
            'department'    =>'',
            'phone'         =>'',
            'c_name'        =>'',
            'c_email'       =>'',
            'c_address'     =>'',
            'complain_sub'  =>'',
            'complain_details'  =>'',
            'query_sub'     =>'',
            'query_details' =>'',
            'product_name'  =>'',
            'product_sub'   =>'',
            'product_details'   =>'',
            'assign'        =>'',
            'comment'       =>'',
            'status'        =>''
        ]);

        if(!empty($complain_sub)){
            ticket::create($request->all());   
            return redirect()->route('form')
            ->with('success','Ticket created successfully.');
        }
        if(!empty($query_sub)){
            query::create($request->all());
            return redirect()->route('form')
            ->with('success','Query created successfully.');
        }
        if(!empty($product_sub)){
            uproduct::create($request->all());    
            return redirect()->route('form')
            ->with('success','Product issue created successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ticket $ticket)
    {
        return view('tickets.show',compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

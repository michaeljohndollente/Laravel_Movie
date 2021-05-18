<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Actor;


// namespace App\Http\Controllers;
// use Illuminate\Support\Facades\View;
// use Illuminate\Support\Facades\Redirect;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;
// use App\Customer;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $customers = Customer::orderBy('lname','DESC')->paginate(10);
        // // dd($customers);
        // return View::make('customer.index',compact('customers'));

        // $actors= Actor::orderby('actor_lname','DESC')->paginate(10);
        $actors= Actor::orderBy('id','DESC')->paginate(5);
        return View::make('actors.index', compact('actors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('actors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Actor::create($request->all());
         return Redirect::to('actor')->with('success','New Actor added!');


        // $rules = 
        // ['title' =>'required|alpha_num|min:3|max:32',
        // 'lname'=>'required|alpha',
        // 'fname'=>'required',
        // 'addressline'=>'required',
        // 'phone','town'=>'required',
        // 'zipcode'=>'required'];

        // $messages= [
        //     'required' => ':attribute is needed',
        //     'min' => 'Too SMOL',
        //     'alpha' => 'LETTERS ONLY BETCH'
        // ];
        
        // $formData = $request->all();
        // $validator = Validator::make($formData, $rules, $messages);
        
        // if ($validator->passes()) {
        //     Customer::create($request->all());
        //     return Redirect::to('customer')->with('success','New Album added!');


    //    Customer::create($request->all());
    //     return Redirect::to('customer')->with('success','New Album added!');
    //     }
        // return redirect()->back()->withInput()->withErrors($validator);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actors= Actor::find($id);
         return view('actors.edit',compact('actors'));
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
        $actors = Actor::find($id);
         $actors->update($request->all());
         return Redirect::to('/actor')->with('success','Actor updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actors = Actor::findOrFail($id);
        $actors->delete();
        return Redirect::to('/actor')->with('success','Actor deleted!');
    }
}

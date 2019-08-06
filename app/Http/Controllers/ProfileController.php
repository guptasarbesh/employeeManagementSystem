<?php
namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Profilemodel;

class ProfileController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       //
       $profiles = ProfileModel::all();

       //return view('shares.index', compact('shares'));
       //
       return view('profile.index',compact('profiles'));

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
       
    //    $request->validate([
        
    //        'name'=>'required',
    //        'gender'=>'required',
    //        'dob'=>'required',
    //        'contact'=> 'required|integer',
    //        'skills' => 'required',
    //        'email' => 'required',
    //        'fathersname'=>'required',
    //        'mothersname'=> 'required',
    //         'workexp'=>'required',
    //        'district'=>'required',
    //        'area'=>'required',
           
    //      ]);
         $profiles = new Profilemodel([
           'name' => $request->get('name'),
           'gender'=> $request->get('gender'),
           'dob' => $request->get( 'dob'),
           'contact'=> $request->get('contact'),
           
           'email' => $request->get('email' ),
           'fathersname' => $request->get('fathersname'),
           'mothersname' => $request->get('mothersname'),
          
           'district'=> $request->get('district'),
           'area'=> $request->get('area'),
           
         ]);
         $profiles->save();
         return redirect('/profile')->with('success', 'Profile has been added');
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








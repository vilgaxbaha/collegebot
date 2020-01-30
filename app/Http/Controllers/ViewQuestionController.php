<?php

namespace App\Http\Controllers;

use App\ViewQuestion;
use App\AddQuestion;
use Illuminate\Http\Request;

class ViewQuestionController extends Controller
{
    public function answer(request $request){

         $result=AddQuestion::where('question','=',$request->question)
             ->orWhere('query1','=',$request->question)
             ->orWhere('query2','=',$request->question)
             ->orWhere('query3','=',$request->question)
             ->orWhere('query4','=',$request->question)
             ->get();
             $result1=AddQuestion::where('question','=',$request->question)
             ->orWhere('query1','=',$request->question)
             ->orWhere('query2','=',$request->question)
             ->orWhere('query3','=',$request->question)
             ->orWhere('query4','=',$request->question)
             ->count();
             if($result1==0){
                $add=new ViewQuestion;
         $add->question=$request->question;
         $add->date=date("Y-m-d");
         $add->time=date('H:i:s', time());
         $add->save();
           
         return view('user.viewAns',['l'=>'null', 'a'=>'Not found!', 'var3'=>$request->question, 'id'=>'0']);
             }else{
                $var=$result;
         foreach ($var as $var1) {
             $var2=$var1->question;
             $l=$var1->link;
             $a=$var1->answer;
             $id=$var1->id;
         }
         $add=new ViewQuestion;
         $add->question=$var2;
         $add->date=date("Y-m-d");
         $add->time=date('H:i:s', time());
         $add->save();

         return view('user.viewAns',['l'=>$l, 'a'=>$a, 'var3'=>$var2, 'id'=>$id]);
             }
         
    }
    public function viewQuestion(request $request){
        $result=viewQuestion::orderBy('id', 'DESC')->get();
        return view('admin.viewQuestion',['result'=>$result]);
    }
    public function userBack(){
        return view('home');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ViewQuestion  $viewQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(ViewQuestion $viewQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ViewQuestion  $viewQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(ViewQuestion $viewQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ViewQuestion  $viewQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ViewQuestion $viewQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ViewQuestion  $viewQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(ViewQuestion $viewQuestion)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\InvalidQuestion;
use App\AddQuestion;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InvalidQuestionController extends Controller
{
    public function invalidQuestionView(request $request){
        $result=$request->all();
        return view('user.invalidQuestion',['result'=>$result]);
    }
    public function addInvalidQuestionView(request $request){
        if($request->id==0){
           return view('user.success')->with('msg','This question is not addable for invalid answer.');
        }else{
           $result=$request->all();
         $add=new InvalidQuestion;
         $add->q_id=$result['id'];
         $add->question=$result['question'];
         $add->ans=$result['ans'];
         $add->date=date("Y-m-d");
         $add->save();
         return view('user.success')->with('msg','You are successfully added question for invalid answer.');
        }
    }
    public function viewAllInvalidQuestion(){
         $result=InvalidQuestion::all();
         return view('admin.viewInvalidQuestion',['result'=>$result]);
    }
    public function addQuestion(request $request){
        $result=InvalidQuestion::find($id);
      return view('admin.addUpdateQuestion',['result'=>$result]);
  }
      public function addUpdateQuestion(request $request){

        if($request->link==NULL){
             $l='null';
           }else{
             $l=$request->link;
           }
        AddQuestion::where('id',$request['id'])
        ->update(['question'=>$request['question'], 'query1'=>$request['query1'],'query2'=>$request['query2'],'query3'=>$request['query3'],'query4'=>$request['query4'],'answer'=>$request['answer'],'link'=>$l]);
           DB::table('invalid_questions')->where('id', $request->id)->delete();
           return view('admin.success')->with('msg','You added this successfully.');
      }
    public function deleteQuestion(request $request){
        DB::table('invalid_questions')->where('id', $request->id)->delete();
        return view('admin.success')->with('msg','Deleted successfully.');
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
     * @param  \App\InvalidQuestion  $invalidQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(InvalidQuestion $invalidQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InvalidQuestion  $invalidQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(InvalidQuestion $invalidQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InvalidQuestion  $invalidQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InvalidQuestion $invalidQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InvalidQuestion  $invalidQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvalidQuestion $invalidQuestion)
    {
        //
    }
}

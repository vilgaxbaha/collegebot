<?php

namespace App\Http\Controllers;

use App\AddQuestion;
use Illuminate\Http\Request;

class AddQuestionController extends Controller
{
    public function addQuestionFrame(){
        return view('admin.addQuestion');
    }
    public function addQuestion(request $request){
           $add=new addQuestion;
           $add->question=$request->question;
           $add->query1=$request->query1;
           $add->query2=$request->query2;
           $add->query3=$request->query3;
           $add->query4=$request->query4;
           $add->answer=$request->answer;
           if($request->link==NULL){
             $add->link='null';
           }else{
             $add->link=$request->link;
           }
           $add->save();
           return view('admin.success')->with('msg',"All are successfully added!");
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
     * @param  \App\AddQuestion  $addQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(AddQuestion $addQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AddQuestion  $addQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(AddQuestion $addQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AddQuestion  $addQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddQuestion $addQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AddQuestion  $addQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddQuestion $addQuestion)
    {
        //
    }
}

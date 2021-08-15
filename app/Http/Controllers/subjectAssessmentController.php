<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\subjectAssessment;

class subjectAssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }
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
        $this->validate($request,[
            // 'mathematics1'=>'required',       
        ]);
        // dd(request()->all());
         $subject_assessments = new subjectAssessment();
          $subject_assessments-> user_Id = Auth::user()->id;
          $subject_assessments-> student_Id = $request->input('student_ID');
          $subject_assessments-> student_name = $request->input('student_name');
          $subject_assessments-> mathematics1 = $request->input('mathematics1');
          $subject_assessments-> mathematics2 = $request->input('mathematics2');
          $subject_assessments-> english1 = $request->input('english1');
          $subject_assessments-> english2 = $request->input('english2');
          $subject_assessments-> nve1 = $request->input('nve1');
          $subject_assessments-> nve2 = $request->input('nve2');
          $subject_assessments-> bTech1 = $request->input('bTech1');
          $subject_assessments-> bTech2 = $request->input('bTech2');
          $subject_assessments-> busStudies1 = $request->input('busStudies1');
          $subject_assessments-> busStudies2 = $request->input('busStudies2');
          $subject_assessments-> preVocStudies1 = $request->input('preVocStudies1');
          $subject_assessments-> preVocStudies2 = $request->input('preVocStudies2');
          $subject_assessments-> hausa1 = $request->input('hausa1');
          $subject_assessments-> hausa2 = $request->input('hausa2');
          $subject_assessments-> yoruba1 = $request->input('yoruba1');
          $subject_assessments-> yoruba2 = $request->input('yoruba2');
          $subject_assessments-> igbo1 = $request->input('igbo1');
          $subject_assessments-> igbo2 = $request->input('igbo2');
          $subject_assessments-> crs1 = $request->input('crs1');
          $subject_assessments-> crs2 = $request->input('crs2');
          $subject_assessments-> irs1 = $request->input('irs1');
          $subject_assessments-> irs2 = $request->input('irs2');
          $subject_assessments-> cca1 = $request->input('cca1');
          $subject_assessments-> cca2 = $request->input('cca2');
          $subject_assessments-> french1 = $request->input('french1');
          $subject_assessments-> french2 = $request->input('french2');
          $subject_assessments-> arabic1 = $request->input('arabic1');
          $subject_assessments-> arabic2 = $request->input('arabic2');
          $subject_assessments-> status = "0";
          $subject_assessments->save();
        return back()->with('success','Created Successfully!');
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

<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\QualificationController;
use App\Qualification;
use App\Teacher;
use App\Vote;

class VoteController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
  }

  /**
   * Show the form for creating a new resource.
   * @param $request
   * @return Response
   */
  public function create(Request $request)
  {
      $this->validate($request, [
          'teachers' => 'required',
      ]); // does implicitly redirect back if fails

      
      //if passed - assumed correct input
      $vote = new Vote;
      // echo $request->teachers;
      //session controller instance
      $ses = new SessionController;
      $qual = new QualificationController;

      // peek the whole stuff
      // print_r($ses->getAll($request));

      $studentrecord = $ses->retrieveValue($request,'student_record');

      // echo $studentrecord;
      $vote->s_nr = $studentrecord['studentNr'];
      $vote->t_id = $request->teachers;
      $qual_nr = $qual->getCurrentQualNr($request);
      $vote->q_id = $qual_nr;

      $votes = $ses->retrieveValue($request,'vote_records');
      if($votes !== null){
        // do not allow doublicates
        // do override in such cases
        // to do!
        if($votes[$qual_nr-1]==null)
        {
          array_push($votes,$vote); // add value to the array of votes
        }else{
          $votes[$qual_nr-1] = $vote;
        }
      }else{
        $votes = array(); 
        array_push($votes,$vote);
      }
      $ses->putValue($request, 'vote_records',$votes);
      
      // saved the data to session - continue further
      return redirect('/next');
     
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    echo "in proress of storing response";
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>
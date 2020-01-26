<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\serie;

class SerieController extends Controller

{
  public function createSerie(Request $request){

		$serie = new Serie;

		$serie->name = $request->name;
		$serie->synopsis = $request->synopsis;
		$serie->score = $request->score;
    $serie->user_id = $request->user_id;
		$serie->save();

		return response()->json([$serie]);
	}

	public function listSeries(){

		$serie = Serie::all();
		return response()->json($serie);
	}

	public function showSerie($id){

	$serie = Serie::FindOrFail($id);
	return response()->json([$serie]);
	}

	public function updateSerie(Request $request, $id){
		$serie = Serie::find($id);

		if($serie){
			if($request->name){
				$serie->name = $request->name;
			}
			if($request->synopsis){
				$serie->synopsis = $request->synopsis;
			}
			if($request->score){
				$serie->score = $request->score;
			}
      if($request->user_id){
        $serie->user_id = $request->user_id;
      }
      $serie->save();
      return response()->json([$serie]);
		}
		else{
			return response()->json(['Esta serie não existe']);
		}
	}

	public function deleteSerie($id){
		Serie::destroy($id);
		return response()->json(['Serie deletada']);
	}
    //
}

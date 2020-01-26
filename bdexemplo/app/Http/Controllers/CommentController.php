<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;

class CommentController extends Controller
{

  public function createcomment(Request $request){

		$comment = new Comment;

		$comment->message = $request->message;
    $comment->user_id = $request->user_id;
		$comment->serie_id = $request->serie_id;
		$comment->save();

		return response()->json([$comment]);
	}

	public function listcomments(){

		$comment = Comment::all();
		return response()->json($comment);
	}

	public function showcomment($id){

	$comment = Comment::FindOrFail($id);
	return response()->json([$comment]);
	}

	public function updatecomment(Request $request, $id){
		$comment = Comment::find($id);

		if($comment){
			if($request->message){
				$comment->message = $request->message;
			}

      $comment->save();
      return response()->json([$comment]);
		}
		else{
			return response()->json(['Este comentario nao existe']);
		}
	}

	public function deletecomment($id){
		Comment::destroy($id);
		return response()->json(['comentario deletado']);
	}
    //
}

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Forum;
class ForumController extends Controller
{
    //
    public function index()
    {
        return view('forum.index');
    }
    public function createPost()
    {
        return view('forum.create');
    }
    public function storePost(Request $request)
    {
       // dd($request->commentOwner);
        $forumComment = $request->validate([
            'commentOwner'=> 'max:255',
            'commentEmail'=> 'max:255',
            'commentText'=> 'max:255'
        ]);
        $newComment = Forum::create($forumComment);
        return redirect(route('forum.index'));
    }
}

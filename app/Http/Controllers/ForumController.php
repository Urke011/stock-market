<?php
namespace App\Http\Controllers;
use App\Models\Stock;
use Illuminate\Http\Request;
use App\Models\Forum;
class ForumController extends Controller
{
    //
    public function index(){

        $forums = Forum::all();
        return view('forum.index',['forums'=> $forums]);
    }
    public function createPost()
    {
        return view('forum.create');
    }
    public function storePost(Request $request)
    {
        $messages = [
            'commentOwner.required' => 'The comment owner field is required.',
            'commentOwner.string' => 'The comment owner must be a string.',
            'commentOwner.max' => 'The comment owner may not be greater than 255 characters.',
            'commentEmail.required' => 'The comment email field is required.',
            'commentEmail.string' => 'The comment email must be a string.',
            'commentEmail.email' => 'The comment email must be a valid email address.',
            'commentText.required' => 'The comment text field is required.',
            'commentText.string' => 'The comment text must be a string.',
            'commentText.min' => 'The comment text must be at least 5 characters.',
            'commentText.max' => 'The comment text may not be greater than 1000 characters.',
        ];
       // dd($request->commentOwner);
        //email validation not working
        $forumComment = $request->validate([
            'commentOwner' => 'required|string|max:255',
            'commentEmail' => 'required', 'email:rfc,dns',
            'commentText' => 'required|string|min:5|max:1000'
        ],$messages);
        $newComment = Forum::create($forumComment);
        return redirect(route('forum.index'));
    }
    public function edit(Forum $forum){

        return view('forum.edit',['forum'=> $forum]);
    }
    public function update(Forum $forum,Request $request){
        $data = $request->validate([
            'commentOwner' => 'required|string|max:255',
            'commentEmail' => 'required', 'email:rfc,dns',
            'commentText' => 'required|string|min:5|max:1000'
        ]);
        $forum->update($data);
        return redirect(route('forum.index'))->with("success",'Forum comment updated successfully!');
    }
    public function delete(Forum $forum){
        $forum->delete();
        return redirect(route('forum.index'))->with("success",'Forum comment deleted successfully!');
    }
}

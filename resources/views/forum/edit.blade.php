@include("layouts/header")


<div class="comment-wrapper mt-5">
    <h2>Edit new comment</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('forum.update',['forum'=>$forum])}}"  method="post" >
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Your name</label>
            <input type="text" class="form-control" name="commentOwner" id="exampleFormControlInput1" placeholder="Name" value="{{$forum->commentOwner}}" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="commentEmail" id="exampleFormControlInput1" placeholder="name@example.com" value="{{$forum->commentEmail}}" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" >Your comment</label>
            <textarea class="form-control" name="commentText" id="exampleFormControlTextarea1" rows="3" required>{{$forum->commentText}}</textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Update">
    </form>

</div>
@include("layouts/footer")

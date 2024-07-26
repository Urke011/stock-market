@include("layouts/header")


<div class="comment-wrapper mt-5">
    <h2>Add new comment</h2>
<form action="{{route('forum.store')}}"  method="post" >
    @csrf
    @method('post')
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Your name</label>
        <input type="text" class="form-control" name="commentOwner" id="exampleFormControlInput1" placeholder="Name" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="commentEmail" id="exampleFormControlInput1" placeholder="name@example.com" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Your comment</label>
        <textarea class="form-control" name="commentText" id="exampleFormControlTextarea1" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
@include("layouts/footer")

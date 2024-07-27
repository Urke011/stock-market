@include("layouts/header")
<div class="forum-title w-100" style="background-color: #0f5132;">
    <h1 class="text-white p-2">Wellcome to forum page</h1>
</div>
<div>
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif
</div>
@foreach($forums as $forum)
    <div class="p-2">
        <h2>
            Name: {{$forum->commentOwner}}
        </h2>
        <p>Owner email: {{$forum->commentEmail}}</p>
        <p>Comment: {{$forum->commentText}}</p>
        @php
            $createDate = new DateTime($forum->created_at);
            $strip = $createDate->format('d-m-Y');

        @endphp
        <p>Created: {{$strip}}</p>
        <div class="d-flex">
            <div class="" style="margin-right: 1%;"><p><button type="button" class="btn btn-success edit-forum-btn"><a href={{route('forum.edit',['forum'=>$forum])}}>Edit comment</a></button></p></div>
            <div class=""><form action="{{route('forum.delete',['forum'=>$forum])}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger" value="delete">Delete</button>
                </form></div>
        </div>
    </div>
    <hr style="border: 1px solid #0f5132;">
@endforeach
@include("layouts/footer")

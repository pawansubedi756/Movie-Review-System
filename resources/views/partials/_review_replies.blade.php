@foreach($review as $reviews)
    <div class="display-comment">
        <h4 class="text-capitalize">{{ $reviews->user->name }}</h4>
        <p style="color: white"><i>{{ $reviews->review }}</i></p>
        <a href="/review/edit/{{$reviews->id}}" class="btn">Edit</a>
        <a href="/review/delete/{{$reviews->id}}" class="btn">Delete</a>


        @auth
            @if(Auth::user()->id==$reviews->user_id)
                <form action="{{ route('review.delete', ['id'=>$reviews->id]) }}" method="post" class="form-group">
                    @csrf
                    {{-- {{Form::hidden('_method', 'DELETE')}} --}}
                   {{-- // {{Form::submit('Delete', ['class' => 'btn btn-danger'])}} --}}
                </form>
            @endif
        @endauth

    </div>
@endforeach

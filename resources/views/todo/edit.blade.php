@extends('layout.todo')


@section('content')
    <h1>You are editing reference {{ $card->title }} ({{ $card->id }})</h1>
    <div class="sticky-container">
        <form id="stickyForm" method="post" action="{{ route('todo.update', ['todo' => $card]) }}">
            @csrf
            @method('put')
            <div>
                <label>Title</label><span style="color:red;">*required</span>
                <input type="text" name="title" placeholder="Title" required />
            </div>
            <div>
                <label>Description</label>
                <input type="text" name="desc" placeholder="Description" />
            </div>
            <div>
                <label>Due</label>
                <input type="date" name="due" placeholder="Due" />
            </div>
            <div>
                <label>Complete</label>
                <input type="checkbox" name="complete" value="{{ $card->complete }}" />
            </div>
            <input type="submit" value="Submit" />
        </form>
    </div>
@endsection

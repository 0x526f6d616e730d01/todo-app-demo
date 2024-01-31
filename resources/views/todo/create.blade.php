@extends('layout.todo')

@section('content')
    <section class="sticky-container">
        <h2>
            Create new card...
        </h2>
        <form id="stickyForm" method="post" action="{{ route('todo.store') }}">
            @csrf
            @method('post')
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
            <input type="submit" value="Submit" />
        </form>
    </section>
@endsection

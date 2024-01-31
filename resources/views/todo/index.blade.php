@extends('layout.todo')

@section('content')
    <section class="stickies">
        <div class="new-sticky">
            <a href="{{ route('todo.create') }}">
                <span>Create a new note...</span>
            </a>
        </div>
        <div class="sticky-container">
            @foreach ($cards as $card)
                <div class="card">
                    <span class="title"> {{ $card->title }} </span>
                    <p>{{ $card->desc }}</p>
                    <a href="{{ route('todo.edit', ['todo' => $card]) }}">
                        <img src="/img/edit.svg" style="width:32px; height:32px" />
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection

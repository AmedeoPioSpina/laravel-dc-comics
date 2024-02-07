@extends('layouts.app')

@section('main-content')
    <h1>
        DC-COMICS/create()
    </h1>
    
    <div>
        <form action="{{ route('guest.comics.store') }}" method="POST">
            @csrf

            <div>
                <label for="title">Title: </label>
                <input type="text" name="title">
            </div>
            <div>
                <label for="description">Description: </label>
                <input type="text" name="description">
            </div>
            <div>
                <label for="thumb">Thumb: </label>
                <input type="text" name="thumb">
            </div>
            <div>
                <label for="price">Price: </label>
                <input type="text" name="price">
            </div>
            <div>
                <label for="series">Series: </label>
                <input type="text" name="series">
            </div>
            <div>
                <label for="sale_date">Sale date: </label>
                <input type="text" name="sale_date">
            </div>
            <div>
                <label for="type">Type: </label>
                <input type="text" name="type">
            </div>
            
            <button type="submit">Create comic</button>
            <button type="reset">Clear form</button>

        </form>
    </div>
@endsection
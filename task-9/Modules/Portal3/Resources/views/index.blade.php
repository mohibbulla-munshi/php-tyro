@extends('portal3::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('portal3.name') !!}
    </p>
@endsection

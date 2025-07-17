@extends ('layout')
@section ('title', $title)
@section ('header',$header)
@section ('content')
    @if($iflogin)
        <ol>
            @foreach ($products as $product)
                <li>{{ $product }}</li>
            @endforeach
        </ol>
    @else
        <h1>ini jika tidak login</h1>
    @endif
        <x-alert>
            <p>ini adalah alert</p>
        </x-alert>
@endsection
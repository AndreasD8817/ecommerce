@extends ('layout')
@section ('title', 'Contoh')
@section ('header',$judul)
@section ('content')
        <ol>
            @foreach ($products as $product)
                <li>{{ $product }}</li>
            @endforeachcoba
        </ol>
        <x-alert>
            <p>ini adalah alert</p>
        </x-alert>
@endsection
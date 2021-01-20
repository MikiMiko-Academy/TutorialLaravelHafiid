
@extends('layouts.main')

@section('content')
    
<div class="title m-b-md">
    
    <div class="title m-b-md">
        Menu List {{$name}}
    </div>
    
    <div class="links">
        @for ($i = 0; $i < count($menu); $i++)
            {{-- @if ($menu[$i]['price'] < 10000) --}}
                <a >{{ $menu[$i]['name'] }}</a>                                                    
            {{-- @endif --}}
        @endfor
        
    </div>
</div>                

@endsection


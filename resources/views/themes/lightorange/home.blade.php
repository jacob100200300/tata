@extends($theme.'layouts.app')
@section('title','Home')

@section('content')
    @push('banner')
        @include($theme.'partials.heroBanner')
    @endpush

@endsection

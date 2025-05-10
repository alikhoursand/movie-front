@extends('index')
@section('content')
    @include('components.hero')
    @include('components.banners')
    <div class="mt-16 max-w-screen-xl mx-auto">
        @component('components.sectionTitle',['title'=>'ویژه'])
        @endcomponent
        @component('components.productSlider',['products'=>[]]) @endcomponent
    </div>
    <div class="mt-12 max-w-screen-xl mx-auto px-2">
        @component('components.sectionTitle',['title'=>'بازیگران'])
        @endcomponent
        @include('components.categories')
    </div>
    <div class="mt-16 max-w-screen-xl mx-auto">
        @component('components.sectionTitle',['title'=>'جدیدترین فیلم‌ها'])
        @endcomponent
        @component('components.productSlider',['products'=>[]]) @endcomponent
    </div>
@endsection

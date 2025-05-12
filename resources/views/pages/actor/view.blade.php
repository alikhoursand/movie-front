@extends('index')
@section('content')
    <div class="mt-4 max-w-screen-xl mx-auto">
        <div class="p-2 ">
            <div class="flex flex-col md:flex-row flex-wrap items-center gap-2">
                <div
                    class="border-dashed w-fit border-2 border-neutral/30 hover:border-primary duration-200 rounded-full p-1">
                    <img src="{{asset('/a1.jpg')}}" class="aspect-square rounded-full max-w-[200px]" alt="">
                </div>
                <div class="text-center text-2xl mt-2 font-medium h-12">بازیگر</div>
            </div>
        </div>
        <div class="mt-4">
            @component('components.productSlider') @endcomponent
        </div>
    </div>
@endsection

@php
    $c = array(1,2,3,4,5,6,7,8,9,10);
@endphp

<div>
    <div class="swiper cat-swiper  w-full">
        <div class="swiper-wrapper  w-full">
            @foreach($c as $category)
                <div class="p-2 swiper-slide">
                    <a href="{{route('actor.view')}}">
                        <div
                            class="border-dashed border-2 border-neutral/30 hover:border-primary duration-200 rounded-full p-1">
                            <img src="{{asset('/a'.$category.'.jpg')}}" class="aspect-square rounded-full" alt="">
                        </div>
                        <div class="text-center text-sm md:text-base mt-2 font-medium h-12">بازیگر</div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination "></div>
    </div>
</div>


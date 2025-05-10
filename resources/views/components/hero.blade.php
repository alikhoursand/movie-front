<section class=" h-full mx-auto">
    <div id="hero-swiper" class="swiper hero hero-swiper w-full h-[calc(100%-500px)]" navigation="true">
        <div class="swiper-wrapper h-full w-full" navigation="true">
            @php
                $sliders = [
                    '/s1.jpg',
                    '/s2.jpg',
                    '/s3.jpg',
                    '/s4.jpg',
                    '/s5.jpg',
                ];
            @endphp
            @foreach ($sliders as $slider)
                <div class="swiper-slide overflow-hidden">
                    {{-- <a href="{{ $slider->button_link }}" class="w-full h-full"> --}}
                    {{-- h-[200px] md:h-[300px] lg:h-[450px] --}}
                    <img
                        class="slider-image w-full rounded-0 lg:rounded-box  object-center object-cover "
                        {{-- src="{{ asset('storage/' . $slider->image) }}" --}}
                        src="{{asset($slider)}}"
                        alt="{{ $slider }}">
                    {{-- </a> --}}
                </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination "></div>
    </div>

</section>

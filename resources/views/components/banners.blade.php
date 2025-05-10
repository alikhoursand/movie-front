<section class="max-w-screen-xl mx-auto lg:mt-8">

    @php
        $banners = [
            '/b1.jpg',
            '/b2.jpg',
            '/b3.jpg',
            '/b4.jpg',
        ];
    @endphp

    <div class="flex flex-wrap flex-col md:flex-row  items-center justify-between">
        @foreach($banners as $banner)
            <div class="basis-1/2  p-2">
                <a class="text-white block  overflow-hidden w-full rounded-box">
                    <img src="{{asset($banner)}}" alt="" class=" object-cover object-center  shadow-lg w-full ">
                </a>
            </div>
        @endforeach
    </div>


</section>

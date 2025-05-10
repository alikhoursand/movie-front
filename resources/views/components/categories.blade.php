<div class="flex flex-wrap items-center justify-center  ">
    @php
        $c = array(1,2,3,4,5,6);
    @endphp
    @foreach($c as $category)
        <div class="basis-1/2 xs:basis-1/3 sm:basis-1/3 md:basis-2/8 lg:basis-1/6 p-2">
            <a href="">
                <div
                    class="border-dashed border-2 border-neutral/30 hover:border-primary duration-200 rounded-full p-1">
                    <img src="{{asset('/a'.$category.'.jpg')}}" class="aspect-square rounded-full" alt="">
                </div>
                <div class="text-center text-sm md:text-base mt-2 font-medium h-12">بازیگر</div>
            </a>
        </div>
    @endforeach

</div>

<div class="mx-auto relative shadow-lg card bg-base-100 dark:bg-base-content/10 swiper-slide max-w-96 w-full">
    <figure>
        <a href="#" class="block w-full">
            <img src="{{ asset('/m' . $product.'.jpg') }}" class="object-cover w-full h-full" alt="{{ $product }}"/>
        </a>
    </figure>

    <div class="card-body p-4">
        <p class="text-sm text-center opacity-50 line-clamp-1 h-5 md:h-7">دسته بندی</p>
        <a href="#"
           class="card-title text-sm md:text-base text-center line-clamp-1 h-5 md:h-7">نام فیلم</a>
        <p class=" text-lg text-center text-base md:text-lg text-primary font-bold ">
            <span>{{number_format(123456789)}}</span>
            <span class="text-sm md:text-base font-medium">تومان</span>
        </p>
    </div>
</div>

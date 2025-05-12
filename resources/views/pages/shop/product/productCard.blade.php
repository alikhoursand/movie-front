<div class="mx-auto relative shadow-lg card bg-base-100 dark:bg-base-content/10 swiper-slide max-w-96 w-full">
    <figure class="">
        <a href="{{route('product.view')}}" class=" group  relative  block w-full">
            <div
                class="group-hover:top-0 top-full duration-300 w-full h-full bg-neutral/75 absolute flex items-center justify-center">
                <button class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        <path fill-rule="evenodd"
                              d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z"
                              clip-rule="evenodd"/>
                    </svg>
                    <span>مشاهده</span>
                </button>
            </div>
            <img src="{{ asset('/m' . $product.'.jpg') }}" class="object-cover w-full h-full" alt="{{ $product }}"/>
        </a>
    </figure>

    <div class="card-body p-4">
        <p class="text-sm text-right opacity-50 line-clamp-1 h-5 md:h-7">دسته بندی</p>
        <a href="{{route('product.view')}}"
           class="card-title text-sm md:text-base text-right line-clamp-1 h-5 md:h-7">نام فیلم</a>

    </div>
</div>

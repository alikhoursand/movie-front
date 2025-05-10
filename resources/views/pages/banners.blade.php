@extends('admin.index')
@section('content')
    @include('admin.components.pageTitle', ['page_title' => 'بنر و اسلایدر'])

    <div class="mb-3 text-2xl font-medium text-gray-900 dark:text-gray-200">اسلایدر ها</div>

    <div class="flex flex-wrap items-stretch">
        @foreach ($sliders as $slider)
            <div class=" text-gray-900 dark:text-white xl:basis-1/3 md:basis-1/2 basis-full p-2 text-sm md:text-base">
                <div class="h-full border rounded-lg overflow-hidden dark:border-white/10">
                    <img src="{{ asset('storage/' . $slider->image) }}" class="aspect-16-9 object-cover">
                    <div class=" p-2">


                        <div class="mt-5 h-9">
                            @if ($slider->button_link != '#')
                                <button
                                    class="bg-sky-500 text-white flex py-1 px-3 items-center lg:text-base text-sm rounded-lg">
                                    <span class="pt-1">{{ $slider->button_text }}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-4 lg:size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 19.5 8.25 12l7.5-7.5" />
                                    </svg>
                                </button>
                            @else
                                لینک نشده
                            @endif
                        </div>

                        <div class="flex items-center justify-between  pt-2  border-t border-gray-200 dark:border-gray-700">
                            <form action="{{ route('admin.banner.changeStatus', $slider->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                @if ($slider->status == 1)
                                    <button
                                        class="bg-green-500/15 text-sm dark:bg-green-600 dark:text-gray-200 text-green-800 px-3 py-2 font-semibold rounded-full">
                                        منتشر
                                        شده
                                    </button>
                                @else
                                    <button
                                        class="bg-red-500/15 text-sm dark:bg-red-800 text-red-800 dark:text-gray-200 px-3 py-2 font-semibold rounded-full">
                                        منتشر
                                        نشده
                                    </button>
                                @endif
                            </form>

                            <form action="{{ route('admin.banner.delete', $slider->id) }}" method="post"
                                onsubmit="return confirm('اسلاید حذف شود؟')">
                                @method('DELETE')
                                @csrf
                                <button
                                    class="bg-red-500 text-sm dark:bg-red-600 text-white dark:text-gray-200 px-3 py-2 font-semibold rounded-lg">
                                    حذف
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="relative mt-5 overflow-x-auto  rounded-xl  border border-gray-200 dark:border-gray-700">
        <div id="accordion-collapse" data-accordion="collapse">
            <h2 id="acc-create-h">
                <button type="button" aria-expanded="false"
                    class="flex bg-green-400 dark:bg-green-600 text-gray-900 items-center justify-between w-full  p-5 font-medium rtl:text-right    border-gray-200  focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400   gap-3"
                    data-active-classes="rounded-b-0" data-inactive-classes=" rounded-0"
                    data-accordion-target="#acc-create-b" aria-controls="acc-create-b">

                    <div class="flex items-center gap-x-1 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                        <span class=" font-medium">افزودن اسلایدر</span>
                    </div>
                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="acc-create-b" class="hidden" aria-labelledby="acc-create-h">
                <div class="p-5 border  border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <form action="{{ route('admin.banner.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="type" value="slider">
                        <div class="flex flex-row flex-wrap">

                            <div class="xl:basis-1/4 md:basis-full w-full p-2">
                                <label for="button_link"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">لینک</label>
                                <input type="text" id="button_link" name="button_link" value="{{ old('button_link') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                <div class="error text-xs md:text-sm text-red-500 mt-1">
                                    @error('button_link')
                                        {{ $message }}
                                    @enderror
                                </div>

                            </div>


                            <div class="xl:basis-1/2 md:basis-full w-full p-2">

                                <label for="image"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">عکس</label>
                                <input name="image"
                                    class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="image" type="file">
                                <div class="error text-xs md:text-sm text-red-500 mt-1">
                                    @error('image')
                                        {{ $message }}
                                    @enderror
                                </div>

                                <div class="mt-5">
                                    <img id="imagePreview" style="max-width:100% !important;aspect-ratio: 16/9 !important;"
                                        class=" object-contain" src="#" alt="Image Preview">
                                </div>
                            </div>
                        </div>


                        <button
                            class="flex rounded-lg text-white bg-green-500  hover:shadow-none duration-200 transition-all hover:bg-green-600 px-5 shadow-md shadow-green-500/50 dark:shadow-none py-3 mt-10">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            <span class="mr-2">ثبت اسلایدر</span>
                        </button>
                    </form>

                </div>
            </div>


        </div>
    </div>

    <hr class="my-5">

    <div class="mb-3 text-2xl font-medium text-gray-900 dark:text-gray-200">بنر ها</div>

    <div class="flex flex-wrap items-stretch">
        @foreach ($banners as $banner)
            <div class=" text-gray-900 dark:text-white xl:basis-1/3 md:basis-1/2 basis-full p-2 text-sm md:text-base">
                <div class="h-full border rounded-lg overflow-hidden dark:border-white/10">
                    <img src="{{ asset('storage/' . $banner->image) }}" class="aspect-16-9 object-cover">
                    <div class=" p-2">

                        <div class="mt-5 h-9">
                            @if ($banner->button_link != '#')
                                لینک: <a href="{{ $banner->button_link }}">{{ $banner->button_link }}</a>
                            @else
                                لینک نشده
                            @endif
                        </div>

                        <div class="flex items-center justify-between pt-2  border-t border-gray-200 dark:border-gray-700">
                            <form action="{{ route('admin.banner.changeStatus', $banner->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                @if ($banner->status == 1)
                                    <button
                                        class="bg-green-500/15 text-sm dark:bg-green-600 dark:text-gray-200 text-green-800 px-3 py-2 font-semibold rounded-full">
                                        منتشر
                                        شده
                                    </button>
                                @else
                                    <button
                                        class="bg-red-500/15 text-sm dark:bg-red-800 text-red-800 dark:text-gray-200 px-3 py-2 font-semibold rounded-full">
                                        منتشر
                                        نشده
                                    </button>
                                @endif
                            </form>


                            <form action="{{ route('admin.banner.delete', $banner->id) }}" method="post"
                                onsubmit="return confirm('بنر حذف شود؟')">
                                @method('DELETE')
                                @csrf
                                <button
                                    class="bg-red-500 text-sm dark:bg-red-600 text-white dark:text-gray-200 px-3 py-2 font-semibold rounded-lg">
                                    حذف
                                </button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="relative mt-5 overflow-x-auto  rounded-xl  border border-gray-200 dark:border-gray-700">
        <div id="accordion-collapse-b" data-accordion="collapse">
            <h2 id="acc-create-b-h">
                <button type="button" aria-expanded="false"
                    class="flex bg-green-400 dark:bg-green-600 text-gray-900 items-center justify-between w-full  p-5 font-medium rtl:text-right    border-gray-200  focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400   gap-3"
                    data-active-classes="rounded-b-0" data-inactive-classes=" rounded-0"
                    data-accordion-target="#acc-create-b-b" aria-controls="acc-create-b-b">

                    <div class="flex items-center gap-x-1 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                        <span class=" font-medium">افزودن بنر</span>
                    </div>
                    <svg data-accordion-icon class="w-3 h-3 text-white rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="acc-create-b-b" class="hidden" aria-labelledby="acc-create-b-h">
                <div class="p-5 border  border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <form action="{{ route('admin.banner.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="type" value="banner">
                        <div class="flex flex-row flex-wrap">

                            <div class="xl:basis-1/4  md:basis-full w-full p-2">
                                <label for="bbutton_link"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">لینک</label>
                                <input type="text" id="bbutton_link" name="button_link"
                                    value="{{ old('button_link') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                <div class="error text-xs md:text-sm text-red-500 mt-1">
                                    @error('button_link')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>


                            <div class="xl:basis-1/2  md:basis-full w-full p-2">
                                <label for="image2"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">عکس</label>
                                <input name="image"
                                    class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="image2" type="file">
                                <div class="error text-xs md:text-sm text-red-500 mt-1">
                                    @error('image')
                                        {{ $message }}
                                    @enderror
                                </div>

                                <div class="mt-5">
                                    <img id="imagePreview2" src="#" class="hidden" alt="Image Preview">
                                </div>
                            </div>
                        </div>


                        <button
                            class="flex rounded-lg text-white bg-green-500  hover:shadow-none duration-200 transition-all hover:bg-green-600 px-5 shadow-md shadow-green-500/50 dark:shadow-none py-3 mt-10">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            <span class="mr-2">ثبت اسلایدر</span>
                        </button>
                    </form>

                </div>
            </div>


        </div>
    </div>
@endsection

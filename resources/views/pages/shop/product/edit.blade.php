@extends('index')
@section('content')
    @include('components.pageTitle', [
'page_title' => 'ویرایش محصول',
'return' => 'shop.product.index',
    'breadcrumbs' => [
        [
            'title' => 'محصولات',
            'link' => 'shop.product.index',
        ],
        [
            'title' => 'ویرایش محصول',
        ],
    ],
])



    <div>
        <form action="{{ route('shop.product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex flex-row flex-wrap">
                <div class="xl:basis-1/4 lg:basis-1/3 md:basis-2/3 w-full p-2">
                    <label for="title" class="block mb-2">نام
                        محصول</label>
                    <input type="text" id="title" name="title" placeholder="نام محصول" value="{{ $product->title }}"
                           class="input focus:outline-none w-full">
                    <div class="error text-xs md:text-sm text-error mt-1">
                        @error('title')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="xl:basis-1/4 lg:basis-1/3 md:basis-2/3 w-full p-2">
                    <label for="code" class="block mb-2">کد
                        محصول</label>
                    <input type="text" value="{{  $product->code}}" id="code" name="code" placeholder="کد محصول"
                           class="input focus:outline-none w-full">
                    <div class="error text-xs md:text-sm text-error mt-1">
                        @error('code')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="flex flex-row flex-wrap">
                <div class="xl:basis-1/4 lg:basis-1/3 md:basis-1/2 w-full p-2">
                    <label for="category_id"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">دسته‌بندی</label>
                    <select id="category_id" name="category_id"
                            class="select focus:outline-none w-full">
                        <option selected value="">انتخاب کنید</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                    @if ($product->category_id == $category->id) selected @endif>
                                {{ $category->title }}</option>
                        @endforeach

                    </select>
                    <div class="error text-xs md:text-sm text-red-500 mt-1">
                        @error('category_id')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex-row flex-wrap flex">
                <div class="xl:basis-1/4 lg:basis-1/3 md:basis-1/2 basis-full p-2">
                    <label for="price"
                           class="block mb-2">قیمت</label>
                    <input type="number" id="price" name="price" placeholder="قیمت" value="{{$product->price}}"
                           class="input focus:outline-none w-full">

                    <div class="error text-xs md:text-sm text-red-500 mt-1">
                        @error('price')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="xl:basis-1/4 lg:basis-1/3 md:basis-1/2 w-full p-2">
                    <label for="off_price" class="block mb-2">قیمت
                        با
                        تخفیف</label>
                    <input type="number" id="off_price" name="off_price" placeholder="قیمت با تخفیف"
                           value="{{$product->off_price}}"
                           class="input focus:outline-none w-full">
                    <div class="error text-xs md:text-sm text-red-500 mt-1">
                        @error('off_price')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="p-2 mt-5 lg:w-2/3 w-full">
                <label for="desc" class="block mb-2">توضیحات
                </label>
                <textarea class="textarea focus:outline-none w-full" name="desc" id="desc"
                          placeholder="توضیحات محصول">{{$product->desc}}</textarea>
                <div class="error text-xs md:text-sm text-red-500 mt-1">
                    @error('desc')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <label class="inline-flex p-2 items-center cursor-pointer">
                <input type="checkbox" name="disable_comment" value="1" @if ($product->disable_comment == 0) checked
                       @endif class="sr-only peer" >
                <div
                    class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                </div>
                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">ثبت نظرات</span>
            </label>

            <div class="p-2 mt-5 xl:w-1/3 lg:w-1/2 md:w-2/3 w-full">

                <label for="image" class="block mb-2">عکس
                    شاخص</label>
                <input name="image"
                       class="file-input w-full max-w-[350px] block mt-2 focus:outline-none"
                       id="image" type="file">
                <div class="error text-xs md:text-sm text-red-500 mt-1">
                    @error('image')
                    {{ $message }}
                    @enderror
                </div>

                <div class="mt-5">
                    <img id="imagePreview" class="" src="{{ asset("storage/$product->image") }}"
                         alt="پیش نمایش">
                </div>
            </div>


            <button
                class="btn btn-success mt-10 btn-lg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                </svg>
                <span class="mr-2">ثبت محصول</span>
            </button>
        </form>
    </div>
@endsection

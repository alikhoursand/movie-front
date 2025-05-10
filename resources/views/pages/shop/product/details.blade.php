@extends('index')
@section('content')
    @include('components.pageTitle', [
        'page_title' => $product->title,
        'back' => true,
        'breadcrumbs' => [
            [
                'title' => 'فروشگاه',
                'link' => 'shop.index',
            ],
            [
                'title' => $product->title,
            ],
        ],
    ])

    <section>
        <div class=" mt-10 grid grid-cols-12 gap-4">
            <div class="col-span-12 xl:col-span-8  relative">
                <div class=" rounded-box overflow-hidden">
                    <img src="{{ asset('storage/' . $product->image) }}"
                         class="w-full aspect-video rounded-b-box object-cover " alt="">
                    <div class="p-4 rounded-box mt-4 bg-base-100">
                        <h3 class="block text-2xl font-medium">
                            {{ $product->title }}
                        </h3>
                        <div class="flex gap-x-1 opacity-75 mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                 stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"/>
                            </svg>
                            <p>دسته‌بندی : {{ $product->category->title }}</p>
                        </div>
                        <div class="mt-5 opacity-75">{{ $product->description }}</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 xl:col-span-4 flex flex-col gap-y-10 justify-between">
                <div
                    class="w-full bg-base-100 sticky top-4 rounded-box p-4 flex text-center justify-center items-center flex-col gap-y-5 ">
                    <div
                        class="text-lg font-bold dark:text-primary border-b-2 border-black/10 dark:border-white/10 w-full pb-4 ">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-7 inline">
                            <path fill-rule="evenodd"
                                  d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 0 0 4.25 22.5h15.5a1.875 1.875 0 0 0 1.865-2.071l-1.263-12a1.875 1.875 0 0 0-1.865-1.679H16.5V6a4.5 4.5 0 1 0-9 0ZM12 3a3 3 0 0 0-3 3v.75h6V6a3 3 0 0 0-3-3Zm-3 8.25a3 3 0 1 0 6 0v-.75a.75.75 0 0 1 1.5 0v.75a4.5 4.5 0 1 1-9 0v-.75a.75.75 0 0 1 1.5 0v.75Z"
                                  clip-rule="evenodd"/>
                        </svg>

                        <span>خرید این محصول</span>
                    </div>
                    <div
                        class="flex w-full items-center justify-center 2xs:justify-between sm:justify-center lg:justify-between sm:gap-x-5">
                        <div class="text-base text-right hidden 2xs:block">قیمت:</div>
                        <div class="flex items-end justify-center gap-x-1">
                            <div class="font-semibold">
                                @if ($product->off_price != 0)
                                    <div class="line-through text-error text-left">
                                        <span class="text-base sm:text-lg">
                                            {{ number_format($product->price) }}
                                        </span>
                                    </div>
                                @endif
                                <div class="text-xl sm:text-2xl text-primary dark:text-base-content">
                                    {{ $product->off_price != 0 ? number_format($product->off_price) : number_format($product->price) }}
                                </div>
                            </div>
                            <div class="text-lg sm:text-xl text-primary dark:text-base-content">تومان</div>
                        </div>
                    </div>

                    @if (!$in_cart)
                        <form action="{{ route('cart.store') }}" method="POST" class="w-full">
                            @csrf
                            <input type="hidden" name="type" value="product">
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <button type="submit" class="btn btn-primary  sm:max-w-ful w-full ">
                                <span id="cart-btn-text" class="flex items-center gap-x-1 justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                         class="size-6">
                        <path
                            d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"/>
                    </svg>
                                    <span>افزودن به سبد خرید</span>
                                </span>
                            </button>
                        </form>
                    @else
                        <button class="btn btn-primary btn-soft sm:max-w-full w-full ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                 stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/>
                            </svg>
                            <span>در سبد خرید موجود است</span>
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="mt-4">
        <div class="grid grid-cols-4 gap-4 ">
            <div class=" col-span-2 lg:col-span-1">
                <div class="bg-base-100    rounded-box p-4 flex flex-col items-center justify-center gap-y-4">
                    <div class="rounded-full bg-base-300 p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             class="size-6 md:size-7 inline text-primary">
                            <path
                                d="M11.644 1.59a.75.75 0 0 1 .712 0l9.75 5.25a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.712 0l-9.75-5.25a.75.75 0 0 1 0-1.32l9.75-5.25Z"/>
                            <path
                                d="m3.265 10.602 7.668 4.129a2.25 2.25 0 0 0 2.134 0l7.668-4.13 1.37.739a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.71 0l-9.75-5.25a.75.75 0 0 1 0-1.32l1.37-.738Z"/>
                            <path
                                d="m10.933 19.231-7.668-4.13-1.37.739a.75.75 0 0 0 0 1.32l9.75 5.25c.221.12.489.12.71 0l9.75-5.25a.75.75 0 0 0 0-1.32l-1.37-.738-7.668 4.13a2.25 2.25 0 0 1-2.134-.001Z"/>
                        </svg>
                    </div>
                    <span class="font-bold opacity-75 text-sm lg:text-base">سطح دوره</span>
                    @if ($product->level == 1)
                        <span class="font-bold text-sm lg:text-base">مقدماتی</span>
                    @elseif($product->level == 2)
                        <span class="font-bold text-sm lg:text-base">متوسط</span>
                    @else
                        <span class="font-bold text-sm lg:text-base">پیشرفته</span>
                    @endif
                </div>
            </div>
            <div class=" col-span-2 lg:col-span-1">
                <div class="bg-base-100  rounded-box p-4 flex flex-col items-center justify-center gap-y-4">
                    <div class="rounded-full bg-base-300 p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             class="size-6 md:size-7 inline text-primary">
                            <path fill-rule="evenodd"
                                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <span class="font-bold opacity-75 text-sm lg:text-base">مدت دوره</span>
                    <span class="font-bold text-sm lg:text-base">12 ساعت</span>
                </div>
            </div>
            <div class=" col-span-2 lg:col-span-1">
                <div class="bg-base-100 rounded-box p-4 flex flex-col items-center justify-center gap-y-4">
                    <div class="rounded-full bg-base-300 p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             class="size-6 md:size-7 inline text-primary">
                            <path
                                d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z"/>
                        </svg>
                    </div>
                    <span class="font-bold opacity-75 text-sm lg:text-base">شرکت کنندگان</span>
                    <span class="font-bold text-sm lg:text-base">12 نفر</span>
                </div>
            </div>
            <div class=" col-span-2 lg:col-span-1">
                <div class="bg-base-100 rounded-box p-4 flex flex-col items-center justify-center gap-y-4">
                    <div class="rounded-full bg-base-300 p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             class="size-6 md:size-7 inline text-primary">
                            <path
                                d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"/>
                            <path fill-rule="evenodd"
                                  d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <span class="font-bold opacity-75 text-sm lg:text-base">آخرین بروزرسانی</span>
                    <span class="font-bold text-sm lg:text-base">1403/02/17</span>
                </div>
            </div>
        </div>
    </section>
@endsection

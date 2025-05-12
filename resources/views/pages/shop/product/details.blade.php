@extends('index')
@section('content')
    <section>
        <div class="relative  h-[calc(100vh-80px)]">
            <div
                class="absolute h-full w-full bg-linear-65 from-neutral/0 to-neutral p-8 text-neutral-content flex items-end justify-start">
                <div class="flex flex-col gap-y-4">
                    <div class="text-xl font-bold"> نام فیلم</div>
                    <div>1404</div>
                    <div>
                        <button class="btn btn-primary">خرید فیلم</button>
                        <button class="btn  mr-2 btn-soft">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="size-5">
                                <path fill-rule="evenodd"
                                      d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z"
                                      clip-rule="evenodd"/>
                            </svg>
                            <span>پیش نمایش</span>
                        </button>
                    </div>
                    <div class="opacity-75 font-medium"> دسته بندی</div>
                    <div class="opacity-75 font-medium">
                        <span>ستارگان:</span>
                        <div>
                            <span>بازیگر 1</span>
                            <span>بازیگر 2</span>
                            <span>بازیگر 3</span>
                            <span>بازیگر 4</span>
                            <span>بازیگر 5</span>
                            <span>بازیگر 6</span>
                        </div>
                    </div>
                    <div class="opacity-75 font-medium">
                        <span>کارگردان:</span>
                        <span>نام تستی</span>
                    </div>
                    <div class="opacity-75 font-medium text-sm">
                        <span class="text-primary">تگ 1</span>,
                        <span class="text-primary">تگ 2</span>,
                        <span class="text-primary">تگ 3</span>,
                        <span class="text-primary">تگ 4</span>,
                        <span class="text-primary">تگ 5</span>,
                        <span class="text-primary">تگ 6</span>
                    </div>
                </div>
            </div>
            <img src="{{ asset('/s1.jpg') }}"
                 class="w-full h-[calc(100vh-80px)] object-cover " alt="">

        </div>
        <div class="max-w-screen-xl mx-auto p-2 mt-8">
            <div class="p-4 rounded-box bg-base-200">
                <h3 class="block text-2xl font-medium">
                    درباره نام فیلم
                </h3>

                <div class="mt-6 opacity-75">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                    تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در
                    شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها
                    شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی
                    ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط
                    سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                    اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.

                </div>
            </div>
            <div class="p-4 rounded-box mt-4 bg-base-200">
                <h3 class="block text-2xl font-medium">
                    بازیگران
                </h3>

                <div class="mt-6">
                    @component('components.categories') @endcomponent
                </div>
            </div>
            <div class="p-4 rounded-box mt-4 bg-base-200">
                <h3 class="block text-2xl font-medium">
                    نظرات کاربران
                </h3>

                <div class="mt-6 grid grid-cols-3 gap-8">
                    <div class="col-span-3 lg:col-span-1">


{{--                        <div role="alert" class="alert alert-warning alert-soft">--}}
{{--                            <span>برای ثبت نظر ابتدا وارد شوید</span>--}}
{{--                        </div>--}}

                        <div class="w-full ">
                            <textarea class="textarea w-full block mb-2" placeholder="نظر شما"></textarea>
                            <button class="btn btn-primary">ثبت نظر</button>
                        </div>
                    </div>
                    <div class="divider lg:hidden col-span-3"></div>
                    <div class="col-span-3 lg:col-span-2 divide-y">
                        @php
                            $w = array(1,2,3,4,5,6);
                        @endphp
                        @foreach($w as $q)
                            <div class="border-base-300 p-2">
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                         class="size-10">
                                        <path fill-rule="evenodd"
                                              d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                                              clip-rule="evenodd"/>
                                    </svg>

                                    <div class="opacity-75">نام کاربر</div>
                                </div>
                                <div class="mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 max-w-screen-xl mx-auto p-2">
            @component('components.sectionTitle',['title'=>'فیلم های مشابه'])
            @endcomponent
            @component('components.productSlider',['products'=>[]]) @endcomponent
        </div>
    </section>

@endsection

@extends('admin.index')
@section('content')
    @include('admin.components.pageTitle', ['page_title' => 'تنظیمات سایت'])


    <div class="grid gap-6 mb-6 grid-cols-4">
        <div class="col-span-4 text-lg font-semibold flex gap-x-2 text-green-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path
                    d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 0 1-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004ZM12.75 15.662v-2.824c.347.085.664.228.921.421.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 0 1-.921.42Z"/>
                <path fill-rule="evenodd"
                      d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v.816a3.836 3.836 0 0 0-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 0 1-.921-.421l-.879-.66a.75.75 0 0 0-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 0 0 1.5 0v-.81a4.124 4.124 0 0 0 1.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 0 0-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 0 0 .933-1.175l-.415-.33a3.836 3.836 0 0 0-1.719-.755V6Z"
                      clip-rule="evenodd"/>
            </svg>
            <span>هزینه ها</span>
        </div>
        <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-1">
            <form action="{{route('admin.settings.update.postCost')}}" method="post">
                @csrf
                <label for="post-cost" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">هزینه
                    ارسال</label>
                <input type="text" id="post-cost" name="post_cost" dir="ltr"
                       class="bg-gray-50 text-left border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       value="{{$settings['post_cost']}}"/>
                <button type="submit"
                        class="text-sm font-medium px-3 py-2 bg-blue-500 hover:bg-blue-500 shadow-md shadow-blue-500/50 dark:shadow-none hover:shadow-none duration-200 transition-all rounded-lg text-white mr-auto mt-3 block">
                    به
                    روز رسانی
                </button>
            </form>
        </div>
        <div class="col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-1">
            <form action="{{route('admin.settings.update.taxPercent')}}" method="post">
                @csrf
                <label for="tax" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">درصد
                    مالیات</label>
                <input type="text" id="tax" name="tax_percent"
                       dir="ltr"
                       class="bg-gray-50 text-left border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       value="{{$settings['tax_percent']}}"/>
                <button type="submit"
                        class="text-sm font-medium px-3 py-2 bg-blue-500 hover:bg-blue-500 shadow-md hover:shadow-none duration-200 transition-all shadow-blue-500/50 dark:shadow-none rounded-lg text-white mr-auto mt-3 block">
                    به
                    روز رسانی
                </button>
            </form>
        </div>
    </div>
    <hr class="my-10">
    <div class="">
        <form method="post" action="{{route('admin.settings.update.info')}}">
            @csrf
            <div class="grid gap-6 mb-6 grid-cols-4">
                <div class="col-span-4 text-lg font-semibold flex gap-x-2 text-sky-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd"
                              d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                              clip-rule="evenodd"/>
                    </svg>
                    <span>فوتر و راه های ارتباطی</span>
                </div>
                <div class="col-span-4 xl:col-span-2">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">توضیحات فوتر
                        سایت</label>
                    <textarea id="text" rows="4" name="desc"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    >{{$settings['footer_desc']}}</textarea>
                </div>

                <div class="col-span-4 xl:col-span-2">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">آدرس</label>
                    <textarea id="text" rows="4" name="address"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    >{{$settings['address']}}</textarea>
                </div>

                <div class="col-span-4 md:col-span-2 xl:col-span-1">
                    <label for="phone1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">شماره تماس
                        ۱</label>
                    <input type="text" id="phone1" name="phone1" dir="ltr"
                           class="text-left bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           value="{{$settings['phone1']}}"/>
                </div>
                <div class="col-span-4 md:col-span-2 xl:col-span-1">
                    <label for="phone2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">شماره تماس
                        ۲</label>
                    <input type="text" id="phone2" name="phone2" dir="ltr"
                           class="text-left bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           value="{{$settings['phone2']}}"/>
                </div>
                <div class="col-span-4 md:col-span-2 xl:col-span-1">
                    <label for="telegram"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">تلگرام</label>
                    <input type="text" id="telegram" name="telegram" dir="ltr"
                           class="text-left bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           value="{{$settings['telegram']}}"/>
                </div>
                <div class="col-span-4 md:col-span-2 xl:col-span-1">
                    <label for="instagram" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">اینستاگرام</label>
                    <input type="text" id="instagram" name="instagram" dir="ltr"
                           class="text-left bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           value="{{$settings['instagram']}}"/>
                </div>

                <div class="col-span-4 md:col-span-2 xl:col-span-1">
                    <label for="email"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ایمیل</label>
                    <input type="text" id="email" name="email" dir="ltr"
                           class="text-left bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           value="{{$settings['email']}}"/>
                </div>

            </div>

            <button type="submit"
                    class="text-sm hover:shadow-none duration-200 transition-all font-medium px-3 py-2 lg:px-4 lg:py-3 lg:text-base bg-blue-500 hover:bg-blue-500 shadow-md shadow-blue-500/50 dark:shadow-none rounded-lg text-white ml-auto mt-3 block">
                به
                روز رسانی
            </button>


        </form>
    </div>

@endsection

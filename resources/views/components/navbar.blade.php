<div class="navbar  bg-base-300 p-0 flex-wrap h-[80px]">
    <div class="basis-full flex justify-between items-center px-2 py-4  max-w-screen-xl mx-auto">
        <div class=" basis-1/2 lg:basis-1/4 gap-2 flex items-center">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h8m-8 6h16"/>
                    </svg>
                </div>
            </div>
            <a class="text-primary text-2xl lg:text-3xl font-bold">{{config('app.site_name')}}</a>
        </div>
        <div class=" hidden lg:flex justify-center align-center basis-5/12">
            <div class=" w-full">
                <div class="mx-auto relative max-w-96 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" class="size-6 opacity-50 absolute z-2 right-2 top-2.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
                    </svg>

                    <input type="search" class="input pr-8 focus:outline-none max-w-96 w-full" required
                           placeholder="جستجو..."/>
                </div>
            </div>
        </div>
        <div class="text-left basis-1/2 lg:basis-1/4  gap-2">
            <button id="light-btn" class="btn  btn-circle" onclick="setTheme('light')">
                {{--sun--}}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.75"
                     stroke="currentColor" class="size-5 lg:size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"/>
                </svg>
            </button>
            <button id="dark-btn" class="btn  btn-circle" onclick="setTheme('dark')">
                {{--moon--}}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.75"
                     stroke="currentColor" class="size-5 lg:size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z"/>
                </svg>
            </button>
            <button class="btn  btn-circle btn-primary btn-soft">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.75"
                     stroke="currentColor" class="size-5 lg:size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/>
                </svg>
            </button>
        </div>
    </div>
</div>

<div class="size-full container mx-auto max-sm:px-2">
    <div class="w-full h-full flex items-start flex-col gap-y-4">

        {{-- Feature Post --}}
        <div class="w-full h-1/3 flex items-center gap-x-2">
            <div class="h-full max-sm:w-full sm:w-1/2 relative">
                <div class="w-full h-auto absolute top-0 left-0 z-10 bg-[#11698E]/60 backdrop-blur-sm px-3 py-2">
                    <h3 class="text-[#F8F1F1] font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </h3>
                </div>
                <img class="absolute top-0 left-0 size-full object-cover object-center"
                    src="https://wallpapercave.com/wp/wp13066639.png" alt="feature-img">
            </div>
            <div class="h-full w-1/2 relative hidden sm:block">
                <div class="w-full h-auto absolute top-0 left-0 z-10 bg-[#11698E]/60 backdrop-blur-sm px-3 py-2">
                    <h3 class="text-[#F8F1F1] font-semibold">Lorem ipsum dolor, sit amet consectetur adipisicing elit. A
                        sequi voluptatum cum excepturi libero eaque quasi!</h3>
                </div>
                <img class="absolute top-0 left-0 size-full object-cover object-center"
                    src="https://wallpapercave.com/wp/wp14230856.jpg" alt="feature-img">
            </div>
        </div>

        {{-- Main Blog Section --}}
        <div class="w-full h-auto flex gap-x-8">
            <div class="h-auto w-full lg:w-3/4 flex items-center justify-center flex-col">
                <div class="w-full h-10 bg-[#11698E] text-[#F8F1F1] font-semibold rounded-t-md px-4 py-2">Latest Article</div>

                @for ($i = 0; $i < 2; $i++)
                    <div
                        class="w-full min-h-56 h-60 mb-3 flex items-center bg-[#142c414b] backdrop-blur-sm hover:bg-[#142c4198] transition-all ease-linear">
                        <div class="w-2/5 h-full">
                            <img class="size-full object-cover object-center"
                                src="https://wallpapercave.com/wp/wp14127553.jpg" alt="article-image">
                        </div>
                        <div class="w-3/5 h-full px-3 py-2 flex items-center justify-start flex-col gap-y-2">
                            <h4 class="text-xl font-semibold text-[#F8F1F1]">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Consequatur, illo!</h4>
                            <p class="w-full text-start text-slate-400">By: <span
                                    class="text-[#11698E]">enderman</span>, about 1hours ago</p>
                            <p class="w-full text-start text-slate-300 text-lg">Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. Deleniti harum accusamus sapiente fugit eum architecto? Repudiandae,
                                quae neque.</p>
                            <div class="w-full h-5 flex items-center gap-x-2 my-2">
                                <div class="px-3 py-1 bg-[#11698E] text-[#F8F1F1] rounded-md">Gaming</div>
                                <div class="px-3 py-1 bg-[#11698E] text-[#F8F1F1] rounded-md">Linux</div>
                                <div class="px-3 py-1 bg-[#11698E] text-[#F8F1F1] rounded-md">Wine</div>
                            </div>
                        </div>
                    </div>
                @endfor

            </div>
            <div class="h-auto w-1/4 items-center flex-col hidden lg:flex">
                <div class="w-full h-10 bg-[#11698E] text-[#F8F1F1] font-semibold rounded-t-md px-4 py-2">Popular this
                    week</div>
            </div>
        </div>
    </div>
</div>

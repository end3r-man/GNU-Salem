<div class="w-full h-auto container mx-auto max-sm:px-2 flex flex-col gap-y-2">

    {{-- Feature Blog --}}
    <section class="w-full min-h-80 h-80 flex items-center justify-center gap-x-2">
        <div class="max-sm:w-full sm:w-1/2 h-full relative">
            <div class="w-full h-auto absolute top-0 left-0 z-10 bg-[#11698E]/60 backdrop-blur-sm px-3 py-2">
                <h3 class="text-[#F8F1F1] font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </h3>
            </div>
            <img class="absolute top-0 left-0 size-full object-cover object-center"
                src="https://wallpapercave.com/wp/wp13066639.png" alt="feature-img">
        </div>
        <div class="w-1/2 h-full relative hidden sm:block">
            <div class="w-full h-auto absolute top-0 left-0 z-10 bg-[#11698E]/60 backdrop-blur-sm px-3 py-2">
                <h3 class="text-[#F8F1F1] font-semibold">Lorem ipsum dolor, sit amet consectetur adipisicing elit. A
                    sequi voluptatum cum excepturi libero eaque quasi!</h3>
            </div>
            <img class="absolute top-0 left-0 size-full object-cover object-center"
                src="https://wallpapercave.com/wp/wp14230856.jpg" alt="feature-img">
        </div>
    </section>

    {{-- Latest Blog --}}
    <section class="w-full h-auto flex gap-x-2">
        <div class="flex w-full lg:w-3/4 justify-start flex-col">
            <div class="w-full min-h-12 bg-[#11698E] rounded-t-md flex flex-col items-start justify-center px-4">
                <h4 class="text-white font-semibold text-lg">Latest Article</h4>
            </div>

            @for ($i = 0; $i < 10; $i++)
                <div class="w-full h-[480px] md:h-72 bg-slate-800 mb-4 flex items-center max-sm:flex-col md:flex-row hover:shadow-[0px_0px_1px_1px_#11698E]">
                    <div class="w-full md:w-2/5 h-1/2 md:h-full">
                        <img class="size-full object-cover" src="https://wallpapercave.com/wp/wp13057350.jpg" alt="blog-image">
                    </div>

                    <div class="w-full md:w-3/5 h-full flex flex-col gap-y-3 px-4">
                        <h3 class="text-2xl md:text-3xl text-[#11698E] max-sm:line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsum rerum dicta?</h3>
                        <p class="text-slate-400 text-sm">By <span class="text-[#11698E] font-semibold">Enderman</span>, about 1 hours ago</p>
                        <p class="text-slate-300 text-lg leading-6 line-clamp-2 md:text-xl">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id doloremque unde facilis numquam architecto suscipit delectus!</p>
                        <div class="w-full h-auto flex items-center gap-x-2">
                            <div class="px-1 md:px-4 py-1 bg-[#11698E] text-slate-300 rounded-md whitespace-nowrap">Gaming</div>
                            <div class="px-1 md:px-4 py-1 bg-[#11698E] text-slate-300 rounded-md whitespace-nowrap">Linux</div>
                            <div class="px-1 md:px-4 py-1 bg-[#11698E] text-slate-300 rounded-md whitespace-nowrap">Steam Deck</div>
                            <div class="px-1 md:px-4 py-1 bg-[#11698E] text-slate-300 rounded-md whitespace-nowrap">Proton</div>
                        </div>
                    </div>
                </div>
            @endfor

        </div>
        <div class="w-1/4 hidden lg:block">
            <div class="w-full h-12 bg-[#11698E] rounded-t-md flex flex-col items-start justify-center px-4">
                <h4 class="text-white font-semibold text-lg">Popular Article</h4>
            </div>
        </div>
    </section>
</div>

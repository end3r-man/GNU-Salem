<div class="w-full h-auto container mx-auto max-sm:px-2 flex flex-col gap-y-2">

    {{-- Feature Blog --}}
    <section class="w-full min-h-80 h-full flex items-center justify-center gap-x-2">
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

        </div>
        <div class="w-1/4 max-sm:hidden">
            <div class="w-full h-12 bg-[#11698E] rounded-t-md flex flex-col items-start justify-center px-4">
                <h4 class="text-white font-semibold text-lg">Popular Article</h4>
            </div>
        </div>
    </section>
</div>

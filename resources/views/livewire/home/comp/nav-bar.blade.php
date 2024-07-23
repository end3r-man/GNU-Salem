<div class="w-full min-h-12 h-16 bg-[#19456B] overflow-hidden">
    <div class="w-full h-full container mx-auto flex items-center justify-between px-4">
        <div class="w-auto h-full flex gap-x-5 items-center font-semibold">
            <img class="w-auto h-full object-cover" src="https://www.gamingonlinux.com/templates/default/images/logos/icon_mouse.png" alt="logo">
            <div class="h-full w-auto flex gap-x-6 items-center font-semibold text-slate-300 whitespace-nowrap">
                <x-button.nav-button url='/'>GNU-Salem</x-button.nav-button>
                <x-button.nav-button class="hidden md:block">Mailing List</x-button.nav-button>
                <x-button.nav-button class="hidden md:block">Contact Us</x-button.nav-button>
                <x-button.nav-button class="hidden md:block">Discord</x-button.nav-button>
            </div>
        </div>

        <div x-data="{ open: false }" class="w-auto h-full flex gap-x-5 items-center overflow-hidden">
            <input type="text" name="search" placeholder="Search..." class="px-4 py-1 rounded-md outline-none hidden lg:block">
            <iconify-icon @click="open = ! open" class="text-xl text-[#F8F1F1] block lg:hidden" icon="solar:rounded-magnifer-bold-duotone"></iconify-icon>
            
            <template x-if="open">
                <div class="w-full h-auto absolute top-[60px] left-0 bg-[#19456B] border-t border-white">
                    asd
                </div>
            </template>

            <img class="size-8 rounded-full" src="https://wallpapercave.com/wp/wp13386432.png" alt="profile">
        </div>
    </div>
</div>

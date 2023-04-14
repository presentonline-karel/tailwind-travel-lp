<nav class="Nav / py-20px px-24px">
    <div class="Container / flex justify-between items-center">

        <!-- Logo -->
        <a href="<?= $site->url() ?>" class="Logo-Container / w-[128px]" aria-label="Home">
            <img src="../../../assets/img/Travel-logo.svg" class="Logo / w-full" alt="Travel logo" loading="lazy" />
        </a>



        <!-- Sliding nav -->
        <div class="Sliding-Nav / translate-x-full w-full absolute top-0 flex flex-col justify-between pt-20px pb-32px bg-prim-100 px-24px h-full">

            <!-- Logo -->
            <a href="<?= $site->url() ?>" class="Logo-Container / " aria-label="Home">
                <img src="../../../assets/img/Travel-logo.svg" class="Logo /" alt="Travel logo" loading="lazy" />
            </a>

            <!-- Menu items -->
            <ul class="Nav-List / flex flex-col justify-center gap-40px items-center">
                <li class="List-Item /">
                    <a href="#" class="Link / font-headings text-32px font-semibold tracking-tighter text-prim-600">Home</a>
                </li>

                <li class="List-Item">
                    <a href="#" class="Link / font-headings text-32px font-semibold tracking-tighter text-neutrals-1000">About</a>
                </li>

                <li class="List-Item">
                    <a href="#" class="Link / font-headings text-32px font-semibold tracking-tighter text-neutrals-1000">Blog</a>
                </li>

                <li class="List-Item">
                    <a href="#" class="Link / font-headings text-32px font-semibold tracking-tighter text-neutrals-1000">Contact</a>
                </li>

                <li class="List-Item / pt-16px">
                    <a href="#" class="Link / btn--primary py-16px px-24px text-20px leading-5">Get started</a>
                </li>
            </ul>

            <!-- Language + theme switch -->
            <div class="Language-Theme-Switch / flex gap-12px items-center justify-center">
                <div class="Language-Switch / flex gap-[6px] items-center font-headings text-prim-600 font-semibold uppercase p-[10px] rounded-lg border-[0.4px] border-prim-200 bg-neutrals-100">
                    <i class="fa fa-globe / h-16px" aria-hidden="true"></i>
                    <span class="text-16px leading-4 font-headings font-semibold relative top-2px">EN</span>
                </div>

                <div class="Theme-Switch / p-[10px] rounded-lg border-[0.4px] border-prim-200 bg-neutrals-100 text-16px !leading-4">
                    <i class="fa fa-moon-o / !leading-4 text-prim-600 h-16px" aria-hidden="true"></i>
                </div>
            </div>
        </div>



        <!-- Burger -->
        <div class="Burger / flex flex-col gap-4px cursor-pointer">
            <div class="Burger-Line / w-24px h-[3px] bg-neutrals-900 rounded"></div>
            <div class="Burger-Line / w-24px h-[3px] bg-neutrals-900 rounded"></div>
        </div>
    </div>
</nav>
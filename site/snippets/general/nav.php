<nav class="Nav / py-20px px-24px bg-neutrals-100 / dark:bg-neutrals-1000 / sm:py-24px sm:px-48px">
    <div class="Container / flex justify-between items-center">

        <!-- Logo -->
        <a href="<?= $site->url() ?>" class="Logo-Container / w-[128px]" aria-label="Home">
            <img src="../../../assets/img/Travel-logo.svg" class="Logo / w-full / dark:hidden" alt="Travel logo" loading="lazy" />
            <img src="../../../assets/img/Travel-logo-white.svg" class="Logo / w-full hidden / dark:block" alt="Travel logo" loading="lazy" />
        </a>



        <!-- Sliding nav -->
        <div class="Sliding-Nav / translate-x-full w-full fixed top-0 flex flex-col justify-between pt-20px pb-32px bg-prim-100 px-24px h-full z-10 transition-all ease-in-out duration-300 / dark:bg-neutrals-1000 / sm:pt-24px sm:pb-40px sm:px-48px">

            <!-- Logo -->
            <a href="<?= $site->url() ?>" class="Logo-Container /" aria-label="Home">
                <img src="../../../assets/img/Travel-logo.svg" class="Logo / w-[128px] / dark:hidden" alt="Travel logo" loading="lazy" />
                <img src="../../../assets/img/Travel-logo-white.svg" class="Logo / w-[128px] hidden / dark:block" alt="Travel logo" loading="lazy" />
            </a>

            <!-- Burger cross -->
            <img src="../../../assets/img/Burger-cross-gray.svg" class="Burger-Cross / absolute top-[30px] right-24px / dark:hidden / sm:right-48px" alt="Burger icon" />
            <img src="../../../assets/img/Burger-cross-white.svg" class="Burger-Cross / absolute top-[30px] right-24px hidden / dark:block / sm:right-48px" alt="Burger icon" />

            <!-- Menu items -->
            <ul class="Nav-List / flex flex-col justify-center gap-40px items-center">
                <li class="List-Item /">
                    <a href="#" class="Link / font-headings text-32px font-semibold tracking-tighter text-prim-600 / dark:text-prim-300">Home</a>
                </li>

                <li class="List-Item">
                    <a href="#" class="Link / font-headings text-32px font-semibold tracking-tighter text-neutrals-1000 / dark:text-neutrals-100">About</a>
                </li>

                <li class="List-Item">
                    <a href="#" class="Link / font-headings text-32px font-semibold tracking-tighter text-neutrals-1000 / dark:text-neutrals-100">Blog</a>
                </li>

                <li class="List-Item">
                    <a href="#" class="Link / font-headings text-32px font-semibold tracking-tighter text-neutrals-1000 / dark:text-neutrals-100">Contact</a>
                </li>

                <li class="List-Item / pt-16px">
                    <a href="#" class="Link / btn--primary py-16px px-24px text-20px leading-5">Get started</a>
                </li>
            </ul>

            <!-- Language + theme switch -->
            <div class="Language-Theme-Switch / flex gap-12px items-center justify-center">
                <div class="Language-Switch / flex gap-[6px] items-center font-headings text-prim-600 font-semibold uppercase p-[10px] rounded-lg border-[0.4px] border-prim-200 bg-neutrals-100 / dark:border-prim-600 dark:bg-prim-600 dark:text-neutrals-100">
                    <i class="fa fa-globe / h-16px" aria-hidden="true"></i>
                    <span class="text-16px leading-4 font-headings font-semibold relative top-2px">EN</span>
                </div>

                <div class="Theme-Switch / p-[10px] rounded-lg border-[0.4px] border-prim-200 bg-neutrals-100 text-16px !leading-4 / dark:border-prim-600 dark:bg-prim-600 dark:text-neutrals-100">
                    <i class="fa fa-moon-o Moon / !leading-4 text-prim-600 h-16px / dark:!hidden" aria-hidden="true"></i>
                    <i class="fa fa-sun-o Sun / !leading-4 text-neutrals-100 h-16px !hidden / dark:!block" aria-hidden="true"></i>
                </div>
            </div>
        </div>



        <!-- Burger icon -->

        <img src="../../../assets/img/Burger-icon-gray.svg" class="Burger-Icon / absolute w-24px right-24px / dark:hidden / sm:right-48px" alt="Burger icon" />
        <img src="../../../assets/img/Burger-icon-white.svg" class="Burger-Icon / absolute w-24px right-24px hidden / dark:block / sm:right-48px" alt="Burger icon" />
    </div>
</nav>
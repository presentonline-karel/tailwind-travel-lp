<nav class="Nav / py-20px px-24px">
    <div class="Container / flex justify-between items-center">

        <!-- Logo -->
        <a href="<?= $site->url() ?>" class="Logo-Container / w-[128px]" aria-label="Home">
            <img src="../../../assets/img/Travel-logo.svg" class="Logo / w-full" alt="Travel logo" loading="lazy" />
        </a>



        <!-- Sliding nav -->
        <div class="Sliding-Nav / translate-x-full w-full absolute">

            <!-- Logo -->
            <a href="<?= $site->url() ?>" class="Logo-Container / " aria-label="Home">
                <img src="../../../assets/img/Travel-logo.svg" class="Logo /" alt="Travel logo" loading="lazy" />
            </a>

            <!-- Menu items -->
            <ul class="Nav-List /">
                <li class="List-Item /">
                    <a href="#" class="Link /">Home</a>
                </li>

                <li class="">
                    <a href="#" class="Link /">About</a>
                </li>

                <li class="">
                    <a href="#" class="Link /">Blog</a>
                </li>

                <li class="">
                    <a href="#" class="Link /">Contact</a>
                </li>

                <li class="">
                    <a href="#" class="Link /">Get started</a>
                </li>
            </ul>

            <!-- Language + theme switch -->
            <div class="Language-Theme-Switch /">
                <div class="Language-Switch /">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                    <span>EN</span>
                </div>

                <div class="Theme-Switch /">
                    <i class="fa fa-moon-o" aria-hidden="true"></i>
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
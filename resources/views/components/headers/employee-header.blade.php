<!-- ========== HEADER ========== -->
<header
    class="fixed top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-48 lg:z-61 w-full bg-red-700 text-sm py-2.5">
    <nav class="px-4 sm:px-5.5 flex basis-full items-center w-full mx-auto">
        <div class="w-full flex items-center gap-x-1.5">
            <h2 class="font-semibold text-xl text-white">
                EMPLOYEE
            </h2>
            <ul class="flex flex-row items-center gap-x-3 ms-auto">
                
                <li
                    class="inline-flex items-center gap-1.5 relative text-white pe-3 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:w-px after:h-3.5 after:bg-white after:rounded-full after:-translate-y-1/2 after:rotate-12 dark:text-neutral-200 dark:after:bg-neutral-700">    
                    <div class="h-8">
                        <!-- Account Dropdown -->
                        <div
                            class="hs-dropdown inline-flex [--strategy:absolute] [--auto-close:inside] [--placement:bottom-right] relative text-start">
                            <button id="no-border" type="button"
                                class="p-0.5 inline-flex shrink-0 items-center gap-x-3 text-start rounded-full hover:bg-red-600 focus:outline-hidden focus:bg-red-600 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                <img class="shrink-0 size-7 rounded-full border-2 border-white"
                                    src="https://images.unsplash.com/photo-1659482633369-9fe69af50bfb?ixlib=rb-4.0.3&auto=format&fit=facearea&facepad=3&w=320&h=320&q=80"
                                    alt="Avatar">
                            </button>

                            <!-- Account Dropdown -->
                            <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-60 transition-[opacity,margin] duration opacity-0 hidden z-20 bg-white border border-red-700 rounded-xl shadow-xl dark:bg-neutral-900 dark:border-neutral-700"
                                role="menu" aria-orientation="vertical" aria-labelledby="hs-dnad">
                                <div class="py-2 px-3.5">
                                    <span class="font-medium text-black dark:text-neutral-300">
                                        {{ Auth::user()->name }}
                                    </span>
                                    <p class="text-sm text-gray-600 dark:text-neutral-500">
                                        {{ Auth::user()->email }}
                                    </p>
                                </div>
                                <div class="px-4 py-2 border-t border-red-700 dark:border-neutral-800">
                                    <!-- Switch/Toggle -->
                                    <div class="flex flex-wrap justify-between items-center gap-2">
                                        <span
                                            class="flex-1 cursor-pointer text-sm text-black dark:text-neutral-400">Theme</span>
                                        <div
                                            class="p-0.5 inline-flex cursor-pointer bg-red-100 rounded-full dark:bg-neutral-800">
                                            <!-- Light -->
                                            <button type="button"
                                                class="size-7 flex justify-center items-center bg-white shadow-sm text-red-700 rounded-full"
                                                data-hs-theme-click-value="default">
                                                ☀️
                                                <span class="sr-only">Default (Light)</span>
                                            </button>
                                            <!-- Dark -->
                                            <button type="button"
                                                class="size-7 flex justify-center items-center text-white bg-black rounded-full"
                                                data-hs-theme-click-value="dark">
                                                🌙
                                                <span class="sr-only">Dark</span>
                                            </button>
                                            <!-- Auto -->
                                            <button type="button"
                                                class="size-7 flex justify-center items-center text-red-700 bg-white rounded-full"
                                                data-hs-theme-click-value="auto">
                                                ⚙️
                                                <span class="sr-only">Auto (System)</span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- End Switch/Toggle -->
                                </div>
                                <div class="p-1 border-t border-red-700 dark:border-neutral-800">
                                    <livewire:auth::logout />
                                </div>
                            </div>
                            <!-- End Account Dropdown -->
                        </div>
                        <!-- End Account Dropdown -->
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- ========== END HEADER ========== -->

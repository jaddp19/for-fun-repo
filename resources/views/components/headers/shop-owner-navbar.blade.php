<div>
    <!-- ========== MAIN SIDEBAR ========== -->
    <!-- Sidebar -->
    <div id="hs-pro-sidebar"
        class="hs-overlay [--body-scroll:true] lg:[--overlay-backdrop:false] [--is-layout-affect:true] [--opened:lg] [--auto-close:lg]
        hs-overlay-open:translate-x-0 lg:hs-overlay-layout-open:translate-x-0
        -translate-x-full transition-all duration-300 transform
        w-60
        hidden
        fixed inset-y-0 z-60 start-0
        bg-red-700
        lg:block lg:-translate-x-full lg:end-auto lg:bottom-0"
        role="dialog" tabindex="-1" aria-label="Sidebar">
        <div id="text" class="lg:pt-13 relative flex flex-col h-full max-h-full">
            <!-- Body -->
            <nav
                class="p-3 size-full flex flex-col overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-200 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                <div class="lg:hidden mb-2 flex items-center justify-between">
                    <button type="button"
                        class="flex items-center gap-x-1.5 py-2 px-2.5 font-medium text-xs bg-black text-white rounded-lg focus:outline-hidden disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:text-black">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z" />
                        </svg>
                        Ask AI
                    </button>

                    <!-- Sidebar Toggle -->
                    <button type="button"
                        class="p-1.5 size-7.5 inline-flex items-center gap-x-1 text-xs rounded-md text-gray-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden dark:text-neutral-500"
                        aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-pro-sidebar"
                        data-hs-overlay="#hs-pro-sidebar">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                        <span class="sr-only">Sidebar Toggle</span>
                    </button>
                    <!-- End Sidebar Toggle -->
                </div>

                <button type="button"
                    class="p-1.5 ps-2.5 w-full inline-flex items-center gap-x-2 text-sm rounded-lg bg-white border border-gray-200 text-gray-600 shadow-xs hover:border-gray-300 focus:outline-hidden focus:border-gray-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:border-neutral-600 dark:focus:border-neutral-600"
                    aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-pro-cmsssm"
                    data-hs-overlay="#hs-pro-cmsssm">

                    <!-- Fixed alignment -->
                    <input type="text"
                        placeholder="Search"
                        class="flex-1 bg-transparent border-none focus:ring-0 text-sm text-gray-700" />
                </button>


                <div
                    class="pt-3 mt-3 flex flex-col border-t first:border-t-0 first:pt-0 first:mt-0">
                    <span class="block ps-2.5 mb-2 font-medium text-xs uppercase text-white">
                        Home
                    </span>

                    <!-- List -->
                    <ul class="flex flex-col gap-y-1">
                        <li>
                            <a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm text-neutral-200 rounded-lg hover:bg-red-500 focus:outline-hidden"
                                wire:current="bg-red-500"
                                href="/shop-owner/dashboard">
                                Dashboard  
                            </a>
                        </li>
                    </ul>
                    <!-- End List -->
                </div>

                <div
                    class="pt-3 mt-3 flex flex-col border-t first:border-t-0 first:pt-0 first:mt-0">
                    <span class="block ps-2.5 mb-2 font-medium text-xs uppercase text-white">
                        Employee Management
                    </span>

                    <!-- List -->
                    <ul class="flex flex-col gap-y-1">
                        <li>
                            <a class="w-full flex items-center gap-x-2 py-2 px-2.5 text-sm text-neutral-200 rounded-lg hover:bg-red-500 focus:outline-hidden"
                                wire:current="bg-red-500"
                                href="/shop-owner/employee">
                                View Employees
                            </a>
                        </li>
                    </ul>
                    <!-- End List -->
                </div>
                
            </nav>
            <!-- End Body -->
        </div>
    </div>
    <!-- End Sidebar -->
    <!-- ========== END MAIN SIDEBAR ========== -->
    <script>
        document.addEventListener("DOMContentLoaded", function ()
        {
            const searchInput = document.querySelector('#hs-pro-sidebar input[type="text"]');
            const links = document.querySelectorAll('#hs-pro-sidebar nav a');

            searchInput.addEventListener("input", function ()
            {
                const query = this.value.toLowerCase().trim();

                links.forEach(link =>
                {
                    const text = link.textContent.toLowerCase();
                    if (text.includes(query))
                    {
                        link.parentElement.style.display = "";
                    } else {
                        link.parentElement.style.display = "none";
                    }
                });
            });
        });
    </script>
</div>

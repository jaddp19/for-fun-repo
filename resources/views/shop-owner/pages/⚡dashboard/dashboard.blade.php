<div>
    <!-- Content -->
    <div class="w-full">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
            <!-- Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
                
                <!-- Total Products Card -->
                <div class="flex flex-col justify-center bg-neutral-300 dark:bg-neutral-800 border border-red-700 shadow-2xs rounded-xl">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center justify-between">
                            <p class="text-xs uppercase dark:text-white text-black">
                                Total Products
                            </p>
                        </div>
                        <div class="mt-1 flex items-center justify-between">
                            <h3 class="text-xl sm:text-2xl font-medium dark:text-white text-black">
                                {{ $totalProducts }}
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Total Laptops Card -->
                <div class="flex flex-col justify-center bg-neutral-300 dark:bg-neutral-800 border border-red-700 shadow-2xs rounded-xl">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center justify-between">
                            <p class="text-xs uppercase dark:text-white text-black">
                                Total Laptops
                            </p>
                        </div>
                        <div class="mt-1 flex items-center justify-between">
                            <h3 class="text-xl sm:text-2xl font-medium dark:text-white text-black">
                                {{ $totalLaptops }}
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Total Parts Card -->
                <div class="flex flex-col justify-center bg-neutral-300 dark:bg-neutral-800 border border-red-700 shadow-2xs rounded-xl">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center justify-between">
                            <p class="text-xs uppercase dark:text-white text-black">
                                Total Parts
                            </p>
                        </div>
                        <div class="mt-1 flex items-center justify-between">
                            <h3 class="text-xl sm:text-2xl font-medium dark:text-white text-black">
                                {{ $totalParts }}
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Total Employees Card -->
                <div class="flex flex-col justify-center bg-neutral-300 dark:bg-neutral-800 border border-red-700 shadow-2xs rounded-xl">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center justify-between">
                            <p class="text-xs uppercase dark:text-white text-black">
                                Total Employees
                            </p>
                        </div>
                        <div class="mt-1 flex items-center justify-between">
                            <h3 class="text-xl sm:text-2xl font-medium dark:text-white text-black">
                                {{ $totalEmployees }}
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Grid -->
            
            <!-- Charts Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                <!-- Income Card -->
                <div class="p-4 md:p-5 min-h-102.5 flex flex-col bg-neutral-300 dark:bg-neutral-800 border border-red-700 shadow-2xs rounded-xl">
                    <div class="flex flex-wrap justify-between items-center gap-2">
                        <div>
                            <h2 class="text-sm dark:text-white text-black">
                                Income
                            </h2>
                            <p class="text-xl sm:text-2xl font-medium dark:text-white text-black">
                                ₱0.00
                            </p>
                        </div>
                    </div>
                    <div id="hs-multiple-bar-charts"></div>
                </div>

                <!-- Visitors Card -->
                <div class="p-4 md:p-5 min-h-102.5 flex flex-col bg-neutral-300 dark:bg-neutral-800 border border-red-700 shadow-2xs rounded-xl">
                    <div class="flex flex-wrap justify-between items-center gap-2">
                        <div>
                            <h2 class="text-sm dark:text-white text-black">
                                Visitors
                            </h2>
                            <p class="text-xl sm:text-2xl font-medium dark:text-white text-black">
                                0
                            </p>
                        </div>
                    </div>
                    <div id="hs-single-area-chart"></div>
                </div>
            </div>
            <!-- End Charts Grid -->
        </div>
    </div>
</div>

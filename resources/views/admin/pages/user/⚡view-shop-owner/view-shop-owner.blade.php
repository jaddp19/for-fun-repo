<div>
    <!-- Table Section -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="flex flex-col rounded-xl border border-red-700 p-4 sm:p-6 lg:p-8 bg-neutral-300 dark:bg-neutral-800 shadow-2xs">
            <div class="overflow-x-auto [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-md bg-neutral-300 dark:bg-neutral-800">
                <div class="min-w-full inline-block align-middle">
                    <div
                        class="rounded-xl shadow-2xs overflow-hidden">
                        <!-- Header -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-red-700 dark:border-neutral-700">
                            <div>
                                <h2 class="text-xl font-semibold text-black dark:text-white">
                                    All Owners
                                </h2>
                                <p class="text-sm text-black dark:text-white">
                                    Manage all owners
                                </p>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    <a class="py-2 px-3 inline-flex items-center gap-x-2 bg-red-700 text-sm font-medium rounded-lg border border-red-700 text-white shadow-2xs hover:bg-red-600 focus:bg-red-600"
                                        href="#">
                                        View all
                                    </a>
                                    @can('create', App\Models\User::class)
                                    <a class="py-2 px-3 inline-flex items-center gap-x-2 bg-red-700 text-sm font-medium rounded-lg border border-transparent text-white hover:bg-red-600 focus:bg-red-600"
                                        href="{{ route('admin.user.create') }}">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14" />
                                            <path d="M12 5v14" />
                                        </svg>
                                        Add Owner
                                    </a>
                                    @endcan
                                </div>
                            </div>
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <table class="min-w-full text-xs sm:text-sm">
                            <thead class="bg-red-700">
                                <tr>
                                    <th class="ps-2 sm:ps-6 py-3 text-start font-semibold uppercase text-white">
                                        ID
                                    </th>
                                    <th class="ps-2 sm:ps-6 py-3 text-start font-semibold uppercase text-white">
                                        Name
                                    </th>
                                    <th class="hidden sm:table-cell px-2 sm:px-6 py-3 text-start font-semibold uppercase text-white">
                                        Email
                                    </th>
                                    <th class="hidden sm:table-cell px-2 sm:px-6 py-3 text-start font-semibold uppercase text-white">
                                        Role
                                    </th>
                                    <th class="hidden md:table-cell px-2 sm:px-6 py-3 text-start font-semibold uppercase text-white">
                                        Created
                                    </th>
                                    <th class="px-2 sm:px-6 py-3 text-start text-white">Actions</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-600">
                                @forelse ($this->users as $user)
                                    <tr>
                                        <td class="px-2 sm:px-6 py-3">
                                            <span class="block font-semibold text-black dark:text-white">
                                                OWNER{{ ($user->id) }}
                                            </span>
                                        </td>
                                        <td class="px-2 sm:px-6 py-3">
                                            <span class="block font-semibold text-black dark:text-white">
                                                {{ ($user->name) }}
                                            </span>
                                        </td>
                                        <td class="hidden sm:table-cell px-2 sm:px-6 py-3">
                                            <span class="block text-black dark:text-white">
                                                {{ $user->email }}
                                            </span>
                                        </td>
                                        <td class="hidden sm:table-cell px-6 py-3">
                                            <span class="block text-sm text-black dark:text-white">
                                                {{ \Illuminate\Support\Str::ucfirst($user->roles->pluck('name')->join(', ') ?: 'No role') }}
                                            </span>
                                        </td>
                                        <td class="hidden md:table-cell px-2 sm:px-6 py-3">
                                            <span class="text-black dark:text-white">
                                                {{ $user->created_at->diffForHumans() }}
                                            </span>
                                        </td>
                                        <td class="px-2 sm:px-6 py-1.5 text-start">
                                            @can('update', $user)
                                            <a href="{{ route('admin.user.edit', $user->id) }}"
                                            class="text-black dark:text-white hover:underline">
                                                Edit
                                            </a>
                                            @endcan
                                            @can('delete', $user)
                                            <button wire:click="delete({{ $user->id }})"
                                            class="text-red-700 hover:underline">
                                                Delete
                                            </button>
                                            @endcan
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-2 sm:px-6 py-4 text-center text-black dark:text-white">
                                            No users found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <!-- End Table -->

                        <!-- Footer -->
                        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-red-700">
                            <div>
                                <p class="text-sm text-black dark:text-white">
                                    <span class="font-semibold text-black dark:text-white">
                                        {{ $this->users->total() }}
                                    </span>
                                    results
                                </p>  
                            </div>
                            <div>
                                <div class="inline-flex gap-x-2">
                                    {{-- Prev Button --}}
                                    @if($this->users->onFirstPage()) 
                                        <button disabled
                                            class="px-4 py-2 inline-flex items-center justify-center gap-x-1 text-sm font-medium rounded-md border bg-red-700 dark:bg-black text-gray-400 cursor-not-allowed">
                                            <svg class="w-4 h-4 flex-shrink-0 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor">
                                                <path d="M12 15l-6-6 6-6" />
                                            </svg>
                                            Prev
                                        </button>
                                    @else
                                        <button wire:click="previousPage"
                                            class="px-4 py-2 inline-flex items-center justify-center gap-x-1 text-sm font-medium rounded-md border bg-red-700 hover:bg-black transition-all duration-200 text-black dark:text-white">
                                            <svg class="w-4 h-4 flex-shrink-0 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor">
                                                <path d="M12 15l-6-6 6-6" />
                                            </svg>
                                            Prev
                                        </button>
                                    @endif

                                    {{-- Next Button --}}
                                    @if($this->users->hasMorePages())
                                        <button wire:click="nextPage"
                                            class="px-4 py-2 inline-flex items-center justify-center gap-x-0 text-sm font-medium rounded-md border bg-red-700 hover:bg-black transition-all duration-200 text-black dark:text-white">
                                            Next
                                            <svg class="w-4 h-4 flex-shrink-0 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor">
                                                <path d="M9 3l6 6-6 6" />
                                            </svg>
                                        </button>
                                    @else
                                        <button disabled
                                            class="px-4 py-2 inline-flex items-center justify-center gap-x-0 text-sm font-medium rounded-md border bg-red-700 dark:bg-black text-gray-400 cursor-not-allowed">
                                            Next
                                            <svg class="w-4 h-4 flex-shrink-0 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor">
                                                <path d="M9 3l6 6-6 6" />
                                            </svg>
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->
</div>

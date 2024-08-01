<x-app-layout>

    <x-slot name="title">
        {{ __('Members') }}
    </x-slot>

    <x-theme-switcher />
    <div
        class="enigma py-5 px-5 md:py-0 sm:px-8 md:px-0 before:content-[''] before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 dark:before:from-darkmode-800 dark:before:to-darkmode-800 md:before:bg-none md:bg-slate-200 md:dark:bg-darkmode-800 before:fixed before:inset-0 before:z-[-1]">
        <x-top-nav />
        <div class="flex overflow-hidden">
            <x-side-nav />

            <!-- BEGIN: Content -->
            <div
                class="max-w-full md:max-w-none rounded-[30px] md:rounded-none px-4 md:px-[22px] min-w-0 min-h-screen bg-slate-100 flex-1 md:pt-20 pb-10 mt-5 md:mt-1 relative dark:bg-darkmode-700 before:content-[''] before:w-full before:h-px before:block">
                <h2 class="intro-y mt-10 text-lg font-medium">Members List Layout</h2>
                <div class="mt-5 grid grid-cols-12 gap-6">
                    <div class="intro-y col-span-12 mt-2 flex flex-wrap items-center sm:flex-nowrap">
                        <a href="{{ route('admin.members.create') }}" data-tw-merge=""
                            class="transition duration-200 border inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mr-2 shadow-md">Add
                            New Member</a>
                        <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative"><button
                                data-tw-merge="" data-tw-toggle="dropdown" aria-expanded="false"
                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed !box px-2"><span
                                    class="flex h-5 w-5 items-center justify-center">
                                    <i data-tw-merge="" data-lucide="plus" class="stroke-1.5 h-4 w-4"></i>
                                </span></button>
                            <div data-transition="" data-selector=".show"
                                data-enter="transition-all ease-linear duration-150"
                                data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                data-leave="transition-all ease-linear duration-150"
                                data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                class="dropdown-menu absolute z-[9999] hidden">
                                <div data-tw-merge=""
                                    class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                    <a
                                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                            data-tw-merge="" data-lucide="printer" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                        Print</a>
                                    <a
                                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                            data-tw-merge="" data-lucide="file-text"
                                            class="stroke-1.5 mr-2 h-4 w-4"></i>
                                        Export to
                                        Excel</a>
                                    <a
                                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                            data-tw-merge="" data-lucide="file-text"
                                            class="stroke-1.5 mr-2 h-4 w-4"></i>
                                        Export to
                                        PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="mx-auto hidden text-slate-500 md:block">
                            Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} of {{ $users->total() }} entries
                        </div>
                        <div class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto md:ml-0">
                            <div class="relative w-56 text-slate-500">
                                <input data-tw-merge="" type="text" placeholder="Search..."
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 !box w-56 pr-10">
                                <i data-tw-merge="" data-lucide="search"
                                    class="stroke-1.5 absolute inset-y-0 right-0 my-auto mr-3 h-4 w-4"></i>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: Data List -->
                    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                        <table data-tw-merge="" class="w-full text-left -mt-2 border-separate border-spacing-y-[10px]">
                            <thead data-tw-merge="" class="">
                                <tr data-tw-merge="" class="">
                                    <th data-tw-merge=""
                                        class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                        NO
                                    </th>
                                    <th data-tw-merge=""
                                        class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                        USERNAME
                                    </th>
                                    <th data-tw-merge=""
                                        class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                        EMAIL
                                    </th>
                                    <th data-tw-merge=""
                                        class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                        ACTIONS
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr data-tw-merge="" class="intro-x">
                                    <td data-tw-merge=""
                                        class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap font-medium" >
                                            {{ $loop->iteration }}
                                        </div>
                                    </td>
                                    <td data-tw-merge=""
                                        class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap font-medium" >
                                            {{ $user->username }}
                                        </div>
                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                            {{ ucfirst($user->role) }}
                                        </div>
                                    </td>
                                    <td data-tw-merge=""
                                        class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        {{ $user->email }}
                                    </td>
                                    <td data-tw-merge=""
                                        class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 text-center shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        <div class="whitespace-nowrap flex items-center justify-center">
                                            <a class="flex items-center mr-3" href="{{ route('admin.members.edit', $user->id) }}">
                                                <i data-tw-merge="" data-lucide="check-square"
                                                    class="mr-1 w-4 h-4"></i>
                                                Edit
                                            </a>
                                            <form action="{{ route('admin.members.destroy', $user->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="flex items-center text-danger bg-transparent border-0 cursor-pointer">
                                                    <i data-tw-merge="" data-lucide="trash-2" class="mr-1 w-4 h-4"></i>
                                                    Delete
                                                </button>
                                            </form>                                            
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END: Data List -->
                    <!-- BEGIN: Pagination -->
                    {{ $users->links('vendor.pagination.custom') }}
                    <!-- END: Pagination -->
                </div>
            </div>
            <!-- END: Content -->
        </div>
    </div>

</x-app-layout>

<x-app-layout>

    <x-slot name="title">
        {{ __('Members') }}
    </x-slot>

    <x-theme-switcher />
    <div class="enigma py-5 px-5 md:py-0 sm:px-8 md:px-0 before:content-[''] before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 dark:before:from-darkmode-800 dark:before:to-darkmode-800 md:before:bg-none md:bg-slate-200 md:dark:bg-darkmode-800 before:fixed before:inset-0 before:z-[-1]">
        <x-top-nav />
        <div class="flex overflow-hidden">
            <x-side-nav />

            <div class="max-w-full md:max-w-none rounded-[30px] md:rounded-none px-4 md:px-[22px] min-w-0 min-h-screen bg-slate-100 flex-1 md:pt-20 pb-10 mt-5 md:mt-1 relative dark:bg-darkmode-700 before:content-[''] before:w-full before:h-px before:block">
                <div class="intro-y mt-8 flex items-center">
                    <h2 class="mr-auto text-lg font-medium">Create New Member</h2>
                </div>
                <div class="mt-5 grid grid-cols-12 gap-6">
                    <div class="intro-y col-span-12 lg:col-span-10">
                        <!-- BEGIN: Form Layout -->
                        <div class="intro-y box p-5">
                            <form action="{{ route('admin.members.store') }}" method="POST">
                                @csrf
                                <div class="grid-cols-2 gap-2 sm:grid">
                                    <div>
                                        <label for="username" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                            Username
                                        </label>
                                        <input id="username" name="username" type="text" placeholder="Input your username" value="{{ old('username') }}" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                                        @error('username')
                                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mt-3 lg:mt-0">
                                        <label for="email" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                            Email
                                        </label>
                                        <input id="email" name="email" type="email" placeholder="Input your email" value="{{ old('email') }}" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                                        @error('email')
                                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="grid-cols-2 gap-2 sm:grid mt-3">
                                    <div>
                                        <label for="role" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                            Role
                                        </label>
                                        <select id="role" name="role" class="form-select disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                                            <option value="" disabled selected>Select Role</option>
                                            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                                            <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                                            <option value="developer" {{ old('role') == 'developer' ? 'selected' : '' }}>Developer</option>
                                        </select>
                                        @error('role')
                                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mt-3 lg:mt-0">
                                        <label for="password" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                            Password
                                        </label>
                                        <input id="password" name="password" type="password" placeholder="Input your password" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                                        @error('password')
                                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mt-5 text-right">
                                    <a href="{{ route('admin.members.index') }}" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 mr-1 w-24">Cancel</a>
                                    <button type="submit" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-24">Save</button>
                                </div>
                            </form>
                        </div>
                        <!-- END: Form Layout -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

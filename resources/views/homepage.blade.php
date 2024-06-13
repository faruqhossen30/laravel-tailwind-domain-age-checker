@extends('layouts.app')

@section('content')
    <section class="min-h-screen px-3 lg:px-0">
        @include('inc.search-section')
        <div class="container mx-auto py-10">
            <div class="grid grid-cols-12 gap-5">
                <!-- Icon Block -->
                <div class="col-span-12 lg:col-span-4 rounded-lg border space-y-5 dark:border-gray-800 p-5 shadow-lg text-center">
                    <div class="flex justify-center items-center size-12 bg-gray-50 border border-gray-200 rounded-full mx-auto dark:bg-slate-800 dark:border-neutral-700">
                        <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="10" height="14" x="3" y="8" rx="2" />
                            <path d="M5 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2h-2.4" />
                            <path d="M8 18h.01" />
                        </svg>
                    </div>
                    <div class="mt-3 space-y-5">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-400">Super Fast Loading
                        </h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and
                        </p>
                    </div>
                </div>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <div class="col-span-12 lg:col-span-4 rounded-lg border space-y-5 dark:border-gray-800 p-5 shadow-lg text-center">
                    <div class="flex justify-center items-center size-12 bg-gray-50 border border-gray-200 rounded-full mx-auto dark:bg-slate-800 dark:border-neutral-700">
                        {{-- <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 7h-9" />
                            <path d="M14 17H5" />
                            <circle cx="17" cy="17" r="3" />
                            <circle cx="7" cy="7" r="3" />
                        </svg> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-600 dark:text-neutral-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                          </svg>

                    </div>
                    <div class="mt-3 space-y-5">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-400">100% Free Tools </h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and </p>
                    </div>
                </div>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <div class="col-span-12 lg:col-span-4 rounded-lg border space-y-5 dark:border-gray-800 p-5 shadow-lg text-center">
                    <div class="flex justify-center items-center size-12 bg-gray-50 border border-gray-200 rounded-full mx-auto dark:bg-slate-800 dark:border-neutral-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-600 dark:text-neutral-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                          </svg>

                    </div>
                    <div class="mt-3 space-y-5">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-400">User Friendly </h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and </p>
                    </div>
                </div>
                <!-- End Icon Block -->
            </div>
        </div>
    </section>
@endsection

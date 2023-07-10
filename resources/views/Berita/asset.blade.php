<!DOCTYPE html>
<html lang="en">

{{--  <!-- Mirrored from lineone.piniastudio.com/pages-blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 04:16:41 GMT -->  --}}
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <title>Lineone - Blog Details</title>
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <!- - CSS Assets -->
        <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}" />
        <!-- Javascript Assets -->
        <script src="{{ asset('admin/js/app.js') }}" defer></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com/" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
            rel="stylesheet" />
        <script>
            /**
             * THIS SCRIPT REQUIRED FOR PREVENT FLICKERING IN SOME BROWSERS
             */
            localStorage.getItem("_x_darkMode_on") === "true" &&
                document.documentElement.classList.add("dark");
        </script>
</head>

<body x-data class="is-header-blur" x-bind="$store.global.documentBody">
    <!-- App preloader-->
    {{-- <div
      class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900"
    >
      <div class="app-preloader-inner relative inline-block h-48 w-48"></div>
    </div> --}}
    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
        <!-- Sidebar -->
        <!-- App Header Wrapper-->
        <!-- Mobile Searchbar -->
        <div x-show="$store.breakpoints.isXs && $store.global.isSearchbarActive"
            x-transition:enter="easy-out transition-all" x-transition:enter-start="opacity-0 scale-105"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="easy-in transition-all"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
            class="fixed inset-0 z-[100] flex flex-col bg-white dark:bg-navy-700 sm:hidden">
            <div class="flex items-center space-x-2 bg-slate-100 px-3 pt-2 dark:bg-navy-800">
                <button
                    class="btn -ml-1.5 h-7 w-7 shrink-0 rounded-full p-0 text-slate-600 hover:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-100 dark:hover:bg-navy-300/20 dark:active:bg-navy-300/25"
                    @click="$store.global.isSearchbarActive = false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke-width="1.5"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <input x-effect="$store.global.isSearchbarActive && $nextTick(() => $el.focus() );"
                    class="form-input h-8 w-full bg-transparent placeholder-slate-400 dark:placeholder-navy-300"
                    type="text" placeholder="Search here..." />
            </div>
            <div x-data="{ activeTab: 'tabAll' }"
                class="is-scrollbar-hidden flex shrink-0 overflow-x-auto bg-slate-100 px-2 text-slate-600 dark:bg-navy-800 dark:text-navy-200">
                <button @click="activeTab = 'tabAll'"
                    :class="activeTab === 'tabAll' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' :
                        'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                    class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                    All
                </button>
                <button @click="activeTab = 'tabFiles'"
                    :class="activeTab === 'tabFiles' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' :
                        'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                    class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                    Files
                </button>
                <button @click="activeTab = 'tabChats'"
                    :class="activeTab === 'tabChats' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' :
                        'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                    class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                    Chats
                </button>
                <button @click="activeTab = 'tabEmails'"
                    :class="activeTab === 'tabEmails' ?
                        'border-primary dark:border-accent text-primary dark:text-accent-light' :
                        'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                    class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                    Emails
                </button>
                <button @click="activeTab = 'tabProjects'"
                    :class="activeTab === 'tabProjects' ?
                        'border-primary dark:border-accent text-primary dark:text-accent-light' :
                        'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                    class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                    Projects
                </button>
                <button @click="activeTab = 'tabTasks'"
                    :class="activeTab === 'tabTasks' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' :
                        'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                    class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                    Tasks
                </button>
            </div>

            <div class="is-scrollbar-hidden overflow-y-auto overscroll-contain pb-2">
                <div class="is-scrollbar-hidden mt-3 flex space-x-4 overflow-x-auto px-3">
                    <a href="apps-kanban.html" class="w-14 text-center">
                        <div class="avatar h-12 w-12">
                            <div class="is-initial rounded-full bg-success text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                </svg>
                            </div>
                        </div>
                        <p
                            class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Kanban
                        </p>
                    </a>
                    <a href="dashboards-crm-analytics.html" class="w-14 text-center">
                        <div class="avatar h-12 w-12">
                            <div class="is-initial rounded-full bg-secondary text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                            </div>
                        </div>
                        <p
                            class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Analytics
                        </p>
                    </a>
                    <a href="apps-chat.html" class="w-14 text-center">
                        <div class="avatar h-12 w-12">
                            <div class="is-initial rounded-full bg-info text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </div>
                        </div>
                        <p
                            class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Chat
                        </p>
                    </a>
                    <a href="apps-filemanager.html" class="w-14 text-center">
                        <div class="avatar h-12 w-12">
                            <div class="is-initial rounded-full bg-error text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                </svg>
                            </div>
                        </div>
                        <p
                            class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Files
                        </p>
                    </a>
                    <a href="dashboards-crypto-1.html" class="w-14 text-center">
                        <div class="avatar h-12 w-12">
                            <div class="is-initial rounded-full bg-secondary text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 9a2 2 0 10-4 0v5a2 2 0 01-2 2h6m-6-4h4m8 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <p
                            class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Crypto
                        </p>
                    </a>
                    <a href="dashboards-banking-1.html" class="w-14 text-center">
                        <div class="avatar h-12 w-12">
                            <div class="is-initial rounded-full bg-primary text-white dark:bg-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                </svg>
                            </div>
                        </div>
                        <p
                            class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Banking
                        </p>
                    </a>
                    <a href="apps-todo.html" class="w-14 text-center">
                        <div class="avatar h-12 w-12">
                            <div class="is-initial rounded-full bg-info text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path d="M12.5293 18L20.9999 8.40002" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M3 13.2L7.23529 18L17.8235 6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <p
                            class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Todo
                        </p>
                    </a>

                    <a href="dashboards-orders.html" class="w-14 text-center">
                        <div class="avatar h-12 w-12">
                            <div class="is-initial rounded-full bg-warning text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                        </div>
                        <p
                            class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Orders
                        </p>
                    </a>
                </div>

                <div class="mt-3 flex items-center justify-between bg-slate-100 py-1.5 px-3 dark:bg-navy-800">
                    <p class="text-xs uppercase">Recent</p>
                    <a href="#"
                        class="text-tiny+ font-medium uppercase text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70">
                        View All
                    </a>
                </div>

                <div class="mt-1 font-inter font-medium">
                    <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        href="apps-chat.html">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4.5 w-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                        <span>Chat App</span>
                    </a>
                    <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        href="apps-filemanager.html">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4.5 w-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                        </svg>
                        <span>File Manager App</span>
                    </a>
                    <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        href="apps-mail.html">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4.5 w-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>Email App</span>
                    </a>
                    <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        href="apps-kanban.html">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4.5 w-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                        </svg>
                        <span>Kanban Board</span>
                    </a>
                    <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        href="apps-todo.html">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4.5 w-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path d="M3 13.2L7.23529 18L17.8235 6" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.5293 18L20.9999 8.40002" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>Todo App</span>
                    </a>
                    <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        href="dashboards-crypto-2.html">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4.5 w-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 9a2 2 0 10-4 0v5a2 2 0 01-2 2h6m-6-4h4m8 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                        <span>Crypto Dashboard</span>
                    </a>
                    <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        href="dashboards-banking-2.html">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4.5 w-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                        </svg>

                        <span>Banking Dashboard</span>
                    </a>
                    <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        href="dashboards-crm-analytics.html">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4.5 w-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>

                        <span>Analytics Dashboard</span>
                    </a>
                    <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        href="dashboards-influencer.html">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4.5 w-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>

                        <span>Influencer Dashboard</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Right Sidebar -->
        <div x-show="$store.global.isRightSidebarExpanded"
            @keydown.window.escape="$store.global.isRightSidebarExpanded = false">
            <div class="fixed inset-0 z-[150] bg-slate-900/60 transition-opacity duration-200"
                @click="$store.global.isRightSidebarExpanded = false" x-show="$store.global.isRightSidebarExpanded"
                x-transition:enter="ease-out" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="ease-in"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
            <div class="fixed right-0 top-0 z-[151] h-full w-full sm:w-80">
                <div x-data="{ activeTab: 'tabHome' }"
                    class="relative flex h-full w-full transform-gpu flex-col bg-white transition-transform duration-200 dark:bg-navy-750"
                    x-show="$store.global.isRightSidebarExpanded" x-transition:enter="ease-out"
                    x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="ease-in" x-transition:leave-start="translate-x-0"
                    x-transition:leave-end="translate-x-full">
                    <div class="flex items-center justify-between py-2 px-4">
                        <p x-show="activeTab === 'tabHome'" class="flex shrink-0 items-center space-x-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-xs">25 May, 2022</span>
                        </p>
                        <p x-show="activeTab === 'tabProjects'" class="flex shrink-0 items-center space-x-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                            </svg>
                            <span class="text-xs">Projects</span>
                        </p>
                        <p x-show="activeTab === 'tabActivity'" class="flex shrink-0 items-center space-x-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-xs">Activity</span>
                        </p>

                        <button @click="$store.global.isRightSidebarExpanded=false"
                            class="btn -mr-1 h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div x-show="activeTab === 'tabHome'" x-transition:enter="transition-all duration-500 easy-in-out"
                        x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                        x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                        class="is-scrollbar-hidden overflow-y-auto overscroll-contain pt-1">
                        <label class="relative flex px-3">
                            <input
                                class="form-input peer h-8 w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 text-xs+ ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                placeholder="Search here..." type="text" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4.5 w-4.5 transition-colors duration-200" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z" />
                                </svg>
                            </span>
                        </label>
                        <div class="mt-3">
                            <h2
                                class="px-3 text-xs+ font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                                Banking cards
                            </h2>
                            <div class="swiper mt-3 px-3" x-init="$nextTick(() => new Swiper($el, { slidesPerView: 'auto', spaceBetween: 16 }))">
                                <div class="swiper-wrapper">
                                    <div
                                        class="swiper-slide relative flex h-28 w-48 flex-col overflow-hidden rounded-xl bg-gradient-to-br from-purple-500 to-indigo-600 p-3">
                                        <div class="grow">
                                            <img class="h-3" src="images/payments/cc-visa-white.svg"
                                                alt="image" />
                                        </div>
                                        <div class="text-white">
                                            <p class="text-lg font-semibold tracking-wide">
                                                $2,139.22
                                            </p>
                                            <p class="mt-1 text-xs font-medium">
                                                **** **** **** 8945
                                            </p>
                                        </div>
                                        <div
                                            class="mask is-reuleaux-triangle absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20">
                                        </div>
                                    </div>
                                    <div
                                        class="swiper-slide relative flex h-28 w-48 flex-col overflow-hidden rounded-xl bg-gradient-to-br from-pink-500 to-rose-500 p-3">
                                        <div class="grow">
                                            <img class="h-3" src="images/payments/cc-visa-white.svg"
                                                alt="image" />
                                        </div>
                                        <div class="text-white">
                                            <p class="text-lg font-semibold tracking-wide">
                                                $2,139.22
                                            </p>
                                            <p class="mt-1 text-xs font-medium">
                                                **** **** **** 8945
                                            </p>
                                        </div>
                                        <div
                                            class="mask is-diamond absolute bottom-0 right-0 -m-3 h-16 w-16 bg-white/20">
                                        </div>
                                    </div>
                                    <div
                                        class="swiper-slide relative flex h-28 w-48 flex-col overflow-hidden rounded-xl bg-gradient-to-br from-info to-info-focus p-3">
                                        <div class="grow">
                                            <img class="h-3" src="images/payments/cc-visa-white.svg"
                                                alt="image" />
                                        </div>
                                        <div class="text-white">
                                            <p class="text-lg font-semibold tracking-wide">
                                                $2,139.22
                                            </p>
                                            <p class="mt-1 text-xs font-medium">
                                                **** **** **** 8945
                                            </p>
                                        </div>
                                        <div
                                            class="mask is-hexagon-2 absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 px-3">
                            <h2
                                class="text-xs+ font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                                Pinned Apps
                            </h2>
                            <div class="mt-3 flex space-x-3">
                                <a href="apps-kanban.html" class="w-12 text-center">
                                    <div class="avatar h-10 w-10">
                                        <div class="is-initial mask is-squircle bg-success text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p
                                        class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                        Kanban
                                    </p>
                                </a>
                                <a href="dashboards-crm-analytics.html" class="w-12 text-center">
                                    <div class="avatar h-10 w-10">
                                        <div class="is-initial mask is-squircle bg-warning text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p
                                        class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                        Analytics
                                    </p>
                                </a>
                                <a href="apps-chat.html" class="w-12 text-center">
                                    <div class="avatar h-10 w-10">
                                        <div class="is-initial mask is-squircle bg-info text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p
                                        class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                        Chat
                                    </p>
                                </a>
                                <a href="apps-filemanager.html" class="w-12 text-center">
                                    <div class="avatar h-10 w-10">
                                        <div class="is-initial mask is-squircle bg-error text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p
                                        class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                        Files
                                    </p>
                                </a>
                                <a href="dashboards-banking-1.html" class="w-12 text-center">
                                    <div class="avatar h-10 w-10">
                                        <div class="is-initial mask is-squircle bg-secondary text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p
                                        class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                        Banking
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="mt-4">
                            <div class="grid grid-cols-2 gap-3 px-3">
                                <div class="rounded-lg bg-slate-150 px-2.5 py-2 dark:bg-navy-600">
                                    <div class="flex items-center justify-between space-x-1">
                                        <p>
                                            <span
                                                class="text-lg font-medium text-slate-700 dark:text-navy-100">11.3</span>
                                            <span class="text-xs">hr</span>
                                        </p>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-4.5 w-4.5 text-secondary dark:text-secondary-light"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>

                                    <p class="mt-0.5 text-tiny+ uppercase">Working Hours</p>

                                    <div class="progress mt-3 h-1.5 bg-secondary/15 dark:bg-secondary-light/25">
                                        <div
                                            class="is-active relative w-8/12 overflow-hidden rounded-full bg-secondary dark:bg-secondary-light">
                                        </div>
                                    </div>

                                    <div
                                        class="mt-1.5 flex items-center justify-between text-xs text-slate-400 dark:text-navy-300">
                                        <button
                                            class="btn -ml-1 h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </button>
                                        <span> 71%</span>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-slate-150 px-2.5 py-2 dark:bg-navy-600">
                                    <div class="flex items-center justify-between space-x-1">
                                        <p>
                                            <span
                                                class="text-lg font-medium text-slate-700 dark:text-navy-100">13</span>
                                            <span class="text-xs">/22</span>
                                        </p>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 text-success"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>

                                    <p class="mt-0.5 text-tiny+ uppercase">Completed tasks</p>

                                    <div class="progress mt-3 h-1.5 bg-success/15 dark:bg-success/25">
                                        <div class="relative w-6/12 overflow-hidden rounded-full bg-success"></div>
                                    </div>

                                    <div
                                        class="mt-1.5 flex items-center justify-between text-xs text-slate-400 dark:text-navy-300">
                                        <button
                                            class="btn -ml-1 h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </button>
                                        <span> 49%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h2
                                class="px-3 text-xs+ font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                                Stock Market
                            </h2>
                            <div class="mt-3 grid grid-cols-2 gap-3 px-3">
                                <div class="rounded-lg bg-slate-100 p-2.5 dark:bg-navy-600">
                                    <div class="flex items-center space-x-2">
                                        <img class="h-10 w-10" src="images/logos/bitcoin.svg" alt="image" />
                                        <div>
                                            <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                                BTC
                                            </h2>
                                            <p class="text-xs">Bitcoin</p>
                                        </div>
                                    </div>

                                    <div class="ax-transparent-gridline">
                                        <div x-init="$nextTick(() => { $el._x_chart = new ApexCharts($el, pages.charts.stockMarket1);
                                            $el._x_chart.render() });"></div>
                                    </div>

                                    <div class="mt-2 flex items-center justify-between">
                                        <p class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                            60.33$
                                        </p>
                                        <p class="text-xs font-medium tracking-wide text-success">
                                            +3.3%
                                        </p>
                                    </div>
                                </div>

                                <div class="rounded-lg bg-slate-100 p-2.5 dark:bg-navy-600">
                                    <div class="flex items-center space-x-2">
                                        <img class="h-10 w-10" src="images/logos/solana.svg" alt="image" />
                                        <div>
                                            <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                                SOL
                                            </h2>
                                            <p class="text-xs">Solana</p>
                                        </div>
                                    </div>

                                    <div class="ax-transparent-gridline">
                                        <div x-init="$nextTick(() => { $el._x_chart = new ApexCharts($el, pages.charts.stockMarket2);
                                            $el._x_chart.render() });"></div>
                                    </div>

                                    <div class="mt-2 flex items-center justify-between">
                                        <p class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                            20.56$
                                        </p>
                                        <p class="text-xs font-medium tracking-wide text-success">
                                            +4.11%
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h2
                                class="px-3 text-xs+ font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                                Latest News
                            </h2>
                            <div class="mt-3 space-y-3 px-2">
                                <div
                                    class="flex justify-between space-x-2 rounded-lg bg-slate-100 p-2.5 dark:bg-navy-700">
                                    <div class="flex flex-1 flex-col justify-between">
                                        <div class="line-clamp-2">
                                            <a href="#"
                                                class="font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">What
                                                is Tailwind CSS?</a>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2">
                                                <div class="avatar h-7 w-7">
                                                    <img class="rounded-full" src="images/avatar/avatar-20.jpg"
                                                        alt="avatar" />
                                                </div>
                                                <div>
                                                    <p class="text-xs font-medium line-clamp-1">
                                                        John D.
                                                    </p>
                                                    <p
                                                        class="text-tiny+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                                        2 min read
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex">
                                                <button
                                                    class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                                    </svg>
                                                </button>
                                                <button
                                                    class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="images/object/object-18.jpg"
                                        class="h-20 w-20 rounded-lg object-cover object-center" alt="image" />
                                </div>

                                <div
                                    class="flex justify-between space-x-2 rounded-lg bg-slate-100 p-2.5 dark:bg-navy-700">
                                    <div class="flex flex-1 flex-col justify-between">
                                        <div class="line-clamp-2">
                                            <a href="#"
                                                class="font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">Tailwind
                                                CSS Card Example</a>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2">
                                                <div class="avatar h-7 w-7">
                                                    <img class="rounded-full" src="images/avatar/avatar-19.jpg"
                                                        alt="avatar" />
                                                </div>
                                                <div>
                                                    <p class="text-xs font-medium line-clamp-1">
                                                        Travis F.
                                                    </p>
                                                    <p
                                                        class="text-tiny+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                                        5 min read
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex">
                                                <button
                                                    class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                                    </svg>
                                                </button>
                                                <button
                                                    class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="images/object/object-2.jpg"
                                        class="h-20 w-20 rounded-lg object-cover object-center" alt="image" />
                                </div>

                                <div
                                    class="flex justify-between space-x-2 rounded-lg bg-slate-100 p-2.5 dark:bg-navy-700">
                                    <div class="flex flex-1 flex-col justify-between">
                                        <div class="line-clamp-2">
                                            <a href="#"
                                                class="font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">10
                                                Tips for Making a Good Camera Even Better</a>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2">
                                                <div class="avatar h-7 w-7">
                                                    <img class="rounded-full" src="images/avatar/avatar-18.jpg"
                                                        alt="avatar" />
                                                </div>
                                                <div>
                                                    <p class="text-xs font-medium line-clamp-1">
                                                        Alfredo E .
                                                    </p>
                                                    <p
                                                        class="text-tiny+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                                        4 min read
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex">
                                                <button
                                                    class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                                    </svg>
                                                </button>
                                                <button
                                                    class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="images/object/object-1.jpg"
                                        class="h-20 w-20 rounded-lg object-cover object-center" alt="image" />
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 px-3">
                            <h2
                                class="text-xs+ font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                                Settings
                            </h2>
                            <div class="mt-2 flex flex-col space-y-2">
                                <label class="inline-flex items-center space-x-2">
                                    <input x-model="$store.global.isDarkModeEnabled"
                                        class="form-switch h-5 w-10 rounded-lg bg-slate-300 before:rounded-md before:bg-slate-50 checked:bg-slate-500 checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-navy-400 dark:checked:before:bg-white"
                                        type="checkbox" />
                                    <span>Dark Mode</span>
                                </label>
                                <label class="inline-flex items-center space-x-2">
                                    <input x-model="$store.global.isMonochromeModeEnabled"
                                        class="form-switch h-5 w-10 rounded-lg bg-slate-300 before:rounded-md before:bg-slate-50 checked:bg-slate-500 checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-navy-400 dark:checked:before:bg-white"
                                        type="checkbox" />
                                    <span>Monochrome Mode</span>
                                </label>
                            </div>
                        </div>

                        <div class="mt-3 px-3">
                            <div class="rounded-lg bg-slate-100 p-3 dark:bg-navy-600">
                                <div class="flex items-center justify-between">
                                    <p>
                                        <span class="font-medium text-slate-600 dark:text-navy-100">35GB</span>
                                        of 1TB
                                    </p>
                                    <a href="#"
                                        class="text-xs+ font-medium text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70">Upgrade</a>
                                </div>

                                <div class="progress mt-2 h-2 bg-slate-150 dark:bg-navy-500">
                                    <div class="w-7/12 rounded-full bg-info"></div>
                                </div>
                            </div>
                        </div>
                        <div class="h-18"></div>
                    </div>

                    <div x-show="activeTab === 'tabProjects'"
                        x-transition:enter="transition-all duration-500 easy-in-out"
                        x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                        x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                        class="is-scrollbar-hidden overflow-y-auto overscroll-contain px-3 pt-1">
                        <div class="grid grid-cols-2 gap-3">
                            <div class="rounded-lg bg-slate-100 p-3 dark:bg-navy-600">
                                <div class="flex justify-between space-x-1">
                                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                        14
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5"
                                        class="h-5 w-5 text-primary dark:text-accent" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <p class="mt-1 text-xs+">Pending</p>
                            </div>
                            <div class="rounded-lg bg-slate-100 p-3 dark:bg-navy-600">
                                <div class="flex justify-between">
                                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                        36
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-success"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                    </svg>
                                </div>
                                <p class="mt-1 text-xs+">Completed</p>
                            </div>
                            <div class="rounded-lg bg-slate-100 p-3 dark:bg-navy-600">
                                <div class="flex justify-between">
                                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                        143
                                    </p>

                                    <i class="fa fa-spinner text-base text-warning"></i>
                                </div>
                                <p class="mt-1 text-xs+">In Progress</p>
                            </div>
                            <div class="rounded-lg bg-slate-100 p-3 dark:bg-navy-600">
                                <div class="flex justify-between">
                                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                        279
                                    </p>

                                    <i class="fa-solid fa-list-check text-base text-info"></i>
                                </div>
                                <p class="mt-1 text-xs+">Total</p>
                            </div>
                        </div>

                        <div class="mt-4 rounded-lg border border-slate-150 p-3 dark:border-navy-600">
                            <div class="flex items-center space-x-3">
                                <img class="h-10 w-10 rounded-lg object-cover object-center"
                                    src="images/illustrations/lms-ui.svg" alt="image" />
                                <div>
                                    <p class="font-medium leading-snug text-slate-700 dark:text-navy-100">
                                        LMS App Design
                                    </p>
                                    <p class="text-xs text-slate-400 dark:text-navy-300">
                                        Updated at 7 Sep
                                    </p>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="progress h-1.5 bg-slate-150 dark:bg-navy-500">
                                    <div class="w-4/12 rounded-full bg-primary dark:bg-accent"></div>
                                </div>
                                <p class="mt-2 text-right text-xs+ font-medium text-primary dark:text-accent-light">
                                    25%
                                </p>
                            </div>

                            <div class="mt-3 flex items-center justify-between space-x-2">
                                <div class="flex -space-x-3">
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700"
                                            src="images/avatar/avatar-16.jpg" alt="avatar" />
                                    </div>
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <div
                                            class="is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                            jd
                                        </div>
                                    </div>
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700"
                                            src="images/avatar/avatar-20.jpg" alt="avatar" />
                                    </div>
                                </div>
                                <button
                                    class="btn h-7 w-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="mt-4 rounded-lg border border-slate-150 p-3 dark:border-navy-600">
                            <div class="flex items-center space-x-3">
                                <img class="h-10 w-10 rounded-lg object-cover object-center"
                                    src="images/illustrations/store-ui.svg" alt="image" />
                                <div>
                                    <p class="font-medium leading-snug text-slate-700 dark:text-navy-100">
                                        Store Dashboard
                                    </p>
                                    <p class="text-xs text-slate-400 dark:text-navy-300">
                                        Updated at 11 Sep
                                    </p>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="progress h-1.5 bg-slate-150 dark:bg-navy-500">
                                    <div class="w-6/12 rounded-full bg-primary dark:bg-accent"></div>
                                </div>
                                <p class="mt-2 text-right text-xs+ font-medium text-primary dark:text-accent-light">
                                    49%
                                </p>
                            </div>

                            <div class="mt-3 flex items-center justify-between space-x-2">
                                <div class="flex -space-x-3">
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700"
                                            src="images/avatar/avatar-17.jpg" alt="avatar" />
                                    </div>
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <div
                                            class="is-initial rounded-full bg-warning text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                            dv
                                        </div>
                                    </div>
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700"
                                            src="images/avatar/avatar-19.jpg" alt="avatar" />
                                    </div>
                                </div>
                                <button
                                    class="btn h-7 w-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="mt-4 rounded-lg border border-slate-150 p-3 dark:border-navy-600">
                            <div class="flex items-center space-x-3">
                                <img class="h-10 w-10 rounded-lg object-cover object-center"
                                    src="images/illustrations/chat-ui.svg" alt="image" />
                                <div>
                                    <p class="font-medium leading-snug text-slate-700 dark:text-navy-100">
                                        Chat Mobile App
                                    </p>
                                    <p class="text-xs text-slate-400 dark:text-navy-300">
                                        Updated at 19 Sep
                                    </p>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="progress h-1.5 bg-slate-150 dark:bg-navy-500">
                                    <div class="w-2/12 rounded-full bg-primary dark:bg-accent"></div>
                                </div>
                                <p class="mt-2 text-right text-xs+ font-medium text-primary dark:text-accent-light">
                                    13%
                                </p>
                            </div>

                            <div class="mt-3 flex items-center justify-between space-x-2">
                                <div class="flex -space-x-3">
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700"
                                            src="images/avatar/avatar-5.jpg" alt="avatar" />
                                    </div>
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <div
                                            class="is-initial rounded-full bg-error text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                            gt
                                        </div>
                                    </div>
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700"
                                            src="images/avatar/avatar-11.jpg" alt="avatar" />
                                    </div>
                                </div>
                                <button
                                    class="btn h-7 w-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="mt-4 rounded-lg border border-slate-150 p-3 dark:border-navy-600">
                            <div class="flex items-center space-x-3">
                                <img class="h-10 w-10 rounded-lg object-cover object-center"
                                    src="images/illustrations/nft.svg" alt="image" />
                                <div>
                                    <p class="font-medium leading-snug text-slate-700 dark:text-navy-100">
                                        NFT Marketplace App
                                    </p>
                                    <p class="text-xs text-slate-400 dark:text-navy-300">
                                        Updated at 5 Sep
                                    </p>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="progress h-1.5 bg-slate-150 dark:bg-navy-500">
                                    <div class="w-9/12 rounded-full bg-primary dark:bg-accent"></div>
                                </div>
                                <p class="mt-2 text-right text-xs+ font-medium text-primary dark:text-accent-light">
                                    78%
                                </p>
                            </div>

                            <div class="mt-3 flex items-center justify-between space-x-2">
                                <div class="flex -space-x-3">
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700"
                                            src="images/avatar/avatar-8.jpg" alt="avatar" />
                                    </div>
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <div
                                            class="is-initial rounded-full bg-success text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                            jd
                                        </div>
                                    </div>
                                    <div class="avatar h-7 w-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700"
                                            src="images/avatar/avatar-12.jpg" alt="avatar" />
                                    </div>
                                </div>
                                <button
                                    class="btn h-7 w-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="h-18"></div>
                    </div>

                    <div x-show="activeTab === 'tabActivity'"
                        x-transition:enter="transition-all duration-500 easy-in-out"
                        x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                        x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                        class="is-scrollbar-hidden overflow-y-auto overscroll-contain pt-1">
                        <div
                            class="mx-3 flex flex-col items-center rounded-lg bg-slate-100 py-3 px-8 dark:bg-navy-600">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-8 w-8 text-secondary dark:text-secondary-light" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <p class="mt-2 text-xs">Today</p>

                            <p class="text-lg font-medium text-slate-700 dark:text-navy-100">
                                6hr 22m
                            </p>

                            <div class="progress mt-3 h-2 bg-secondary/15 dark:bg-secondary-light/25">
                                <div
                                    class="is-active relative w-8/12 overflow-hidden rounded-full bg-secondary dark:bg-secondary-light">
                                </div>
                            </div>

                            <button
                                class="btn mt-5 space-x-2 rounded-full border border-slate-300 px-3 text-xs+ font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4.5 w-4.5 text-slate-400 dark:text-navy-300" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z" />
                                </svg>
                                <span> Download Report</span>
                            </button>
                        </div>

                        <ol class="timeline line-space mt-5 px-4 [--size:1.5rem]">
                            <li class="timeline-item">
                                <div
                                    class="timeline-item-point rounded-full border border-current bg-white text-secondary dark:bg-navy-700 dark:text-secondary-light">
                                    <i class="fa fa-user-edit text-tiny"></i>
                                </div>
                                <div class="timeline-item-content flex-1 pl-4">
                                    <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                        <p
                                            class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                            User Photo Changed
                                        </p>
                                        <span class="text-xs text-slate-400 dark:text-navy-300">12 minute ago</span>
                                    </div>
                                    <p class="py-1">John Doe changed his avatar photo</p>
                                    <div class="avatar mt-2 h-20 w-20">
                                        <img class="mask is-squircle" src="images/avatar/avatar-19.jpg"
                                            alt="avatar" />
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div
                                    class="timeline-item-point rounded-full border border-current bg-white text-primary dark:bg-navy-700 dark:text-accent">
                                    <i class="fa-solid fa-image text-tiny"></i>
                                </div>
                                <div class="timeline-item-content flex-1 pl-4">
                                    <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                        <p
                                            class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                            Images Added
                                        </p>
                                        <span class="text-xs text-slate-400 dark:text-navy-300">1 hour ago</span>
                                    </div>
                                    <p class="py-1">Mores Clarke added new image gallery</p>
                                    <div class="mt-4 grid grid-cols-3 gap-3">
                                        <img class="rounded-lg" src="images/object/object-1.jpg" alt="image" />
                                        <img class="rounded-lg" src="images/object/object-2.jpg" alt="image" />
                                        <img class="rounded-lg" src="images/object/object-3.jpg" alt="image" />
                                        <img class="rounded-lg" src="images/object/object-4.jpg" alt="image" />
                                        <img class="rounded-lg" src="images/object/object-5.jpg" alt="image" />
                                        <img class="rounded-lg" src="images/object/object-6.jpg" alt="image" />
                                    </div>
                                    <div class="mt-4">
                                        <span class="font-medium text-slate-600 dark:text-navy-100">
                                            Category:
                                        </span>

                                        <a href="#"
                                            class="text-xs text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">
                                            #Tag
                                        </a>

                                        <a href="#"
                                            class="text-xs text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">
                                            #Category
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div
                                    class="timeline-item-point rounded-full border border-current bg-white text-success dark:bg-navy-700">
                                    <i class="fa fa-leaf text-tiny"></i>
                                </div>
                                <div class="timeline-item-content flex-1 pl-4">
                                    <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                        <p
                                            class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                            Design Completed
                                        </p>
                                        <span class="text-xs text-slate-400 dark:text-navy-300">3 hours ago</span>
                                    </div>
                                    <p class="py-1">
                                        Robert Nolan completed the design of the CRM application
                                    </p>
                                    <a href="#"
                                        class="inline-flex items-center space-x-1 pt-2 text-slate-600 transition-colors hover:text-primary dark:text-navy-100 dark:hover:text-accent">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        <span>File_final.fig</span>
                                    </a>
                                    <div class="pt-2">
                                        <a href="#"
                                            class="tag rounded-full border border-secondary/30 bg-secondary/10 text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:border-secondary-light/30 dark:bg-secondary-light/10 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25">
                                            UI/UX
                                        </a>

                                        <a href="#"
                                            class="tag rounded-full border border-info/30 bg-info/10 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                                            CRM
                                        </a>

                                        <a href="#"
                                            class="tag rounded-full border border-success/30 bg-success/10 text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25">
                                            Dashboard
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div
                                    class="timeline-item-point rounded-full border border-current bg-white text-warning dark:bg-navy-700">
                                    <i class="fa fa-project-diagram text-tiny"></i>
                                </div>
                                <div class="timeline-item-content flex-1 pl-4">
                                    <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                        <p
                                            class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                            ER Diagram
                                        </p>
                                        <span class="text-xs text-slate-400 dark:text-navy-300">a day ago</span>
                                    </div>
                                    <p class="py-1">Team completed the ER diagram app</p>
                                    <div>
                                        <p class="text-xs text-slate-400 dark:text-navy-300">
                                            Members:
                                        </p>
                                        <div class="mt-2 flex justify-between">
                                            <div class="flex flex-wrap -space-x-2">
                                                <div class="avatar h-7 w-7 hover:z-10">
                                                    <img class="rounded-full ring ring-white dark:ring-navy-700"
                                                        src="images/avatar/avatar-16.jpg" alt="avatar" />
                                                </div>

                                                <div class="avatar h-7 w-7 hover:z-10">
                                                    <div
                                                        class="is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                                        jd
                                                    </div>
                                                </div>

                                                <div class="avatar h-7 w-7 hover:z-10">
                                                    <img class="rounded-full ring ring-white dark:ring-navy-700"
                                                        src="images/avatar/avatar-20.jpg" alt="avatar" />
                                                </div>

                                                <div class="avatar h-7 w-7 hover:z-10">
                                                    <img class="rounded-full ring ring-white dark:ring-navy-700"
                                                        src="images/avatar/avatar-8.jpg" alt="avatar" />
                                                </div>

                                                <div class="avatar h-7 w-7 hover:z-10">
                                                    <img class="rounded-full ring ring-white dark:ring-navy-700"
                                                        src="images/avatar/avatar-5.jpg" alt="avatar" />
                                                </div>
                                            </div>
                                            <button
                                                class="btn h-7 w-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div
                                    class="timeline-item-point rounded-full border border-current bg-white text-error dark:bg-navy-700">
                                    <i class="fa fa-history text-tiny"></i>
                                </div>
                                <div class="timeline-item-content flex-1 pl-4">
                                    <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                        <p
                                            class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                            Weekly Report
                                        </p>
                                        <span class="text-xs text-slate-400 dark:text-navy-300">a day ago</span>
                                    </div>
                                    <p class="py-1">The weekly report was uploaded</p>
                                </div>
                            </li>
                        </ol>
                        <div class="h-18"></div>
                    </div>

                    <div class="pointer-events-none absolute bottom-4 flex w-full justify-center">
                        <div
                            class="pointer-events-auto mx-auto flex space-x-1 rounded-full border border-slate-150 bg-white px-4 py-0.5 shadow-lg dark:border-navy-700 dark:bg-navy-900">
                            <button @click="activeTab = 'tabHome'"
                                :class="activeTab === 'tabHome' && 'text-primary dark:text-accent'"
                                class="btn h-9 rounded-full py-0 px-4 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:hover:text-accent dark:focus:bg-navy-300/20 dark:focus:text-accent dark:active:bg-navy-300/25">
                                <svg x-show="activeTab === 'tabHome'" xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                </svg>
                                <svg x-show="activeTab !== 'tabHome'" xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                            </button>
                            <button @click="activeTab = 'tabProjects'"
                                :class="activeTab === 'tabProjects' && 'text-primary dark:text-accent'"
                                class="btn h-9 rounded-full py-0 px-4 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:hover:text-accent dark:focus:bg-navy-300/20 dark:focus:text-accent dark:active:bg-navy-300/25">
                                <svg x-show="activeTab === 'tabProjects'" xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>

                                <svg x-show="activeTab !== 'tabProjects'" xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                </svg>
                            </button>
                            <button @click="activeTab = 'tabActivity'"
                                :class="activeTab === 'tabActivity' && 'text-primary dark:text-accent'"
                                class="btn h-9 rounded-full py-0 px-4 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:hover:text-accent dark:focus:bg-navy-300/20 dark:focus:text-accent dark:active:bg-navy-300/25">
                                <svg x-show="activeTab ===  'tabActivity'" xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg x-show="activeTab !==  'tabActivity'" xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Wrapper -->
        <main class="main mt-9 px-7 w-full pb-9  ">
            <div class="">
                <div class="">
                    <div class="card lg:p-6">
                        <!-- Author -->
                        <div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <div x-data="usePopper({
                                        offset: 12,
                                        placement: 'bottom',
                                        modifiers: [
                                            { name: 'preventOverflow', options: { padding: 10 } }
                                        ]
                                    })" class="flex" @mouseleave="isShowPopper = false"
                                        @mouseenter="isShowPopper = true">
                                        <div x-ref="popperRef" class="avatar h-12 w-12">
                                            <img class="mask is-squircle"
                                                src="{{ asset('image/logo.png') }}"
                                                alt="avatar" />
                                        </div>
                                        <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">

                                        </div>
                                    </div>
                                    <div>
                                        <a href="#"
                                            class="font-medium text-slate-700 line-clamp-1 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">
                                            Hummasoft technology
                                        </a>
                                        @php
                                            use Carbon\Carbon;
                                        @endphp
                                        <div class="mt-1.5 flex items-center text-xs">
                                            <span class="line-clamp-1">{{ Carbon::parse($berita->tanggal)->format('d M') }}</span>
                                            <div class="mx-2 my-0.5 w-px self-stretch bg-white/20"></div>
                                            <p class="shrink-0">8 min</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex space-x-3">
                                    <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })"
                                        @click.outside="isShowPopper && (isShowPopper = false)" class="inline-flex">
                                        <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                                            class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                            </svg>
                                        </button>

                                        <div x-ref="popperRoot" class="popper-root"
                                            :class="isShowPopper && 'show'">
                                            <div
                                                class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                                <ul>
                                                    <li>
                                                        <a href="#"
                                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                                            Action</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                                            else</a>
                                                    </li>
                                                </ul>
                                                <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                                <ul>
                                                    <li>
                                                        <a href="#"
                                                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                                            Link</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 flex items-center space-x-3 sm:hidden">
                                <button
                                    class="btn space-x-2 rounded-full border border-slate-300 px-4 text-xs+ font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4.5 w-4.5 text-slate-400 dark:text-navy-300" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                    </svg>

                                    <span> Save</span>
                                </button>
                                <div class="flex">
                                    <button
                                        class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <i class="fab fa-twitter text-base"></i>
                                    </button>
                                    <button
                                        class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <i class="fab fa-linkedin text-base"></i>
                                    </button>
                                    <button
                                        class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <i class="fab fa-instagram text-base"></i>
                                    </button>
                                    <button
                                        class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                        <i class="fab fa-facebook text-base"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Blog Post -->
                        <div class="mt-6 font-inter text-base text-slate-600 dark:text-navy-200">
                            <h1 class="text-xl font-medium text-slate-900 dark:text-navy-50 lg:text-2xl">
                                {{ $berita->judul }}
                            </h1>
                            <h3 class="mt-1">
                                {{ $berita->keterangan }}
                            </h3>
                            <img class="mt-5 h-80 w-full rounded-lg object-cover object-center"
                                src="{{ asset('storage/fotoberita/' . $berita->foto) }}" alt="image" />
                            <p class="mt-1 text-center text-xs+ text-slate-400 dark:text-navy-300">
                                <span> Photo by </span>
                                <a href="#" class="underline">{{ $berita->name }}</a>
                            </p>
                            <br />
                            <p>
                                {!! $berita->deskripsi !!}
                            </p>
                        </div>

                        <!-- Footer Blog Post -->
                        <div class="mt-5 flex space-x-3">
                            <button
                                class="btn space-x-2 rounded-full border border-slate-300 px-4 text-xs+ font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4.5 w-4.5 text-slate-400 dark:text-navy-300" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                                </svg>

                                <span> 235</span>
                            </button>
                            <button
                                class="btn space-x-2 rounded-full border border-slate-300 px-4 text-xs+ font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4.5 w-4.5 text-slate-400 dark:text-navy-300" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                                </svg>

                                <span> 49</span>
                            </button>
                        </div>
                    </div>

                </div>


            </div>
    </div>
    </main>
    </div>
    <!--
        This is a place for Alpine.js Teleport feature
        @see https://alpinejs.dev/directives/teleport
      -->
    <div id="x-teleport-target"></div>
    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());
    </script>
</body>

<!-- Mirrored from lineone.piniastudio.com/pages-blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 04:16:41 GMT -->

</html>

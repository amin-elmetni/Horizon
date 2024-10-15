<div class="w-[270px] px-6 py-4 bg-bg1 h-screen fixed flex flex-col items-center">
    <a href="#" class="flex items-center gap-2 text-2xl font-medium text-primary mb-20 self-start">
        <svg id="logo-15" width="35" height="48" viewBox="0 0 49 48" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M24.5 12.75C24.5 18.9632 19.4632 24 13.25 24H2V12.75C2 6.53679 7.03679 1.5 13.25 1.5C19.4632 1.5 24.5 6.53679 24.5 12.75Z"
                class="ccustom" fill="#17CF97"></path>
            <path
                d="M24.5 35.25C24.5 29.0368 29.5368 24 35.75 24H47V35.25C47 41.4632 41.9632 46.5 35.75 46.5C29.5368 46.5 24.5 41.4632 24.5 35.25Z"
                class="ccustom" fill="#17CF97"></path>
            <path
                d="M2 35.25C2 41.4632 7.03679 46.5 13.25 46.5H24.5V35.25C24.5 29.0368 19.4632 24 13.25 24C7.03679 24 2 29.0368 2 35.25Z"
                class="ccustom" fill="#17CF97"></path>
            <path
                d="M47 12.75C47 6.53679 41.9632 1.5 35.75 1.5H24.5V12.75C24.5 18.9632 29.5368 24 35.75 24C41.9632 24 47 18.9632 47 12.75Z"
                class="ccustom" fill="#17CF97"></path>
        </svg>
        <h2 class="font-mono text-gray-700">Horizon</h2>
    </a>


    <a href="/classes" class="mb-9">
        <x-UIcomponents.button width='w-52'>
            <h1 class="font-medium">Create class</h1>
            <i class="fa-solid fa-plus text-lg"></i>
        </x-UIcomponents.button>
    </a>
    <div class="flex flex-col self-stretch gap-3 pl-2">
        {{-- <x-sidebarSection section="overview" icon="fa-solid fa-chart-pie" /> --}}

        <x-sidebarSection section="classes" icon="fa-solid fa-chalkboard" />

        <x-sidebarSection section="teachers" icon="fa-solid fa-chalkboard-user" />

        <x-sidebarSection section="students" icon="fa-solid fa-user-graduate" />

        {{-- <x-sidebarSection section="timetable" icon="fa-solid fa-calendar" /> --}}

    </div>
</div>

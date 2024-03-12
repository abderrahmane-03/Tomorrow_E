<x-app-layout>

<div class="flex  bg-amber-50">

<div class="flex h-screen bg-amber-50">

    <!-- Sidebar -->
    <div class="fixed top-0 left-0 h-full bg-violet-100 w-60">
        <nav class="mt-10 p-4">
            <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-indigo-300 hover:text-white " href="{{route('admin_stats')}}">
                <i class="fas fa-home mr-2"></i>Statestiques
            </a>
            <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-indigo-300 hover:text-white" href="{{route('admin_events')}}">
                <i class="fas fa-store mr-2"></i>Pending Events
            </a>
            <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-indigo-300 hover:text-white" href="{{route('admin_categories')}}">
                <i class="fas fa-store mr-2"></i>Categories
            </a>
        </nav>
    </div>

    <!-- Content -->
    <div class="ml-60 w-full">
        <!-- Content here -->
    </div>

</div>

        <div class="flex-1 p-4 w-full md:w-1/2">

            <div class="mt-8 flex flex-wrap space-x-0 space-y-2 md:space-x-4 md:space-y-0">
                <div class="flex-1 bg-violet-100 p-4 shadow rounded-lg md:w-1/2">

                    <h2 class="text-black text-lg font-semibold pb-1">Categories</h2>
                    <div class="my-1"></div>
                    <div class="bg-indigo-300 h-px mb-6"></div>
                    <div class="flex">
                        <svg class="w-6 h-6 text-gray-800 dark:text-gray" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.333 6.764a3 3 0 1 1 3.141-5.023M2.5 16H1v-2a4 4 0 0 1 4-4m7.379-8.121a3 3 0 1 1 2.976 5M15 10a4 4 0 0 1 4 4v2h-1.761M13 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-4 6h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
                        </svg>

                        <span class="py-2 px-8 bg-grey-lightest font-bold uppercase text-l text-grey-light ">

                            {{$categories->count()}}</span>
                        <h3 class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-black border-b border-grey-light">
                            All categories</h3>
                    </div>
                </div>

                <div class="flex-1 bg-violet-100 p-4 shadow rounded-lg md:w-1/2">
                    <h2 class="text-black text-lg font-semibold pb-1">Clients</h2>
                    <div class="my-1"></div>
                    <div class="bg-indigo-300 h-px mb-6"></div>
                    <div class="flex">
                        <svg class="ml-4 mb-6 w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="worker">
                            <g data-name="Layer 16">
                                <path d="M29.17 36H24a1 1 0 0 1-1-1v-1.76A11.07 11.07 0 0 0 29.24 27H30a4 4 0 0 0 0-8v-1h3a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-1A12 12 0 0 0 20 1h-2A12 12 0 0 0 6.05 12H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h3v1a4 4 0 0 0 0 8h.76A11.07 11.07 0 0 0 15 33.24V35a1 1 0 0 1-1 1H8.83A7.82 7.82 0 0 0 1 43.83V62a1 1 0 0 0 1 1h34a1 1 0 0 0 1-1V43.83A7.82 7.82 0 0 0 29.17 36zM32 23a2 2 0 0 1-2 2h-.19a11 11 0 0 0 .19-2v-2a2 2 0 0 1 2 2zM20 3v5h-2V3zm-4 .2V9a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V3.2a10 10 0 0 1 8 8.8H8.05A10 10 0 0 1 16 3.2zM6 14h26v2H6zm2 11a2 2 0 0 1 0-4v2a11 11 0 0 0 .19 2zm2-2v-5h18v5a9 9 0 0 1-18 0zm7 12v-1.19a10.62 10.62 0 0 0 4 0V35a3 3 0 0 0 2 2.82V38a4 4 0 0 1-8 0v-.18A3 3 0 0 0 17 35zm2 9a6 6 0 0 0 6-6h2v3.34a14.59 14.59 0 0 0 4 10.07V61H7v-9.59a14.59 14.59 0 0 0 4-10.07V38h2a6 6 0 0 0 6 6zm-16-.17A5.84 5.84 0 0 1 8.83 38H9v3.34a12.58 12.58 0 0 1-3.71 8.95A1 1 0 0 0 5 51v10H3zM35 61h-2V51a1 1 0 0 0-.29-.71A12.58 12.58 0 0 1 29 41.34V38h.17A5.84 5.84 0 0 1 35 43.83zm14-11.55v-17a7.44 7.44 0 0 0-.65-13.49 1 1 0 0 0-1.35.94v5.55l-1 1.05-1-1.05v-5.57a1 1 0 0 0-1.35-.94A7.44 7.44 0 0 0 43 32.43v17a7.44 7.44 0 0 0 .65 13.49A1 1 0 0 0 45 62v-5.55l1-1.05 1 1.05V62a1 1 0 0 0 1 1 1 1 0 0 0 .35-.06A7.44 7.44 0 0 0 49 49.45zm0 10.85v-4.25a1 1 0 0 0-.28-.69l-2-2.1a1 1 0 0 0-1.44 0l-2 2.1a1 1 0 0 0-.28.69v4.25a5.46 5.46 0 0 1-2-4.25 5.32 5.32 0 0 1 3.35-5 1 1 0 0 0 .65-.93V31.78a1 1 0 0 0-.65-.94 5.32 5.32 0 0 1-3.35-5 5.46 5.46 0 0 1 2-4.25v4.25a1 1 0 0 0 .28.69l2 2.1a1 1 0 0 0 1.44 0l2-2.1a1 1 0 0 0 .28-.69v-4.26a5.46 5.46 0 0 1 2 4.25 5.32 5.32 0 0 1-3.35 5 1 1 0 0 0-.65.94v18.34a1 1 0 0 0 .65.93 5.32 5.32 0 0 1 3.35 5 5.46 5.46 0 0 1-2 4.26z"></path>
                                <path d="M62.71 10.71A1 1 0 0 0 63 10V2a1 1 0 0 0-1-1h-8a1 1 0 0 0-1 1v8a1 1 0 0 0 .29.71l1.71 1.7v21.18l-1.71 1.7A1 1 0 0 0 53 36v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-8a1 1 0 0 0-.29-.71L61 33.59V12.41Zm-3.42 24 1.71 1.7V43h-6v-6.59l1.71-1.7A1 1 0 0 0 57 34V12a1 1 0 0 0-.29-.71L55 9.59V3h6v6.59l-1.71 1.7A1 1 0 0 0 59 12v22a1 1 0 0 0 .29.71Z"></path>
                            </g>
                        </svg>
                        <span class=" px-10  bg-grey-lightest font-bold uppercase text-l text-grey-light ">

                            {{$participateurs->count()}}</span>
                        <h3 class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-black border-b border-grey-light">
                            Active Clients</h3>
                    </div>
                </div>

                <div class="flex-1 bg-violet-100 p-4 shadow rounded-lg md:w-1/2">
                    <h2 class="text-black text-lg font-semibold pb-1">reservations</h2>
                    <div class="my-1"></div>
                    <div class="bg-indigo-300 h-px mb-6"></div>
                    <div class="flex">
                        <svg class="h-12 ml-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 66 82.5" style="enable-background:new 0 0 66 66;" xml:space="preserve">
                            <path d="M63.49,35.81l-2.64,1.88l-1.11-1.57c-0.01-0.01-0.01-0.02-0.02-0.03l-9.69-13.65c-0.01-0.01-0.02-0.01-0.02-0.02l-0.61-0.86  l15.11-10.74c0.39-0.28,0.49-0.83,0.21-1.22c-0.28-0.39-0.83-0.49-1.22-0.21L47.67,20.64c-0.39,0.28-0.49,0.83-0.21,1.22l0.6,0.85  l-1.67,1.07c-0.83,0.53-1.83,0.73-2.8,0.55l-12.45-2.26c-2.17-0.39-4.38,0.52-5.64,2.32l-0.06,0.08c-0.56-0.07-1.13-0.1-1.69-0.05  c-1.49,0.13-2.99-0.27-4.22-1.13l-1.31-0.92l0.31-0.44c0.28-0.39,0.19-0.94-0.21-1.22L2.51,9.47C2.11,9.2,1.56,9.29,1.29,9.68  c-0.28,0.39-0.19,0.94,0.21,1.22l15.11,10.73l-0.31,0.43c0,0-0.01,0-0.01,0.01L6.06,36.48c0,0,0,0.01-0.01,0.02l-0.91,1.28  l-2.64-1.88c-0.4-0.28-0.94-0.19-1.22,0.21c-0.28,0.39-0.19,0.94,0.21,1.22l3.36,2.38c0.15,0.11,0.33,0.16,0.51,0.16  c0.27,0,0.54-0.13,0.71-0.37l0.92-1.29l4.4,3.08l-0.89,1.27c-1.04,1.49-0.68,3.54,0.81,4.58c0.55,0.38,1.17,0.57,1.79,0.59  c-0.09,0.41-0.1,0.83-0.02,1.26c0.15,0.87,0.63,1.62,1.35,2.13c0.57,0.4,1.23,0.59,1.88,0.59c0.61,0,1.21-0.19,1.74-0.52  c0.23,0.59,0.62,1.11,1.18,1.5c0.57,0.4,1.23,0.59,1.88,0.59c0.24,0,0.48-0.03,0.71-0.08c0.01,0.05,0,0.09,0.01,0.14  c0.15,0.87,0.63,1.62,1.35,2.13c0.56,0.39,1.21,0.6,1.88,0.6c0.19,0,0.39-0.02,0.58-0.05c0.87-0.15,1.62-0.63,2.13-1.35l0.52-0.74  c0.13-0.18,0.23-0.37,0.32-0.57l4.01,2.81c0.61,0.43,1.31,0.63,2.01,0.63c1.11,0,2.2-0.52,2.88-1.49c0.37-0.52,0.57-1.12,0.62-1.71  l2.18,1.52c0.77,0.54,1.7,0.74,2.62,0.58c0.92-0.16,1.73-0.67,2.26-1.44c0.38-0.54,0.6-1.17,0.63-1.82  c1.41,0.57,3.07,0.25,4.05-0.89c0.65-0.75,0.95-1.75,0.83-2.73c-0.09-0.75-0.43-1.44-0.94-1.98c0.7-0.3,1.28-0.83,1.66-1.51  c0.36-0.64,0.47-1.37,0.38-2.08l7.02-5.38l1.12,1.57c0.13,0.19,0.34,0.32,0.57,0.36c0.05,0.01,0.1,0.01,0.15,0.01  c0.18,0,0.36-0.06,0.51-0.16l3.36-2.38c0.39-0.28,0.49-0.83,0.21-1.22C64.43,35.63,63.89,35.53,63.49,35.81z M11.68,44.7  c-0.07-0.41,0.02-0.82,0.26-1.15l1.55-2.21c0.3-0.43,0.78-0.66,1.27-0.66c0.31,0,0.61,0.09,0.88,0.28c0.7,0.49,0.87,1.45,0.38,2.15  l-1.34,1.92l-0.2,0.29c-0.49,0.7-1.45,0.87-2.15,0.38C11.98,45.46,11.75,45.11,11.68,44.7z M16.59,49.92  c-0.41,0.07-0.81-0.02-1.15-0.26c-0.34-0.24-0.56-0.59-0.63-1c-0.07-0.41,0.02-0.81,0.26-1.15l0.84-1.19c0,0,0,0,0,0l0.2-0.29  l2.18-3.12c0.24-0.34,0.59-0.56,1-0.63c0.09-0.02,0.18-0.02,0.27-0.02c0.31,0,0.62,0.1,0.88,0.28c0.34,0.24,0.56,0.59,0.63,1  c0.07,0.41-0.02,0.82-0.26,1.15l-0.84,1.19c0,0,0,0,0,0l-0.77,1.1l-1.61,2.3C17.35,49.62,16.99,49.85,16.59,49.92z M20.23,51.24  c-0.7-0.49-0.87-1.45-0.38-2.15l0.77-1.1l0.77-1.1c0.3-0.43,0.78-0.66,1.27-0.66c0.31,0,0.61,0.09,0.88,0.28  c0.7,0.49,0.87,1.45,0.38,2.15l-1.03,1.47c0,0,0,0,0,0l-0.52,0.74C21.89,51.56,20.93,51.73,20.23,51.24z M26.86,52.9l-0.52,0.74  c-0.24,0.34-0.59,0.56-1,0.63c-0.4,0.07-0.81-0.02-1.15-0.26c-0.34-0.24-0.56-0.59-0.63-1c-0.07-0.41,0.02-0.82,0.26-1.15l0.52-0.74  c0.3-0.43,0.78-0.65,1.26-0.65c0.31,0,0.61,0.09,0.88,0.28C27.17,51.24,27.34,52.21,26.86,52.9z M49.89,44.45  c-0.25,0.44-0.66,0.75-1.15,0.86c-0.49,0.11-0.99,0.01-1.4-0.27c0,0,0,0,0,0l-4.61-3.23c-0.4-0.28-0.94-0.18-1.22,0.21  s-0.18,0.94,0.21,1.22l4.61,3.23c0,0,0,0,0,0c0,0,0,0,0,0l1.88,1.32c0.41,0.28,0.67,0.73,0.74,1.22c0.06,0.5-0.09,0.99-0.42,1.37  c-0.58,0.67-1.66,0.76-2.46,0.2l-1.76-1.23c0,0,0,0,0,0l-5.75-4.03c-0.4-0.28-0.94-0.18-1.22,0.21s-0.18,0.94,0.21,1.22l5.75,4.03  l0,0c0.38,0.27,0.64,0.67,0.72,1.13s-0.02,0.93-0.29,1.31c-0.56,0.8-1.65,0.99-2.45,0.43l-3.7-2.59c0,0,0,0,0,0l-3.48-2.44  c-0.4-0.28-0.94-0.18-1.22,0.21s-0.18,0.94,0.21,1.22l2.52,1.76c0,0,0,0,0,0c0.79,0.56,0.99,1.65,0.43,2.45  c-0.56,0.79-1.65,0.99-2.45,0.43l-4.82-3.37c-0.17-0.79-0.61-1.52-1.32-2.02c0,0,0,0,0,0c-0.52-0.36-1.1-0.54-1.69-0.58  c0.41-1.33-0.04-2.83-1.24-3.67c-0.55-0.38-1.17-0.57-1.79-0.59c0.09-0.41,0.1-0.83,0.02-1.25c-0.15-0.87-0.63-1.62-1.35-2.13  c-0.72-0.5-1.59-0.7-2.46-0.54c-0.42,0.07-0.82,0.23-1.17,0.45c-0.23-0.58-0.62-1.1-1.17-1.48c0,0,0,0,0,0  c-1.32-0.92-3.08-0.74-4.19,0.35L8,36.77l9.21-12.97l1.32,0.92c1.57,1.1,3.47,1.61,5.38,1.44c0.12-0.01,0.24,0,0.36-0.01l-4.06,5.8  c-0.69,0.98-0.45,2.34,0.53,3.02c2.51,1.75,5.97,1.14,7.73-1.36l2.86-4.08l2.2,1.54l5.57,3.9c0,0,0,0,0,0l10.14,7.1  C50.04,42.63,50.32,43.67,49.89,44.45z M51.14,41.53c-0.24-0.34-0.54-0.65-0.89-0.9l-6.82-4.77c1.42-0.29,2.66-1.08,3.49-2.27  c0.28-0.4,0.18-0.94-0.21-1.22c-0.4-0.28-0.94-0.18-1.22,0.21c-0.59,0.84-1.48,1.41-2.49,1.59c-1.01,0.18-2.04-0.05-2.88-0.64  l-5.56-3.9l-2.93-2.05c-0.19-0.13-0.43-0.19-0.65-0.14c-0.23,0.04-0.43,0.17-0.56,0.36l-3.36,4.8c-1.2,1.71-3.58,2.13-5.29,0.93  c-0.19-0.13-0.24-0.4-0.1-0.58l5.3-7.57c0.87-1.24,2.4-1.87,3.89-1.6l12.45,2.26c1.41,0.25,2.85-0.03,4.06-0.8l1.74-1.11l8.72,12.28  L51.14,41.53z" /><text x="0" y="81" fill="#000000" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">
                        </svg>
                        <span class="py-2 px-10 bg-grey-lightest font-bold uppercase text-l text-grey-light ">

                            {{$reservations->count()}}</span>
                        <h3 class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-black border-b border-grey-light">
                            Total reservations</h3>

                    </div>
                </div>
            </div>
            <div class="mt-8 gap-8 flex flex-wrap space-x-0 space-y-2 md:space-x-4 md:space-y-0">
                <div class="flex-1 bg-violet-100 p-4 shadow rounded-lg md:w-1/2">

                    <h2 class="text-black text-lg font-semibold pb-1">Online Organizers</h2>
                    <div class="my-1"></div>
                    <div class="bg-indigo-300 h-px mb-6"></div>
                    <div class="flex">
                        <svg class="h-12 ml-3" xmlns="http://www.w3.org/2000/svg" data-name="Слой 1" viewBox="0 0 128 160" x="0px" y="0px">
                            <title>Монтажная область 27</title>
                            <path d="M103.54,12.93H83V10.56a2,2,0,0,0-2-2h-6.6A10.57,10.57,0,0,0,64,0h0A10.58,10.58,0,0,0,53.63,8.56H47a2,2,0,0,0-2,2v2.36H24.49a2,2,0,0,0-2,2l0,111.07a2,2,0,0,0,2,2l79,0a2,2,0,0,0,2-2l0-111.07A2,2,0,0,0,103.54,12.93ZM47,29.41H81a2,2,0,0,0,2-2V24.69H93.44l0,91.55H34.56l0-91.55H45v2.74A2,2,0,0,0,47,29.41Zm2-16.86h6.41a2,2,0,0,0,2-2A6.57,6.57,0,0,1,64,4h0a6.56,6.56,0,0,1,6.56,6.56,2,2,0,0,0,2,2H79V25.42H49ZM101.51,124l-75,0,0-107.07H45v3.76H32.58a2,2,0,0,0-2,2l0,95.55a2,2,0,0,0,2,2H95.42a2,2,0,0,0,2-2l0-95.55a2,2,0,0,0-2-2H83V16.93h18.57Z" />
                            <path d="M64,83.46a2,2,0,0,0,2-2V49.33a2,2,0,0,0-4,0V81.46A2,2,0,0,0,64,83.46Z" />
                            <circle cx="64" cy="91.05" r="2.25" />
                        </svg>
                        <span class="py-2 px-8 bg-grey-lightest font-bold uppercase text-l text-grey-light ">

                            {{$organizers->count()}}</span>
                        <h3 class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-black border-b border-grey-light">
                            Organizers</h3>
                    </div>
                </div>
                <div class="flex-1 bg-violet-100 p-4 shadow rounded-lg md:w-1/2">

                    <h2 class="text-black text-lg font-semibold pb-1">Online Events</h2>
                    <div class="my-1"></div>
                    <div class="bg-indigo-300 h-px mb-6"></div>
                    <div class="flex">
                        <svg class="h-12 ml-3" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 100 125" x="0px" y="0px">
                            <title>88all</title>
                            <path d="M37.11,29.55l7.75,7.75,1.45-1.45L38.55,28.1c-.3-.3,0-1.35,0-1.35L33.3,22.23l-2.08,2.08,4.53,5.24S36.85,29.3,37.11,29.55Z" />
                            <path d="M56,41.89,50.89,47,62,58.09a2.3,2.3,0,0,0,3.26,0l1.81-1.81a2.3,2.3,0,0,0,0-3.26Z" />
                            <path d="M63.18,31.22a3.11,3.11,0,1,1-4.4-4.4L63.65,22a8.56,8.56,0,0,0-3.45-.79,8.71,8.71,0,0,0-8.64,8.64,8.56,8.56,0,0,0,.79,3.45L32.11,53.5a3.11,3.11,0,1,0,4.4,4.4L56.74,37.65a8.56,8.56,0,0,0,3.45.79,8.71,8.71,0,0,0,8.64-8.64A8.56,8.56,0,0,0,68,26.35Z" />
                            <path d="M77,11.24H23a12,12,0,0,0-12,12v36a12,12,0,0,0,12,12H42.18l16.74,16.5a3.42,3.42,0,0,0,2.39,1,2.82,2.82,0,0,0,1.33-.33A2.58,2.58,0,0,0,64,85.77l-.38-14.52H77a12,12,0,0,0,12-12v-36A12,12,0,0,0,77,11.24Zm8,48a8,8,0,0,1-8,8H61.54a2,2,0,0,0-2,2.05l.36,13.79L44.4,67.82a2,2,0,0,0-1.4-.58H23a8,8,0,0,1-8-8v-36a8,8,0,0,1,8-8H77a8,8,0,0,1,8,8Z" />
                        </svg>
                        <span class="py-2 px-8 bg-grey-lightest font-bold uppercase text-l text-grey-light ">

                            {{$events->count()}} </span>
                        <h3 class=" py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-black border-b border-grey-light">
                            Events</h3>
                    </div>
                </div>

                <table class="items-center ml-6 w-[75rem] bg-pink-200 rounded-2xl border-collapse">
    <thead>
        <tr>
            <th class="px-6 align-middle border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-indigo-300 text-indingo-300 border-2 border-amber-400">User</th>
            <th class="px-6 align-middle border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-indigo-300 text-indingo-300 border-2 border-amber-400">Email</th>
            <th class="px-6 align-middle border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-indigo-300 text-indingo-300 border-2 border-amber-400">Role</th>
            <th class="px-6 align-middle border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-indigo-300 text-indingo-300 border-2 border-amber-400">Status</th>
            <th class="px-6 align-middle border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-indigo-300 text-indingo-300 border-2 border-amber-400">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                <img src="/logo.png" class="h-12 w-12 bg-white rounded-full border" alt="...">
                <span class="ml-3 font-bold text-white">{{ $user->name }}</span>
            </td>
            <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs text-left items-center  whitespace-nowrap p-4">
                <span class="ml-3 font-bold text-white">{{ $user->email }}</span>
            </td>
            <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs  text-left items-center  whitespace-nowrap p-4">
                <span class="ml-3 font-bold text-white">
                    @if ($user->role === 'participateur')
                        Participateur
                    @elseif ($user->role === 'organisateur')
                        Organisateur
                    @endif
                </span>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs  text-left items-center  whitespace-nowrap p-4">
                <span class="ml-3 font-bold text-white">
                    @if ($user->role === 'participateur')
                        @if ($user->banned === 1)
                            <span class="p-1 bg-red-200 rounded-lg font-bold text-red-500">restricted</span>
                        @elseif ($user->banned === 0)
                            <span class="p-1 bg-green-200 rounded-lg font-bold text-green-500">online</span>
                        @endif
                    @elseif ($user->role === 'organisateur')
                        @if ($user->banned === 1)
                            <span class="p-1 bg-red-200 rounded-lg font-bold text-red-500">restricted</span>
                        @elseif ($user->banned === 0)
                            <span class="p-1 bg-green-200 rounded-lg font-bold text-green-500">online</span>
                        @endif
                    @endif
                </span>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                @if (($user->role === 'participateur' && $user->banned === 0) || ($user->role === 'organisateur' && $user->banned === 0))
                    <form action="{{ route('user_ban', $user->id) }}" method="post" class="flex gap-2 items-center">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="px-4 font-bold p-2 text-green-500 bg-green-200 rounded-lg hover:bg-green-300">Ban</button>
                    </form>
                @elseif (($user->role === 'participateur' && $user->banned === 1) || ($user->role === 'organisateur' && $user->banned === 1))
                    <form action="{{ route('user_unban', $user->id) }}" method="post" class="flex gap-2 items-center">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="px-4 p-2 font-bold bg-red-200 text-red-500 rounded-lg hover:bg-red-300">Unban</button>
                    </form>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


        </div>

</x-app-layout>

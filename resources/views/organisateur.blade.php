<x-app-layout>
    <div id="bg" class="fixed inset-0 bg-black opacity-50 z-40 hidden"></div>


    <div class="flex"><button onclick="showform()" class=" ml-44 mt-4 bg-violet-200  px-6 py-2 rounded-lg text-violet-500 font-semibold text-sm transition duration-300 ease-in-out transform hover:translate-y-0.5">
            Add a New Event
        </button>
        <a href="{{route("reservations")}}" class="ml-44 mt-4 bg-blue-300  px-6 py-2 rounded-lg text-blue-500 font-semibold text-sm transition duration-300 ease-in-out transform hover:translate-y-0.5">
            Pending Reservations
        </a>
    </div>

    <div class="flex ml-32 flex-wrap">

        @foreach ($events as $event)

        <div class="relative mt-6 mx-6 w-96">
            <div class="relative inline-block duration-300 ease-in-out transition-transform transform hover:translate-y-0.5 w-full">
                <div class="shadow p-4 rounded-lg bg-violet-100">

                    <form method="POST" action="{{route('delete.event',$event->id)}}">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="absolute top-0 right-3 inline-flex mt-3 ml-3 px-3 py-2 rounded-lg z-10 bg-red-300 text-sm font-medium text-red-500 select-none">Delete</button>
                    </form>
                    <div class="absolute top-0 left-0 inline-flex mt-3 ml-3 px-3 py-2 rounded-lg z-10 bg-blue-300 text-sm font-medium text-blue-500 select-none">Reservations for this event:{{count($reservations[$event->id]) }}</div>


                    <div class="flex justify-center relative rounded-lg overflow-hidden h-52">
                        <div class="transition-transform duration-500 transform ease-in-out hover:scale-110 w-full">
                            <div class="absolute inset-0 bg-black opacity-90 hover:opacity-100"><img src="{{$event->picture}}" alt="" srcset="" /></div>
                        </div>


                        <div class="absolute flex justify-center bottom-0 mb-3">
                            <div class="flex bg-white px-4 py-1 space-x-5 rounded-lg overflow-hidden shadow">
                                <p class="flex items-center font-medium text-gray-800">
                                    <svg class="w-5 h-5 mr-2 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.5 12A2.5 2.5 0 0 1 21 9.5V7a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v2.5a2.5 2.5 0 0 1 0 5V17a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2.5a2.5 2.5 0 0 1-2.5-2.5Z" />
                                    </svg>
                                    Available Tickets
                                </p>

                                <p class="flex items-center font-medium text-gray-800">
                                    <svg class="w-5 h-5 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 512">
                                        <path d="M17.5883 7.872H16.4286L16.7097 8.99658H6.74743V10.1211H17.4309C17.5163 10.1211 17.6006 10.1017 17.6774 10.0642C17.7542 10.0267 17.8214 9.97222 17.874 9.90487C17.9266 9.83753 17.9631 9.75908 17.9808 9.6755C17.9986 9.59192 17.997 9.5054 17.9763 9.42251L17.5883 7.872ZM17.5883 4.49829H16.4286L16.7097 5.62286H6.74743V6.74743H17.4309C17.5163 6.74742 17.6006 6.72794 17.6774 6.69046C17.7542 6.65299 17.8214 6.59851 17.874 6.53116C17.9266 6.46381 17.9631 6.38537 17.9808 6.30179C17.9986 6.2182 17.997 6.13168 17.9763 6.04879L17.5883 4.49829ZM17.4309 0H0.562286C0.413158 0 0.270139 0.0592407 0.16469 0.16469C0.0592407 0.270139 0 0.413158 0 0.562286L0 2.81143C0 2.96056 0.0592407 3.10358 0.16469 3.20903C0.270139 3.31448 0.413158 3.37372 0.562286 3.37372H4.49829V5.62286H1.28271L1.56386 4.49829H0.404143L0.0175714 6.04879C-0.00313354 6.13162 -0.00470302 6.21808 0.012982 6.30161C0.0306671 6.38514 0.0671423 6.46355 0.119641 6.53088C0.172139 6.59822 0.239283 6.65271 0.315978 6.69023C0.392673 6.72775 0.476905 6.74731 0.562286 6.74743H4.49829V8.99658H1.28271L1.56386 7.872H0.404143L0.0175714 9.42251C-0.00313354 9.50534 -0.00470302 9.5918 0.012982 9.67533C0.0306671 9.75886 0.0671423 9.83727 0.119641 9.9046C0.172139 9.97193 0.239283 10.0264 0.315978 10.0639C0.392673 10.1015 0.476905 10.121 0.562286 10.1211H4.49829V14.7228C4.12312 14.8554 3.80693 15.1164 3.60559 15.4596C3.40424 15.8028 3.33072 16.2062 3.39801 16.5984C3.4653 16.9906 3.66907 17.3464 3.9733 17.6028C4.27754 17.8593 4.66265 18 5.06057 18C5.4585 18 5.84361 17.8593 6.14784 17.6028C6.45208 17.3464 6.65585 16.9906 6.72314 16.5984C6.79043 16.2062 6.7169 15.8028 6.51556 15.4596C6.31422 15.1164 5.99803 14.8554 5.62286 14.7228V3.37372H17.4309C17.58 3.37372 17.723 3.31448 17.8285 3.20903C17.9339 3.10358 17.9932 2.96056 17.9932 2.81143V0.562286C17.9932 0.413158 17.9339 0.270139 17.8285 0.16469C17.723 0.0592407 17.58 0 17.4309 0V0ZM5.06057 16.8686C4.94936 16.8686 4.84065 16.8356 4.74818 16.7738C4.65572 16.712 4.58365 16.6242 4.54109 16.5215C4.49853 16.4187 4.4874 16.3057 4.50909 16.1966C4.53079 16.0875 4.58434 15.9873 4.66298 15.9087C4.74162 15.8301 4.8418 15.7765 4.95088 15.7548C5.05995 15.7331 5.17301 15.7443 5.27575 15.7868C5.3785 15.8294 5.46631 15.9014 5.5281 15.9939C5.58988 16.0864 5.62286 16.1951 5.62286 16.3063C5.62286 16.4554 5.56362 16.5984 5.45817 16.7039C5.35272 16.8093 5.2097 16.8686 5.06057 16.8686ZM16.8686 2.24914H1.12457V1.12457H16.8686V2.24914Z"></path>
                                    </svg>
                                    {{ $event->places_available }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h2 class="font-medium text-base md:text-lg text-gray-800 line-clamp-1" title="New York">
                            {{$event->title}}
                        </h2>
                        <p class="mt-2 text-sm text-gray-800 line-clamp-1" title="New York, NY 10004, United States">
                            {{$event->description}}
                        </p>
                    </div>

                    <!-- Grid for property details -->
                    <div class="grid grid-cols-2 grid-rows-2 gap-4 mt-8">
                        <!-- Each property detail is wrapped in a paragraph tag -->
                        <!-- Icon and text for property type -->
                        <p class="inline-flex flex-col xl:flex-row xl:items-center text-gray-800">
                            <svg class="w-5 h-5 mr-2 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11H4m15.5 5c.3 0 .5-.2.5-.5V8c0-.6-.4-1-1-1h-3.8a1 1 0 0 1-.8-.4L13 4.4a1 1 0 0 0-.8-.4H8a1 1 0 0 0-1 1M4 9v10c0 .6.4 1 1 1h11c.6 0 1-.4 1-1v-7c0-.6-.4-1-1-1h-3.8a1 1 0 0 1-.8-.4L10 8.4a1 1 0 0 0-.8-.4H5a1 1 0 0 0-1 1Z" />
                            </svg>
                            <span class="mt-2 xl:mt-0">
                                {{$event->category->name}}
                            </span>
                        </p>
                        <!-- Icon and text for property feature -->
                        <p class="inline-flex flex-col xl:flex-row xl:items-center text-gray-800">
                            <svg class="inline-block w-5 h-5 xl:w-4 xl:h-4 mr-3 fill-current text-gray-800" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.5883 7.872H16.4286L16.7097 8.99658H6.74743V10.1211H17.4309C17.5163 10.1211 17.6006 10.1017 17.6774 10.0642C17.7542 10.0267 17.8214 9.97222 17.874 9.90487C17.9266 9.83753 17.9631 9.75908 17.9808 9.6755C17.9986 9.59192 17.997 9.5054 17.9763 9.42251L17.5883 7.872ZM17.5883 4.49829H16.4286L16.7097 5.62286H6.74743V6.74743H17.4309C17.5163 6.74742 17.6006 6.72794 17.6774 6.69046C17.7542 6.65299 17.8214 6.59851 17.874 6.53116C17.9266 6.46381 17.9631 6.38537 17.9808 6.30179C17.9986 6.2182 17.997 6.13168 17.9763 6.04879L17.5883 4.49829ZM17.4309 0H0.562286C0.413158 0 0.270139 0.0592407 0.16469 0.16469C0.0592407 0.270139 0 0.413158 0 0.562286L0 2.81143C0 2.96056 0.0592407 3.10358 0.16469 3.20903C0.270139 3.31448 0.413158 3.37372 0.562286 3.37372H4.49829V5.62286H1.28271L1.56386 4.49829H0.404143L0.0175714 6.04879C-0.00313354 6.13162 -0.00470302 6.21808 0.012982 6.30161C0.0306671 6.38514 0.0671423 6.46355 0.119641 6.53088C0.172139 6.59822 0.239283 6.65271 0.315978 6.69023C0.392673 6.72775 0.476905 6.74731 0.562286 6.74743H4.49829V8.99658H1.28271L1.56386 7.872H0.404143L0.0175714 9.42251C-0.00313354 9.50534 -0.00470302 9.5918 0.012982 9.67533C0.0306671 9.75886 0.0671423 9.83727 0.119641 9.9046C0.172139 9.97193 0.239283 10.0264 0.315978 10.0639C0.392673 10.1015 0.476905 10.121 0.562286 10.1211H4.49829V14.7228C4.12312 14.8554 3.80693 15.1164 3.60559 15.4596C3.40424 15.8028 3.33072 16.2062 3.39801 16.5984C3.4653 16.9906 3.66907 17.3464 3.9733 17.6028C4.27754 17.8593 4.66265 18 5.06057 18C5.4585 18 5.84361 17.8593 6.14784 17.6028C6.45208 17.3464 6.65585 16.9906 6.72314 16.5984C6.79043 16.2062 6.7169 15.8028 6.51556 15.4596C6.31422 15.1164 5.99803 14.8554 5.62286 14.7228V3.37372H17.4309C17.58 3.37372 17.723 3.31448 17.8285 3.20903C17.9339 3.10358 17.9932 2.96056 17.9932 2.81143V0.562286C17.9932 0.413158 17.9339 0.270139 17.8285 0.16469C17.723 0.0592407 17.58 0 17.4309 0V0ZM5.06057 16.8686C4.94936 16.8686 4.84065 16.8356 4.74818 16.7738C4.65572 16.712 4.58365 16.6242 4.54109 16.5215C4.49853 16.4187 4.4874 16.3057 4.50909 16.1966C4.53079 16.0875 4.58434 15.9873 4.66298 15.9087C4.74162 15.8301 4.8418 15.7765 4.95088 15.7548C5.05995 15.7331 5.17301 15.7443 5.27575 15.7868C5.3785 15.8294 5.46631 15.9014 5.5281 15.9939C5.58988 16.0864 5.62286 16.1951 5.62286 16.3063C5.62286 16.4554 5.56362 16.5984 5.45817 16.7039C5.35272 16.8093 5.2097 16.8686 5.06057 16.8686ZM16.8686 2.24914H1.12457V1.12457H16.8686V2.24914Z"></path>
                            </svg>
                            <span class="mt-2 xl:mt-0">
                                {{$event->type_of_reservation}}
                            </span>
                        </p>
                        <!-- Icon and text for property size -->
                        <p class="inline-flex flex-col xl:flex-row xl:items-center text-gray-800">
                            <svg class="w-6 h-6 mr-2 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2a8 8 0 0 1 6.6 12.6l-.1.1-.6.7-5.1 6.2a1 1 0 0 1-1.6 0L6 15.3l-.3-.4-.2-.2v-.2A8 8 0 0 1 11.8 2Zm3 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" clip-rule="evenodd" />
                            </svg>

                            <span class="mt-2 xl:mt-0">
                                {{$event->location}}
                            </span>
                        </p>
                        <!-- Icon and text for property bathrooms -->
                        <p class="inline-flex flex-col xl:flex-row xl:items-center text-gray-800">
                            <svg class="w-6 h-6 mr-2 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14c.6 0 1-.4 1-1V7c0-.6-.4-1-1-1H5a1 1 0 0 0-1 1v12c0 .6.4 1 1 1Zm3-7h0v0h0v0Zm4 0h0v0h0v0Zm4 0h0v0h0v0Zm-8 4h0v0h0v0Zm4 0h0v0h0v0Zm4 0h0v0h0v0Z" />
                            </svg>
                            <span class="mt-2 xl:mt-0">
                                {{$event->date}}
                            </span>
                        </p>
                    </div>

                    <!-- Price and view button -->
                    <div class="flex justify-between items-end mt-8">
                        <button onclick="UpdateForm()" class="inline-flex items-center bg-yellow-300 px-6 py-2 rounded-lg text-yellow-600 font-semibold text-sm transition duration-300 ease-in-out transform hover:translate-y-0.5">
                            Update
                        </button>



                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @if (isset($event) && $event != null)


    <form class="hidden bg-violet-200 rounded-xl absolute top-[40%] left-[40%] transform -translate-x-[40%] -translate-y-[40%] z-50 justify-center items-center w-[32rem] px-3 h-[32rem] sm:fixed sm:top-[25%] sm:left-[32%] sm:transform-none sm:-translate-x-[30%] sm:-translate-y-[30%]" action="{{ route('organisateur.update', ['event' => $event->id]) }}" method="post" id="up-form" enctype="multipart/form-data">
        @csrf
        <div class="grid gap-4 mb-4 sm:grid-cols-2">
            <div>
                <label for="Event_id" class="block mb-2 text-sm font-medium text-gray-900 ">Title</label>
                <input type="text" id="Event_name" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 ">
            </div>
            <input type="hidden" value="{{$organizer->id}}" name="organisateur_id">

            <select id="category_id" name="category_id" class="mt-5 inline-flex bg-violet-200 border border-gray-300 text-violet-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-60 p-2.5">
                <option></option>
                @foreach ($categories as $categorie)
                <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                @endforeach
            </select>
            <div>
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
                <input type="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 ">
            </div>
            <div>
                <label for="places_available" class="block mb-2 text-sm font-medium text-gray-900 ">vailable tickets</label>
                <input type="text" name="places_available" id="places_available" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 ">
            </div>
            <div>
                <label for="location" class="block mb-2 text-sm font-medium text-gray-900 ">location</label>
                <input type="text" name="location" id="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 ">
            </div>
            <div>
                <label for="date" class="block mb-2 text-sm font-medium text-gray-900 ">Date</label>
                <input type="datetime-local" name="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " min="{{ date('Y-m-d\TH:i') }}">
            </div>
            <div>
                <label for="picture" class="block mb-2 text-sm font-medium text-gray-900 ">Picture</label>
                <input type="file" name="picture" id="picture" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 ">
            </div>
            <select name="type_of_reservation" class="mt-5 inline-flex bg-violet-200 border border-gray-300 text-violet-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-60 p-2.5">
                <option></option>
                <option value="manuelle">Manuelle</option>
                <option value="automatique">Automatique</option>
            </select>

            <button type="submit" class="text-white inline-flex items-center bg-violet-300 hover:bg-black focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">

                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd">
                </svg>
                Add
            </button>
            <button type="button" onclick="hideup()" class="text-white inline-flex items-center hover:bg-violet-300 bg-black focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                <svg class="w-5 mt-1 mr-1 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 18 6m0 12L6 6" />
                </svg>cancel</button>
        </div>
    </form>
    <form class="hidden bg-violet-200 rounded-xl absolute top-[40%] left-[40%] transform -translate-x-[40%] -translate-y-[40%] z-50 justify-center items-center w-[32rem] px-3 h-[32rem] sm:fixed sm:top-[25%] sm:left-[32%] sm:transform-none sm:-translate-x-[30%] sm:-translate-y-[30%]" action="{{ route('organisateur.store') }}" method="post" id="res-form" enctype="multipart/form-data">
        @csrf

        <div class="grid gap-4 mb-4 sm:grid-cols-2">
            <div>
                <label for="Event_id" class="block mb-2 text-sm font-medium text-gray-900 ">Title</label>
                <input type="text" id="Event_name" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 ">
            </div>
            <input type="hidden" value="{{$organizer->id}}" name="organisateur_id">

            <select id="category_id" name="category_id" class="mt-5 inline-flex bg-violet-200 border border-gray-300 text-violet-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-60 p-2.5">
                <option value="">Choose a Category</option>
                @foreach ($categories as $categorie)
                <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                @endforeach
            </select>
            <div>
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
                <input type="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 ">
            </div>
            <div>
                <label for="places_available" class="block mb-2 text-sm font-medium text-gray-900 ">vailable tickets</label>
                <input type="text" name="places_available" id="places_available" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 ">
            </div>
            <div>
                <label for="location" class="block mb-2 text-sm font-medium text-gray-900 ">location</label>
                <input type="text" name="location" id="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 ">
            </div>
            <div>
                <label for="date" class="block mb-2 text-sm font-medium text-gray-900 ">Date</label>
                <input type="datetime-local" name="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" min="{{ date('Y-m-d\TH:i') }}">
            </div>
            <div>
                <label for="picture" class="block mb-2 text-sm font-medium text-gray-900 ">Picture</label>
                <input type="file" name="picture" id="picture" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 ">
            </div>
            <select name="type_of_reservation" class="mt-5 inline-flex bg-violet-200 border border-gray-300 text-violet-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-60 p-2.5">
                <option selected>Choose a Category</option>
                <option value="manuelle">Manuelle</option>
                <option value="automatique">Automatique</option>
            </select>

            <button type="submit" class="text-white inline-flex items-center bg-violet-300 hover:bg-black focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">

                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd">
                </svg>
                Add
            </button>
            <button type="button" onclick="hideform()" class="text-white inline-flex items-center hover:bg-violet-300 bg-black focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                <svg class="w-5 mt-1 mr-1 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 18 6m0 12L6 6" />
                </svg>cancel</button>
        </div>
    </form>
    @endif
    <div class="flex justify-center mt-8">
        {{ $events->links('vendor.pagination.tailwind') }}
    </div>
</x-app-layout>


<script>
    function UpdateForm() {
        // Show the form
        document.getElementById('up-form').classList.remove('hidden');
        document.getElementById('up-form').classList.add('flex');
        document.getElementById('bg').classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    function hideup() {
        document.getElementById('up-form').classList.add('hidden');
        document.getElementById('up-form').classList.remove('flex');
        document.getElementById('bg').classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }




    function showform() {

        document.getElementById('res-form').classList.remove('hidden');
        document.getElementById('res-form').classList.add('flex');
        document.getElementById('bg').classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }


    function hideform() {
        document.getElementById('res-form').classList.add('hidden');
        document.getElementById('res-form').classList.remove('flex');
        document.getElementById('bg').classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }
</script>

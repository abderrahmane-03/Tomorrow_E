<x-app-layout>
</x-app-layout>
<div class="flex-col ml-4"><a class="mt-5 inline-flex bg-blue-200 font-bold text-sm rounded-lg w-10 m-2 px-2.5 py-0.5" href="{{route('organisateur')}}"><svg class="w-6 h-6 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/>
  </svg></a></div>
<div class="flex ml-32 flex-wrap">
    @foreach ($reservations as $reservation)

    <div class="relative mt-6 mx-6 w-96 ">
        <a class="relative  inline-block duration-300 ease-in-out transition-transform transform hover:translate-y-0.5 w-full">
            <div class="shadow p-4 rounded-lg bg-blue-200 ">
                <!-- Insert the span element here -->

                <div class="flex justify-center relative rounded-lg overflow-hidden h-52">
                    <div class="transition-transform duration-500 transform ease-in-out hover:scale-110 w-full">
                        <div class="absolute inset-0 bg-black opacity-90 hover:opacity-100"><img src="/{{$reservation->event->picture}}" alt="" srcset="" /></div>
                    </div>


                    <div class="absolute flex gap-2 justify-center bottom-0 mb-3">
                        <form method="post" action="{{route('reservation.reject',$reservation)}}">
                            @csrf
                            @method("PUT")
                            <button type="submit" class="ml-1 bg-red-200 text-red-500 p-3 rounded-lg"><svg class="w-6 h-6 text-red-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 13c-.9 0-1.4.5-2.2 1a22.3 22.3 0 0 0-4 5.1c0 .3-.2.5-.5.7a1.5 1.5 0 0 1-2-.4 1.6 1.6 0 0 1-.4-1.2L9.3 14m7.7-1h3V6.5c0-.8-.7-1.5-1.5-1.5v0c-.8 0-1.5.7-1.5 1.5V13Zm-6.5 1h-5a1 1 0 0 1-.5-.1 1.8 1.8 0 0 1-1-1.4l.1-.9 2.1-6.4C6.5 4.5 6.6 4 8 4c2.3 0 4.8 1 6.7 1.5"/>
  </svg></button>
                        </form>
                        <div class="flex bg-white px-4 py-1 space-x-5 rounded-lg overflow-hidden shadow">
                            <p class="flex items-center font-medium text-gray-800">
                                <svg class="w-5 h-5 mr-2 text-red-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.5 12A2.5 2.5 0 0 1 21 9.5V7a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v2.5a2.5 2.5 0 0 1 0 5V17a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2.5a2.5 2.5 0 0 1-2.5-2.5Z" />
                                </svg>
                                Status
                            </p>

                            <p class="flex items-center font-medium text-gray-800">
                                <svg class="w-5 h-5 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 512">
                                    <path d="M17.5883 7.872H16.4286L16.7097 8.99658H6.74743V10.1211H17.4309C17.5163 10.1211 17.6006 10.1017 17.6774 10.0642C17.7542 10.0267 17.8214 9.97222 17.874 9.90487C17.9266 9.83753 17.9631 9.75908 17.9808 9.6755C17.9986 9.59192 17.997 9.5054 17.9763 9.42251L17.5883 7.872ZM17.5883 4.49829H16.4286L16.7097 5.62286H6.74743V6.74743H17.4309C17.5163 6.74742 17.6006 6.72794 17.6774 6.69046C17.7542 6.65299 17.8214 6.59851 17.874 6.53116C17.9266 6.46381 17.9631 6.38537 17.9808 6.30179C17.9986 6.2182 17.997 6.13168 17.9763 6.04879L17.5883 4.49829ZM17.4309 0H0.562286C0.413158 0 0.270139 0.0592407 0.16469 0.16469C0.0592407 0.270139 0 0.413158 0 0.562286L0 2.81143C0 2.96056 0.0592407 3.10358 0.16469 3.20903C0.270139 3.31448 0.413158 3.37372 0.562286 3.37372H4.49829V5.62286H1.28271L1.56386 4.49829H0.404143L0.0175714 6.04879C-0.00313354 6.13162 -0.00470302 6.21808 0.012982 6.30161C0.0306671 6.38514 0.0671423 6.46355 0.119641 6.53088C0.172139 6.59822 0.239283 6.65271 0.315978 6.69023C0.392673 6.72775 0.476905 6.74731 0.562286 6.74743H4.49829V8.99658H1.28271L1.56386 7.872H0.404143L0.0175714 9.42251C-0.00313354 9.50534 -0.00470302 9.5918 0.012982 9.67533C0.0306671 9.75886 0.0671423 9.83727 0.119641 9.9046C0.172139 9.97193 0.239283 10.0264 0.315978 10.0639C0.392673 10.1015 0.476905 10.121 0.562286 10.1211H4.49829V14.7228C4.12312 14.8554 3.80693 15.1164 3.60559 15.4596C3.40424 15.8028 3.33072 16.2062 3.39801 16.5984C3.4653 16.9906 3.66907 17.3464 3.9733 17.6028C4.27754 17.8593 4.66265 18 5.06057 18C5.4585 18 5.84361 17.8593 6.14784 17.6028C6.45208 17.3464 6.65585 16.9906 6.72314 16.5984C6.79043 16.2062 6.7169 15.8028 6.51556 15.4596C6.31422 15.1164 5.99803 14.8554 5.62286 14.7228V3.37372H17.4309C17.58 3.37372 17.723 3.31448 17.8285 3.20903C17.9339 3.10358 17.9932 2.96056 17.9932 2.81143V0.562286C17.9932 0.413158 17.9339 0.270139 17.8285 0.16469C17.723 0.0592407 17.58 0 17.4309 0V0ZM5.06057 16.8686C4.94936 16.8686 4.84065 16.8356 4.74818 16.7738C4.65572 16.712 4.58365 16.6242 4.54109 16.5215C4.49853 16.4187 4.4874 16.3057 4.50909 16.1966C4.53079 16.0875 4.58434 15.9873 4.66298 15.9087C4.74162 15.8301 4.8418 15.7765 4.95088 15.7548C5.05995 15.7331 5.17301 15.7443 5.27575 15.7868C5.3785 15.8294 5.46631 15.9014 5.5281 15.9939C5.58988 16.0864 5.62286 16.1951 5.62286 16.3063C5.62286 16.4554 5.56362 16.5984 5.45817 16.7039C5.35272 16.8093 5.2097 16.8686 5.06057 16.8686ZM16.8686 2.24914H1.12457V1.12457H16.8686V2.24914Z"></path>
                                </svg>
                                {{ $reservation->status }}
                            </p>
                        </div>
                        <form method="post" action="{{route('reservation.accept',$reservation)}}">
                            @csrf
                            @method("PUT")
                            <button type="submit" class="bg-green-200 text-green-500 rounded-lg p-3"><svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11c.9 0 1.4-.5 2.2-1a33.3 33.3 0 0 0 4.5-5.8 1.5 1.5 0 0 1 2 .3 1.6 1.6 0 0 1 .4 1.3L14.7 10M7 11H4v6.5c0 .8.7 1.5 1.5 1.5v0c.8 0 1.5-.7 1.5-1.5V11Zm6.5-1h5l.5.1a1.8 1.8 0 0 1 1 1.4l-.1.9-2.1 6.4c-.3.7-.4 1.2-1.7 1.2-2.3 0-4.8-1-6.7-1.5" />
                                </svg></button>
                        </form>
                    </div>

                </div>

                <div class="mt-4">
                    <h2 class="font-medium text-base md:text-lg text-gray-800 line-clamp-1" title="New York">
                        {{$reservation->event->title}}
                    </h2>

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
                            {{$reservation->event->category->name}}
                        </span>
                    </p>
                    <!-- Icon and text for property feature -->
                    
                    <!-- Icon and text for property size -->
                    <p class="inline-flex flex-col xl:flex-row xl:items-center text-gray-800">
                        <svg class="w-6 h-6 mr-2 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 2a8 8 0 0 1 6.6 12.6l-.1.1-.6.7-5.1 6.2a1 1 0 0 1-1.6 0L6 15.3l-.3-.4-.2-.2v-.2A8 8 0 0 1 11.8 2Zm3 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" clip-rule="evenodd" />
                        </svg>

                        <span class="mt-2 xl:mt-0">
                            {{$reservation->event->location}}
                        </span>
                    </p>
                    <!-- Icon and text for property bathrooms -->
                    <p class="inline-flex flex-col xl:flex-row xl:items-center text-gray-800">
                        <svg class="w-6 h-6 mr-2 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14c.6 0 1-.4 1-1V7c0-.6-.4-1-1-1H5a1 1 0 0 0-1 1v12c0 .6.4 1 1 1Zm3-7h0v0h0v0Zm4 0h0v0h0v0Zm4 0h0v0h0v0Zm-8 4h0v0h0v0Zm4 0h0v0h0v0Zm4 0h0v0h0v0Z" />
                        </svg>
                        <span class="mt-2 xl:mt-0">
                            {{$reservation->event->date}}
                        </span>
                    </p>
                </div>

                <!-- Price and view button -->
                <div class="flex justify-between items-end mt-8">
                    <p class="text-lg font-semibold text-gray-800">
                        Client : {{$reservation->participateur->user->name}}
                    </p>
                    @if ($reservation->status === "automatique" && $reservation->places_available > 0)
                    <form method="POST" action="{{ route('automatique.reservation', ['reservation' => $reservation->id]) }}">
                        @csrf
                        <button class="inline-flex items-center bg-green-300 px-6 py-2 rounded-lg text-green-600 font-semibold text-sm transition duration-300 ease-in-out transform hover:translate-y-0.5">
                            Reserve now
                        </button>
                    </form>
                    @endif

                    @if ($reservation->status === "manuelle" && $reservation->places_available > 0)
                    <form action="{{route('manuelle.reservation',$reservation->id)}}" method="POST">
                        @csrf
                        <button class="inline-flex items-center bg-yellow-300 px-6 py-2 rounded-lg text-yellow-500 font-semibold text-sm transition duration-300 ease-in-out transform hover:translate-y-0.5">
                            Limited Access
                        </button>
                    </form>
                    @endif

                    @if ($reservation->places_available === 0)
                    <div class="inline-flex items-center bg-red-100 px-6 py-2 rounded-lg text-red-300 font-semibold text-sm transition duration-300 ease-in-out transform ">
                        Sold out
                    </div>
                    @endif

                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>

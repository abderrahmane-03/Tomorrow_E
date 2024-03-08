<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <div class=" flex flex-wrap gap-6 font-semibold font-sans">
        @foreach ($tickets as $ticket)


        <div class="ticket w-80 ml-10  bg-yellow-200 relative mt-10">

            <svg class="absolute top-[-145px] right-[1.4rem] m-[7rem] rotate-90" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 65 81.25" enable-background="new 0 0 65 65" xml:space="preserve">
                <path d="M17.333,0.667c-0.829,0-1.5,0.671-1.5,1.5v60.666c0,0.828,0.671,1.5,1.5,1.5c17.552,0,31.833-14.28,31.833-31.833S34.886,0.667,17.333,0.667z" fill="#ffffff" />
            </svg>
            <svg class="absolute top-[7px] right-[19.4rem] m-[-2rem] rotate-45" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 65 81.25" enable-background="new 0 0 65 65" xml:space="preserve">
                <path d="M17.333,0.667c-0.829,0-1.5,0.671-1.5,1.5v60.666c0,0.828,0.671,1.5,1.5,1.5c17.552,0,31.833-14.28,31.833-31.833S34.886,0.667,17.333,0.667z" fill="#ffffff" />
            </svg>
            <svg class="absolute top-[-311px] right-[-17.6rem] m-[16rem]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 65 81.25" enable-background="new 0 0 65 65" xml:space="preserve" transform="rotate(135)">
                <path d="M17.333,0.667c-0.829,0-1.5,0.671-1.5,1.5v60.666c0,0.828,0.671,1.5,1.5,1.5c17.552,0,31.833-14.28,31.833-31.833S34.886,0.667,17.333,0.667z" fill="#ffffff" />
            </svg>

            <div class="title py-10 px-10">
                <p class="text-gray-600 text-2xl">Tomorrow Events Presents</p>
                <p class="text-4xl">{{$ticket->name}}</p>
            </div>
            <div class="poster">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/25240/only-god-forgives.jpg" alt="Movie: Only God Forgives" class="max-w-full h-auto" />
            </div>
            <div class="info px-14 ">
                <table class="w-full text-lg">
                    <tr>

                        <th class="w-2/5">DATE</th>
                        <th class="w-1/5">SEAT</th>
                    </tr>
                    <tr>
                        <td class="px-8">{{$ticket->Date}}</td>

                        <td>{{$ticket->place}}</td>
                    </tr>
                </table>
                <table class="w-full text-lg">
                    <tr>

                        <th class="w-3/8">LOCATION</th>
                    </tr>
                    <tr>

                        <td>{{$ticket->location}}</td>

                    </tr>
                </table>
            </div>
            <div class="holes-lower relative border-dashed border-gray-400 mt-25 mx-25">
                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 h-50 w-50 bg-Thistle rounded-full"></div>
                <div class="absolute top-0 right-0 h-50 w-50 bg-Thistle rounded-full"></div>
            </div>

            <div class="serial px-25 py-25 relative">
            <svg class="absolute top-[-302px] left-[-17.6rem] m-[16.4rem]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 65 81.25" enable-background="new 0 0 65 65" xml:space="preserve">
                <path d="M17.333,0.667c-0.829,0-1.5,0.671-1.5,1.5v60.666c0,0.828,0.671,1.5,1.5,1.5c17.552,0,31.833-14.28,31.833-31.833S34.886,0.667,17.333,0.667z" fill="#ffffff" />
            </svg>
            <svg class="absolute top-[-324px] right-[-17.6rem] m-[16.4rem] rotate-180" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 65 81.25" enable-background="new 0 0 65 65" xml:space="preserve">
                <path d="M17.333,0.667c-0.829,0-1.5,0.671-1.5,1.5v60.666c0,0.828,0.671,1.5,1.5,1.5c17.552,0,31.833-14.28,31.833-31.833S34.886,0.667,17.333,0.667z" fill="#ffffff" />
            </svg>
                <hr class="border-dashed border-t border-gray-400 mx-25 my-12">
                <table class="ml-2 barcode">
                    <tr class=""></tr>
                </table>
                 @php
                    $randomint='';
                    $lengthint='20';
                    $characters = '0123456789';
                    $charactersLength = strlen($characters);
                    for ($i = 0; $i < $lengthint; $i++) {
                        $randomint .= $characters[rand(0, $charactersLength - 1)];
                    }
                    $randomCode = '';
                    $length = 150; // Adjust the length of the code as needed
                    $characters = '01';
                    $charactersLength = strlen($characters);
                    for ($i = 0; $i < $length; $i++) {
                        $randomCode .= $characters[rand(0, $charactersLength - 1)];
                    }
                @endphp
                <table class="ml-16 numbers">
                    <tr>
                        <td class="text-center">{{$randomint}}</td>
                    </tr>
                </table>
            </div>

        </div>@endforeach
    </div>
</x-app-layout>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    var code = '{{$randomCode}}';
    var table = $('.barcode tr');
    for (var i = 0; i < code.length; i++) {
        if (code[i] === '1') {
            table.append('<td class=" bg-black h-6"></td>');
        } else {
            table.append('<td class="bg-yellow h-6"></td>');
        }
    }
</script>

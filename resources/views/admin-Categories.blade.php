<x-app-layout>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="flex bg-amber-50">

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
        <div class="flex flex-col">
            <div>
                <button onclick="showform()" class="ml-16 mb-4 mt-4 bg-violet-200  px-6 py-2 rounded-lg text-violet-500 font-semibold text-sm transition duration-300 ease-in-out transform hover:translate-y-0.5">
                    Add a New Category
                </button>
                <form class="hidden bg-violet-200 rounded-xl absolute top-[40%] left-[40%] transform -translate-x-[40%] -translate-y-[40%] z-50 justify-center items-center w-[20rem] px-3 h-[20rem] sm:fixed sm:top-[25%] sm:left-[45%] sm:transform-none sm:-translate-x-[30%] sm:-translate-y-[30%]" action="{{ route('Category_update') }}" method="post" id="up-form" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="flex gap-4 flex-col">
                        <input type="hidden" name="Category_id" id="Category_id">
                        <div>
                            <label for="Category_name" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                            <input type="text" id="_name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 ">
                        </div>
                        <div class="flex gap-3">
                            <button type="submit" class="text-white inline-flex items-center bg-violet-300 hover:bg-black focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"/>
                                </svg>
                                Add
                            </button>
                            <button type="button" onclick="hideup()" class="text-white inline-flex items-center hover:bg-violet-300 bg-black focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                <svg class="w-5 mt-1 mr-1 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 18 6m0 12L6 6" />
                                </svg>cancel
                            </button>
                        </div>
                    </div>
                </form>
                <form class="hidden bg-violet-200 rounded-xl absolute top-[40%] left-[40%] transform -translate-x-[40%] -translate-y-[40%] z-50 justify-center items-center w-[20rem] px-3 h-[20rem] sm:fixed sm:top-[25%] sm:left-[45%] sm:transform-none sm:-translate-x-[30%] sm:-translate-y-[30%]" action="{{ route('Category_store') }}" method="post" id="res-form" enctype="multipart/form-data">

                @csrf
                    <div class="flex gap-4 flex-col">
                        <div>
                            <label for="Category_name" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                            <input type="text" id="_name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 ">
                        </div>
                        <div class="flex gap-3">
                            <button type="submit" class="text-white inline-flex items-center bg-violet-300 hover:bg-black focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"/>
                                </svg>
                                Add
                            </button>
                            <button type="button" onclick="hideform()" class="text-white inline-flex items-center hover:bg-violet-300 bg-black focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                <svg class="w-5 mt-1 mr-1 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 18 6m0 12L6 6" />
                                </svg>cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="flex flex-wrap">

                @foreach ($categories as $categorie)

                <div class="ml-10">
                    <div class="shadow p-4 rounded-lg bg-yellow-100 ">
                            <!-- Insert the span element here -->
                            <div class="uppercase font-bold">
                                {{$categorie->name}}
                            </div>
                            <!-- Grid for property details -->
                            <div class="flex gap-4">

                                    <button onclick=" UpdateForm('{{$categorie->id}}')"class="inline-flex items-center bg-orange-300 px-6 py-2 rounded-lg text-orange-600 font-semibold text-sm transition duration-300 ease-in-out transform hover:translate-y-0.5">
                                        update
                                    </button>

                                <form method="POST" action="{{ route('Category_delete',$categorie->id) }}">
                                    @method("DELETE")
                                    @csrf
                                    <button class="inline-flex items-center bg-red-300 px-6 py-2 rounded-lg text-red-600 font-semibold text-sm transition duration-300 ease-in-out transform hover:translate-y-0.5">
                                        delete
                                    </button>
                                </form>
                            </div>

                        </div>
                </div>


            @endforeach
            </div>
        </div>
    </div>
    <script>
         function UpdateForm(CategoryId) {
            document.getElementById('Category_id').value = CategoryId;
            document.getElementById('up-form').classList.remove('hidden');
            document.getElementById('up-form').classList.add('flex');
            document.getElementById('bg').classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
            // Show the form
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
</x-app-layout>

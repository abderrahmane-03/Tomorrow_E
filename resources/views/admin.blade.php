<x-app-layout>
<table class="min-w-full divide-y divide-gray-200 overflow-x-auto">
    <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Status
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Role
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Email
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Actions
            </th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">

        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                        <img class="h-10 w-10 rounded-full" src="/images/users/" alt="">
                    </div>
                    <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900">

                        </div>
                        <div class="text-sm text-gray-500">

                        </div>
                    </div>
                </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">

                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                    Bloqued
                </span>

                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        Active
                    </span>


            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">

            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">

            </td>
            <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">

                <button class="btn btn-error"><a href="">Debloquer User</a></button>


                       <button class="btn btn-success" disabled>Bloquer User</button>

                    <button class="btn btn-success"><a href="">Bloquer User</a></button>

            </td>
        </tr>

    </tbody>
</table>
</x-app-layout>
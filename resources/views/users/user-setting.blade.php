<x-layout>
    <x-slot name="title">User Setting</x-slot>
    
    <div class="sm:flex sm:items-center">
        <x-users.section-title>
            <x-slot name="title">
                User
            </x-slot>
            <x-slot name="description">
                A list of all the users in your account including their name, title, email and role.
            </x-slot>
        </x-users.section-title>
        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            <x-users.button as="a" href="/users/create">
                Add user
            </x-users.button>
        </div>
    </div>
    <div class="mt-8 flow-root">
    
        <x-table>
            <x-table.thead>
                <tr>
                    <x-table.th>#</x-table.th>
                    <x-table.th>Name</x-table.th>
                    <x-table.th>Position</x-table.th>
                    <x-table.th>Email</x-table.th>
                    <x-table.th>Password</x-table.th>
                    <x-table.th>Action</x-table.th>
                </tr>
            </x-table.thead>
            <x-table.tbody>
                @foreach ($users as $user)
                    <tr>
                        <x-table.td>{{ $loop->iteration }}</x-table.td>
                        <x-table.td>{{ $user->name }}</x-table.td>
                        <x-table.td>{{ $user->Position }}</x-table.td>
                        <x-table.td>{{ $user->email }}</x-table.td>
                        <x-table.td>{{ $user->password }}</x-table.td>
                        <x-table.td>
                            <a href="/users/{{ $user->id }}" class="hover:text-black">View</a>
                            |
                            <a href="/users/{{ $user->id }}/edit" class="hover:text-blue-500">Edit</a>
                        </x-table.td>
                    </tr>
                @endforeach
            </x-table.tbody>
        </x-table>

    </div>

</x-layout>

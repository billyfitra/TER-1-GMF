<x-layout>
    <x-slot name="title">{{ $user->name }}</x-slot>

    <div>Email : {{ $user->email }}</div>
    <div>Password : {{ $user->password }}</div>
    <div>Position as {{ $user->Position }}</div>
    <div>Registered at {{ $user->created_at->diffForHumans() }}</div>

    <form action="/users/{{ $user->id }}" method="post" class="mt-6">
        @method('DELETE')
        @csrf
        <x-users.button type="submit">
            Delete
        </x-users.button>
    </form>

</x-layout>

<x-layout>
    <x-slot name="title">{{ $user->name }}</x-slot>

    <div>Email : {{ $user->email }}</div>
    <div>Password : {{ $user->password }}</div>
    <div>Position as {{ $user->Position }}</div>
    <div>Registered at {{ $user->created_at->diffForHumans() }}</div>

</x-layout>

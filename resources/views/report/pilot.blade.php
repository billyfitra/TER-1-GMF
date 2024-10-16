<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <!-- Main container -->
    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <x-sidebar></x-sidebar>

        <!-- Main Content Area -->
        <div class="flex-1 p-8">
            <h1 class="text-3xl font-bold mb-6">Pilot Report</h1>
        </div>
        
    </div>


</x-layout>
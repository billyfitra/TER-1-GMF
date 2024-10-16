<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <!-- Main container -->
    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <x-sidebar></x-sidebar>

        <!-- Main Content Area -->
        <div class="flex-1 p-8">
            <h1 class="text-3xl font-bold mb-6">Main Content Area</h1>
            <p>This is where the main content will go. You can place your reports, data, or any other content here.</p>
        </div>
        
    </div>


</x-layout>
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
            
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 border border-gray-300"></th>
                        <th class="px-4 py-2 border border-gray-300">2023</th>
                        <th class="px-4 py-2 border border-gray-300">OCT</th>
                        <th class="px-4 py-2 border border-gray-300">NOV</th>
                        <th class="px-4 py-2 border border-gray-300">DEC</th>
                        <th class="px-4 py-2 border border-gray-300">JAN</th>
                        <th class="px-4 py-2 border border-gray-300">FEB</th>
                        <th class="px-4 py-2 border border-gray-300">MAR</th>
                        <th class="px-4 py-2 border border-gray-300">APR</th>
                        <th class="px-4 py-2 border border-gray-300">MAY</th>
                        <th class="px-4 py-2 border border-gray-300">JUN</th>
                        <th class="px-4 py-2 border border-gray-300">JUL</th>
                        <th class="px-4 py-2 border border-gray-300">AUG</th>
                        <th class="px-4 py-2 border border-gray-300">SEP</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">A/C In Fleet</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">A/C In Service (Revenue)</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">A/C Days in Service (Revenue)</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">Flying Hours - Total</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">- Revenue</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">Take Off - Total</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">- Revenue</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">Flight Hour Per Take Off - Total</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">- Revenue</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">Daily Utiliz - Total FH </td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">- Revenue FH</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">- Total FC</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">- Revenue FC</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">Technical Delay - Total</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">- Tot Duration</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">- Avg Duration</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">- Rate/100 Take-Off</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">Technical Incident - Total</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">- Rate /100 FC</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">Technical Cancellation - Total</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">Dispatch Reliability (%)</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>


</x-layout>
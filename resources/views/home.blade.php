<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <p>Grafik Page</p>

    <!-- Bagian untuk menampilkan laporan Power BI -->
    <div style="height: 600px; width: 100%; margin-top: 20px;">
        <iframe id="reportContainer" src="{{ $embedUrl }}" style="width: 100%; height: 100%; border: none;" allowFullScreen></iframe>
    </div>
</x-layout>

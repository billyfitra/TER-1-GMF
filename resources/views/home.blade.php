<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <p>Grafik Page</p>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>IDreg</th>
                <th>IDType</th>
                <th>ACType</th>
                <th>ACReg</th>
                <th>Operator</th>
                <th>SerialModule</th>
                <th>VariableNumber</th>
                <th>SerialNumber</th>
                <th>ManufYear</th>
                <th>DeliveryDate</th>
                <th>EngineType</th>
                <th>Lessor</th>
                <th>Active</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
            <tr>
                <td>{{ $row->IDreg }}</td>
                <td>{{ $row->IDType }}</td>
                <td>{{ $row->ACType }}</td>
                <td>{{ $row->ACReg }}</td>
                <td>{{ $row->Operator }}</td>
                <td>{{ $row->SerialModule }}</td>
                <td>{{ $row->VariableNumber }}</td>
                <td>{{ $row->SerialNumber }}</td>
                <td>{{ $row->ManufYear }}</td>
                <td>{{ $row->DeliveryDate ?? 'N/A' }}</td>
                <td>{{ $row->EngineType }}</td>
                <td>{{ $row->Lessor }}</td>
                <td>{{ $row->Active }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>

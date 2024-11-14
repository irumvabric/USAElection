<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1{
            text-align: center;
        }
        table {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>State Home</h1>
        @if (count($states) > 0)
        <table>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>GPA/PIB</th>
                    <th>Population</th>
                    <th>Area</th>
                    <th>Flag</th>
                </tr>
                @foreach($states as $state)
                    <tr>
                        <td>{{ $state->code }}</td>
                        <td>{{ $state->name }}</td>
                        <td>{{ $state->pib }}</td>
                        <td>{{ $state->population }}</td>
                        <td>{{ $state->area }}</td>
                        <td>{{ $state->id_flag }}</td>
                    </tr>
                @endforeach
        </table>
        @endif
</body>
</html>

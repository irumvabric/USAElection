<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State Home</title>
</head>

<body>
    <div class="container">
        <h1>Create a new state page</h1>
        <form>
            <table>
                <tr>
                    <td><label for="nom_etat">State Name:</label></td>
                    <td><input type="text" id="nom_etat" name="nom_etat" placeholder="Enter state name" required></td>
                </tr>
                <tr>
                    <td><label for="pib">GDP (PIB):</label></td>
                    <td><input type="number" step="0.01" id="pib" name="pib" placeholder="Enter GDP value"></td>
                </tr>
                <tr>
                    <td><label for="population">Population:</label></td>
                    <td><input type="number" id="population" name="population" placeholder="Enter population"></td>
                </tr>
                <tr>
                    <td><label for="superficie">Area (Superficie):</label></td>
                    <td><input type="number" id="superficie" name="superficie" placeholder="Enter area size"></td>
                </tr>
                <tr>
                    <td><button type="button" class="btn primary">Save</button></td>
                    <td><button type="button" class="btn primary">Cancel</button></td>
                </tr>
            </table>
        </form>
    </div>

    @if ($states->count() > 0)
        <table>
            <tr>
                <th>id</th>
                <th>nom_etat</th>
                <th>pib</th>
                <th>area</th>
                <th>created_at</th>
                <th>Actions</th>
            </tr>
            @foreach ($states as $state)
                <tr>
                    <td>{{ $state->id }}</td>
                    <td>{{ $state->name }}</td>
                    <td>{{ $state->PIB }}</td>
                    <td>{{ $state->Area }}</td>
                    <td>{{ $state->created_at }}</td>
                    <td>
                        <a class="btn btn-sm btn-success" href="modifstate.php?modif={{ $state->id }}">
                            <i class="fas fa-edit"></i> Modifier
                        </a>
                        <a class="btn btn-sm btn-danger" href="statehome.php?suprimer={{ $state->id }}">
                            <i class="fas fa-trash-alt"></i> Supprimer
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <p>No states available.</p>
    @endif
</body>

</html>

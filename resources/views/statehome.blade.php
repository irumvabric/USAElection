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
                    <td>
                        <label for="nom_etat">State Name:</label>
                    </td>
                    <td>
                        <input type="text" id="nom_etat" name="nom_etat" placeholder="Enter state name" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pib">GDP (PIB):</label>
                    </td>
                    <td>
                        <input type="number" step="0.01" id="pib" name="pib"
                            placeholder="Enter GDP value">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="population">Population:</label>
                    </td>
                    <td>
                        <input type="number" id="population" name="population" placeholder="Enter population">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="superficie">Area (Superficie):</label>
                    </td>
                    <td>
                        <input type="number" id="superficie" name="superficie" placeholder="Enter area size">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="button" class="btn primary">Save</button>
                    </td>
                    <td>
                        <button type="button" class="btn primary">Cancel</button>

                    </td>
                </tr>
            </table>

        </form>
    </div>
</body>

</html>

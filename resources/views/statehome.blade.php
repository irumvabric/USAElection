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
        form {
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

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
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
                        <input type="number" step="0.01" id="pib" name="pib" placeholder="Enter GDP value">
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

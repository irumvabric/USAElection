<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presidential elector Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
        <h1>Create a new presidential elector page</h1>
        <form>
            <table>
                <tr>
                    <td>
                        <label for="nom">Full name:</label>
                    </td>
                    <td>
                    <input type="text" id="nom_etat" name="nom_etat" placeholder="Enter state name" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="genre">Gender:</label>
                    </td>
                    <td>
                        <select>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="etat">State:</label>
                    </td>
                    <td>
                        <select>
                            <option>Arizona</option>
                            <option>Washington</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="superficie">Party:</label>
                    </td>
                    <td>
                        <select>
                            <option>Republic</option>
                            <option>Democrate</option>
                        </select>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate BMI</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #70e1f5, #ffd194);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        form {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            box-sizing: border-box;
        }

        h1 {
            margin-bottom: 40px;
            text-align: center;
            font-size: 24px;
        }

        label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
        }

        input[type="number"] {
            width: calc(100% - 22px); /* Adjust for padding and border */
            padding: 10px;
            margin-bottom: 30px;
            border: 2px solid #ddd;
            border-radius: 6px;
            transition: border 0.3s ease;
        }

        input[type="number"]:focus {
            border: 2px solid #005A9C;
            outline: none;
        }

        button {
            width: 100%;
            padding: 15px;
            background-color: #005A9C;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #004080;
        }

        @media (max-width: 420px) {
            form {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <h1>Calculate Your BMI</h1>
    <form action="<?= site_url('calbmi') ?>" method="post">
        <div>
            <label for="weight">Weight (kg):</label>
            <input type="number" id="weight" name="weight" required step="any">
        </div>
        <div>
            <label for="height">Height (cm):</label>
            <input type="number" id="height" name="height" required step="any">
        </div>
        <button type="submit">Calculate BMI</button>
    </form>
</body>
</html>

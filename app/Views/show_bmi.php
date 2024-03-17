<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show BMI</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            margin: 0;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .bmi-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 15px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="bmi-container">
        <h1>Your BMI</h1>
        <p>Your BMI is <?= esc($bmi) ?> which is considered as "<?= esc($interpretation) ?>"</p>
    </div>
</body>
</html>

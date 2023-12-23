<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mind Reader</title>
    <style>
        #loading {
            display: none;
        }

        #progressBar {
            width: 0;
            height: 20px;
            background-color: #FF69B4; /* Pink color */
            margin-top: 10px;
        }
    </style>
    <script>
        function simulateMindReading(prompt) {
            document.getElementById('loading').style.display = 'block';
            var progressBar = document.getElementById('progressBar');
            var width = 1;

            var interval = setInterval(function() {
                if (width >= 100) {
                    clearInterval(interval);
                    document.getElementById('loading').style.display = 'none';
                    alert('Are you thinking of "' + prompt + '"?');
                } else {
                    width++;
                    progressBar.style.width = width + '%';
                }
            }, 30); // Simulating progress update
        }
    </script>
</head>
<body>

    <div>
        <label for="prompt">Enter a prompt: </label>
        <input type="text" id="prompt">
        <button onclick="simulateMindReading(document.getElementById('prompt').value)">Read My Mind</button>
    </div>

    <div id="loading">Calculating neurons, decoding brainwaves, reading data, decoding information...</div>
    
    <div id="progressBar"></div>

</body>
</html>

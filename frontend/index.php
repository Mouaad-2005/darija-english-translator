<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darija AI Translator</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); width: 400px; text-align: center; }
        h1 { color: #007bff; margin-bottom: 1.5rem; }
        textarea { width: 100%; height: 100px; padding: 10px; border: 2px solid #ddd; border-radius: 8px; resize: none; font-size: 16px; box-sizing: border-box; }
        button { margin-top: 1rem; width: 100%; padding: 12px; background-color: #28a745; color: white; border: none; border-radius: 8px; font-size: 18px; cursor: pointer; transition: 0.3s; }
        button:hover { background-color: #218838; }
        .result { margin-top: 1.5rem; padding: 15px; background-color: #e9ecef; border-radius: 8px; font-weight: bold; color: #333; min-height: 20px; }
    </style>
</head>
<body>

<div class="card">
    <h1>Darija AI</h1>
    <form method="POST">
        <textarea name="text" placeholder="Type in English..." required><?php echo isset($_POST['text']) ? htmlspecialchars($_POST['text']) : ''; ?></textarea>
        <button type="submit">Translate</button>
    </form>

    <div class="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $inputText = $_POST['text'];
            
            // The URL of your Quarkus Service
            $url = 'http://localhost:8081/translate';

            $username = 'admin';
            $password = 'password123';
            $auth = base64_encode("$username:$password");

            $options = [
                'http' => [
                    'header'  => "Content-type: text/plain\r\n" .
                                "Authorization: Basic $auth\r\n", // Added Security!
                    'method'  => 'POST',
                    'content' => $inputText,
                ],
            ];

            $context  = stream_context_create($options);
            $response = file_get_contents($url, false, $context);

            if ($response === FALSE) {
                echo "Error: Could not connect to Quarkus.";
            } else {
                echo htmlspecialchars($response);
            }
        } else {
            echo "Translation will appear here...";
        }
        ?>
    </div>
</div>

</body>
</html>
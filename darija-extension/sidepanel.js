document.getElementById('translateBtn').addEventListener('click', async () => {
    const text = document.getElementById('inputText').value;
    const resultDiv = document.getElementById('result');
    
    resultDiv.innerText = "Connecting to Java Backend...";

    try {
        const response = await fetch('http://localhost:8081/translate', {
            method: 'POST',
            mode: 'cors', // Added this line
            headers: { 
                'Content-Type': 'text/plain'
            },
            body: text
        });

        if (response.ok) {
            const data = await response.text();
            resultDiv.innerText = data;
        } else {
            resultDiv.innerText = "Error: Backend is running but returned an error.";
        }
    } catch (error) {
        resultDiv.innerText = "Error: Cannot reach Java Backend. Make sure Quarkus is running on port 8081!";
    }
});
document.getElementById('start-btn').addEventListener('click', function() {
    const recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
    recognition.lang = 'en-US'; // Language setting
    recognition.interimResults = false; // Disable interim results

    recognition.onstart = function() {
        document.getElementById('start-btn').innerText = 'Listening...';
    };

    recognition.onresult = function(event) {
        const txt = event.results[0][0].transcript;
        document.getElementById('result').innerText = txt;
        console.log('Recognized text: ' + txt);
        saveTextToDatabase(txt);
    };

    recognition.onerror = function(event) {
        console.error('Speech recognition error:', event.error);
    };

    recognition.onend = function() {
        document.getElementById('start-btn').innerText = 'Start';
    };

    recognition.start();
});

function saveTextToDatabase(transcript) {
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'http://localhost/speech_to_text/text.php', true); 
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                console.log('Transcript saved to database:', xhr.responseText);
            } else {
                console.error('Error saving transcript to database:', xhr.status, xhr.statusText);
            }
        }
    };
    console.log('Sending transcript:', transcript);
    xhr.send('transcript=' + encodeURIComponent(transcript));
}
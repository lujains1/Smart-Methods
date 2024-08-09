# Speech To Text Converter 
## Description
I created a web page that allows users to record their voice and say any words. The page then converts the speech to text and stores it in a database.

## The Files
The project contains at HTML, CSS, JavaScript and PHP files :

### HTML 
The index.html file provides the structure and content for Speech to Text webpage. It has a start button to start speech recognition and paragraph result to display the text.

### CSS 
The style.css file to style the web page 

### JavaScript
The script.js file:
- Enables speech recognition on a web page.
- Clicking start-btn initializes a SpeechRecognition object.
- Updates UI during recognition events (onstart, onresult, onerror, onend).
- Begins speech recognition with recognition.start().
- saveTextToDatabase function saves text to a database via POST request.
- Browser support required for Speech Recognition API.

### PHP 
The text.php file :
- Enables error reporting for debugging purposes.
- Verifies if the request method is POST.
- Establishes database connection 
- Sanitizes and validates the incoming transcript data.
- Inserts the sanitized transcript data into the database table stt.
- Displays messages based on the success or failure of the database query.

## Demo


https://github.com/user-attachments/assets/01b3a267-fc9b-45e1-ac63-f52821037f2d


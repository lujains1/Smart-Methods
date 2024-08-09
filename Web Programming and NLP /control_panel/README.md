# Web Interface For Controlling Robot Movement
## Description
I designed a web page with five interactive buttons that enable to control the movement of a robot. This interactive interface is constructed using a combination of HTML for the structure and CSS for styling. Alongside this front-end development, I have also built a backend database and integrated it with the web page using PHP.

### HTML 
The [index.html](https://github.com/lujains1/Smart-Methods/blob/main/Web%20Programming%20and%20NLP%20/control_panel/index.html) file contains:
* five buttons - left, right, forward, backward, and stop - to control the direction of a robot.
* send command javascript function to send the commands to the server using fetch().

### CSS 
The [style.css](https://github.com/lujains1/Smart-Methods/blob/main/Web%20Programming%20and%20NLP%20/control_panel/style.css) file to style the page for better interaction.

### PHP 
* The [moves.php](https://github.com/lujains1/Smart-Methods/blob/main/Web%20Programming%20and%20NLP%20/control_panel/moves.php) file receives commands through POST requests and store it in the robot_movements database.
* The [last_move.php](https://github.com/lujains1/Smart-Methods/blob/main/Web%20Programming%20and%20NLP%20/control_panel/last_move.php) retrieves the latest command stored in the database and disply it on a webpage.

### Database 
I used XAMPP server to create a MySQL database for storing movement direction data.

## Demo 

https://github.com/user-attachments/assets/63a59cfd-73ed-4bcd-9f2a-b9359e20892d


## Reference

1. https://codepen.io/HighFlyer/pen/WNXRZBv



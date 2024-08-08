# Real-Time-Face-Detection
I created a simple web application for real-time face detection using Flask and OpenCV Library. The page captures video from the camera, detects faces in the video, and 
displays the live video with detected faces on the page.

## Code Explanation
I set up a Flask web application using Flask and response classes. I used OpenCV to create a video capture object. I also created a function called detect_faces to load a pre-trained face detection model. This 
function is used to detect faces and draw rectangles around them. Another function, generate_frames, continuously captures frames from the camera and calls the detect_faces 
function to detect faces in each frame. The Flask app has two routes: the index route, which is the HTML page, and the video feed route which streams the video frames.

## Steps to run the web app
1. Create face detection folder
2. Open the visual studio code
3. Click on file and then click on the open folder
4. Open the folder you created
5. Create faceDetection.py file and copy the following code to your file [faceDetection.py]

###  Dependencies:
Before you run the web app you should install the Flask and OpenCV packages : 
1. Opent the terminal in the visual studio code by clicking on view then terminal 
2. Install the Flask and OpenCV packages :
      ```shell
     pip install flask opencv-python
     ```
3. Run the face detection app :
     ```shell
     python faceDetection.py
     ```

### Access The web app :
To see the output ,the terminal will print URL:<br>

![url](https://github.com/user-attachments/assets/f19ef5b2-314f-40a6-9048-9840f283f644)
<br>
copy the link and paste it to your browser 

### Screenshot To The Web App
Here is the output for the web app
<br>

![Screenshot 2024-08-03 212000](https://github.com/user-attachments/assets/256cec71-591a-44b5-93a4-6f7a54b2623e)



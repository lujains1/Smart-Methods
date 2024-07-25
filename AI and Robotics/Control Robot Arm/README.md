# Controlling-the-robot-arm
## Controlling the Robot Arm by joint_state_publisher

1. After installing ROS, source the ROS environment using this command:<br>
    $source /opt/ros/noetic/setup.bash <br><br>
    Then create catkin workspace : <br>
    $mkdir -p ~/catkin_ws/src <br>
    $cd ~/catkin_ws/ <br>
    $catkin_make

    Source the workspace using this command :<br>
    $source devel/setup.bash
<br><br><br>
![c1](https://github.com/user-attachments/assets/6900ba52-241b-4e47-9264-6d5902378e68)

2. Install the Robot Arm Package and dependencies:<br><br>
   you should install git in order to clone the Robot Arm Package :<br>
   $sudo apt install git <br><br>
   you should clone the package inside the src directory <br>
   $git clone https://github.com/smart-methods/arduino_robot_arm <br><br>

   Then install all dependencies:<br>
   $ cd ~/catkin_ws<br>
   $ rosdep install --from-paths src --ignore-src -r -y <br>
   $ sudo apt-get install ros-noetic-moveit<br>
   $ sudo apt-get install ros-noetic-joint-state-publisher ros-noetic-joint-state-publisher-gui<br>
   $ sudo apt-get install ros-noetic-gazebo-ros-control joint-state-publisher<br>
   $ sudo apt-get install ros-noetic-ros-controllers ros-noetic-ros-control<br>
   $ catkin_make
   <br><br>
   ![c2](https://github.com/user-attachments/assets/8f7e7155-45ea-4d37-ad10-ee0fd27763bb)
   ![c3](https://github.com/user-attachments/assets/720cf879-add4-447e-aadf-7310662753ca)
<br><br>
   3. Lunch the Robot Arm on Rviz and Gazebo: <br><br>
      Lunch the the check_motors file using this commands: <br>
      $roslaunch robot_arm_pkg check_motors.launch<br><br>
      this command to lunch Robot Arm on Gazebo simulation : <br>
      $ roslaunch robot_arm_pkg check_motors_gazebo.launch <br><br>
   
      ![c4 1](https://github.com/user-attachments/assets/802f2e66-a19d-4147-ba22-966e6a1c609f)
      ![c5](https://github.com/user-attachments/assets/d5107e6a-dbc9-49ff-8cda-29604ab5798d)
      ![c6](https://github.com/user-attachments/assets/7e32ea57-cfaa-4494-85c1-0f2a74e39562)

      ## Controlling the Robot Arm using Moveit and kinematics <br>
      To control the Robot Arm run using Moveit run this command: <br>
      $ roslaunch moveit_pkg demo.launch <br><br>
      ![c7](https://github.com/user-attachments/assets/65ed0087-152d-4ccc-874a-3184f604319e)
   

   ## References
The Robot Arm package : <br>
https://github.com/smart-methods/arduino_robot_arm
   

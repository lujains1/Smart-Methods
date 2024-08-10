# TurtleBot3 Navigation
## Description
This repository provides instructions for setting up TurtleBot3 navigation using ROS Noetic.
## Steps 
1. install the TurtleBot3 packages :<br><br>
first update your package list and install the TurtleBot3 packages: 
 ```bash
    sudo apt update
    sudo apt install ros-noetic-turtlebot3 ros-noetic-turtlebot3-simulations
```
2. Install dependencies : <br><br>
you sohuld install all dependencies<br>
 ```bash
    sudo apt install ros-noetic-navigation ros-noetic-slam-gmapping
 ```
3. Set up the environment : <br><br>
   - add the TurtleBot3 to the (.bashrc) file:<br>
    ```bash
    echo "export TURTLEBOT3_MODEL=burger" >> ~/.bashrc
    source ~/.bashrc
    ```
   - source the ROS setup file:
    ```bash
    source /opt/ros/noetic/setup.bash  
    ```
4. Launch the TurtleBot3 Simulation : <br><br>
   launch the TurtleBot3 in Gazebo:
     ```bash
      roslaunch turtlebot3_gazebo turtlebot3_world.launch
     ```
     <br>

     ![lunch](https://github.com/user-attachments/assets/860591eb-fc9f-4b19-a612-56f0acab72fc)

     <br><br>

5. Create a Map Using SLAM : <br><br>
    - launch the SLAM with Gmapping:
    ```bash
    roslaunch turtlebot3_slam turtlebot3_slam.launch slam_methods:=gmapping
    ```
    <br>
    
     ![Screenshot 2024-08-10 193613](https://github.com/user-attachments/assets/a44246a6-7b0f-47da-8caa-8d2f6db0de2e)

    <br><br>

    - save the map:
    ```bash
    rosrun map_server map_saver -f ~/map
    ```
6. Launch Navigation : <br><br>
after saving the map, launch the TurtleBot3 navigation :
    ```bash
    roslaunch turtlebot3_navigation turtlebot3_navigation.launch map_file:=$HOME/map.yaml
    ```
    <br>

    ![Screenshot 2024-08-10 194811](https://github.com/user-attachments/assets/13c03da5-9851-4267-b241-e69229a98e55)

    <br><br>

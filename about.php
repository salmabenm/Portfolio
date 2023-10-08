<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="icon" href="images/logome.png">
    <style>
        /* Basic Page Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('images/home.jpg'); /* Specify the path to your background image */
            background-size: cover; /* Cover the entire viewport */
            background-repeat: no-repeat; /* Prevent image repetition */
        }
      
        .container {
            max-width: 980px;
            display: flex;
            align-items: center;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
            background-color: #f8f8f8;
        }

        .left-section {
            flex: 1;
            padding: 20px;
            text-align: center;
        }

        .right-section {
            flex: 1;
            padding: 20px;
        }

        /* Image Styling */
        .profile-img {
            border-radius: 5%;
            width: 100%; /* Adjust the width of the image as needed */
            max-width: 300px;
            height: 450px;
            object-fit: cover;
            object-position: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        /* Text Styling */
        h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #666;
            line-height: 1.6;
        }

        .btn {
            display: inline-block;
            margin-top: 1rem;
            border-radius: 1.5rem;
            background: #333;
            color: #fff;
            padding: .6rem 2.5rem;
            cursor: pointer;
            font-size: .8rem;
            text-align: center;
        }

        .btn:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-section">
            <img class="profile-img" src="images/me.jpg" alt="Profile Image">
        </div>
        <div class="right-section">
            <h1>About Me</h1>
            <p>I'm a 22-year-old student deeply passionate about computer engineering from a young age. Currently pursuing a degree in Computer Engineering, I derive immense joy from programming, problem-solving, and exploring the endless possibilities of the digital realm. My thirst for knowledge drives me to stay at the forefront of emerging trends, and I relish engaging in hands-on projects. Firmly believing in the power of teamwork, I see a bright future in technology and am determined to be part of it. My portfolio reflects my commitment, skills, and eagerness to contribute to the exciting world of computer engineering.</p>
            <a href="index.php">
                <button class="btn">Go Back</button>
            </a>
        </div>
    </div>
</body>
</html>


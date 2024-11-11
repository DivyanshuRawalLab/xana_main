<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI & Healthcare Events</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Global styling */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
    
        

        /* Container */
        .events-container {
            max-width: 1000px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            padding: 20px;
            margin: auto;
         
        }

        /* Event Card */
        .event-card {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 1s ease forwards;
            opacity: 0;
            transform: translateY(20px);
            transition: transform 0.3s ease;
        }
        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
        }

        /* Event Title */
        .event-title {
            font-size: 1.8rem;
            font-weight: bold;
            color: #0056b3;
            margin-bottom: 15px;
            animation: textSlide 1s ease forwards;
        }

        /* Event Date & Location */
        .event-details {
            font-size: 1rem;
            color: #555;
            margin-bottom: 15px;
            animation: fadeIn 1.5s ease forwards;
        }

        /* Description */
        .event-description {
            font-size: 0.9rem;
            line-height: 1.6;
            color: #666;
            margin-bottom: 20px;
            animation: fadeIn 2s ease forwards;
        }

        /* Register Button */
        .register-button {
            padding: 10px 25px;
            font-size: 1rem;
            color: white;
            background-color: #007acc;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            animation: bounceIn 2.5s ease forwards;
        }
        .register-button:hover {
            background-color: #005fa3;
        }


        /* Animations */
        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes textSlide {
            0% { opacity: 0; transform: translateX(-30px); }
            100% { opacity: 1; transform: translateX(0); }
        }
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
        @keyframes bounceIn {
            0% { transform: scale(0.9); opacity: 0; }
            60% { transform: scale(1.05); opacity: 1; }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body>

    <?php include("header.php"); ?>

<div class="container-fluid" style="background-color: rgba(255,123,34, 0.7);">


    <div class="events-container">
        <!-- Event 1 -->
        <div class="event-card">
            <div class="event-title">AI in Healthcare Conference 2024</div>
            <div class="event-details">
            <p><i class="fas fa-calendar-alt"></i> Date: March 5, 2024</p>
            <p><i class="fas fa-map-marker-alt"></i> Location: Virtual Event</p>
        </div>
        <div class="event-description">
            An inspiring virtual event on the future of AI in healthcare. Discuss advancements in AI technology for diagnostics, treatments, and patient care with global experts.
        </div>
        <button class="register-button">Register Now</button>
    </div>
    
    <!-- Event 2 -->
    <div class="event-card">
        <div class="event-title">AI in Medical Imaging Workshop</div>
        <div class="event-details">
            <p><i class="fas fa-calendar-alt"></i> Date: April 10, 2024</p>
            <p><i class="fas fa-map-marker-alt"></i> Location: New York City</p>
        </div>
        <div class="event-description">
            A hands-on workshop exploring AI applications in medical imaging, including real-time diagnostics and data analysis in radiology, with leading AI researchers.
        </div>
        <button class="register-button">Register Now</button>
    </div>

    <!-- Event 3 -->
    <div class="event-card">
        <div class="event-title">AI-Powered Drug Discovery Summit</div>
        <div class="event-details">
            <p><i class="fas fa-calendar-alt"></i> Date: May 22, 2024</p>
            <p><i class="fas fa-map-marker-alt"></i> Location: London</p>
        </div>
        <div class="event-description">
            Dive into AI-driven drug discovery. Learn how AI accelerates the development of new treatments, improving accuracy and efficiency in pharmaceutical research.
        </div>
        <button class="register-button">Register Now</button>
    </div>
    
    <!-- Event 4 -->
    <div class="event-card">
        <div class="event-title">AI and Patient Data Privacy Panel</div>
        <div class="event-details">
            <p><i class="fas fa-calendar-alt"></i> Date: June 15, 2024</p>
            <p><i class="fas fa-map-marker-alt"></i> Location: Virtual Event</p>
        </div>
        <div class="event-description">
            Join experts for a panel discussion on balancing AI advancements with data privacy, discussing ethical guidelines and security challenges in patient data.
        </div>
        <button class="register-button">Register Now</button>
    </div>
</div>

</div>

<?php include("footer.php"); ?>
</body>
</html>

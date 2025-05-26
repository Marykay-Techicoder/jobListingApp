<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobHive</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Hero Section */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
            padding: 50px;
            background: linear-gradient(135deg, #8e44ad, #3498db, #16a085, #16a085);
            animation: gradientAnimation 8s ease infinite;
            color: #ddd;
            min-height: 80vh;
            overflow: hidden;
            border-top-right-radius: 30px;
            border-top-left-radius: 30px;
        }

        /* Post Job Button */
        .post-job-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: rgb(18, 172, 243);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .post-job-btn:hover {
            background-color: rgb(34, 174, 230);
            transform: scale(1.05);
        }

        /* Text Content */
        .hero-content {
            max-width: 50%;
            animation: fadeIn 2s ease-in-out;
        }

        .hero-content h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #f4f4f4;
            line-height: 1.2;
        }

        .hero-content p {
            font-size: 1.2rem;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .hero-content button {
            padding: 10px 20px;
            background-color: #3498db;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .hero-content button:hover {
            background-color: #2980b9;
            transform: scale(1.05);
        }

        /* Hero Image */
        .hero-image {
            max-width: 40%;
            animation: slideIn 2s ease-in-out;
        }

        .hero-image img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .hero {
                flex-direction: column;
                text-align: center;
            }

            .hero-content {
                max-width: 100%;
            }

            .hero-image {
                max-width: 100%;
                margin-top: 20px;
            }

            .hero-content h1 {
                font-size: 2rem;
            }

            .hero-content p {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <hero>
        <div class="hero">
            <!-- Post Job Button -->
            <button class="post-job-btn">
                <a href="{{ route('recruiter.login.form') }}"
                    style=" color: white; font-weight: bold; text-decoration: none;">Post Job</a>
            </button>

            <!-- Hero Content -->
            <div class="hero-content">
                <h1>Discover Thousands of Job Opportunities Tailored Just for You</h1>
                <p>Connect with top companies, apply effortlessly, and take the next step in your career journey—all in
                    one place.</p>
                <button><a href="{{ route('recruiter.login.form') }}"
                        style=" color:white; font-weight: bold; text-decoration: none;">Browse
                        Jobs</a></button>
            </div>

            <!-- Hero Image -->
            <div class="hero-image">
                <img src="img/job2.jpg" alt="Job Search Illustration">
            </div>
        </div>
    </hero>
</body>

</html>
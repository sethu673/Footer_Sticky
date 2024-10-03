<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - Sticky Footer</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }

        #page-content {
            flex: 1 0 auto;
        }

        #sticky-footer {
            flex-shrink: 0;
        }

        .d-flex {
            min-height: 100vh;
            flex-direction: column;
        }
    </style>
</head>
<body class="d-flex">

    <header class="bg-info text-white text-center py-3">
        <h1>Welcome to Our  Website</h1>
    </header>

    <div id="page-content" class="container my-4">
        <section class="mb-5">
            <h2>Clock Tech Solutions</h2>
            <p>We offer a wide range of services to cater to your needs. From web development to mobile app solutions, we have you covered. Our team of experts ensures high-quality results and timely delivery for every project.</p>
            <ul class="list-group">
                <li class="list-group-item">Web Development</li>
                <li class="list-group-item">Mobile App Development</li>
                <li class="list-group-item">Digital Marketing</li>
                <li class="list-group-item">SEO Optimization</li>
            </ul>
        </section>

        <section class="mb-5">
            <h2>Testimonials</h2>
            <blockquote class="blockquote">
                <p>"This company provided excellent services, and their team was always available to help us!"</p>
                <footer class="blockquote-footer">John Doe, CEO of Example Co.</footer>
            </blockquote>
            <blockquote class="blockquote">
                <p>"They delivered our project on time and exceeded our expectations. Highly recommended!"</p>
                <footer class="blockquote-footer">Jane Smith, Marketing Manager</footer>
            </blockquote>
        </section>

        <section>
            <h2>Contact Us</h2>
            <p>If you have any questions or would like to work with us, please feel free to contact us using the form below:</p>
            <form>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>

        <a href="about.html" class="btn btn-secondary mt-4">Go to About Page</a>
    </div>

    <footer id="sticky-footer" class="bg-dark text-white-50 py-3 mt-auto">
        <div class="container text-center">
            <small>Copyright &copy; Your Website</small>
			<br>
			<small>E-mail &copy; sethusmith673@gmail.com</small>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

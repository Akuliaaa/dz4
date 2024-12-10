<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for clients</title>
    <link rel="stylesheet" href="style/for_clients.css">
</head>
<body>
    <header>
        <a class="logo" href="index.php">IT TECHNIC</a>
        <a class="news" href="news.php">NEWS</a>
        <a class="about_us"href="about_us.php">ABOUT US</a>
        <a href="info.php">ABOUT PRODUCT</a>
        <a href="history.php">HISTORY PRODUCT</a>
        <a class="contacts" href="contacts.php">CONTACTS</a>
        <a class="for_clients" href="for_clients.php">ABOUT BUYING A PRODUCT</a>
    </header>

    <section class="content">
        <h2>Sign up for courses at IT TECHNIC</h2>

        <p>Sign up for courses at IT TECHNIC
        In our IT TECHNIC Educational and leisure center, we offer a wide range of courses that will help students develop important skills in various fields — from programming and robotics to creativity and sciences. Our courses are designed for children of all ages and levels of training and will help you unlock your child's potential.</p>
        <br>
        <h3>How to enroll in a course:</h3>
        <ol>
            <li>Choose a course 
                <p>Check out our courses and choose the one that suits your child's interests. Each course is accompanied by a detailed description so that you can make an informed decision.</p>
            </li>
            <br>
            <li>Add the course to the cart
                <p>Click the "Sign up" button and continue to select other courses or proceed to registration.</p>
            </li>
            <br>
            <li>Registration of the record
                <p>Go to the shopping cart, check the selected courses and fill in the required registration details.</p>
            </li>
            <br>
            <li>Confirmation of the recording
                <p>After making an appointment, we will contact you to confirm and clarify all the details. You will receive a notification confirming your course registration and class time.</p>
            </li>
        </ol>
    <br>
    <h3>Payment methods:</h3>
    <ul>
        <li>Bank card</li>
        <li>Electronic wallets</li>
        <li>Cash payment (for customers visiting the center)</li>
    </ul>
    <br>
    <h3>Feedback:</h3>
    <p>If you have any questions or difficulties when enrolling in the course, do not hesitate to contact us. We are always ready to help and provide additional information.</p>
    <br> <br>
    <h3>Enrolling in courses at IT TECHNIC is a great opportunity for your child to develop and gain new knowledge in an exciting and supportive atmosphere.</h3>

    <div class="form-container">
        <h3>Sign up for a course:</h3>
        <form action="">
            <label for="name">Name:</label>
            <input type="text" name="name"required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="course">Choose a course:</label>
            <select required>
                <option value="programming">Programming</option>
                <option value="robotics">Robotics</option>
                <option value="creativity">Creation</option>
                <option value="science">Sciences</option>
            </select>
            <br> <br>
            <label for="message">Comment:</label>
            <textarea name="message" rows="4" placeholder="Your wishes or questions..."></textarea>

            <button type="submit">Sing up</button>
        </form>
    </div>
</section>

</body>
</html>


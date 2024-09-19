<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESPONSIVE LAYOUT STRUCTURE</title>
    <link rel="stylesheet" href="../css/customstyle.css">
</head>
<body>
    <header>
        <br>
        <div>
            <h1>COLLEGE OF INFORMATION AND COMPUTING SCIENCES 🏫</h1>
            <h2>BACHELOR OF SCIENCE IN INFORMATION SYSTEM 🎓</h2>
            <br>
        </div>
        <hr>
        <div class="container">
            <a href="../Index.html">HOME</a> |
            <a href="../pages/about.html">ABOUT</a> |
            <a href="../pages/contactus.html">CONTACT US</a> |
            <a href="../pages/inquiry.html">INQUIRY</a> |
            <a href="../pages/profile.html">PROFILE</a> |
            <button id="submit_btn"><a href="../pages/login.html" style=" color: black;">Login</a></button>
        </div>
    </header>

    <section>
        <nav>
            <ul>
                <li>
                    <a href="heading.html">Heading</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="table.html">Table</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="form.html">Form</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="form.post.php">Form Post Php</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="image.html">Image</a>
                </li>
            </ul>
        </nav>

        <article>
            <h1>LISTS</h1>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Form 1 Data
                    $fname = $_POST['fname'] ?? '';
                    $lname = $_POST['lname'] ?? '';
                    $email = $_POST['emailAdd'] ?? '';
                    $datetimeData = $_POST['datetimeData'] ?? '';

                    // Form 2 Data
                    $language = $_POST['language'] ?? '';
                    $message = $_POST['message'] ?? '';

                    // Form 3 Data
                    $name = $_POST['name'] ?? '';
                    $age = $_POST['age'] ?? '';

                    // Display or process the data as needed
                    echo "First Name: $fname <br>";
                    echo "Last Name: $lname <br>";
                    echo "Email: $email <br>";
                    echo "Selected Language: $language <br>";
                    echo "Message: $message <br>";
                    echo "Name: $name <br>";
                    echo "Age: $age <br>";
                }
            ?>
        </article>

    </section>

    <footer>
        <h2>Tutorialspoint 📚</h2>
        <div>
            <a href="../footerButtons/aboutUs.html"> ABOUT US </a>
            <a href="../footerButtons/termsOfUse.html"> TERMS OF USE </a>
            <a href="../footerButtons/privacyPolicy.html"> PRIVACY POLICY </a>
            <a href="../footerButtons/faq's.html"> FAQ'S </a>
            <a href="../footerButtons/contact.html"> CONTACT </a>
        </div>
        <hr>
        <div>
            <p>
                Copyright @ TUTORIALS POINT (INDIA)
                PRIVATE LIMITED. All rights reserved.
            </p>
        </div>
    </footer>

</body>
</html>
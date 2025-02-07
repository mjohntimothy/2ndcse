<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Signup</title>
    <link rel="stylesheet" href="modern-styles.css">
</head>
<body>
    <section class="signup-section">
        <h2>Student Signup</h2>
        <form action="student_signup_process.php" method="POST" class="signup-form">
            <div class="input-group">
                <label for="register_number">Register Number</label>
                <input type="text" id="register_number" name="register_number" placeholder="Register Number" required>
            </div>
            <div class="input-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Full Name" required>
            </div>
            <div class="input-group">
                <label for="mobile">Mobile Number</label>
                <input type="text" id="mobile" name="mobile" placeholder="Mobile Number" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email">
            </div>
            <div class="input-group">
                <label for="study">Study Program</label>
                <input type="text" id="study" name="study" placeholder="Study Program" required>
            </div>
            <div class="input-group">
                <label for="branch">Branch</label>
                <input type="text" id="branch" name="branch" placeholder="Branch" required>
            </div>
            <div class="input-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="input-group">
                <label for="doj">Date of Joining</label>
                <input type="date" id="doj" name="doj" required>
            </div>
            <div class="input-group">
                <label for="loc">Location</label>
                <input type="text" id="loc" name="loc" placeholder="Location">
            </div>
            <button type="submit" class="signup-button">Create Account</button>
        </form>
    </section>
</body>
</html>

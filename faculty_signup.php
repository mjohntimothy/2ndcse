<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Signup</title>
    <link rel="stylesheet" href="modern-styles.css">
</head>
<body>
    <section class="signup-section">
        <h2>Faculty Signup</h2>
        <form action="faculty_signup_process.php" method="POST" class="signup-form">
            <div class="input-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Full Name" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
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
                <label for="higher_degree">Higher Degree</label>
                <input type="text" id="higher_degree" name="higher_degree" placeholder="Higher Degree" required>
            </div>
            <div class="input-group">
                <label for="department">Department</label>
                <input type="text" id="department" name="department" placeholder="Department" required>
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

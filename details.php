<?php
// Fetching user details from the database (this is a placeholder example)
$user_name = "Karna Hada";
$location = "Bhaktapur, Bagmati, Nepal";
$college = "Chanakya College of Management";
$open_to_work = "Intern, Web Designer and Web Developer roles";

// Image URL from imgbb
$profile_image_url = "https://i.ibb.co/VwFwp4P/KARNA-1.jpg";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $user_name; ?> - Portfolio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header class="profile-header">
            <img src="<?php echo $profile_image_url; ?>" alt="Profile Picture" class="profile-img">
            <h1><?php echo $user_name; ?></h1>
            <h3><?php echo $location; ?></h3>
            <p><?php echo $college; ?></p>
            <button class="contact-btn">Contact Info</button>
            <button class="open-to-work-btn">Open to Work</button>
        </header>

        <section class="profile-details">
            <h2>Open to work</h2>
            <p><?php echo $open_to_work; ?></p>
        </section>
    </div>
</body>
</html>

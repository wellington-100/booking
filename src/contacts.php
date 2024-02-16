<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacts</title>
    <?php
        $city = 'Chisinau';
        $street = 'Stefan cel Mare 70';
        $phone = '+37360111222';
        $email = 'book@booking.com';
        $coords = 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2716.39999549216!2d28.832398!3d47.0262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1653908412345!5m2!1sen!2s';
    ?>
</head>
<body>
    <center>   
        <header>
            <hr>
            <h1>BOOKING AIRLINE TICKETS AND HOTELS ONLINE!!!</h1>
            <hr>
        </header>
        
        <main>
            <section>
                <h2>Informații de contact:</h2>
                <p><strong>City: </strong> <?php print($city); ?></p>
                <p><strong>Street: </strong><?php print($street); ?></p>
                <p><strong>Contact phone: </strong><?php print($phone); ?></p>
                <p><strong>Email: </strong><?php print($email); ?></p>
            </section>

            <section>
                <h2>Our location on the map:</h2>
                <iframe 
                    src="<?php print($coords); ?>" 
                    width="600" height="450" 
                    style="border: 10px;"
                    loading="lazy">
                </iframe>
            </section>
        </main>

        <footer>
            <p>&copy; 2024 Booking App. All rights reserved.</p>
        </footer>
    </center> 
</body>
</html>
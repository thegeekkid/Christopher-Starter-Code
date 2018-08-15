<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Renewal Form</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php
            if (isset($_GET['success'])) {
                if ($_GET['success'] == 'true') {
                    echo '<div id="success"><h2>Order received - we will be in touch shortly.</h2></div>';
                }
            }
        ?>
        <form action="backend.php" method="post">
            <label for="first_name">First name:</label>
            <input type="text" id="first_name" name="first_name" />
            <label for="last_name">Last name:</label>
            <input type="text" id="last_name" name="last_name" />
            <label for="phone">Phone number:</label>
            <input type="tel" id="phone" name="phone" />
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" />
            <label for="software">Software selection</label>
            <select id="software" name="software">
                <option value="Emsisoft">Emsisoft</option>
                <option value="BitDefender">BitDefender</option>
            </select>
            <label for="endpoints">Number of endpoints:</label>
            <input type="number" id="endpoints" name="endpoints" value="0" />
            <label for="servers">Number of servers:</label>
            <input type="number" id="servers" name="servers" value="0" />
            <label for="years">Number of years:</label>
            <select id="years" name="years">
                <option value="1">1 year</option>
                <option value="2">2 years</option>
                <option value="3">3 years</option>
            </select>
            <label for="quote_amount">Estimated total:</label>
            <input type="textbox" id="quote_amount" name="quote_amount" readonly />
            <label for="notes">Notes:</label>
            <textarea id="notes" name="notes"></textarea>
            <input type="submit" id="submit" name="submit" value="Submit Renewal" />
        </form>
        <!--Add JQuery from the official CDN-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
        <script src="js/quote_system.js"></script>
    </body>
</html>
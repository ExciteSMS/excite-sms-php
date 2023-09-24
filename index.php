<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/style.css">

<head>
    <title>Excite SMS Sender</title>
</head>
<body>
    <h1>Send SMS using Excite SMS API</h1>
    <form method="post" action="send_sms.php">
        <label for="recipient">Recipient:</label>
        <input type="text" id="recipient" name="recipient" required /><br />

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea><br />

        <input type="submit" value="Send SMS" />
    </form>
</body>
</html>

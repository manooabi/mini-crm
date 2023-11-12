<!-- <h1>Hi {{ $name }},</h1>
<h4> New Company Has Created</h4>
<p>Sending Mail from Laravel.</p> -->

<!-- resources/views/emails/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Mini-CRM</title>
</head>
<body>
    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="padding: 20px; background-color: #f4f4f4;">
                <h1>Welcome to Our Mini-Crm, {{ $name }}!</h1>
                <p>Thank you for joining our community. We are excited to have you on board.</p>
            </td>
        </tr>
        <tr>
            <td style="padding: 20px; text-align: center;">
                <p>If you have any questions or need assistance, feel free to contact us.</p>
                <p>Best regards,<br>Our Team</p>
            </td>
        </tr>
    </table>
</body>
</html>
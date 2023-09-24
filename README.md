# Excite SMS PHP Application

This is a simple PHP application for sending SMS using the Excite SMS API. You can use this application to send SMS messages to recipients using the Excite SMS service.

![Excite SMS PHP Application](screenshot.png)

## Features

- Send SMS messages using the Excite SMS API.
- Basic form for entering recipient number and message.
- Confirmation message for successful or failed SMS sending.
- Basic CSS styling for a clean and user-friendly interface.

## Technologies Used

- PHP
- cURL for making API requests
- HTML and CSS for the user interface

## Getting Started

To get started with this application, follow these steps:

1. Clone the repository to your local machine:

   ```bash
   git clone https://github.com/your-username/excite-sms-php.git
   cd excite-sms-php
   ```


2. Open the `index.php` file in your web browser. You should see the SMS sending form.

3. Fill out the recipient phone number and message in the form, and click the "Send SMS" button to send the SMS using the Excite SMS API.

## Usage

1. Fill out the recipient phone number and message in the form provided.
2. Click the "Send SMS" button to send the SMS using the Excite SMS API.
3. A confirmation message will be displayed indicating whether the SMS was sent successfully or if an error occurred.

## API Configuration

To use this application, you need to configure the Excite SMS API credentials. Modify the `$api_key` variable in the `send_sms.php` file to include your API key:

```php
// Replace with your Excite SMS API key
$api_key = 'YOUR_API_KEY_HERE';
```

## Styling

The application includes basic CSS styling for a clean and user-friendly interface. You can customize the CSS further by editing the `style.css` file in the `css` directory.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Acknowledgments

- Excite SMS for providing the SMS gateway API.



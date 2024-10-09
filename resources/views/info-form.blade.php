<!-- resources/views/info-form.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Form</title>
</head>
<body>
    <div style="margin-top: 50px; text-align: center;">
        <h1>Information Form</h1>
        <form>
            <div style="margin-bottom: 15px;">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="fname">Father's Name:</label>
                <input type="text" id="fname" name="fname" placeholder="Enter your father's name">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="number">Phone Number:</label>
                <input type="text" id="number" name="number" placeholder="Enter your phone number">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="country">Country:</label>
                <input type="text" id="country" name="country" value="{{ $countryName }}" readonly>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="code">Country Code:</label>
                <input type="text" id="code" name="code" value="{{ $countryCode }}" readonly>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

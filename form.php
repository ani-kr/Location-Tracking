<!DOCTYPE html>
<html>
<head>
    <title>User Location Form</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="card">
    <h2>📍 Share Your Location</h2>

    <form method="post" action="save.php">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <textarea name="description" placeholder="Short Description"></textarea>

        <input type="hidden" name="latitude" id="lat">
        <input type="hidden" name="longitude" id="lng">

        <button type="submit">Submit Location</button>
    </form>
</div>

<script>
navigator.geolocation.getCurrentPosition(
    function(position){
        document.getElementById("lat").value = position.coords.latitude;
        document.getElementById("lng").value = position.coords.longitude;
    },
    function(){
        alert("Location permission is required.");
    }
);
</script>

</body>
</html>

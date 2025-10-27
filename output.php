<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Application Submitted</title>
<style>
body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(100deg, #27253e, #44174E, #662249, #A34054, #ED9E59, #0D1E4C,#C48CB3,#83A6CE,#26415E,#E3B6B1,#845162,#522C5D);
  background-size: 400% 400%;
  animation: gradientBG 15s ease infinite;
  margin: 0;
  padding: 0;
  text-align: center;
  color: #fff;
  min-height: 100vh;
}

@keyframes gradientBG {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

.output-box {
  margin: 80px auto;
  width: 450px;
  background: rgba(255,255,255,0.15);
  border-radius: 20px;
  padding: 30px;
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  box-shadow: 0 8px 30px rgba(0,0,0,0.4);
  animation: fadeIn 0.7s ease-in;
}

.output-box h2 {
  color: #fff;
  text-shadow: 1px 1px 3px rgba(0,0,0,0.4);
}

.output-box p {
  text-align: left;
  margin: 10px 0;
  font-size: 15px;
  color: #fff;
}

@keyframes fadeIn {
  from {opacity: 0; transform: translateY(20px);}
  to {opacity: 1; transform: translateY(0);}
}

button {
  margin-top: 20px;
  background-color: rgba(255,255,255,0.3);
  border: 2px solid rgba(255,255,255,0.5);
  color: #fff;
  padding: 10px 25px;
  border-radius: 25px;
  cursor: pointer;
  font-size: 15px;
  transition: 0.3s;
}

button:hover {
  background-color: rgba(255,255,255,0.5);
  transform: scale(1.05);
}
</style>
</head>
<body>

<?php
if (isset($_POST['submit'])) {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $course = htmlspecialchars($_POST['course']);
  $address = htmlspecialchars($_POST['address']);

  echo "<div class='output-box'>";
  echo "<h2>✅ Application Submitted Successfully!</h2>";
  echo "<p><strong>Name:</strong> $name</p>";
  echo "<p><strong>Email:</strong> $email</p>";
  echo "<p><strong>Phone:</strong> $phone</p>";
  echo "<p><strong>Course:</strong> $course</p>";
  echo "<p><strong>Address:</strong> $address</p>";
  echo "<p>We’ll contact you soon. Thank you!</p>";
  echo "<button onclick=\"window.location.href='form.php'\">⬅ Go Back</button>";
  echo "</div>";
}
else {
  echo "<p style='margin-top:100px;'>⚠️ No data received. Please submit the form first.</p>";
}
?>

</body>
</html>

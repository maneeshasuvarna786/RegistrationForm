<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Online Registration Form</title>

<!-- ✅ jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- ✅ CSS Styling -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(100deg, #27253e, #44174E, #662249, #A34054, #ED9E59, #0D1E4C,#C48CB3,#83A6CE,#26415E,#E3B6B1,#845162,#522C5D);
  background-size: 400% 400%;
  animation: gradientBG 15s ease infinite;
  margin: 0;
  padding: 0;
  text-align: center;
  min-height: 100vh;
}

@keyframes gradientBG {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

h2 {
  color: #fff;
  margin-top: 40px;
  text-shadow: 1px 1px 4px rgba(0,0,0,0.3);
  letter-spacing: 1px;
}

/* 🌟 Glassmorphic Form */
form {
  background: rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border: 1px solid rgba(255, 255, 255, 0.3);
  width: 400px;
  margin: 40px auto;
  padding: 25px;
  border-radius: 20px;
  box-shadow: 0 8px 30px rgba(0,0,0,0.3);
  transition: 0.4s;
}

form:hover {
  transform: scale(1.02);
  box-shadow: 0 10px 35px rgba(0,0,0,0.4);
}

label {
  display: block;
  text-align: left;
  margin-left: 25px;
  color: #fff;
  font-weight: 500;
}

input, textarea, select {
  width: 85%;
  padding: 10px;
  margin: 8px 0 15px;
  border: none;
  border-radius: 6px;
  font-size: 14px;
  outline: none;
  transition: all 0.3s ease;
  background: rgba(255, 255, 255, 0.8);
}

input:focus, textarea:focus, select:focus {
  box-shadow: 0 0 8px rgba(255,255,255,0.8);
}

input[type="submit"] {
  width: 60%;
  background-color: rgba(255, 255, 255, 0.2);
  color: #fff;
  border: 2px solid rgba(255, 255, 255, 0.5);
  padding: 12px;
  border-radius: 25px;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  transition: 0.3s;
}

input[type="submit"]:hover {
  background-color: rgba(255, 255, 255, 0.4);
  transform: scale(1.05);
}
</style>
</head>

<body>
<h2>Online Application / Registration Form </h2>

<form id="appForm" method="post" action="output.php">
  <label>Full Name:</label>
  <input type="text" name="name" id="name" placeholder="Enter your full name" required>

  <label>Email Address:</label>
  <input type="email" name="email" id="email" placeholder="Enter your email" required>

  <label>Phone Number:</label>
  <input type="text" name="phone" id="phone" placeholder="Enter your phone number" required>

  <label>Course Applying For:</label>
  <select name="course" id="course" required>
    <option value="">Select Course</option>
    <option value="B.Tech">B.Tech</option>
    <option value="MBA">MBA</option>
    <option value="BCA">BCA</option>
    <option value="M.Sc">M.Sc</option>
  </select>

  <label>Address:</label>
  <textarea name="address" id="address" rows="3" placeholder="Enter your address" required></textarea>

  <input type="submit" name="submit" value="Submit Application">
</form>

<script>
$(document).ready(function(){
  $("#appForm").submit(function(e){
    let name = $("#name").val().trim();
    let email = $("#email").val().trim();
    let phone = $("#phone").val().trim();
    let course = $("#course").val();
    let address = $("#address").val().trim();

    if(name === "" || email === "" || phone === "" || course === "" || address === ""){
      alert("⚠️ Please fill all fields before submitting.");
      e.preventDefault();
    } 
    else if(!/^[0-9]{10}$/.test(phone)) {
      alert("📞 Please enter a valid 10-digit phone number.");
      e.preventDefault();
    }
  });
});
</script>
</body>
</html>

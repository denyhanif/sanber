<!DOCTYPE html>
<html>
<head>
	<title>form.html</title>
</head>
<body>
<h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form method="POST" action="/welcome">
        @csrf
        <!-- First Name -->
        <p>First name:</p>
        <input type="text" name="Firstname" id="Firstname"><br>
        <!-- Last Name -->
        <p>Last name:</p>
        <input type="text" name="Lastname" id="Lastname"><br>
        <!-- Gender -->
        <p>Gender:</p>
        <input type="radio" name="Male" id="Male" value="Male">
        <label for="Male">Male</label><br>
        <input type="radio" name="Female" id="Female" value="Female">
        <label for="Female">Female</label><br>
        <input type="radio" name="Other" id="Other" value="Other">
        <label for="Other">Other</label><br>
        <!-- Nationality -->
        <p>Nationality:</p>
        <select name="Nationality" id="Nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Australian">Australian</option>
        </select>
        <!-- Language Spoken -->
        <p>Language Spoken:</p>
        <input type="checkbox" name="BahasaIndonesia" id="BahasaIndonesia">
        <label for="BahasaIndonesia">Bahasa Indonesia</label><br>
        <input type="checkbox" name="English" id="English">
        <label for="English">English</label><br>
        <input type="checkbox" name="Other" id="Other">
        <label for="Other">Other</label><br>
        <!-- Bio -->
        <p>Bio:</p>
        <textarea name="Bio" id="Bio" cols="30" rows="10"></textarea><br>
        <!-- Button -->
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>
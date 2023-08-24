<!DOCTYPE html>
<html>
	<head>
		<title>Application Forms....</title>
	</head>
	<body>
		<header>
			<h2>Dealing with Form Elements....</h2>
			<hr/>
		</header>
		<nav>
			<a href="index.htm" target="_self">Home</a>
		</nav>
		<main>
		
			<form method = "POST" action ="index.htm" name = "frmApplication">
				<label for ="fname">First Name: </label>
				<input type ="text" name ="fname" placeholder ="Enter First Name" required title = "First Name..."/><br/>
				<label for ="oname">Other Names: </label>
				<input type ="text" name ="oname" placeholder ="Enter Other Names" title = "Other Names..."/><br/>
				<label for ="sname">Surname: </label>
				<input type ="text" name ="sname" placeholder ="Enter Surname" required title = "Surname..."/><br/>
				<label for ="dob">Date of Birth: </label>
				<input type ="date" max="2022-04-23"/><br/>
				<fieldset>
				<legend>Gender</legend>
					<input type ="radio" id = "male" name = "genderType" value="MALE" checked />&nbsp;<label for = "male">Male</label>
					<input type ="radio" id = "female" name = "genderType" value="FEMALE"/>&nbsp;<label for = "female">Female</label>
				</fieldset>
				<label for ="maritalStatus">Marital Status:</label><br/>
				<select name ="maritalStatus">
					<option ></option>
					<option >Single</option>
					<option >Married</option>
					<option >Divorced</option>
					<option >Co-Habiting</option>
				</select><br/>
				<label for ="Subject">Best Subjects: </label><br/>
				<input type ="checkbox" id="math" name ="Subject" value ="Math"/>&nbsp;<label for ="math">Mathematics</label><br/>
				<input type ="checkbox" id="english" name ="Subject" value ="English"/>&nbsp;<label for ="english">English</label><br/>
				<input type ="checkbox" id="social" name ="Subject" value ="Social"/>&nbsp;<label for ="social">Social Studies</label><br/>
				<input type ="checkbox" id="science" name ="Subject" value ="Science"/>&nbsp;<label for ="science">General Science</label><br/><br/>
				<label for="e_mail">E - Mail: </label>
				<input type ="email" name ="e_mail" placeholder ="yourname@adddress.org" required title ="E - Mail"/><br/>
				<label for ="schCert">Upload Your Certificate: </label>
				<input type ="file" name="schCert" /> <br/>
				<label for ="favColor">Favourite Color: </label>
				<input type = "color" name ="favColor"><br/>
				<label for="secretCode">Enter Secret PIN: </label>
				<input type = "password" name = "secretCode" size ="4" max ="4" required /><br/>
				<label for ="profile">Brief Profile: </label><br/>
				<textarea name ="profile" cols="100" rows="10" min="30"></textarea><br/><br/><br/>
				<input type = "submit" name ="cmdSubmit" value = "ENTER"/>
				<input type ="reset" name ="cmdClear" value ="CLEAR FORM" />
							
				
				
			</form>
		</main>
		<footer>
		<hr/>
			<b>Developed by Level 400 Weekend Class &reg;</b>
		</footer>
	</body>
	
</html>
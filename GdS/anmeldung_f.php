
<form id="anmeldung" method="post" action="anmeldung_auswerten.php">
	<table>
		<tr>
			<td>Vorname:</td>
			<td><input type="text" name="vorname" value=""> <br /></td>
		</tr>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" value=""> <br /></td>
		</tr>
		<tr>
			<td>Straﬂe:</td>
			<td><input type="text" name="strasse" value=""><br /></td>
		</tr>
		<tr>
			<td>Stadt:</td>
			<td><input type="text" name="stadt" value=""><br /></td>
		</tr>
		<tr>
			<td>Telefonnummer:</td>
			<td><input type="tel" name="telefonnummer" value=""><br /></td>
		</tr>
		<tr>
			<td>Mitglied:</td>
			<td><input type="checkbox" name="mitglied" value=""><br /></td>
		</tr>
		<tr>
			<td>Anzahl</td>
			<td><select name="anzahl">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
			</select><br /></td>
		</tr>
		<tr>
			<td>Kommentar:</td>
			<td><textarea name="comments"></textarea></td>
		</tr>
		<tr>
			<td><input type="submit"></td>

			<td><input type="reset"></td>
		</tr>
	</table>
</form>



<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-color: #ffcccc;
}
</style>
</head>
<body>
<h1> Doctor Information System</h1>
<p>
<h2>Problem</h2><br>
Fetch 150 records from a Doctor Entity and show the details in the UI. Use below mentioned<br>
points :<br>
1. Entity details :- Doctor<br>
a. Doctor name<br>
b. Hospital name ( Name of the hospital that doctor is working)<br>
c. Qualification<br>
d. Location -(Name of the place, where the hospital is located)<br>
e. Last Updated Date<br>
f. NOTE: It is possible that there can be duplicate entries for a doctor in the<br>
table.<br>
2. Rules for showing 150 records :<br>
. Last Updated Date of all entries should be maximum 30 days old.<br>
a. All the doctors associated with a particular hospital within the 30 day limit should be<br>
listed.<br>
b. Doctors in same hospitals(same name & same location) should be grouped together.<br>
c. Duplicate entries for a doctor should come together (or group together). Criteria for<br>
duplicity is :<br>
i.Doctors are in same hospital with same doctor name, same qualification and same location.<br>
</p>
<a href="answer.php"> click here to see records</a>
</body>
</html>
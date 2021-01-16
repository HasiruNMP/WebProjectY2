
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="farmer-report-added.php" method="post" enctype="multipart/form-data"> 
<table border="0"> 
    <tr> 
        <td>
            <h1> Enter Your Details</h1>
        </td>
    </tr>
    <tr> 
        <th> First Name: </th> 
        <td> <input type="text" name="fname"> 
    </td> 
</tr> 
<br> 
<tr> 
    <th> Last Name: </th> 
    <td> <input type="text" name="lname"> 
</td> 
</tr> 
<br> 
<tr> 
    <th> Email: </th> 
    <td> <input type="text" name="email"> </td> 
</tr> 
<br> 
<tr> 
    <th> Crop Name: </th> 
    <td> <input type="text" name="cropnme"> </td> 
</tr> 
<br> 
<tr> 
    <th> Crop Type:</th> 
    <td> 
        <select name="cropt" >
            <option value="Fruits">Fruits</option>
            <option value="Vegetables">Vegetable</option>
            <option value="Grain">Grain</option>
        </select>
    </td> 
    <br> 
    <tr> 
        <th> Quantity: </th> 
            <td> 
                <input type="text" name="qunt"> 
            </td> 
        </tr> 
        <br> 
        <tr> 
            <th> Description: </th> 
            <td> <input type="text" name="desc"> 
        </td> 
    </tr> 
    <br> 
    <tr> 
        <th> Latitude: </th> 
        <td> <input type="hidden" name="lati"  value="'+ mapsMouseEvent.latLng.lat() +'" > <input type="text"  disabled value="'+ mapsMouseEvent.latLng.lat() +'" > </td> 
    </tr> 
    <br><br> 
    <tr> 
        <th> Longitude: </th> 
        <td> <input type="hidden" name="longi"  value="'+ mapsMouseEvent.latLng.lng() + '" > <input type="text"  disabled value="'+ mapsMouseEvent.latLng.lng() + '" > </td> 
    </tr> <br>  
    <tr> 
        <th> 
            <label for="myfile">Select Photo1:</label> </th>  <br> <th> <input type="file" name="image"> </tr> </th>  <br>    <tr> <th> <label for="myfile">Select Photo 2:</label> </th>  <br> <th> <input type="file" name="image2"> </tr></th><br>  <tr> <th> <label for="myfile">Select Photo3:</label> </th>  <br> <th> <input type="file" name="image3"></tr></th><br><tr><td><input type="submit" name="submit"> </td> </tr></form> 








</body>
</html>
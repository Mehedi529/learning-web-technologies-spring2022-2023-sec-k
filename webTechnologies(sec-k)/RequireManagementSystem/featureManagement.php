<!DOCTYPE html>
<html>
<head>
<title>Feature Management</title>
</head>
<body>
<h1>Feature Management</h1>
<fieldset>
     <legend>Create Feature</legend>
               <form method="POST" action= "featureCheck.php " enctype="">
                <table>
                    <tr>
                        <td>Name
                        <input type="text" name="name" value="">
                        </td>
                        <td>
                           Description:
                            <textarea name="description" id="" cols="10" rows="5"></textarea></br>
                            <input type="submit" name="create" value="Create">
                        </td>
                    </tr>
                </table> 
               </form>


    <h2>Edit Feature</h2>
                  <form method="POST" action="featureCheck.php" enctype="">
                         <label>ID:</label>
                           <input type="number" name="id" value="" placeholder="id..."><br>
                           <label>Name:</label>
                           <input type="text" name="name" value="" placeholder="name..."><br>
                           <label>Description:</label>
                           <textarea name="description"></textarea><br>
                           <input type="submit" name="update" value="Update">
                  </form>
    <h2>Delete Feature</h2>
                  <form method="POST" action="featureCheck.php" enctype="">
                           <label>ID:</label>
                           <input type="number" name="id" value="" placeholder="id..."><br>
                           <input type="submit" name="delete" value="Delete">
                  </form>
</fieldset>
</body>
</html>
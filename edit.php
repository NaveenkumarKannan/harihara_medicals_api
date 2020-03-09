<?php
include_once("connection.php");
 
if(isset($_POST['update']))
{    
    //$id = $_POST['id'];
    
    /*$name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email']; */
    
    $pname =  $_POST['pname'];
        $company = $_POST['company'];
        $category = $_POST['category'];
        $Price = $_POST['Price'];
        $Dosage = $_POST['Dosage'];
        $prescrib = $_POST['prescrib'];
        $SKU = $_POST['SKU'];
        $Expiry_date = $_POST['expirydate'];
        $Stock = $_POST['stock'];
    
    



    //if(isset($_POST['add'])){
        
    // checking empty fields
    if(empty($pname) || empty($company) || empty($category) || empty($Price) || empty($Dosage) || empty($prescrib) || empty($SKU) || empty($Expiry_date) || empty($Stock)) {            
                   echo "<font color='red'> field is empty</font><br/>";
        
        
        /*if(empty($age)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }  */      
    } else {    
        //updating the table
        $result = mysql_query($mysql, "UPDATE products SET productname='$pname',company='$company', category='$category',price='$Price', dosage ='$Dosage', prescrib='$prescrib',SKU='$SKU', expirydate='$Expiry_date',stock='$Stock' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: product table.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['productid'];



//$query = "INSERT into products VALUES ('','$pname','$company','$category','$Price','$Dosage','$prescrib','$SKU','$Expiry_date','$Stock')";
$query = "SELECT * FROM products WHERE id=$id";
$result = mysql_query($query);
//if($result)
//{


 
//selecting data associated with this particular id

//$result = mysql_query($mysql, "SELECT * FROM products WHERE id=$id");
 
while($result)
{
   /* $name = $res['name'];
    $age = $res['age'];
    $email = $res['email'];*/
    $pname =  $_POST['pname'];
    $company = $_POST['company'];
    $category = $_POST['category'];
    $Price = $_POST['Price'];
    $Dosage = $_POST['Dosage'];
    $prescrib = $_POST['prescrib'];
    $SKU = $_POST['SKU'];
    $Expiry_date = $_POST['expirydate'];
    $Stock = $_POST['stock'];

}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="product table.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
       <!-- <table border="0">
            <tr> 
                <td>Product Name</td>
                <td><input type="text" name="pname" value="<?php// echo $name;?>"></td>
            </tr>
            <tr> 
                <td>Age</td>
                <td><input type="text" name="age" value="<?php// echo $age;?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php// echo $email;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php //echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>-->
        <label>Product name</label><input class="form-control" type="text" name=pname>
                                            <label>Company</label><input class="form-control" type=text name=company>
                                            <label>category</label><input class="form-control"type=text name=category>
                                            <label>Price</label><input class="form-control" type=number name=Price>
                                            <label>Dosage</label><input class="form-control" type=number name=Dosage>
                                            <label>Prescription required</label>
                                            <select class="form-control" name=prescrib>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                         
                                         <label>SKU</label><input class="form-control" type=number name=SKU>
                                            <label>Expiry date</label><input class="form-control" type=number name=expirydate>
                                            <label>Stock</label><input class="form-control" type=number name=stock>
                                          <!--<p class="help-block">Example block-level help text here.</p>-->
                                          
                                          <button type="submit" class="btn btn-primary" name=update>update</button>

    </form>
</body>
</html>
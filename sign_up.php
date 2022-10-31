<?php
require_once('header.php');

?>

<!-- main  -->
<?php
$E_user_name = "";
$E_password1 = "";
$E_password2 = "";
$E_eq = "";
$E_email = "";
$E_phone = "";
$E_gender ="";
$E_country = "";
        if(isset($_POST['ok'])){
            require_once('config.php');
            $name = $_POST['user_name'];
            $password1 = $_POST['user_password1'];
            $password2 = $_POST['user_password2'];
            $email = $_POST['user_email'];
            $phone = $_POST['user_tel'];
            $gender = $_POST['user_gender'];
            $country = $_POST['user_country'];
            $type = "User";
            // password Strong
            $uppercase = preg_match('@[A-Z]@', $password1);
            $lowercase = preg_match('@[a-z]@', $password1);
            $number    = preg_match('@[0-9]@', $password1);
            $specialChars = preg_match('@[^\w]@', $password1);
            ////////////////////
            if (empty($name) || (!(ctype_alpha($name)))) {
                $E_user_name = "You must enter the name or Enter only ALPHABET characters";
            }
            elseif (empty($password1) || !$uppercase || !$lowercase || !$number
                || !$specialChars || strlen($password1) < 4 ) {
                    $E_password1 = "Password should be at least 4 characters in length and should include at least one upper case letter, one number, and one special character";
  
            } elseif (empty($password2)) {
                $E_password2 = "You must enter the confirming password";
            } elseif ($password2 !== $password1) {
                $E_eq = 'Your confirming password is not correct';
            } elseif (empty($email) || (!filter_var($email, FILTER_VALIDATE_EMAIL))
            ) {
                $E_email = 'Your email is either empty or Enter only with EMAIL FORMAT';
            } elseif (empty($phone) || (!(ctype_digit($phone))) || strlen($phone) < 9) {
                $E_phone = 'Your phone is either empty or less than 9 numbers';
            } elseif (empty($gender)) {
                $E_gender = "You must choease the gender";
            }if (strlen($country) == 1) {
                $E_country = "You must choease the country";
            }
            else if(isset($_FILES['user_uplode']) && empty($_FILES['user_uplode']['tmp_name'])) {
                $password2 = md5($_POST['user_password2']);
                $sql = "insert into user(user_name,user_email,user_password,phone,user_gender,user_country,user_type)
                values('$name','$email','$password2','$phone','$gender','$country','$type')";
                $result = mysqli_query($conn,$sql);
                if(!$result){
                    echo "Insert Error" . mysqli_error($conn);
                }
                mysqli_close($conn);
            }
            else {
                $folder ="./Uplode/";
                $img = $_FILES['user_uplode']['name'];
                $tmp = $_FILES['user_uplode']['tmp_name'];
                $password2 = md5($_POST['user_password2']);
                $sql = "insert into user(user_name,user_email,user_password,phone,user_gender,user_countery,user_img,user_type)
                values('$name','$email','$password2','$phone','$gender','$country','$img','$type')";
                $result = mysqli_query($conn,$sql);
                if(!$result){
                    echo "Insert Error" . mysqli_error($conn);
                }
                move_uploaded_file($tmp,$folder.$img);
                mysqli_close($conn);
            }
        }
        ?>
<!-- main  -->
<style>
#format {
	color: #dc3545;
}
</style>
<div style="margin-top:20px;margin-bottom:20px;" class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
     
        <form name="Register" id="reg" action="sign_up.php" method="post" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td><label class="form-label">Name:</label></td>
                    <td><input class="form-control" id="name" type="text" name="user_name" placeholder=""></td>
                    <td>
                     
                    </td>
                    <td style="color: red;">
                        <?php echo $E_user_name;?>
                    </td>
                </tr>
                <tr>
                    <td><label>Password:</label></td>
                    <td><input class="form-control" id="pass" type="password" name="user_password1" placeholder=""></td>
                    <td>

                    </td>
                    <td style="color: red;">
                        <?php echo $E_password1;?>
                    </td>
                </tr>
                <tr>
                    <td><label>Confirm Password:</label></td>
                    <td><input class="form-control" id="pass1" type="password" name="user_password2"></td>
                    <td>
                       
                    </td>
                    <td style="color: red;">
                        <?php echo $E_password2; echo $E_eq;?>
                    </td>
                </tr>
                <tr>
                    <td><label>Email:</label></td>
                    <td><input class="form-control" id="email" type="email" name="user_email"></td>
                    <td>
                      
                    </td>
                    <td style="color: red;">
                        <?php echo $E_email;?>
                    </td>
                </tr>
                <tr>
                    <td><label>Phone Number:</label></td>
                    <td><input class="form-control" id="tel" type="tel" name="user_tel" placeholder="Must consist of 9 numbers"></td>
                    <td>
                      
                    </td>
                    <td style="color: red;">
                        <?php echo $E_phone;?>
                    </td>
                </tr>
                <tr>
                    <td><label>Gender:</label></td>
                    <td>
                        <input class="form-check-input" id="gender" type="radio" name="user_gender" value="Male"> Male
                        <input class="form-check-input" id="gender" type="radio" name="user_gender" value="Female"> Female
                    </td>
                    <td>
                       
                    </td>
                    <td style="color: red;">
                        <?php echo $E_gender;?>
                    </td>
                </tr>
                <tr>
                    <td><label>Country:</label></td>
                    <td><select name="user_country" id="country">
                            <option value="w">Choose your country</option>
                            <option value="Yemen">Yemen</option>
                            <option value="China">iraq</option>
                            <option value="KSaudia arabia">Saudia arabia</option>
                            <option value="syria">syria</option>
                        </select></td>
                    <td>
                      
                    </td>
                    <td style="color: red;">
                        <?php echo $E_country;?>
                    </td>
                </tr>
                <tr>
                    <td>Uplode Image:</td>
                    <td><label id="format"><input class="form-control" type="file" id="user_img" name="user_uplode" onchange="checkImg();">
                            The allowed formats here are (jpg,png,svg,jpeg)</label></td>
                </tr>
                <tr>
                    <td><label class="form-check-label">Agree:</label> </td>
                    <td><input class="form-check-input" type="checkbox" name="agree" onclick="theChecker();">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input class="btn btn-primary" type="submit" value="Done" name="ok" onclick="checkC()">
                        <a href="./index.php" class="btn btn-primary" type="submit">Back</a>

                    </td>
                </tr>
            </table>
        </form>
        
    </div>
    <div class="col-md-2"></div>
</div>


<html>

<body bgcolor=azure>
    <form name="RegistrationPage" action="http://localhost:2424/19batch/registeration-validation.php" method="post">
        <fieldset>
            <legend align=center>
                <h2>REGISTER HERE</h2>
            </legend>
            <table cellpadding=5 align=center>
                <tr>
                    <td>First Name</td>
                    <td> : </td>
                    <td><input type="text" name="t1" class="textbox" placeholder="Only Characters" /></td>
                </tr>
                <tr>
                    <td>LastName</td>
                    <td> : </td>
                    <td><input type="Password" name="t2" class="textbox" placeholder="Max 15 characters" /></td>
                </tr>
                <tr>
                    <td> Password</td>
                    <td> : </td>
                    <td><input type="Password" name="t3" class="textbox" placeholder="Max 15 characters" /></td>
                </tr>
                <tr>
                    <td>Contact Number</td>
                    <td> : </td>
                    <td><input type="text" name="t4" class="textbox" placeholder="Without country code" max=10 /></td>
                </tr>
                <tr>
                    <td>Email Address</td>
                    <td> : </td>
                    <td><input type="text" name="t5" class="textbox" placeholder="Mail ID" max=35 /></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td> : </td>
                    <td>
                        >
                </tr>
                <tr>
                    </td>
                    <textarea name="t6" class="textbox" rows=5 cols=50></textarea>
                    checked> Male
                    <br>
                    <td>Gender</td>
                    <td> : </td>
                    <td><input type="radio" name="gender" value="male" 43 Female<br>
                        Other
                </tr>
                <tr>
                    </td>
                    <input type="radio" name="gender" value="female">
                    <input type="radio" name="gender" value="other">
                    value="REGISTER" /></td>
                    value="RESET" /></td>
                </tr>
                <td><input type="submit" class="button button1">
                <td></td>
                <td><input type="reset" class="button button1">
            </table>
    </form>
</body>

</html>
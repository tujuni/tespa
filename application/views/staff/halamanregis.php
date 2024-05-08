<div>
    <form name="formregis" id="formregis" method="post" action="<?php echo base_url('controller_main/regis') ?>">
        <table>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="email" id="email" required/></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" id="password" required/></td>
            </tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" required/></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>:</td>
                <td><input type="number" name="telp" id="telp" required/></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit">Regis</button>
                    <button type="reset">Cancel</button>
                    <a href="halamanlogin">Login</a>
                </td>
            </tr>
        </table>
    </form>
    
</div>
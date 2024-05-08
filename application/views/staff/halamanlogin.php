<div>
    <form name="formlogin" id="formlogin" method="post" action="<?php echo base_url('controller_main/login') ?>">
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
                <td></td>
                <td></td>
                <td>
                    <button type="submit">Login</button>
                    <button type="reset">Cancel</button>
                    <a href="halamanregis">Registrasi</a>
                </td>
            </tr>
        </table>
    </form>
    
</div>
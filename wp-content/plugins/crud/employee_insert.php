<?php
/*
* @package brij plugin
*/

function employee_insert()
{
    //echo "insert page";
    ?>
<table>
    <!-- <tbody> -->
    <form name="frm" action="#" method="post">
    <tr>
        <td>Name:</td>
        <td><input type="text" name="nm"></td>
    </tr>
    <tr>
        <td>Address:</td>
        <td><input type="text" name="adrs"></td>
    </tr>
    <tr>
        <td>Desigination:</td>
        <td><select name="des">
                <option value="developer">Developer</option>
                <option value="designer">Designer</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Mob no:</td>
        <td><input type="number" name="mob"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Insert" name="ins"></td>
    </tr>
    </form>
    <!-- </tbody> -->
</table>
<?php
    if(isset($_POST['ins'])){
        global $wpdb;
        $nm=$_POST['nm'];
        $ad=$_POST['adrs'];
        $d=$_POST['des'];
        $m=$_POST['mob'];
        $table_name = $wpdb->prefix . 'employee_list';

        $wpdb->insert(
            $table_name,
            array(
                'name' => $nm,
                'address' => $ad,
                'role' => $d,
                'contact'=>$m
            )
        );
        echo "inserted";
        ?>
        <?php
        exit;
    }
}

?>
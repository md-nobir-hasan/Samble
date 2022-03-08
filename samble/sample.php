<?php
function check($value)
{
    $data = htmlspecialchars($value);
    $data = stripslashes($data);
    $data = trim($data);
    return $data;
}

//^Update_Sample
//^sample_namemdnh24

//*dataBase Details

//db_table  =table_name_mdnh24
//db_column_1  =col_1_mdnh24
//db_column_2  =col_2_mdnh24
//db_column_3  =col_3_mdnh24
//db_column_4  =col_4_mdnh24
//db_column_5  =col_5_mdnh24


if (isset($_POST['buttonsmdnh24'])) {
    $col_1_mdnh24 = check($_POST['col_1_mdnh24']);
    $col_2_mdnh24 = check($_POST['col_2_mdnh24']);
    $col_3_mdnh24 = check($_POST['col_3_mdnh24']);
    $col_4_mdnh24 = check($_POST['col_4_mdnh24']);
    $col_5_mdnh24 = check($_POST['col_5_mdnh24']);

    // echo $col_1_mdnh24, $col_2_mdnh24, $col_3_mdnh24, $col_4_mdnh24, $col_4_mdnh24;


    $sql = "UPDATE `table_name_mdnh24` SET `col_1_mdnh24`='$col_1_mdnh24', `col_2_mdnh24`='$col_2_mdnh24', `col_3_mdnh24`='$col_3_mdnh24',`col_4_mdnh24`='$col_4_mdnh24',`col_5_mdnh24`='$col_5_mdnh24'";


    $execute = mysqli_query($conn, $sql);
    if ($execute) {
        $msg =  "<span>Successfully updated your profile</span>";
        header("Location: index.php");
    } else {
        $err_msg = "<span>DataBase Connect Fail</span>";
    }
}





//^ Select Sample
//^sample_namemdnh24
//*dataBase Details

//db_table  =table_name_mdnh24
//db_column_1  =col_1_mdnh24
//db_column_2  =col_2_mdnh24
//db_column_3  =col_3_mdnh24
//db_column_4  =col_4_mdnh24
//db_column_5  =col_5_mdnh24



$sql_select = "SELECT * FROM table_name_mdnh24";
$execute = mysqli_query($conn, $sql_select);
if ($execute) {
    $rows = mysqli_fetch_assoc($execute);

    $col_1_mdnh24 = $rows['col_1_mdnh24'];
    $col_2_mdnh24 = $rows['col_2_mdnh24'];
    $col_3_mdnh24 = $rows['col_3_mdnh24'];
    $col_4_mdnh24 = $rows['col_4_mdnh24'];
    $col_5_mdnh24 = $rows['col_5_mdnh24'];
}

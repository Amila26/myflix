<?php
$(document).ready(function () {

$(".book_now_btn2").click(function (e) {

    var r = $(this).attr("data-id");
    var dataString = $('#myformses_' + r).serialize();
    $('#loading_air_cell_book2').show();
    $('#message-review2').hide();
  
    $.ajax({
        type: 'POST',
        url: 'cart/ajax_action.php',
        data: dataString,
        success: function (data) {
            
            $('#message-review2').html(data);
            $('#loading_air_cell_book2').hide();
            $('#message-review22').hide();
            $('#message-review2').show();
           

        }
    });

    date_default_timezone_set('	Europe/London');
$date = date('m-d-Y h:i:s a', time());


});

});
function mysqlConnect(){
    $db_username = '';
$db_password = '';
$db_name = '';
$db_host = '';
						
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);						
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
return $mysqli;
}
function insert_travelyamu_ip_info($ip,$host,$country,$city,$website,$os,$browser,$other,$date)
{
$mysqli = cnnct_msqlTravel2();
$stmt = $mysqli->prepare("INSERT INTO travelyamu_ip_info (ip,host,country,city,webpage,os,browser,other,date)"
        . " VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssss", $ip,$host,$country,$city,$website,$os,$browser,$other,$date);
$stmt->execute();
$stmt->close();
$mysqli->close();
}
function getMainprddtls($prod_id) {
$mysqli = cnnct_msqlTravel2();
$sql_new = mysqli_query($mysqli, "SELECT * FROM sp_create_product WHERE sp_unq_id='$prod_id'");
while ($row_new = mysqli_fetch_assoc($sql_new)) {

    $rslt = $row_new;
}

return $rslt;
}
function update_cancel_sts($status,$bk_id)
{$mysqli = cnnct_msqlTravel2();
$stmt = $mysqli->prepare("UPDATE booking_items_status SET status=? WHERE bk_id=?");
$stmt->bind_param("ss", $status,$bk_id);
$stmt->execute();
$stmt->close();
$mysqli->close();
}
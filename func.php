<?php
// error_reporting(E_ERROR | E_PARSE);
function mysqlConnect(){
$db_username = 'chznn1n6_amila';
$db_password = 'amila@5907';
$db_name = 'chznn1n6_amila';
$db_host = '162.240.65.200';

$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);						
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
return $mysqli;
}

function insertSignup($usr_f_name,$usr_email,$usr_pwd,$usr_sts)
{
    date_default_timezone_set('Europe/London');
    $u_date = date('Y-m-d');
$time_stamp = date('Y-m-d h:i:s a');
$mysqli = mysqlConnect();
$stmt = $mysqli->prepare("INSERT INTO user_tbls (usr_f_name,usr_email,usr_pwd,usr_sts,u_date,time_stamp)"
        . " VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $usr_f_name,$usr_email,$usr_pwd,$usr_sts,$u_date,$time_stamp);
$stmt->execute();
$stmt->close();
$mysqli->close();
}

function searchAllUser($sts) {
    $mysqli = mysqlConnect();
    $sql_new = mysqli_query($mysqli, "SELECT * FROM user_tbls WHERE usr_sts='$sts'");
    while ($row_new = mysqli_fetch_assoc($sql_new)) {
    
        $rslt [] = $row_new;
    }
    
    return $rslt;
    }

    function searchUser($email,$usr_pwd) {
        $mysqli = mysqlConnect();
        $sql_new = mysqli_query($mysqli, "SELECT usr_email,usr_pwd FROM user_tbls WHERE usr_email='$email' AND usr_pwd='$usr_pwd'");
        while ($row_new = mysqli_fetch_assoc($sql_new)) {
        
            $rslt []= $row_new;
        }
        
        return $rslt;
        }

        function updateUser($usr_f_name,$usr_email)
{$mysqli = mysqlConnect();
$stmt = $mysqli->prepare("UPDATE user_tbls SET usr_f_name=? WHERE usr_email=?");
$stmt->bind_param("ss", $usr_f_name,$usr_email);
$stmt->execute();
$stmt->close();
$mysqli->close();
}

function deleteUser($usr_email)
{$mysqli = mysqlConnect();
$stmt = $mysqli->prepare("DELETE FROM user_tbls WHERE usr_email=?");
$stmt->bind_param("s", $usr_email);
$stmt->execute();
$stmt->close();
$mysqli->close();
}

function mongoViewvideos(){
    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://data.mongodb-api.com/app/data-cftrl/endpoint/data/v1/action/find',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "dataSource": "myflixcluster",
      "database": "myflix_mongo",
      "collection": "movie_tbl",
      "filter": { }
  }',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Access-Control-Request-Headers: *',
    'api-key: NjerXTS8Qc9YUGfCZbdRiv3eVwDyalzLL7FEvRRDA7CLFcHiwjs1C2FPTceRdmNr',
    'Accept: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$json = json_decode($response);
$doc = $json->documents;

return $doc;
}
{"filter":false,"title":"deleteadd.php","tooltip":"/deleteadd.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":42,"column":2},"action":"remove","lines":["<?php","","require_once 'include/DbHandler.php';","$db = new DbHandler();","$response = array();","$response[\"error\"] = false;","","if (isset($_POST['uid'])){","$response[\"tasks\"] = array();","$uid = $_POST['uid'];","$result = $db->deleteAdd($uid);","","if($result){","// looping through result and preparing tasks array","while ($task = $result->fetch_assoc()) {","    $tmp = array();","    $tmp[\"uid\"] = $task[\"unique_id\"];","    $tmp[\"newadd\"][\"category\"] = $task[\"category\"];","    $tmp[\"newadd\"][\"image\"] = $task[\"image\"];","    $tmp[\"newadd\"][\"price\"] = $task[\"price\"];","    $tmp[\"newadd\"][\"description\"] = $task[\"description\"];","    $tmp[\"newadd\"][\"phone\"] = $task[\"phone\"];","    $tmp[\"newadd\"][\"name\"] = $task[\"name\"];","    $tmp[\"newadd\"][\"email\"] = $task[\"email\"];","    $tmp[\"newadd\"][\"created_at\"] = $task[\"created_at\"];","    $tmp[\"newadd\"][\"updated_at\"] = $task[\"updated_at\"];","    array_push($response[\"tasks\"], $tmp);","}","echo json_encode($response);","}","else{","\t$response[\"error\"] = true;","\t$response[\"error_msg\"] = \"Unknown error occurred in deleting add!\";","\techo json_encode($response);","}","}","else{","\t","\t$response[\"error\"] = true;","\t$response[\"error_msg\"] = \"deleteid not posted!\";","\techo json_encode($response);","}","?>"],"id":2},{"start":{"row":0,"column":0},"end":{"row":43,"column":2},"action":"insert","lines":["<?php","","require_once 'include/DbHandler.php';","$db = new DbHandler();","$response = array();","$response[\"error\"] = false;","","if (isset($_POST['uid']) && isset($_POST['email'])){","$response[\"tasks\"] = array();","$uid = $_POST['uid'];","$email = $_POST['email'];","$result = $db->deleteAdd($uid,$email);","","if($result){","// looping through result and preparing tasks array","while ($task = $result->fetch_assoc()) {","    $tmp = array();","    $tmp[\"uid\"] = $task[\"unique_id\"];","    $tmp[\"newadd\"][\"category\"] = $task[\"category\"];","    $tmp[\"newadd\"][\"image\"] = $task[\"image\"];","    $tmp[\"newadd\"][\"price\"] = $task[\"price\"];","    $tmp[\"newadd\"][\"description\"] = $task[\"description\"];","    $tmp[\"newadd\"][\"phone\"] = $task[\"phone\"];","    $tmp[\"newadd\"][\"name\"] = $task[\"name\"];","    $tmp[\"newadd\"][\"email\"] = $task[\"email\"];","    $tmp[\"newadd\"][\"created_at\"] = $task[\"created_at\"];","    $tmp[\"newadd\"][\"updated_at\"] = $task[\"updated_at\"];","    array_push($response[\"tasks\"], $tmp);","}","echo json_encode($response);","}","else{","\t$response[\"error\"] = true;","\t$response[\"error_msg\"] = \"Unknown error occurred in deleting add!\";","\techo json_encode($response);","}","}","else{","\t","\t$response[\"error\"] = true;","\t$response[\"error_msg\"] = \"deleteid not posted!\";","\techo json_encode($response);","}","?>"]}]]},"ace":{"folds":[],"scrolltop":280,"scrollleft":0,"selection":{"start":{"row":36,"column":1},"end":{"row":36,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":16,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1459345224000,"hash":"c602089cea5664aa14aaf60bd032ea628c291bf4"}
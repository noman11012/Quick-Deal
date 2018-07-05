{"filter":false,"title":"myadds.php","tooltip":"/myadds.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":42,"column":2},"action":"remove","lines":["<?php","","require_once 'include/DbHandler.php';","$db = new DbHandler();","$response = array();","$response[\"error\"] = false;","","if (isset($_POST['email'])){","$response[\"tasks\"] = array();","$email = $_POST['email'];","$result = $db->getMyAdds($email);","","if($result){","// looping through result and preparing tasks array","while ($task = $result->fetch_assoc()) {","    $tmp = array();","    $tmp[\"uid\"] = $task[\"unique_id\"];","    $tmp[\"newadd\"][\"category\"] = $task[\"category\"];","    $tmp[\"newadd\"][\"image\"] = $task[\"image\"];","    $tmp[\"newadd\"][\"price\"] = $task[\"price\"];","    $tmp[\"newadd\"][\"description\"] = $task[\"description\"];","    $tmp[\"newadd\"][\"phone\"] = $task[\"phone\"];","    $tmp[\"newadd\"][\"name\"] = $task[\"name\"];","    $tmp[\"newadd\"][\"email\"] = $task[\"email\"];","    $tmp[\"newadd\"][\"created_at\"] = $task[\"created_at\"];","    $tmp[\"newadd\"][\"updated_at\"] = $task[\"updated_at\"];","    array_push($response[\"tasks\"], $tmp);","}","echo json_encode($response);","}","else{","\t$response[\"error\"] = true;","\t$response[\"error_msg\"] = \"Unknown error occurred in showing add!\";","\techo json_encode($response);","}","}","else{","\t","\t$response[\"error\"] = true;","\t$response[\"error_msg\"] = \"category not posted!\";","\techo json_encode($response);","}","?>"],"id":1},{"start":{"row":0,"column":0},"end":{"row":42,"column":2},"action":"insert","lines":["<?php","","require_once 'include/DbHandler.php';","$db = new DbHandler();","$response = array();","$response[\"error\"] = false;","","if (isset($_POST['email'])){","$response[\"tasks\"] = array();","$email = $_POST['email'];","$result = $db->getMyAdds($email);","","if($result){","// looping through result and preparing tasks array","while ($task = $result->fetch_assoc()) {","    $tmp = array();","    $tmp[\"uid\"] = $task[\"unique_id\"];","    $tmp[\"newadd\"][\"category\"] = $task[\"category\"];","    $tmp[\"newadd\"][\"image\"] = $task[\"image\"];","    $tmp[\"newadd\"][\"price\"] = $task[\"price\"];","    $tmp[\"newadd\"][\"description\"] = $task[\"description\"];","    $tmp[\"newadd\"][\"phone\"] = $task[\"phone\"];","    $tmp[\"newadd\"][\"name\"] = $task[\"name\"];","    $tmp[\"newadd\"][\"email\"] = $task[\"email\"];","    $tmp[\"newadd\"][\"created_at\"] = $task[\"created_at\"];","    $tmp[\"newadd\"][\"updated_at\"] = $task[\"updated_at\"];","    array_push($response[\"tasks\"], $tmp);","}","echo json_encode($response);","}","else{","\t$response[\"error\"] = true;","\t$response[\"error_msg\"] = \"Unknown error occurred in showing add!\";","\techo json_encode($response);","}","}","else{","\t","\t$response[\"error\"] = true;","\t$response[\"error_msg\"] = \"category not posted!\";","\techo json_encode($response);","}","?>"]}]]},"ace":{"folds":[],"scrolltop":23,"scrollleft":0,"selection":{"start":{"row":42,"column":2},"end":{"row":42,"column":2},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":198,"mode":"ace/mode/php"}},"timestamp":1459344803354,"hash":"c5417e36d9e04c53631106b8189530e5d8bdb683"}
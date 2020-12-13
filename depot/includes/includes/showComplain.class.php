<?php
include '../includes/class-autoload.inc.php';


$factory=new ControllerFactory();
$ctrl = $factory->getController("ENGINEER");
//show the selected record from the complain table
if (($_GET['compid']!="")&($_GET['task']=="selectRecord")){
    $complain_obj=new ComplainDTO($_GET['compid'],'','','','');
    $result=$ctrl->displayComplainById($complain_obj);

   /* echo "<div id=\"outForm\">
        <form>
           <input type=\"text\" id=\"selected complain\" value=\"{$result[0]['compid']}\">
           </form>
           <p>complain ID:{$result[0]['compid']}<br>
           duty ID:{$result[0]['dutyid']}<br>
           description:{$result[0]['description']}<br>
           date:{$result[0]['date']}<br>
           state:{$result[0]['state']}<br>
           </div>"; */
    echo "<div id=\"outForm\">
            <form>
                <input type=\"text\" id=\"selected complain\" value=\"{$result[0]['compid']}\">
                <input type=\"text\" id=\"selected bus\" value=\"{$result[0]['Numplate']}\">
            </form>
            </div>";      
}

//adding a worker to the complain
if (($_GET['compid']!="")&($_GET['workerid']!="")&($_GET['task']=="submitWorker")){
    $result=$ctrl->addworkers($_GET['compid'],$_GET['workerid']);
}

//finishing a complain
if (($_GET['compid']!="")&($_GET['task']=="finishComplain")){
    $complain_obj=new ComplainDTO($_GET['compid'],'','','','');
    $result=$ctrl->closeComplain($complain_obj);
}

?>
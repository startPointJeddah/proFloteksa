<?php

class countdown
{

    public function htmlCountDownClockId($deadline , $start){
        echo '
 <div id="del-countdown" class="container-fluid">
      <h1>باقي علي التسليم</h1>
      <div id="clock"></div>
      
    </div>
';
    }

    public function htmlCountDownClockAlertId($deadline , $start){
        echo '
 <div id="del-countdown" class="container-fluid">
      <h1 id="text-alert">الزمن الذي مر علي وقت التسليم</h1>
      <div id="clock-alert"></div>
      
      
    </div>
';
    }

     public function emptyDeliveryDate(){
        echo '
 <div id="del-countdown" class="container-fluid">
      <h1>لم يتم تحديد موعد الاستلام بعد</h1>
    </div>
';
    }

    public function BuildingDelivered(){
        echo '
 <div id="del-countdown" class="container-fluid">
      <h1>تم بحمد الله تسليم المبني</h1>
    </div>
';
    }


}

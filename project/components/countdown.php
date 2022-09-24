<?php

class countdown
{

    public function htmlCountDown(){
        echo '
 <div id="del-countdown">
      <h1>باقي علي التسليم</h1>
      <div id="clock"></div>
      <div id="units">
        <span>الآيام</span>
        <span>الساعات</span>
        <span>الدقائق</span>
        <span>الثواني</span>
      </div>
    </div>
';
    }

     public function emptyDeliveryDate(){
        echo '
 <div id="del-countdown">
      <h1>لم يتم تحديد موعد الاستلام بعد</h1>
    </div>
';
    }


}

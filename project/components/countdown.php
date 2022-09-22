<?php

class countdown
{

    public function htmlCountDown(){
        echo '
 <div id="del-countdown">
      <h1>باقى على التسليم</h1>
      <div id="clock"></div>
      <div id="units">
        <span>يوم</span>
        <span>ساعه</span>
        <span>دقائق</span>
        <span>ثواني</span>
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

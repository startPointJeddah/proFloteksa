<?php

class countdown
{

    public function htmlCountDownClockId($deadline , $start){
        echo '
 <div class="elementor-element elementor-element-2f8e2030 elementor-countdown--label-block elementor-widget elementor-widget-global elementor-global-445 elementor-widget-countdown" data-id="2f8e2030" data-element_type="widget" data-widget_type="countdown.default">
				<div class="elementor-widget-container">
			<style>/*! elementor-pro - v3.7.3 - 31-07-2022 */
.elementor-widget-countdown .elementor-countdown-expire--message{display:none;padding:20px;text-align:center}.elementor-widget-countdown .elementor-countdown-wrapper{-webkit-box-orient:horizontal;-webkit-box-direction:reverse;-ms-flex-direction:row-reverse;flex-direction:row-reverse}.elementor-widget-countdown .elementor-countdown-item{padding:20px 0;text-align:center;color:#fff}.elementor-widget-countdown .elementor-countdown-digits,.elementor-widget-countdown .elementor-countdown-label{line-height:1}.elementor-widget-countdown .elementor-countdown-digits{font-size:69px}.elementor-widget-countdown .elementor-countdown-label{font-size:19px}.elementor-widget-countdown.elementor-countdown--label-block .elementor-countdown-wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;margin-right:auto;margin-left:auto}.elementor-widget-countdown.elementor-countdown--label-block .elementor-countdown-digits,.elementor-widget-countdown.elementor-countdown--label-block .elementor-countdown-label{display:block}.elementor-widget-countdown.elementor-countdown--label-block .elementor-countdown-item{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1}.elementor-widget-countdown.elementor-countdown--label-inline{text-align:center}.elementor-widget-countdown.elementor-countdown--label-inline .elementor-countdown-item{display:inline-block;padding-left:5px;padding-right:5px}</style>		
<div class="elementor-countdown-wrapper" data-date="1672557900">
    <div className="elementor-countdown-item">
    <span
 className="elementor-countdown-digits elementor-countdown-days"></span><span class="elementor-countdown-label">الآيام</span>
 </div>
 <div className="elementor-countdown-item">
<span
 className="elementor-countdown-digits elementor-countdown-hours"></span><span class="elementor-countdown-label">الساعات</span>
</div>
 <div className="elementor-countdown-item">
<span
 className="elementor-countdown-digits elementor-countdown-minutes"></span><span class="elementor-countdown-label">الدقائق</span>
</div>
 <div className="elementor-countdown-item">
<span
 className="elementor-countdown-digits elementor-countdown-seconds"></span><span class="elementor-countdown-label">الثواني</span>
</div>
      
    </div>
    </div>
    </div>
    
';
    }


    public function htmlCountDownClockAlertId($deadline , $start){
        echo '
 <div class="elementor-element elementor-element-2f8e2030 elementor-countdown--label-block elementor-widget elementor-widget-global elementor-global-445 elementor-widget-countdown" data-id="2f8e2030" data-element_type="widget" data-widget_type="countdown.default">
				<div class="elementor-widget-container">
			<style>/*! elementor-pro - v3.7.3 - 31-07-2022 */
.elementor-widget-countdown .elementor-countdown-expire--message{display:none;padding:20px;text-align:center}.elementor-widget-countdown .elementor-countdown-wrapper{-webkit-box-orient:horizontal;-webkit-box-direction:reverse;-ms-flex-direction:row-reverse;flex-direction:row-reverse}.elementor-widget-countdown .elementor-countdown-item{padding:20px 0;text-align:center;color:#fff}.elementor-widget-countdown .elementor-countdown-digits,.elementor-widget-countdown .elementor-countdown-label{line-height:1}.elementor-widget-countdown .elementor-countdown-digits{font-size:69px}.elementor-widget-countdown .elementor-countdown-label{font-size:19px}.elementor-widget-countdown.elementor-countdown--label-block .elementor-countdown-wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;margin-right:auto;margin-left:auto}.elementor-widget-countdown.elementor-countdown--label-block .elementor-countdown-digits,.elementor-widget-countdown.elementor-countdown--label-block .elementor-countdown-label{display:block}.elementor-widget-countdown.elementor-countdown--label-block .elementor-countdown-item{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1}.elementor-widget-countdown.elementor-countdown--label-inline{text-align:center}.elementor-widget-countdown.elementor-countdown--label-inline .elementor-countdown-item{display:inline-block;padding-left:5px;padding-right:5px}</style>		
<div class="elementor-countdown-wrapper" data-date="1672557900" id="clock-alert">
      
      
    </div>
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

    public function BuildingDelivered(){
        echo '
 <div id="del-countdown">
      <h1>تم بحمد الله تسليم المبني</h1>
    </div>
';
    }


}

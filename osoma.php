<?php
include_once('./_common.php');
define('_BRAND_',true);

$g5['title'] = '디지털 마케팅 오소마 패스';
include_once('./_head.php');

/*$end_date = date('2021-11-25');
$d_day = floor(( strtotime(substr($end_date,0,10)) - strtotime(date('Y-m-d')) )/86400);
if($d_day < 0)
	$d_day = '00';*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="osoma_final.css"> -->
    <style>
        *{
    padding: 0;
    margin: 0;
}

.sec_1_bg{
    background-color: black;
    width: 100vw;

}
.sec_2_bg{
    background-color: #b00120;
    width: 100vw;
}
.sec_3_bg{
  background-color: #03060c;
  width: 100vw;
}
.sec_4_bg{
  background-color: white;
  width: 100vw;
}
.sec_5_bg{
  background-color: white;
  width: 100vw;
}


.sec_1 > img:first-child{
  
  display: block;
  margin: 0 auto;
  width: 100vw; 
}


.sec_1 > img:last-child{
  display: none;   
}
.sec_2 > img{
    display: block;
    margin: 0 auto;
    width: 100vw;
}
.osoma_btn1{
  height: 6.2vw;
}
/* .osoma_btn1 > a img{
    display: block;
    margin: 0 auto;
    width: 13vw;
} */




.sec_4 > img{
    display: block;
    margin: 0 auto;
    width: 100vw;
}
.sec_5{
  position: relative;
}


.sec_6 > img{
  display: block;
  margin: 0 auto;
  width: 100vw;
}

/* .sec_5 > iframe{
  position: absolute;
  right: 26.2vw;
  bottom: 8.1vw;
} */


.facebook_1{
  width: 27.5vw;
  height: 15.5vw;
  position: absolute;
  bottom: 11.3vw;
  right: 21.8vw;
}
.facebook_2{
  width: 27.5vw;
  height: 15.5vw;
  position: absolute;
  bottom: 11.3vw;
  right: 51.9vw;
}
.search_ad{
  width: 27.5vw;
  height: 15.5vw;
  position: absolute;
  bottom: 59.17vw;
  right: 36.9vw;
}
.gtm_1{
  width: 27.5vw;
  height: 15.5vw;
  position: absolute;
  bottom: 35vw;
  right: 21.6vw;
}
.gtm_2{
  width: 27.5vw;
  height: 15.5vw;
  position: absolute;
  bottom: 35.1vw;
  right: 51.9vw;
}

iframe{
  width: 100%;
  height: 100%;
}
.sec_7 > img{
  display: block;
  margin: 0 auto;
  width: 100vw;
}

/* 타이머_카운트 */


.flip-clock *, .flip-clock *:before, .flip-clock *:after{
    box-sizing:border-box;
}


html { height: 100%; }
body { 
  min-height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background: #EEE;
}

.flip-clock {
  text-align: center;
  perspective: 400px;
  margin: 0 auto;
  padding-bottom: 3.3vw;
}


.flip-clock__piece {
  display: inline-block;
  margin: 0 5px;
}

.flip-clock__slot {
  font-size: 1vw;
}

.card {
  display: block;
  position: relative; 
  padding-bottom: 0.72em;
  font-size: 4vw;
  line-height: 0.95;
}

.card__top,
.card__bottom,
.card__back::before,
.card__back::after {
  display: block;
  height: 0.72em;
  color: #ccc;
  background: #222;
  padding: 0.25em 0.25em;
  border-radius: 0.15em 0.15em 0 0;
  
  transform-style: preserve-3d;
  width: 1.8em;
  transform: translateZ(0);
}

.card__bottom { 
  color: #FFF;
  position: absolute;
  top: 50%;
  left: 0;
  border-top: solid 1px #000;
  background: #393939; 
  border-radius: 0 0 0.15em 0.15em; 
  pointer-events: none;
  overflow: hidden;
}

.card__bottom::after {
  display: block;
  margin-top: -0.72em;
}

.card__back::before,
.card__bottom::after {
  content: attr(data-value);
}

.card__back {
  position: absolute;
  top: 0;
  height: 100%;
  left: 0%;
  pointer-events: none;
}

.card__back::before {
  position: relative;
  z-index: -1;
  overflow: hidden;
}

.flip .card__back::before {
  animation: flipTop 0.3s cubic-bezier(.37,.01,.94,.35);
  animation-fill-mode: both;
  transform-origin: center bottom;
}

.flip .card__back .card__bottom {
  transform-origin: center top;
  animation-fill-mode: both;
  animation: flipBottom 0.6s cubic-bezier(.15,.45,.28,1); 
}

@keyframes flipTop {
  0% {
    transform: rotateX(0deg);
    z-index: 2;
  }
  0%, 99% {
    opacity: 0.99;
  }
  100% {
    transform: rotateX(-90deg);
    opacity: 0;
  }
}

@keyframes flipBottom {
  0%, 50% {
    z-index: -1;
    transform: rotateX(90deg);
    opacity: 0;
  }
  51% {
    opacity: 0.99;
  }
  100% {
    opacity: 0.99;
    transform: rotateX(0deg);
    z-index: 5;
  }
}

.sec_3 > img{
    display: block;
    margin: 0 auto;
    width: 100vw;
}
.brand{
      width:100vw;
      margin-top: 0 !important;
    }

.sec_3 > img:first-child{
  
  display: block;
  margin: 0 auto;
  width: 100vw; 
}
.sec_3 > img:last-child{
  display: none;   
}

.sec_4 > img:last-child{
  display: none;   
}
.sec_4 > img:first-child{
  
  display: block;
  margin: 0 auto;
  width: 100vw; 
}



.sec_5_one{
    display: block;
    width: 100vw;
  }
  .sec_5_two{
    display: none;
    
  }

.sec_6 > img:last-child{
  display: none;   
}
.sec_6 > img:first-child{
  
  display: block;
  margin: 0 auto;
  width: 100vw; 
}

.sec_7 > img:last-child{
  display: none;   
}
.sec_7 > img:first-child{
  
  display: block;
  margin: 0 auto;
  width: 100vw; 
}
.mo_btn1{
    display: none;
  }

.m_osoma_btn2{
  display: none;
}
.pc_osoma_btn2{
  width: 20vw;
    display: block;
    margin: 0 auto;
    padding-bottom: 7vw;

}

.mo_osoma_btn3{
  display: none;
}
.pc_osoma_btn3{
  display: block;
    width: 30vw;
    margin: 0 auto;
}

.m_btn1{
    display: none;
    
}

.pc_btn1{
    display: block;
    width: 17vw;
    margin: 0 auto;
}

.m_btn1{
  display: none;
}

.sec_8 > img:first-child{
        display: block;
        margin: 0 auto;
        width: 100vw;
    }


.sec_8 > img:last-child{
        display: none;   
    }




@media (max-width:640px) {
    *{
        padding: 0;
        margin: 0;
    }
    

    .pc_btn1{
      display: none;
}

.m_btn1{
  
  display: block;
    width: 100vw;
    margin: 0 auto;
}



    .sec_1_bg{
        background-color: black;
        width: 100vw;
    
    }
    .sec_1 > img:first-child{
        display: none;
    }
    
    
    .sec_1 > img:last-child{
        display: block;
        margin: 0 auto;
        width: 100vw;    
    }
    .sec_3 > img:first-child{
        display: none;
    }
    
    
    .sec_3 > img:last-child{
        display: block;
        margin: 0 auto;
        width: 100vw;    
    }
    .sec_4 > img:first-child{
        display: none;
    }
    
    
    .sec_4 > img:last-child{
        display: block;
        margin: 0 auto;
        width: 100vw;    
    }
    .sec_2{
      display: none;
    }
    .card {
      display: block;
      position: relative; 
      padding-bottom: 0.72em;
      font-size: 9vw;
      line-height: 0.95;
    }
    .flip-clock__slot {
      font-size: 3vw;
  }





    .sec_6 > img:first-child{
        display: none;
    }


.sec_6 > img:last-child{
        display: block;
        margin: 0 auto;
        width: 100vw;    
    }


    .sec_7 > img:first-child{
        display: none;
    }


.sec_7 > img:last-child{
        display: block;
        margin: 0 auto;
        width: 100vw;    
    }


iframe{
  width: 100%;
  height: 100%;
}
.facebook_1 {
    width: 85.5vw;
    height: 51.5vw;
    bottom: -384.5vw;
    right: 7.8vw;
    position: absolute;
    z-index: 1;
  }

  .facebook_2 {
    width: 85.5vw;
    height: 51.5vw;
    bottom: -317.6vw;
    right: 7.8vw;
    position: absolute;
    z-index: 1;
  }
  .search_ad{
    width: 85.5vw;
    height: 51.5vw;
    bottom: -113.7vw;
    right: 7.8vw;
    position: absolute;
    z-index: 1;
  }
  .gtm_1{
    width: 85.5vw;
    height: 51.5vw;
    bottom: -249.3vw;
    right: 7.8vw;
    position: absolute;
    z-index: 1;
  }
  .gtm_2{
    width: 85.5vw;
    height: 51.5vw;
    bottom: -181.7vw;
    right: 7.8vw;
    position: absolute;
    z-index: 1;
  }
  .sec_5_one{
    display: none;
  }
  .sec_5_two{
    display: block;
    width: 100vw;
  }
  
  .osoma_btn1 {
    height: 11.2vw;
  }
.pc_osoma_btn2{
  display: none;
}
.m_osoma_btn2{
  width: 100vw;
  display: block;
}

.pc_osoma_btn3{
  display: none;
}
.mo_osoma_btn3 {
    display: block;
    width: 77vw;
    margin: 0 auto;
}


.sec_8 > img:first-child{
        display: none;
    }


.sec_8 > img:last-child{
        display: block;
        margin: 0 auto;
        width: 100vw;    
    }

  }

    </style>

</head>
<body>
    <div class="sec_1_bg">
        <div class="sec_1">
            <img src="/img/osoma_1.png" alt="">
            <img src="/img/m_osoma_1.png" alt="">
        </div>    
    </div>
    <div class="sec_2_bg">
        <div class="sec_2">
            <img src="/img/osoma_2.png" alt="">
        </div>
        <div class="time_count"></div>
    </div>
    <div class="sec_3_bg">
        <div class="sec_3">
            <img src="/img/osoma_3.png" alt="">
            <img src="/img/m_osoma_3.png" alt="">
        </div>
    </div>
    <div class="sec_3_bg">
        <div class="osoma_btn1">
            <a href="https://www.ma-stery.com/shop/item.php?it_id=1645769803" target="_blank"><img src="/img/osoma_btn1.png" alt="" class="pc_btn1"></a>
            <a href="https://www.ma-stery.com/shop/item.php?it_id=1645769803" target="_blank"><img src="/img/m_osoma_btn1.png" alt="" class="m_btn1"></a>
        </div>
    </div>
    <div class="sec_4">
        <img src="/img/osoma_4.png" alt="">
        <img src="/img/m_osoma_4.png" alt="">
    </div>
    <div class="sec_4_bg">
        <div class="osoma_btn2">
            <a href="https://osoma.kr/" target="_blank"><img src="/img/osoma_btn2.png" alt="" class="pc_osoma_btn2"></a>
        </div>
    </div>
    <div class="sec_5">
        <img src="/img/osoma_5.jpg" alt="" class="sec_5_one">
        <img src="/img/m_osoma_5.png" alt="" class="sec_5_two">
        <div class="facebook_1">
        <iframe src="https://www.youtube.com/embed/nOv_nVQdneg?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="facebook_2">
        <iframe src="https://www.youtube.com/embed/VPDVYxKrGoM?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="search_ad">
        <iframe src="https://www.youtube.com/embed/p4u2Ds9BpRw?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="gtm_1">
            <iframe src="https://www.youtube.com/embed/25HL9Q-Iszo?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="gtm_2">
            <iframe src="https://www.youtube.com/embed/PFX0G4IjxWc?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>    
    </div>
    <div class="ex_btn2">
        <a href="https://osoma.kr/" target="_blank"><img src="/img/m_osoma_btn2.png" alt="" class="m_osoma_btn2"></a>
    </div>
    <div class="sec_6">
        <img src="/img/osoma_6.png" alt="">
        <img src="/img/m_osoma_7.png" alt="">
    </div>
    <div class="sec_5_bg">
        <div class="osoma_btn3">
            <a href="https://www.ma-stery.com/shop/item.php?it_id=1645769803" target="_blank"><img src="/img/osoma_btn3.png" alt="" class="pc_osoma_btn3"></a>
            <a href="https://www.ma-stery.com/shop/item.php?it_id=1645769803" target="_blank"><img src="/img/m_osoma_btn3.png" alt="" class="mo_osoma_btn3"></a>
        </div>
    </div>
    <div class="sec_7">
        <img src="/img/osoma_7.png" alt="">
        <img src="/img/m_osoma_9.png" alt="">
    </div>
    <div class="sec_8">
        <img src="/img/osoma_8.png" alt="">
        <img src="/img/m_osoma_10.png" alt="">
    </div>


    <script>
    console.clear();


let time_count = document.querySelector(".time_count");
function CountdownTracker(label, value){

  var el = document.createElement('span');

  el.className = 'flip-clock__piece';
  el.innerHTML = '<b class="flip-clock__card card"><b class="card__top"></b><b class="card__bottom"></b><b class="card__back"><b class="card__bottom"></b></b></b>' + 
    '<span class="flip-clock__slot">' + label + '</span>';

  this.el = el;

  var top = el.querySelector('.card__top'),
      bottom = el.querySelector('.card__bottom'),
      back = el.querySelector('.card__back'),
      backBottom = el.querySelector('.card__back .card__bottom');

  this.update = function(val){
    val = ( '0' + val ).slice(-2);
    if ( val !== this.currentValue ) {
      
      if ( this.currentValue >= 0 ) {
        back.setAttribute('data-value', this.currentValue);
        bottom.setAttribute('data-value', this.currentValue);
      }
      this.currentValue = val;
      top.innerText = this.currentValue;
      backBottom.setAttribute('data-value', this.currentValue);

      this.el.classList.remove('flip');
      void this.el.offsetWidth;
      this.el.classList.add('flip');
    }
  }
  
  this.update(value);
}



function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  return {
    'Total': t,
    'Days': Math.floor(t / (1000 * 60 * 60 * 24)),
    'Hours': Math.floor(t % (1000 * 60 * 60 * 24) / (1000 * 60 * 60)),
    'Minutes': Math.floor((t / 1000 / 60) % 60),
    'Seconds': Math.floor((t / 1000) % 60)
    
  };
}

// function getTime() {
//   var t = new Date();
//   return {
//     'Total': t,
//     'Hours': t.getHours() % 12,
//     'Minutes': t.getMinutes(),
//     'Seconds': t.getSeconds()
//   };
// }

function Clock(countdown,callback) {
  
  countdown = countdown ? new Date(Date.parse(countdown)) : false;
  callback = callback || function(){};
  
  var updateFn = countdown ? getTimeRemaining : 0;

  this.el = document.createElement('div');
  this.el.className = 'flip-clock';

  var trackers = {},
      t = updateFn(countdown),
      key, 
      timeinterval;

  for ( key in t ){
    if ( key === 'Total' ) { continue; }
    trackers[key] = new CountdownTracker(key, t[key]);
    this.el.appendChild(trackers[key].el);
  }

  var i = 0;
  function updateClock() {
    timeinterval = requestAnimationFrame(updateClock);
    
    
    if ( i++ % 10 ) { return; }
    
    var t = updateFn(countdown);
    if ( t.Total < 0 ) {
      cancelAnimationFrame(timeinterval);
      for ( key in trackers ){
        trackers[key].update( 0 );
      }
      callback();
      return;
    }
    
    for ( key in trackers ){
      trackers[key].update( t[key] );
    }
  }

  setTimeout(updateClock,500);
}
var due_time ="04/25/2022 23:59:59";
//var tar = new Date(due_time);
var deadline = new Date(Date.parse(due_time));
var c = new Clock(deadline, function(){ alert('countdown complete') });
//document.body.appendChild(c.el);
time_count.appendChild(c.el);
//var clock = new Clock();
//document.body.appendChild(clock.el);

    </script>
</body>
</html>
<?php
include_once("./_tail.php");
?>
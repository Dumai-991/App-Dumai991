<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Okky Maheswara</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/spectrum.min.css">
  <style type="text/css">
    body {
      overflow: hidden;
      background: black;
      width: 100%;
      height: 100vh;
    }

    .bg {
      width: 100%;
      height: 100vh;
      position: absolute;
      z-index: -1;
    }

    .ubuntu {
      background: linear-gradient(to left, #8942A8, #BA382F);
      opacity: 0;
    }

    .dawn {
      background: linear-gradient(0deg, rgba(133, 26, 0, 1) 3%, rgba(255, 51, 0, 1) 19%, rgba(181, 103, 47, 1) 45%, rgba(52, 142, 200, 1) 100%);
      opacity: 0;
    }

    .morning {
      background: linear-gradient(0deg, rgba(255, 230, 113, 1) 0%, rgba(82, 167, 255, 1) 100%);
      opacity: 0;
    }

    .noon {
      background: linear-gradient(0deg, rgba(22, 183, 255, 1) 0%, rgba(14, 116, 223, 1) 58%, rgba(1, 7, 170, 1) 100%);
      opacity: 0;
    }

    .afternoon {
      background: linear-gradient(0deg, rgba(161, 133, 255, 1) 0%, rgba(0, 118, 226, 1) 61%, rgba(1, 81, 170, 1) 100%);
      opacity: 0;
    }

    .sunset {
      background: linear-gradient(0deg, rgba(195, 75, 42, 1) 0%, rgba(129, 29, 121, 1) 8%, rgba(89, 1, 170, 1) 29%, rgba(1, 5, 79, 1) 90%);
      opacity: 0;
    }

    .evening {
      background: linear-gradient(0deg, rgba(0, 7, 128, 1) 0%, rgba(0, 3, 54, 1) 100%);
      opacity: 0;
    }

    .midnight {
      background: linear-gradient(0deg, rgba(0, 3, 60, 1) 0%, rgba(0, 0, 0, 1) 100%);
      opacity: 0;
    }

    .red {
      background: linear-gradient(90deg, rgba(255, 0, 255, 1) 0%, rgba(255, 0, 0, 1) 50%, rgba(255, 255, 0, 1) 100%);
      opacity: 0;
    }

    .green {
      background: linear-gradient(90deg, rgba(255, 255, 0, 1) 0%, rgba(0, 255, 0, 1) 50%, rgba(0, 255, 255, 1) 100%);
      opacity: 0;
    }

    .blue {
      background: linear-gradient(90deg, rgba(0, 255, 255, 1) 0%, rgba(0, 0, 255, 1) 50%, rgba(255, 0, 255, 1) 100%);
      opacity: 0;
    }

    .custom {
      background-color: #0079FF;
      opacity: 0;
    }

    .jam,
    .ucapan,
    .quotes {
      margin: 0px;
      padding: 0px;
      position: absolute;
      color: #fff;
      transition: all 5s ease, color 1s ease;
    }

    .jam {
      opacity: 0;
      font-size: 100pt;
      left: 50%;
      bottom: 50%;
      transform: translate(-50%, calc(50% - 0px));
    }

    .ucapan {
      font-size: 25pt;
      left: 50%;
      bottom: 50%;
      text-align: center;
      transform: translate(-50%, calc(50% + 100px));
    }

    .quotes {
      left: 50%;
      bottom: 0;
      transform: translate(-50%, 0%);
      text-align: center;
      font-size: 15pt;
      text-shadow: 0px 0px 10px #000;
      z-index: 2;
    }

    .kontrol {
      margin: 20px;
      background: #fff;
      padding: 20px;
      position: absolute;
      width: 200px;
      border-radius: 10px;
      left: -220px;
      transition: all 1 ease;
      z-index: 99;
    }

    .panah {
      content: '';
      width: 10px;
      height: 10px;
      position: absolute;
      top: calc(50% - 5px);
      right: -30px;
      border: 2px solid rgba(255, 255, 255, 0.2);
      border-bottom: none;
      border-left: none;
      border-radius: 2px;
      border-top-left-radius: 3px;
      border-bottom-right-radius: 3px;
      transform: rotate(45deg);
      z-index: 50;
    }

    #color-picker {
      width: 100%;
    }

    .note {
      color: white;
      transition: all 2s ease;
      opacity: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 20pt;
      text-align: center;
      width: 100vh;
    }

    .kotak {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: -1;
    }

    .kotak li {
      position: absolute;
      display: block;
      list-style: none;
      width: 25px;
      height: 25px;
      background: rgba(255, 255, 255, 0.2);
      animation: animate 20s linear infinite;
      bottom: -150px;
      transition: all 1s ease;
    }

    .kotak li:nth-child(1) {
      left: 86%;
      width: 80px;
      height: 80px;
      animation-delay: 0s;
    }

    .kotak li:nth-child(2) {
      left: 12%;
      width: 30px;
      height: 30px;
      animation-delay: 1.5s;
      animation-duration: 10s;
    }

    .kotak li:nth-child(3) {
      left: 70%;
      width: 100px;
      height: 100px;
      animation-delay: 5.5s;
    }

    .kotak li:nth-child(4) {
      left: 42%;
      width: 150px;
      height: 150px;
      animation-delay: 0s;
      animation-duration: 15s;
    }

    .kotak li:nth-child(5) {
      left: 15%;
      width: 110px;
      height: 110px;
      animation-delay: 3.5s;
    }

    .bulat {
      position: absolute;
      width: 600px;
      height: 600px;
      display: flex;
      left: 50%;
      bottom: 50%;
      transform: translate(-50%, 50%) scale(0);
      transition: 3s all ease;
    }

    .bulat span:nth-child(1) {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 2px solid #fff;
      border-radius: 38% 62% 63% 37% / 41% 44% 56% 59%;
      transition: 0.5s;
      animation: animate2 6s linear infinite;
    }

    .bulat span:nth-child(2) {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 2px solid #fff;
      border-radius: 38% 62% 63% 37% / 41% 44% 56% 59%;
      transition: 0.5s;
      animation: animate3 4s linear infinite;
    }

    .bulat span:nth-child(3) {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 5px solid #fff;
      border-radius: 38% 62% 63% 37% / 41% 44% 56% 59%;
      transition: 0.5s;
      animation: animate2 10s linear infinite;
    }

    .pengembang {
      position: absolute;
      font-size: 10px;
      color: #FFFFFF;
      bottom: 0px;
      right: 0px;
      opacity: 0.3;
    }

    @keyframes animate {
      0% {
        transform: translateY(0) rotate(0deg);
        opacity: 1;
      }

      100% {
        transform: translateY(-100vh) rotate(360deg);
        opacity: 0;
      }
    }

    @keyframes animate2 {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    @keyframes animate3 {
      0% {
        transform: rotate(360deg);
      }

      100% {
        transform: rotate(0deg);
      }
    }

    @media only screen and (max-width: 900px),
    screen and (max-height: 700px) {

      .jam,
      .ucapan {
        transition: all 1s ease;
      }

      .jam {
        font-size: 50pt;
        transform: translate(-50%, calc(50% - 0px));
      }

      .ucapan {
        font-size: 15pt;
        transform: translate(-50%, calc(50% + 50px));
      }

      .quotes,
      .note {
        font-size: 15pt;
      }

      .bulat {
        width: 300px;
        height: 300px;
      }
    }

    @media only screen and (max-width: 500px) {
      .ucapan {
        font-size: 10pt;
      }

      .quotes {
        font-size: 7pt;
      }

      .note {
        font-size: 10pt;
      }
    }
  </style>
</head>

<body onload="init()">
  <div class="kontrol" onload="readStorage()" style="left: 0px;">
    <div class="panah" style="transform: rotate(225deg);"></div>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="customRadio0" name="example1" checked="">
      <label class="custom-control-label" for="customRadio0">Sesuai Waktu</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="customRadio1" name="example1">
      <label class="custom-control-label" for="customRadio1">Ubuntu Style</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="customRadio10" name="example1">
      <label class="custom-control-label" for="customRadio10">Manual Input</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="customRadio2" name="example1">
      <label class="custom-control-label" for="customRadio2">Dawn</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="customRadio3" name="example1">
      <label class="custom-control-label" for="customRadio3">Morning</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="customRadio4" name="example1">
      <label class="custom-control-label" for="customRadio4">Noon</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="customRadio5" name="example1">
      <label class="custom-control-label" for="customRadio5">Afternoon</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="customRadio6" name="example1">
      <label class="custom-control-label" for="customRadio6">Sunset</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="customRadio7" name="example1">
      <label class="custom-control-label" for="customRadio7">Evening</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="customRadio8" name="example1">
      <label class="custom-control-label" for="customRadio8">Midnight</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="customRadio9" name="example1">
      <label class="custom-control-label" for="customRadio9">RGB Gaming</label>
    </div>
    <span class="sp-original-input-container sp-colorize-container" style="margin: 16px 0px 0px;"><input class="btn mt-3 spectrum sp-colorize" id="color-picker" value="#0079FF" onclick="onClickWarna()" style="background-color: rgb(0, 121, 255); color: white;"></span>
  </div>
  <div class="bg ubuntu" style="opacity: 0;"></div>
  <div class="bg dawn" style="opacity: 0;"></div>
  <div class="bg morning" style="opacity: 0;"></div>
  <div class="bg noon" style="opacity: 0;"></div>
  <div class="bg afternoon" style="opacity: 0;"></div>
  <div class="bg sunset" style="opacity: 0;"></div>
  <div class="bg evening" style="opacity: 0;"></div>
  <div class="bg midnight" style="opacity: 0;"></div>
  <div class="bg red" style="opacity: 0;"></div>
  <div class="bg green" style="opacity: 0;"></div>
  <div class="bg blue" style="opacity: 0;"></div>
  <div class="bg custom" style="opacity: 1;"></div>
  <div class="container">
    <div class="quotes" style="color: rgb(255, 255, 255); text-shadow: rgb(0, 0, 0) 0px 0px 10px;">
      <p id="quotation">"Cinta membutuhkan seseorang. Cinta akan memadukan kelebihan dan kekurangan seseorang. Karena
        cinta diciptakan untuk saling melengkapi."</p>
      <p id="source">Arliansyah</p>
    </div>
    <ul class="kotak">
      <li style="background: rgb(255, 255, 255);"></li>
      <li style="background: rgb(255, 255, 255);"></li>
      <li style="background: rgb(255, 255, 255);"></li>
      <li style="background: rgb(255, 255, 255);"></li>
      <li style="background: rgb(255, 255, 255);"></li>
    </ul>
    <div class="bulat" style="transform: translate(-50%, 50%) scale(1); opacity: 1;">
      <span style="border-color: rgb(255, 255, 255); background: unset;"></span>
      <span style="border-color: rgb(255, 255, 255); background: unset;"></span>
      <span style="border-color: rgb(255, 255, 255); background: unset;"></span>
    </div>
    <div class="jam" id="time" style="opacity: 2; color: rgb(255, 255, 255);"></div>
    <div class="ucapan" id="quote" style="color: rgb(255, 255, 255);"></div>
    <div class="note"></div>
    <div class="pengembang">Arliansyah</div>
  </div>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/spectrum.min.js"></script>
  <script src="assets/js/baffle.min.js"></script>
  <script type="text/javascript">
    gaming = false;
    tombol = false;

    function init() {
      bro();
      init_auto();
      readMode();
      readColor();
      randomQuote();
      specialEffects();
    }
    baffleEffect = baffle('.note', {
      characters: 'supercalifragilisticexpialidocious',
      speed: 150
    });

    function readMode() {
      if (localStorage.getItem("mode") != null) {

      }
      switch (localStorage.getItem("mode")) {
        case 'ubuntu':
          $('.kontrol input').prop('checked', false);
          $("#customRadio1").prop('checked', true);
          ubuntu();
          break;
        case 'dawn':
          $('.kontrol input').prop('checked', false);
          $("#customRadio2").prop('checked', true);
          dawn();
          break;
        case 'morning':
          $('.kontrol input').prop('checked', false);
          $("#customRadio3").prop('checked', true);
          morning();
          break;
        case 'noon':
          $('.kontrol input').prop('checked', false);
          $("#customRadio4").prop('checked', true);
          noon();
          break;
        case 'afternoon':
          $('.kontrol input').prop('checked', false);
          $("#customRadio5").prop('checked', true);
          afternoon();
          break;
        case 'sunset':
          $('.kontrol input').prop('checked', false);
          $("#customRadio6").prop('checked', true);
          sunset();
          break;
        case 'evening':
          $('.kontrol input').prop('checked', false);
          $("#customRadio7").prop('checked', true);
          evening();
          break;
        case 'midnight':
          $('.kontrol input').prop('checked', false);
          $("#customRadio8").prop('checked', true);
          midnight();
          break;
        case 'manual':
          $('.kontrol input').prop('checked', false);
          $("#customRadio10").prop('checked', true);
          manual();
          break;
        case 'gaming1':
          $('.kontrol input').prop('checked', false);
          $("#customRadio9").prop('checked', true);
          gaming1();
          gaming = true;
          break;
        default:

      }
    }

    function readColor() {
      if (localStorage.getItem("manualColor") == null) {} else {
        var color = $(".custom");
        (color).css('background', localStorage.getItem("manualColor"));
        $('#color-picker').val(localStorage.getItem("manualColor"));
      }
      colorpicker = $('#color-picker').spectrum({
        type: "text",
        showInput: "true",
        showAlpha: "false",
        showButtons: "false"
      });
      colorpicker.on('move.spectrum', function(e, tinycolor) {
        var hexVal = tinycolor.toHexString();
        var color = $(".custom");
        color.css('background', hexVal);
        console.log(hexVal);
        localStorage.setItem("manualColor", hexVal);
      });
    }

    function onClickWarna() {
      localStorage.setItem("mode", "manual");
      nofill();
      $('.kontrol input').prop('checked', false);
      $("#customRadio10").prop('checked', true);
      gaming = false;
      manual();
    }

    function bro() {
      namaku = $(".pengembang").text();
      var hex, i;

      var result = "";
      for (i = 0; i < namaku.length; i++) {
        hex = namaku.charCodeAt(i).toString(16);
        result += ("000" + hex).slice(-4);
      }
      if (result != "00410072006c00690061006e0073007900610068") {
        $('body').fadeOut();
      }
    }

    function specialEffects() {
      if (localStorage.getItem("manualColor") == "#4c1130") {
        setTimeout(function() {
          createNote("Kamu lagi ngapain sayang?");
        }, 5000);
      } else if (localStorage.getItem("manualColor") == "#000000") {
        setTimeout(function() {
          createNote("Aku selalu disini buat kamu kok");
        }, 5000);
      }
    }

    function createNote(isi) {
      $(".jam").css("font-size", "30pt").css("bottom", "calc( 50% - 50px )");
      $(".ucapan").css("opacity", "0");
      $(".quotes").css("opacity", "0");
      $(".quotes").css("opacity", "0");
      $(".bulat").css("opacity", "0");
      $(".kotak li").css("opacity", "0");
      setTimeout(function() {
        writeNote(isi);
      }, 3000);
    }

    function writeNote(isi) {
      $(".note").text(isi).css("opacity", "1");

      baffle('.note')
        .reveal(2000)
        .start()
        .set({
          characters: '░░█ /<▒▓▒ ▒░▒█/ █/▒ ▒▓/█▒ ▓▒░▓ ██░ ▒░▓░ ▒░▓█',
          speed: 150
        });
      localStorage.setItem("manualColor", "#0079FF");
    }
    $(".panah").click(function() {
      if (tombol == false) {
        $(".panah").css("transform", "rotate(225deg)");
        $(".kontrol").animate({
          left: "0px"
        });
        tombol = true;
      } else if (tombol == true) {
        $(".panah").css("transform", "rotate(45deg)");
        $(".kontrol").animate({
          left: "-220px"
        });
        tombol = false;
      }
    });
    auto = true;
    cek = false;
    $(".kontrol").click(function() {
      gaming = false;
      if ($("#customRadio0").prop('checked')) {
        if (!cek) {
          init_auto();
        }
        auto = true;
        localStorage.setItem("mode", "auto");
        cek = true;
      } else {
        auto = false;
        cek = false;
      }
      if ($("#customRadio1").prop('checked')) {
        ubuntu();
        localStorage.setItem("mode", "ubuntu");
      } else if ($("#customRadio2").prop('checked')) {
        dawn();
        localStorage.setItem("mode", "dawn");
      } else if ($("#customRadio3").prop('checked')) {
        morning();
        localStorage.setItem("mode", "morning");
      } else if ($("#customRadio4").prop('checked')) {
        noon();
        localStorage.setItem("mode", "noon");
      } else if ($("#customRadio5").prop('checked')) {
        afternoon();
        localStorage.setItem("mode", "afternoon");
      } else if ($("#customRadio6").prop('checked')) {
        sunset();
        localStorage.setItem("mode", "sunset");
      } else if ($("#customRadio7").prop('checked')) {
        evening();
        localStorage.setItem("mode", "evening");
      } else if ($("#customRadio8").prop('checked')) {
        midnight();
        localStorage.setItem("mode", "midnight");
      } else if ($("#customRadio10").prop('checked')) {
        manual();
        localStorage.setItem("mode", "manual");
      } else if ($("#customRadio9").prop('checked')) {
        gaming1();
        localStorage.setItem("mode", "gaming1");
        gaming = true;
      }
      if (gaming == false) {
        nofill();
      }
    });

    function ubuntu() {
      $(".ubuntu").animate({
        opacity: "1"
      }, 1000);
      $(".dawn").animate({
        opacity: "0"
      }, 500);
      $(".morning").animate({
        opacity: "0"
      }, 500);
      $(".noon").animate({
        opacity: "0"
      }, 500);
      $(".afternoon").animate({
        opacity: "0"
      }, 500);
      $(".sunset").animate({
        opacity: "0"
      }, 500);
      $(".evening").animate({
        opacity: "0"
      }, 500);
      $(".midnight").animate({
        opacity: "0"
      }, 500);
      $(".red").animate({
        opacity: "0"
      }, 500);
      $(".green").animate({
        opacity: "0"
      }, 500);
      $(".blue").animate({
        opacity: "0"
      }, 500);
      $(".custom").animate({
        opacity: "0"
      }, 500);
      white();
    }

    function dawn() {
      $(".dawn").animate({
        opacity: "1"
      }, 1000);
      $(".ubuntu").animate({
        opacity: "0"
      }, 500);
      $(".morning").animate({
        opacity: "0"
      }, 500);
      $(".noon").animate({
        opacity: "0"
      }, 500);
      $(".afternoon").animate({
        opacity: "0"
      }, 500);
      $(".sunset").animate({
        opacity: "0"
      }, 500);
      $(".evening").animate({
        opacity: "0"
      }, 500);
      $(".midnight").animate({
        opacity: "0"
      }, 500);
      $(".red").animate({
        opacity: "0"
      }, 500);
      $(".green").animate({
        opacity: "0"
      }, 500);
      $(".blue").animate({
        opacity: "0"
      }, 500);
      $(".custom").animate({
        opacity: "0"
      }, 500);
      black();
    }

    function morning() {
      $(".morning").animate({
        opacity: "1"
      }, 1000);
      $(".dawn").animate({
        opacity: "0"
      }, 500);
      $(".ubuntu").animate({
        opacity: "0"
      }, 500);
      $(".noon").animate({
        opacity: "0"
      }, 500);
      $(".afternoon").animate({
        opacity: "0"
      }, 500);
      $(".sunset").animate({
        opacity: "0"
      }, 500);
      $(".evening").animate({
        opacity: "0"
      }, 500);
      $(".midnight").animate({
        opacity: "0"
      }, 500);
      $(".red").animate({
        opacity: "0"
      }, 500);
      $(".green").animate({
        opacity: "0"
      }, 500);
      $(".blue").animate({
        opacity: "0"
      }, 500);
      $(".custom").animate({
        opacity: "0"
      }, 500);
      black();
    }

    function noon() {
      $(".noon").animate({
        opacity: "1"
      }, 1000);
      $(".dawn").animate({
        opacity: "0"
      }, 500);
      $(".ubuntu").animate({
        opacity: "0"
      }, 500);
      $(".morning").animate({
        opacity: "0"
      }, 500);
      $(".afternoon").animate({
        opacity: "0"
      }, 500);
      $(".sunset").animate({
        opacity: "0"
      }, 500);
      $(".evening").animate({
        opacity: "0"
      }, 500);
      $(".midnight").animate({
        opacity: "0"
      }, 500);
      $(".red").animate({
        opacity: "0"
      }, 500);
      $(".green").animate({
        opacity: "0"
      }, 500);
      $(".blue").animate({
        opacity: "0"
      }, 500);
      $(".custom").animate({
        opacity: "0"
      }, 500);
      black();
    }

    function afternoon() {
      $(".afternoon").animate({
        opacity: "1"
      }, 1000);
      $(".dawn").animate({
        opacity: "0"
      }, 500);
      $(".ubuntu").animate({
        opacity: "0"
      }, 500);
      $(".morning").animate({
        opacity: "0"
      }, 500);
      $(".noon").animate({
        opacity: "0"
      }, 500);
      $(".sunset").animate({
        opacity: "0"
      }, 500);
      $(".evening").animate({
        opacity: "0"
      }, 500);
      $(".midnight").animate({
        opacity: "0"
      }, 500);
      $(".red").animate({
        opacity: "0"
      }, 500);
      $(".green").animate({
        opacity: "0"
      }, 500);
      $(".blue").animate({
        opacity: "0"
      }, 500);
      $(".custom").animate({
        opacity: "0"
      }, 500);
      black();
    }

    function sunset() {
      $(".sunset").animate({
        opacity: "1"
      }, 1000);
      $(".dawn").animate({
        opacity: "0"
      }, 500);
      $(".ubuntu").animate({
        opacity: "0"
      }, 500);
      $(".morning").animate({
        opacity: "0"
      }, 500);
      $(".noon").animate({
        opacity: "0"
      }, 500);
      $(".afternoon").animate({
        opacity: "0"
      }, 500);
      $(".evening").animate({
        opacity: "0"
      }, 500);
      $(".midnight").animate({
        opacity: "0"
      }, 500);
      $(".red").animate({
        opacity: "0"
      }, 500);
      $(".green").animate({
        opacity: "0"
      }, 500);
      $(".blue").animate({
        opacity: "0"
      }, 500);
      $(".custom").animate({
        opacity: "0"
      }, 500);
      white();
    }

    function evening() {
      $(".evening").animate({
        opacity: "1"
      }, 1000);
      $(".dawn").animate({
        opacity: "0"
      }, 500);
      $(".ubuntu").animate({
        opacity: "0"
      }, 500);
      $(".morning").animate({
        opacity: "0"
      }, 500);
      $(".noon").animate({
        opacity: "0"
      }, 500);
      $(".afternoon").animate({
        opacity: "0"
      }, 500);
      $(".sunset").animate({
        opacity: "0"
      }, 500);
      $(".midnight").animate({
        opacity: "0"
      }, 500);
      $(".red").animate({
        opacity: "0"
      }, 500);
      $(".green").animate({
        opacity: "0"
      }, 500);
      $(".blue").animate({
        opacity: "0"
      }, 500);
      $(".custom").animate({
        opacity: "0"
      }, 500);
      white();
    }

    function midnight() {
      $(".midnight").animate({
        opacity: "1"
      }, 1000);
      $(".dawn").animate({
        opacity: "0"
      }, 500);
      $(".ubuntu").animate({
        opacity: "0"
      }, 500);
      $(".morning").animate({
        opacity: "0"
      }, 500);
      $(".noon").animate({
        opacity: "0"
      }, 500);
      $(".afternoon").animate({
        opacity: "0"
      }, 500);
      $(".sunset").animate({
        opacity: "0"
      }, 500);
      $(".evening").animate({
        opacity: "0"
      }, 500);
      $(".red").animate({
        opacity: "0"
      }, 500);
      $(".green").animate({
        opacity: "0"
      }, 500);
      $(".blue").animate({
        opacity: "0"
      }, 500);
      $(".custom").animate({
        opacity: "0"
      }, 500);
      white();
    }

    function red() {
      $(".jam").css("color", "#F00");
      $(".ucapan").css("color", "#F00");
      $(".bulat span").css("border-color", "#F00");
      $(".kotak li").css("background", "#000");
      $(".red").animate({
        opacity: "1"
      }, 1000);
      $(".midnight").animate({
        opacity: "0"
      }, 500);
      $(".dawn").animate({
        opacity: "0"
      }, 500);
      $(".ubuntu").animate({
        opacity: "0"
      }, 500);
      $(".morning").animate({
        opacity: "0"
      }, 500);
      $(".noon").animate({
        opacity: "0"
      }, 500);
      $(".afternoon").animate({
        opacity: "0"
      }, 500);
      $(".sunset").animate({
        opacity: "0"
      }, 500);
      $(".evening").animate({
        opacity: "0"
      }, 500);
      $(".green").animate({
        opacity: "0"
      }, 500);
      $(".blue").animate({
        opacity: "0"
      }, 500);
      $(".custom").animate({
        opacity: "0"
      }, 500);
      white();
    }

    function green() {
      $(".jam").css("color", "#0F0");
      $(".ucapan").css("color", "#0F0");
      $(".bulat span").css("border-color", "#0F0");
      $(".kotak li").css("background", "#000");
      $(".green").animate({
        opacity: "1"
      }, 1000);
      $(".midnight").animate({
        opacity: "0"
      }, 500);
      $(".dawn").animate({
        opacity: "0"
      }, 500);
      $(".ubuntu").animate({
        opacity: "0"
      }, 500);
      $(".morning").animate({
        opacity: "0"
      }, 500);
      $(".noon").animate({
        opacity: "0"
      }, 500);
      $(".afternoon").animate({
        opacity: "0"
      }, 500);
      $(".sunset").animate({
        opacity: "0"
      }, 500);
      $(".evening").animate({
        opacity: "0"
      }, 500);
      $(".red").animate({
        opacity: "0"
      }, 500);
      $(".blue").animate({
        opacity: "0"
      }, 500);
      $(".custom").animate({
        opacity: "0"
      }, 500);
      white();
    }

    function blue() {
      $(".jam").css("color", "#00F");
      $(".ucapan").css("color", "#00F");
      $(".bulat span").css("border-color", "#00F");
      $(".kotak li").css("background", "#000");
      $(".blue").animate({
        opacity: "1"
      }, 1000);
      $(".midnight").animate({
        opacity: "0"
      }, 500);
      $(".dawn").animate({
        opacity: "0"
      }, 500);
      $(".ubuntu").animate({
        opacity: "0"
      }, 500);
      $(".morning").animate({
        opacity: "0"
      }, 500);
      $(".noon").animate({
        opacity: "0"
      }, 500);
      $(".afternoon").animate({
        opacity: "0"
      }, 500);
      $(".sunset").animate({
        opacity: "0"
      }, 500);
      $(".evening").animate({
        opacity: "0"
      }, 500);
      $(".red").animate({
        opacity: "0"
      }, 500);
      $(".green").animate({
        opacity: "0"
      }, 500);
      $(".custom").animate({
        opacity: "0"
      }, 500);
      white();
    }

    function manual() {
      $(".custom").animate({
        opacity: "1"
      }, 1000);
      $(".midnight").animate({
        opacity: "0"
      }, 500);
      $(".dawn").animate({
        opacity: "0"
      }, 500);
      $(".ubuntu").animate({
        opacity: "0"
      }, 500);
      $(".morning").animate({
        opacity: "0"
      }, 500);
      $(".noon").animate({
        opacity: "0"
      }, 500);
      $(".afternoon").animate({
        opacity: "0"
      }, 500);
      $(".sunset").animate({
        opacity: "0"
      }, 500);
      $(".evening").animate({
        opacity: "0"
      }, 500);
      $(".red").animate({
        opacity: "0"
      }, 500);
      $(".green").animate({
        opacity: "0"
      }, 500);
      $(".blue").animate({
        opacity: "0"
      }, 500);
      white();
    }
    warna = 1;

    function gaming1() {
      if (gaming) {
        fillblack();
        if (warna == 1) {
          red();
        } else if (warna == 2) {
          green();
        } else if (warna == 3) {
          blue();
        }
        warna += 1;
        if (warna == 4) {
          warna = 1;
        }
      }
    }
    setInterval(gaming1, 4000);

    function black() {
      $(".jam").css("color", "#000");
      $(".ucapan").css("color", "#000");
      $(".quotes").css("color", "#000");
      $(".quotes").css("text-shadow", "0px 0px 10px #FFF");
      $(".bulat span").css("border-color", "#000");
      $(".kotak li").css("background", "#000");
    }

    function fillblack() {
      $(".bulat span").css("background", "#000");
    }

    function nofill() {
      $(".bulat span").css("background", "unset");
    }

    function white() {
      $(".jam").css("color", "#FFF");
      $(".ucapan").css("color", "#FFF");
      $(".quotes").css("color", "#FFF");
      $(".quotes").css("text-shadow", "0px 0px 10px #000");
      $(".bulat span").css("border-color", "#FFF");
      $(".kotak li").css("background", "#FFF");
    }

    function debug() {
      console.log('debug');
    }

    var txt = 'Halo Iza Sayangg';
    var txt2 = 'txt';

    function checkTime(i) {
      if (i < 10) {
        i = "0" + i;
      }
      return i;
    }
    var H;
    var M;
    var S;
    var starting = true;

    function startTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();

      H = h;
      M = m;
      S = s;

      if (H < 5) {
        txt = 'TIDUR! KOK MASIH MAIN HP?';
        if (txt != txt2 && !starting)
          document.getElementById("quote").innerHTML = txt;
        txt2 = txt;
      } else if (H < 9) {
        txt = 'Selamat Pagi, Jangan Lupa Sarapan Sayangg';
        if (txt != txt2 && !starting)
          document.getElementById("quote").innerHTML = txt;
        txt2 = txt;
      } else if (H < 12) {
        txt = 'Selamat Siang, Jangan Lupa Mandi, Biar Gabau :P';
        if (txt != txt2 && !starting)
          document.getElementById("quote").innerHTML = txt;
        txt2 = txt;
      } else if (H < 15) {
        txt = 'Siang Sayangkuuu, Udah Makan kamu?';
        if (txt != txt2 && !starting)
          document.getElementById("quote").innerHTML = txt;
        txt2 = txt;
      } else if (H < 18) {
        txt = 'Udah Sandikala, Jangan Kemana2 Sayang :*';
        if (txt != txt2 && !starting)
          document.getElementById("quote").innerHTML = txt;
        txt2 = txt;
      } else if (H < 21) {
        txt = 'Selamat Malam Sayang, Aku Cinta Kamu :*';
        if (txt != txt2 && !starting)
          document.getElementById("quote").innerHTML = txt;
        txt2 = txt;
      } else if (H <= 24) {
        txt = 'Tidur Ya Sayang, Off Biar Hemat Paketnyaa :*';
        if (txt != txt2 && !starting)
          document.getElementById("quote").innerHTML = txt;
        txt2 = txt;
      }
      starting = false;

      if (auto && m == 0 && s == 0) {
        if ((h > 23) || (h < 4)) {
          midnight();
        } else if (h < 6) {
          dawn();
        } else if (h < 9) {
          morning();
        } else if (h < 17) {
          noon();
        } else if (h < 18) {
          afternoon();
        } else if (h < 19) {
          sunset();
        } else if (h < 23) {
          evening();
        }
      }

      // add a zero in front of numbers<10
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
      t = setTimeout(function() {
        startTime()
      }, 500);
    }
    startTime();

    function init_auto() {
      if ((H > 23) || (H < 4)) {
        midnight();
      } else if (H < 6) {
        dawn();
      } else if (H < 9) {
        morning();
      } else if (H < 17) {
        noon();
      } else if (H < 18) {
        afternoon();
      } else if (H < 19) {
        sunset();
      } else if (H < 23) {
        evening();
      } else {
        midnight();
      }
    }

    const quotes = [{
        "quote": "Bila kau tak tahan lelahnya belajar, maka kau harus tahan menanggung perihnya kebodohan",
        "source": "Imam Syafi'i"
      },
      {
        "quote": "Ketika kekuatan cinta melebihi cinta terhadap kekuasaan dunia, maka di sana tercipta kedamaian.",
        "source": "Arliansyah"
      },
      {
        "quote": "Kegelapan tidak bisa mengusir kegelapan; hanya cahaya dapat melakukan itu. Kebencian tidak dapat mengusir kebencian; hanya cinta bisa melakukan itu.",
        "source": "Arliansyah"
      },
      {
        "quote": "Jika engkau bingung menentukan pilihan di antara dua cintamu, maka pilihlah yang ke dua. Karena bila engkau memiliki cinta sejati untuk yang pertama, engkau tak mungkin jatuh cinta lagi untuk kedua kalinya.",
        "source": "Arliansyah"
      },
      {
        "quote": "Tanpa jalinan komunikasi, takkan ada persahabatan. Tanpa kepedulian, takkan ada jalinan cinta. Dan tanpa kepercayaan, tak ada alasan untuk dilanjutkan.",
        "source": "Arliansyah"
      },
      {
        "quote": "Cinta adalah kondisi dimana kebahagiaan orang lain adalah hal yang penting untuk anda sendiri",
        "source": "Arliansyah"
      },
      {
        "quote": "Masa lalu dan frustasi merupakan fondasi dasar untuk menciptakan kembali kehidupan baru yang lebih baik",
        "source": "Anthony Robbins"
      },
      {
        "quote": "Cinta membutuhkan seseorang. Cinta akan memadukan kelebihan dan kekurangan seseorang. Karena cinta diciptakan untuk saling melengkapi.",
        "source": "Arliansyah"
      },
      {
        "quote": "Manusia tidak ingin mengakhiri hidupnya, mereka hanya ingin mengakhiri masalahnya",
        "source": "Arliansyah"
      },
      {
        "quote": "Ketika kita mencintai, kita akan selalu berusaha untuk menjadi sosok yang lebih baik. Ketika kita berusaha untuk menjadi lebih baik, maka segala sesuatu di sekitar kita akan menjadi lebih baik juga.",
        "source": "Arliansyah"
      },
      {
        "quote": "Seorang bahagia bukan karena semua benar dalam hidupnya, tapi sikap terhadap hidupnya yang benar",
        "source": "Sundar Pichai"
      },
      {
        "quote": "Tindakan menyalahkan hanya akan membuang waktu. Sebesar apapun kesalahan yang Anda timpakan ke orang lain, dan sebesar apapun Anda menyalahkannya, hal tersebut tidak akan mengubah Anda",
        "source": "Wayne Dyer"
      },
    ]
    setInterval(randomQuote, 60000);

    function randomQuote() {
      let random = quotes[Math.floor(Math.random() * quotes.length)];
      quotation.innerText = `"${random.quote}"`;
      source.innerText = random.source;
    }

    var i = 0;

    var speed = 50;

    function typeWriter() {
      if (i < txt.length) {
        var o = (i / txt.length * 2);
        var o = o.toFixed(0);
        var o2 = o - 1;
        if (o2 < 0)
          o2 = 0;
        var o3 = String(o);
        var p = "translate(-50%,50%) scale(" + o2 + ")";
        document.getElementById("quote").innerHTML += txt.charAt(i);
        i++;
        $(".jam").css("opacity", o3);
        $(".bulat").css("transform", p).css("opacity", o2);
        setTimeout(typeWriter, speed);
      }
    }
    typeWriter();
  </script>


  <div class="sp-container sp-light sp-alpha-enabled sp-clear-enabled sp-palette-buttons-disabled sp-initial-disabled sp-hidden" style="position: absolute; top: 358px; left: 40px;">
    <div class="sp-palette-container">
      <div class="sp-palette sp-thumb sp-cf">
        <div class="sp-cf sp-palette-row sp-palette-row-0"><span title="black" data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span><span title="#444444" data-color="rgb(68, 68, 68)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(68, 68, 68);"></span></span><span title="#5b5b5b" data-color="rgb(91, 91, 91)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(91, 91, 91);"></span></span><span title="#999999" data-color="rgb(153, 153, 153)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(153, 153, 153);"></span></span><span title="#bcbcbc" data-color="rgb(188, 188, 188)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(188, 188, 188);"></span></span><span title="#eeeeee" data-color="rgb(238, 238, 238)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(238, 238, 238);"></span></span><span title="#f3f6f4" data-color="rgb(243, 246, 244)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(243, 246, 244);"></span></span><span title="white" data-color="rgb(255, 255, 255)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(255, 255, 255);"></span></span></div>
        <div class="sp-cf sp-palette-row sp-palette-row-1"><span title="#f44336" data-color="rgb(244, 67, 54)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(244, 67, 54);"></span></span><span title="#744700" data-color="rgb(116, 71, 0)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(116, 71, 0);"></span></span><span title="#ce7e00" data-color="rgb(206, 126, 0)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(206, 126, 0);"></span></span><span title="#8fce00" data-color="rgb(143, 206, 0)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(143, 206, 0);"></span></span><span title="#2986cc" data-color="rgb(41, 134, 204)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(41, 134, 204);"></span></span><span title="#16537e" data-color="rgb(22, 83, 126)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(22, 83, 126);"></span></span><span title="#6a329f" data-color="rgb(106, 50, 159)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(106, 50, 159);"></span></span><span title="#c90076" data-color="rgb(201, 0, 118)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(201, 0, 118);"></span></span></div>
        <div class="sp-cf sp-palette-row sp-palette-row-2"><span title="#f4cccc" data-color="rgb(244, 204, 204)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(244, 204, 204);"></span></span><span title="#fce5cd" data-color="rgb(252, 229, 205)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(252, 229, 205);"></span></span><span title="#fff2cc" data-color="rgb(255, 242, 204)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(255, 242, 204);"></span></span><span title="#d9ead3" data-color="rgb(217, 234, 211)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(217, 234, 211);"></span></span><span title="#d0e0e3" data-color="rgb(208, 224, 227)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(208, 224, 227);"></span></span><span title="#cfe2f3" data-color="rgb(207, 226, 243)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(207, 226, 243);"></span></span><span title="#d9d2e9" data-color="rgb(217, 210, 233)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(217, 210, 233);"></span></span><span title="#ead1dc" data-color="rgb(234, 209, 220)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(234, 209, 220);"></span></span></div>
        <div class="sp-cf sp-palette-row sp-palette-row-3"><span title="#ea9999" data-color="rgb(234, 153, 153)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(234, 153, 153);"></span></span><span title="#f9cb9c" data-color="rgb(249, 203, 156)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(249, 203, 156);"></span></span><span title="#ffe599" data-color="rgb(255, 229, 153)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(255, 229, 153);"></span></span><span title="#b6d7a8" data-color="rgb(182, 215, 168)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(182, 215, 168);"></span></span><span title="#a2c4c9" data-color="rgb(162, 196, 201)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(162, 196, 201);"></span></span><span title="#9fc5e8" data-color="rgb(159, 197, 232)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(159, 197, 232);"></span></span><span title="#b4a7d6" data-color="rgb(180, 167, 214)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(180, 167, 214);"></span></span><span title="#d5a6bd" data-color="rgb(213, 166, 189)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(213, 166, 189);"></span></span></div>
        <div class="sp-cf sp-palette-row sp-palette-row-4"><span title="#e06666" data-color="rgb(224, 102, 102)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(224, 102, 102);"></span></span><span title="#f6b26b" data-color="rgb(246, 178, 107)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(246, 178, 107);"></span></span><span title="#ffd966" data-color="rgb(255, 217, 102)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(255, 217, 102);"></span></span><span title="#93c47d" data-color="rgb(147, 196, 125)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(147, 196, 125);"></span></span><span title="#76a5af" data-color="rgb(118, 165, 175)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(118, 165, 175);"></span></span><span title="#6fa8dc" data-color="rgb(111, 168, 220)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(111, 168, 220);"></span></span><span title="#8e7cc3" data-color="rgb(142, 124, 195)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(142, 124, 195);"></span></span><span title="#c27ba0" data-color="rgb(194, 123, 160)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(194, 123, 160);"></span></span></div>
        <div class="sp-cf sp-palette-row sp-palette-row-5"><span title="#cc0000" data-color="rgb(204, 0, 0)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(204, 0, 0);"></span></span><span title="#e69138" data-color="rgb(230, 145, 56)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(230, 145, 56);"></span></span><span title="#f1c232" data-color="rgb(241, 194, 50)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(241, 194, 50);"></span></span><span title="#6aa84f" data-color="rgb(106, 168, 79)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(106, 168, 79);"></span></span><span title="#45818e" data-color="rgb(69, 129, 142)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(69, 129, 142);"></span></span><span title="#3d85c6" data-color="rgb(61, 133, 198)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(61, 133, 198);"></span></span><span title="#674ea7" data-color="rgb(103, 78, 167)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(103, 78, 167);"></span></span><span title="#a64d79" data-color="rgb(166, 77, 121)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(166, 77, 121);"></span></span></div>
        <div class="sp-cf sp-palette-row sp-palette-row-6"><span title="#990000" data-color="rgb(153, 0, 0)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(153, 0, 0);"></span></span><span title="#b45f06" data-color="rgb(180, 95, 6)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(180, 95, 6);"></span></span><span title="#bf9000" data-color="rgb(191, 144, 0)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(191, 144, 0);"></span></span><span title="#38761d" data-color="rgb(56, 118, 29)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(56, 118, 29);"></span></span><span title="#134f5c" data-color="rgb(19, 79, 92)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(19, 79, 92);"></span></span><span title="#0b5394" data-color="rgb(11, 83, 148)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(11, 83, 148);"></span></span><span title="#351c75" data-color="rgb(53, 28, 117)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(53, 28, 117);"></span></span><span title="#741b47" data-color="rgb(116, 27, 71)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(116, 27, 71);"></span></span></div>
        <div class="sp-cf sp-palette-row sp-palette-row-7"><span title="#660000" data-color="rgb(102, 0, 0)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(102, 0, 0);"></span></span><span title="#783f04" data-color="rgb(120, 63, 4)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(120, 63, 4);"></span></span><span title="#7f6000" data-color="rgb(127, 96, 0)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(127, 96, 0);"></span></span><span title="#274e13" data-color="rgb(39, 78, 19)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(39, 78, 19);"></span></span><span title="#0c343d" data-color="rgb(12, 52, 61)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(12, 52, 61);"></span></span><span title="#073763" data-color="rgb(7, 55, 99)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(7, 55, 99);"></span></span><span title="#20124d" data-color="rgb(32, 18, 77)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(32, 18, 77);"></span></span><span title="#4c1130" data-color="rgb(76, 17, 48)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(76, 17, 48);"></span></span></div>
        <div class="sp-cf sp-palette-row sp-palette-row-selection"><span title="#0079ff" data-color="rgb(0, 121, 255)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(0, 121, 255);"></span></span></div>
      </div>
      <div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">kurangi</button>
      </div>
    </div>
    <div class="sp-picker-container">
      <div class="sp-top sp-cf">
        <div class="sp-fill"></div>
        <div class="sp-top-inner">
          <div class="sp-color" style="background-color: rgb(0, 121, 255);">
            <div class="sp-sat">
              <div class="sp-val">
                <div class="sp-dragger" style="top: -10px; left: 170px;"></div>
              </div>
            </div>
          </div>
          <div class="sp-clear sp-clear-display" title="Hapus Pilihan Warna"></div>
          <div class="sp-hue">
            <div class="sp-slider" style="top: 68.9056px;"></div>
          </div>
        </div>
        <div class="sp-alpha">
          <div class="sp-alpha-inner" style="background: linear-gradient(to right, rgba(0, 121, 255, 0), rgb(0, 121, 255));">
            <div class="sp-alpha-handle" style="left: 192px;"></div>
          </div>
        </div>
      </div>
      <div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div>
      <div class="sp-initial sp-thumb sp-cf"></div>
      <div class="sp-button-container sp-cf"><button class="sp-cancel" href="#">Batal</button><button type="button" class="sp-choose">Pilih</button></div>
    </div>
  </div>
</body>

</html>
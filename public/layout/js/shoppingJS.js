$(document).ready(function () {
  // todo js của header
  // todo hieu ung click cua mainmenu
  $(".menu-item>a").click(function (e) {
    $(".active").removeClass("active1");
    $(this).addClass("active1");
  });

  //
  var setinterval; //khoi tao bien lap lai chuyen dong
  var stt = 2; //bien lay so tt cua slide

  // todo ham su chyen dong cua img
  var changeImg = function (stt) {
    //chuyen dong cua node
    $(".slider-node ul li").removeClass("color1");
    $(".sub1-node > ul > li").eq(stt).addClass("color1");
    $(".sub2-node > ul > li").eq(stt).addClass("color1");
    $(".slider-img >.slide").hide();
    $(".slider-img >.slide").removeClass("active2 active3 hide");

    //chuyen dong cua hinh anh
    if (stt == 0) {
      $(".sub1-img .slide").eq(2).show();
      $(".sub1-img .slide").eq(2).addClass("active3");
      $(".sub2-img .slide").eq(2).show();
      $(".sub2-img .slide").eq(2).addClass("active3");
    } else {
      $(".sub1-img .slide").eq(stt).prev().show();
      $(".sub1-img .slide").eq(stt).prev().addClass("active3");
      $(".sub2-img .slide").eq(stt).prev().show();
      $(".sub2-img .slide").eq(stt).prev().addClass("active3");
    }

    $(".sub1-img .slide").eq(stt).show();
    $(".sub1-img .slide").eq(stt).addClass("active2"); //eq la ham xac dinh vi tri
    $(".sub2-img .slide").eq(stt).show();
    $(".sub2-img .slide").eq(stt).addClass("active2"); //eq la ham xac dinh vi tri
  };

  //todo su kien next anh
  $(".slider-img .next").click(function next() {
    if (--stt < 0) {
      stt = 2;
    }
    changeImg(stt);
  });

  var time = function () {
    //set thoi gian chuyen dong cua slide
    setinterval = setInterval(() => {
      $(".slider-img .next").click();
    }, 2000);
  };
  time(); //chuyen dong cua slide

  //todo  hiệu ứng click vào node chuyển ảnh slide
  $(".slider-node ul li").click(function (e) {
    clearInterval(setinterval); //tam thoi ngung chuyen dong cua slide
    stt = $(this).attr("id"); //lay gia tri id cua tung node
    changeImg(stt, null);
    setTimeout(() => {
      time();
    }, 800); //delay 1,2s trước khi chạy lại setinterval
  });

  //todo hieu ung scroll an hien thanh menu
  var lastScrollTop = 0;
  $(window).scroll(function () {
    var nowScrollTop = $(this).scrollTop();
    if (nowScrollTop > lastScrollTop) {
      $("div.navigation").addClass("hide-menu");
    } else {
      $("div.navigation").removeClass("hide-menu");
      if (nowScrollTop == 0) {
        $("div.navigation").removeAttr("style");
      } else {
        $("div.navigation").css("background", "#fff");
      }
    }
    lastScrollTop = nowScrollTop;
  });

  //todo hieu ung click an/hien thanh search
  var flag = true;
  $("div.search").click(function (e) {
    if (flag == true) {
      $(".search-content").addClass("show-search");
    }
    flag = true;
  });
  $("div.close").click(function (e) {
    $(this).closest(".search-content").removeClass("show-search");
    flag = false;
  });

  //todo js slider của recommend-slider

  // click chuyen slide cua recommend

  var id = "01";

  $(".next-pre > .node").click(function (e) {
    var name = $(this).attr("class").split(" ")[1];
    $(".slide-item").removeClass(
      "next-active pre-active next-active1 pre-active1 hide"
    );
    $(".slide-item>.content").removeClass("up down");
    if (id == "01") {
      $("#02").show();
      $("#02").addClass(name + "-active");
      $("#02 .content").addClass("up");
      $("#01").show();
      $("#01").addClass(name + "-active1");
      id = "02";
      document.getElementById("change").innerHTML = id;
    } else {
      $("#01").show();
      $("#01").addClass(name + "-active");
      $("#01 .content").addClass("down");
      $("#02").show();
      $("#02").addClass(name + "-active1");
      id = "01";
      document.getElementById("change").innerHTML = id;
    }
  });

  //todo ham khoi tao js thu vien aos
  AOS.init();

  //todo show sub product of section trending
  $(".button-show-product").click(function (e) {
    $(this).hide();
    $(this).parent().addClass("set-row-product");
    $(".products>.col").removeClass("dn");
  });

  //todo change color of icon heart

  var checkColor = true;
  $("a.wishlist").click(function (e) {
    e.preventDefault();
    console.log("asss");
    if (checkColor == true) {
      $(this).addClass("color-red");
      checkColor = false;
    } else {
      $(this).removeClass("color-red");
      checkColor = true;
    }
  });

  // todo event for pop-up-view
  $(".bt-view").click(function (e) {
    $(".modal").addClass("modal-active");
    $("#pop-up-view").addClass("pop-up-view-active");
    $("#pop-up-view").removeAttr('style');
  });
  $(".modal-btn-close,#pop-up-view").click(function (e) {

    $(".modal").removeClass("modal-active");
    $("#pop-up-view").removeClass("pop-up-view-active");
    $("#pop-up-view").attr('display','none');
  });
});


var countDownDate1 = new Date("June 2, 2020 15:37:25").getTime();

// Update the count down every 1 second
var x1 = setInterval(function () {
    var now1 = new Date().getTime();
    // Find the distance between now and the count down date
    var distance1 = countDownDate1 - now1;

    // Time calculations for days, hours, minutes and seconds
    var newdays = Math.floor(distance1 / (1000 * 60 * 60 * 24));
    var newhours = Math.floor((distance1 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var newminutes = Math.floor((distance1 % (1000 * 60 * 60)) / (1000 * 60));
    var newseconds = Math.floor((distance1 % (1000 * 60)) / 1000);
    if (newdays < 10) {
        $(".content .days .num").html("0" + newdays);
    }
    if(newdays <= 0){
        $(".content .days .num").html("00");
    }else {
        $(".content .days .num").html(newdays);
    }
    if (newhours < 10) {
        $(".content .hours .num").html("0" + newhours);
    }
    if(newhours <= 0){
        $(".content .hours .num").html("00");
    }
    else {
        $(".content .hours .num").html(newhours);
    }
    if (newminutes < 10) {
        $(".content .minutes .num").html("0" + newminutes);
    }
    if(newminutes <= 0){
        $(".content .minutes .num").html("00");
    }
    else {
        $(".content .minutes .num").html(newminutes);
    }
    if (newseconds < 10) {
        $(".content .sec .num").html("0" + newseconds);
    }
    if(newseconds <= 0){
        $(".content .sec .num").html("00");
    }
    else {
        $(".content .sec .num").html(newseconds);
    }


    // If the count down is over, write some text

}, 1000);

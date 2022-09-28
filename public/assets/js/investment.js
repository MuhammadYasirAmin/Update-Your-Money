$(document).ready(function () {

    var percent = document.getElementById("selectPlan").value;


    var percent = parseFloat(document.getElementById("selectPlan").value);
    var minMoney = [25, 25.00, 1000.00, 50.00, 100.00];
    var maxMoney = [5001.00, 5001.00, 8001.00, 5001.00, 5001.00];
    $("#investAmount").val(minMoney[0]);
    console.log($("#investAmount").val(minMoney[0]));

    // Slider Function
    function updateSlider(money, profitDaily, profitTotal) {
        $(".range__slider").val(money);
        $(".range__output__value").html(money);
        $("#dailyProfit").html(profitDaily);
        $("#totalProfit").html(profitTotal);

        $("#dailyProfit").html(function () {
            $("#dailyProfit").html(
                profitDaily
            );
        });

        $("#totalProfit").html(function () {
            $("#totalProfit").html(
                profitTotal
            );
        });

        $(".range__slider").on("input", function () {
            $("#investAmount").val(money);
            $(".range__output__value").html($(this).val());
            $("#dailyProfit").html(profitDaily);
            $("#totalProfit").html(profitTotal);
        });

        $("#investAmount").on("input", function (e) {
            document.querySelectorAll(".range__slider").forEach(function (el) {
                el.oninput = function () {
                    var valPercent =
                        (el.valueAsNumber - parseInt(el.min)) /
                        (parseInt(el.max) - parseInt(el.min));
                    var style =
                        "background-image: -webkit-gradient(linear, 0% 0%, 100% 0%, color-stop(" +
                        valPercent +
                        ", #13d487), color-stop(" +
                        valPercent +
                        ", #6c4edd));";
                    el.style = style;
                };
                el.oninput();
            });
        });
    }
    //Calculator
    function calc() {
        var money = parseFloat($("#investAmount").val());
        switch (percent) {
            case 0:
                if ((money >= 10 && money < 999)) {
                    var profitDaily = money / 100 * 1;
                    var profitDaily = profitDaily.toFixed(2);
                    var profitTotal = money / 100 * 500 * 1 + money;
                    var profitTotal = profitTotal.toFixed(2);
                    var profitPercent = 1;
                    var profitPercent = profitPercent.toFixed(2);
                    var profitNet = money / 100 * 500 * 0.5;
                    var profitNet = profitNet.toFixed(2);

                    $("#dailyProfit").text('$' + profitDaily);
                    $("#totalProfit").text('$' + profitTotal);
                    $("#profitPercent").text(profitPercent + '%');
                    $("#profitNet").text('$' + profitNet);

                    // updateSlider(money, profitDaily, profitTotal);

                    //} else if(isNaN(money) == true) {
                } if (money < 10) {
                    $("#dailyProfit").text("Error!");
                    $("#totalProfit").text("Error!");
                    $("#profitPercent").text("Error!");
                    $("#profitNet").text("Error!");
                }
                if (money > 999) {
                    $("#dailyProfit").text("Max: $999");
                    $("#totalProfit").text("Max: $999");
                    $("#profitPercent").text("Max: $999");
                    $("#profitNet").text("Max: $999");
                }
                break;
            case 1:
                if (money >= 10 && money <= 100) {

                    var profitDaily = money / 100 * 110;
                    var profitDaily = profitDaily.toFixed(2);
                    var profitTotal = money / 100 * 110;
                    var profitTotal = profitTotal.toFixed(2);
                    var profitPercent = 110;
                    var profitPercent = profitPercent.toFixed(2);
                    var profitNet = money / 100 * 110 * 30;
                    var profitNet = profitNet.toFixed(2);

                    $("#dailyProfit").text(profitDaily);
                    $("#totalProfit").text(profitTotal);
                    $("#profitPercent").text(profitPercent + '%');
                    $("#profitNet").text('$' + profitNet);

                } if (money < 10) {
                    $("#dailyProfit").text("Min: $10");
                    $("#totalProfit").text("Min: $10");
                    $("#profitPercent").text("Min: $10");
                    $("#profitNet").text("Min: $0");
                }
                if (money > 100) {
                    $("#dailyProfit").text("Max: $100");
                    $("#totalProfit").text("Max: $100");
                    $("#profitPercent").text("Max: $100");
                    $("#profitNet").text("Max: $100");
                }
                break;
            case 2:
                if (money >= 101 && money <= 500) {

                    var profitDaily = money / 100 * 112;
                    var profitDaily = profitDaily.toFixed(2);
                    var profitTotal = money / 100 * 112;
                    var profitTotal = profitTotal.toFixed(2);
                    var profitPercent = 112;
                    var profitPercent = profitPercent.toFixed(2);
                    var profitNet = money / 100 * 112 * 30;
                    var profitNet = profitNet.toFixed(2);

                    $("#dailyProfit").text(profitDaily);
                    $("#totalProfit").text(profitTotal);
                    $("#profitPercent").text(profitPercent + '%');
                    $("#profitNet").text('$' + profitNet);

                } if (money < 101) {
                    $("#dailyProfit").text("Min: $101");
                    $("#totalProfit").text("Min: $101");
                    $("#profitPercent").text("Min: $101");
                    $("#profitNet").text("Min: $101");
                }
                if (money > 500) {
                    $("#dailyProfit").text("Max: $500");
                    $("#totalProfit").text("Max: $500");
                    $("#profitPercent").text("Max: $500");
                    $("#profitNet").text("Max: $500");
                }
                break;
            case 3:
                if (money >= 501 && money <= 1000) {

                    var profitDaily = money / 100 * 115;
                    var profitDaily = profitDaily.toFixed(2);
                    var profitTotal = money / 100 * 115;
                    var profitTotal = profitTotal.toFixed(2);
                    var profitPercent = 115;
                    var profitPercent = profitPercent.toFixed(2);
                    var profitNet = money / 100 * 115 * 30;
                    var profitNet = profitNet.toFixed(2);

                    $("#dailyProfit").text(profitDaily);
                    $("#totalProfit").text(profitTotal);
                    $("#profitPercent").text(profitPercent + '%');
                    $("#profitNet").text('$' + profitNet);

                } if (money < 501) {
                    $("#dailyProfit").text("Min: $501");
                    $("#totalProfit").text("Min: $501");
                    $("#profitPercent").text("Min: $501");
                    $("#profitNet").text("Min: $501");
                }
                if (money > 1000) {
                    $("#dailyProfit").text("Max: $1000");
                    $("#totalProfit").text("Max: $1000");
                    $("#profitPercent").text("Max: $1000");
                    $("#profitNet").text("Max: $1000");
                }
                break;
            case 4:
                if (money >= 1001 && money <= 5000) {

                    var profitDaily = money / 100 * 120;
                    var profitDaily = profitDaily.toFixed(2);
                    var profitTotal = money / 100 * 120;
                    var profitTotal = profitTotal.toFixed(2);
                    var profitPercent = 120;
                    var profitPercent = profitPercent.toFixed(2);
                    var profitNet = money / 100 * 120 * 30;
                    var profitNet = profitNet.toFixed(2);

                    $("#dailyProfit").text(profitDaily);
                    $("#totalProfit").text(profitTotal);
                    $("#profitPercent").text(profitPercent + '%');
                    $("#profitNet").text('$' + profitNet);

                } if (money < 1001) {
                    $("#dailyProfit").text("Min: $1001");
                    $("#totalProfit").text("Min: $1001");
                    $("#profitPercent").text("Min: $1001");
                    $("#profitNet").text("Min: $1001");
                }
                if (money > 5000) {
                    $("#dailyProfit").text("Max: $5000");
                    $("#totalProfit").text("Max: $5000");
                    $("#profitPercent").text("Max: $5000");
                    $("#profitNet").text("Max: $5000");
                }

                break;
            case 5:
                if (money >= 5001 && money <= 10000) {

                    var profitDaily = money / 100 * 125 / 50;
                    var profitDaily = profitDaily.toFixed(2);
                    var profitTotal = money / 100 * 125;
                    var profitTotal = profitTotal.toFixed(2);
                    var profitPercent = 125;
                    var profitPercent = profitPercent.toFixed(2);
                    var profitNet = money / 100 * 125 - money;
                    var profitNet = profitNet.toFixed(2);

                    $("#dailyProfit").text(profitDaily);
                    $("#totalProfit").text(profitTotal);
                    $("#profitPercent").text(profitPercent + '%');
                    $("#profitNet").text('$' + profitNet);
                    //} else if(isNaN(money) == true) {
                } if (money < 5001) {
                    $("#dailyProfit").text("Min: $5001");
                    $("#totalProfit").text("Min: $5001");
                    $("#profitPercent").text("Min: $5001");
                    $("#profitNet").text("Min: $5001");
                }
                break;
            case 6:
                if (money >= 10001 && money <= 25000) {

                    var profitDaily = money / 100 * 130;
                    var profitDaily = profitDaily.toFixed(2);
                    var profitTotal = money / 100 * 130;
                    var profitTotal = profitTotal.toFixed(2);
                    var profitPercent = 130;
                    var profitPercent = profitPercent.toFixed(2);
                    var profitNet = money / 100 * 130 * 50;
                    var profitNet = profitNet.toFixed(2);

                    $("#dailyProfit").text(profitDaily);
                    $("#totalProfit").text(profitTotal);
                    $("#profitPercent").text(profitPercent + '%');
                    $("#profitNet").text('$' + profitNet);

                } if (money < 10001) {
                    $("#dailyProfit").text("Min: $10001");
                    $("#totalProfit").text("Min: $10001");
                    $("#profitPercent").text("Min: $10001");
                    $("#profitNet").text("Min: $10001");
                }
                break;
            case 7:
                if (money >= 25001 && money <= 50000) {

                    var profitDaily = money / 100 * 135;
                    var profitDaily = profitDaily.toFixed(2);
                    var profitTotal = money / 100 * 135;
                    var profitTotal = profitTotal.toFixed(2);
                    var profitPercent = 135;
                    var profitPercent = profitPercent.toFixed(2);
                    var profitNet = money / 100 * 135 * 50;
                    var profitNet = profitNet.toFixed(2);

                    $("#dailyProfit").text(profitDaily);
                    $("#totalProfit").text(profitTotal);
                    $("#profitPercent").text(profitPercent + '%');
                    $("#profitNet").text('$' + profitNet);

                } if (money < 25001) {
                    $("#dailyProfit").text("Min: $25001");
                    $("#totalProfit").text("Min: $25001");
                    $("#profitPercent").text("Min: $25001");
                    $("#profitNet").text("Min: $25001");
                }
                break;
            case 8:
                if (money >= 50001 && money <= 100000) {

                    var profitDaily = money / 100 * 140;
                    var profitDaily = profitDaily.toFixed(2);
                    var profitTotal = money / 100 * 140;
                    var profitTotal = profitTotal.toFixed(2);
                    var profitPercent = 140;
                    var profitPercent = profitPercent.toFixed(2);
                    var profitNet = money / 100 * 140 * 50;
                    var profitNet = profitNet.toFixed(2);

                    $("#dailyProfit").text(profitDaily);
                    $("#totalProfit").text(profitTotal);
                    $("#profitPercent").text(profitPercent + '%');
                    $("#profitNet").text('$' + profitNet);

                } if (money < 50001) {
                    $("#dailyProfit").text("Min: $50001");
                    $("#totalProfit").text("Min: $50001");
                    $("#profitPercent").text("Min: $50001");
                    $("#profitNet").text("Min: $50001");
                }
                break;
            case 9:
                if (money >= 5000 && money <= 100000) {

                    var profitDaily = money / 100 * 10;
                    var profitDaily = profitDaily.toFixed(2);
                    var profitTotal = money / 100 * 10;
                    var profitTotal = profitTotal.toFixed(2);
                    var profitPercent = 10;
                    var profitPercent = profitPercent.toFixed(2);
                    var profitNet = money / 100 * 10 * 50;
                    var profitNet = profitNet.toFixed(2);

                    $("#dailyProfit").text(profitDaily);
                    $("#totalProfit").text(profitTotal);
                    $("#profitPercent").text(profitPercent + '%');
                    $("#profitNet").text('$' + profitNet);

                } if (money < 5000) {
                    $("#dailyProfit").text("Min: $5000");
                    $("#totalProfit").text("Min: $5000");
                    $("#profitPercent").text("Min: $5000");
                    $("#profitNet").text("Min: $5000");
                }
                break;
            case 10:
                if (money >= 20 && money <= 1000) {

                    var profitDaily = money / 100 * 900 / 70;
                    var profitDaily = profitDaily.toFixed(2);
                    var profitTotal = money / 100 * 900;
                    var profitTotal = profitTotal.toFixed(2);
                    var profitPercent = 900;
                    var profitPercent = profitPercent.toFixed(2);
                    var profitNet = money / 100 * 900 - money;
                    var profitNet = profitNet.toFixed(2);

                    $("#dailyProfit").text(profitDaily);
                    $("#totalProfit").text(profitTotal);
                    $("#profitPercent").text(profitPercent + '%');
                    $("#profitNet").text('$' + profitNet);

                } if (money >= 1001 && money <= 3000) {
                    var profitDaily = money / 100 * 950 / 70;
                    var profitDaily = profitDaily.toFixed(2);
                    var profitTotal = money / 100 * 950;
                    var profitTotal = profitTotal.toFixed(2);
                    var profitPercent = 950;
                    var profitPercent = profitPercent.toFixed(2);
                    var profitNet = money / 100 * 950 - money;
                    var profitNet = profitNet.toFixed(2);


                    $("#dailyProfit").text(profitDaily);
                    $("#totalProfit").text(profitTotal);
                    $("#profitPercent").text(profitPercent + '%');
                    $("#profitNet").text('$' + profitNet);

                } if (money >= 3001 && money < 9999999999) {
                    var profitDaily = money / 100 * 1000 / 70;
                    var profitDaily = profitDaily.toFixed(2);
                    var profitTotal = money / 100 * 1000;
                    var profitTotal = profitTotal.toFixed(2);
                    var profitPercent = 1000;
                    var profitPercent = profitPercent.toFixed(2);
                    var profitNet = money / 100 * 1000 - money;
                    var profitNet = profitNet.toFixed(2);

                    $("#dailyProfit").text(profitDaily);
                    $("#totalProfit").text(profitTotal);
                    $("#profitPercent").text(profitPercent + '%');
                    $("#profitNet").text('$' + profitNet);
                } if (money < 20) {
                    $("#dailyProfit").text("Min: $20");
                    $("#totalProfit").text("Min: $20");
                    $("#profitPercent").text("Min: $20");
                    $("#profitNet").text("Min: $20");
                }
                break;
            case 11:
                if (money >= 10 && money <= 1000) {

                    var profitDaily = money / 100 * 1800 / 120;
                    var profitDaily = profitDaily.toFixed(2);
                    var profitTotal = money / 100 * 1800;
                    var profitTotal = profitTotal.toFixed(2);
                    var profitPercent = 1800;
                    var profitPercent = profitPercent.toFixed(2);
                    var profitNet = money / 100 * 1800 - money;
                    var profitNet = profitNet.toFixed(2);

                    $("#dailyProfit").text(profitDaily);
                    $("#totalProfit").text(profitTotal);
                    $("#profitPercent").text(profitPercent + '%');
                    $("#profitNet").text('$' + profitNet);

                } if (money >= 1001 && money <= 3000) {
                    var profitDaily = money / 100 * 1900 / 120;
                    var profitDaily = profitDaily.toFixed(2);
                    var profitTotal = money / 100 * 1900 * 1;
                    var profitTotal = profitTotal.toFixed(2);
                    var profitPercent = 1900;
                    var profitPercent = profitPercent.toFixed(2);
                    var profitNet = money / 100 * 1900 - money;
                    var profitNet = profitNet.toFixed(2);

                    $("#dailyProfit").text(profitDaily);
                    $("#totalProfit").text(profitTotal);
                    $("#profitPercent").text(profitPercent + '%');
                    $("#profitNet").text('$' + profitNet);

                } if (money >= 3001 && money < 9999999999) {
                    var profitDaily = money / 100 * 2000 / 120;
                    var profitDaily = profitDaily.toFixed(2);
                    var profitTotal = money / 100 * 2000;
                    var profitTotal = profitTotal.toFixed(2);
                    var profitPercent = 2000;
                    var profitPercent = profitPercent.toFixed(2);
                    var profitNet = money / 100 * 2000 - money;
                    var profitNet = profitNet.toFixed(2);

                    $("#dailyProfit").text(profitDaily);
                    $("#totalProfit").text(profitTotal);
                    $("#profitPercent").text(profitPercent + '%');
                    $("#profitNet").text('$' + profitNet);

                } if (money < 10) {
                    $("#dailyProfit").text("Min: $10");
                    $("#totalProfit").text("Min: $10");
                    $("#profitPercent").text("Min: $10");
                    $("#profitNet").text("Min: $10");
                }
                break;

        }
    }
    if ($("#investAmount").length) {
        calc();
    }
    $("#investAmount").keyup(function () {
        calc();
    });

    $("#selectPlan").on('change', function () {
        percent = parseFloat(this.value);
        calc();
    })



});
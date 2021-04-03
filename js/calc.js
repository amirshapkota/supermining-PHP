$(function () {
    calc();
});

function calc() {
    var inv_amnt_error = false;
    var inv_plan_error = false;
    // var plan = $('#inv_plan').val();
    var amount = parseFloat($('#calc_amount').val());
    var days = parseInt($('#calc_days').val());
    ;
    var hourly_percent = 0, percent = 0, hourly_profit = 0, daily_profit = 0, week_profit = 0, total_profit = 0,
        total_return = 0, min_amount = 0, max_amount = 0,
        result = 0, selected_plan = '';

    if (amount >= 0.002) {
        percent = 4;
    } else {
        inv_amnt_error = true;
    }


    if (inv_amnt_error || !days || days <= 0) {
        //$('#selected_plan').html("<span style='color:#c32e01;'>--</span>");
        $('#calc_daily_profit').html("0.00");
        $('#calc_total_profit').html("0.00");
    } else {

        daily_profit = amount * percent / 100;

        total_profit = daily_profit * days;

        $('#calc_daily_profit').text('₿ ' + daily_profit.toFixedDown(5));
        $('#calc_total_profit').text('₿ ' + total_profit.toFixedDown(5));
    }

}

Number.prototype.toFixedDown = function (digits) {
    var re = new RegExp("(\\d+\\.\\d{" + digits + "})(\\d)"),
        m = this.toString().match(re);
    return m ? parseFloat(m[1]) : this.valueOf();
};
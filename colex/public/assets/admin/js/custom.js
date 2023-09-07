function showTime() {
    const today = new Date();
    let curr_hour = today.getHours();
    let curr_minute = today.getMinutes();
    let curr_second = today.getSeconds();
    curr_hour = checkTime(curr_hour);
    curr_minute = checkTime(curr_minute);
    curr_second = checkTime(curr_second);
    document.getElementById("jam").innerHTML =
        curr_hour + ":" + curr_minute + ":" + curr_second;
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
setInterval(showTime, 500);

const months = [
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember",
];
const myDays = [
    "Minggu",
    "Senin",
    "Selasa",
    "Rabu",
    "Kamis",
    "Jum&#39;at",
    "Sabtu",
];
const date = new Date();
const day = date.getDate();
const month = date.getMonth();
let thisDay = date.getDay();
thisDay = myDays[thisDay];
const yy = date.getYear();
const year = yy < 1000 ? yy + 1900 : yy;
document.getElementById("tanggal").innerHTML =
    thisDay + ", " + day + " " + months[month] + " " + year;

$(document).ready(function () {
    $(".switchTheme").click(function () {
        if ($("body").hasClass("dark-mode")) {
            KTApp.setThemeMode("light", function () {
                console.log("changed to light mode");
                $('.switchTheme[type="checkbox"]').prop("checked", false);
                $("button.switchTheme i").removeClass("fonticon-moon");
                $("button.switchTheme i").addClass("fonticon-sun");
            });
        } else {
            KTApp.setThemeMode("dark", function () {
                console.log("changed to dark mode");
                $('.switchTheme[type="checkbox"]').prop("checked", true);
                $("button.switchTheme i").removeClass("fonticon-sun");
                $("button.switchTheme i").addClass("fonticon-moon");
            }); // set dark mode
        }
    });
});

/* Copyright &copy; Khidir Zahid Muchtadiabillah. All right Reserved. */

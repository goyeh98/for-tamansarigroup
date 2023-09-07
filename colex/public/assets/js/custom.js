// Script Defer Video Youtube from seniberpikir.com
document.addEventListener("DOMContentLoaded", function () {
    var div,
        n,
        v = document.getElementsByClassName("youtube-player");
    for (n = 0; n < v.length; n++) {
        div = document.createElement("div");
        div.setAttribute("data-id", v[n].dataset.id);
        div.innerHTML = sberpikirThumb(v[n].dataset.id);
        div.onclick = sberpikirIframe;
        v[n].appendChild(div);
    }
});

function sberpikirThumb(id) {
    var thumb = '<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg">',
        play =
            '<div class="play"><svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%"><path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg></div>';
    return thumb.replace("ID", id) + play;
}

function sberpikirIframe() {
    var iframe = document.createElement("iframe");
    var embed = "https://www.youtube.com/embed/ID?autoplay=1";
    iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("allowfullscreen", "1");
    this.parentNode.replaceChild(iframe, this);
}
// End::Script Defer Video Youtube

$(document).ready(function () {
    if (base_url == window.location.href) {
        $("#myModal").modal("show");
    }

    $("#btnSubmit").click(function (e) {
        e.preventDefault();

        const name = $("#name").val();
        const email = $("#email").val();
        const whatsapp = $("#whatsapp").val();
        const domisili = $("#domisili").val();
        const description = $("#description").val();

        if (name == "") {
            $("#name").focus();
        } else if (email == "") {
            $("#email").focus();
        } else if (whatsapp == "") {
            $("#whatsapp").focus();
        } else if (description == "") {
            $("#description").focus();
        } else {
            let linkwa =
                "https://api.whatsapp.com/send?phone=6281330587269&text=Hai *COLEX!*,";
            linkwa += `%0a%0aNama Lengkap: ${name}`;
            linkwa += `%0aEmail: ${email}`;
            linkwa += `%0aWhatsapp: ${whatsapp}`;
            linkwa += `%0aDomisili: ${domisili}`;
            linkwa += `%0aDeskripsikan kendala yang Anda alami: ${description}`;

            window.open(linkwa);

            $("#modalKonsultasi").modal("hide");
            $("#modalKonsultasiSuccess").modal("show");
        }
    });
});

/* Copyright &copy; Khidir Zahid Muchtadiabillah. All right Reserved. */

$(() => {
    show_info_checkout();
    show_info_editcheckout();
    $("#save_edit_infoguest").click(update_editinfoguest_checkout);
    $("#Checkout").click(checkout);
});

function checkout() {
    var query = window.location.search.substring(1);
    var vars = query.split("=");
    var ID = vars[1]
    var urlAPI = base_url("api.php/checkout/" + ID);
    $.getJSON(urlAPI, { format: "json" }).done(function(data) {});
    // $("#bl_checkin").hide();
    alert("OK");
}

function show_info_checkout() {
    var query = window.location.search.substring(1);
    var vars = query.split("=");
    var ID = vars[1];
    var urlAPI = base_url("api.php/show_info_checkout/" + ID);

    $.getJSON(urlAPI, {
            format: "json",
        })
        .done(function(data) {
            console.log(data);
            $("#show_fname").text(data["0"]["ginfo_first_name"]);
            $("#show_lname").text(data["0"]["ginfo_last_name"]);
        })
}

function show_info_editcheckout() {
    var query = window.location.search.substring(1);
    var vars = query.split("=");
    var ID = vars[1];
    var urlAPI = base_url("api.php/show_info_checkout/" + ID);

    $.getJSON(urlAPI, {
        format: "json",
    })

    .done(function(data) {
        console.log(data);
        $("#fname_edit_infoguest").val(data["0"]["ginfo_first_name"]);
        $("#lname_edit_infoguest").val(data["0"]["ginfo_last_name"]);
        $("#passport_edit_infoguest").val(data["0"]["ginfo_passport_id"]);
        $("#phone_edit_infoguest").val(data["0"]["ginfo_telno"]);
        $("#bd_edit_infoguest").val(data["0"]["ginfo_birthday"]);
        $("#nation_edit_infoguest").val(data["0"]["ginfo_nation"]);
        $("#email_edit_infoguest").val(data["0"]["ginfo_email"]);
        $("#sex_edit_infoguest").val(data["0"]["ginfo_sex"]);
        $("#room_price_edit_infoguest").val(data["0"]["bl_price"]);
        $("#padd_edit_infoguest").val(data["0"]["ginfo_mail_addr"]);
        $("#badd_edit_infoguest").val(data["0"]["ginfo_bill_addr"]);
        $("#note_edit_infoguest").val(data["0"]["ginfo_comment"]);
        $("#incbreakfast_edit_infoguest").val(data["0"]["bl_incbreakfast"]);
        $("#breakfast_edit_infoguest").val(data["0"]["bl_breakfast"]);
    })

}

function update_editinfoguest_checkout() {
    var query = window.location.search.substring(1);
    var vars = query.split("=");
    var ID = vars[1];
    $("#id_bl_update").val(ID);
    $("#save_edit_infoguest").click(function(e) {
        e.preventDefault();
        $("update_form_edit").submit();
    });

    $("#update_form_edit").on("submit", function(e) {
        var parameter = $(this).serializeArray();
        $("#btn_yes_update").click(function(e) {
            console.log("1");
            console.log(parameter);
            console.log("1");
            var url = base_url("api.php/update_checkout");
            $.post(url, parameter, function(response) {
                console.log("4");
                console.log(response);
                console.log("4");
                if (response["message"] == "success") {
                    $("#modal_alert").modal("show");
                    reload();
                }
            });
            
            // GROUP 1 //
            var query = window.location.search.substring(1);
            var vars = query.split("=");
            var ID = vars[1];
            var include = $("#incbreakfast_edit_infoguest").val();
            var breakfast = $("#breakfast_edit_infoguest").val();
            var price = $("#room_price_edit_infoguest").val();
            // alert(ID+breakfast+include+price);
            var urlAPI = "http://localhost/hermes/api.php/editfood/" + ID + "/" + include + "/" + breakfast + "/" + price;
            $.getJSON(urlAPI, { format: "json" }).done(function () {
            });
            // GROUP 1 //


        });
        console.log("3");
        e.preventDefault();
    });
}

function reload() {
    location.reload();
}

function base_url(path){
    var host = window.location.origin;
    // "http://localhost"
    var pathArray = window.location.pathname.split( '/' );
    // split path
    return host+"/"+pathArray[1]+"/"+path;
    // return http://localhost/hermes/+path
  }
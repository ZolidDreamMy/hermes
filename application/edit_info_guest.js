$(() => {
    show_info_edit();
});

function show_info_edit() {
    var query = window.location.search.substring(1);
    var vars = query.split("=");
    var ID = vars[1];
    var urlAPI = "http://localhost/hermes/api.php/show_info_checkout/" + ID;
 
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
        $("#badd_edit_infoguest").val(data["0"]["ginfo_comment"]);
        $("#sex_edit_infoguest").val(data["0"]["ginfo_sex"]);
        $("#incbreakfast_edit_infoguest").val(data["0"]["bl_incbreakfast"]);
        $("#breakfast_edit_infoguest").val(data["0"]["bl_breakfast"]);
    })
 
}
    // .done(function(data) {
    //     console.log(data);
    //     $("#fname_edit_infoguest").val(data["0"]["ginfo_first_name"]);
    //     $("#lname_edit_infoguest").val(data["0"]["ginfo_last_name"]);
    //     $("#passport_edit_infoguest").val(data["0"]["ginfo_passport_id"]);
    //     $("#phone_edit_infoguest").val(data["0"]["ginfo_telno"]);
    //     $("#bd_edit_infoguest").val(data["0"]["ginfo_birthday"]);
    //     $("#nation_edit_infoguest").val(data["0"]["ginfo_nation"]);
    //     $("#email_edit_infoguest").val(data["0"]["ginfo_email"]);
    //     $("#sex_edit_infoguest").val(data["0"]["ginfo_sex"]);
    //     $("#room_price_edit_infoguest").val(data["0"]["bl_price"]);
    //     $("#padd_edit_infoguest").val(data["0"]["ginfo_mail_addr"]);
    //     $("#badd_edit_infoguest").val(data["0"]["ginfo_comment"]);
    //     $("#sex_edit_infoguest").val(data["0"]["ginfo_sex"]);
    //     $("#incbreakfast_edit_infoguest").val(data["0"]["bl_incbreakfast"]);
    //     $("#breakfast_edit_infoguest").val(data["0"]["bl_breakfast"]);
    // })
 

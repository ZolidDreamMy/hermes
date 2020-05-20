$(() => {
    show_info_checkin();
    show_info_editcheckin();
});

function show_info_checkin() {
    var query = window.location.search.substring(1);
    var vars = query.split("=");
    var ID = vars[1];
    var urlAPI = base_url("api.php/show_info_checkinedit/" + ID);

    $.getJSON(urlAPI, {
            format: "json",
        })
        .done(function(data) {
            console.log(data);
            $("#show_checkin").text(data["0"]["ginfo_in"]);
            $("#show_checkout").text(data["0"]["ginfo_out"]);
            $("#show_bookdate").text(data["0"]["resinfo_bookdate"]);
            $("#show_fname").text(data["0"]["ginfo_first_name"]);
            $("#show_lname").text(data["0"]["ginfo_last_name"]);
            $("#show_phone").text(data["0"]["ginfo_telno"]);
            $("#show_room").text(data["0"]["room_name"]);
            $("#show_type").text(data["0"]["rtype_eng"]);
            $("#show_building").text(data["0"]["room_building"]);
            $("#show_views").text(data["0"]["rview_eng"]);
        })
}

function show_info_editcheckin() {
    var query = window.location.search.substring(1);
    var vars = query.split("=");
    var ID = vars[1];
    var urlAPI = base_url("api.php/show_info_checkinedit/" + ID);

    $.getJSON(urlAPI, {
        format: "json",
    })

    .done(function(data) {
        console.log(data);
        $("#fname_edit_infoguest").text(data["0"]["ginfo_first_name"]);
        $("#lname_edit_infoguest").text(data["0"]["ginfo_last_name"]);
        $("#phone_edit_infoguest").text(data["0"]["ginfo_telno"]);
        $("#nation_edit_infoguest").text(data["0"]["ginfo_nation"]);

            switch(data["0"]["ginfo_sex"]){
                case "0":
                    $("#sex_edit_infoguest").text("N/A");
                    break;
                case "1":
                    $("#sex_edit_infoguest").text("Male");
                    break;
                case "2":
                    $("#sex_edit_infoguest").text("Female");
                    break;    
            };
            
            switch(data["0"]["ginfo_status"]){
                case "0":
                    $("#badd_edit_infoguest").text("waiting");
                    break; 
                     
            };
    })

}
function base_url(path){
    var host = window.location.origin;
    // "http://localhost"
    var pathArray = window.location.pathname.split( '/' );
    // split path
    return host+"/"+pathArray[1]+"/"+path;
    // return http://localhost/hermes/+path
  }
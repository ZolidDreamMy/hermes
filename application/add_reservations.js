$(() => {
    var query = window.location.search.substring(1);
    var vars = query.split("=");
    var ID = vars[1];
    // alert(ID);
    var urlAPI = base_url("api.php/addroom/" + ID);

    $.getJSON(urlAPI, {
            format: "json",
        })
        .done(function(data) {
            console.log(data);
            $("#id_bl_save").val(ID);
            $("#fname1").val(data["0"]["resinfo_first_name"]);
            $("#lname1").val(data["0"]["resinfo_last_name"]);
            $("#tel1").val(data["0"]["resinfo_telno"]);
            $("#email1").val(data["0"]["resinfo_email"]);
        })
        .fail(function(jqxhr, testStatus, error) {});
    showRoom();
});

function showRoom() {
    var query = window.location.search.substring(1);
    var vars = query.split("=");
    var ID = vars[1];
    //    alert('sdasdsa');
    var urlAPI = base_url("api.php/room/"+ID);
    $.getJSON(urlAPI, {
            format: "json",
        })
        .done(function(data) {
            console.log(data);
            for (var i = 0; i < data.length; i++) {
                var option = document.createElement("OPTION"),
                    txt = document.createTextNode(data[i]["room_name"]);
                option.appendChild(txt);
                option.setAttribute("value", data[i]["room_id"]);
                select.insertBefore(option, select.lastChild);
            }
        })
        .fail(function(jqxhr, textStatus, error) {});
}
function base_url(path){
    var host = window.location.origin;
    // "http://localhost"
    var pathArray = window.location.pathname.split( '/' );
    // split path
    return host+"/"+pathArray[1]+"/"+path;
    // return http://localhost/hermes/+path
  }
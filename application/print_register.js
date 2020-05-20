
// GROUP5 //
$(() => {
    printCheckin(); 
  });
function printCheckin() {
    var query = window.location.search.substring(1);
    var vars = query.split("=");
    var ID = vars[1];
    var urlAPI = base_url("api.php/printCheckin/"+ID);
 
    $.getJSON(urlAPI, { format: "json" })
      .done(function (data) {
        console.log(data);
        $("#gfirst").text(data["0"]["ginfo_first_name"]);
        $("#glast").text(data["0"]["ginfo_last_name"]);
        $("#hotel").text(data["0"]["hotel_addr"]);
        $("#gpast").text(data["0"]["ginfo_passport_id"]);
        $("#gaddr").text(data["0"]["ginfo_mail_addr"]);
        $("#groom").text(data["0"]["room_name"]);
        $("#gin").text(data["0"]["ginfo_in"]);
        $("#gout").text(data["0"]["ginfo_out"]);
        $("#gtel").text(data["0"]["ginfo_telno"]);
        $("#gemail").text(data["0"]["ginfo_email"]);
        $("#refirst").text(data["0"]["resinfo_first_name"]);
        $("#relast").text(data["0"]["resinfo_last_name"]);
        $("#aname").text(data["0"]["agency_name"]);
        $("#atel").text(data["0"]["resinfo_telno"]);
        $("#rname").text(data["0"]["room_name"]);
        $("#rtype").text(data["0"]["rtype_eng"]);
        $("#bname").text(data["0"]["building_name"]);
        $("#vname").text(data["0"]["rview_eng"]);
        $("#rprice").text(data["0"]["room_price"]);
        $("#gnight").text(data["0"]["ginfo_night"]);
        $("#tprice").text(
          data["0"]["room_price"] * parseInt(data["0"]["ginfo_night"])
        );
      })
      .fail(function (jqxhr, testStatus, error) {});
  }
 
  function base_url(path){
    var host = window.location.origin;
    // "http://localhost"
    var pathArray = window.location.pathname.split( '/' );
    // split path
    return host+"/"+pathArray[1]+"/"+path;
    // return http://localhost/hermes/+path
  }
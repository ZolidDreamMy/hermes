$(() => {
  btnSearch_Click();
  show_info_editcheckin();
  // $("#load_checkin").click(load_checkin);
  // $("#btnSearch").click(btnSearch_Click); / 10;
  // $(document).ready(function() {
  //   $('#datatable1').DataTable();
  // } );

// var query = window.location.search.substring(1);
// var vars = query.split("=");
// var ID = vars[1];
// var url = base_url("api.php/ShowReservation/"+ ID);
// load_checkin(ID);

});

function btnSearch_Click() {
// var dataCheck = $("#keyword").val();
var urlAPI = base_url("api.php/search");
$.getJSON(urlAPI).done(function (data) {
  // console.log(JSON.stringify(data));
  var line = "";
  $.each(data, function (k, item) {
    // console.log(item);
    line += "<tr>";
    line += "<td > <a href ='checkin_edit.php?id="+item.ginfo_id+"' ><button type= 'button' class= '  btn btn-info btn-sm btn-round ' id='load_checkin'>Info</button></a> </td>";
    line += "<td >" + item.ginfo_first_name + "</td>";
    line += "<td >" + item.room_name + "</td>";
    line += "<td >" + item.ginfo_first_name + "</td>";
    line += "<td >" + item.ginfo_telno + "</td>";
    line += "<td >" + item.agency_name + "</td>";
    line += "<td >" + item.resinfo_bookdate + "</td>";
    line += "</tr>";
  });

  $("#tb1").empty();
  $("#tb1").append(line);

  $('#datatable1').DataTable({
    "lengthMenu": [[10,25, 50], [10,25, 50 ]],
    "autoWidth": false,
    "searching": true,
   
    
  });
});

}

function load_checkin(){

var query = window.location.search.substring(1);
var vars = query.split("=");
var ID = vars[1];
var url = base_url("api.php/show_info_checkinedit/"+ ID);
alert(ID);
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

function base_url(path){
  var host = window.location.origin;
  // "http://localhost"
  var pathArray = window.location.pathname.split( '/' );
  // split path
  return host+"/"+pathArray[1]+"/"+path;
  // return http://localhost/hermes/+path
}
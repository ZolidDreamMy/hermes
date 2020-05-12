$(() => {
    btnSearch_Click();
    // $("#btnSearch").click(btnSearch_Click); / 10;ิ

    // $(document).ready(function() {
    //   $('#datatable1').DataTable();
    // } );
});

function btnSearch_Click() {
  // var dataCheck = $("#keyword").val();
  var urlAPI = "http://localhost/hermes/apicheckin.php/getdb";
  $.getJSON(urlAPI).done(function (data) {
    // console.log(JSON.stringify(data));
    var line = "";
    $.each(data, function (k, item) {
      // console.log(item);
      line += "<tr>";
      line += "<td > <button type= 'button' class= ' btn-round btn-fill btn-info ' >Info</button> </td>";
      line += "<td >" + item.resinfo_first_name + "</td>";
      line += "<td >" + item.room_name + "</td>";
      line += "<td >" + item.resinfo_first_name + "</td>";
      line += "<td >" + item.resinfo_telno + "</td>";
      line += "<td >" + item.agency_name + "</td>";
      line += "<td >" + item.resinfo_bookdate + "</td>";
      line += "</tr>";
    });

    $("#tb1").empty();
    $("#tb1").append(line);

    $('#datatable1').DataTable({
      responsive: true  
    });
  });
  
}
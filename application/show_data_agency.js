$(() => {
    display_agency();
  });
  
  function display_agency() {
    // var query = window.location.search.substring(1);
    // var vars = query.split("=");
    // var ID = vars[1];
    var urlAPI = base_url("api.php/show_data_agency");
    $.getJSON(urlAPI).done(function (data) {
      //console.log(JSON.stringify(data));
  
      var line = "";
      $.each(data, function (k, item) {
        console.log(item);
        line += "<tr>";
        line += "<td><a href='editAgency.php?id="+item.agency_id+"' <button type='button' class='btn btn-info btn-round'>Info</button></a></td>";
        line += "<td >" + item.agency_code + "</td>";
        line += "<td >" + item.agency_name + "</td>";
        line += "<td >" + item.agency_contact_name + "</td>";
        line += "<td >" + item.agency_email + "</td>";
        line += "<td >" + item.agency_telno + "</td>";
        line += "<td >" +item.agency_price + "</td>"; //commission
        line += "</tr>";
      });

    $("#display").empty();

      $("#agency").append(line);

    $('#data_table_agency').DataTable({
      "lengthMenu": [[10,25, 50], [10,25, 50 ]],
      "autoWidth": false,
      "searching": true,
     
      
    });
  });
  
  }
  function base_url(path){
    var host = window.location.origin;
    // "http://localhost"
    var pathArray = window.location.pathname.split( '/' );
    // split path
    return host+"/"+pathArray[1]+"/"+path;
    // return http://localhost/hermes/+path
  }
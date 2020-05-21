$(() => {
    saveReceipt();
    printReceipt(); 
  });
  function saveReceipt() {
    var query = window.location.search.substring(1);
    var vars = query.split("=");
    var key1 = vars[1];
    var data3 = new Object();
    data3.rec_bl_id = parseInt(key1);
    var url = base_url("api.php/saveReceipt");
    $.post(url, data3, function (response) {
      console.log(response);
      if (response['message'] == "success") {
        console.log("success");
        // $('#modal_alert').modal('show');
        // setTimeout(reload, 800);
      }else{
        console.log("fail")
      }
    });
  }
  function printReceipt() {
    var query = window.location.search.substring(1);
    var vars = query.split("=");
    var ID = vars[1];
    var urlAPI = base_url("api.php/printReceipt/"+ID);
   
    $.getJSON(urlAPI, { format: "json" })
      .done(function (data) {
        console.log(data);
       
        var date = data["0"]["rec_date"].split(' ');
        date = date[0].split(',');
        
        var price =  parseFloat(data["0"]["rec_price"]);
        var night = parseFloat(data["0"]["rec_night"]);
        var address =data["0"]["rec_guest_address"];
        $("#rec_guest_name").text(data["0"]["rec_guest_name"]);
        $("#rec_no").text(data["0"]["rec_no"]);
        $("#rec_guest_address").text(address);
        $("#rec_guest_address2").text(address);
        $("#rec_room_name").text(data["0"]["rec_room_name"]);
        $("#rec_date1").text(date);
        $("#rec_date2").text(date);
        $("#rec_night").text(data["0"]["rec_night"]);
        $("#unit_price").text(price);
        var price = price*night;
        $("#price").text(price);
        var withTaxAndService = price+(price*0.07)+(price*0.1);
        $("#total").text(withTaxAndService );
        $("#rec_checkin").text(data["0"]["rec_checkin"]);
        $("#ginfo_out").text(data["0"]["ginfo_out"]);
        $("#ginfo_email").text(data["0"]["ginfo_email"]);
        $("#ginfo_telno").text(data["0"]["ginfo_telno"]);
        $("#ginfo_passport_id").text(data["0"]["ginfo_passport_id"]);
        $("#ci").text(data["0"]["ginfo_in"]);
        $("#co").text(data["0"]["ginfo_out"]);
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
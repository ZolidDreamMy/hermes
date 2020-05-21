// $(() => {
//     var query = window.location.search.substring(1);
//     var vars = query.split("=");
//     var ID = vars[1];
//     // alert(ID);
//     var urlAPI = "http://localhost/hermes/api.php/addroom/" + ID;

//     $.getJSON(urlAPI, {
//             format: "json",
//         })
//         .done(function(data) {
//             console.log(data);
//             $("#id_bl_save").val(ID);
//             $("#fname1").val(data["0"]["resinfo_first_name"]);
//             $("#lname1").val(data["0"]["resinfo_last_name"]);
//             $("#tel1").val(data["0"]["resinfo_telno"]);
//             $("#email1").val(data["0"]["resinfo_email"]);
//         })
//         .fail(function(jqxhr, testStatus, error) {});
//     showRoom();
// });

// function showRoom() {
//     //    alert('sdasdsa');
//     var urlAPI = "http://localhost/hermes/api.php/room";
//     $.getJSON(urlAPI, {
//             format: "json",
//         })
//         .done(function(data) {
//             // console.log(data);

//             for (var i = 0; i < data.length; i++) {
//                 var option = document.createElement("OPTION"),
//                     txt = document.createTextNode(data[i]["room_name"]);
//                 option.appendChild(txt);
//                 option.setAttribute("value", data[i]["room_id"]);
//                 select.insertBefore(option, select.lastChild);
//             }
//         })
//         .fail(function(jqxhr, textStatus, error) {});
// }

$(() => {
    $("#add_agency").click(add_agency);
    

});
function add_agency() {
    
    var code = $("#code_agency").val();
    var name = $("#name_agency").val();
    var commission = $("#commission_agency").val();
    var sales = $("#sales_name_agency").val();
    var email = $("#email_agency").val();
    var tel = $("#tel_agency").val();
    var address = $("#address_agency").val();
    var comment = $("#comment_agency").val();
    // alert(code+name+commission+sales+email+tel+address+comment);
    var urlAPI = "http://localhost/hermes/api.php/add_agency/"+ code + "/" + name + "/" + address + "/" + sales + "/" + email + "/" + tel + "/" + commission + "/" + comment  ;
    $.getJSON(urlAPI, { format: "json" }).done(function (data) {
    
    });
   
}

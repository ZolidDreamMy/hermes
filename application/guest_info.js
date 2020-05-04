// $(() =>{
    
//     $("#save_guest").click(cancel_guest);

// });

// function cancel_guest() {
//     // alert("ok");
//     var query = window.location.search.substring(1);
//     var vars = query.split("=");
//     var ID = vars[1];
//     var api_url = "http://localhost/hermes/api_guest.php/guest/";
//     var key1 = ID;
//     var key2 = $("#comment_guest").val();
//         $.ajax({
//             type: "get",
//             url: api_url + key1 + "/" + key2,
//             success: function(result, status, xhr) {
//                 alert("success");
//             },
//             error: function(xhr, status, error) {
//                 alert(
//                     "Result: " +
//                     status +
//                     " " +
//                     error +
//                     " " +
//                     xhr.status +
//                     " " +
//                     xhr.statusText
//                 );
//             },
//         });
// }
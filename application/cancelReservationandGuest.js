$(() =>{
    // var form = $("#form");
    // var id = $("#id").val();

    $("#save_comment").click(cancel_resinfo);
    $("#save_guest").click(cancel_guest);

    
});

function cancel_resinfo() {
    var query = window.location.search.substring(1);
    var vars = query.split("=");
    var ID = vars[1];
    var api_url = "http://localhost/hermes/api.php/cancel/";
    var key1 = ID;
    var key2 = $("#comment").val();
        $.ajax({
            type: "get",
            url: api_url + key1 + "/" + key2,
            success: function(result, status, xhr) {
                alert("success");
            },
            error: function(xhr, status, error) {
                alert(
                    "Result: " +
                    status +
                    " " +
                    error +
                    " " +
                    xhr.status +
                    " " +
                    xhr.statusText
                );
            },
        });
}

function cancel_guest() {
    // alert("ok");
    var query = window.location.search.substring(1);
    var vars = query.split("=");
    var ID = vars[1];
    var api_url = "http://localhost/hermes/api.php/guest/";
    var key1 = ID;
    var key2 = $("#comment_guest").val();
        $.ajax({
            type: "get",
            url: api_url + key1 + "/" + key2,
            success: function(result, status, xhr) {
                alert("success");
            },
            error: function(xhr, status, error) {
                alert(
                    "Result: " +
                    status +
                    " " +
                    error +
                    " " +
                    xhr.status +
                    " " +
                    xhr.statusText
                );
            },
        });
}

// form.submit(function (e) {
    //     deleteStudent(id)

    //     function deleteStudent(id) {
    //         if (confirm("คุณต้องการบันทึกหรือไม่")) {
    //             $.get("http://localhost/project_HeremsG2/hermesdb/api.php/del/" + id, {},
    //                 function (data, textStatus, jqXHR) {
    //                     window.location.href = "http://localhost/carproject/empHome.php";
    //                     // search();

    //                 }
    //             );

    //         }
    //     }
    // });

    
//  $(document).ready(function() {
//      var form = $("#report");  
//     var id = 5;
//      form.submit(function(e) {
//         // var comment = $("#comment").val();
//         alert("testtttttttttttttttttt");
//         deleteStudent(comment)

//      function deleteStudent(comment) {

//              $.get("http://localhost/project_HeremsG2/hermesdb/api.php/comment/" + id+"/"+comment, {},
//                  function(data, textStatus, jqXHR) {
//                      window.location.href = "http://localhost/carproject/empHome.php";
//                      // search();
//                  }

//              );

//          }

//      });
//  });
// function myFunction() {
//     var comment = $("#comment").val();
//     var id = 6;
//     updatecomment(comment,id);
//     function updatecomment(comment,id) {
//         $.get("http://localhost/project_HeremsG2/hermesdb/apiCancel.php/comment/" + id + "/" + comment, {},
//             function (data, textStatus, jqXHR) {
//                 window.location.href = "http://localhost/project_HeremsG2/page/cancel.html";
//                 // search();
//             }

//         );

//     }
// }

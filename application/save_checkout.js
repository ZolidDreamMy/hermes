$(() => {
    var query = window.location.search.substring(1);
    var vars = query.split("=");
    var ID = vars[1];
    $("#id_bl_save").val(ID);
    $("#save_add_room").click(function(e) {
        e.preventDefault();
        $("#save_form").submit();
    });

    $("#save_form").on("submit", function(e) {
        var parameter = $(this).serializeArray();
        console.log("1");
        console.log(parameter);
        console.log("1");
        var url = base_url("api.php/save_edit_checkout");
        $.post(url, parameter, function(response) {
            console.log("4");
            console.log(response);
            console.log("4");
            if (response["message"] == "success") {
                $("#modal_alert").modal("show");
                setTimeout(reload, 800);
            }
        });
        console.log("3");
        e.preventDefault();
    });
});

function reload() {
    location.reload();
}

function base_url(path){
    var host = window.location.origin;
    // "http://localhost"
    var pathArray = window.location.pathname.split( '/' );
    // split path
    return host+"/"+pathArray[1]+"/"+path;
    // return http://localhost/hermes/+path
  }
<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require './api/vendor/autoload.php';

$config = [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        // Database connection settings
        "db" => [
            "host" => "127.0.0.1",
            "dbname" => "hermes",
            "user" => "root",
            "pass" => ""
        ],
    ],
];

$app = new \Slim\App($config);

// DIC configuration
$container = $app->getContainer();


// PDO database library 
$container['db'] = function ($c) {
    $settings = $c->get('settings')['db'];
    $pdo = new PDO(
        "mysql:host=" . $settings['host'] . ";dbname=" . $settings['dbname'] . ";charset=utf8",
        $settings['user'],
        $settings['pass']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $pdo;    
};


$app->get('/getdb', function (Request $request, Response $response, array $args) {

    $sql = "select a.agency_name,r.resinfo_id,r.resinfo_first_name,r.resinfo_last_name, r.resinfo_email, r.resinfo_telno, r.resinfo_comments, 
            rm.room_name, rt.rtype_eng, rs.rstatus_eng, rv.rview_eng, b.building_name from book_log bl
            join reservation_info r
            on bl.bl_reservation = r.resinfo_id
            join agency a
            on r.resinfo_agency = a.agency_id 
            join rooms rm
            on bl.bl_room = rm.room_id
            join room_type rt 
            on rm.room_type = rt.rtype_id
            join room_status rs
            on bl.bl_status = rs.rstatus_id
            join room_view rv 
            on rm.room_view = rv.rview_id
            join building b
            on rm.room_building = b.building_id ";
    $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    return $this->response->withJson($sth);
});

$app->get('/ShowReservation/{bl_id}', function (Request $request, Response $response, array $args) {
    $bl_id = $args['bl_id'];
    $sql = "select * from book_log bl
    join reservation_info r
    on bl.bl_reservation = r.resinfo_id
    join agency a
    on r.resinfo_agency = a.agency_id 
    join rooms rm
    on bl.bl_room = rm.room_id
    join room_type rt 
    on rm.room_type = rt.rtype_id
    join room_status rs
    on bl.bl_status = rs.rstatus_id
    join room_view rv 
    on rm.room_view = rv.rview_id
    join building b
    on rm.room_building = b.building_id
    join guest_info gi
    on bl.bl_ginfo = gi.ginfo_id
    where bl.bl_id = $bl_id";
    $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $this->response->withJson($sth);
});

$app->get('/cancel/{bl_id}/{comments}', function (Request $request, Response $response, array $args) {
    $bl_id = $args['bl_id'];
    $resinfo_comments = $args['comments'];
    $sql = "SELECT resinfo_id from reservation_info join book_log on resinfo_id = bl_reservation where bl_id = $bl_id ";
    $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    $resinfo_id = $sth[0]['resinfo_id'];
    $sql1 = "update reservation_info 
    set resinfo_comments = '$resinfo_comments' , resinfo_flag= 1
    where resinfo_id = $resinfo_id ";
    $this->db->query($sql1);
});

$app->get('/guest/{bl_id}/{comments}', function (Request $request, Response $response, array $args) {
    $bl_id = $args['bl_id'];
    $ginfo_comment = $args['comments'];
    $sql = "SELECT ginfo_id from guest_info join book_log on ginfo_id = bl_ginfo where bl_id = $bl_id ";
    $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    $ginfo_id = $sth[0]['ginfo_id'];
    $sql1 = "update guest_info
    set ginfo_comment = '$ginfo_comment' , ginfo_flag= 1
    where ginfo_id = $ginfo_id ";
    $this->db->query($sql1);
});


//card 16
$app->get('/show_info_checkout/{id}', function (Request $request, Response $response, array $args) {
//     $bl_id = $args['bl_id'];
//     $sql = "SELECT * from book_log bl join  reservation_info r
//     on bl.bl_reservation = r.resinfo_id
//     join agency a
//     on r.resinfo_agency = a.agency_id 
//     join rooms rm
//     on bl.bl_room = rm.room_id
//     join room_type rt 
//     on rm.room_type = rt.rtype_id
//     join room_status rs
//     on bl.bl_status = rs.rstatus_id
//     join room_view rv 
//     on rm.room_view = rv.rview_id
//     join building b
//     on rm.room_building = b.building_id
//     where bl.bl_id = $bl_id";
//     $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
//     return $this->response->withJson($sth);
// });
$bl_id = $args['id'];
    $sql = "SELECT * FROM reservation_info rs join book_log bl
    on rs.resinfo_id = bl.bl_reservation join guest_info g
    on bl.bl_ginfo = g.ginfo_id join rooms r
    on bl.bl_room = r.room_id join room_type rt
    on r.room_type = rt.rtype_id join room_view rv
    on r.room_view = rv.rview_id join building bd
    on r.room_building = bd.building_id
    where bl.bl_id = $bl_id ";
    $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $this->response->withJson($sth);
});

$app->run();



// $app->get('/comment/{resinfo_id}/{comment}', function (Request $request, Response $response, array $args) {
//     $res_comment = $args['comment'];
//     $resinfo_id = $args['resinfo_id'];
//     $sql = "update reservation_info set resinfo_comments = '".$res_comment."' where resinfo_id = $resinfo_id ";
//     $sth = $this->db->query($sql);
//     // return $this->response->withJson($sth);
// });

// $app->get('/getdb/{id}', function (Request $request, Response $response, array $args) {
//     $id = $args['id'];
//     $sql = "select a.agency_name, r.resinfo_first_name,r.resinfo_last_name, r.resinfo_email, r.resinfo_telno, r.resinfo_comments, 
//             rm.room_name, rt.rtype_eng, rs.rstatus_eng, rv.rview_eng, b.building_name from book_log bl
//             join reservation_info r
//             on bl.bl_reservation = r.resinfo_id
//             join agency a
//             on r.resinfo_agency = a.agency_id 
//             join rooms rm
//             on bl.bl_room = rm.room_id
//             join room_type rt 
//             on rm.room_type = rt.rtype_id
//             join room_status rs
//             on bl.bl_status = rs.rstatus_id
//             join room_view rv 
//             on rm.room_view = rv.rview_id
//             join building b
//             on rm.room_building = b.building_id";
//     $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

//     return $this->response->withJson($sth);
// });



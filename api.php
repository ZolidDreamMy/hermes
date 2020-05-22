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
        "mysql:host=" . $settings['host'] . ";dbname=" . $settings['dbname'] . ";charset=UTF8",
        $settings['user'],
        $settings['pass']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $pdo;
};


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

$app->post('/update_checkout', function (Request $request, Response $response, array $args) {
    $params = $_POST;
    $bl_id = $params['id_bl_update'];
    $ginfo_first_name = $params['fname_edit_infoguest'];
    $ginfo_last_name = $params['lname_edit_infoguest'];
    $ginfo_passport_id = $params['passport_edit_infoguest'];
    $ginfo_telno = $params['phone_edit_infoguest'];
    $ginfo_birthday = $params['bd_edit_infoguest'];
    $ginfo_nation = $params['nation_edit_infoguest'];
    $ginfo_email = $params['email_edit_infoguest'];
    $ginfo_sex = $params['sex_edit_infoguest'];
    $room_price = $params['room_price_edit_infoguest'];
    $ginfo_mail_addr = $params['padd_edit_infoguest'];
    $ginfo_comment = $params['note_edit_infoguest'];
    $bl_incbreakfast = $params['incbreakfast_edit_infoguest'];
    $bl_breakfast = $params['breakfast_edit_infoguest'];
    $ginfo_bill_address = $params['badd_edit_infoguest'];
    $ginfo_name_bill = $ginfo_first_name . " " . $ginfo_last_name;
    try {
        $sql = "SELECT g.ginfo_id from guest_info g 
        join book_log bl
        on  g.ginfo_id = bl.bl_ginfo
        WHERE bl.bl_id = $bl_id ";
        $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $ginfo_id = ($sth[0]['ginfo_id']);

        $sql1 = "UPDATE guest_info set ginfo_first_name ='$ginfo_first_name', ginfo_last_name ='$ginfo_last_name', ginfo_passport_id ='$ginfo_passport_id', 
        ginfo_birthday ='$ginfo_birthday' , ginfo_nation = '$ginfo_nation', ginfo_email = '$ginfo_email', ginfo_telno = '$ginfo_telno', 
        ginfo_mail_addr ='$ginfo_mail_addr', ginfo_comment = '$ginfo_comment',ginfo_tax_id='', ginfo_name_bill='$ginfo_name_bill', ginfo_sex ='$ginfo_sex',ginfo_bill_addr='$ginfo_bill_address'
        where ginfo_id = $ginfo_id";
        $this->db->query($sql1);

        return $this->response->withJson(array('message' => 'success'));
    } catch (PDOException $e) {
        return $this->response->withJson(array('message' => 'false'));
    }
});

$app->post('/save_edit_checkout', function (Request $request, Response $response, array $args) {
    $params = $_POST;
    $bl_id = $params['id_bl_save'];
    $room_id = $params['select'];

    try {
        $sql = "SELECT *from guest_info g 
        join book_log bl
        on  g.ginfo_id = bl.bl_ginfo
        join reservation_info re
        on bl.bl_reservation = re.resinfo_id
        WHERE bl_id = $bl_id";
        $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $bl_ginfo = ($sth[0]['bl_ginfo']);
        $ginfo_in = ($sth[0]['ginfo_in']);
        $resinfo_id = ($sth[0]['resinfo_id']);
        // $ginfo_checkout = ($sth[0]['ginfo_checkout']);
        $sql1 = "INSERT INTO book_log (bl_reservation, bl_ginfo, bl_checkin, bl_room,bl_status)
        VALUE ('$resinfo_id', '$bl_ginfo','$ginfo_in', '$room_id','2') ";
        $this->db->query($sql1);
        return $this->response->withJson(array('message' => 'success'));
    } catch (PDOException $e) {
        return $this->response->withJson(array('message' => 'false4'));
    }
});

//-----------------------------> group 3 <----------------------------//
$app->get('/show_gesinfo_checkout', function (Request $request, Response $response, array $args) {
    $sql = "SELECT * FROM reservation_info rs join book_log bl
    on rs.resinfo_id = bl.bl_reservation join guest_info g
    on bl.bl_ginfo = g.ginfo_id join rooms r
    on bl.bl_room = r.room_id join room_type rt
    on r.room_type = rt.rtype_id join room_view rv
    on r.room_view = rv.rview_id join building bd
    on r.room_building = bd.building_id join  agency a
    on rs.resinfo_agency = a.agency_id";
    $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $this->response->withJson($sth);
});
 
$app->get('/show_data_agency', function (Request $request, Response $response, array $args) {
    $sql = "SELECT * FROM agency WHERE agency_flag ='0' ";
    $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $this->response->withJson($sth);
});

//card16

//card 23
$app->get('/add_agency/{code}/{name}/{address}/{sales}/{email}/{tel}/{commission}/{comment}', function (Request $request, Response $response, array $args) {

    $code = $args['code'];
    $name = $args['name'];
    $address = $args['address'];
    $sales = $args['sales'];
    $email = $args['email'];
    $tel = $args['tel'];
    $commission = $args['commission'];
    $comment = $args['comment'];


    $sql = "INSERT INTO agency (agency_code, agency_name, agency_address ,agency_contact_name, agency_email ,agency_telno , agency_price, agency_comment)
    VALUES ($code,'$name','$address', '$sales','$email','$tel','$commission','$comment')";
    $this->db->query($sql);
    // return $this->response->withJson($sth);
    // try {
    //     $this->db->query($sql);
    //     return $this->response->withJson(array('message' => 'success'));
    // } catch (PDOException $e) {
    //     return $this->response->withJson(array('message' => 'false'));
    // }
});

//Pai GROUP 1
$app->get('/editfood/{key}/{include}/{break}/{price}', function (Request $request, Response $response, array $args) {
    $id = $args['key'];
    $price = $args['price'];
    $include = $args['include'];
    $break = $args['break'];
    $sql = "UPDATE book_log 
    SET
    bl_price = '" . $price . "' ,
    bl_incbreakfast = $include,
    bl_breakfast = '" . $break . "'
    WHERE bl_id = $id";
    $this->db->query($sql);
});

//grad 9 checkinedit
$app->get('/search', function (Request $request, Response $response, array $args) {
    $sql = "SELECT *
    FROM rooms r join book_log b on r.room_id=b.bl_room 
    join reservation_info re on b.bl_reservation = re.resinfo_id
    join agency a on re.resinfo_agency=a.agency_id 
    join guest_info g on b.bl_ginfo = g.ginfo_id
    -- group by b.bl_id,re.resinfo_first_name,r.room_name,a.agency_name,re.resinfo_telno,b.bl_checkin,re.resinfo_bookdate,g.ginfo_id,g.ginfo_first_name";
    $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $this->response->withJson($sth);
});

$app->get('/show_info_checkinedit/{id}', function (Request $request, Response $response, array $args) {
    $bl_id = $args['id'];
    $sql = "SELECT * FROM reservation_info rs join book_log bl
        on rs.resinfo_id = bl.bl_reservation join guest_info g
        on bl.bl_ginfo = g.ginfo_id join rooms r
        on bl.bl_room = r.room_id join room_type rt
        on r.room_type = rt.rtype_id join room_view rv
        on r.room_view = rv.rview_id join building bd
        on r.room_building = bd.building_id
        where g.ginfo_id = $bl_id ";
    $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $this->response->withJson($sth);
});


$app->get('/getdb', function (Request $request, Response $response, array $args) {
    $sql = "SELECT * from reservation_info re 
        join book_log bl
        on  re.resinfo_id = bl.bl_reservation
        join rooms r 
        on bl.bl_room = r.room_id
        group by re.resinfo_id;";
    $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $this->response->withJson($sth);
});
$app->get('/getdb/{id}', function (Request $request, Response $response, array $args) {
    $id = $args['id'];
    $sql = "SELECT * from reservation_info re 
        join book_log bl
        on  re.resinfo_id = bl.bl_reservation
        join rooms r 
        on bl.bl_room = r.room_id
        WHERE re.resinfo_id = $id
        group by re.resinfo_id";
    $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $this->response->withJson($sth);
});


//---------------------> group3 card 2 show
$app->get('/show_info/{id}', function (Request $request, Response $response, array $args) {
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
//---------------------> group3 // card 2 update
$app->post('/update_guest', function (Request $request, Response $response, array $args) {
    $params = $_POST;
    $bl_id = $params['id_bl_update'];
    $ginfo_first_name = $params['fname_edit_infoguest'];
    $ginfo_last_name = $params['lname_edit_infoguest'];
    $ginfo_passport_id = $params['passport_edit_infoguest'];
    $ginfo_telno = $params['phone_edit_infoguest'];
    $ginfo_birthday = $params['bd_edit_infoguest'];
    $ginfo_nation = $params['nation_edit_infoguest'];
    $ginfo_email = $params['email_edit_infoguest'];
    $ginfo_sex = $params['sex_edit_infoguest'];
    $room_price = $params['room_price_edit_infoguest'];
    $ginfo_mail_addr = $params['padd_edit_infoguest'];
    $ginfo_comment = $params['badd_edit_infoguest'];
    $bl_incbreakfast = $params['incbreakfast_edit_infoguest'];
    $bl_breakfast = $params['breakfast_edit_infoguest'];
    try {
        $sql = "SELECT g.ginfo_id from guest_info g 
        join book_log bl
        on  g.ginfo_id = bl.bl_ginfo
        WHERE bl.bl_id = $bl_id ";
        $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $ginfo_id = ($sth[0]['ginfo_id']);
 
        $sql1 = "UPDATE guest_info set ginfo_first_name ='$ginfo_first_name', ginfo_last_name ='$ginfo_last_name', ginfo_passport_id ='$ginfo_passport_id', 
        ginfo_birthday ='$ginfo_birthday' , ginfo_nation = '$ginfo_nation', ginfo_email = '$ginfo_email', ginfo_telno = '$ginfo_telno', 
        ginfo_mail_addr ='$ginfo_mail_addr', ginfo_comment = '$ginfo_comment',ginfo_tax_id='115522', ginfo_name_bill='test', ginfo_sex ='$ginfo_sex' where ginfo_id = $ginfo_id";
        $this->db->query($sql1);
 
        return $this->response->withJson(array('message' => 'success'));
    } catch (PDOException $e) {
        return $this->response->withJson(array('message' => 'false'));
    }
});

//grad 9 checkinedit

// GROUP 1
$app->get('/checkin/{key}', function (Request $request, Response $response, array $args) {
    $id = $args['key'];
    $sql = "UPDATE book_log SET bl_status = 3 WHERE bl_id = $id ";
    $this->db->query($sql);
});

// GROUP5 //
$app->get('/printCheckin/{idcheck}', function (Request $request, Response $response, array $args) {
    $id = $args['idcheck'];
    $sql = "SELECT * from hotel,book_log join reservation_info
            on bl_reservation = resinfo_id 
            join guest_info
            on bl_ginfo = ginfo_id
            join rooms
            on ginfo_room = room_id
            join room_type
            on room_type = rtype_id
            join building
            on room_building = building_id
            join room_view
            on room_view = rview_id
            join agency
            on resinfo_agency = agency_id
            where ginfo_id='$id'";
    $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    return $this->response->withJson($sth);
});

$app->get('/printReceipt/{idcheck}', function (Request $request, Response $response, array $args) {
    $id = $args['idcheck'];
    $sql = "SELECT * from receipt rec 
    join book_log bl on rec.rec_bl_id = bl.bl_id
    join guest_info gin on bl.bl_ginfo = gin.ginfo_id
    where rec_bl_id = $id order by rec_no desc limit 1";
    $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
    return $this->response->withJson($sth);
});
$app->post('/saveReceipt', function (Request $request, Response $response, array $args) {
    $params = $_POST;
    $rec_bl_id = intval($params['rec_bl_id']);
 
    $sql = "Select * from book_log bl join guest_info gin on bl.bl_ginfo = gin.ginfo_id join rooms r on bl.bl_room = r.room_id
    where bl_id = $rec_bl_id order by bl_id desc limit 1";
    $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    $rec_name_bill = $sth[0]['ginfo_name_bill'];
    $ginfo_bill_addr = $sth[0]['ginfo_bill_addr'];
    $ginfo_tax_id = " ";
    $room_name = $sth[0]['room_name'];
    $rec_checkin = $sth[0]['ginfo_in'];
    $rec_checkout = $sth[0]['ginfo_out'];
    $rec_night = intval($sth[0]['ginfo_night']);
    $rec_price = doubleval($sth[0]['bl_price']);
    $ginfo_name_bill = $sth[0]['ginfo_name_bill'];
    
    $sql2 = "Select * from receipt order by rec_no desc limit 1";
    $sth2 = $this->db->query($sql2)->fetchAll(PDO::FETCH_ASSOC);
    $rec_no = intval($sth2[0]['rec_no']+1);
    
    $sql3 = "INSERT INTO receipt(rec_no,rec_bl_id,rec_guest_name,rec_guest_address,rec_guest_tax_id,rec_room_name,rec_checkin,rec_checkout,rec_night,rec_price,rec_status,rec_ginfo_name)
    values('$rec_no','$rec_bl_id','$rec_name_bill','$ginfo_bill_addr','$ginfo_tax_id','$room_name','$rec_checkin','$rec_checkout','$rec_night','$rec_price','0','$ginfo_name_bill')";
    // return $this->response->withJson($sth);
    try {
        $this->db->query($sql3);
        return $this->response->withJson(array('message' => 'success'));
    } catch (PDOException $e) {
        return $this->response->withJson(array('message' => 'false'));
    }
});
$app->get('/getHotel/{idcheck}', function (Request $request, Response $response, array $args) {
    $id = $args['idcheck'];
    $sql = "SELECT * from hotel
    where hotel_id = $id";
    $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
    return $this->response->withJson($sth);
});
// GROUP5 //



$app->run();

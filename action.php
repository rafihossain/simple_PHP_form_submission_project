<?php

// TODO: Default TimeZone
date_default_timezone_set('Asia/Dhaka');


// TODO: Autoload Classes
spl_autoload_register(function ($class) {
   if (file_exists('./app/' . $class . '.php')) {
      require_once './app/' . $class . '.php';
   }
});


// TODO: Object Instantiate
$orm = new Eloquent();


// TODO: Add A New Report
if (@$_POST['action'] === "AddNewReport") {
   $amount  = filter_var($_POST['amount'], FILTER_VALIDATE_INT);
   $buyer   = filter_var($_POST['buyer'], FILTER_SANITIZE_STRING);
   $receipt = filter_var($_POST['receipt'], FILTER_SANITIZE_STRING);
   $items   = filter_var($_POST['items'], FILTER_SANITIZE_STRING);
   $email   = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
   $note    = filter_var($_POST['note'], FILTER_SANITIZE_STRING);
   $city    = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
   $phone   = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
   $entry   = filter_var($_POST['entry'], FILTER_VALIDATE_INT);

   if (!empty($amount) && !empty($buyer) && !empty($receipt) && !empty($items) && !empty($email) && !empty($note) && !empty($city) && !empty($phone) && !empty($entry)) {
      $addReport = $orm->create($amount, $buyer, $receipt, $items, $email, $note, $city, $phone, $entry);
      if (!empty($addReport) && is_array($addReport)) {
         echo json_encode($addReport, JSON_PRETTY_PRINT);
      } else {
         echo json_encode(['error' => 'Oops! something went wrong'], JSON_PRETTY_PRINT);
      }
   }
}


// TODO: Fetch All Reports
if (@$_POST['action'] === "GetAllReports") {
   $result = $orm->all();
   if (!empty($result) && is_array($result)) {
      $template = '';
      foreach ($result as $n => $each) {
         $template .= '<tr>';
         $template .= '<td>' . ++$n . '</td>';
         $template .= '<td>' . $each['amount'] . '</td>';
         $template .= '<td>' . $each['buyer'] . '</td>';
         // $template .= '<td>' . $each['hash_key'] . '</td>';
         $template .= '<td>' . $each['items'] . '</td>';
         $template .= '<td>' . $each['buyer_email'] . '</td>';
         $template .= '<td>' . $each['buyer_ip'] . '</td>';
         $template .= '<td>' . $each['note'] . '</td>';
         $template .= '<td>' . $each['city'] . '</td>';
         $template .= '<td>' . $each['phone'] . '</td>';
         $template .= '<td>' . $each['entry_at'] . '</td>';
         $template .= '<td>' . $each['entry_by'] . '</td>';
         $template .= '</tr>';
      }

      echo $template;
   }
}


// TODO: Form Submission Prevention
if (@$_POST['action'] === "IsClientExisted") {
   if (!empty($_POST['email'])) {
      $isExist = $orm->find('buyer_email', '"' . $_POST['email'] . '"');
      if (!empty($isExist) && is_array($isExist)) {
         $difference = Helper::totalTime(date('Y-m-d H:i:s', strtotime($isExist[0]['entry_at'])), date('Y-m-d H:i:s'));
         if (sprintf('%.1f', $difference) <= 24) {
            echo 1;
         } else {
            echo 0;
         }
      }
   }
}

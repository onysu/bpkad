<?php
  /**
  * Membutuhkan library "PHP Email Form"
  * library "PHP Email Form" hanya tersedia dalam versi pro dari template
  * library harus diunggah ke: vendor/php-email-form/php-email-form.php
  * Untuk info lebih lanjut dan bantuan: https://bootstrapmade.com/php-email-form/
  */

  // Ganti contact@example.com dengan alamat email penerima Anda yang sebenarnya
  $receiving_email_address = 'contact@example.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Tidak dapat memuat Library "Form Email PHP"!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = 'Form Pertemuan Online';

  // Hapus komentar di bawah kode jika Anda ingin menggunakan SMTP untuk mengirim email. Anda harus memasukkan kredensial SMTP yang benar
  /*
  $contact->smtp = array(
    'host' => 'contoh.com',
    'username' => 'contoh',
    'password' => 'password',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'Name');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['phone'], 'Phone');
  $contact->add_message( $_POST['date'], 'Appointment Date');
  $contact->add_message( $_POST['department'], 'Department');
  $contact->add_message( $_POST['doctor'], 'Doctor');
  $contact->add_message( $_POST['message'], 'Message');

  echo $contact->send();

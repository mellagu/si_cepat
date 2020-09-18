<?php
if (isset($_POST['btn-addTransaksi'])) {
   $data = [
      "noResi"         => $_POST['noResi'],
      "namaBarang"     => $_POST['namaBarang'],
      "beratBarang"    => $_POST['beratBarang'],
      "jenisBarang"    => $_POST['jenisBarang'],
      "namaPengirim"   => $_POST['namaPengirim'],
      "kontakPengirim" => $_POST['kontakPengirim'],
      "namaPenerima"   => $_POST['namaPenerima'],
      "kontakPenerima" => $_POST['kontakPenerima'],
      "layanan"        => $_POST['layanan'],
      "ongkir"         => $_POST['ongkir'],
   ];

   $dataOngkir = getOngkirById($_POST['ongkir']);

   if ($_POST['layanan'] == 1) { 
      $data["totalBiaya"] = $dataOngkir['biaya'] * 1.5;
   } else {
      $data["totalBiaya"] = $dataOngkir['biaya'];
   }

   $insert = addTransaksi($data);

   if ($insert) {
      addTrackingHistory($_POST['noResi']);
      notif("Data transaksi berhasil ditambah", 1);
      header("Location: ?page=transaksi");
   }

}

if (isset($_GET['aksi'])){
   if($_GET['aksi']=='delete'){
       $no_resi = $_GET['id'];

       $deleteResi = deleteTransaksi($no_resi);
       if($deleteResi){
           notif("Data Transaksi Berhasil Dihapus",1);
           header("Location: ?page=transaksi");
       }
   }
}
if (isset($_POST['btn-updateTransaksi'])) {
   $noResi          = $_POST['noResi'];
   $namaBarang      = $_POST['namaBarang'];
   $beratBarang     = $_POST['beratBarang'];
   $jenisBarang     = $_POST['jenisBarang'];
   $namaPengirim    = $_POST['namaPengirim'];
   $namaPenerima    = $_POST['namaPenerima'];
   $kontakPengirim  = $_POST['kontakPengirim'];
   $kontakPenerima  = $_POST['kontakPenerima'];
   $layanan         = $_POST['layanan'];
   $ongkir          = $_POST['ongkir'];


   $dataOngkir = getOngkirById($_POST['ongkir']);

   if ($_POST['layanan'] == 2) { //layanan YES
      $data["totalBiaya"] = $dataOngkir['biaya'] * 1.5;
   } else {
      $data["totalBiaya"] = $dataOngkir['biaya'];
   }
 

   $update = updateTransaksi($noResi, $namaBarang, $beratBarang, $jenisBarang, $namaPengirim, $namaPenerima, $kontakPengirim, $kontakPenerima,$layanan, $ongkir);


   if ($update) {
      notif("Data Transaksi berhasil ditambah", 1);
      header("Location: ?page=transaksi");
   }
}
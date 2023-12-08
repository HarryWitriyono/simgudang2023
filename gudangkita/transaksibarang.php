<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIM Gudang V.2023 - Form Transaksi Barang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  
<div class="container">
  <h1>Form Transaksi Barang</h1>
<form method="post">
  <div class="form-group row">
    <label for="KodeGudang" class="col-4 col-form-label">KodeGudang</label> 
    <div class="col-8">
      <select id="KodeGudang" name="KodeGudang" class="custom-select">
        <option value="">Silahkan pilih</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="KodeBarang" class="col-4 col-form-label">KodeBarang</label> 
    <div class="col-8">
      <input id="KodeBarang" name="KodeBarang" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="WaktuTransaksi" class="col-4 col-form-label">WaktuTransaksi</label> 
    <div class="col-8">
      <input id="WaktuTransaksi" name="WaktuTransaksi" type="date" class="form-control" value="<?php echo date('d-m-Y');?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="StatusTransaksi" class="col-4 col-form-label">StatusTransaksi</label> 
    <div class="col-8">
      <select id="StatusTransaksi" name="StatusTransaksi" class="custom-select" required="required">
        <option value="Masuk">Masuk</option>
        <option value="Keluar">Keluar</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="Jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="Jumlah" name="Jumlah" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="Keterangan" class="col-4 col-form-label">Keterangan</label> 
    <div class="col-8">
      <textarea id="Keterangan" name="Keterangan" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
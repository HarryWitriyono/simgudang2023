<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIM Gudang V.2023 - Form Barang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  
<div class="container">
  <h1>Form Barang</h1>
<form method="post">
  <div class="form-group row">
    <label for="KodeBarang" class="col-4 col-form-label">Kode Barang</label> 
    <div class="col-8">
      <input id="KodeBarang" name="KodeBarang" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="NamaBarang" class="col-4 col-form-label">Nama Barang</label> 
    <div class="col-8">
      <input id="NamaBarang" name="NamaBarang" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="JumlahStok" class="col-4 col-form-label">Jumlah Stok</label> 
    <div class="col-8">
      <input id="JumlahStok" name="JumlahStok" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Harga</label> 
    <div class="col-8">
      <input id="text" name="text" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Satuan" class="col-4 col-form-label">Satuan</label> 
    <div class="col-8">
      <input id="Satuan" name="Satuan" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="TglAuditTerakhir" class="col-4 col-form-label">Tgl. Audit Terakhir</label> 
    <div class="col-8">
      <input id="TglAuditTerakhir" name="TglAuditTerakhir" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
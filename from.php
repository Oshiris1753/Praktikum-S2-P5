<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid p-5 border border-primary">
        <div class="row">
            <div class="col-md-8">
                <form method="POST" action="form_atm.php">
                    <div class="form-group row">
                        <label for="costumer" class="col-4 col-form-label">No Rekening</label>
                        <div class="col-8">
                            <input id="costumer" name="norek" placeholder="070" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="costumer" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <input id="costumer" name="costumer" placeholder="Nama Customer" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="costumer" class="col-4 col-form-label">Saldo</label>
                        <div class="col-8">
                            <input id="saldo" name="saldo" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="Tempat Indah">
                                
                        <label class="col-4">layanan</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="TV">
                                <label for="radio_0" class="custom-control-label">Tempat Indah</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="Layanan Baik">
                                <label for="radio_1" class="custom-control-label">Layanan Baik</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="Tanggapan masalah cepat">
                                <label for="radio_2" class="custom-control-label">Tanggapan masalah cepat</label>
                            </div>
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

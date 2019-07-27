<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Form Biodata</title>
    <link href="index.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <script src="index.js"></script>
    <form action="c_contach" method="post">
      
         <div class="page-header">
            <h3 class="page-title">
              Forms
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Biodata</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Biodata form</h4>
                    <div class="form-group">
                      <label for="exampleInputNamaLengkap">Nama Lengkap</label>
                      <input type="text" class="form-control" id="NamaLengkap" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputTempatLahir">Tempat Lahir</label>
                      <input type="text" class="form-control" id="TempatLahir" placeholder="Tempat Lahir">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputTanggalLahir">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="TanggalLahir" placeholder="Tanggal Lahir">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNoHp">No HP</label>
                      <input type="text" class="form-control" id="NoHp" placeholder="No Hp">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputAlamat">Alamat</label>
					  <textarea class="form-control" id="Alamat" rows="4" placeholder="Alamat"></textarea>
                    </div>	
                    <div class="form-group">
						<label for="exampleInputConfirmPassword1">Pendidikan Terakhir</label>
						<select class="form-control" id="PendidikanTerakhir">
                            <option>SD</option>
                            <option>SMP</option>
							<option>SMA</option>
							<option>D1</option>
							<option>D3</option>
							<option>S1</option>
							<option>S2</option>
                        </select>	
                    </div>		
					<div class="form-group">
						<label for="exampleInputAgama">Agama</label>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="Islam"  checked="">Islam
                            <i class="input-helper"></i></label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="Kristen">Kristen
                            <i class="input-helper"></i></label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="Katolik" >Katolik
                            <i class="input-helper"></i></label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios4" value="Hindu" >Hindu
                            <i class="input-helper"></i></label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios5" value="Budha" >Budha
                            <i class="input-helper"></i></label>
                          </div>						  
                    </div>	
					<div class="form-group">
					  <label for="exampleInputHobi">Hobi</label>
						<table>
							<tr>
								n
								<td width="150"><input type="checkbox" class="form-check-input" name="hobi" id="hobi1">Renang</td>
								<td width="150"><input type="checkbox" class="form-check-input" name="hobi" id="hobi2">Mancing</td>
								<td width="150"><input type="checkbox" class="form-check-input" name="hobi" id="hobi3">Game</td>
								<td width="150"><input type="checkbox" class="form-check-input" name="hobi" id="hobi4">Gibah</td>
								<td width="150"><input type="checkbox" class="form-check-input" name="hobi" id="hobi5">Programming</td>
							</tr>
						</table>
					</div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>

                </div>
              </div>
            </div>  
			</div>
    </form>
  
  </body>
</html>
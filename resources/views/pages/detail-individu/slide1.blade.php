<fieldset>
    <div class="card slide slide_1">
        <div class="slide-content" style="padding-left: 3%;padding-right: 3%; padding-top:1%; padding-bottom:1% ">
            <div class="card-header">
                <h4 class="card-title"> {{__('Data Pengisi Form')}} </h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <label class="col-md-3" style="padding-bottom: 5%"> {{__('Nama Lengkap')}} </label>
                    <div class="col-md-9">
                        <p>: {{ App\DataPengisiForm::where(['calonsiswa_id' => $calonsiswa->id])->pluck('pengisiform')->first() }} </p>
                    </div>
                </div>

                <div class="row">
                    <label class="col-md-3" style="padding-bottom: 5%"> {{__('Nomor HP')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataPengisiForm::where(['calonsiswa_id' => $calonsiswa->id])->pluck('nohp')->first() }} </p>
                    </div>
                </div>

                <div class="row">
                    <label class="col-md-3" style="padding-bottom: 5%"> {{__('Email')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataPengisiForm::where(['calonsiswa_id' => $calonsiswa->id])->pluck('email')->first() }} </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</fieldset>



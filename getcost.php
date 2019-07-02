<?php

      $a=$_POST['orcity'];
      $b=$_POST['destcity']; 
      $c=$_POST['berat'];
      $d=$_POST['kurir'];

      echo '
      <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Hasil Perhitungan Ongkir</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">';

      if ($a!='' && $b!='' && $c!='' && $d!=''){

    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "origin=".$a."&destination=".$b."&weight=".$c."&courier=".$d."",
      CURLOPT_HTTPHEADER => array(
        "content-type: application/x-www-form-urlencoded",
        "key: dd45f9cbbe42455a792a1554449d3446"
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    $data = json_decode($response, true);
    curl_close($curl);
    
    if ($err) {
      echo "
      Error . $err";
    } else {

        $jml=count($data['rajaongkir']['results'][0]['costs']);

        for ($i=0; $i<count($data['rajaongkir']['results'][0]['costs']); $i++) {
            
            echo "<div class='row'>
            <div class='col-md-4 ml-auto'>Jenis Layanan</div>
            <div class='col-md-7 ml-auto'> : ".$data['rajaongkir']['results'][0]['costs'][$i]['service']."</div>
            </div>";
            echo "<div class='row'>
            <div class='col-md-4 ml-auto'>Ongkos Kirim</div>
            <div class='col-md-7 ml-auto'> : Rp.".$data['rajaongkir']['results'][0]['costs'][$i]['cost'][0]['value'].",00</div>
            </div>";
            echo "<div class='row'>
            <div class='col-md-4 ml-auto'>Lama Pengiriman </div>
            <div class='col-md-7 ml-auto'> : ".$data['rajaongkir']['results'][0]['costs'][$i]['cost'][0]['etd']." Hari</div>
            </div>";
            if ($i<count($data['rajaongkir']['results'][0]['costs'])-1){
             echo "<hr>";   
            }
            
        }

      
    }
  }
  else{
    echo '

        Harap lengkapi data pengiriman dulu!

  ';
  }
  echo '
  </div>
  <div class="modal-footer">
  <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
  </div>
</div>
</div>
';




?>
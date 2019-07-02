
function SubmitFormData() {
    var orcity = $("#orcity").val();
    var destcity = $("#destcity").val();
    var berat = $("#berat").val();
    var kurir = $("#kurir").val();
    $.post("getcost.php", { orcity: orcity, destcity: destcity, berat:berat, kurir: kurir },
    function(data) {
     $('#exampleModalCenter').html(data);
     $('#exampleModalCenter').modal('show');
	 $('#form_ongkir')[0].reset();
    });
}

function hideTotal(){
    document.getElementById('total').style.display="none";
    document.getElementById('btnberat').style.display="block";
}

function HitungBerat() {
    var wg = $("#weight").val();
    var l = $("#panjang").val();
    var h = $("#tinggi").val();
    var wd = $("#lebar").val();

    var total=0;

    if (wg>=(l*h*wd)){
        total=wg;
    }
    else {
        total=(l*h*wd)/6;
    }

    total = Math.round(total);

    document.getElementById('total').placeholder= "Total Berat = "+total+ " gram";
    document.getElementById('total').style.display="block";
    document.getElementById('btnberat').style.display="none";



}
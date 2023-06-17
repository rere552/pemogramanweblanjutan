<?php
require "functions.php";
?>

<h2>Halaman Program Studi!</h2>

<div class="row">
    <div class="col-sm-10">
        <label for="">Nama Prodi</label>
        <input type="text" class="form-control" id="nama_prodi" placeholder="Input nama prodi">
        <p class="peringatan" id="lihat_nama_prodi"></p>
    </div>
    <div class="col-sm-2">
        <button class="btn btn-info" id="simpan_prodi">Simpan</button>
    </div>
</div>

<script>
    $("#simpan_prodi").click(function(){
        var nama_prodi = $("#nama_prodi").val()
        if (nama_prodi == ""){
            $("#lihat_nama_prodi").text("Nama Prodi Masih Kosong!")
        }else{
            $.ajax({
                type: "POST",
                url: "controller/simpan_prodi.php",
                data: "nama_prodi="+ nama_prodi,
                success: function(data){
                    console.log(data
                    )
                }
            })
            $("#lihat_nama_prodi").text("")
        }
    })
</script>
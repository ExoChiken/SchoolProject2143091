$(function() {

    $('.insertModal').on('click', function(){
        $('#labelModal').html('Masukan data mahasiswa');
        $('.modal-footer button[type=submit]').html('Simpan');
    });

    $('.modalUpdate').on('click', function() {
        $('#labelModal').html('Ubah data mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah');

        const id = $(this).data('id');
        console.log("jQuery connected!");
        $.ajax({
            url: 'http://localhost:8080/zenitaudio/public/mahasiswa/getupdate',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){

                $('#nama').val(data.nama);
                $('#umur').val(data.umur);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });


    });

});

    

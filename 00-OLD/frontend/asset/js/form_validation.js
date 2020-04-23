
    function validasi(){
        var namaValid    = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
        var emailValid   = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
        var nama         = formulir.nama.value;
        var jeniskelamin = formulir.jenis_kelamin.value;
        var email        = formulir.email.value;
        var pesan = '';
         
        if (nama == '') {
            pesan = '-Nama tidak boleh kosong\n';
        }
         
        if (nama != '' && !nama.match(namaValid)) {
            pesan += '-nama tidak valid\n';
        }
         
        if (jeniskelamin == '') {
            pesan += '-jenis kelamin harus dipilih\n';
        }
         
        if (email == '') {
            pesan += '-email tidak boleh kosong\n';
        }
         
        if (email !=''  && !email.match(emailValid)) {
            pesan += '-alamat email tidak valid\n';
        }
         
        if (pesan != '') {
            alert('Maaf, ada kesalahan pengisian Formulir : \n'+pesan);
            return false;
        }
    return true
    }

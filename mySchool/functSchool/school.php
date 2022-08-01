<?php

function jk($kode){
    if($kode==1){
        echo "Laki - Laki";
    }else{
         echo "Perempuan";
    }
}

function tgl_indo($tanggal_kelahiran){
	$bulan = array (
		1 =>   'Jan',
		'Feb',
		'Mar',
		'Apr',
		'Mei',
		'Jun',
		'Jul',
		'Agu',
		'Sept',
		'Okto',
		'Nov',
		'Des'
	);
	$pecahkan = explode('-', $tanggal_kelahiran);
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

function jeniskerjaAyah($pekerjaan_ayah){
    if($pekerjaan_ayah == 1){
        echo "Polisi";
    }else if($pekerjaan_ayah == 2){
        echo "TNI";
    }else if($pekerjaan_ayah == 3){
        echo "Karyawan Swasta";
    }else if($pekerjaan_ayah == 4){
        echo "Karyawan Negeri";
    }else if($pekerjaan_ayah == 5){
        echo "Information AND Technology";
    }else if($pekerjaan_ayah == 6){
        echo "Guru";
    }else if($pekerjaan_ayah == 7){
        echo "Satpam";
    }else if($pekerjaan_ayah == 8){
        echo "SPG";
    }else if($pekerjaan_ayah == 9){
        echo "Kasir";
    }else if($pekerjaan_ayah == 10){
        echo "Koki";
    }else if($pekerjaan_ayah == 11){
        echo "pelayan";
    }else if($pekerjaan_ayah == 12){
        echo "Sutradara";
    }else if($pekerjaan_ayah == 13){
        echo "Youtuber";
    }else if($pekerjaan_ayah == 14){
        echo "Pro Player";
    }else if($pekerjaan_ayah == 15){
        echo "Sopir";
    }else if($pekerjaan_ayah == 16){
        echo "Pilot";
    }else if($pekerjaan_ayah == 17){
        echo "Masinis";
    }else if($pekerjaan_ayah == 18){
        echo "Nahkoda";
    }else if($pekerjaan_ayah == 19){
        echo "Wirausaha";
    }
}

function jeniskerjaIbu($pekerjaan_ibu){
    if($pekerjaan_ibu == 1){
        echo "Ibu Rumah Tangga";
    }else if($pekerjaan_ibu == 2){
        echo "Polisi Wanita";
    }else if($pekerjaan_ibu == 3){
        echo "TNI";
    }else if($pekerjaan_ibu == 4){
        echo "Karyawan Swasta";
    }else if($pekerjaan_ibu == 5){
        echo "Karyawan Negeri";
    }else if($pekerjaan_ibu == 6){
        echo "Information AND Technology";
    }else if($pekerjaan_ibu == 7){
        echo "Guru";
    }else if($pekerjaan_ibu == 8){
        echo "Satpam";
    }else if($pekerjaan_ibu == 9){
        echo "SPG";
    }else if($pekerjaan_ibu == 10){
        echo "Kasir";
    }else if($pekerjaan_ibu == 11){
        echo "Koki";
    }else if($pekerjaan_ibu == 12){
        echo "pelayan";
    }else if($pekerjaan_ibu == 13){
        echo "Sutradara";
    }else if($pekerjaan_ibu == 14){
        echo "Youtuber";
    }else if($pekerjaan_ibu == 15){
        echo "Pro Player";
    }else if($pekerjaan_ibu == 16){
        echo "Sopir";
    }else if($pekerjaan_ibu == 17){
        echo "Pilot";
    }else if($pekerjaan_ibu == 18){
        echo "Masinis";
    }else if($pekerjaan_ibu == 19){
        echo "Nahkoda";
    }else if($pekerjaan_ibu == 20){
        echo "Wirausaha";
    }
}

function kls($kelas){
    if($kelas==1){
        echo "Kelas 1";
    }else if($kelas==2){
        echo "Kelas 2";
    }else if($kelas==3){
        echo "Kelas 3";
    }else if($kelas==4){
        echo "Kelas 4";
    }else if($kelas==5){
        echo "Kelas 5";
    }else if($kelas==6){
        echo "Kelas 6";
    }
}
?>
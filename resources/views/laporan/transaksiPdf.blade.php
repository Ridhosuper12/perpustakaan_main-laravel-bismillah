<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <title>Laporan Transaksi</title>
    <style>
        .text-center{
            text-align: center;
        }
        .container{
           
        }
        .text-right{
            text-align: right;
        }
        .mb{
            margin-bottom: 10px;
        }
        .page-break{
            page-break-after: always;
        }
        
        .pagenum:before{
                content: counter(page);
        }
    
    </style>
    <style type="text/css">
        body {font-family: Arial;background-color: #fff;}
        .kopsurat {width:980px;}
        .tengah {text-align: center; Line-height: 5px;}
        .border {border-bottom: 5px solid #000;}
    </style>
</head>
<body>
<div class="kopsurat">
        <table class="border" width="70%">
            <tr>
                <td><img src="https://akupintar.id/documents/20143/0/Sekolah-Tinggi-Agama-Islam-Ma%60arif-Jambi.jpg/1fe3f6b0-34bc-2b71-d605-0909c9dcd9f4?version=1.0&t=1539454344141&imageThumbnail=1" width= "150px"></td>
                <td class="tengah">
                    <h2>PEMERINTAHAN PROVINSI JAMBI</h2>
                    <h2>DINAS PENDIDIKAN</h2>
                    <h3>SEKOLAH TINGGI AGAMA ISLAM MA'ARIF JAMBI</h3>
                    <b>JL.KH A.Wahid Talang Bakung Kec.Jambi Selatan Kota Jambi 36137</b><br><br><br><br>
                    <b>Phone/Fax : (0741) 270498 </b><br><br><br><br>
                    <b>Website : <a href= "Website" target="Website">https://staimaarifjambi.ac.id/</a><br>
                </td>
            </tr>
        </table>
    </div>
    <div class="text-right mb">
        Halaman: <span class="pagenum"></span>

    </div>
   
    <div class="container">
        <table border="1" cellspacing="0" cellpadding="12">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>Buku</th>
                    <th>Kode Transaksi</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
                @foreach ($transaksi as $item) 
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->anggota->nama }}</td>
                    <td>{{ $item->anggota->nim }}</td>
                    <td>{{ $item->buku->judul }}</td>
                    <td>{{ $item->kode_transaksi }}</td>
                    <td>{{ $item->tgl_pinjam }}</td>
                    <td>{{ $item->tgl_kembali }}</td>
                    <td>{{ $item->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-right mb">
            <p>Petugas: {{ Auth::user()->level }}</p>
            <div class="col-md-3">
                Jambi, {{ date('d F Y') }}<br>
                Kepala Perpustakaan
                <br><br><br>
                
                Maysita S.Pd.I<br>
            </div>
            <span></span>
        </div>
    </div>
 
</body>
</html>
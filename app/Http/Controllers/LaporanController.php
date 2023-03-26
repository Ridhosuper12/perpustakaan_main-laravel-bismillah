<?php

namespace App\Http\Controllers;

use App\Buku;
use App\Exports\BukuExport;
use App\Exports\TransaksiExport;
use App\Transaksi;


use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class LaporanController extends Controller
{
    public function index(Request $request)
    {
        // $title = null;
        // if ($request->filled('bulan') && $request->filled('tahun')) {
        //     $transaksi = Transaksi::whereMonth('tgl_pinjam',$request->bulan)
        //     ->whereYear('tgl_pinjam',$request->tahun)
        //     ->latest()->get();
        //     $bulan = Carbon::parse("2020-" . $request->bulan. "-01")->translatedFormat('F');
        //     $title = "Data Tagihan Bulan " . $bulan . " " . $request->tahun;

        // } else {
        //     $transaksi = collect ([]);
        // }
        // $data ['title'] = $title;
        // $transaksi = Transaksi::latest()->paginate(100);
        // $data ['transaksi'] = $transaksi;
        // $tgl_pinjam = 'tgl_pinjam';
        return view('laporan.index');
    }

    public function bukuPdf(Request $request)
    {

        //set font pdf
        \PDF::setOptions(['dpi' => '150', 'defaultFont' => 'sans-serif']);

        $buku = Buku::orderBy('judul', 'asc')->get();



        // $title = null;
        // if ($request->filled('bulan') && $request->filled('tahun')) {
        //     $transaksi = Transaksi::whereMonth('tgl_pinjam', $request->bulan)
        //         ->whereYear('tgl_pinjam', $request->tahun)
        //         ->latest()->get();
        //     $bulan = Carbon::parse("2020-" . $request->bulan . "-01")->translatedFormat('F');
        //     $title = "Data Tagihan Bulan " . $bulan . " " . $request->tahun;
        // } else {
        //     $transaksi = collect([]);
        // }
        // $data['title'] = $title;
        // $transaksi = Transaksi::latest()->paginate(100);
        // $data['transaksi'] = $transaksi;
        // $tgl_pinjam = 'tgl_pinjam';

        $pdf = \PDF::loadView('laporan.bukuPdf', compact(
            'buku',
        ));
        // return $pdf->stream('laporan_buku.pdf');
        return $pdf->download('laporan_buku.pdf');
    }

    public function bukuExcel()
    {

        return \Excel::download(new BukuExport, 'laporan_buku.xlsx');
    }

    public function transaksiPdf()
    {

        \PDF::setOptions(['dpi' => '150', 'defaultFont' => 'sans-serif']);

        $transaksi = Transaksi::with('user', 'buku', 'anggota')->orderBy('created_at', 'asc')->get();

        $pdf = \PDF::loadView('laporan.transaksiPdf', compact('transaksi'));
        // return $pdf->stream('laporan_transaksi.pdf');
        return $pdf->download('laporan_transaksi.pdf');
    }

    public function transaksiExcel()
    {

        return \Excel::download(new TransaksiExport, 'laporan_transaksi.xlsx');
    }

    public function cetakform(){
        return view('laporan.cetakPertanggalForm');
    }
   

    public function cetakpertanggal(Request $request, $tglawal, $tglakhir){
        // dd(["Tanggal Awal :".$tglawal, "Tanggal Akhir : ".$tglakhir]);

        // $cetakpertanggal = Transaksi::with('user', 'buku', 'anggota')-> whereBetween('tgl_pinjam', 'tgl_kembali', [tglawal, tglakhir]);
        $cetakpertanggal = Buku::all() -> whereBetween('tahun_terbit', [$tglawal, $tglakhir]);
        return view('laporan.cetakbukupertanggalpdf', compact('cetakpertanggal'));
    }
    public function cetakpertanggalpdf(Request $request, $tglawal, $tglakhir){
        $cetakpertanggalpdf = Buku::all() -> whereBetween('tahun_terbit', [$tglawal, $tglakhir]);
        $pdf = \PDF::loadView('laporan.cetakbukupertanggalexportpdf', compact('cetakpertanggalpdf'));
        return $pdf->download('laporan_bukupertanggal.pdf');
    }
    public function cetaktransaksipertanggal(Request $request, $dari_tgl, $sampai_tgl){
        $cetaktransaksipertanggal = Transaksi::all() -> whereBetween('tgl_pinjam', [$dari_tgl, $sampai_tgl]);
        return view('laporan.cetaktransaksipertanggal', compact('cetaktransaksipertanggal'));
    }
    public function cetaktransaksipertanggalpdf(Request $request, $dari_tgl, $sampai_tgl){
        $cetaktransaksipertanggalpdf = Transaksi::all() -> whereBetween('tgl_pinjam', [$dari_tgl, $sampai_tgl]);
        $pdf = \PDF::loadView('laporan.cetaktransaksipertanggalexportpdf', compact('cetaktransaksipertanggalpdf'));
        return $pdf->download('laporan_transaksipertanggal.pdf');
        
    }



}

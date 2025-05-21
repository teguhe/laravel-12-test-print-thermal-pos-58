<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

class PrinterThermalController extends Controller
{
    public function index()
    {
        return view('print-view');    
    }

    public function print()
    {
        try {
            $connector = new WindowsPrintConnector ("POS-58");
            $printer = new Printer ($connector);
            $printer->setJustification (Printer::JUSTIFY_CENTER); $printer->setTextSize(1, 2); // ukuran huruf
            $printer->setEmphasis (true); // huruf Tebal $printer->text("Tidak ada yang tidak mungkin\n"); $printer->setTextSize(1, 1); // ukuran huruf $printer->setEmphasis (false); // huruf tidak tebal
            $printer->text("#cobaduluaja\n");
            $printer->text("==
            ======\n");
            $printer->text("Follow IG: @ruangcoding_id\n");
            $printer->feed (3); // garis kosong
            $printer->cut();
            $printer->close();
            return back()->with('success', 'Tulisan berhasil dicetak!'); } catch (\Exception $e) {
            }
            return back()->with('danger', 'Tulisan Gagal dicetak!');
    }
            
}



<?php

namespace App\Exports;

use App\Models\Acara;
use App\Models\Pengunjung;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Color;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PengunjungExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize, WithStyles, WithTitle
{
    use Exportable;

    public function selectAcara($acara)
    {
        $this->acara = $acara;

        return $this;
    }

    public function query()
    {
        return Pengunjung::query()->where('kode_acara', $this->acara);
    }

    public function headings(): array
    {
        $this->data = Acara::where('kode_acara', $this->acara)->first();

        return [['Laporan Peserta Rapat SMK Citra Negara'], [''], ['Nama Rapat: ' . $this->data->nama_acara], ['Tanggal Rapat: ' . $this->data->tanggal_mulai . ' - ' . $this->data->tanggal_selesai], ['Tanggal', 'Nama Lengkap', 'Nomor Telepon', 'Email', 'Profil', 'Status', 'Asal']];
    }

    public function map($pengunjung): array
    {
        return [$pengunjung->created_at->format('d-m-Y'), $pengunjung->nama_lengkap, $pengunjung->telepon, $pengunjung->email, $pengunjung->profil, $pengunjung->status, $pengunjung->asal];
    }

    public function styles(Worksheet $sheet)
    {
        $this->data = Pengunjung::where('kode_acara', $this->acara)->get();

        $this->start = 6;

        $sheet->mergeCells('A1:G1');
        $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');
        $sheet->getStyle('A1')->getFont()->setBold(true);

        $sheet
            ->getStyle('A5:G5')
            ->getBorders()
            ->getAllBorders()
            ->setBorderStyle(Border::BORDER_THICK)
            ->setColor(new Color('000000'));

        $sheet
            ->getStyle('A' . $this->start . ':' . 'G' . count($this->data) + $this->start - 1)
            ->getBorders()
            ->getAllBorders()
            ->setBorderStyle(Border::BORDER_THIN)
            ->setColor(new Color('000000'));
    }

    public function title(): string
    {
        return 'Pengunjung SMK Citra Negara';
    }
}

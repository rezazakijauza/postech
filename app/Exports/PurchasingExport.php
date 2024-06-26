<?php

namespace App\Exports;

use App\Models\Purchasing;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PurchasingExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Purchasing::select("id", "code_trans", "vendor_id", "admin_id", "date_purchase", "purchase_status", "grand_total")->get();
    }

    public function headings(): array
    {
        return ["ID", "Code TRX", "Vendor", "Admin", "Tanggal", "Status Pembelian", "Grand Total"];
    }
}

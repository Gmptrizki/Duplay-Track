<?php

namespace App\Livewire\Student\Attendance;

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\Writer\SvgWriter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use Illuminate\Support\Str;


class CheckIn extends Component
{
    public $barcodeSvg;
    public $studentName;

    public function mount()
    {
        $this->studentName = Auth::user()->name;
        $this->generateBarcode();
    }

    public function generateBarcode()
    {
        $token = Str::uuid()->toString();

        Cache::put('check_in_token_' . $token, [
            'student_id'    => Auth::id(),
            'timestamp'     => now(),
            'type'          => 'masuk', 
        ], now()->addMinutes(1));

        $qrCode = new QrCode(
            data: $token,
            encoding: new Encoding('UTF-8'),
            size: 260,
            margin: 5
        );

        $writer = new SvgWriter();
        $result = $writer->write($qrCode);

        $this->barcodeSvg = $result->getString();
    }

    public function render()
    {
        return view('livewire.student.attendance.check-in');
    }
}

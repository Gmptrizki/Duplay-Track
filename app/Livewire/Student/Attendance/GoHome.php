<?php

namespace App\Livewire\Student\Attendance;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\Writer\SvgWriter;

class GoHome extends Component
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

        Cache::put('go_home_token_' . $token, [
            'student_id'    => Auth::id(),
            'timestamp'     => now(),
            'type'          => 'pulang',
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
        return view('livewire.student.attendance.go-home');
    }
}

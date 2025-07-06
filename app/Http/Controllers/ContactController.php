<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        try {
            // Validasi
            $validated = $request->validate([
                'fullname' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'message' => 'required|string|max:1000'
            ]);

            // Kirim email
            Mail::to('yanuarsecacc567@gmail.com')->send(new ContactMail($validated));

            // Cek apakah request AJAX atau form biasa
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Pesan berhasil dikirim! Terima kasih telah menghubungi kami.'
                ]);
            }

            // Jika form biasa (non-AJAX)
            Alert::success('Berhasil!', 'Pesan berhasil dikirim! Terima kasih telah menghubungi kami.');
            return redirect()->back();

        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Data tidak valid: ' . implode(', ', array_flatten($e->errors()))
                ], 422);
            }

            Alert::error('Error!', 'Data yang Anda masukkan tidak valid.');
            return redirect()->back()->withErrors($e->errors())->withInput();

        } catch (\Exception $e) {
            // Log error
            \Log::error('Contact Mail Error: ' . $e->getMessage());

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Terjadi kesalahan saat mengirim pesan. Silakan coba lagi.'
                ], 500);
            }

            Alert::error('Error!', 'Terjadi kesalahan saat mengirim pesan. Silakan coba lagi.');
            return redirect()->back();
        }
    }
}

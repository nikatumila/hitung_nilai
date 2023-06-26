<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function getViewIndex() {
        return view('index')->with([
            'mhs' => Mahasiswa::all()
        ]);
    }

    public function getViewChart() {

        $data = Mahasiswa::all();

        $nama_mahasiswa = [];
        $nilai_total = [];
        $color = [];
        $border = [];

        foreach ($data as $dt) {
            $nama_mahasiswa[] = $dt->name;
            $nilai_total[] = $dt->total;
            $color[] = 'rgba(255, 99, 132, 0.2)';
            $border[] = 'rgb(255, 99, 132)';
        }

        // echo $nama_mahasiswa;
        // echo $nilai_total;
        
        // var_dump($nama_mahasiswa);
        return view('view_chart_grade_mahasiswa', compact('nama_mahasiswa', 'nilai_total', 'color', 'border'));
        //return view('view_chart_grade_mahasiswa', $nama_mahasiswa, $nilai_total, $color, $border);
    }

    public function getViewCreateMahasiswa() {
        return view('create_mahasiswa');
    }

    public function createMahasiswa(Request $request) {

        $request->validate([
            'nim' => 'required',
            'name' => 'required',
            'quiz' => 'required',
            'task' => 'required',
            'presence' => 'required',
            'practice' => 'required',
            'final_exam' => 'required'
        ]);

        $total = ($request->quiz + $request->task + $request->presence + $request->practice + $request->final_exam) / 5;

        if ($total <= 65) {
            $grade = "D";
        } elseif ($total > 65 && $total <= 75) {
            $grade = "C";
        } elseif ($total > 75 && $total <= 85) {
            $grade = "B";
        } elseif ($total > 85 && $total <= 100) {
            $grade = "A";
        }

        Mahasiswa::create([
            'nim' => $request->nim,
            'name' => $request->name,
            'quiz' => $request->quiz,
            'task' => $request->task,
            'presence' => $request->presence,
            'practice' => $request->practice,
            'final_exam' => $request->final_exam,
            'total' => $total,
            'grade' => $grade
        ]);

        return redirect()->route('get_view_index')->with('success','Data berhasil disimpan');

    }

    public function deleteMahasiswa($id) {
        $mhs = Mahasiswa::find($id);
        $mhs->delete();
        return back()->with('success','Data berhasil dihapus');
    }

    public function getViewEditMahasiswa($id) {
        return view('edit_mahasiswa')->with([
            'mhs' => Mahasiswa::find($id)
        ]);
    }

    public function postEditMahasiswa(Request $request, $id) {
        $request->validate([
            'nim' => 'required',
            'name' => 'required',
            'quiz' => 'required',
            'task' => 'required',
            'presence' => 'required',
            'practice' => 'required',
            'final_exam' => 'required'
        ]);

        $total = ($request->quiz + $request->task + $request->presence + $request->practice + $request->final_exam) / 5;

        if ($total <= 65) {
            $grade = "D";
        } elseif ($total > 65 && $total <= 75) {
            $grade = "C";
        } elseif ($total > 75 && $total <= 85) {
            $grade = "B";
        } elseif ($total > 85 && $total <= 100) {
            $grade = "A";
        }

        
        $mhs = Mahasiswa::find($id);
        $mhs->nim = $request->nim;
        $mhs->name = $request->name;
        $mhs->quiz = $request->quiz;
        $mhs->task = $request->task;
        $mhs->presence = $request->presence;
        $mhs->practice = $request->practice;
        $mhs->final_exam = $request->final_exam;
        $mhs->total = $total;
        $mhs->grade = $grade;
        $mhs->save();

        return redirect()->route('get_view_index')->with('success','Data berhasil diupdate');

    }
}

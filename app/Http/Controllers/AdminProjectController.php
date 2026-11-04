<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminProjectController extends Controller
{
    /**
     * Menampilkan daftar semua project.
     */
    public function index()
    {
        $projects = Project::latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Menampilkan form untuk membuat project baru.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Menyimpan data project baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'teknologi' => 'required|string|max:255',
            'status' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload'), $imageName);
        }

        Project::create([
            'title' => $request->title,
            'teknologi' => $request->teknologi,
            'status' => $request->status,
            'image' => $imageName,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil ditambahkan!');
    }

    /**
     * Menampilkan form edit untuk project tertentu.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Memperbarui data project di database.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'teknologi' => 'required|string|max:255',
            'status' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);

        $imageName = $project->image;

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($project->image && File::exists(public_path('upload/' . $project->image))) {
                File::delete(public_path('upload/' . $project->image));
            }

            // Upload gambar baru
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload'), $imageName);
        }

        $project->update([
            'title' => $request->title,
            'teknologi' => $request->teknologi,
            'status' => $request->status,
            'image' => $imageName,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil diperbarui!');
    }

    /**
     * Menghapus project dari database.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);

        // Hapus file gambar fisik dari folder public/upload jika ada
        if ($project->image && File::exists(public_path('upload/' . $project->image))) {
            File::delete(public_path('upload/' . $project->image));
        }

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil dihapus!');
    }
}
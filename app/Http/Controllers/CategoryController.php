<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    // Show all categories (with subcategories)
    public function index()
    {
        $categories = Category::with('children')->whereNull('parent_id')->get();
        Log::info('Categories listed', ['count' => $categories->count()]);

        return view('admin.categories.index', compact('categories'));
    }

    // Show create form
    public function create()
    {
        $categories = Category::whereNull('parent_id')->get(); // for dropdown
        Log::info('Category create page opened');

        return view('admin.categories.create', compact('categories'));
    }

    // Store new category
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'parent_id' => $request->parent_id,
            'description' => $request->description,
            'status' => $request->status ?? 'active',
        ]);

        Log::info('Category created', [
            'id' => $category->id,
            'name' => $category->name,
            'parent_id' => $category->parent_id
        ]);

        return redirect()->route('categories.index')->with('success', 'Category created successfully');
    }

    // Show edit form
    public function edit(Category $category)
    {
        $categories = Category::whereNull('parent_id')->where('id', '!=', $category->id)->get();
        Log::info('Category edit page opened', ['id' => $category->id]);

        return view('admin.categories.edit', compact('category', 'categories'));
    }

    // Update category
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'parent_id' => $request->parent_id,
            'description' => $request->description,
            'status' => $request->status ?? 'active',
        ]);

        Log::info('Category updated', [
            'id' => $category->id,
            'name' => $category->name
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }

    // Delete category
    public function destroy(Category $category)
    {
        $id = $category->id;
        $name = $category->name;

        $category->delete();

        Log::warning('Category deleted', [
            'id' => $id,
            'name' => $name
        ]);

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
}

<tr>
    <td>{{ $i }}</td>
    <td>
        {!! str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;', $level) !!}
        @if($level > 0) └─ @endif
        {{ $category->name }}
    </td>
    <td>{{ $category->parent?->name ?? '-' }}</td>
    <td>
        <span class="badge bg-{{ $category->status == 'active' ? 'success' : 'secondary' }}">
            {{ ucfirst($category->status) }}
        </span>
    </td>
    <td class="text-end">
        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-outline-secondary me-1">
            <i data-feather="edit-2"></i>
        </a>
        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this category?')">
                <i data-feather="trash-2"></i>
            </button>
        </form>
    </td>
</tr>

{{-- Render children --}}
@if($category->children->count())
    @foreach($category->children as $child)
        @include('admin.categories.partials.row', ['category' => $child, 'level' => $level + 1, 'i' => $i])
        @php $i++; @endphp
    @endforeach
@endif

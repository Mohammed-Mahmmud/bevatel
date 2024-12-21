<link rel="stylesheet" href="{{ asset('dashboard/layouts/components/sidebar/css/style.css') }}">
@can($item->name)
    <li class="nav-item">
        @if (!empty($item->route))
            <a href="{{ !empty($item->type) ? route($item->route, ['type' => $item->type]) : route($item->route) }}"
                class="nav-link
        @if (Request::fullUrl() === (!empty($item->type) ? route($item->route, ['type' => $item->type]) : route($item->route))) activeSidebar @endif" data-key="t-detached">
                @if ($item->icon)
                    <i class="{{ $item->icon }}"></i>
                @endif
                {{ ucwords($item->name) }}
            </a>
        @else
            <a class="nav-link" href="#{{ $item->id }}" data-bs-toggle="collapse" role="button" aria-expanded="true"
                aria-controls="{{ $item->id }}">
                @if ($item->icon)
                    <i class="{{ $item->icon }}"></i>
                @endif
                <span data-key="t-multi-level">{{ ucwords($item->name) }}</span>
            </a>
        @endif
        <div class="collapse menu-dropdown" id="{{ $item->id }}">
            @if ($item->child->count() > 0)
                <ul class="nav nav-sm flex-column">
                    @foreach ($item->child as $child)
                        <x-dashboard.layouts.sidebar-items :item="$child" />
                    @endforeach
                </ul>
            @endif
        </div>
    </li>
@endcan
<script src="{{ asset('dashboard/layouts/components/sidebar/js/script.js') }}"></script>

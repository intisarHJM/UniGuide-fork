<x-layout>
    <x-slot:title>Scholarships</x-slot:title>

    <div class="scholarship-container">
        <header class="page-header">
            <h1>Find Your Scholarship</h1>
            <p>Enter your GPA to discover opportunities tailored for you.</p>
        </header>

        {{-- Filter Section  --}}
        <section class="filter-section">
            <form action="{{ route('scholarships') }}" method="GET" class="filter-form">
                <div class="input-group">
                    <label for="gpa">Your GPA</label>
                    <input type="number" step="0.01" name="gpa" id="gpa"
                            value="{{ request('gpa') }}" placeholder="e.g. 3.75">
                </div>
                <div class="button-group">
                    <button type="submit"
                    class="btn-search">Search</button>
                    <button href="{{ route('scholarships') }}" class="button-group">Show All</button>
                </div>
            </form>
        </section>

        {{-- Results Section --}}
        <section class="results-grid">
            @forelse ($scholarships as $scholarship)
                <div class="scholarship-card">
                    <div class="card-badge">Min GPA: {{ $scholarship->min_gpa }}</div>
                    <h3>{{ $scholarship->name }}</h3>

                    <p>{{ Str::limit($scholarship->description, 120) }}</p>
                    <button class="btn-details">View Details</button>
                </div>
            @empty
                <div class="no-results">
                    <p>No scholarships match your GPA of <strong>{{ request('gpa') }}</strong>. Try a lower value!</p>
                </div>
            @endforelse
        </section>
    </div>
</x-layout>

<x-layout>
    <x-slot:title>Scholarships</x-slot:title>

    <div class="scholarship-container">
        <header class="page-header">
            <h1>Find Your Scholarship</h1>
            <p>Enter your GPA (out of 100) to discover opportunities tailored for you.</p>
        </header>

        {{-- Filter Section  --}}
        <section class="filter-section">
            <form action="{{ route('scholarships') }}" method="GET" class="filter-form">
                <div class="input-group">
                    <label for="gpa">Your GPA (out of 100)</label>
                    <input type="number" step="0.01" min="0" max="100" name="gpa" id="gpa"
                            value="{{ request('gpa') }}" placeholder="e.g. 87.5">
                </div>
                <div class="button-group">
                    <button type="submit" class="btn-search">Search</button>
                    <a href="{{ route('scholarships') }}" class="btn-reset">Show All</a>
                </div>
            </form>
        </section>

        {{-- Results Section --}}
        <section class="results-grid">
    @forelse ($scholarships as $scholarship)
        <div class="scholarship-card">
            <div class="card-badge">Min GPA: {{ $scholarship->min_gpa }}%</div><br/>
            <h2>{{ $scholarship->name }}</h2>

            {{-- Description is removed from here to keep it clean --}}

           <br/><a href="{{ route('scholarships.show', $scholarship->id) }}" class="btn-details">
                View Details
            </a>
        </div>
    @empty
        <div class="no-results">
            <p>No scholarships match your GPA. Try a lower value!</p>
        </div>
    @endforelse
</section>
    </div>
</x-layout>

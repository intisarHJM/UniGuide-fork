<x-layout>
    <x-slot:title>{{ $scholarship->name }}</x-slot:title>

    <div class="scholarship-container">
        <a href="{{ route('scholarships') }}" style="text-decoration: none; color: #4a5568;">← Back to list</a>

        <div class="details-card" style="margin-top: 20px; background: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
            <span style="background: #ebf8ff; color: #3182ce; padding: 5px 15px; border-radius: 20px; font-weight: bold;">
                Minimum Required GPA: {{ $scholarship->min_gpa }}%
            </span>

            <h1 style="margin-top: 20px; font-size: 2.5rem;">{{ $scholarship->name }}</h1>

            <div class="content" style="margin-top: 30px; line-height: 1.8; color: #2d3748; font-size: 1.1rem;">

                <p>{{ $scholarship->description }}</p>
            </div>

            <div style="margin-top: 40px;">
                <button class="btn-search" style="width: auto;">Apply Now</button>
            </div>
        </div>
    </div>
</x-layout>

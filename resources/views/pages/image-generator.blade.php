@extends('layouts.image-page-layout')

@section('main-section')
    <link rel="stylesheet" href="{{ asset('assets/css/image-generator.css') }}">
    <div class="container">
        <h1>Ai Image Generator</h1>
        <p>Write your prompt here to generate images with power of Ai, For example : "Best Quality, Masterpiece,
            Exteremly Detailed, High Resolution, 4K, Ultra High Resolution, Detailed Shadows, (Two Girls in Cosumes
            Taking Selfies on The Street), Colorful Braids, Mixed Fujifilm, Cute, Laugh".</p>
        <form class="gen-form">
            <input type="text" id="user-prompt" , placeholder="Type your prompt here..." autocomplete="off">
            <button type="button" id="generate">Generate</button>
        </form>

        <div class="result">
            <div id="loading">Generating...</div>
            <div id="image-grid"></div>
        </div>

    </div>
@endsection

@section('custom-scripts')
    {{-- <script src="{{ asset('assets/js/image-generator.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // image-generator.js

        // Get the generate button element
        const generateButton = document.getElementById('generate');

        // Check if the user has exceeded the generation limit
        function checkLimit() {
            const today = new Date().toLocaleDateString();
            const generationLimit = 2; // Set the daily generation limit

            const previousGenerations = parseInt(localStorage.getItem('generations') || 0);
            if (localStorage.getItem('lastGenerationDate') !== today) {
                // Reset the limit if it's a new day
                localStorage.setItem('lastGenerationDate', today);
                localStorage.setItem('generations', 0);
            }

            return previousGenerations >= generationLimit;
        }

        // Event listener for the generate button
        generateButton.addEventListener('click', function () {
            if (checkLimit()) {
                // Show SweetAlert when the limit is reached
                Swal.fire({
                    icon: 'warning',
                    title: 'Limit Exceeded',
                    text: 'You have reached the daily generation limit. Please try again tomorrow.',
                });
            } else {
                // Call your image generation logic here
                script.src = "{{ asset('assets/js/image-generator.js') }}";; // Replace with your actual image generation function
            }
        });

        // Function to generate an image (replace with your actual logic)
        function generateImage() {
            // Create a new script element
            const script = document.createElement('script');
            script.src = "{{ asset('assets/js/image-generator.js') }}";

            // Append the script element to the document's head
            document.head.appendChild(script);
        }

    </script>
@endsection

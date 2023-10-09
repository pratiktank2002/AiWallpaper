@extends('layouts.image-page-layout')

@section('main-section')
    <link rel="stylesheet" href="{{ asset('assets/css/image-generator.css') }}">
    <div class="container">
        <h1>Ai Image Generator</h1>
        <p>Write your prompt here to generate images with power of Ai, For example : "Best Quality, Masterpiece,
            Extremely Detailed, High Resolution, 4K, Ultra High Resolution, Detailed Shadows, (Two boys in Cosumes
            Taking Selfies on The Street), Colorful Braids, Mixed Fujifilm, Cute, Laugh".</p>
        <form class="gen-form">
            {{-- <input type="text" id="" ,  > --}}
            <textarea name="" id="user-prompt" cols="90" rows="3" placeholder="Type your prompt here..."
                autocomplete="off"></textarea>
            <button type="button" id="generate">Generate</button>
        </form>

        <div class="result">
            <div id="loading">Generating...</div>
            <div id="image-grid"></div>
        </div>

    </div>
@endsection

{{-- <script src="{{ asset('assets/js/image-generator.js') }}"></script> --}}
@section('custom-scripts')
    <script>
        // Function to send an AJAX request to update the image generation count
        function updateImageGenerationCount() {
            // Send an AJAX request to update the image generation count
            fetch('{{ route('update-image-generation-count') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                })
                .then(response => response.json())
                .then(data => {
                    // Check if the AJAX call was successful
                    if (data.success) {
                        if (!data.limitExceeded) {
                            generateImage();

                        } else {
                            // Show a message if the limit is exceeded and close it after 2 seconds
                            Swal.fire({
                                icon: 'warning',
                                title: 'Limit Exceeded',
                                text: 'You have reached the daily generation limit of 5. Please try again tomorrow.',
                                showConfirmButton: false, // Hide the "OK" button
                                timer: 3000,
                            });
                        }
                    } else {
                        // Handle other error cases here
                        Swal.fire({
                            icon: 'info',
                            title: 'Technical Error',
                            text: 'failed to generate image due to Technical error',
                            showConfirmButton: false, // Hide the "OK" button
                            timer: 3000,
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });

            // Function to generate an image (replace with your actual logic)
            function generateImage() {
                // Create a new script element
                const script = document.createElement('script');
                script.src = "{{ asset('assets/js/image-generator.js') }}";

                // Append the script element to the document's head
                document.head.appendChild(script);
            }

        }

        // Event listener for the generate button
        const generateButton = document.getElementById('generate');
        generateButton.addEventListener('click', function() {
            // Call the function to update the image generation count
            updateImageGenerationCount();
        });

    </script>
@endsection

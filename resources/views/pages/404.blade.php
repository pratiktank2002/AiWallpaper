<script src="https://cdn.tailwindcss.com"></script>

<section class="bg-white py-16">
    <div class="container mx-auto">
        <div class="max-w-screen-lg mx-auto text-center">
            <div class="bg-cover bg-center h-96" style="background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);">
            </div>

            <h1 class="text-6xl mt-8 mb-4 font-bold">404</h1>

            <div class="bg-white bg-opacity-90 p-6 rounded-lg shadow-lg">
                <h3 class="text-4xl font-bold mb-4">Looks like you're lost</h3>
                <p class="text-lg mb-4">The page you are looking for is not available!</p>
                <a href="{{ route('index') }}" class="text-white bg-green-500 hover:bg-green-600 py-2 px-4 rounded-full inline-block">Go to Home</a>
            </div>
        </div>
    </div>
</section>

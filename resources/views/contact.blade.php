<x-layout title="Contact">

    <section class="py-20 px-6">
        <h1 class="text-5xl md:text-7xl font-black text-center mb-16">
            Me contacter
        </h1>

        <div class="max-w-2xl mx-auto">
            <div class="bg-white dark:bg-gray-800 rounded-3xl shadow-2xl p-10">

                <!-- Message de succès -->
                @if(session('success'))
                    <div class="mb-8 p-6 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-xl text-center font-bold text-lg">
                        Message envoyé ! Je te réponds très vite
                    </div>
                @endif

                <!-- Message d’erreur validation ou envoi mail -->
                @if(session('error'))
                    <div class="mb-8 p-6 bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 rounded-xl text-center font-bold text-lg">
                        {{ session('error') }}
                    </div>
                @endif

                <!-- Erreurs de validation Laravel (champs manquants, email invalide…) -->
                @if($errors->any())
                    <div class="mb-8 p-6 bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 rounded-xl">
                        <ul class="list-disc list-inside space-y-1 font-medium">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/contact" method="POST" class="space-y-6">
                    @csrf

                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Ton nom" required
                           class="w-full px-6 py-4 rounded-lg border @error('name') border-red-500 @else border-gray-300 dark:border-gray-600 @enderror focus:border-indigo-600 focus:outline-none transition">

                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Ton email" required
                           class="w-full px-6 py-4 rounded-lg border @error('email') border-red-500 @else border-gray-300 dark:border-gray-600 @enderror focus:border-indigo-600 focus:outline-none transition">

                    <textarea name="message" rows="6" placeholder="Ton message…" required
                              class="w-full px-6 py-4 rounded-lg border @error('message') border-red-500 @else border-gray-300 dark:border-gray-600 @enderror focus:border-indigo-600 focus:outline-none transition resize-none">{{ old('message') }}</textarea>

                    <button type="submit"
                            class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-4 rounded-lg font-bold text-lg transition transform hover:scale-105">
                        Envoyer
                    </button>
                </form>

                <p class="text-center mt-8 text-gray-500 dark:text-gray-400">
                    Ou directement → 
                    <a href="mailto:putzoludylan@gmail.com" class="text-indigo-600 font-semibold hover:underline">
                        putzoludylan@gmail.com
                    </a>
                </p>
            </div>
        </div>
    </section>

</x-layout>
Et petite mise à jour de la route dans web.php (remplace juste la route POST) :
PHPRoute::post('/contact', function (Request $request) {
    $data = $request->validate([
        'name'    => 'required|string|max:255',
        'email'   => 'required|email',
        'message' => 'required|string',
    ]);

    try {
        Mail::raw("Nouveau message de {$data['name']} ({$data['email']}):\n\n{$data['message']}", function ($message) use ($data) {
            $message->to('putzoludylan@gmail.com')
                    ->subject('Nouveau message depuis ton portfolio');
        });

        return redirect('/contact')->with('success', true);
    } catch (\Exception $e) {
        return redirect('/contact')->with('error', 'Erreur d’envoi du mail. Tu peux m’écrire directement à putzoludylan@gmail.com');
    }
});
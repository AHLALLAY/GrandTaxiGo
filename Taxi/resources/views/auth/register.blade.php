<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - GrandTaxiGo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md bg-gray-800 p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold text-center mb-6">Créer un compte</h1>

        <form method="POST" action="/register" enctype="multipart/form-data" class="space-y-6">
            <!-- CSRF Token (à gérer côté serveur) -->
            <input type="hidden" name="_token" value="votre_token_csrf">

            <!-- Photo -->
            <div class="flex justify-center mb-6">
                <div class="text-center">
                    <div class="relative mx-auto w-40 h-40 mb-3">
                        <div class="w-40 h-40 rounded-full bg-gray-700 border-2 border-gray-600 overflow-hidden flex items-center justify-center">
                            <div id="photo-placeholder" class="text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <img id="preview-image" src="#" alt="Profile" class="w-full h-full object-cover hidden">
                        </div>

                        <!-- Bouton de téléchargement modifié pour faire intersection avec le cercle -->
                        <label for="photo" class="absolute bottom-2 right-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-full p-2 cursor-pointer shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </label>
                    </div>

                    <input id="photo" name="photo" type="file" class="hidden" accept="image/*" onchange="previewPhoto(this)">
                    <div id="photo-error" class="text-red-500 text-sm mt-1 hidden"></div>
                </div>
            </div>

            <!-- Personal Information -->
            <div class="space-y-4">
                <h2 class="text-lg font-medium text-gray-100">Informations personnelles</h2>

                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-300">Nom</label>
                    <input id="name" class="block mt-1 w-full px-3 py-2 border border-gray-600 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" type="text" name="name" required autofocus autocomplete="name">
                    <div id="name-error" class="text-red-500 text-sm mt-2 hidden"></div>
                </div>

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
                    <input id="email" class="block mt-1 w-full px-3 py-2 border border-gray-600 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" type="email" name="email" required autocomplete="username">
                    <div id="email-error" class="text-red-500 text-sm mt-2 hidden"></div>
                </div>

                <!-- Password Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-300">Mot de passe</label>
                        <input id="password" class="block mt-1 w-full px-3 py-2 border border-gray-600 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" type="password" name="password" required autocomplete="new-password">
                        <div id="password-error" class="text-red-500 text-sm mt-2 hidden"></div>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-300">Confirmer le mot de passe</label>
                        <input id="password_confirmation" class="block mt-1 w-full px-3 py-2 border border-gray-600 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" type="password" name="password_confirmation" required autocomplete="new-password">
                        <div id="password_confirmation-error" class="text-red-500 text-sm mt-2 hidden"></div>
                    </div>
                </div>
            </div>

            <!-- Role Selection avec Radio Buttons -->
            <div>
                <label class="block text-sm font-medium text-gray-300">Rôle</label>
                <div class="flex items-center mt-2">
                    <label class="flex items-center ml-4">
                        <input type="radio" id="passenger" name="role" value="passenger" class="form-radio text-indigo-600" onchange="toggleDriverInfo(this.value)">
                        <span class="ml-2 text-white">Passager</span>
                    </label>
                    <label class="flex items-center ml-4">
                        <input type="radio" id="driver" name="role" value="driver" class="form-radio text-indigo-600" onchange="toggleDriverInfo(this.value)">
                        <span class="ml-2 text-white">Chauffeur</span>
                    </label>
                </div>
                <div id="role-error" class="text-red-500 text-sm mt-2 hidden"></div>
            </div>

            <!-- Driver Information (Hidden by Default) -->
            <div id="driver-info" class="space-y-4 hidden">
                <h2 class="text-lg font-medium text-gray-100">Informations du taxi</h2>

                <!-- Vehicle Brand -->
                <div>
                    <label for="brand" class="block text-sm font-medium text-gray-300">Marque du véhicule</label>
                    <input id="brand" class="block mt-1 w-full px-3 py-2 border border-gray-600 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" type="text" name="brand">
                    <div id="brand-error" class="text-red-500 text-sm mt-2 hidden"></div>
                </div>

                <!-- License Plate -->
                <div>
                    <label for="immatriculation" class="block text-sm font-medium text-gray-300">Numéro d'immatriculation</label>
                    <input id="immatriculation" class="block mt-1 w-full px-3 py-2 border border-gray-600 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" type="text" name="immatriculation">
                    <div id="immatriculation-error" class="text-red-500 text-sm mt-2 hidden"></div>
                </div>

                <!-- Driver Permit -->
                <div>
                    <label for="permit" class="block text-sm font-medium text-gray-300">Numéro de permis</label>
                    <input id="permit" class="block mt-1 w-full px-3 py-2 border border-gray-600 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" type="text" name="permit">
                    <div id="permit-error" class="text-red-500 text-sm mt-2 hidden"></div>
                </div>
            </div>

            <div class="flex items-center justify-end mt-6">
                <a class="underline text-sm text-gray-400 hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:ring-offset-gray-800" href="/login">
                    Déjà inscrit?
                </a>

                <button type="submit" class="ml-4 px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-800">
                    S'inscrire
                </button>
            </div>
        </form>
    </div>

    <script>
        function previewPhoto(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    const preview = document.getElementById('preview-image');
                    const placeholder = document.getElementById('photo-placeholder');

                    preview.setAttribute('src', e.target.result);
                    preview.classList.remove('hidden');
                    placeholder.classList.add('hidden');
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function toggleDriverInfo(role) {
            const driverInfoSection = document.getElementById('driver-info');
            if (role === 'driver') {
                driverInfoSection.classList.remove('hidden');
            } else {
                driverInfoSection.classList.add('hidden');
            }
        }
    </script>
</body>

</html>
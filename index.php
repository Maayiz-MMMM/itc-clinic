<?php require_once 'config.php';
require_once BASE_PATH.'/helpers/PersistanceManager.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tooth Care Dental Clinic</title>
    <!-- Tailwind CSS CDN for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Inter font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="<?=asset('/assets/css/index-style.css')?>" rel="stylesheet">

   
</head>

<body>
    



    <!-- Header Section -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <div class="text-blue-600 font-bold text-2xl">
                    <span class="text-blue-800">Tooth</span>Care
                </div>
            </div>
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-8">
                <a href="#home" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
                <a href="#about" class="text-gray-700 hover:text-blue-600 font-medium">About</a>
                <a href="#appointments" class="text-gray-700 hover:text-blue-600 font-medium">Appointments</a>
                <a href="#services" class="text-gray-700 hover:text-blue-600 font-medium">Services</a>
                <a href="#contact" class="text-gray-700 hover:text-blue-600 font-medium">Contact</a>
            </nav>
            <!-- Mobile Menu Button (non-functional in static HTML, serves as placeholder) -->
            <button class="md:hidden text-gray-700">
                <!-- Lucide-react MenuIcon/X are replaced by simple SVG for static HTML -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu">
                    <line x1="4" x2="20" y1="12" y2="12" />
                    <line x1="4" x2="20" y1="6" y2="6" />
                    <line x1="4" x2="20" y1="18" y2="18" />
                </svg>
            </button>
        </div>
        <!-- Mobile Navigation (hidden by default, would be toggled by JS) -->
        <div class="md:hidden bg-white py-4 px-4 shadow-lg hidden">
            <nav class="flex flex-col space-y-4">
                <a href="#home" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
                <a href="#about" class="text-gray-700 hover:text-blue-600 font-medium">About</a>
                <a href="#appointments" class="text-gray-700 hover:text-blue-600 font-medium">Appointments</a>
                <a href="#services" class="text-gray-700 hover:text-blue-600 font-medium">Services</a>
                <a href="#contact" class="text-gray-700 hover:text-blue-600 font-medium">Contact</a>
            </nav>
        </div>
    </header>

    <main class="flex-grow">
        <!-- Hero Section -->
        <section id="home" class="bg-gradient-to-r from-blue-50 to-blue-100 py-16 md:py-24">
            <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                        Your Smile Deserves The Best Care
                    </h1>
                    <p class="text-lg text-gray-600 mb-8">
                        Tooth Care is a specialized dental clinic in Puttalam providing
                        quality dental services to patients who need personalized care and
                        attention.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#appointments" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg text-center transition duration-300">
                            Book Appointment
                        </a>
                        <a href="#services" class="bg-white hover:bg-gray-100 text-blue-600 font-medium py-3 px-6 rounded-lg border border-blue-600 text-center transition duration-300">
                            Our Services
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img
                        src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Dental care professionals"
                        class="rounded-lg shadow-lg w-full h-auto object-cover" />
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Meet Our Specialist
                    </h2>
                    <div class="hr-blue"></div>
                </div>
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="md:w-1/3 mb-6 md:mb-0">
                        <div class="bg-gray-100 p-1 rounded-lg">
                            <img
                                src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80"
                                alt="Dr. M. Mishary"
                                class="rounded-lg w-full h-auto object-cover" />
                        </div>
                    </div>
                    <div class="md:w-2/3">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">
                            Dr. M. Mishary
                        </h3>
                        <p class="text-blue-600 font-medium mb-4">Dental Surgeon</p>
                        <p class="text-gray-600 mb-6">
                            Dr. M. Mishary is a highly skilled dental surgeon with extensive
                            experience in various dental procedures. He specializes in
                            providing comprehensive dental care with a gentle touch, ensuring
                            patients feel comfortable throughout their treatment. Dr. Ahmed is
                            committed to staying updated with the latest advancements in
                            dental technology and techniques to provide the best possible care
                            for his patients.
                        </p>
                        <div class="bg-blue-50 p-4 rounded-lg border-l-4 border-blue-600">
                            <p class="text-gray-700 italic">
                                "My goal is to provide quality dental care to everyone in
                                Puttalam who needs it, especially those who cannot access
                                services at government hospitals. A healthy smile is a right,
                                not a privilege."
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h4 class="text-xl font-bold text-gray-800 mb-4">
                            Front Office Support
                        </h4>
                        <p class="text-gray-600">
                            Ms. Fathima serves as our dedicated front office operator,
                            responsible for managing appointments and ensuring a smooth
                            experience for all patients. She will help you find the most
                            convenient appointment time and guide you through the registration
                            process.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Appointment Times Section -->
        <section id="appointments" class="py-16 bg-blue-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Available Appointment Times
                    </h2>
                    <div class="hr-blue mb-6"></div>
                    <p class="text-gray-600 max-w-3xl mx-auto">
                        Dr. M. Mishary is available for consultations on the following days.
                        Contact us to book your appointment during these hours.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Appointment Time Card: Monday -->
                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <div class="flex items-center mb-4">
                            <!-- Calendar icon (Lucide-react replaced by simple SVG) -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar text-blue-600 mr-2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                                <line x1="16" x2="16" y1="2" y2="6" />
                                <line x1="8" x2="8" y1="2" y2="6" />
                                <line x1="3" x2="21" y1="10" y2="10" />
                            </svg>
                            <h3 class="text-xl font-bold text-gray-800">Monday</h3>
                        </div>
                        <div class="flex items-center">
                            <!-- Clock icon (Lucide-react replaced by simple SVG) -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock text-blue-600 mr-2">
                                <circle cx="12" cy="12" r="10" />
                                <polyline points="12 6 12 12 16 14" />
                            </svg>
                            <p class="text-gray-600">06:00 PM - 09:00 PM</p>
                        </div>
                    </div>
                    <!-- Appointment Time Card: Wednesday -->
                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <div class="flex items-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar text-blue-600 mr-2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                                <line x1="16" x2="16" y1="2" y2="6" />
                                <line x1="8" x2="8" y1="2" y2="6" />
                                <line x1="3" x2="21" y1="10" y2="10" />
                            </svg>
                            <h3 class="text-xl font-bold text-gray-800">Wednesday</h3>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock text-blue-600 mr-2">
                                <circle cx="12" cy="12" r="10" />
                                <polyline points="12 6 12 12 16 14" />
                            </svg>
                            <p class="text-gray-600">06:00 PM - 09:00 PM</p>
                        </div>
                    </div>
                    <!-- Appointment Time Card: Saturday -->
                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <div class="flex items-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar text-blue-600 mr-2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                                <line x1="16" x2="16" y1="2" y2="6" />
                                <line x1="8" x2="8" y1="2" y2="6" />
                                <line x1="3" x2="21" y1="10" y2="10" />
                            </svg>
                            <h3 class="text-xl font-bold text-gray-800">Saturday</h3>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock text-blue-600 mr-2">
                                <circle cx="12" cy="12" r="10" />
                                <polyline points="12 6 12 12 16 14" />
                            </svg>
                            <p class="text-gray-600">03:00 PM - 10:00 PM</p>
                        </div>
                    </div>
                    <!-- Appointment Time Card: Sunday -->
                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <div class="flex items-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar text-blue-600 mr-2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                                <line x1="16" x2="16" y1="2" y2="6" />
                                <line x1="8" x2="8" y1="2" y2="6" />
                                <line x1="3" x2="21" y1="10" y2="10" />
                            </svg>
                            <h3 class="text-xl font-bold text-gray-800">Sunday</h3>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock text-blue-600 mr-2">
                                <circle cx="12" cy="12" r="10" />
                                <polyline points="12 6 12 12 16 14" />
                            </svg>
                            <p class="text-gray-600">03:00 PM - 10:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="mt-12 bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">
                        Appointment Process
                    </h3>
                    <ol class="list-decimal list-inside space-y-3 text-gray-600">
                        <li>
                            Contact Ms. Fathima at <span class="font-semibold text-blue-600">+94 32 123 4567</span> to check availability for your preferred date
                            and time.
                            <p class="text-sm text-gray-500 mt-1">உங்கள் விருப்பமான திகதி மற்றும் நேரத்திற்கான கிடைக்கும் தன்மையை சரிபார்க்க திருமதி பாத்திமாவை +94 32 123 4567 என்ற எண்ணில் தொடர்பு கொள்ளவும்.</p>
                            <p class="text-sm text-gray-500">ඔබ කැමති දිනය සහ වේලාව සඳහා ඇති බව පරීක්ෂා කිරීමට ෆාතිමා මහත්මිය +94 32 123 4567 අංකයෙන් අමතන්න.</p>
                        </li>
                        <li>
                            Provide your personal information (name, address, telephone
                            number).
                            <p class="text-sm text-gray-500 mt-1">உங்கள் தனிப்பட்ட தகவல்களை (பெயர், முகவரி, தொலைபேசி எண்) வழங்கவும்.</p>
                            <p class="text-sm text-gray-500">ඔබගේ පුද්ගලික තොරතුරු (නම, ලිපිනය, දුරකථන අංකය) ලබා දෙන්න.</p>
                        </li>
                        <li>
                            Pay the registration fee of LKR 1000 to confirm your appointment.
                            <p class="text-sm text-gray-500 mt-1">உங்கள் சந்திப்பை உறுதிப்படுத்த LKR 1000 பதிவு கட்டணத்தை செலுத்தவும்.</p>
                            <p class="text-sm text-gray-500">ඔබගේ පත්වීම තහවුරු කිරීමට රු. 1000 ක ලියාපදිංචි ගාස්තුව ගෙවන්න.</p>
                        </li>
                        <li>You'll receive an appointment ID for future reference.
                            <p class="text-sm text-gray-500 mt-1">எதிர்கால குறிப்புக்காக உங்களுக்கு ஒரு சந்திப்பு ஐடி வழங்கப்படும்.</p>
                            <p class="text-sm text-gray-500">අනාගත යොමුව සඳහා ඔබට පත්වීම් හැඳුනුම්පතක් ලැබෙනු ඇත.</p>
                        </li>
                        <li>Arrive at the clinic on your scheduled date and time.
                            <p class="text-sm text-gray-500 mt-1">உங்கள் திட்டமிடப்பட்ட திகதி மற்றும் நேரத்தில் கிளினிக்கிற்கு வரவும்.</p>
                            <p class="text-sm text-gray-500">ඔබගේ නියමිත දිනයට සහ වේලාවට සායනයට පැමිණෙන්න.</p>
                        </li>
                        <li>
                            After treatment, the final fee will be calculated based on the
                            treatment provided.
                            <p class="text-sm text-gray-500 mt-1">சிகிச்சைக்குப் பிறகு, வழங்கப்பட்ட சிகிச்சையின் அடிப்படையில் இறுதி கட்டணம் கணக்கிடப்படும்.</p>
                            <p class="text-sm text-gray-500">ප්‍රතිකාරයෙන් පසු, ලබා දුන් ප්‍රතිකාරය මත පදනම්ව අවසාන ගාස්තුව ගණනය කරනු ලැබේ.</p>
                        </li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Our Services
                    </h2>
                    <div class="hr-blue mb-6"></div>
                    <p class="text-gray-600 max-w-3xl mx-auto">
                        We offer a comprehensive range of dental treatments at fixed prices,
                        ensuring transparency and affordability for all our patients.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Service Card: Cleanings -->
                    <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">
                                Cleanings
                            </h3>
                            <p class="text-gray-600 mb-4">
                                Professional dental cleaning to remove plaque and tartar, leaving your teeth feeling fresh and looking bright.
                            </p>
                            <div class="bg-blue-50 py-2 px-4 rounded-md inline-block">
                                <span class="font-medium text-blue-800">
                                    LKR 3,500
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Service Card: Whitening -->
                    <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">
                                Whitening
                            </h3>
                            <p class="text-gray-600 mb-4">
                                Advanced teeth whitening treatments to remove stains and discoloration for a brighter, more confident smile.
                            </p>
                            <div class="bg-blue-50 py-2 px-4 rounded-md inline-block">
                                <span class="font-medium text-blue-800">
                                    LKR 12,000
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Service Card: Filling -->
                    <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">
                                Filling
                            </h3>
                            <p class="text-gray-600 mb-4">
                                Tooth-colored fillings to repair cavities and restore damaged teeth with natural-looking results.
                            </p>
                            <div class="bg-blue-50 py-2 px-4 rounded-md inline-block">
                                <span class="font-medium text-blue-800">
                                    LKR 5,000
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Service Card: Nerve Filling -->
                    <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">
                                Nerve Filling
                            </h3>
                            <p class="text-gray-600 mb-4">
                                Specialized procedure to treat infected pulp tissue while preserving the natural tooth structure.
                            </p>
                            <div class="bg-blue-50 py-2 px-4 rounded-md inline-block">
                                <span class="font-medium text-blue-800">
                                    LKR 8,000
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Service Card: Root Canal Therapy -->
                    <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">
                                Root Canal Therapy
                            </h3>
                            <p class="text-gray-600 mb-4">
                                Complete treatment for infected tooth roots, eliminating pain and saving teeth that would otherwise require extraction.
                            </p>
                            <div class="bg-blue-50 py-2 px-4 rounded-md inline-block">
                                <span class="font-medium text-blue-800">
                                    LKR 15,000
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 bg-blue-50 p-6 rounded-lg">
                    <p class="text-gray-700 text-center">
                        All prices are subject to change. The final fee is calculated based
                        on the specific treatment provided.
                        <br />A registration fee of
                        <span class="font-bold">LKR 1000</span> is required to book an
                        appointment.
                    </p>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Our System Features
                    </h2>
                    <div class="hr-blue mb-6"></div>
                    <p class="text-gray-600 max-w-3xl mx-auto">
                        Tooth Care uses a modern appointment management system to ensure a
                        smooth and efficient experience for all our patients.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Feature Card: Appointment Booking -->
                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <div class="flex flex-col items-center text-center">
                            <div class="mb-4 bg-blue-50 p-3 rounded-full">
                                <!-- Calendar icon (Lucide-react replaced by simple SVG) -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar text-blue-600">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                                    <line x1="16" x2="16" y1="2" y2="6" />
                                    <line x1="8" x2="8" y1="2" y2="6" />
                                    <line x1="3" x2="21" y1="10" y2="10" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">
                                Appointment Booking
                            </h3>
                            <p class="text-gray-600">
                                Easily schedule dental appointments according to your convenience.
                            </p>
                        </div>
                    </div>
                    <!-- Feature Card: Update Appointments -->
                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <div class="flex flex-col items-center text-center">
                            <div class="mb-4 bg-blue-50 p-3 rounded-full">
                                <!-- RefreshCwIcon (Lucide-react replaced by simple SVG) -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw text-blue-600">
                                    <path d="M21 12a9 9 0 0 0-9-9H3" />
                                    <path d="M3 12a9 9 0 0 0 9 9h9" />
                                    <path d="M16 16l-4 4-4-4" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">
                                Update Appointments
                            </h3>
                            <p class="text-gray-600">Modify your appointment details if your schedule changes.</p>
                        </div>
                    </div>
                    <!-- Feature Card: Search & View -->
                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <div class="flex flex-col items-center text-center">
                            <div class="mb-4 bg-blue-50 p-3 rounded-full">
                                <!-- Search icon (Lucide-react replaced by simple SVG) -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search text-blue-600">
                                    <circle cx="11" cy="11" r="8" />
                                    <path d="m21 21-4.3-4.3" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">
                                Search & View
                            </h3>
                            <p class="text-gray-600">
                                Find appointments by ID or view all appointments for a specific date.
                            </p>
                        </div>
                    </div>
                    <!-- Feature Card: Registration Payments -->
                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <div class="flex flex-col items-center text-center">
                            <div class="mb-4 bg-blue-50 p-3 rounded-full">
                                <!-- DollarSignIcon (Lucide-react replaced by simple SVG) -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign text-blue-600">
                                    <line x1="12" x2="12" y1="2" y2="22" />
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">
                                Registration Payments
                            </h3>
                            <p class="text-gray-600">
                                Secure your appointment with a registration fee of LKR 1000.
                            </p>
                        </div>
                    </div>
                    <!-- Feature Card: Treatment Cost Calculation -->
                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <div class="flex flex-col items-center text-center">
                            <div class="mb-4 bg-blue-50 p-3 rounded-full">
                                <!-- Calculator icon (Lucide-react replaced by simple SVG) -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calculator text-blue-600">
                                    <rect x="8" y="2" width="8" height="4" rx="1" />
                                    <path d="M17 10H7" />
                                    <path d="M17 14H7" />
                                    <path d="M14 18H10" />
                                    <path d="M20 22H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">
                                Treatment Cost Calculation
                            </h3>
                            <p class="text-gray-600">
                                Transparent calculation of fees based on treatments received.
                            </p>
                        </div>
                    </div>
                    <!-- Feature Card: Payment & Invoicing -->
                    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <div class="flex flex-col items-center text-center">
                            <div class="mb-4 bg-blue-50 p-3 rounded-full">
                                <!-- FileTextIcon (Lucide-react replaced by simple SVG) -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text text-blue-600">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                                    <path d="M10 9H8" />
                                    <path d="M16 13H8" />
                                    <path d="M16 17H8" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">
                                Payment & Invoicing
                            </h3>
                            <p class="text-gray-600">
                                Convenient payment options and detailed invoices for all services.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-12 bg-blue-600 text-white p-8 rounded-lg">
                    <div class="flex flex-col md:flex-row items-center justify-between">
                        <div class="mb-6 md:mb-0 md:mr-8">
                            <h3 class="text-2xl font-bold mb-2">
                                Ready to improve your dental health?
                            </h3>
                            <p class="text-blue-100">
                                Our efficient system makes it easy to get the care you need.
                            </p>
                        </div>
                        <a href="#contact" class="bg-white text-blue-600 hover:bg-blue-50 font-medium py-3 px-8 rounded-lg transition duration-300">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Contact Us
                    </h2>
                    <div class="hr-blue mb-6"></div>
                    <p class="text-gray-600 max-w-3xl mx-auto">
                        Have questions or ready to book your appointment? Get in touch with
                        us using any of the methods below.
                    </p>
                </div>
                <div class="flex flex-col lg:flex-row gap-8">
                    <div class="lg:w-1/2 bg-gray-50 p-8 rounded-lg shadow-md">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">
                            Get In Touch
                        </h3>
                        <div class="space-y-6">
                            <!-- Address -->
                            <div class="flex items-start">
                                <div class="bg-blue-100 p-3 rounded-full mr-4">
                                    <!-- MapPinIcon (Lucide-react replaced by simple SVG) -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin text-blue-600">
                                        <path d="M12 18.7c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z" />
                                        <circle cx="12" cy="11.5" r="3.5" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-1">Address</h4>
                                    <p class="text-gray-600">
                                        Tooth Care Dental Hospital, Main Street, Puttalam, Sri Lanka
                                    </p>
                                </div>
                            </div>
                            <!-- Phone -->
                            <div class="flex items-start">
                                <div class="bg-blue-100 p-3 rounded-full mr-4">
                                    <!-- PhoneIcon (Lucide-react replaced by simple SVG) -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone text-blue-600">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2.02 15.97 15.97 0 0 1-11.82-5.58 15.97 15.97 0 0 1-5.58-11.82A2 2 0 0 1 3.08 2H6a2 2 0 0 1 2 1.73c.21.64.49 1.25.85 1.83A10.04 10.04 0 0 0 12 12a10.04 10.04 0 0 0 4.44 2.89c.58.36 1.2.64 1.83.85A2 2 0 0 1 22 16.92z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-1">Phone</h4>
                                    <p class="text-gray-600">+94 32 123 4567</p>
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="flex items-start">
                                <div class="bg-blue-100 p-3 rounded-full mr-4">
                                    <!-- MailIcon (Lucide-react replaced by simple SVG) -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail text-blue-600">
                                        <rect width="20" height="16" x="2" y="4" rx="2" />
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-1">Email</h4>
                                    <p class="text-gray-600">appointments@toothcare.lk</p>
                                </div>
                            </div>
                            <!-- Office Hours -->
                            <div class="flex items-start">
                                <div class="bg-blue-100 p-3 rounded-full mr-4">
                                    <!-- ClockIcon (Lucide-react replaced by simple SVG) -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock text-blue-600">
                                        <circle cx="12" cy="12" r="10" />
                                        <polyline points="12 6 12 12 16 14" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-1">Office Hours</h4>
                                    <p class="text-gray-600">
                                        Monday & Wednesday: 6:00 PM - 9:00 PM
                                        <br />
                                        Saturday & Sunday: 3:00 PM - 10:00 PM
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/2 bg-gray-50 p-8 rounded-lg shadow-md">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">
                            Send a Message
                        </h3>
                        <form class="space-y-4">
                            <div>
                                <label htmlFor="name" class="block text-gray-700 font-medium mb-1">
                                    Name
                                </label>
                                <input
                                    type="text"
                                    id="name"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600"
                                    placeholder="Your name" />
                            </div>
                            <div>
                                <label htmlFor="phone" class="block text-gray-700 font-medium mb-1">
                                    Phone
                                </label>
                                <input
                                    type="tel"
                                    id="phone"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600"
                                    placeholder="Your phone number" />
                            </div>
                            <div>
                                <label htmlFor="email" class="block text-gray-700 font-medium mb-1">
                                    Email
                                </label>
                                <input
                                    type="email"
                                    id="email"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600"
                                    placeholder="Your email address" />
                            </div>
                            <div>
                                <label htmlFor="message" class="block text-gray-700 font-medium mb-1">
                                    Message
                                </label>
                                <textarea
                                    id="message"
                                    rows="4"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600"
                                    placeholder="Your message or inquiry"></textarea>
                            </div>
                            <button
                                type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition duration-300 w-full">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white py-12 mt-auto">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between">
                <div class="mb-8 md:mb-0">
                    <div class="text-2xl font-bold mb-4">
                        <span class="text-blue-400">Tooth</span>Care
                    </div>
                    <p class="text-gray-400 max-w-md">
                        Providing quality dental services to patients in Puttalam who need
                        personalized care and attention.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div>
                        <h3 class="text-lg font-bold mb-4 text-white">Quick Links</h3>
                        <ul class="space-y-2">
                            <li>
                                <a href="#home" class="text-gray-400 hover:text-blue-400 transition duration-300">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#about" class="text-gray-400 hover:text-blue-400 transition duration-300">
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="#services" class="text-gray-400 hover:text-blue-400 transition duration-300">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="#appointments" class="text-gray-400 hover:text-blue-400 transition duration-300">
                                    Appointments
                                </a>
                            </li>
                            <li>
                                <a href="#contact" class="text-gray-400 hover:text-blue-400 transition duration-300">
                                    Contact
                                </a>
                            </li>
                            <li>
                                <a href="app.php" class="text-gray-400 hover:text-blue-400 transition duration-300">
                                    Admin
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold mb-4 text-white">Services</h3>
                        <ul class="space-y-2">
                            <li>
                                <a href="#services" class="text-gray-400 hover:text-blue-400 transition duration-300">
                                    Cleanings
                                </a>
                            </li>
                            <li>
                                <a href="#services" class="text-gray-400 hover:text-blue-400 transition duration-300">
                                    Whitening
                                </a>
                            </li>
                            <li>
                                <a href="#services" class="text-gray-400 hover:text-blue-400 transition duration-300">
                                    Filling
                                </a>
                            </li>
                            <li>
                                <a href="#services" class="text-gray-400 hover:text-blue-400 transition duration-300">
                                    Nerve Filling
                                </a>
                            </li>
                            <li>
                                <a href="#services" class="text-gray-400 hover:text-blue-400 transition duration-300">
                                    Root Canal Therapy
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold mb-4 text-white">
                            Working Hours
                        </h3>
                        <ul class="space-y-2 text-gray-400">
                            <li>Monday: 6:00 PM - 9:00 PM</li>
                            <li>Wednesday: 6:00 PM - 9:00 PM</li>
                            <li>Saturday: 3:00 PM - 10:00 PM</li>
                            <li>Sunday: 3:00 PM - 10:00 PM</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-12 pt-6 text-center text-gray-400">
                <p>
                    &copy; 2025 Tooth Care Dental Hospital. All
                    rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>

</html>
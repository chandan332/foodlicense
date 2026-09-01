<div>

    <!-- HERO SECTION -->
    <section class="bg-brand-dark text-white flex flex-col pt-28 pb-12 md:pt-32 md:pb-20 relative">
        <div class="container mx-auto px-6 flex flex-col-reverse md:flex-row items-center flex-grow">
            <!-- Left Side: Text -->
            <div class="md:w-1/2 mt-12 md:mt-0">
                <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6">
                    Legal & Business<br>
                    Registration Services<br>
                    <span class="text-brand-orange">Made Simple</span>
                </h1>
                <p class="text-gray-300 text-lg mb-8 max-w-lg leading-relaxed">
                    Starting, managing, or growing a business often involves registrations, licenses, certifications, and ongoing compliance requirements. Legal Expert India provides professional assistance for individuals, entrepreneurs, startups, and businesses with various legal and business registration processes.
                </p>
                
                <p class="text-gray-300 text-lg mb-8 max-w-lg leading-relaxed">
                    We help you understand the applicable requirements, prepare the necessary information and documents, and navigate the application process with clear guidance.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#contact" class="bg-brand-orange text-white px-8 py-4 rounded font-bold hover:bg-orange-600 transition shadow-lg shadow-orange-500/30 text-center">
                        Get Professional Assistance
                    </a>
                    <a href="#services" class="border-2 border-white text-white px-8 py-4 rounded font-bold hover:bg-white hover:text-brand-dark transition text-center">
                        Our Services
                    </a>
                </div>
            </div>
            
            <!-- Right Side: Decorative Graphic -->
            <div class="md:w-1/2 flex justify-center">
                <div class="w-72 h-72 md:w-[400px] md:h-[400px] bg-gray-800 rounded-full flex items-center justify-center border-4 border-brand-orange shadow-2xl relative overflow-hidden">
                   <div class="text-center p-8">
                       <svg class="w-24 h-24 text-brand-orange mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
                       <h3 class="text-2xl font-bold text-white">Trust & Compliance</h3>
                   </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR SERVICES SECTION -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Services</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">We provide assistance across a range of business and legal registration requirements, including:</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $services = [
                        'Trademark Registration', 'FSSAI Registration & Licensing', 'GST Registration', 
                        'MSME / Udyam Registration', 'Company Registration', 'LLP Registration', 
                        'Partnership Registration', 'Proprietorship Registration', 'Copyright Registration',
                        'ISO Certification Assistance', 'Import Export Code (IEC)', 'Trade License Assistance',
                        'ROC Compliance & Filing Assistance'
                    ];
                @endphp

                @foreach($services as $service)
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:border-brand-orange transition group cursor-pointer">
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mb-4 group-hover:bg-brand-orange transition">
                        <svg class="w-6 h-6 text-brand-orange group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $service }}</h3>
                </div>
                @endforeach
            </div>
            
            <p class="text-center text-sm text-gray-500 mt-12">
                Service availability and requirements may vary depending on the type of business, application and applicable regulations.
            </p>
        </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section class="py-20 bg-brand-dark text-white">
        <div class="container mx-auto px-6">
             <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Why Choose Legal Expert India?</h2>
                <div class="w-20 h-1 bg-brand-orange mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700 hover:border-brand-orange transition">
                    <h4 class="text-brand-orange font-bold text-lg mb-3">Clear Guidance</h4>
                    <p class="text-gray-400 text-sm">We explain the general requirements and process in simple language so you can make informed decisions.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700 hover:border-brand-orange transition">
                    <h4 class="text-brand-orange font-bold text-lg mb-3">Document Assistance</h4>
                    <p class="text-gray-400 text-sm">We help you understand the documents and information generally required for your application.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700 hover:border-brand-orange transition">
                    <h4 class="text-brand-orange font-bold text-lg mb-3">Professional Support</h4>
                    <p class="text-gray-400 text-sm">Our team assists with the application process and helps you understand the relevant steps.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700 hover:border-brand-orange transition">
                    <h4 class="text-brand-orange font-bold text-lg mb-3">Transparent Comm.</h4>
                    <p class="text-gray-400 text-sm">We aim to provide clear information about our services, applicable charges and the scope of assistance.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700 hover:border-brand-orange transition">
                    <h4 class="text-brand-orange font-bold text-lg mb-3">Business-Focused</h4>
                    <p class="text-gray-400 text-sm">Our services are designed to support entrepreneurs, startups, professionals and established businesses.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW OUR PROCESS WORKS -->
    <section id="process" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-gray-900 mb-12 text-center">How Our Process Works</h2>
            
            <div class="max-w-4xl mx-auto space-y-6">
                <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl hover:bg-orange-50 transition border border-transparent hover:border-orange-100">
                    <div class="bg-brand-orange text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-xl shrink-0">1</div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-800">Share Your Requirements</h4>
                        <p class="text-gray-600 mt-1">Tell us about your business and the service you are looking for.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl hover:bg-orange-50 transition border border-transparent hover:border-orange-100">
                    <div class="bg-brand-orange text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-xl shrink-0">2</div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-800">Requirement Review</h4>
                        <p class="text-gray-600 mt-1">We review the basic information and explain the applicable process and documentation.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl hover:bg-orange-50 transition border border-transparent hover:border-orange-100">
                    <div class="bg-brand-orange text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-xl shrink-0">3</div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-800">Document Preparation</h4>
                        <p class="text-gray-600 mt-1">We assist you in organizing the required information and documents.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl hover:bg-orange-50 transition border border-transparent hover:border-orange-100">
                    <div class="bg-brand-orange text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-xl shrink-0">4</div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-800">Application Assistance</h4>
                        <p class="text-gray-600 mt-1">We assist with the relevant application or registration process.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl hover:bg-orange-50 transition border border-transparent hover:border-orange-100">
                    <div class="bg-brand-orange text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-xl shrink-0">5</div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-800">Status & Next-Step Guidance</h4>
                        <p class="text-gray-600 mt-1">We help you understand the application status and the next steps, wherever applicable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

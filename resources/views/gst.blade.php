<div>

    <!-- HERO SECTION WITH FORM -->
    <section class="bg-brand-dark text-white pt-32 pb-16 md:pt-40 md:pb-24 relative">
        <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center gap-12">
            
            <!-- Left Side: Content -->
            <div class="lg:w-3/5">
                <div class="inline-block bg-orange-500/20 text-brand-orange font-bold px-4 py-1 rounded-full text-sm mb-4">
                    GST Registration Starting From ₹999*
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                    GST Registration
                </h1>
                <p class="text-gray-300 text-lg mb-8 max-w-xl leading-relaxed">
                    Get professional assistance with your GST registration application. Submit your basic details and our team will contact you regarding your GST registration requirement.
                </p>
                
                <div class="hidden lg:block">
                    <p class="text-sm text-gray-400 mb-2">Trusted by businesses across India</p>
                    <div class="flex space-x-2">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-brand-orange" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        @endfor
                    </div>
                </div>
            </div>
            
            <!-- Right Side: Application Form -->
            <div class="lg:w-2/5 w-full max-w-md mx-auto lg:mx-0">
                <livewire:enquiry-form :service="\App\Enums\ServiceType::Gst" />
            </div>
        </div>
    </section>

    <!-- GST OVERVIEW & PRICING -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row gap-12 items-center">
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">GST Registration</h2>
                    <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                        GST registration may be applicable to businesses and individuals depending on their turnover, business activities, nature of supplies and other conditions under applicable GST law.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Legal Expert India provides professional assistance with understanding the applicable requirements, documentation and GST registration application process.
                    </p>
                </div>
                
                <!-- Pricing Box -->
                <div class="md:w-1/2 w-full">
                    <div class="bg-white border-2 border-brand-orange rounded-2xl p-8 shadow-xl text-center relative overflow-hidden">
                        <div class="absolute top-0 right-0 bg-brand-orange text-white text-xs font-bold px-3 py-1 rounded-bl-lg">PRICING</div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">GST Registration</h3>
                        <div class="text-4xl font-extrabold text-brand-orange my-4">Starting From ₹999*</div>
                        <p class="text-sm text-gray-500 mb-4">
                            Service charges and applicable government/statutory fees, if any, will be communicated before proceeding.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LISTS SECTION -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                
                <!-- Column 1 -->
                <div>
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-brand-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Who May Need GST Registration?</h3>
                    <p class="text-gray-600 mb-4 text-sm">GST registration may be relevant for eligible:</p>
                    <ul class="space-y-3 mb-4">
                        @php
                            $applicants = ['Businesses', 'Proprietorships', 'Partnership Firms', 'LLPs', 'Companies', 'Freelancers & Professionals', 'E-commerce Businesses', 'Other eligible taxpayers'];
                        @endphp
                        @foreach($applicants as $item)
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-brand-orange shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700 font-medium">{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <p class="text-gray-600 text-sm italic">The requirement for GST registration depends on applicable laws and the nature of the business.</p>
                </div>

                <!-- Column 2 -->
                <div>
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-brand-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">What We Help With</h3>
                    <ul class="space-y-4">
                        <li class="bg-gray-50 p-4 rounded-lg border border-gray-100 font-medium text-gray-800">GST registration requirement guidance</li>
                        <li class="bg-gray-50 p-4 rounded-lg border border-gray-100 font-medium text-gray-800">Documentation assistance</li>
                        <li class="bg-gray-50 p-4 rounded-lg border border-gray-100 font-medium text-gray-800">GST application process assistance</li>
                        <li class="bg-gray-50 p-4 rounded-lg border border-gray-100 font-medium text-gray-800">Application-related guidance</li>
                        <li class="bg-gray-50 p-4 rounded-lg border border-gray-100 font-medium text-gray-800">Status and next-step guidance, where applicable</li>
                    </ul>
                </div>

                <!-- Column 3 -->
                <div>
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-brand-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Basic Documents & Info</h3>
                    <p class="text-gray-600 mb-4 text-sm">Requirements may vary depending on the type of applicant and business. Commonly required information may include:</p>
                    <ul class="space-y-3 mb-4">
                        @php
                            $docs = ['PAN details', 'Applicant / business details', 'Identity and address proof', 'Business address details', 'Bank account details, where applicable', 'Business activity details'];
                        @endphp
                        @foreach($docs as $doc)
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-gray-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            <span class="text-gray-700 font-medium">{{ $doc }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <p class="text-gray-600 text-sm italic">Additional documents may be required depending on the application.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- PROCESS SECTION -->
    <section class="py-20 bg-brand-dark text-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Simple Registration Process</h2>
                <div class="w-20 h-1 bg-brand-orange mx-auto rounded-full"></div>
            </div>
            
            <div class="max-w-4xl mx-auto space-y-4">
                <div class="flex items-start space-x-4 p-6 bg-gray-800 rounded-xl border border-gray-700">
                    <div class="bg-brand-orange text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-xl shrink-0">1</div>
                    <div>
                        <h4 class="text-xl font-bold text-white">Submit Your Details</h4>
                        <p class="text-gray-400 mt-1 text-sm">Fill in the Apply Now form above.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-6 bg-gray-800 rounded-xl border border-gray-700">
                    <div class="bg-brand-orange text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-xl shrink-0">2</div>
                    <div>
                        <h4 class="text-xl font-bold text-white">Requirement Review</h4>
                        <p class="text-gray-400 mt-1 text-sm">We review your basic business information and GST requirement.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-6 bg-gray-800 rounded-xl border border-gray-700">
                    <div class="bg-brand-orange text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-xl shrink-0">3</div>
                    <div>
                        <h4 class="text-xl font-bold text-white">Documentation</h4>
                        <p class="text-gray-400 mt-1 text-sm">We assist you with the applicable documents and information.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-6 bg-gray-800 rounded-xl border border-gray-700">
                    <div class="bg-brand-orange text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-xl shrink-0">4</div>
                    <div>
                        <h4 class="text-xl font-bold text-white">Application Filing</h4>
                        <p class="text-gray-400 mt-1 text-sm">We assist with the relevant GST registration application process.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-6 bg-gray-800 rounded-xl border border-gray-700">
                    <div class="bg-brand-orange text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-xl shrink-0">5</div>
                    <div>
                        <h4 class="text-xl font-bold text-white">Status & Next Steps</h4>
                        <p class="text-gray-400 mt-1 text-sm">We help you understand the application status and applicable next steps.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DISCLAIMER / PRE-FOOTER -->
    <section class="py-16 bg-gray-100 text-center">
        <div class="container mx-auto px-6 max-w-5xl text-center">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Need GST Registration?</h2>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                Submit your details through the Apply Now form and our team will contact you regarding your requirement.
            </p>
            <a href="#enquiry" class="inline-block bg-brand-orange text-white font-bold px-8 py-4 rounded-full hover:bg-orange-600 transition shadow-lg shadow-orange-500/30 mb-12">
                Apply Now
            </a>

            <h3 class="text-lg font-bold text-gray-800 mb-4 border-t border-gray-300 pt-12">Important Information</h3>
            <div class="text-sm text-gray-500 space-y-4 leading-relaxed max-w-4xl mx-auto text-left">
                <p>
                    Legal Expert India is a private professional service and is not a government department or government authority. GST registration applications are subject to applicable laws, eligibility requirements and review by the relevant tax authority. We do not guarantee registration, approval or a particular outcome.
                </p>
                <p>
                    Pricing shown above refers to the service price mentioned on this page. Applicable government/statutory fees, if any, may be separate.
                </p>
            </div>
        </div>
    </section>

</div>

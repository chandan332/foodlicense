@extends('layouts.root', ["route"=>"/"]) 

@section('content')
{{-- Hero Section --}}
<div class="row p-4" id="hero">
    <div
        class="col-12 col-md animate hidden p-0 p-md-4 d-flex flex-column justify-content-center"
    >
        <div style="--delay: 400ms">
            <h1 class="">FOOD LICENSE</h1>
        </div>
        <div style="--delay: 600ms">
            {{--
            <p class="fs-4">
                <i class="text-primary fw-semibold">
                    Well, it seems like FICCI's 2018 study exposed a spicy truth
                    about Indian food businesses</i
                >
                – only 23% had their FSSAI licence, leaving the rest in a
                flavourless soup of non-compliance.
            </p>
            --}}
            <h5 class="text-primary-emphasis">
                Wanna Acquire Your FSSAI License?
            </h5>
            <p>
                <span class="text-danger-emphasis">Answer: </span>
                <i class="">
                    Failure to comply with food safety regulations is not an
                    option. Without an FSSAI license, your food business risks
                    severe penalties, closures, and reputational damage. Protect
                    your customers and safeguard your business's future. Acquire
                    your FSSAI license today.</i
                >
            </p>
        </div>
        <div style="--delay: 800ms">
            <a href="/services" class="btn btn-danger">Apply Now</a>
        </div>
    </div>
    <div
        class="col-12 col-md bg-image"
        style="background-image: url('/images/fatemeh-rz-V-A3UpAKtpc.jpg')"
    ></div>
</div>
<hr />

{{-- Middle Section --}}
<div class="row p-4" id="mid">
    <div
        class="col-12 col-md bg-image"
        style="background-image: url('images/arash-ZnssDSmy9Ho.jpg')"
    ></div>
    <div
        class="col-12 col-md animate hidden p-0 p-md-4 d-flex flex-column justify-content-center"
    >
        <div style="--delay: 600ms">
            <p class="fs-4">
                <code class="fs-2">And As For The 2021 Clutch Survey,</code>
                it's no surprise that 70% of small businesses struggle to find
                skilled copywriters. Looks like the business world is craving
                some word wizards to spice things up! 🌶✍️
            </p>
        </div>
    </div>
</div>
<hr />

{{-- Last Section --}}
<div class="d-flex flex-wrap p-4" id="last">
    <div
        class="col-12 col-md animate hidden p-0 p-md-4 d-flex flex-column justify-content-center"
    >
        <div style="--delay: 600ms">
            <p class="fs-4">
                <code> You're in luck!</code> If you're part of the 77% of
                Indian food businesses without FSSAI licences and among the 70%
                searching for copywriting help, consider checking out 'Legal
                Success India.' We got the recipe for success – we can help you
                file your FSSAI licence and take care of all your copywriting
                needs. It's a one-stop shop for legal compliance and tasty
                content! 🍽�
            </p>
        </div>
    </div>
    <div
        class="col-12 col-md bg-image"
        style="background-image: url('images/austin-kehmeier-lyiKExA4zQA.jpg')"
    ></div>
</div>
<hr />

{{-- Questions --}}
<div class="my-4" id="questions">
    <h1 class="text-center">All Questions you have</h1>
    <div class="accordion mt-4" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                >
                    1. How can Food License help me with food licensing
                    applications?
                </button>
            </h2>
            <div
                id="collapseOne"
                class="accordion-collapse collapse show"
                data-bs-parent="#accordionExample"
            >
                <div class="accordion-body">
                    <strong>Answer:</strong> Food License specializes in
                    guiding food businesses through the complex process of
                    obtaining the necessary licenses. We will assist you in
                    understanding the specific requirements for your food
                    business and help you with the application process, ensuring
                    compliance with all relevant regulations.regulations.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                >
                    2. What are the key legal services that you offer to food
                    businesses?
                </button>
            </h2>
            <div
                id="collapseTwo"
                class="accordion-collapse collapse"
                data-bs-parent="#accordionExample"
            >
                <div class="accordion-body">
                    <strong>Answer:</strong> Our legal services encompass a wide
                    range of support, including food licensing, copyrighting,
                    intellectual property protection, and more. We ensure that
                    your food business remains legally compliant and creatively
                    protected, allowing you to focus on your core
                    operations.regulations.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                >
                    3. How does copyrighting benefit my food business?
                </button>
            </h2>
            <div
                id="collapseThree"
                class="accordion-collapse collapse"
                data-bs-parent="#accordionExample"
            >
                <div class="accordion-body">
                    <strong>Answer:</strong> Copyrighting safeguards your
                    creative assets, such as product labels, advertisements, and
                    promotional materials, from unauthorized use. This
                    protection helps maintain your brand's integrity and
                    prevents competitors from using your creative works without
                    permission.regulations.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFour"
                    aria-expanded="false"
                    aria-controls="collapseFour"
                >
                    4. What is the process for protecting my intellectual
                    property through copyrighting with your company?
                </button>
            </h2>
            <div
                id="collapseFour"
                class="accordion-collapse collapse"
                data-bs-parent="#accordionExample"
            >
                <div class="accordion-body">
                    <strong>Answer:</strong> Our experts will guide you through
                    the copyrighting process, including identifying the creative
                    works that need protection, preparing and filing copyright
                    applications, and ensuring your intellectual property is
                    legally secured.regulations.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFifth"
                    aria-expanded="false"
                    aria-controls="collapseFifth"
                >
                    5. Can you explain how my creative works, such as email
                    content, can be safeguarded from misuse or theft?
                </button>
            </h2>
            <div
                id="collapseFifth"
                class="accordion-collapse collapse"
                data-bs-parent="#accordionExample"
            >
                <div class="accordion-body">
                    <strong>Answer:</strong> Through copyrighting, we help
                    protect your email content and other creative works, making
                    it more challenging for others to use them without
                    permission. This legal protection ensures that your
                    marketing materials remain exclusive to your
                    business.regulations.
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

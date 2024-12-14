@extends('admin.layout.main')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Edit Service</h5>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Step 1: Basic Details -->
                <div class="step" id="step-1">
                    <h5 class="my-3">Step 1: Basic Details</h5>
                    
                    <!-- Slug -->
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" id="slug" name="slug" class="form-control" value="{{ old('slug', $service->slug) }}">
                    </div>

                    <!-- Meta Title -->
                    <div class="form-group">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" id="meta_title" name="meta_title" class="form-control" value="{{ old('meta_title', $service->meta_title) }}">
                    </div>

                    <!-- Meta Description -->
                    <div class="form-group">
                        <label for="meta_description">Meta Description</label>
                        <textarea id="meta_description" name="meta_description" class="form-control">{{ old('meta_description', $service->meta_description) }}</textarea>
                    </div>

                    <!-- Header Script -->
                    <div class="form-group">
                        <label for="headerscript">Header Script</label>
                        <textarea id="headerscript" name="headerscript" class="form-control">{{ old('headerscript', $service->headerscript) }}</textarea>
                    </div>

                    <!-- Short Description -->
                    <div class="form-group">
                        <label for="short_description">Short Description</label>
                        <textarea id="short_description" name="short_description" class="form-control">{{ old('short_description', $service->short_description) }}</textarea>
                    </div>
                </div>

                <!-- Step 2: Section 1 -->
                <div class="step d-none" id="step-2">
                    <h5 class="my-3">Step 2: Heading Setup </h5>
                    
                    <div class="form-group">
                        <label for="sec1_heading">Section 1-Heading</label>
                        <input type="text" id="sec1_heading" name="sec1_heading" class="form-control" value="{{ old('sec1_heading', $service->sec1_heading) }}">
                    </div>

                    <div class="form-group">
                        <label for="sec1_description">Section 1-Description</label>
                        <textarea id="sec1_description" name="sec1_description" class="form-control ">{{ old('sec1_description', $service->sec1_description) }}</textarea>
                    </div>

                    <div class="form-group my-3">
                        <label for="sec1_image">Section 1-Image</label>
                        <input type="file" id="sec1_image" name="sec1_image" class="form-control">
                        @if ($service->sec1_image)
                            <img src="{{ asset('storage/' . $service->sec1_image) }}" alt="Section 1 Image" style="max-width: 200px; margin-top: 10px;">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="sec1_heading">Section 2-Heading</label>
                        <input type="text" id="sec2_heading" name="sec2_heading" class="form-control" value="{{ old('sec2_heading', $service->sec2_heading) }}">
                    </div>
                    <div class="form-group">
                        <label for="sec1_heading">Section 3-Heading</label>
                        <input type="text" id="sec3_heading" name="sec3_heading" class="form-control" value="{{ old('sec3_heading', $service->sec3_heading) }}">
                    </div>
                </div>

                <!-- Step 3: Section 2 -->
                <div class="step d-none" id="step-3">
                    <h5 class="my-3">Step 3: Section 2</h5>
                    
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="form-group">
                            <label for="sec2_service{{ $i }}_heading">Service {{ $i }} Heading</label>
                            <input type="text" id="sec2_service{{ $i }}_heading" name="sec2_service{{ $i }}_heading" class="form-control" value="{{ old('sec2_service'.$i.'_heading', $service->{'sec2_service'.$i.'_heading'} ?? '') }}">
                        </div>

                        <div class="form-group">
                            <label for="sec2_service{{ $i }}_description">Service {{ $i }} Description</label>
                            <textarea id="sec2_service{{ $i }}_description" name="sec2_service{{ $i }}_description" class="form-control ">{{ old('sec2_service'.$i.'_description', $service->{'sec2_service'.$i.'_description'} ?? '') }}</textarea>
                        </div>

                        <div class="form-group my-3">
                            <label for="sec2_service{{ $i }}_icon">Service {{ $i }} Icon</label>
                            <input type="file" id="sec2_service{{ $i }}_icon" name="sec2_service{{ $i }}_icon" class="form-control">
                            @if ($service->{'sec2_service'.$i.'_icon'})
                                <img src="{{ asset('storage/' . $service->{'sec2_service'.$i.'_icon'}) }}" alt="Service {{ $i }} Icon" style="max-width: 100px; margin-top: 10px;">
                            @endif
                        </div>
                    @endfor
                </div>

                <!-- Step 4: Section 3 -->
                <div class="step d-none" id="step-4">
                    <h5 class="my-3">Step 4: Section 3</h5>
                    
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="form-group">
                            <label for="sec3_service{{ $i }}_heading">Service {{ $i }} Heading</label>
                            <input type="text" id="sec3_service{{ $i }}_heading" name="sec3_service{{ $i }}_heading" class="form-control" value="{{ old('sec3_service'.$i.'_heading', $service->{'sec3_service'.$i.'_heading'} ?? '') }}">
                        </div>

                        <div class="form-group">
                            <label for="sec3_service{{ $i }}_description">Service {{ $i }} Description</label>
                            <textarea id="sec3_service{{ $i }}_description" name="sec3_service{{ $i }}_description" class="form-control ">{{ old('sec3_service'.$i.'_description', $service->{'sec3_service'.$i.'_description'} ?? '') }}</textarea>
                        </div>

                        <div class="form-group my-3">
                            <label for="sec3_service{{ $i }}_icon">Service {{ $i }} Icon</label>
                            <input type="file" id="sec3_service{{ $i }}_icon" name="sec3_service{{ $i }}_icon" class="form-control">
                            @if ($service->{'sec3_service'.$i.'_icon'})
                                <img src="{{ asset('storage/' . $service->{'sec3_service'.$i.'_icon'}) }}" alt="Service {{ $i }} Icon" style="max-width: 100px; margin-top: 10px;">
                            @endif
                        </div>
                    @endfor
                </div>

                <!-- Step 5: FAQs -->
                <div class="step d-none" id="step-5">
                    <h5 class="mb-4">Step 5: FAQs</h5>
                    
                    <div id="faqs">
                        @foreach ($service->faqs as $faq)
                            <div class="faq-item">
                                <div class="form-group">
                                    <label for="faqs[{{ $loop->index }}][question]">Question</label>
                                    <input type="text" name="faqs[{{ $loop->index }}][question]" value="{{ old('faqs.'.$loop->index.'.question', $faq->question) }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="faqs[{{ $loop->index }}][answer]">Answer</label>
                                    <textarea name="faqs[{{ $loop->index }}][answer]" class="form-control">{{ old('faqs.'.$loop->index.'.answer', $faq->answer) }}</textarea>
                                </div>

                                <button type="button" class="btn btn-danger btn-sm remove-faq my-3">Remove</button>
                            </div>
                        @endforeach
                    </div>

                    <button type="button" id="add-faq" class="btn btn-outline-primary mt-3">Add More</button>
                </div>

                <!-- Navigation Buttons -->
                <div class="d-flex justify-content-between mt-4">
                    <button type="button" id="prevBtn" class="btn btn-secondary d-none">Previous</button>
                    <button type="button" id="nextBtn" class="btn btn-primary">Next</button>
                    <button type="submit" id="submitBtn" class="btn btn-success d-none">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let currentStep = 1;
        const totalSteps = document.querySelectorAll(".step").length;

        const updateStep = () => {
            document.querySelectorAll(".step").forEach((step, index) => {
                step.classList.toggle("d-none", index + 1 !== currentStep);
            });

            document.getElementById("prevBtn").classList.toggle("d-none", currentStep === 1);
            document.getElementById("nextBtn").classList.toggle("d-none", currentStep === totalSteps);
            document.getElementById("submitBtn").classList.toggle("d-none", currentStep !== totalSteps);
        };

        document.getElementById("nextBtn").addEventListener("click", function () {
            if (currentStep < totalSteps) currentStep++;
            updateStep();
        });

        document.getElementById("prevBtn").addEventListener("click", function () {
            if (currentStep > 1) currentStep--;
            updateStep();
        });

        document.getElementById("add-faq").addEventListener("click", function () {
            const faqSection = document.getElementById("faqs");
            const index = faqSection.children.length;
            const faqHtml = `
                <div class="faq-item">
                    <div class="form-group">
                        <label for="faqs[${index}][question]">Question</label>
                        <input type="text" name="faqs[${index}][question]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="faqs[${index}][answer]">Answer</label>
                        <textarea name="faqs[${index}][answer]" class="form-control"></textarea>
                    </div>
                    <button type="button" class="btn btn-danger btn-sm remove-faq">Remove</button>
                </div>`;
            faqSection.insertAdjacentHTML('beforeend', faqHtml);
        });

        document.addEventListener("click", function (e) {
            if (e.target && e.target.classList.contains("remove-faq")) {
                e.target.closest(".faq-item").remove();
            }
        });

        updateStep();
    });
</script>
@endsection

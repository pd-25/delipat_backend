@extends('admin.layout.main')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Create Service</h5>
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

            <form id="stepForm" action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Step 1: Basic Details -->
                <div class="step" id="step-1">
                    <h5 class="my-3">Step 1: Basic Details</h5>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug') }}" required>
                        @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ old('meta_title') }}" required>
                        @error('meta_title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="meta_description">Meta Description</label>
                        <textarea name="meta_description" id="meta_description" class="form-control" required>{{ old('meta_description') }}</textarea>
                        @error('meta_description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="headerscript">Header Script</label>
                        <textarea name="headerscript" id="headerscript" class="form-control">{{ old('headerscript') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="short_description">Short Description</label>
                        <textarea name="short_description" id="short_description" class="form-control">{{ old('short_description') }}</textarea>
                    </div>
                </div>

                <!-- Step 2: Section 1 -->
                <div class="step d-none" id="step-2">
                    <h5 class="my-3">Step 2: </h5>
                    <div class="form-group">
                        <label for="sec1_heading">Section 1-Heading</label>
                        <input type="text" name="sec1_heading" id="sec1_heading" class="form-control" value="{{ old('sec1_heading') }}">
                    </div>
                    <div class="form-group">
                        <label for="sec1_description">Section 1-Description</label>
                        <textarea name="sec1_description" id="sec1_description" class="form-control ">{{ old('sec1_description') }}</textarea>
                    </div>
                    <div class="form-group my-3">
                        <label for="sec1_image">Section 1-Image</label>
                        <input type="file" name="sec1_image" id="sec1_image" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <label for="sec1_heading">Section 2-Heading</label>
                        <input type="text" name="sec2_heading" id="sec2_heading" class="form-control" value="{{ old('sec2_heading') }}">
                    </div>
                    <div class="form-group">
                        <label for="sec1_heading">Section 3-Heading</label>
                        <input type="text" name="sec3_heading" id="sec3_heading" class="form-control" value="{{ old('sec3_heading') }}">
                    </div>
                </div>

                <!-- Step 3: Section 2 -->
                <div class="step d-none" id="step-3">
                    <h5 class="my-3">Step 3: Section 2</h5>
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="card p-2">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="sec2_service{{ $i }}_heading">Service {{ $i }} Heading</label>
                                    <input type="text" name="sec2_service{{ $i }}_heading" id="sec2_service{{ $i }}_heading" class="form-control" value="{{ old('sec2_service' . $i . '_heading') }}">
                                </div>
                                <div class="form-group">
                                    <label for="sec2_service{{ $i }}_description">Service {{ $i }} Description</label>
                                    <textarea name="sec2_service{{ $i }}_description" id="sec2_service{{ $i }}_description" class="form-control ">{{ old('sec2_service' . $i . '_description') }}</textarea>
                                </div>
                                <div class="form-group my-3">
                                    <label for="sec2_service{{ $i }}_icon">Icon</label>
                                    <input type="file" name="sec2_service{{ $i }}_icon" id="sec2_service{{ $i }}_icon" class="form-control-file">
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

                <!-- Step 4: Section 3 -->
                <div class="step d-none" id="step-4">
                    <h5 class="my-3">Step 4: Section 3</h5>
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="card p-2">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="sec3_service{{ $i }}_heading">Service {{ $i }} Heading</label>
                                    <input type="text" name="sec3_service{{ $i }}_heading" id="sec3_service{{ $i }}_heading" class="form-control" value="{{ old('sec3_service' . $i . '_heading') }}">
                                </div>
                                <div class="form-group">
                                    <label for="sec3_service{{ $i }}_description">Service {{ $i }} Description</label>
                                    <textarea name="sec3_service{{ $i }}_description" id="sec3_service{{ $i }}_description" class="form-control ">{{ old('sec3_service' . $i . '_description') }}</textarea>
                                </div>
                                <div class="form-group my-3">
                                    <label for="sec3_service{{ $i }}_icon">Icon</label>
                                    <input type="file" name="sec3_service{{ $i }}_icon" id="sec3_service{{ $i }}_icon" class="form-control-file">
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

                <!-- Step 5: FAQs -->
                <div class="step d-none" id="step-5">
                    <h5 class="my-3">Step 5: FAQs</h5>
                    <div id="faq-section">
                        <div class="faq-item">
                            <div class="form-group">
                                <label for="faqs[0][question]">Question</label>
                                <input type="text" name="faqs[0][question]" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="faqs[0][answer]">Answer</label>
                                <textarea name="faqs[0][answer]" class="form-control"></textarea>
                            </div>
                        </div>
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
            const faqSection = document.getElementById("faq-section");
            const index = faqSection.children.length;
            const faqHtml = `
                <div class="faq-item">
                    <div class="form-group">
                        <label for="faqs[${index}][question]">Question</label>
                        <input type="text" name="faqs[${index}][question]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="faqs[${index}][answer]">Answer</label>
                        <textarea name="faqs[${index}][answer]" class="form-control "></textarea>
                    </div>
                </div>`;
            faqSection.insertAdjacentHTML('beforeend', faqHtml);
        });

       

        updateStep();
    });
</script>
@endsection

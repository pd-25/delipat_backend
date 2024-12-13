@extends('admin.layout.main')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Create Service</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <!-- Slug -->
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug') }}" required>
                    @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Meta Title -->
                <div class="form-group">
                    <label for="meta_title">Meta Title</label>
                    <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ old('meta_title') }}" required>
                    @error('meta_title') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Meta Description -->
                <div class="form-group">
                    <label for="meta_description">Meta Description</label>
                    <textarea name="meta_description" id="meta_description" class="form-control" required>{{ old('meta_description') }}</textarea>
                    @error('meta_description') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Header Script -->
                <div class="form-group">
                    <label for="headerscript">Header Script</label>
                    <textarea name="headerscript" id="headerscript" class="form-control">{{ old('headerscript') }}</textarea>
                </div>

                <!-- Short Description -->
                <div class="form-group">
                    <label for="short_description">Short Description</label>
                    <textarea name="short_description" id="short_description" class="form-control">{{ old('short_description') }}</textarea>
                </div>

                <!-- Section 1 -->
                <div class="card mt-4">
                    <div class="card-header bg-secondary text-white">Section 1</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="sec1_heading">Heading</label>
                            <input type="text" name="sec1_heading" id="sec1_heading" class="form-control" value="{{ old('sec1_heading') }}">
                        </div>
                        <div class="form-group">
                            <label for="sec1_description">Description</label>
                            <textarea name="sec1_description" id="sec1_description" class="form-control summernote">{{ old('sec1_description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="sec1_image">Image</label>
                            <input type="file" name="sec1_image" id="sec1_image" class="form-control-file">
                        </div>
                    </div>
                </div>

                <!-- Section 2 -->
                <div class="card mt-4">
                    <div class="card-header bg-secondary text-white">Section 2</div>
                    <div class="card-body">
                        @for ($i = 1; $i <= 6; $i++)
                            <div class="card m-3 p-2">
                                <div class=''>Service -{{ $i }}</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="sec2_service{{ $i }}_heading">Heading</label>
                                        <input type="text" name="sec2_service{{ $i }}_heading" id="sec2_service{{ $i }}_heading" class="form-control" value="{{ old('sec2_service' . $i . '_heading') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="sec2_service{{ $i }}_description">Description</label>
                                        <textarea name="sec2_service{{ $i }}_description" id="sec2_service{{ $i }}_description" class="form-control summernote">{{ old('sec2_service' . $i . '_description') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="sec2_service{{ $i }}_icon">Icon</label>
                                        <input type="file" name="sec2_service{{ $i }}_icon" id="sec2_service{{ $i }}_icon" class="form-control-file">
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>

                <!-- Section 3 -->
                <div class="card mt-4">
                    <div class="card-header bg-secondary text-white">Section 3</div>
                    <div class="card-body">
                        @for ($i = 1; $i <= 4; $i++)
                        <div class="card m-3 p-2">
                            <div class=''>Service -{{ $i }}</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="sec3_service{{ $i }}_heading">Heading</label>
                                        <input type="text" name="sec3_service{{ $i }}_heading" id="sec3_service{{ $i }}_heading" class="form-control" value="{{ old('sec3_service' . $i . '_heading') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="sec3_service{{ $i }}_description">Description</label>
                                        <textarea name="sec3_service{{ $i }}_description" id="sec3_service{{ $i }}_description" class="form-control summernote">{{ old('sec3_service' . $i . '_description') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="sec3_service{{ $i }}_icon">Icon</label>
                                        <input type="file" name="sec3_service{{ $i }}_icon" id="sec3_service{{ $i }}_icon" class="form-control-file">
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>

                <!-- FAQs -->
                <div class="card mt-4">
                    <div class="card-header bg-secondary text-white">FAQs</div>
                    <div class="card-body" id="faq-section">
                        <div class="faq-item">
                            <div class="form-group">
                                <label for="faqs[0][question]">Question</label>
                                <input type="text" name="faqs[0][question]" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="faqs[0][answer]">Answer</label>
                                <textarea name="faqs[0][answer]" class="form-control summernote"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="button" id="add-faq" class="btn btn-outline-primary mt-3">Add More</button>
                </div>

                <!-- Submit -->
                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-success">Create Service</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let faqIndex = 1;
        const addFaqButton = document.getElementById("add-faq");
        const faqSection = document.getElementById("faq-section");

        addFaqButton.addEventListener("click", function () {
            const faqHtml = `
                <div class="faq-item">
                    <div class="form-group">
                        <label for="faqs[${faqIndex}][question]">Question</label>
                        <input type="text" name="faqs[${faqIndex}][question]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="faqs[${faqIndex}][answer]">Answer</label>
                        <textarea name="faqs[${faqIndex}][answer]" class="form-control summernote"></textarea>
                    </div>
                </div>`;

            const faqDiv = document.createElement("div");
            faqDiv.innerHTML = faqHtml;
            faqSection.appendChild(faqDiv);

            $('.summernote').summernote({
                height: 200
            });

            faqIndex++;
        });

        
    });
</script>
@endsection

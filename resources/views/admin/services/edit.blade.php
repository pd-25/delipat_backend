@extends('admin.layout.main')

@section('content')
<div class="container">
    <h1>Edit Service</h1>
    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

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

        <!-- Section 1 -->
        <h4>Section 1</h4>
        <div class="form-group">
            <label for="sec1_heading">Heading</label>
            <input type="text" id="sec1_heading" name="sec1_heading" class="form-control" value="{{ old('sec1_heading', $service->sec1_heading) }}">
        </div>
        <div class="form-group">
            <label for="sec1_description">Description</label>
            <textarea id="sec1_description" name="sec1_description" class="form-control summernote">{{ old('sec1_description', $service->sec1_description) }}</textarea>
        </div>
        <div class="form-group">
            <label for="sec1_image">Image</label>
            <input type="file" id="sec1_image" name="sec1_image" class="form-control">
            @if ($service->sec1_image)
                <img src="{{ asset('storage/' . $service->sec1_image) }}" alt="Section 1 Image" style="max-width: 200px; margin-top: 10px;">
            @endif
        </div>

        <!-- Section 2 -->
        <h4>Section 2</h4>
        @for ($i = 1; $i <= 6; $i++)
            <div class="form-group">
                <label for="sec2_service{{ $i }}_heading">Service {{ $i }} Heading</label>
                <input type="text" id="sec2_service{{ $i }}_heading" name="sec2_service{{ $i }}_heading" class="form-control" value="{{ old('sec2_service'.$i.'_heading', $service->{'sec2_service'.$i.'_heading'} ?? '') }}">
            </div>
            <div class="form-group">
                <label for="sec2_service{{ $i }}_description">Service {{ $i }} Description</label>
                <textarea id="sec2_service{{ $i }}_description" name="sec2_service{{ $i }}_description" class="form-control summernote">{{ old('sec2_service'.$i.'_description', $service->{'sec2_service'.$i.'_description'} ?? '') }}</textarea>
            </div>
            <div class="form-group">
                <label for="sec2_service{{ $i }}_icon">Service {{ $i }} Icon</label>
                <input type="file" id="sec2_service{{ $i }}_icon" name="sec2_service{{ $i }}_icon" class="form-control">
                @if ($service->{'sec2_service'.$i.'_icon'})
                    <img src="{{ asset('storage/' . $service->{'sec2_service'.$i.'_icon'}) }}" alt="Service {{ $i }} Icon" style="max-width: 100px; margin-top: 10px;">
                @endif
            </div>
        @endfor

        <!-- Section 3 -->
        <h4>Section 3</h4>
        @for ($i = 1; $i <= 4; $i++)
            <div class="form-group">
                <label for="sec3_service{{ $i }}_heading">Service {{ $i }} Heading</label>
                <input type="text" id="sec3_service{{ $i }}_heading" name="sec3_service{{ $i }}_heading" class="form-control" value="{{ old('sec3_service'.$i.'_heading', $service->{'sec3_service'.$i.'_heading'} ?? '') }}">
            </div>
            <div class="form-group">
                <label for="sec3_service{{ $i }}_description">Service {{ $i }} Description</label>
                <textarea id="sec3_service{{ $i }}_description" name="sec3_service{{ $i }}_description" class="form-control summernote">{{ old('sec3_service'.$i.'_description', $service->{'sec3_service'.$i.'_description'} ?? '') }}</textarea>
            </div>
            <div class="form-group">
                <label for="sec3_service{{ $i }}_icon">Service {{ $i }} Icon</label>
                <input type="file" id="sec3_service{{ $i }}_icon" name="sec3_service{{ $i }}_icon" class="form-control">
                @if ($service->{'sec3_service'.$i.'_icon'})
                    <img src="{{ asset('storage/' . $service->{'sec3_service'.$i.'_icon'}) }}" alt="Service {{ $i }} Icon" style="max-width: 100px; margin-top: 10px;">
                @endif
            </div>
        @endfor

        <!-- FAQs -->
        <h4>FAQs</h4>
        <div id="faqs">
            @foreach ($service->faqs as $faq)
                <div class="form-group">
                    <label for="faqs[{{ $loop->index }}][question]">Question</label>
                    <input type="text" name="faqs[{{ $loop->index }}][question]" value="{{ old('faqs.'.$loop->index.'.question', $faq->question) }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="faqs[{{ $loop->index }}][answer]">Answer</label>
                    <textarea name="faqs[{{ $loop->index }}][answer]" class="form-control">{{ old('faqs.'.$loop->index.'.answer', $faq->answer) }}</textarea>
                </div>
            @endforeach
        </div>
        <button type="button" id="add-faq" class="btn btn-outline-primary mt-3">Add More</button>
        
        <template id="faq-template">
            <div>
                <div class="form-group">
                    <label>Question</label>
                    <input type="text" name="faqs[__INDEX__][question]" class="form-control">
                </div>
                <div class="form-group">
                    <label>Answer</label>
                    <textarea name="faqs[__INDEX__][answer]" class="form-control"></textarea>
                </div>
            </div>
        </template>
        
        
        
        <!-- Submit -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Service</button>
        </div>
    </form>
</div>
<script>
   document.addEventListener('DOMContentLoaded', function () {
    let faqIndex = {{ $service->faqs->count() }}; // Start with the current number of FAQs
    const addFaqButton = document.getElementById('add-faq');
    const faqContainer = document.getElementById('faqs');
    const faqTemplate = document.getElementById('faq-template').innerHTML;

    addFaqButton.addEventListener('click', function () {
        const newFaqHtml = faqTemplate.replace(/__INDEX__/g, faqIndex);
        faqContainer.insertAdjacentHTML('beforeend', newFaqHtml);
        faqIndex++;
    });
});

</script>
@endsection

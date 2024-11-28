@extends('admin.layout.main')

@section('title', 'Edit Blog | Dashboard')

@section('content')
    <!-- Bootstrap Card for Blog Edit -->
    <div class="card mt-3">
        <div class="card-header">
            Edit Blog
        </div>
        <div class="card-body">
            <form action="{{ route('case-studies.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Blog Title -->
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}" required>
                </div>

                <!-- Short Description -->
                <div class="form-group mb-3">
                    <label for="short_description" class="form-label">Short Description</label>
                    <input type="text" class="form-control" id="short_description" name="short_description" value="{{ $blog->short_description }}" required>
                </div>

                <!-- Description -->
                <div class="form-group mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4" required>{{ $blog->description }}</textarea>
                </div>

                <!-- Blog Image -->
                <div class="form-group mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @if ($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-thumbnail mt-2" style="max-width: 200px;">
                    @endif
                </div>

                <!-- Tags -->
                <div class="form-group mb-3">
                    <label for="tags" class="form-label">Tags (Comma Separated)</label>
                    <input type="text" class="form-control" id="tags" name="tags[]" value="{{ implode(',', $blog->tags ?? []) }}">
                </div>

                <!-- Meta Title -->
                <div class="form-group mb-3">
                    <label for="meta_title" class="form-label">Meta Title</label>
                    <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ $blog->meta_title }}">
                </div>

                <!-- Meta Description -->
                <div class="form-group mb-3">
                    <label for="meta_description" class="form-label">Meta Description</label>
                    <textarea class="form-control" id="meta_description" name="meta_description" rows="2">{{ $blog->meta_description }}</textarea>
                </div>

                <!-- Header Script -->
                <div class="form-group mb-3">
                    <label for="headerscript" class="form-label">Header Script</label>
                    <textarea class="form-control" id="headerscript" name="headerscript" rows="2">{{ $blog->headerscript }}</textarea>
                </div>

                <!-- FAQs Section -->
                <h5 class="mb-3">FAQs</h5>
                <div id="faq-container">
                    @foreach ($blog->faqs as $index => $faq)
                        <div class="faq-item mb-3" id="faq-{{ $faq->id }}">
                            <input type="hidden" name="faqs[{{ $index }}][id]" value="{{ $faq->id }}">
                            <div class="form-group">
                                <input type="text" class="form-control mb-2" name="faqs[{{ $index }}][question]" value="{{ $faq->question }}" placeholder="Question" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mb-2" name="faqs[{{ $index }}][answer]" rows="2" placeholder="Answer" required>{{ $faq->answer }}</textarea>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm remove-faq" data-id="{{ $faq->id }}">Remove FAQ</button>
                        </div>
                    @endforeach
                </div>
                <button type="button" id="add-faq" class="btn btn-secondary mb-3">Add FAQ</button>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Update Blog</button>
                </div>
                <!-- Submit Button -->
               
            </form>
        </div>
    </div>

    <script>
        let faqIndex = {{ $blog->faqs->count() }};

        // Add new FAQ dynamically
        document.getElementById('add-faq').addEventListener('click', () => {
            const container = document.getElementById('faq-container');
            const newFaq = `
                <div class="faq-item mb-3" id="new-faq-${faqIndex}">
                    <input type="hidden" name="faqs[${faqIndex}][id]">
                    <div class="form-group">
                        <input type="text" class="form-control mb-2" name="faqs[${faqIndex}][question]" placeholder="Question" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control mb-2" name="faqs[${faqIndex}][answer]" placeholder="Answer" rows="2" required></textarea>
                    </div>
                    <button type="button" class="btn btn-danger btn-sm remove-faq" onclick="document.getElementById('new-faq-${faqIndex}').remove();">Remove FAQ</button>
                </div>`;
            container.insertAdjacentHTML('beforeend', newFaq);
            faqIndex++;
        });

        // Remove FAQ dynamically
        document.querySelectorAll('.remove-faq').forEach(button => {
            button.addEventListener('click', function () {
                const id = this.dataset.id;
                if (confirm('Are you sure you want to remove this FAQ?')) {
                    document.getElementById(`faq-${id}`).remove();
                }
            });
        });
    </script>
@endsection

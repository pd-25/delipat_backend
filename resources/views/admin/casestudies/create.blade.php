@extends('admin.layout.main')
@section('title', 'Dashboard | Create Blog')
@section('content')


    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Bootstrap Card -->
    <div class="card mt-3">
        <div class="card-header">
            Blog Creation Form
        </div>
        <div class="card-body">
            <form action="{{ route('case-studies.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>

                <div class="mb-3">
                    <label for="short_description" class="form-label">Short Description</label>
                    <input type="text" class="form-control" id="short_description" name="short_description" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control summernote" id="description" name="description" rows="4" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>

                {{-- <div class="mb-3">
                    <label for="tags" class="form-label">Tags (Comma Separated)</label>
                    <input type="text" class="form-control" id="tags" name="tags[]">
                </div> --}}

                <div class="mb-3">
                    <label for="meta_title" class="form-label">Meta Title</label>
                    <input type="text" class="form-control" id="meta_title" name="meta_title">
                </div>

                <div class="mb-3">
                    <label for="meta_description" class="form-label">Meta Description</label>
                    <textarea class="form-control" id="meta_description" name="meta_description" rows="2"></textarea>
                </div>

                <div class="mb-3">
                    <label for="headerscript" class="form-label">Header Script</label>
                    <textarea class="form-control" id="headerscript" name="headerscript" rows="2"></textarea>
                </div>

                <h5>FAQs</h5>
                <div id="faq-container">
                    <div class="faq-item mb-3">
                        <input type="text" class="form-control mb-2" name="faqs[0][question]" placeholder="Question" >
                        <textarea class="form-control" name="faqs[0][answer]" placeholder="Answer" rows="2" ></textarea>
                    </div>
                </div>
                <button type="button" id="add-faq" class="btn btn-secondary mb-3">Add FAQ</button>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Include SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        let faqIndex = 1;
        document.getElementById('add-faq').addEventListener('click', () => {
            const container = document.getElementById('faq-container');
            const newFaq = `
                <div class="faq-item mb-3">
                    <input type="text" class="form-control mb-2" name="faqs[${faqIndex}][question]" placeholder="Question" required>
                    <textarea class="form-control" name="faqs[${faqIndex}][answer]" placeholder="Answer" rows="2" required></textarea>
                </div>`;
            container.insertAdjacentHTML('beforeend', newFaq);
            faqIndex++;
        });
    </script>
@endsection

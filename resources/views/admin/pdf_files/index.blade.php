@extends('navbar.dashboardleftbar')
@section('content')
<!-- Page Content  -->
<div class="wrapper d-flex align-items-stretch justify-content-center">
    <div id="content" class="p-4 p-md-5 pt-5" style="min-width: 100%;">
        <div class="container">
            @if (session('status'))
                <script type="text/javascript">
                    $(document).ready(function() {
                        toastr.success('{{ session('status') }}');
                    });
                </script>
            @endif

            <div style="width: 100%; display: flex; justify-content: space-between;">
                <div>
                    <h1>Manage Uploaded Files</h1>
                </div>
                <div>
                    <!-- Button to trigger modal -->
                    <button type="button" class="btn btn-secondary mb-3" data-toggle="modal" data-target="#createUploadModal">
                        Upload new pdf
                    </button>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="createUploadModal" tabindex="-1" aria-labelledby="createUploadModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h5 class="modal-title" id="createUploadModalLabel">Upload File</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- Modal Body -->
                        <div class="modal-body">
                            <form action="{{ route('pdf_files.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="pdf">PDF File*</label>
                                    <input type="file" class="form-control" id="pdf" name="pdf" required>
                                </div>
                                <div class="mb-3">
                                    <label for="course" class="form-label">Course Name*</label>
                                    <select class="form-control" id="course" name="course" required>
                                        <option disabled selected>Please select a course</option>
                                        <option value="Management of Information Security">Management of Information Security</option>
                                        <option value="Business Continuity & Disaster Recovery">Business Continuity & Disaster Recovery</option>
                                        <option value="Risk Management">Risk Management</option>
                                        <option value="Control & Audit of Information System">Control & Audit of Information System</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="chapter">Chapter*</label>
                                    <select class="form-control" id="chapter" name="chapter" required>
                                        <option disabled selected>Please select a chapter</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="category">Category*</label>
                                    <select class="form-control" id="category" name="category" required>
                                        <option disabled selected>Please select a category</option>
                                        <option value="Reading Notes">Reading Notes</option>
                                        <option value="Visual Notes">Visual Notes</option>
                                        <option value="Exercise Module">Exercise Module</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-secondary w-100">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div style="overflow-x:auto;" class="w-100">
                <table>
                    <tr>
                        <th scope="col" width="5%">#</th>
                        <th scope="col" width="15%">File Name</th>
                        <th scope="col" width="30%">Course Name</th>
                        <th scope="col" width="10%">Category</th>
                        <!-- <th scope="col">Description</th> -->
                        <!-- <th scope="col" width="10%">Status</th> -->
                        <th scope="col" class="text-center" width="20%">Action</th>
                    </tr>
                    @foreach($pdfFiles as $index => $pdfFile)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td><a href="{{ route('view-pdf', ['filename' => $pdfFile->file_path]) }}" target="_blank" style="color:blue;">{{ $pdfFile->file_name }}</a></td>
                        <td>{{ $pdfFile->course }}</td>
                        <td>{{ $pdfFile->category }}</td>
                        <!-- <td>
                            <form action="{{ route('quizzes.updateStatus', $pdfFile->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <select name="status" class="status-select" onchange="this.className = this.options[this.selectedIndex].className; this.form.submit()">
                                    <option class="enabled" value="enabled" {{ $pdfFile->status == 'enabled' ? 'selected' : '' }}>Enabled</option>
                                    <option class="disabled" value="disabled" {{ $pdfFile->status == 'disabled' ? 'selected' : '' }}>Disabled</option>
                                </select>
                            </form>
                        </td> -->
                        <td class="text-center">
                            <!-- For larger screens (desktop) -->
                            <div class="d-none d-md-block">
                                <!-- <a href="{{ route('quizzes.edit', $pdfFile->id) }}" class="btn btn-sm btn-warning">Edit</a> -->
                                <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteQuizModal{{ $pdfFile->id }}">Delete</a>
                            </div>

                            <!-- For smaller screens (tablet and below) -->
                            <div class="dropdown d-block d-md-none">
                                <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton{{ $pdfFile->id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-cog"></i> <!-- Settings icon -->
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $pdfFile->id }}">
                                    <!-- <a class="dropdown-item" href="{{ route('quizzes.edit', $pdfFile->id) }}">Edit</a> -->
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteQuizModal{{ $pdfFile->id }}">Delete</a>
                                </div>
                            </div>
                        </td>

                        <!-- Delete Quiz Modal -->
                        <div class="modal fade" id="deleteQuizModal{{ $pdfFile->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteQuizModalLabel{{ $pdfFile->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteQuizModalLabel{{ $pdfFile->id }}">Confirm Deletion</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete the file "{{ $pdfFile->file_name }}"?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <form action="{{ route('pdf_files.delete', $pdfFile->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            {{-- <input type="text" value="<?php echo $pdfFile->id ?>" name="id" /> --}}
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
<style>
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2
    }

    .status-select .enabled {
        background-color: yellow;
    }

    .status-select .disabled {
        background-color: red;
    }
</style>

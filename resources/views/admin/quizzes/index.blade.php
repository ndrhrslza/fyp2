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
                    <h1>Manage Quizzes</h1>
                </div>
                <div>
                    <!-- Button to trigger modal -->
                    <button type="button" class="btn btn-secondary mb-3" data-toggle="modal" data-target="#createQuizModal">
                        Create New Quiz
                    </button>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="createQuizModal" tabindex="-1" aria-labelledby="createQuizModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h5 class="modal-title" id="createQuizModalLabel">Create Quiz</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- Modal Body -->
                        <div class="modal-body">
                            <form action="{{ route('quizzes.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="course_name" class="form-label">Course Name(*)</label>
                                    <select class="form-control" id="course_name" name="course_name" required>
                                        <option disabled selected>Please select a course</option>
                                        <option value="Management of Information Security">Management of Information Security</option>
                                        <option value="Business Continuity & Disaster Recovery">Business Continuity & Disaster Recovery</option>
                                        <option value="Risk Management">Risk Management</option>
                                        <option value="Control & Audit of Information System">Control & Audit of Information System</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Quiz Title(*)</label>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Quiz Description (optional)</label>
                                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="passing_score" class="form-label">Passing Score(*)</label>
                                    <input type="number" class="form-control" placeholder="%" id="passing_score" name="passing_score" required>
                                </div>
                                <button type="submit" class="btn btn-secondary w-100">Next</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @if(isset($quizzes) && $quizzes->isNotEmpty())
                <div style="overflow-x:auto;" class="w-100">
                    <table>
                        <tr>
                            <th scope="col" width="5%">#</th>
                            <th scope="col" width="15%">Quiz Title</th>
                            <th scope="col" width="30%">Course Name</th>
                            <!-- <th scope="col">Description</th> -->
                            <th scope="col" width="10%">Status</th>
                            <th scope="col" class="text-center" width="20%">Action</th>
                        </tr>
                        @foreach($quizzes as $index => $quiz)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td><a href="{{ route('quizzes.view', ['courseName' => urlencode($quiz->course_name), 'id' => $quiz->id]) }}" target="_blank" style="color: blue;">{{ $quiz->title }}</a></td>
                            <td>{{ $quiz->course_name }}</td>
                            <td>
                                <form action="{{ route('quizzes.updateStatus', $quiz->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <select name="status" class="status-select" onchange="this.className = this.options[this.selectedIndex].className; this.form.submit()">
                                        <option class="enabled" value="enabled" {{ $quiz->status == 'enabled' ? 'selected' : '' }}>Enabled</option>
                                        <option class="disabled" value="disabled" {{ $quiz->status == 'disabled' ? 'selected' : '' }}>Disabled</option>
                                    </select>
                                </form>
                            </td>
                            <td class="text-center">
                                <!-- For larger screens (desktop) -->
                                <div class="d-none d-md-block">
                                    <a href="{{ route('quizzes.edit', $quiz->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteQuizModal{{ $quiz->id }}">Delete</a>
                                </div>

                                <!-- For smaller screens (tablet and below) -->
                                <div class="dropdown d-block d-md-none">
                                    <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton{{ $quiz->id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-cog"></i> <!-- Settings icon -->
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $quiz->id }}">
                                        <a class="dropdown-item" href="{{ route('quizzes.edit', $quiz->id) }}">Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteQuizModal{{ $quiz->id }}">Delete</a>
                                    </div>
                                </div>
                            </td>

                            <!-- Delete Quiz Modal -->
                            <div class="modal fade" id="deleteQuizModal{{ $quiz->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteQuizModalLabel{{ $quiz->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteQuizModalLabel{{ $quiz->id }}">Confirm Deletion</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete the quiz "{{ $quiz->title }}"?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <form action="{{ route('quizzes.delete', $quiz->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
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
            @else
                <p>No Quiz found.</p>
            @endif
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
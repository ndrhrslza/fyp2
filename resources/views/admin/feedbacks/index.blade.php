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
                    <h1>View Feedbacks</h1>
                </div>
            </div>

            @if(isset($feedbacks) && $feedbacks->isNotEmpty())
                <div style="overflow-x:auto;" class="w-100">
                    <table>
                        <tr>
                            <th scope="col" width="5%">#</th>
                            <th scope="col" width="15%">Name</th>
                            <th scope="col" width="30%">Feedback</th>
                            <th scope="col" width="10%">Date</th>
                            <th scope="col" class="text-center" width="20%">Action</th>
                        </tr>
                        @foreach($feedbacks as $index => $feedback)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $feedback->user->name }}</td>
                            <td>{{ $feedback->feedback }}</td>
                            <td>{{ $feedback->created_at->format('d M Y \a\t h:iA') }}</td>
                            <td class="text-center">
                                <!-- For larger screens (desktop) -->
                                <div class="d-none d-md-block">
                                    <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteFeedbackModal{{ $feedback->id }}">Delete</a>
                                </div>

                                <!-- For smaller screens (tablet and below) -->
                                <div class="dropdown d-block d-md-none">
                                    <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton{{ $feedback->id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-cog"></i> <!-- Settings icon -->
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $feedback->id }}">
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteFeedbackModal{{ $feedback->id }}">Delete</a>
                                    </div>
                                </div>
                            </td>

                            <!-- Delete Feedback Modal -->
                            <div class="modal fade" id="deleteFeedbackModal{{ $feedback->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteFeedbackModalLabel{{ $feedback->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteFeedbackModalLabel{{ $feedback->id }}">Confirm Deletion</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this feedback?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <form action="{{ route('feedbacks.delete', $feedback->id) }}" method="POST">
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
                <p>No feedbacks found.</p>
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
</style>

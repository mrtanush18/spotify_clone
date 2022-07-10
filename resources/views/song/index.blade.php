@extends('layouts.app')

@section('content')

<!-- Modal -->
<div class="modal fade" id="addSongModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add song</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id='AddSongForm' method="POST" enctype='multipart/form-data'>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label>Artwork</label>
                        <input type='file' name='artwork' class='form-control'>
                    </div>
                    <div class="form-group mb-3">
                        <label>Song name</label>
                        <input type='text' name='songname' class='form-control'>
                    </div>
                    <div class="form-group mb-3">
                        <label>Date</label>
                        <input type='text' name='date' class='form-control'>
                    </div>
                    <div class="form-group mb-3">
                        <label>Artists</label>
                        <input type='text' name='artists' class='form-control'>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Adding a new song
                        <a href = '#' data-bs-toggle="modal" data-bs-target="#addSongModal" class='btn btn-primary btn-sm float-end'>Add Song</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

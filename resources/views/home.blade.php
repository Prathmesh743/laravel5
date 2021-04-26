@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" id="upload-image" enctype="multipart/form-data" action="javascript:void(0)">
                        @csrf

                           <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Please enter name">
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                           </div>

                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                           </div>

                           <button type="submit" class="btn btn-primary mt-3" id="send_form">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script>

   
    $(document).ready(function(){

         let form= document.getElementById('upload-image');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name=_token]').val()
            }
        });
    
        $('#send_form').click(function(e){
             e.preventDefault();
             let formData = new FormData(form);
             $.ajax({
                url: "{{ url('/upload-image')}}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response){
                   //------------------------
                      console.log(response);
                   //--------------------------
                },

                error: function(response){
                      console.log(response);
                     // $('#image-input-error').text(response.responseJSON.errors.file);
                 }
            
            
            });

           });
        });

</script>
@endpush

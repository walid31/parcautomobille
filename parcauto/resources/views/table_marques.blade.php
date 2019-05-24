@extends('layoute.barmenu')
@section('content')









     <div class="post">
                
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
				  
                   @foreach($marques as $marques)
                    <div class="col-sm-4">
                      <img class="img-responsive" src="{{asset($marques->logo)}}" alt="Photo">
					  <p>{{$marques->name_marque}}
                    </div>
					  @endforeach
				
                    <!-- /.col -->
                   
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

                 

                </div>
				
            <!-- /.box-body -->

@endsection
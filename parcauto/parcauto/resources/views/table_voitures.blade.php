@extends('layoute.barmenu')
@section('content')
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Table Voitures</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table-responsive index-table table table-bordered table-striped" id="table_voiture">
                    <thead>
                    <tr>
                      <th>code_voiture</th>
                      <th>Matricule</th>
                      <th>modelle</th>
                      <th>type de contrat </th>
                      <th>type de vitesse </th>
                      <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- $assurences hia li b3athnaha men l controlleur -->
                 
					  @foreach($voitures as $voiture)
					      <tr>   
                              <td>{{$voiture->id_voiture}}</td>
                              <td>{{$voiture->matricule}}</td>
						   	  <td>{{$voiture->id_modelle}} </td>
							  <td><?php if($voiture->type_contrat==1) echo "En Location"; else echo "A NOUS";?> </td>
							  <td><?php if($voiture->type_vitesset==1) echo "Automatique"; else echo "Manuel";?> </td>
							  <td ><a class="btn btn-info" href="{{route('editer_voitures',['id'=>$voiture->id_voiture])}}"><i class="fa fa-edit"></i></a>
							        <a class="btn btn-danger" href="{{route('supprimer_voiture',['id'=>$voiture->id_voiture])}}"><i class="fa fa-trash"></i></a>
							        <a class="btn btn-danger" href="{{route('detais_voiture',['id'=>$voiture->id_voiture])}}"><i class="fa fa-trash"></i></a></td>
							</td>
							</tr>
</td>
					    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->

@endsection

@section('scripts')
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
        $('#table_voiture').DataTable();
        } );
    </script>
@endsection            


@section('assets')
            <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
            
@endsection
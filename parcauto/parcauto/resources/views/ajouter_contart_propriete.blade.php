@extends('layoute.barmenu')
 @section('content')

 
 
 
 
 
 
      <!-- SELECT2 EXAMPLE -->
	   <form enctype="multipart/form-data" action={{route('contrat_propriete.store')}} method="post">
	  {{ csrf_field()}}
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Ajouter contrat de propriete </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
		
				 
					
              <div class="form-group">
               <label for="exampleInputEmail1">code Véhicule</label>
                <select class="form-control select2" name='id_voiture' style="width: 100%;">
               	@foreach($voitures as $voitures)
					<option value="{{$voitures->id_voiture}}">{{$voitures->id_voiture}}</option>
				@endforeach  
                </select>
              </div>
			  
			  <div class="form-group">
                <label>Date du contrat de propriete :</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right"  name="date_contrat_propriete "id="reservation">
                </div>
                <!-- /.input group -->
              </div>
		
			  
			   




			 <div class="form-group">
                  <label for="exampleInputEmail1">Discription du contrat  </label>
                  <input type="textarea" class="form-control" id="exampleInputEmail2" name='dis_contrat_propriete' placeholder="Enter plus de détails sur le contrat ">
				 
                </div> 
			
            
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
			  
			 
			     <div class="form-group">
				 
				 
				 
               <label for="exampleInputEmail1">code Fournisseur</label>
                <select class="form-control select2" name='id_fournisseur' style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
			  
			  
			     
			  
			  

			    
			  
					<div class="form-group ">
                  <label for="exampleInputEmail1">Cout de  du Véhicule </label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name='cout_propriet' placeholder="Enter Cout">
                </div>
				
				
				
				
				
			  <div class="form-group">
                  <label for="exampleInputFile">Photo acte de propriete  </label>
                  <input type="file" name='image' id="exampleInputFile">

                  <p class="help-block"> telecharge l'acte de propriete  </p>
                </div>
		
				
				
			  
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        
<div class="box-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
				<button type="reset" class="btn btn-default">Annuller</button>
              </div>        
		</form>
      </div>

 
 
 @endsection('content')



 @extends('layoute.barmenu')
 @section('content')
 			<form>
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Ajouter un Ordre de Mission </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-xs-4">
		
						<div class="form-group">
                         <label for="exampleInputEmail1"> Code Voiture  </label>
                        <select class="form-control select2" name='code_Véhicule' style="width: 100%;">
                          <option selected="selected">c2010</option>
                          <option>123</option>
                          <option>A1234</option>
                 
             
                         </select>
              </div>
			  	  		 
				 	    <div class="form-group">
                <label>Date Debut mission  :</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" name="date_debut_assurence"id="reservation">
                </div>
					</div> 	</div>
			 <div class="col-xs-4">
				<div class="form-group">
                 <label for="exampleInputEmail1"> Nom Prenom conducteur  </label>
                <select class="form-control select2" name='code_Véhicule' style="width: 100%;">
                  <option selected="selected">kartout Romaissa</option>
                  <option>Omar omar </option>
                  <option>ilyas ilyas</option>
                 
             
                 </select>
                </div>
				
				
					 	    <div class="form-group">
                <label>Date Fin prevus mission  :</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" name="date_debut_assurence"id="reservation">
                </div>
                <!-- /.input group -->
              </div>
			  </div>
			  	  
			      <div class="col-xs-4">
			  		 <div class="form-group">
			  
			 	
				<div class="input-group">
                   <label> Description de la Mission:</label>             
                  <input type="text" class="form-control" >
                </div> 
				</div>
				
				
				
					<div class="form-group">
		
				<div class="input-group">
  <label> budger de la Mission:</label>             
                  <input type="text" class="form-control" >
                </div> 
				</div>
				
			
		 </div>
			  
			   <div class="col-xs-4">
		
                <!-- /.input group -->
              </div>
					
					
				
					   <div class="col-xs-4">
				
				
						 
			
				        </div>
	  
			 	   <div class="col-xs-4">				
			
				
			
		 </div>
				
			
					
				
					
				
			
		 </div>
				
           
			
			
            
            
            <!-- /.col -->
     
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        
<div class="box-footer">
                <button type="submit" class="btn btn-primary">Ajouter </button>
				<button type="reset" class="btn btn-default">Annuler</button>
              </div>        
		</form>
      </div>
				
				
 @endsection('content')
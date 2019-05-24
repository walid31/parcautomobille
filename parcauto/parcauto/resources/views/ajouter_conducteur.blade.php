@extends('layoute.barmenu')
 @section('content')
  <form enctype="multipart/form-data" action="" method="post">
	  	  {{ csrf_field()}}
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Ajouter  Conducteur  </h3>

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
                  <label for="exampleInputEmail1">Nom</label>
                  <input type="text" class="form-control" id="exampleInputl" name='adress_assurence' placeholder="Enter Adress">
                </div>
				
				 <div class="form-group">
                  <label for="exampleInputEmail1">Prenom</label>
                  <input type="text" class="form-control" id="exampleInputl" name='adress_assurence' placeholder="Enter Adress">
                </div>
					    <div class="form-group">
                <label>Date Naissance :</label>

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
                  <label for="exampleInputEmail1"> code permis</label>
                  <input type="text" class="form-control" id="exampleInputl" name='adress_assurence' placeholder="Enter Adress">
                </div>
					
				 <div class="form-group">
                 <label for="exampleInputEmail1"> type de permis </label>
                 <input type="text" class="form-control" id="exampleInputl" name='adress_assurence' placeholder="Enter Adress">
                 </div>
				 
				 	    <div class="form-group">
                <label>Date Rejoindre la sosciete  :</label>

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
                  <label for="exampleInputEmail1">Adress agence_assurence</label>
                  <input type="text" class="form-control" id="exampleInputl" name='address_agence_assurence' placeholder="Enter Adress">
                </div>
					   
					
						<div class="form-group">
						 <label for="exampleInputEmail1"> tel</label>
                <div class="input-group">
                  <div class="input-group-addon">  
				  <i class="fa fa-envelope"></i> </div>
                  <input type="text" class="form-control" id="exampleInputEmail1" name='gmail_agence_assurence' placeholder="Enter email">
                </div></div>
			
				 <div class="form-group">
			  				 <label for="exampleInputEmail1"> Email</label>

			 	  
				<div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="">
                </div> 
			</div>
						
		  </div>
		  </div>
        <!-- /.box-body -->
        
<div class="box-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
				<button type="reset" class="btn btn-default">Annuler</button>
              </div>        
		</form>
      </div>
 

 @endsection('content')
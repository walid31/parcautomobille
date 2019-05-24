@extends('layoute.barmenu')
 @section('content')
 				  <form action="" method="POST">
                      {{ csrf_field()}}

                      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Ajouter Client </h3>

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
                  <label for="exampleInputEmail1">Nom Client</label>
                  <input type="text" class="form-control" id="exampleInputl" name='nom_fournisseur' placeholder="Enter nom">
                </div>
					
				
					
						<div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">  
				  <i class="fa fa-envelope"></i> </div>
                  <input type="text" class="form-control" id="exampleInputEmail1" name='gmail_fournisseur' placeholder="Enter email">
                </div>

			
		 </div>
				
           
			
			
            
            </div>
            <!-- /.col -->
            <div class="col-md-6">
			
				 <div class="form-group">
                  <label for="exampleInputEmail1">Adress Client</label>
                  <input type="text" class="form-control" id="exampleInputl" name='adress_fournisseur' placeholder="Enter Adress">
                </div>
			
              <div class="form-group">
			  
			 
				<div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" name="tele_fournisseur" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="">
                </div> 
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
				<button type="reset" class="btn btn-default">Annuler</button>
              </div>        
		</form>
      </div>
				
				
				
				
				
				
			
 @endsection('content')
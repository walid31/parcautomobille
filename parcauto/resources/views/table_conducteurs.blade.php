@extends('layoute.barmenu')
@section('content')


        <div class="col-xs-12">
          
<div class="box-header with-border">
           <div class="box">
               <div class="box-header with-border">
                   <h3 class="box-title">table de conducteurs </h3>
               </div>
			<div class="box-body">
              <table class="table table-bordered  table-hover">
                <thead>
                <tr>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>AGE </th>
                  <th>Type permis</th>
                  <th>Code  permis </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5
                  </td>
                  <td>Win 95+</td>
                  <td>5.5</td>
                  <td>A</td>
                </tr>
				</table>
            </div>
			
			
             </div> 
           </div>
         </div> 
     

@endsection('content')
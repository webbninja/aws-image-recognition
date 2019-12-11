<?php	
	include('config.php');
	if( isset( $_FILES['imageRecognition']['name'] ) )
	{		
		$result = $rekognition->detectLabels([
	    'Image' => 
	    	[ 
	        	'Bytes' => file_get_contents($_FILES['imageRecognition']['tmp_name']),		        	        
	    	],
		]);
		foreach ($result as $key => $detectLabels) {
			break;
		}
		foreach ($detectLabels as $label ) 
        {
            $imageResult[] = (object)array('object' => $label['Name'], 'confidence' => (int)$label['Confidence'] );
        }
	}
?>	
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


<section class="content container">
   <div class="row">
      
      <div class="col-md-12">
         <div class="col-sm p-0">
            <div class="welcome_preface">
               <div class="row">
                  <div class="col-md-12">
                     <h3 class=" text-center">Image Recognition with AWS Rekognition </h3>
                  </div>
                  <div class="col-md-3">
                     <div class="card">
                        <div class="card-header"> Choose Your file</div>
                        <div class="card-body">
                           <form action="" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                 <input type="file" class="form-control-file" name="imageRecognition">
                              </div>
                              <div class="form-groups">
                                 <input type="submit" class="btn btn-primary" value="Recognize This Image">
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-9">
                     <div class="card">
                        <div class="card-header">Image Recognition Result </div>
                        <div class="card-body">
                           <ul>
                              <?php if( !empty($imageResult) ) : foreach( $imageResult as $res ): ?>
		                        <li><?php echo $res->object . ' ('. $res->confidence .'%)';?></li>
		                    <?php endforeach; endif; ;?>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <br>
            </div>
         </div>
      </div>
   </div>
</section>


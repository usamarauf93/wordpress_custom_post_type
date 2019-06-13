<?php get_header();  

?>

    <div class="" id="main-container">
         <section class="nopad">
            <div class="container">
               <div class="alert alert-danger" style="display:none" id="error_div">
                  <button type="button" class="close" data-dismiss="alert">×</button>
               </div>
               <div class="alert alert-success" style="display:none" id="success_div">
                  <button type="button" class="close" data-dismiss="alert">×</button>
               </div>
               <div class="alert alert-info" style="display:none">
                  <button type="button" class="close" data-dismiss="alert">×</button>
               </div>
            </div>
         </section>
         <section>
            <div class="container">
               <ul class="breadcrumb">
                  <li><a href="#" itemprop="url"><span itemprop="name">Home</span></a></li>
                  <li><a href="#" itemprop="url"><span itemprop="name">New Cars</span></a></li>
                  <li><a href="#" itemprop="url"><span itemprop="name">Toyota</span></a></li>
                  <li><a href="#" itemprop="url"><span itemprop="name">Corolla</span></a></li>
                  <li><a href="#" itemprop="url"><span itemprop="name">Altis Grande 1.8</span></a></li>
                  <li><span itemprop="name">Specifications</span></li>
               </ul>
               <h1>Toyota Corolla Altis Grande 1.8 Specifications</h1>
               <div class="row version-specifications">
                  <div class="col-md-6">
                     <div class="mb40">
                        <h2>Dimensions and Weights</h2>
                        <table class="table table-striped table-bordered">
                           <tbody>
                           <?php 

                              $group_fields = acf_get_fields(43);				
                              $fields = get_field_objects();				
                         
                              if( $fields ):?>
                                 <?php foreach($group_fields as $group_field):?>
                                    <?php foreach( $fields as $name => $value ): ?>
                                       <?php   if($name == $group_field['name']):?>
                                          <tr>
                                             <td><b><?php echo $value['label']; ?></b></td>
                                             <td> <?php echo $value['value'].' '. $value['append']; ?></td>
                                          </tr>
                                       <?php  endif; ?>
                                    <?php endforeach; ?>
                                 <?php endforeach; ?>
                              <?php endif; ?>
                              
                           </tbody>
                        </table>
                     </div>
                     <div class="mb40">
                        <h2>Steering</h2>
                        <table class="table table-striped table-bordered">
                           <tbody>
                           <?php 

                              $group_fields = acf_get_fields(63);				
                              $fields = get_field_objects();				

                              if( $fields ):?>
                                 <?php foreach($group_fields as $group_field):?>
                                    <?php foreach( $fields as $name => $value ): ?>
                                       <?php   if($name == $group_field['name']):?>
                                          <tr>
                                             <td><b><?php echo $value['label']; ?></b></td>
                                             <td> <?php echo $value['value'].' '. $value['append']; ?></td>
                                          </tr>
                                       <?php  endif; ?>
                                    <?php endforeach; ?>
                                 <?php endforeach; ?>
                              <?php endif; ?>
                           </tbody>
                        </table>
                     </div>
                     <div class="mb40">
                        <h2>Fuel Economy</h2>
                        <table class="table table-striped table-bordered">
                           <tbody>
                           <?php 

                              $group_fields = acf_get_fields(72);				
                              $fields = get_field_objects();				

                              if( $fields ):?>
                                 <?php foreach($group_fields as $group_field):?>
                                    <?php foreach( $fields as $name => $value ): ?>
                                       <?php   if($name == $group_field['name']):?>
                                          <tr>
                                             <td><b><?php echo $value['label']; ?></b></td>
                                             <td> <?php echo $value['value'].' '. $value['append']; ?></td>
                                          </tr>
                                       <?php  endif; ?>
                                    <?php endforeach; ?>
                                 <?php endforeach; ?>
                              <?php endif; ?>
                           </tbody>
                        </table>
                     </div>
                     <div class="mb40">
                        <h2>Transmission</h2>
                        <table class="table table-striped table-bordered">
                           <tbody>
                           <?php 

                              $group_fields = acf_get_fields(78);				
                              $fields = get_field_objects();				

                              if( $fields ):?>
                                 <?php foreach($group_fields as $group_field):?>
                                    <?php foreach( $fields as $name => $value ): ?>
                                       <?php   if($name == $group_field['name']):?>
                                          <tr>
                                             <td><b><?php echo $value['label']; ?></b></td>
                                             <td> <?php echo $value['value'].' '. $value['append']; ?></td>
                                          </tr>
                                       <?php  endif; ?>
                                    <?php endforeach; ?>
                                 <?php endforeach; ?>
                              <?php endif; ?>
                           </tbody>
                        </table>
                     </div>
                     <div class="mb40">
                        <h2>Performance</h2>
                        <table class="table table-striped table-bordered">
                           <tbody>
                           <?php 

                           $group_fields = acf_get_fields(81);				
                           $fields = get_field_objects();				

                           if( $fields ):?>
                              <?php foreach($group_fields as $group_field):?>
                                 <?php foreach( $fields as $name => $value ): ?>
                                    <?php   if($name == $group_field['name']):?>
                                       <tr>
                                          <td><b><?php echo $value['label']; ?></b></td>
                                          <td> <?php echo $value['value'].' '. $value['append']; ?></td>
                                       </tr>
                                    <?php  endif; ?>
                                 <?php endforeach; ?>
                              <?php endforeach; ?>
                           <?php endif; ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mb40">
                        <h2>Engine</h2>
                        <table class="table table-striped table-bordered">
                           <tbody>
                           <?php 

                              $group_fields = acf_get_fields(52);				
                              $fields = get_field_objects();				

                              if( $fields ):?>
                                 <?php foreach($group_fields as $group_field):?>
                                    <?php foreach( $fields as $name => $value ): ?>
                                       <?php   if($name == $group_field['name']):?>
                                          <tr>
                                             <td><b><?php echo $value['label']; ?></b></td>
                                             <td> <?php echo $value['value'].' '. $value['append']; ?></td>
                                          </tr>
                                       <?php  endif; ?>
                                    <?php endforeach; ?>
                                 <?php endforeach; ?>
                              <?php endif; ?>
                           </tbody>
                        </table>
                     </div>
                     <div class="mb40">
                        <h2>Wheels and Tyres</h2>
                        <table class="table table-striped table-bordered">
                           <tbody>
                           <?php 

$group_fields = acf_get_fields(67);				
$fields = get_field_objects();				

if( $fields ):?>
   <?php foreach($group_fields as $group_field):?>
      <?php foreach( $fields as $name => $value ): ?>
         <?php   if($name == $group_field['name']):?>
            <tr>
               <td><b><?php echo $value['label']; ?></b></td>
               <td> <?php echo $value['value'].' '. $value['append']; ?></td>
            </tr>
         <?php  endif; ?>
      <?php endforeach; ?>
   <?php endforeach; ?>
<?php endif; ?>
                           </tbody>
                        </table>
                     </div>
                     <div class="mb40">
                        <h2>Capacities</h2>
                        <table class="table table-striped table-bordered">
                           <tbody>
                           <?php 

$group_fields = acf_get_fields(75);				
$fields = get_field_objects();				

if( $fields ):?>
   <?php foreach($group_fields as $group_field):?>
      <?php foreach( $fields as $name => $value ): ?>
         <?php   if($name == $group_field['name']):?>
            <tr>
               <td><b><?php echo $value['label']; ?></b></td>
               <td> <?php echo $value['value'].' '. $value['append']; ?></td>
            </tr>
         <?php  endif; ?>
      <?php endforeach; ?>
   <?php endforeach; ?>
<?php endif; ?>
                           </tbody>
                        </table>
                     </div>
                     <div class="mb40">
                        <h2>Suspension</h2>
                        <table class="table table-striped table-bordered">
                           <tbody>
                           <?php 

$group_fields = acf_get_fields(83);				
$fields = get_field_objects();				

if( $fields ):?>
   <?php foreach($group_fields as $group_field):?>
      <?php foreach( $fields as $name => $value ): ?>
         <?php   if($name == $group_field['name']):?>
            <tr>
               <td><b><?php echo $value['label']; ?></b></td>
               <td> <?php echo $value['value'].' '. $value['append']; ?></td>
            </tr>
         <?php  endif; ?>
      <?php endforeach; ?>
   <?php endforeach; ?>
<?php endif; ?>
                           </tbody>
                        </table>
                     </div>
                     <div class="mb40">
                        <h2>Brakes</h2>
                        <table class="table table-striped table-bordered">
                           <tbody>
                           <?php 

                           $group_fields = acf_get_fields(85);				
                           $fields = get_field_objects();				

                           if( $fields ):?>
                              <?php foreach($group_fields as $group_field):?>
                                 <?php foreach( $fields as $name => $value ): ?>
                                    <?php   if($name == $group_field['name']):?>
                                       <tr>
                                          <td><b><?php echo $value['label']; ?></b></td>
                                          <td> <?php echo $value['value'].' '. $value['append']; ?></td>
                                       </tr>
                                    <?php  endif; ?>
                                 <?php endforeach; ?>
                              <?php endforeach; ?>
                           <?php endif; ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
	  
      <?php

get_footer(); ?> 
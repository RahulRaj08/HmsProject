<!DOCTYPE html>
<html>
<head>
  <title> PERSONAL DETAILS</title>
</head>
<body>
<h1 class="underline">Personal Details</h1>
              
              <div class="col-md-6">
			  <div class="form-group">
               <label>Name <span class="astric-error">*</span></label>
                <input type="text" name="vo_name" maxlength="100" value="" class="form-control select2" style="width: 100%;">
                <div class="astric-error"></div> 
              </div>                     
			  </div>
              
              <div class="col-md-6">
			  <div class="form-group">
               <label>Gender <span class="astric-error">*</span></label>
                <select name="vo_gender" style="width:100%" class="form-control select2">
                <option value="">Select</option>
                 <option value="1">Male</option><option value="2">Female</option>                </select>	
                <div class="astric-error"></div> 
              </div>                     
			  </div> 
              
              <div class="clearfix"></div>             
             
 			<div class="col-md-6">
			   <div class="form-group">
               <label>Date of Birth  <span class="astric-error">*</span></label>
                	                <div class="controls input-append date dob_datetime" data-date="2002-01-01" data-date-format="dd/mm/yyyy" data-link-field="dtp_input1">
                    <input size="16" type="text" value="" name="vo_dob" class="form-control" readonly="">
					<span class="add-on"><i class="icon-th"></i></span>
                </div>
                <div class="astric-error"></div> 
              </div> 
             </div> 
             
 			<div class="col-md-6">
			   <div class="form-group">
               <label>Contact Number  <span class="astric-error">*</span></label>
                <input type="text" name="vo_contact1" maxlength="100" value="" class="form-control select2" style="width: 100%;">
                <div class="astric-error"></div> 
              </div> 
             </div>  
			<div class="clearfix"></div>
             
 			<div class="col-md-6">
			   <div class="form-group">
               <label>WhatsApp Number  <span class="astric-error">*</span></label>
                <input type="text" name="vo_contact2" maxlength="100" value="" class="form-control select2" style="width: 100%;">
                <div class="astric-error"></div> 
              </div> 
             </div> 
              <div class="col-md-6">
			  <div class="form-group">
               <label>Religion</label>
                <select name="vo_religion" style="width:100%" class="form-control select2">
                <option value="">Select</option>
                 <option value="1">Hindu</option><option value="2">Islam</option><option value="3">Christian</option><option value="4">Others</option>                </select>	
                <div class="astric-error"></div> 
              </div>                     
			  </div>    
			<div class="clearfix"></div>
                                                               
             
              <div class="col-md-6">
			  <div class="form-group">
               <label>Community <span class="astric-error">*</span></label>
                <select name="vo_community" style="width:100%" class="form-control select2">
                <option value="">Select</option>
                <option value="1">SC</option><option value="2">ST</option><option value="3">OBC</option><option value="4">GENERAL</option>                </select> 
                <div class="astric-error"></div> 
              </div>                     
        </div> 
              <div class="col-md-6">
        <div class="form-group">
               <label>Blood Group <span class="astric-error">*</span></label>
                <select name="vo_blood_group" style="width:100%" class="form-control select2">
                <option value="">Select</option>
                 <option value="1">AB +ve</option><option value="2">AB -ve</option><option value="3">A +ve</option><option value="4">A -ve</option><option value="5">B +ve</option><option value="6">B -ve</option><option value="7">O +ve</option><option value="8">O -ve</option>                </select>  
                <div class="astric-error"></div> 
              </div>                     
        </div>   
      <div class="clearfix"></div>
              
              
      <div class="col-md-6">
         <div class="form-group">
               <label>Height  <span class="astric-error">*</span></label>
                <input type="text" name="vo_height" maxlength="100" value="" class="form-control select2" style="width: 100%;">
                <div class="astric-error"></div> 
              </div> 
             </div>  
        <div class="col-md-6">
         <div class="form-group">
               <label>Weight  <span class="astric-error">*</span></label>
                <input type="text" name="vo_weight" maxlength="100" value="" class="form-control select2" style="width: 100%;">
                <div class="astric-error"></div> 
              </div> 
               </div>
      <div class="clearfix"></div>
              
                <div class="col-md-6">
        <div class="form-group">
               <label>District <span class="astric-error">*</span></label>
                           
                <select name="DISTRICT_ID" id="DISTRICT_ID" style="width:100%" class="form-control select2" onchange="showTaluks(this.value);">
                 <option value="">Select</option>
               <option value="2">Alappuzha</option><option value="1">Ernakulam</option><option value="3">Idukki</option><option value="4">Kannur</option><option value="5">Kasaragod</option><option value="6">Kollam</option><option value="7">Kottayam</option><option value="8">Kozhikode</option><option value="9">Malappuram</option><option value="10">Palakkad</option><option value="11">Pathanamthitta</option><option value="12">Thiruvananthapuram </option><option value="13">Thrissur</option><option value="14">Wayanad</option>                </select>                
                <div class="astric-error"></div> 
              </div>    
              </div>
      <div class="col-md-6">
         <div class="form-group">
               <label>Pincode  <span class="astric-error">*</span></label>
                <input type="text" name="vo_pincode" maxlength="100" value="" class="form-control select2" style="width: 100%;">
                <div class="astric-error"></div> 
              </div> 
             </div>  
      <div class="clearfix"></div>
             
      <div class="col-md-6">
         <div class="form-group">
               <label>Name of Parent / Guardian  <span class="astric-error">*</span></label>
                <input type="text" name="vo_parent_name" maxlength="100" value="" class="form-control select2" style="width: 100%;">
                <div class="astric-error"></div> 
              </div> 
             </div> 
      <div class="col-md-6">
         <div class="form-group">
               <label>Parent's Contact Number  <span class="astric-error">*</span></label>
                <input type="text" name="vo_parent_contact1" maxlength="100" value="" class="form-control select2" style="width: 100%;">
                <div class="astric-error"></div> 
              </div> 
             </div>  
      <div class="clearfix"></div>
             <div class="col-md-6">
         <div class="form-group">
               <label>Parent's Contact Number1</label>
                <input type="text" name="vo_parent_contact2" maxlength="100" value="" class="form-control select2" style="width: 100%;">
                <div class="astric-error"></div> 
              </div> 
             </div> 
             <div class="col-md-6">
        <div class="form-group">
               <label>Permanent Address <span class="astric-error">*</span></label>
                <textarea name="vo_address" style="width:100%;height:110px;" rows="4" class="form-control select2"></textarea>                <div class="astric-error"></div> 
              </div>
              </div>
      <div class="clearfix"></div>
              
        <div class="col-md-6">
        <div class="form-group">
               <label>Contact Address <span class="astric-error">*</span></label>
                <textarea name="vo_address1" style="width:100%;height:110px;" rows="4" class="form-control select2"></textarea>                <div class="astric-error"></div> 
              </div>
              </div> 
             <div class="col-md-6">
        <div class="form-group">
               <label>Photo <span class="astric-error">*</span></label>
                <input type="file" name="photo" size="30" class="form-control select2">
                <div>
                Maximum Size : 500Kb, Image Dimension : 200W X 250H pixel, Image Type : JPG
                </div>                 
              </div>   
             </div>
      <div class="clearfix"></div>
             
             
            <div class="col-md-6"> 
      <div class="form-group">
               <label>Signature <span class="astric-error">*</span></label>
                <input type="file" name="signature" size="30" class="form-control select2">
                <div>
                Maximum Size : 300Kb, Image Dimension : 200W X 100H pixel, Image Type : JPG
                </div>
              </div>                                                                         
            </div>  
        <div class="col-md-6">
        <div class="form-group">
               
              <div class="astric-error"></div> 
              </div>
              </div>               
      <div class="clearfix"></div>
             
          

</body>
</html>